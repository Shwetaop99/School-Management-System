<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherAttendance;
use Illuminate\Http\Request;

class TeacherAttendanceController extends Controller
{
    /**
     * Display teacher attendance.
     */
    public function index(Request $request)
    {
        $date = $request->input(
            'date',
            now()->toDateString()
        );

        $teachers = Teacher::orderBy('first_name')
            ->orderBy('last_name')
            ->get();

        $attendanceRecords = TeacherAttendance::where(
            'attendance_date',
            $date
        )
            ->get()
            ->keyBy('teacher_id');

        return view(
            'admin.teachers.attendance',
            compact(
                'teachers',
                'attendanceRecords',
                'date'
            )
        );
    }

    /**
     * Store or update teacher attendance manually.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'attendance_date' => [
                'required',
                'date',
            ],

            'attendance' => [
                'required',
                'array',
            ],

            'attendance.*.status' => [
                'required',
                'in:present,absent,leave,half_day',
            ],

            'attendance.*.remarks' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);

        foreach (
            $validated['attendance'] as $teacherId => $data
        ) {
            TeacherAttendance::updateOrCreate(
                [
                    'teacher_id' => $teacherId,
                    'attendance_date' => $validated['attendance_date'],
                ],
                [
                    'status' => $data['status'],
                    'remarks' => $data['remarks'] ?? null,
                ]
            );
        }

        return redirect()
            ->route('admin.teachers.attendance')
            ->with(
                'success',
                'Teacher attendance saved successfully!'
            );
    }

    /**
     * Mark teacher attendance through QR scanner.
     */
    public function scan(Request $request)
    {
        $validated = $request->validate([
            'teacher_id' => [
                'required',
                'string',
                'exists:teachers,teacher_id',
            ],

            'attendance_date' => [
                'required',
                'date',
            ],
        ]);

        $teacher = Teacher::where(
            'teacher_id',
            $validated['teacher_id']
        )->first();

        if (!$teacher) {
            return response()->json([
                'success' => false,
                'message' => 'Teacher not found.',
            ], 404);
        }

        $attendance = TeacherAttendance::where(
            'teacher_id',
            $teacher->id
        )
            ->where(
                'attendance_date',
                $validated['attendance_date']
            )
            ->first();

        /**
         * Prevent duplicate attendance.
         */
        if ($attendance) {
            return response()->json([
                'success' => false,
                'already_marked' => true,
                'message' => 'Attendance already marked for this teacher today.',

                'teacher' => [
                    'id' => $teacher->id,
                    'teacher_id' => $teacher->teacher_id,
                    'name' => trim(
                        $teacher->first_name . ' ' .
                        $teacher->last_name
                    ),
                ],

                'attendance' => [
                    'status' => $attendance->status,
                    'remarks' => $attendance->remarks,
                ],
            ], 409);
        }

        /**
         * Create PRESENT attendance.
         */
        $attendance = TeacherAttendance::create([
            'teacher_id' => $teacher->id,
            'attendance_date' => $validated['attendance_date'],
            'status' => 'present',
            'remarks' => 'Marked through QR scanner',
        ]);

        return response()->json([
            'success' => true,
            'already_marked' => false,
            'message' => 'Attendance marked successfully!',

            'teacher' => [
                'id' => $teacher->id,
                'teacher_id' => $teacher->teacher_id,
                'name' => trim(
                    $teacher->first_name . ' ' .
                    $teacher->last_name
                ),
            ],

            'attendance' => [
                'status' => $attendance->status,
                'date' => $attendance->attendance_date,
            ],
        ]);
    }
}

