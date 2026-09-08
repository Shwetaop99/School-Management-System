<?php

namespace App\Http\Controllers;

use App\Models\ClassTeacherAssignment;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassTeacherAssignmentController extends Controller
{
    /**
     * Display all class teacher assignments.
     */
    public function index()
    {
        $assignments = ClassTeacherAssignment::with('teacher')
            ->latest()
            ->get();

        return view(
            'admin.teachers.assign-class-index',
            compact('assignments')
        );
    }

    /**
     * Show assign class teacher form.
     */
    public function create()
    {
        $teachers = Teacher::where('status', 'active')
            ->orderBy('first_name')
            ->get();

        return view(
            'admin.teachers.class-teacher-create',
            compact('teachers')
        );
    }

    /**
     * Store class teacher assignment.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'teacher_id' => [
                'required',
                'exists:teachers,id',
            ],

            'class_name' => [
                'required',
                'string',
                'max:50',
            ],

            'section' => [
                'required',
                'string',
                'max:20',
            ],

            'academic_year' => [
                'required',
                'string',
                'max:20',
            ],
        ]);

        ClassTeacherAssignment::create([
            'teacher_id' => $validated['teacher_id'],
            'class_name' => $validated['class_name'],
            'section' => $validated['section'],
            'academic_year' => $validated['academic_year'],
            'status' => true,
        ]);

        return redirect()
            ->route('admin.class-teacher-assignments.index')
            ->with(
                'success',
                'Class teacher assigned successfully.'
            );
    }

    /**
     * Delete assignment.
     */
    public function destroy(
        ClassTeacherAssignment $classTeacherAssignment
    ) {
        $classTeacherAssignment->delete();

        return redirect()
            ->route('admin.class-teacher-assignments.index')
            ->with(
                'success',
                'Class teacher assignment removed successfully.'
            );
    }
}