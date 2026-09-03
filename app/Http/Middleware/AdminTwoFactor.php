<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminTwoFactor
{
    public function handle(Request $request, Closure $next): Response
    {
        // Make sure an admin is logged in
        if (!auth('admin')->check()) {
            return redirect()->route('admin.login');
        }

        // Make sure the admin has completed 2FA
        if (!session('admin_2fa_verified')) {
            return redirect()->route('admin.2fa');
        }

        return $next($request);
    }
}