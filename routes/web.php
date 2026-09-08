<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminTwoFactorController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassTeacherAssignmentController;
use App\Http\Controllers\TeacherAttendanceController;
use App\Http\Controllers\SchoolSettingController;

// =====================================================
// ADMIN LOGIN
// =====================================================

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');


// =====================================================
// TWO FACTOR AUTHENTICATION
// =====================================================

Route::get('/admin/2fa', [AdminTwoFactorController::class, 'show'])
    ->name('admin.2fa');

Route::post('/admin/2fa', [AdminTwoFactorController::class, 'verify'])
    ->name('admin.2fa.verify');


// =====================================================
// ADMIN DASHBOARD
// =====================================================

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})
    ->middleware(['auth:admin', 'admin.2fa'])
    ->name('admin.dashboard');


// =====================================================
// ADMIN LOGOUT
// =====================================================

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


// =====================================================
// TEACHER MANAGEMENT + CLASS TEACHER ASSIGNMENT
// =====================================================
// =====================================================
// TEACHER MANAGEMENT + CLASS TEACHER ASSIGNMENT
// =====================================================

Route::prefix('admin')
    ->middleware(['auth:admin', 'admin.2fa'])
    ->group(function () {


    Route::get('/teachers/{teacher}/qr', [TeacherController::class, 'qr'])
    ->name('admin.teachers.qr');
        // =================================================
        // TEACHER MANAGEMENT
        // =================================================

        // Teacher List
        Route::get('/teachers', [TeacherController::class, 'index'])
            ->name('admin.teachers.index');

        // Add Teacher Page
        Route::get('/teachers/create', [TeacherController::class, 'create'])
            ->name('admin.teachers.create');

        // Save New Teacher
        Route::post('/teachers', [TeacherController::class, 'store'])
            ->name('admin.teachers.store');


        // =================================================
        // TEACHER ATTENDANCE
        // IMPORTANT: MUST COME BEFORE /teachers/{teacher}
        // =================================================

        // Attendance Page
        Route::get('/teachers/attendance', [TeacherAttendanceController::class, 'index'])
            ->name('admin.teachers.attendance');

        // Save Attendance
        Route::post('/teachers/attendance', [TeacherAttendanceController::class, 'store'])
            ->name('admin.teachers.attendance.store');


        // =================================================
        // VIEW / EDIT / DELETE TEACHER
        // =================================================


        // School Settings
Route::get('/settings', [SchoolSettingController::class, 'index'])
    ->name('admin.settings');

Route::put('/settings', [SchoolSettingController::class, 'update'])
    ->name('admin.settings.update');
    
        // View Teacher
        Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])
            ->name('admin.teachers.show');

        // Edit Teacher Page
        Route::get('/teachers/{teacher}/edit', [TeacherController::class, 'edit'])
            ->name('admin.teachers.edit');

        // Update Teacher
        Route::put('/teachers/{teacher}', [TeacherController::class, 'update'])
            ->name('admin.teachers.update');

        // Delete Teacher
        Route::delete('/teachers/{teacher}', [TeacherController::class, 'destroy'])
            ->name('admin.teachers.destroy');


        // =================================================
        // CLASS TEACHER ASSIGNMENT
        // =================================================

        // Assignment List
        Route::get('/class-teacher-assignments',
            [ClassTeacherAssignmentController::class, 'index']
        )->name('admin.class-teacher-assignments.index');

        // Assign Class Teacher Page
        Route::get('/class-teacher-assignments/create',
            [ClassTeacherAssignmentController::class, 'create']
        )->name('admin.class-teacher-assignments.create');

        // Save Assignment
        Route::post('/class-teacher-assignments',
            [ClassTeacherAssignmentController::class, 'store']
        )->name('admin.class-teacher-assignments.store');

        // Delete Assignment
        Route::delete('/class-teacher-assignments/{classTeacherAssignment}',
            [ClassTeacherAssignmentController::class, 'destroy']
        )->name('admin.class-teacher-assignments.destroy');

        Route::post('/teachers/attendance/scan', [TeacherAttendanceController::class, 'scan'])
    ->name('admin.teachers.attendance.scan');

    
    });

    