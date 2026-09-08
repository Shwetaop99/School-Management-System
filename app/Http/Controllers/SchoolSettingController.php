<?php

namespace App\Http\Controllers;

use App\Models\SchoolSetting;
use Illuminate\Http\Request;

class SchoolSettingController extends Controller
{
    public function index()
    {
        $settings = SchoolSetting::first();

        return view('admin.settings.index', compact('settings'));
    }

   public function update(Request $request)
{
    $validated = $request->validate([
        'school_email' => [
            'nullable',
            'email',
            'max:255',
        ],
    ]);

    $settings = SchoolSetting::first();

    if (!$settings) {
        $settings = new SchoolSetting();
    }

    $settings->school_email = $validated['school_email'] ?? null;
    $settings->save();

    return redirect()
        ->route('admin.settings')
        ->with('success', 'School email settings saved successfully!');
}

}