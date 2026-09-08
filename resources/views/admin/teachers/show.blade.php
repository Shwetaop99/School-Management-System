
<x-ladmin-panel title="Teacher Profile">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    @php
        $fullName = trim(
            ($teacher->first_name ?? '') . ' ' .
            ($teacher->last_name ?? '')
        );

        $initial = strtoupper(
            substr($teacher->first_name ?? 'T', 0, 1)
        );

        $isActive = strtolower($teacher->status ?? '') === 'active';

        $employmentType = $teacher->employment_type
            ? ucfirst(str_replace('_', ' ', $teacher->employment_type))
            : '—';
    @endphp


    <style>

        /* =========================================================
           TEACHER PROFILE THEME
        ========================================================= */

        :root {

            --teacher-primary: #147cf5;
            --teacher-primary-dark: #1268ca;
            --teacher-secondary: #6c63ff;
            --teacher-accent: #00b8d9;

            --teacher-bg: #f3f7fc;
            --teacher-card: #ffffff;

            --teacher-text: #17213c;
            --teacher-muted: #7b8497;
            --teacher-border: #e2e8f1;

            --teacher-blue-light: #eaf3ff;
            --teacher-purple-light: #f0edff;

            --teacher-success: #16a34a;
            --teacher-success-light: #eaf8ef;

            --teacher-danger: #dc3545;
            --teacher-danger-light: #fff0f1;

            --teacher-shadow:
                0 8px 30px rgba(24, 52, 91, .07);

            --teacher-shadow-hover:
                0 14px 35px rgba(20, 124, 245, .13);
        }


        /* =========================================================
           GLOBAL LIGHT BACKGROUND
        ========================================================= */

        html,
        body {

            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(20,124,245,.045),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 90% 20%,
                    rgba(108,99,255,.045),
                    transparent 25%
                ),
                var(--teacher-bg) !important;

            color:
                var(--teacher-text) !important;
        }

        .app-wrapper,
        .app-main,
        .app-content,
        .content-wrapper {

            background:
                transparent !important;
        }


        /* =========================================================
           LIGHT SIDEBAR
        ========================================================= */

        .app-sidebar,
        .app-sidebar[data-bs-theme="dark"],
        .app-sidebar[data-bs-theme="light"],
        .main-sidebar,
        .sidebar-dark-primary,
        aside.main-sidebar {

            background:
                #ffffff !important;

            background-image:
                none !important;

            color:
                #596579 !important;

            border-right:
                1px solid #e6edf5 !important;

            box-shadow:
                5px 0 25px rgba(30,50,80,.055) !important;
        }


        /* Sidebar brand */

        .app-sidebar .sidebar-brand,
        .app-sidebar .brand-link,
        .main-sidebar .brand-link {

            min-height:
                58px;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #f8fbff
                ) !important;

            color:
                var(--teacher-text) !important;

            border-bottom:
                1px solid #edf1f6 !important;

            transition:
                background .25s ease,
                box-shadow .25s ease;
        }

        .app-sidebar .sidebar-brand:hover,
        .app-sidebar .brand-link:hover,
        .main-sidebar .brand-link:hover {

            background:
                linear-gradient(
                    135deg,
                    #f8fbff,
                    #f4f1ff
                ) !important;

            box-shadow:
                0 5px 18px rgba(20,124,245,.05);
        }

        .app-sidebar .brand-text,
        .main-sidebar .brand-text {

            color:
                var(--teacher-text) !important;

            font-weight:
                800 !important;
        }


        /* Sidebar body */

        .app-sidebar .sidebar-wrapper,
        .app-sidebar .nav,
        .main-sidebar .sidebar,
        .main-sidebar .nav {

            background:
                #ffffff !important;
        }


        /* Sidebar links */

        .app-sidebar .nav-link,
        .main-sidebar .nav-link {

            position:
                relative;

            margin:
                4px 10px !important;

            padding:
                11px 13px !important;

            border-radius:
                10px !important;

            background:
                transparent !important;

            color:
                #596579 !important;

            transition:
                background .25s ease,
                color .25s ease,
                transform .25s ease,
                box-shadow .25s ease;
        }


        /* Sidebar icons */

        .app-sidebar .nav-link .nav-icon,
        .app-sidebar .nav-link i,
        .main-sidebar .nav-link .nav-icon,
        .main-sidebar .nav-link i {

            color:
                #718096 !important;

            transition:
                color .25s ease,
                transform .25s ease;
        }


        /* Sidebar hover */

        .app-sidebar .nav-link:hover,
        .main-sidebar .nav-link:hover {

            background:
                linear-gradient(
                    135deg,
                    #eef6ff,
                    #f4f1ff
                ) !important;

            color:
                var(--teacher-primary) !important;

            transform:
                translateX(3px);

            box-shadow:
                0 4px 12px rgba(20,124,245,.06);
        }

        .app-sidebar .nav-link:hover i,
        .app-sidebar .nav-link:hover .nav-icon,
        .main-sidebar .nav-link:hover i,
        .main-sidebar .nav-link:hover .nav-icon {

            color:
                var(--teacher-primary) !important;

            transform:
                scale(1.08);
        }


        /* Active sidebar item */

        .app-sidebar .nav-link.active,
        .app-sidebar .nav-link[aria-current="page"],
        .main-sidebar .nav-link.active {

            background:
                linear-gradient(
                    135deg,
                    #eaf3ff,
                    #f0edff
                ) !important;

            color:
                var(--teacher-primary) !important;

            font-weight:
                700 !important;

            box-shadow:
                0 5px 14px rgba(20,124,245,.09) !important;
        }

        .app-sidebar .nav-link.active::before,
        .app-sidebar .nav-link[aria-current="page"]::before,
        .main-sidebar .nav-link.active::before {

            content:
                "";

            position:
                absolute;

            top:
                8px;

            bottom:
                8px;

            left:
                0;

            width:
                3px;

            border-radius:
                0 5px 5px 0;

            background:
                linear-gradient(
                    180deg,
                    var(--teacher-primary),
                    var(--teacher-secondary)
                );
        }

        .app-sidebar .nav-link.active i,
        .app-sidebar .nav-link.active .nav-icon,
        .main-sidebar .nav-link.active i,
        .main-sidebar .nav-link.active .nav-icon {

            color:
                var(--teacher-primary) !important;
        }


        /* Sidebar headers */

        .app-sidebar .nav-header,
        .main-sidebar .nav-header {

            color:
                #9aa5b5 !important;

            font-size:
                11px !important;

            font-weight:
                700 !important;

            letter-spacing:
                .5px;

            text-transform:
                uppercase;

            padding-left:
                14px !important;
        }


        /* Sidebar submenu */

        .app-sidebar .nav-treeview,
        .main-sidebar .nav-treeview {

            background:
                #fbfcff !important;
        }

        .app-sidebar .nav-treeview .nav-link,
        .main-sidebar .nav-treeview .nav-link {

            color:
                #697589 !important;
        }


        /* Sidebar scrollbar */

        .app-sidebar::-webkit-scrollbar,
        .main-sidebar::-webkit-scrollbar {

            width:
                5px;
        }

        .app-sidebar::-webkit-scrollbar-track,
        .main-sidebar::-webkit-scrollbar-track {

            background:
                #f8fafc;
        }

        .app-sidebar::-webkit-scrollbar-thumb,
        .main-sidebar::-webkit-scrollbar-thumb {

            background:
                #d9e2ee;

            border-radius:
                10px;
        }


        /* =========================================================
           LIGHT HEADER
        ========================================================= */

        .app-header,
        .main-header,
        .navbar,
        .navbar-dark,
        .navbar-black {

            background:
                rgba(255,255,255,.96) !important;

            color:
                var(--teacher-text) !important;

            border-bottom:
                1px solid #e4eaf2 !important;

            box-shadow:
                0 3px 14px rgba(30,50,80,.05) !important;
        }

        .app-header .nav-link,
        .main-header .nav-link,
        .navbar .nav-link,
        .main-header a,
        .navbar a {

            color:
                #536174 !important;
        }

        .app-header .nav-link:hover,
        .main-header .nav-link:hover,
        .navbar .nav-link:hover,
        .main-header a:hover,
        .navbar a:hover {

            color:
                var(--teacher-primary) !important;
        }


        /* =========================================================
           PAGE
        ========================================================= */

        .teacher-profile-page {

            min-height:
                calc(100vh - 100px);

            padding:
                15px 6px 45px;

            background:
                radial-gradient(
                    circle at 5% 0%,
                    rgba(20,124,245,.06),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 95% 10%,
                    rgba(108,99,255,.055),
                    transparent 23%
                );

            color:
                var(--teacher-text);
        }


        /* =========================================================
           PAGE HEADER
        ========================================================= */

        .teacher-profile-header {

            position:
                relative;

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                20px;

            margin-bottom:
                20px;

            padding:
                20px 23px;

            overflow:
                hidden;

            border:
                1px solid rgba(20,124,245,.10);

            border-radius:
                16px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.98),
                    rgba(247,250,255,.98)
                );

            box-shadow:
                var(--teacher-shadow);

            animation:
                teacherFadeUp .45s ease both;
        }

        .teacher-profile-header::before {

            content:
                "";

            position:
                absolute;

            top:
                0;

            left:
                0;

            width:
                5px;

            height:
                100%;

            background:
                linear-gradient(
                    180deg,
                    var(--teacher-primary),
                    var(--teacher-secondary),
                    var(--teacher-accent)
                );
        }

        .profile-header-title {

            position:
                relative;

            z-index:
                1;

            margin:
                0;

            color:
                #16213e;

            font-size:
                28px;

            font-weight:
                800;

            letter-spacing:
                -.6px;
        }

        .profile-header-subtitle {

            position:
                relative;

            z-index:
                1;

            margin:
                6px 0 0;

            color:
                var(--teacher-muted);

            font-size:
                14px;
        }


        /* =========================================================
           HEADER BUTTONS
        ========================================================= */

        .profile-header-actions {

            position:
                relative;

            z-index:
                2;

            display:
                flex;

            gap:
                10px;

            flex-wrap:
                wrap;
        }

        .profile-btn {

            min-height:
                42px;

            padding:
                0 16px;

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            gap:
                8px;

            border:
                0;

            border-radius:
                10px;

            font-size:
                13px;

            font-weight:
                700;

            text-decoration:
                none !important;

            cursor:
                pointer;

            transition:
                transform .25s ease,
                box-shadow .25s ease,
                background .25s ease,
                border-color .25s ease;
        }

        .profile-btn-primary {

            background:
                linear-gradient(
                    135deg,
                    var(--teacher-primary),
                    var(--teacher-secondary)
                );

            color:
                #ffffff !important;

            box-shadow:
                0 7px 17px rgba(20,124,245,.20);
        }

        .profile-btn-primary:hover {

            color:
                #ffffff !important;

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 25px rgba(20,124,245,.27);
        }

        .profile-btn-secondary {

            border:
                1px solid #dfe5ee;

            background:
                #ffffff;

            color:
                #536078 !important;
        }

        .profile-btn-secondary:hover {

            background:
                var(--teacher-purple-light);

            border-color:
                #d8caff;

            color:
                var(--teacher-secondary) !important;

            transform:
                translateY(-2px);
        }


        /* =========================================================
           MAIN PROFILE CARD
        ========================================================= */

        .teacher-main-card {

            position:
                relative;

            overflow:
                hidden;

            border:
                1px solid var(--teacher-border);

            border-radius:
                16px;

            background:
                #ffffff;

            box-shadow:
                var(--teacher-shadow);

            animation:
                teacherFadeUp .5s ease .08s both;
        }

        .teacher-main-card::before {

            content:
                "";

            position:
                absolute;

            top:
                0;

            left:
                0;

            width:
                100%;

            height:
                4px;

            background:
                linear-gradient(
                    90deg,
                    var(--teacher-primary),
                    var(--teacher-secondary),
                    var(--teacher-accent)
                );
        }


        /* =========================================================
           PROFILE TOP
        ========================================================= */

        .teacher-profile-top {

            display:
                flex;

            align-items:
                center;

            gap:
                22px;

            padding:
                27px;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #f9fbff
                );

            border-bottom:
                1px solid #edf0f5;
        }

        .teacher-large-avatar {

            width:
                100px;

            height:
                100px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            flex-shrink:
                0;

            overflow:
                hidden;

            border:
                4px solid #ffffff;

            border-radius:
                50%;

            background:
                linear-gradient(
                    135deg,
                    #eaf3ff,
                    #f1ebff
                );

            color:
                var(--teacher-primary);

            font-size:
                39px;

            font-weight:
                800;

            box-shadow:
                0 8px 25px rgba(20,124,245,.13);
        }

        .teacher-large-avatar img {

            width:
                100%;

            height:
                100%;

            display:
                block;

            object-fit:
                cover;
        }

        .teacher-profile-name {

            margin:
                0 0 8px;

            color:
                var(--teacher-text);

            font-size:
                27px;

            font-weight:
                800;
        }


        /* =========================================================
           PROFILE BADGES
        ========================================================= */

        .teacher-profile-id,
        .teacher-profile-status,
        .teacher-subject-badge {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                7px;

            border-radius:
                20px;

            font-size:
                12px;

            font-weight:
                750;
        }

        .teacher-profile-id {

            padding:
                6px 12px;

            border:
                1px solid #dce8f6;

            background:
                var(--teacher-blue-light);

            color:
                var(--teacher-primary);
        }

        .teacher-profile-status {

            margin-left:
                7px;

            padding:
                6px 12px;
        }

        .teacher-profile-status.active {

            border:
                1px solid #ccefe0;

            background:
                var(--teacher-success-light);

            color:
                #168052;
        }

        .teacher-profile-status.inactive {

            border:
                1px solid #f7d4d1;

            background:
                var(--teacher-danger-light);

            color:
                var(--teacher-danger);
        }

        .status-dot {

            width:
                7px;

            height:
                7px;

            border-radius:
                50%;

            background:
                currentColor;
        }


        /* =========================================================
           INFORMATION GRID
        ========================================================= */

        .teacher-info-grid {

            display:
                grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap:
                20px;

            padding:
                20px;
        }


        /* =========================================================
           INFORMATION CARD
        ========================================================= */

        .teacher-info-card {

            position:
                relative;

            overflow:
                hidden;

            border:
                1px solid var(--teacher-border);

            border-radius:
                14px;

            background:
                #ffffff;

            box-shadow:
                0 5px 20px rgba(24,52,91,.045);

            transition:
                transform .25s ease,
                box-shadow .25s ease;
        }

        .teacher-info-card:hover {

            transform:
                translateY(-3px);

            box-shadow:
                var(--teacher-shadow-hover);
        }

        .teacher-info-card::before {

            content:
                "";

            position:
                absolute;

            top:
                0;

            left:
                0;

            width:
                100%;

            height:
                3px;

            background:
                linear-gradient(
                    90deg,
                    var(--teacher-primary),
                    var(--teacher-secondary)
                );
        }


        /* =========================================================
           INFORMATION CARD HEADER
        ========================================================= */

        .teacher-info-header {

            display:
                flex;

            align-items:
                center;

            gap:
                10px;

            padding:
                15px 17px;

            border-bottom:
                1px solid #edf0f5;

            background:
                linear-gradient(
                    180deg,
                    #ffffff,
                    #fcfdff
                );
        }

        .teacher-info-icon {

            width:
                37px;

            height:
                37px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            flex-shrink:
                0;

            border-radius:
                10px;

            background:
                var(--teacher-blue-light);

            color:
                var(--teacher-primary);

            font-size:
                17px;
        }

        .teacher-info-title {

            margin:
                0;

            color:
                var(--teacher-text);

            font-size:
                15px;

            font-weight:
                800;
        }

        .teacher-info-body {

            padding:
                17px 18px;
        }


        /* =========================================================
           NORMAL INFORMATION ROW
        ========================================================= */

        .teacher-info-row {

            display:
                flex;

            align-items:
                flex-start;

            justify-content:
                space-between;

            gap:
                20px;

            padding:
                10px 0;

            border-bottom:
                1px solid #f0f2f6;
        }

        .teacher-info-row:first-child {
            padding-top:
                0;
        }

        .teacher-info-row:last-child {

            padding-bottom:
                0;

            border-bottom:
                none;
        }

        .teacher-info-label {

            color:
                #8994a7;

            font-size:
                12px;

            font-weight:
                700;

            white-space:
                nowrap;
        }

        .teacher-info-value {

            max-width:
                70%;

            color:
                #35415a;

            font-size:
                13px;

            font-weight:
                600;

            text-align:
                right;

            word-break:
                break-word;
        }


        /* =========================================================
           FULL WIDTH CARD
        ========================================================= */

        .teacher-full-card {

            grid-column:
                1 / -1;
        }


        /* =========================================================
           PROFESSIONAL INFORMATION
           CLEAN 3 × 2 GRID
        ========================================================= */

        .professional-grid {

            display:
                grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap:
                16px;
        }

        .professional-item {

            min-height:
                78px;

            padding:
                14px 15px;

            display:
                flex;

            flex-direction:
                column;

            justify-content:
                center;

            border:
                1px solid #edf1f6;

            border-radius:
                11px;

            background:
                #fbfcff;

            transition:
                background .25s ease,
                border-color .25s ease,
                transform .25s ease,
                box-shadow .25s ease;
        }

        .professional-item:hover {

            background:
                #f7faff;

            border-color:
                #dce8f6;

            transform:
                translateY(-2px);

            box-shadow:
                0 6px 18px rgba(20,124,245,.06);
        }

        .professional-label {

            margin-bottom:
                7px;

            color:
                #8994a7;

            font-size:
                11px;

            font-weight:
                700;

            text-transform:
                uppercase;

            letter-spacing:
                .35px;
        }

        .professional-value {

            color:
                #35415a;

            font-size:
                13px;

            font-weight:
                700;

            line-height:
                1.4;

            word-break:
                break-word;
        }

        .professional-value.empty {

            color:
                #a4adba;

            font-weight:
                500;
        }

        .teacher-subject-badge {

            width:
                fit-content;

            padding:
                5px 10px;

            border:
                1px solid #dce8f6;

            background:
                var(--teacher-blue-light);

            color:
                var(--teacher-primary);
        }


        /* =========================================================
           ADDRESS
        ========================================================= */

        .teacher-address {

            display:
                flex;

            align-items:
                flex-start;

            gap:
                12px;
        }

        .teacher-address-icon {

            width:
                36px;

            height:
                36px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            flex-shrink:
                0;

            border-radius:
                10px;

            background:
                var(--teacher-blue-light);

            color:
                var(--teacher-primary);
        }

        .teacher-address-text {

            color:
                #35415a;

            font-size:
                13px;

            font-weight:
                600;

            line-height:
                1.7;

            word-break:
                break-word;
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        .teacher-profile-footer {

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            gap:
                15px;

            padding:
                18px 20px;

            border-top:
                1px solid #edf0f5;

            background:
                #fcfdff;
        }

        .teacher-footer-note {

            display:
                flex;

            align-items:
                center;

            gap:
                8px;

            color:
                #8994a7;

            font-size:
                12px;
        }

        .teacher-footer-note i {

            color:
                var(--teacher-primary);

            font-size:
                15px;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 1100px) {

            .professional-grid {

                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }
        }


        @media (max-width: 992px) {

            .teacher-profile-page {

                padding:
                    15px 0 35px;
            }

            .teacher-info-grid {

                grid-template-columns:
                    1fr;
            }

            .teacher-full-card {

                grid-column:
                    auto;
            }
        }


        @media (max-width: 768px) {

            .teacher-profile-header {

                align-items:
                    flex-start;

                flex-direction:
                    column;

                padding:
                    19px;
            }

            .profile-header-title {

                font-size:
                    25px;
            }

            .profile-header-actions {

                width:
                    100%;
            }

            .profile-btn {

                flex:
                    1;
            }

            .teacher-profile-top {

                align-items:
                    flex-start;

                flex-direction:
                    column;

                padding:
                    23px;

                text-align:
                    center;
            }

            .teacher-large-avatar {

                margin:
                    0 auto;
            }

            .teacher-profile-top > div:last-child {

                width:
                    100%;
            }

            .teacher-profile-name {

                font-size:
                    24px;
            }

            .teacher-profile-status {

                margin-left:
                    4px;
            }

            .professional-grid {

                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .teacher-profile-footer {

                align-items:
                    flex-start;

                flex-direction:
                    column;
            }
        }


        @media (max-width: 576px) {

            .teacher-profile-page {

                padding:
                    10px 0 25px;
            }

            .teacher-profile-header {

                margin-bottom:
                    14px;

                padding:
                    17px 15px;
            }

            .profile-header-title {

                font-size:
                    22px;
            }

            .profile-header-subtitle {

                font-size:
                    13px;
            }

            .profile-header-actions {

                flex-direction:
                    column;
            }

            .profile-btn {

                width:
                    100%;
            }

            .teacher-profile-top {

                padding:
                    20px 15px;
            }

            .teacher-large-avatar {

                width:
                    85px;

                height:
                    85px;

                font-size:
                    32px;
            }

            .teacher-profile-name {

                font-size:
                    22px;
            }

            .teacher-info-grid {

                gap:
                    14px;

                padding:
                    14px;
            }

            .teacher-info-body {

                padding:
                    15px;
            }

            .teacher-info-row {

                gap:
                    12px;
            }

            .teacher-info-label {

                font-size:
                    11px;
            }

            .teacher-info-value {

                max-width:
                    62%;

                font-size:
                    12px;
            }

            .professional-grid {

                grid-template-columns:
                    1fr;
            }

            .teacher-profile-footer {

                padding:
                    15px;
            }
        }


        /* =========================================================
           REDUCED MOTION
        ========================================================= */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {

                animation-duration:
                    .01ms !important;

                animation-iteration-count:
                    1 !important;

                transition-duration:
                    .01ms !important;
            }
        }


        /* =========================================================
           ANIMATION
        ========================================================= */

        @keyframes teacherFadeUp {

            from {

                opacity:
                    0;

                transform:
                    translateY(14px);
            }

            to {

                opacity:
                    1;

                transform:
                    translateY(0);
            }
        }

    </style>


    {{-- =========================================================
         TEACHER PROFILE PAGE
    ========================================================== --}}

    <div class="teacher-profile-page">


        {{-- =====================================================
             PAGE HEADER
        ====================================================== --}}

        <div class="teacher-profile-header">

            <div>

                <h1 class="profile-header-title">
                    Teacher Profile
                </h1>

                <p class="profile-header-subtitle">
                    View complete teacher information and details
                </p>

            </div>


            <div class="profile-header-actions">

                <a
                    href="{{ route('admin.teachers.index') }}"
                    class="profile-btn profile-btn-secondary"
                >
                    <i class="bi bi-arrow-left"></i>
                    Back to Teachers
                </a>

                <a
                    href="{{ route('admin.teachers.edit', $teacher) }}"
                    class="profile-btn profile-btn-primary"
                >
                    <i class="bi bi-pencil-square"></i>
                    Edit Teacher
                </a>

            </div>

        </div>


        {{-- =====================================================
             MAIN PROFILE CARD
        ====================================================== --}}

        <div class="teacher-main-card">


            {{-- =================================================
                 PROFILE HEADER
            ================================================== --}}

            <div class="teacher-profile-top">

                <div class="teacher-large-avatar">

                    @if($teacher->profile_photo)

                        <img
                            src="{{ asset('storage/' . $teacher->profile_photo) }}"
                            alt="{{ $fullName ?: 'Teacher' }}"
                        >

                    @else

                        {{ $initial }}

                    @endif

                </div>


                <div>

                    <h2 class="teacher-profile-name">
                        {{ $fullName ?: 'Teacher' }}
                    </h2>


                    <span class="teacher-profile-id">

                        <i class="bi bi-person-badge"></i>

                        {{ $teacher->teacher_id ?? '—' }}

                    </span>


                    <span class="teacher-profile-status {{ $isActive ? 'active' : 'inactive' }}">

                        <span class="status-dot"></span>

                        {{ $isActive ? 'Active' : 'Inactive' }}

                    </span>

                </div>

            </div>


            {{-- =================================================
                 INFORMATION GRID
            ================================================== --}}

            <div class="teacher-info-grid">


                {{-- =================================================
                     PERSONAL INFORMATION
                ================================================== --}}

                <div class="teacher-info-card">

                    <div class="teacher-info-header">

                        <div class="teacher-info-icon">
                            <i class="bi bi-person-vcard"></i>
                        </div>

                        <h3 class="teacher-info-title">
                            Personal Information
                        </h3>

                    </div>


                    <div class="teacher-info-body">

                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                First Name
                            </span>

                            <span class="teacher-info-value">
                                {{ $teacher->first_name ?? '—' }}
                            </span>

                        </div>


                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                Last Name
                            </span>

                            <span class="teacher-info-value">
                                {{ $teacher->last_name ?? '—' }}
                            </span>

                        </div>


                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                Gender
                            </span>

                            <span class="teacher-info-value">
                                {{ $teacher->gender ? ucfirst($teacher->gender) : '—' }}
                            </span>

                        </div>


                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                Date of Birth
                            </span>

                            <span class="teacher-info-value">

                                @if($teacher->date_of_birth)

                                    {{ \Carbon\Carbon::parse($teacher->date_of_birth)->format('d M Y') }}

                                @else

                                    —

                                @endif

                            </span>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     CONTACT INFORMATION
                ================================================== --}}

                <div class="teacher-info-card">

                    <div class="teacher-info-header">

                        <div class="teacher-info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <h3 class="teacher-info-title">
                            Contact Information
                        </h3>

                    </div>


                    <div class="teacher-info-body">

                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                Email
                            </span>

                            <span class="teacher-info-value">
                                {{ $teacher->email ?? '—' }}
                            </span>

                        </div>


                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                Phone
                            </span>

                            <span class="teacher-info-value">
                                {{ $teacher->phone ?? '—' }}
                            </span>

                        </div>


                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                Alternate Phone
                            </span>

                            <span class="teacher-info-value">
                                {{ $teacher->alternate_phone ?? '—' }}
                            </span>

                        </div>


                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                City
                            </span>

                            <span class="teacher-info-value">
                                {{ $teacher->city ?? '—' }}
                            </span>

                        </div>


                        <div class="teacher-info-row">

                            <span class="teacher-info-label">
                                State
                            </span>

                            <span class="teacher-info-value">
                                {{ $teacher->state ?? '—' }}
                            </span>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     PROFESSIONAL INFORMATION
                ================================================== --}}

                <div class="teacher-info-card teacher-full-card">

                    <div class="teacher-info-header">

                        <div class="teacher-info-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>

                        <h3 class="teacher-info-title">
                            Professional Information
                        </h3>

                    </div>


                    <div class="teacher-info-body">

                        <div class="professional-grid">


                            {{-- SUBJECT --}}

                            <div class="professional-item">

                                <div class="professional-label">
                                    Subject
                                </div>

                                <div class="professional-value">

                                    @if($teacher->subject)

                                        <span class="teacher-subject-badge">
                                            {{ $teacher->subject }}
                                        </span>

                                    @else

                                        <span class="professional-value empty">
                                            —
                                        </span>

                                    @endif

                                </div>

                            </div>


                            {{-- QUALIFICATION --}}

                            <div class="professional-item">

                                <div class="professional-label">
                                    Qualification
                                </div>

                                <div class="professional-value">
                                    {{ $teacher->qualification ?? '—' }}
                                </div>

                            </div>


                            {{-- SPECIALIZATION --}}

                            <div class="professional-item">

                                <div class="professional-label">
                                    Specialization
                                </div>

                                <div class="professional-value">
                                    {{ $teacher->specialization ?? '—' }}
                                </div>

                            </div>


                            {{-- EXPERIENCE --}}

                            <div class="professional-item">

                                <div class="professional-label">
                                    Experience
                                </div>

                                <div class="professional-value">

                                    @if($teacher->experience !== null)

                                        {{ $teacher->experience }} years

                                    @else

                                        —

                                    @endif

                                </div>

                            </div>


                            {{-- EMPLOYMENT TYPE --}}

                            <div class="professional-item">

                                <div class="professional-label">
                                    Employment Type
                                </div>

                                <div class="professional-value">
                                    {{ $employmentType }}
                                </div>

                            </div>


                            {{-- JOINING DATE --}}

                            <div class="professional-item">

                                <div class="professional-label">
                                    Joining Date
                                </div>

                                <div class="professional-value">

                                    @if($teacher->joining_date)

                                        {{ \Carbon\Carbon::parse($teacher->joining_date)->format('d M Y') }}

                                    @else

                                        —

                                    @endif

                                </div>

                            </div>


                        </div>

                    </div>

                </div>


                {{-- =================================================
                     ADDRESS
                ================================================== --}}

                <div class="teacher-info-card teacher-full-card">

                    <div class="teacher-info-header">

                        <div class="teacher-info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <h3 class="teacher-info-title">
                            Address
                        </h3>

                    </div>


                    <div class="teacher-info-body">

                        <div class="teacher-address">

                            <div class="teacher-address-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>

                            <div class="teacher-address-text">

                                {{ $teacher->address ?? 'No address provided' }}

                                @if($teacher->city || $teacher->state)

                                    <br>

                                    {{ $teacher->city ?? '' }}

                                    @if($teacher->city && $teacher->state)
                                        ,
                                    @endif

                                    {{ $teacher->state ?? '' }}

                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 FOOTER
            ================================================== --}}

            <div class="teacher-profile-footer">

                <div class="teacher-footer-note">

                    <i class="bi bi-info-circle"></i>

                    Teacher information is managed from the teacher
                    management section.

                </div>


                <a
                    href="{{ route('admin.teachers.edit', $teacher) }}"
                    class="profile-btn profile-btn-primary"
                >

                    <i class="bi bi-pencil-square"></i>

                    Edit Information

                </a>

            </div>

        </div>

    </div>

</x-ladmin-panel>

