<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Actually log the admin in
        if (Auth::guard('admin')->attempt($credentials)) {

            // Prevent session fixation
            $request->session()->regenerate();

            // Mark that password authentication succeeded
            // but 2FA is still pending
            session([
                'admin_2fa_pending' => true,
                'admin_2fa_verified' => false,
            ]);

            return redirect()->route('admin.2fa');
        }

        return back()
            ->withErrors([
                'email' => 'Invalid admin credentials.',
            ])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}