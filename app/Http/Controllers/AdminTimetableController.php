<?php

namespace App\Http\Controllers;

use App\Models\Timetable\ClassModel;
use App\Models\Timetable\Division;
use App\Models\Timetable\Teacher;
use App\Models\Timetable\Subject;
use App\Models\Timetable\Timetable;
use App\Models\Timetable\TimetableSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminTimetableController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | TIMETABLE MANAGEMENT
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {
        $classes = ClassModel::where('status', true)
            ->orderBy('name')
            ->get();

        $sections = Division::where('status', true)
            ->orderBy('class_id')
            ->orderBy('name')
            ->get();

        $teachersCount = Teacher::where('status', true)->count();

        $subjectsCount = Subject::where('status', true)->count();

        $timetablesCount = Timetable::where('status', true)->count();

        $selectedClassId = $request->integer('class_id');

        $selectedSectionId = $request->integer('section_id');

        $academicYear = trim(
            (string) $request->input('academic_year', '')
        );

        $showTimetable =
            $selectedClassId > 0 &&
            $selectedSectionId > 0 &&
            $academicYear !== '';

        $slots = TimetableSlot::where('status', true)
            ->orderBy('sort_order')
            ->get();

        $timetable = collect();

        if ($showTimetable) {

            $sectionBelongsToClass = Division::where('id', $selectedSectionId)
                ->where('class_id', $selectedClassId)
                ->where('status', true)
                ->exists();

            if ($sectionBelongsToClass) {

                $timetable = Timetable::with([
                    'classModel',
                    'division',
                    'subject',
                    'teacher',
                    'slot',
                ])
                    ->where('class_id', $selectedClassId)
                    ->where('section_id', $selectedSectionId)
                    ->where('academic_year', $academicYear)
                    ->where('status', true)
                    ->orderBy('slot_id')
                    ->orderBy('day')
                    ->orderBy('start_time')
                    ->get();

            } else {

                $selectedSectionId = 0;

                $showTimetable = false;
            }
        }

        /*
        |--------------------------------------------------------------------------
        | BUILD FAST LOOKUP FOR BLADE
        |--------------------------------------------------------------------------
        */

        $timetableLookup = [];

        foreach ($timetable as $entry) {

            if (! $entry->slot_id) {
                continue;
            }

            $key = $entry->day . '_' . $entry->slot_id;

            $timetableLookup[$key] = $entry;
        }

        return view(
            'admin.timetable.timetable',
            compact(
                'classes',
                'sections',
                'teachersCount',
                'subjectsCount',
                'timetablesCount',
                'selectedClassId',
                'selectedSectionId',
                'academicYear',
                'showTimetable',
                'timetable',
                'timetableLookup',
                'slots'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CREATE / EDIT TIMETABLE PAGE
    |--------------------------------------------------------------------------
    */

    public function create(Request $request)
    {
        $classes = ClassModel::where('status', true)
            ->orderBy('name')
            ->get();

        $teachers = Teacher::where('status', true)
            ->orderBy('name')
            ->get();

        $subjects = Subject::where('status', true)
            ->orderBy('name')
            ->get();

        $sections = Division::where('status', true)
            ->with('classModel')
            ->orderBy('class_id')
            ->orderBy('name')
            ->get();

        $slots = TimetableSlot::where('status', true)
            ->orderBy('sort_order')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | SELECTED VALUES
        |--------------------------------------------------------------------------
        */

        $selectedClassId = $request->integer('class_id');

        $selectedSectionId = $request->integer('section_id');

        $academicYear = trim(
            (string) $request->input('academic_year', '')
        );

        /*
        |--------------------------------------------------------------------------
        | EDIT MODE
        |--------------------------------------------------------------------------
        */

        $editing =
            $selectedClassId > 0 &&
            $selectedSectionId > 0 &&
            $academicYear !== '';

        $timetableLookup = [];

        if ($editing) {

            /*
            |--------------------------------------------------------------------------
            | VERIFY SECTION BELONGS TO CLASS
            |--------------------------------------------------------------------------
            */

            $sectionExists = Division::where('id', $selectedSectionId)
                ->where('class_id', $selectedClassId)
                ->where('status', true)
                ->exists();

            if ($sectionExists) {

                /*
                |--------------------------------------------------------------------------
                | LOAD EXISTING TIMETABLE
                |--------------------------------------------------------------------------
                */

                $timetable = Timetable::with([
                    'subject',
                    'teacher',
                    'slot',
                ])
                    ->where('class_id', $selectedClassId)
                    ->where('section_id', $selectedSectionId)
                    ->where('academic_year', $academicYear)
                    ->where('status', true)
                    ->get();

                /*
                |--------------------------------------------------------------------------
                | CREATE FAST LOOKUP
                |--------------------------------------------------------------------------
                */

                foreach ($timetable as $entry) {

                    if (! $entry->slot_id) {
                        continue;
                    }

                    $key =
                        $entry->day .
                        '_' .
                        $entry->slot_id;

                    $timetableLookup[$key] = $entry;
                }

            } else {

                $selectedSectionId = 0;

                $editing = false;
            }
        }

        return view(
            'admin.timetable.create',
            compact(
                'classes',
                'teachers',
                'subjects',
                'sections',
                'slots',
                'selectedClassId',
                'selectedSectionId',
                'academicYear',
                'editing',
                'timetableLookup'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | STORE / UPDATE COMPLETE WEEKLY TIMETABLE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'class_id' => [
                'required',
                'integer',
                'exists:classes,id',
            ],

            'section_id' => [
                'required',
                'integer',
                'exists:sections,id',
            ],

            'academic_year' => [
                'required',
                'string',
                'max:20',
            ],

            'entries' => [
                'nullable',
                'array',
            ],
        ]);


        /*
        |--------------------------------------------------------------------------
        | VERIFY CLASS
        |--------------------------------------------------------------------------
        */

        $class = ClassModel::where('id', $validated['class_id'])
            ->where('status', true)
            ->first();

        if (! $class) {

            return back()
                ->withErrors([
                    'class_id' => 'The selected class is not active.',
                ])
                ->withInput();
        }


        /*
        |--------------------------------------------------------------------------
        | VERIFY SECTION
        |--------------------------------------------------------------------------
        */

        $section = Division::where('id', $validated['section_id'])
            ->where('class_id', $validated['class_id'])
            ->where('status', true)
            ->first();

        if (! $section) {

            return back()
                ->withErrors([
                    'section_id' =>
                        'The selected division does not belong to the selected class.',
                ])
                ->withInput();
        }


        /*
        |--------------------------------------------------------------------------
        | VALID DAYS
        |--------------------------------------------------------------------------
        */

        $days = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
        ];


        /*
        |--------------------------------------------------------------------------
        | LOAD ACTIVE SLOTS
        |--------------------------------------------------------------------------
        */

        $slots = TimetableSlot::where('status', true)
            ->get()
            ->keyBy('id');


        /*
        |--------------------------------------------------------------------------
        | LOAD SUBJECT IDS
        |--------------------------------------------------------------------------
        */

        $subjectIds = collect($request->input('entries', []))
            ->flatMap(function ($slotEntries) {

                return collect($slotEntries)
                    ->pluck('subject_id')
                    ->filter()
                    ->values();

            })
            ->unique()
            ->values();


        /*
        |--------------------------------------------------------------------------
        | LOAD TEACHER IDS
        |--------------------------------------------------------------------------
        */

        $teacherIds = collect($request->input('entries', []))
            ->flatMap(function ($slotEntries) {

                return collect($slotEntries)
                    ->pluck('teacher_id')
                    ->filter()
                    ->values();

            })
            ->unique()
            ->values();


        /*
        |--------------------------------------------------------------------------
        | LOAD ACTIVE SUBJECTS
        |--------------------------------------------------------------------------
        */

        $subjects = Subject::where('status', true)
            ->whereIn('id', $subjectIds)
            ->get()
            ->keyBy('id');


        /*
        |--------------------------------------------------------------------------
        | LOAD ACTIVE TEACHERS
        |--------------------------------------------------------------------------
        */

        $teachers = Teacher::where('status', true)
            ->whereIn('id', $teacherIds)
            ->get()
            ->keyBy('id');


        $entries = $request->input('entries', []);

        $savedCount = 0;


        /*
        |--------------------------------------------------------------------------
        | DATABASE TRANSACTION
        |--------------------------------------------------------------------------
        */

        DB::transaction(function () use (
            $entries,
            $slots,
            $days,
            $validated,
            $subjects,
            $teachers,
            &$savedCount
        ) {

            foreach ($entries as $slotId => $dayEntries) {

                if (! isset($slots[$slotId])) {
                    continue;
                }

                $slot = $slots[$slotId];


                /*
                |--------------------------------------------------------------------------
                | SKIP BREAK / LUNCH
                |--------------------------------------------------------------------------
                */

                if (in_array(
                    $slot->type,
                    ['break', 'lunch'],
                    true
                )) {
                    continue;
                }


                foreach ($days as $day) {

                    $entry = $dayEntries[$day] ?? [];

                    if (! is_array($entry)) {
                        continue;
                    }


                    $subjectId =
                        ! empty($entry['subject_id'])
                            ? (int) $entry['subject_id']
                            : null;


                    $teacherId =
                        ! empty($entry['teacher_id'])
                            ? (int) $entry['teacher_id']
                            : null;


                    $room =
                        isset($entry['room'])
                            ? trim((string) $entry['room'])
                            : null;


                    /*
                    |--------------------------------------------------------------------------
                    | EMPTY CELL
                    |--------------------------------------------------------------------------
                    */

                    if (! $subjectId && ! $teacherId && ! $room) {

                        Timetable::where(
                            'class_id',
                            $validated['class_id']
                        )
                            ->where(
                                'section_id',
                                $validated['section_id']
                            )
                            ->where(
                                'academic_year',
                                $validated['academic_year']
                            )
                            ->where(
                                'slot_id',
                                $slot->id
                            )
                            ->where(
                                'day',
                                $day
                            )
                            ->delete();

                        continue;
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | VALIDATE SUBJECT
                    |--------------------------------------------------------------------------
                    */

                    if (! $subjectId || ! isset($subjects[$subjectId])) {

                        throw \Illuminate\Validation\ValidationException::withMessages([
                            "entries.$slotId.$day.subject_id" =>
                                "Please select a valid subject for $day.",
                        ]);
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | VALIDATE TEACHER
                    |--------------------------------------------------------------------------
                    */

                    if (! $teacherId || ! isset($teachers[$teacherId])) {

                        throw \Illuminate\Validation\ValidationException::withMessages([
                            "entries.$slotId.$day.teacher_id" =>
                                "Please select a valid teacher for $day.",
                        ]);
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | CREATE / UPDATE TIMETABLE
                    |--------------------------------------------------------------------------
                    */

                    Timetable::updateOrCreate(
                        [
                            'class_id' =>
                                $validated['class_id'],

                            'section_id' =>
                                $validated['section_id'],

                            'academic_year' =>
                                $validated['academic_year'],

                            'day' =>
                                $day,

                            'slot_id' =>
                                $slot->id,
                        ],
                        [
                            'subject_id' =>
                                $subjectId,

                            'teacher_id' =>
                                $teacherId,

                            'start_time' =>
                                $slot->start_time,

                            'end_time' =>
                                $slot->end_time,

                            'room' =>
                                $room ?: null,

                            'type' =>
                                'period',

                            'status' =>
                                true,
                        ]
                    );

                    $savedCount++;
                }
            }
        });


        /*
        |--------------------------------------------------------------------------
        | REDIRECT
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route(
                'admintimetable',
                [
                    'class_id' =>
                        $validated['class_id'],

                    'section_id' =>
                        $validated['section_id'],

                    'academic_year' =>
                        $validated['academic_year'],
                ]
            )
            ->with(
                'success',
                $savedCount > 0
                    ? "Weekly timetable saved successfully. $savedCount period(s) saved."
                    : 'Timetable saved successfully.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | VIEW TIMETABLE
    |--------------------------------------------------------------------------
    */

    public function view(Request $request)
    {
        $request->validate([
            'class_id' => [
                'required',
                'integer',
                'exists:classes,id',
            ],

            'section_id' => [
                'required',
                'integer',
                'exists:sections,id',
            ],
        ]);


        $classId = $request->integer('class_id');

        $sectionId = $request->integer('section_id');


        $class = ClassModel::where('id', $classId)
            ->where('status', true)
            ->firstOrFail();


        $section = Division::where('id', $sectionId)
            ->where('class_id', $classId)
            ->where('status', true)
            ->firstOrFail();


        $slots = TimetableSlot::where('status', true)
            ->orderBy('sort_order')
            ->get();


        $timetable = Timetable::with([
            'subject',
            'teacher',
            'slot',
        ])
            ->where('class_id', $classId)
            ->where('section_id', $sectionId)
            ->where('status', true)
            ->get();


        $timetableLookup = [];


        foreach ($timetable as $entry) {

            if (! $entry->slot_id) {
                continue;
            }

            $key =
                $entry->day .
                '_' .
                $entry->slot_id;

            $timetableLookup[$key] = $entry;
        }


        return view(
            'admin.timetable.view',
            compact(
                'class',
                'section',
                'slots',
                'timetable',
                'timetableLookup'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | DOWNLOAD TIMETABLE PDF
    |--------------------------------------------------------------------------
    */

    public function pdf(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDATE REQUEST
        |--------------------------------------------------------------------------
        */

        $validated = $request->validate([
            'class_id' => [
                'required',
                'integer',
                'exists:classes,id',
            ],

            'section_id' => [
                'required',
                'integer',
                'exists:sections,id',
            ],

            'academic_year' => [
                'required',
                'string',
                'max:20',
            ],
        ]);


        $classId = (int) $validated['class_id'];

        $sectionId = (int) $validated['section_id'];

        $academicYear = trim(
            $validated['academic_year']
        );


        /*
        |--------------------------------------------------------------------------
        | GET ACTIVE CLASS
        |--------------------------------------------------------------------------
        */

        $class = ClassModel::where('id', $classId)
            ->where('status', true)
            ->firstOrFail();


        /*
        |--------------------------------------------------------------------------
        | GET ACTIVE SECTION
        |--------------------------------------------------------------------------
        */

        $section = Division::where('id', $sectionId)
            ->where('class_id', $classId)
            ->where('status', true)
            ->firstOrFail();


        /*
        |--------------------------------------------------------------------------
        | GET ACTIVE SLOTS
        |--------------------------------------------------------------------------
        */

        $slots = TimetableSlot::where('status', true)
            ->orderBy('sort_order')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | GET TIMETABLE
        |--------------------------------------------------------------------------
        */

        $timetable = Timetable::with([
            'subject',
            'teacher',
            'slot',
        ])
            ->where('class_id', $classId)
            ->where('section_id', $sectionId)
            ->where('academic_year', $academicYear)
            ->where('status', true)
            ->orderBy('slot_id')
            ->orderBy('day')
            ->orderBy('start_time')
            ->get();


        /*
        |--------------------------------------------------------------------------
        | BUILD LOOKUP
        |--------------------------------------------------------------------------
        */

        $timetableLookup = [];


        foreach ($timetable as $entry) {

            if (! $entry->slot_id) {
                continue;
            }

            $key =
                $entry->day .
                '_' .
                $entry->slot_id;

            $timetableLookup[$key] = $entry;
        }


        /*
        |--------------------------------------------------------------------------
        | GENERATE PDF
        |--------------------------------------------------------------------------
        */

        $pdf = Pdf::loadView(
            'admin.timetable.pdf',
            compact(
                'class',
                'section',
                'slots',
                'timetable',
                'timetableLookup',
                'academicYear'
            )
        );


        /*
        |--------------------------------------------------------------------------
        | A4 LANDSCAPE
        |--------------------------------------------------------------------------
        */

        $pdf->setPaper(
            'A4',
            'landscape'
        );


        /*
        |--------------------------------------------------------------------------
        | SAFE FILE NAME
        |--------------------------------------------------------------------------
        */

        $className = preg_replace(
            '/[^A-Za-z0-9_-]/',
            '-',
            $class->name
        );

        $sectionName = preg_replace(
            '/[^A-Za-z0-9_-]/',
            '-',
            $section->name
        );

        $yearName = preg_replace(
            '/[^A-Za-z0-9_-]/',
            '-',
            $academicYear
        );


        $fileName =
            'timetable-' .
            $className .
            '-' .
            $sectionName .
            '-' .
            $yearName .
            '.pdf';


        /*
        |--------------------------------------------------------------------------
        | DOWNLOAD
        |--------------------------------------------------------------------------
        */

        return $pdf->download($fileName);
    }
}