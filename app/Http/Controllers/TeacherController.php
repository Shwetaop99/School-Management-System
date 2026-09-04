<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\ClassTeacherAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{
    /**
     * Display a listing of teachers.
     */
    public function index(Request $request)
    {
        $query = Teacher::query();

        // Search
        if ($request->filled('search')) {
            $search = trim($request->search);

            $query->where(function ($q) use ($search) {
                $q->where('teacher_id', 'like', "%{$search}%")
                    ->orWhere('first_name', 'like', "%{$search}%")
                    ->orWhere('last_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%")
                    ->orWhere('qualification', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        // Pagination
        $teachers = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        // Statistics
        $totalTeachers = Teacher::count();

        $activeTeachers = Teacher::where('status', 'active')->count();

        $inactiveTeachers = Teacher::where('status', 'inactive')->count();

        // Class teacher assignments count
        $classTeacherCount = ClassTeacherAssignment::count();

        return view('admin.teachers.index', compact(
            'teachers',
            'totalTeachers',
            'activeTeachers',
            'inactiveTeachers',
            'classTeacherCount'
        ));
    }

    /**
     * Show the form for creating a new teacher.
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created teacher.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'teacher_id' => [
                'required',
                'string',
                'max:50',
                'unique:teachers,teacher_id',
            ],

            'first_name' => [
                'required',
                'string',
                'max:100',
            ],

            'last_name' => [
                'required',
                'string',
                'max:100',
            ],

            'gender' => [
                'nullable',
                'string',
                'max:30',
            ],

            'date_of_birth' => [
                'nullable',
                'date',
            ],

            'email' => [
                'nullable',
                'email',
                'max:150',
            ],

            'phone' => [
                'required',
                'string',
                'max:30',
            ],

            'alternate_phone' => [
                'nullable',
                'string',
                'max:30',
            ],

            'address' => [
                'nullable',
                'string',
                'max:1000',
            ],

            'city' => [
                'nullable',
                'string',
                'max:100',
            ],

            'state' => [
                'nullable',
                'string',
                'max:100',
            ],

            'qualification' => [
                'nullable',
                'string',
                'max:150',
            ],

            'subject' => [
                'nullable',
                'string',
                'max:150',
            ],

            'specialization' => [
                'nullable',
                'string',
                'max:150',
            ],

            'experience' => [
                'nullable',
                'numeric',
                'min:0',
                'max:99.9',
            ],

            'employment_type' => [
                'nullable',
                'string',
                'max:50',
            ],

            'joining_date' => [
                'nullable',
                'date',
            ],

            'status' => [
                'required',
                'in:active,inactive',
            ],

            'profile_photo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        // Upload profile photo
        if ($request->hasFile('profile_photo')) {
            $validated['profile_photo'] = $request
                ->file('profile_photo')
                ->store('teachers', 'public');
        }

        Teacher::create($validated);

        return redirect()
            ->route('admin.teachers.index')
            ->with('success', 'Teacher added successfully.');
    }

    /**
     * Display the specified teacher.
     */
    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified teacher.
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified teacher.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'teacher_id' => [
                'required',
                'string',
                'max:50',
                Rule::unique('teachers', 'teacher_id')
                    ->ignore($teacher->id),
            ],

            'first_name' => [
                'required',
                'string',
                'max:100',
            ],

            'last_name' => [
                'required',
                'string',
                'max:100',
            ],

            'gender' => [
                'nullable',
                'string',
                'max:30',
            ],

            'date_of_birth' => [
                'nullable',
                'date',
            ],

            'email' => [
                'nullable',
                'email',
                'max:150',
            ],

            'phone' => [
                'required',
                'string',
                'max:30',
            ],

            'alternate_phone' => [
                'nullable',
                'string',
                'max:30',
            ],

            'address' => [
                'nullable',
                'string',
                'max:1000',
            ],

            'city' => [
                'nullable',
                'string',
                'max:100',
            ],

            'state' => [
                'nullable',
                'string',
                'max:100',
            ],

            'qualification' => [
                'nullable',
                'string',
                'max:150',
            ],

            'subject' => [
                'nullable',
                'string',
                'max:150',
            ],

            'specialization' => [
                'nullable',
                'string',
                'max:150',
            ],

            'experience' => [
                'nullable',
                'numeric',
                'min:0',
                'max:99.9',
            ],

            'employment_type' => [
                'nullable',
                'string',
                'max:50',
            ],

            'joining_date' => [
                'nullable',
                'date',
            ],

            'status' => [
                'required',
                'in:active,inactive',
            ],

            'profile_photo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        // Replace profile photo
        if ($request->hasFile('profile_photo')) {
            if (
                $teacher->profile_photo &&
                Storage::disk('public')->exists($teacher->profile_photo)
            ) {
                Storage::disk('public')->delete($teacher->profile_photo);
            }

            $validated['profile_photo'] = $request
                ->file('profile_photo')
                ->store('teachers', 'public');
        }

        $teacher->update($validated);

        return redirect()
            ->route('admin.teachers.index')
            ->with('success', 'Teacher updated successfully.');
    }

    /**
     * Remove the specified teacher.
     */
    public function destroy(Teacher $teacher)
    {
        // Delete profile photo
        if (
            $teacher->profile_photo &&
            Storage::disk('public')->exists($teacher->profile_photo)
        ) {
            Storage::disk('public')->delete($teacher->profile_photo);
        }

        // Delete teacher
        $teacher->delete();

        return redirect()
            ->route('admin.teachers.index')
            ->with('success', 'Teacher deleted successfully.');
    }
}