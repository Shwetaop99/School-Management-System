<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');