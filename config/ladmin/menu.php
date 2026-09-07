<?php

use DFSmania\LaradminLte\Support\Menu\Enums\MenuItemType;
use DFSmania\LaradminLte\Support\Menu\Enums\MenuPlacement;

return [

    /*
    |--------------------------------------------------------------------------
    | Navbar Menu
    |--------------------------------------------------------------------------
    */

    MenuPlacement::NAVBAR->value => [

        // Hamburger button
        [
            'type' => MenuItemType::LINK,
            'icon' => 'bi bi-list fs-5',
            'url' => '#',
            'position' => 'left',
            'role' => 'button',
            'data-lte-toggle' => 'sidebar',
        ],

        // Fullscreen toggler
        [
            'type' => MenuItemType::FULLSCREEN_TOGGLER,
            'icon_expand' => 'bi bi-fullscreen fs-5',
            'icon_collapse' => 'bi bi-fullscreen-exit fs-5',
            'position' => 'right',
        ],

        // Home
        [
            'type' => MenuItemType::LINK,
            'icon' => 'bi bi-house-door-fill fs-5',
            'url' => '#',
            'position' => 'left',
        ],

        // Settings dropdown
        [
            'type' => MenuItemType::MENU,
            'icon' => 'bi bi-gear fs-5',
            'menu_color' => 'light-subtle',
            'position' => 'right',

            'submenu' => [

                [
                    'type' => MenuItemType::HEADER,
                    'label' => 'Settings',
                    'icon' => 'bi bi-tag fs-5',
                    'class' => 'text-uppercase fw-bold',
                    'color' => 'primary',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'General Settings',
                    'icon' => 'bi bi-gear-wide-connected fs-5',
                    'url' => '#',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Preferences',
                    'icon' => 'bi bi-sliders fs-5',
                    'url' => '#',
                    'badge' => 'new',
                    'badge_color' => 'primary',
                    'badge_classes' => 'rounded-pill',
                ],

                [
                    'type' => MenuItemType::DIVIDER,
                    'class' => 'mx-1',
                ],

                [
                    'type' => MenuItemType::HEADER,
                    'label' => 'Support',
                    'icon' => 'bi bi-tag fs-5',
                    'class' => 'text-uppercase fw-bold',
                    'color' => 'primary',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Help',
                    'icon' => 'bi bi-question-circle-fill fs-5',
                    'url' => '#',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'About Us',
                    'icon' => 'bi bi-info-circle-fill fs-5',
                    'url' => '#',
                ],

            ],
        ],

    ],


    /*
    |--------------------------------------------------------------------------
    | Sidebar Menu
    |--------------------------------------------------------------------------
    */

    MenuPlacement::SIDEBAR->value => [

        /*
        |--------------------------------------------------------------------------
        | DASHBOARD & APPS
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::HEADER,
            'label' => 'DASHBOARD & APPS',
            'icon' => 'bi bi-grid-fill',
            'class' => 'text-uppercase fw-bold',
        ],

        [
            'type' => MenuItemType::LINK,
            'label' => 'Dashboard',
            'icon' => 'bi bi-speedometer2',
            'url' => '/admin/dashboard',
        ],


        /*
        |--------------------------------------------------------------------------
        | STUDENTS & TEACHERS
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::MENU,
            'label' => 'Student Management',
            'icon' => 'bi bi-mortarboard-fill',

            'submenu' => [

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'All Students',
                    'icon' => 'bi bi-people-fill',
                    'url' => '#',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Add Student',
                    'icon' => 'bi bi-person-plus-fill',
                    'url' => '#',
                ],

            ],
        ],


        [
            'type' => MenuItemType::MENU,
            'label' => 'Teacher',
            'icon' => 'bi bi-person-workspace',

            'submenu' => [

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'All Teachers',
                    'icon' => 'bi bi-people-fill',
                    'url' => '#',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Add Teacher',
                    'icon' => 'bi bi-person-plus-fill',
                    'url' => '#',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | ATTENDANCE
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::MENU,
            'label' => 'Attendance',
            'icon' => 'bi bi-calendar-check-fill',

            'submenu' => [

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Student Attendance',
                    'icon' => 'bi bi-person-check-fill',
                    'url' => '#',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Teacher Attendance',
                    'icon' => 'bi bi-person-check',
                    'url' => '#',
                ],

            ],
        ],


       /*
|--------------------------------------------------------------------------
| FEES
|--------------------------------------------------------------------------
*/

[
    'type' => MenuItemType::MENU,
    'label' => 'Fees',
    'icon' => 'bi bi-currency-rupee',

    'submenu' => [

        [
            'type' => MenuItemType::LINK,
            'label' => 'Fees Structure',
            'icon' => 'bi bi-list-columns-reverse',
            'url' => '#',
        ],

        [
            'type' => MenuItemType::LINK,
            'label' => 'Miscellaneous',
            'icon' => 'bi bi-list-columns-reverse',
            'url' => '#',
        ],

    ],
],

        /*
        |--------------------------------------------------------------------------
        | EXAM
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::MENU,
            'label' => 'Exam',
            'icon' => 'bi bi-journal-text',

            'submenu' => [

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Time Table',
                    'icon' => 'bi bi-calendar3',
                    'url' => '#',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Exam Schedule',
                    'icon' => 'bi bi-calendar-event-fill',
                    'url' => '#',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | RESULT
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::MENU,
            'label' => 'Result',
            'icon' => 'bi bi-bar-chart-fill',

            'submenu' => [

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Board Result',
                    'icon' => 'bi bi-award-fill',
                    'url' => '#',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | NOTICE
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::MENU,
            'label' => 'Notice',
            'icon' => 'bi bi-megaphone-fill',

            'submenu' => [

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Add Notice',
                    'icon' => 'bi bi-plus-circle-fill',
                    'url' => '#',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | LIBRARY
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::LINK,
            'label' => 'Library',
            'icon' => 'bi bi-book-fill',
            'url' => '#',
        ],


        /*
        |--------------------------------------------------------------------------
        | SETTINGS
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::MENU,
            'label' => 'Settings',
            'icon' => 'bi bi-gear-fill',

            'submenu' => [

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'School Profile',
                    'icon' => 'bi bi-building-fill',
                    'url' => '#',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Backup',
                    'icon' => 'bi bi-database-fill',
                    'url' => '#',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | OTHER SCHOOL SERVICES
        |--------------------------------------------------------------------------
        */

        [
            'type' => MenuItemType::HEADER,
            'label' => 'OTHER',
            'icon' => 'bi bi-three-dots',
            'class' => 'text-uppercase fw-bold',
        ],

        [
            'type' => MenuItemType::LINK,
            'label' => 'Sports',
            'icon' => 'bi bi-trophy-fill',
            'url' => '#',
        ],

        [
            'type' => MenuItemType::LINK,
            'label' => 'Meal Management',
            'icon' => 'bi bi-cup-hot-fill',
            'url' => '#',
        ],

        [
            'type' => MenuItemType::LINK,
            'label' => 'Scholarship',
            'icon' => 'bi bi-mortarboard',
            'url' => '#',
        ],

        [
            'type' => MenuItemType::MENU,
            'label' => 'Class',
            'icon' => 'bi bi-grid-3x3-gap-fill',

            'submenu' => [

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Subjects',
                    'icon' => 'bi bi-book',
                    'url' => '#',
                ],

                [
                    'type' => MenuItemType::LINK,
                    'label' => 'Division',
                    'icon' => 'bi bi-diagram-3-fill',
                    'url' => '#',
                ],

            ],
        ],

        [
            'type' => MenuItemType::LINK,
            'label' => 'Transport',
            'icon' => 'bi bi-bus-front-fill',
            'url' => '#',
        ],

    ],

];