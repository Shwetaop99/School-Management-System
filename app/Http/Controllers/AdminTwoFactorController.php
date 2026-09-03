<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminTwoFactorController extends Controller
{
    public function show()
    {
        // Admin must have passed password authentication first
        if (!session('admin_2fa_pending')) {
            return redirect()->route('admin.login');
        }

        $admin = Auth::guard('admin')->user();

        if (!$admin) {
            return redirect()->route('admin.login');
        }

        // Generate a secret if the admin doesn't have one yet
        if (!$admin->two_factor_secret) {
            $google2fa = app('pragmarx.google2fa');

            $secret = $google2fa->generateSecretKey();

            session([
                'admin_2fa_setup_secret' => $secret,
            ]);

            $qrCodeUrl = $google2fa->getQRCodeInline(
                config('app.name'),
                $admin->email,
                $secret
            );

            return view('admin.2fa-setup', [
                'qrCodeUrl' => $qrCodeUrl,
                'secret' => $secret,
            ]);
        }

        return view('admin.2fa');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'code' => ['required', 'digits:6'],
        ]);

        if (!session('admin_2fa_pending')) {
            return redirect()->route('admin.login');
        }

        $admin = Auth::guard('admin')->user();

        if (!$admin) {
            return redirect()->route('admin.login');
        }

        $secret = $admin->two_factor_secret;

        // First-time 2FA setup
        if (!$secret) {
            $secret = session('admin_2fa_setup_secret');
        }

        if (!$secret) {
            return back()->withErrors([
                'code' => '2FA setup has expired. Please try again.',
            ]);
        }

        $google2fa = app('pragmarx.google2fa');

        $valid = $google2fa->verifyKey(
            $secret,
            $request->code
        );

        if (!$valid) {
            return back()->withErrors([
                'code' => 'Invalid authentication code.',
            ]);
        }

        // Save the secret only after successful verification
        if (!$admin->two_factor_secret) {
            $admin->two_factor_secret = $secret;
            $admin->two_factor_enabled = true;
            $admin->save();
        }

        // Mark the 2FA step as completed
        session()->forget([
            'admin_2fa_pending',
            'admin_2fa_setup_secret',
        ]);

        session(['admin_2fa_verified' => true]);

        // Regenerate session after completing authentication
        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }
}