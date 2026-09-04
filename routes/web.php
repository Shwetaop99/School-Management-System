<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminTwoFactorController;
use App\Http\Controllers\AdminTimetableController;

// Admin Login
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

// 2FA
Route::get('/admin/2fa', [AdminTwoFactorController::class, 'show'])
    ->name('admin.2fa');

Route::post('/admin/2fa', [AdminTwoFactorController::class, 'verify'])
    ->name('admin.2fa.verify');

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})
->middleware(['auth:admin', 'admin.2fa'])
->name('admin.dashboard');

// Simple /dashboard redirect
Route::get('/dashboard', function () {
    return redirect()->route('admin.login');
});

// Logout
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


// Timetable main page
Route::get('/admin/timetable', [AdminTimetableController::class, 'index'])
    ->name('admintimetable');

// Add / Edit timetable
Route::get('/admin/timetable/create', [AdminTimetableController::class, 'create'])
    ->name('admintimetable.create');

// Save / Update timetable
Route::post('/admin/timetable', [AdminTimetableController::class, 'store'])
    ->name('admintimetable.store');

// Download PDF
Route::get('/admin/timetable/pdf', [AdminTimetableController::class, 'pdf'])
    ->name('admintimetable.pdf');