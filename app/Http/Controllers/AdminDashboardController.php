<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Schema;

class AdminDashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC COUNTS
        |--------------------------------------------------------------------------
        */

        $totalUsers = User::count();
        $totalAdmins = Admin::count();

        /*
        |--------------------------------------------------------------------------
        | RECENT USERS
        |--------------------------------------------------------------------------
        */

        $recentUsers = User::latest()
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | RECENT ADMINS
        |--------------------------------------------------------------------------
        */

        $recentAdmins = Admin::latest()
            ->take(5)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | CURRENT DATE
        |--------------------------------------------------------------------------
        */

        $currentDate = now();

        /*
        |--------------------------------------------------------------------------
        | DASHBOARD NOTIFICATIONS
        |--------------------------------------------------------------------------
        |
        | These are generated from actual database records instead of
        | hardcoded notification text.
        |
        */

        $notifications = collect();

        foreach ($recentUsers->take(3) as $user) {
            $notifications->push([
                'time' => $user->created_at
                    ? $user->created_at->format('H:i')
                    : '--:--',

                'title' => 'New User Registered',

                'message' => ($user->name ?? 'A new user')
                    . ' registered in the system.',

                'type' => 'blue',
            ]);
        }

        foreach ($recentAdmins->take(2) as $admin) {
            $notifications->push([
                'time' => $admin->created_at
                    ? $admin->created_at->format('H:i')
                    : '--:--',

                'title' => 'Admin Account Added',

                'message' => ($admin->name ?? 'An administrator')
                    . ' account was added.',

                'type' => 'orange',
            ]);
        }

        $notifications = $notifications
            ->sortByDesc('time')
            ->take(5)
            ->values();

        /*
        |--------------------------------------------------------------------------
        | DASHBOARD DATA
        |--------------------------------------------------------------------------
        |
        | These values are intentionally null until their respective
        | school modules/tables are created.
        |
        */

        $totalStudents = null;
        $totalTeachers = null;
        $totalSubjects = null;
        $totalClasses = null;

        $attendancePercentage = null;
        $resultPercentage = null;
        $academicProgress = null;

        $maleStudents = 0;
        $femaleStudents = 0;

        /*
        |--------------------------------------------------------------------------
        | STUDENT DATA
        |--------------------------------------------------------------------------
        |
        | If a students table exists later, the dashboard can use it.
        | For now we don't query a table that doesn't exist.
        |
        */

        if (Schema::hasTable('students')) {

            $totalStudents = \DB::table('students')->count();

            if (Schema::hasColumn('students', 'gender')) {

                $maleStudents = \DB::table('students')
                    ->whereRaw('LOWER(gender) = ?', ['male'])
                    ->count();

                $femaleStudents = \DB::table('students')
                    ->whereRaw('LOWER(gender) = ?', ['female'])
                    ->count();
            }
        }

        /*
        |--------------------------------------------------------------------------
        | TEACHERS
        |--------------------------------------------------------------------------
        */

        if (Schema::hasTable('teachers')) {
            $totalTeachers = \DB::table('teachers')->count();
        }

        /*
        |--------------------------------------------------------------------------
        | SUBJECTS
        |--------------------------------------------------------------------------
        */

        if (Schema::hasTable('subjects')) {
            $totalSubjects = \DB::table('subjects')->count();
        }

        /*
        |--------------------------------------------------------------------------
        | CLASSES
        |--------------------------------------------------------------------------
        */

        if (Schema::hasTable('classes')) {
            $totalClasses = \DB::table('classes')->count();
        }

        /*
        |--------------------------------------------------------------------------
        | ATTENDANCE
        |--------------------------------------------------------------------------
        */

        if (Schema::hasTable('attendances')) {

            $attendanceTotal = \DB::table('attendances')->count();

            if ($attendanceTotal > 0 && Schema::hasColumn('attendances', 'status')) {

                $presentCount = \DB::table('attendances')
                    ->whereRaw('LOWER(status) = ?', ['present'])
                    ->count();

                $attendancePercentage = round(
                    ($presentCount / $attendanceTotal) * 100
                );
            }
        }

        /*
        |--------------------------------------------------------------------------
        | RESULTS
        |--------------------------------------------------------------------------
        */

        if (Schema::hasTable('results')) {

            $resultTotal = \DB::table('results')->count();

            if ($resultTotal > 0 && Schema::hasColumn('results', 'percentage')) {

                $resultPercentage = round(
                    \DB::table('results')->avg('percentage')
                );
            }
        }

        /*
        |--------------------------------------------------------------------------
        | ACADEMIC PROGRESS
        |--------------------------------------------------------------------------
        */

        if ($resultPercentage !== null) {
            $academicProgress = $resultPercentage;
        }

        /*
        |--------------------------------------------------------------------------
        | CALENDAR
        |--------------------------------------------------------------------------
        */

        $calendarMonth = $currentDate->format('F');
        $calendarYear = $currentDate->year;

        /*
        |--------------------------------------------------------------------------
        | RETURN DASHBOARD
        |--------------------------------------------------------------------------
        */

        return view('admin.dashboard', [

            'totalUsers' => $totalUsers,
            'totalAdmins' => $totalAdmins,

            'recentUsers' => $recentUsers,
            'recentAdmins' => $recentAdmins,

            'notifications' => $notifications,

            'totalStudents' => $totalStudents,
            'totalTeachers' => $totalTeachers,
            'totalSubjects' => $totalSubjects,
            'totalClasses' => $totalClasses,

            'attendancePercentage' => $attendancePercentage,
            'resultPercentage' => $resultPercentage,
            'academicProgress' => $academicProgress,

            'maleStudents' => $maleStudents,
            'femaleStudents' => $femaleStudents,

            'calendarMonth' => $calendarMonth,
            'calendarYear' => $calendarYear,
        ]);
    }
}