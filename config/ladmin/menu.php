<?php

use DFSmania\LaradminLte\Support\Menu\Enums\MenuItemType;
use DFSmania\LaradminLte\Support\Menu\Enums\MenuPlacement;

/*
|------------------------------------------------------------------------------
| LaradminLTE Menu Configuration
|------------------------------------------------------------------------------
|
| This file lets you statically define the menu items for your admin panel.
| You can fully customize their placement, appearance, icons, URLs, and other
| properties to tailor the navigation experience to your needs.
|
| For more details, refer to the online documentation:
| https://dfsmania.github.io/LaradminLTE/sections/config/menu.html
|
*/
return [

    /*
    |--------------------------------------------------------------------------
    | Navbar Menu
    |--------------------------------------------------------------------------
    |
    | This section defines the menu items that will be displayed in the top
    | navbar of your admin panel. You can customize the items, their order, and
    | their appearance by modifying this configuration.
    |
    */

    MenuPlacement::NAVBAR->value => [
        // Hamburger button to toggle the sidebar (REQUIRED).
        [
            'type' => MenuItemType::LINK,
            'icon' => 'bi bi-list fs-5',
            'url' => '#',
            'position' => 'left',
            'role' => 'button',
            'data-lte-toggle' => 'sidebar',
        ],

        // Fullscreen toggler (OPTIONAL).
        [
            'type' => MenuItemType::FULLSCREEN_TOGGLER,
            'icon_expand' => 'bi bi-fullscreen fs-5',
            'icon_collapse' => 'bi bi-fullscreen-exit fs-5',
            'position' => 'right',
        ],

        // The next items are just examples that you can use as a reference
        // for creating your own menu items.
        [
            'type' => MenuItemType::LINK,
            'icon' => 'bi bi-house-door-fill fs-5',
            'url' => '#',
            'position' => 'left',
        ],
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
    |
    | This section defines the menu items that will be displayed in the sidebar
    | of your admin panel. You can customize the items, their order, and their
    | appearance by modifying this configuration.
    |
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
        'url' => '/dashboard',
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
            'url' => '/admin/teachers',
        ],

        [
            'type' => MenuItemType::LINK,
            'label' => 'Add Teacher',
            'icon' => 'bi bi-person-plus-fill',
            'url' => '/admin/teachers/create',
        ],

    ],
],

    /*
    |--------------------------------------------------------------------------
    | ACADEMICS
    |--------------------------------------------------------------------------
    */

    [
        'type' => MenuItemType::LINK,
        'label' => 'Time Table',
        'icon' => 'bi bi-calendar3',
        'url' => '#',
    ],

    [
        'type' => MenuItemType::LINK,
        'label' => 'Attendance',
        'icon' => 'bi bi-calendar-check-fill',
        'url' => '#',
    ],

    [
        'type' => MenuItemType::LINK,
        'label' => 'Fees',
        'icon' => 'bi bi-currency-rupee',
        'url' => '#',
    ],

    [
        'type' => MenuItemType::LINK,
        'label' => 'Exam',
        'icon' => 'bi bi-journal-text',
        'url' => '#',
    ],

    [
        'type' => MenuItemType::LINK,
        'label' => 'Results',
        'icon' => 'bi bi-bar-chart-fill',
        'url' => '#',
    ],

    [
        'type' => MenuItemType::LINK,
        'label' => 'Board Result',
        'icon' => 'bi bi-award-fill',
        'url' => '#',
    ],


    /*
    |--------------------------------------------------------------------------
    | COMMUNICATION
    |--------------------------------------------------------------------------
    */

    [
        'type' => MenuItemType::LINK,
        'label' => 'Notice',
        'icon' => 'bi bi-megaphone-fill',
        'url' => '#',
    ],

    [
        'type' => MenuItemType::LINK,
        'label' => 'Notifications',
        'icon' => 'bi bi-bell-fill',
        'url' => '#',
    ],

    [
        'type' => MenuItemType::LINK,
        'label' => 'Library',
        'icon' => 'bi bi-book-fill',
        'url' => '#',
    ],


    /*
    |--------------------------------------------------------------------------
    | REPORTS & BACKUP
    |--------------------------------------------------------------------------
    */
    [
        'type' => MenuItemType::MENU,
        'label' => 'Reports',
        'icon' => 'bi bi-file-earmark-bar-graph-fill',
        'submenu' => [

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