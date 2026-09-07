<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminTwoFactorController;
use App\Http\Controllers\AdminDashboardController;

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
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth:admin', 'admin.2fa'])
    ->name('admin.dashboard');

// Simple /dashboard redirect
Route::get('/dashboard', function () {
    return redirect()->route('admin.login');
});

// Logout
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');