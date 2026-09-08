
<x-ladmin-panel title="Edit Teacher">

    <style>
        /* =========================================================
           TEACHER MANAGEMENT THEME
           SAME DESIGN AS teachers/index.blade.php
        ========================================================== */

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
            --teacher-cyan-light: #e8faff;

            --teacher-success: #16a34a;
            --teacher-danger: #dc3545;
            --teacher-danger-light: #fff0f1;
            --teacher-warning: #e59600;
            --teacher-warning-light: #fff6e5;

            --teacher-shadow: 0 8px 30px rgba(24, 52, 91, 0.07);
            --teacher-shadow-hover: 0 14px 35px rgba(20, 124, 245, 0.13);
        }


        /* =========================================================
           PAGE + GLOBAL LAYOUT
        ========================================================== */

        html,
        body {
            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(20, 124, 245, .045),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 90% 20%,
                    rgba(108, 99, 255, .045),
                    transparent 25%
                ),
                var(--teacher-bg) !important;

            color: var(--teacher-text) !important;
        }

        .app-wrapper,
        .app-main,
        .app-content,
        .content-wrapper {
            background: transparent !important;
        }


        /* =========================================================
           LIGHT SIDEBAR
           SAME AS INDEX.BLADE.PHP
        ========================================================== */

        html body .app-sidebar,
        html body .app-sidebar[data-bs-theme="dark"],
        html body .app-sidebar[data-bs-theme="light"],
        html body .main-sidebar,
        html body aside.app-sidebar,
        html body aside.main-sidebar,
        html body .sidebar-dark-primary {
            background: #ffffff !important;
            background-color: #ffffff !important;
            color: #596579 !important;
            border-right: 1px solid #e6edf5 !important;
            box-shadow: 4px 0 22px rgba(30, 50, 80, .045) !important;
        }

        .app-sidebar .sidebar-brand,
        .app-sidebar .brand-link,
        .main-sidebar .brand-link {
            background: #ffffff !important;
            background-color: #ffffff !important;
            color: var(--teacher-text) !important;
            border-bottom: 1px solid #edf1f6 !important;
        }

        .app-sidebar .brand-text,
        .main-sidebar .brand-text {
            color: var(--teacher-text) !important;
            font-weight: 800 !important;
        }

        .app-sidebar .sidebar-wrapper,
        .app-sidebar .nav,
        .main-sidebar .sidebar,
        .main-sidebar .nav {
            background: #ffffff !important;
        }

        .app-sidebar .nav-link,
        .main-sidebar .nav-link {
            position: relative;

            margin: 4px 10px !important;
            padding: 11px 13px !important;

            border-radius: 10px !important;

            background: transparent !important;
            color: #596579 !important;

            transition:
                background .25s ease,
                color .25s ease,
                transform .25s ease,
                box-shadow .25s ease;
        }

        .app-sidebar .nav-link .nav-icon,
        .app-sidebar .nav-link i,
        .main-sidebar .nav-link .nav-icon,
        .main-sidebar .nav-link i {
            color: #718096 !important;

            transition:
                color .25s ease,
                transform .25s ease;
        }

        .app-sidebar .nav-link:hover,
        .main-sidebar .nav-link:hover {
            background:
                linear-gradient(
                    135deg,
                    #eef6ff,
                    #f4f1ff
                ) !important;

            color: var(--teacher-primary) !important;

            transform: translateX(3px);

            box-shadow:
                0 4px 12px rgba(20, 124, 245, .06);
        }

        .app-sidebar .nav-link:hover i,
        .app-sidebar .nav-link:hover .nav-icon,
        .main-sidebar .nav-link:hover i,
        .main-sidebar .nav-link:hover .nav-icon {
            color: var(--teacher-primary) !important;
            transform: scale(1.08);
        }

        .app-sidebar .nav-link.active,
        .app-sidebar .nav-link[aria-current="page"],
        .main-sidebar .nav-link.active {
            background:
                linear-gradient(
                    135deg,
                    #eaf3ff,
                    #f0edff
                ) !important;

            color: var(--teacher-primary) !important;
            font-weight: 700 !important;

            box-shadow:
                0 5px 14px rgba(20, 124, 245, .09) !important;
        }

        .app-sidebar .nav-link.active::before,
        .app-sidebar .nav-link[aria-current="page"]::before,
        .main-sidebar .nav-link.active::before {
            content: "";

            position: absolute;

            top: 8px;
            bottom: 8px;
            left: 0;

            width: 3px;

            border-radius: 0 5px 5px 0;

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
            color: var(--teacher-primary) !important;
        }

        .app-sidebar .nav-header,
        .main-sidebar .nav-header {
            color: #9aa5b5 !important;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: .5px;
            text-transform: uppercase;
        }

        .app-sidebar .nav-treeview,
        .main-sidebar .nav-treeview {
            background: #fbfcff !important;
        }

        .app-sidebar .nav-treeview .nav-link,
        .main-sidebar .nav-treeview .nav-link {
            color: #697589 !important;
        }

        .app-sidebar::-webkit-scrollbar {
            width: 5px;
        }

        .app-sidebar::-webkit-scrollbar-track {
            background: #f8fafc;
        }

        .app-sidebar::-webkit-scrollbar-thumb {
            background: #d9e2ee;
            border-radius: 10px;
        }

        .app-sidebar::-webkit-scrollbar-thumb:hover {
            background: #b9cce3;
        }


        /* =========================================================
           LIGHT HEADER
           SAME AS INDEX.BLADE.PHP
        ========================================================== */

        .app-header,
        .main-header,
        .navbar,
        .navbar-dark,
        .navbar-black {
            background: rgba(255, 255, 255, .96) !important;
            color: var(--teacher-text) !important;

            border-bottom: 1px solid #e4eaf2 !important;

            box-shadow:
                0 3px 14px rgba(30, 50, 80, .05) !important;
        }

        .app-header .nav-link,
        .main-header .nav-link,
        .navbar .nav-link,
        .main-header a,
        .navbar a {
            color: #536174 !important;
        }

        .app-header .nav-link:hover,
        .main-header .nav-link:hover,
        .navbar .nav-link:hover,
        .main-header a:hover,
        .navbar a:hover {
            color: var(--teacher-primary) !important;
        }


        /* =========================================================
           PAGE
        ========================================================== */

        .teacher-edit-page {
            min-height: calc(100vh - 100px);

            padding: 18px 8px 45px;

            background:
                radial-gradient(
                    circle at 5% 0%,
                    rgba(20, 124, 245, .06),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 95% 15%,
                    rgba(108, 99, 255, .05),
                    transparent 25%
                ),
                var(--teacher-bg);

            color: var(--teacher-text);
        }

        .teacher-edit-wrapper {
            width: 100%;
            max-width: 1150px;
            margin: 0 auto;
        }


        /* =========================================================
           PAGE HEADER
        ========================================================== */

        .teacher-page-header {
            position: relative;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;

            margin-bottom: 20px;
            padding: 20px 22px;

            overflow: hidden;

            border: 1px solid rgba(20, 124, 245, .10);
            border-radius: 16px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.98),
                    rgba(247,250,255,.98)
                );

            box-shadow: var(--teacher-shadow);

            animation: teacherFadeUp .45s ease both;
        }

        .teacher-page-header::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 5px;
            height: 100%;

            background:
                linear-gradient(
                    180deg,
                    var(--teacher-primary),
                    var(--teacher-secondary),
                    var(--teacher-accent)
                );
        }

        .teacher-page-header-content {
            position: relative;
            z-index: 1;

            display: flex;
            align-items: center;

            gap: 14px;
        }

        .teacher-page-header-icon {
            width: 50px;
            height: 50px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 14px;

            background:
                linear-gradient(
                    135deg,
                    var(--teacher-primary),
                    var(--teacher-secondary)
                );

            color: #ffffff;

            font-size: 22px;

            box-shadow:
                0 9px 23px rgba(20, 124, 245, .20);
        }

        .teacher-page-header h1 {
            margin: 0;

            color: var(--teacher-text);

            font-size: 27px;
            font-weight: 800;

            letter-spacing: -.5px;
        }

        .teacher-page-subtitle {
            margin-top: 5px;

            color: var(--teacher-muted);

            font-size: 13px;
        }


        /* =========================================================
           BUTTONS
        ========================================================== */

        .teacher-btn {
            min-height: 42px;

            padding: 0 16px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 8px;

            border: 0;
            border-radius: 10px;

            font-size: 13px;
            font-weight: 700;

            text-decoration: none !important;

            cursor: pointer;

            transition:
                transform .25s ease,
                box-shadow .25s ease,
                background .25s ease,
                border-color .25s ease,
                color .25s ease;
        }

        .teacher-btn:hover {
            transform: translateY(-2px);
        }

        .teacher-btn-primary {
            background:
                linear-gradient(
                    135deg,
                    var(--teacher-primary),
                    var(--teacher-secondary)
                );

            color: #ffffff !important;

            box-shadow:
                0 8px 20px rgba(20,124,245,.18);
        }

        .teacher-btn-primary:hover {
            color: #ffffff !important;

            box-shadow:
                0 12px 28px rgba(20,124,245,.27);
        }

        .teacher-btn-secondary {
            border: 1px solid #dfe6ef;

            background: #ffffff;

            color: #536174 !important;
        }

        .teacher-btn-secondary:hover {
            border-color: #cfd9e6;

            background: #f7faff;

            color: var(--teacher-primary) !important;

            box-shadow:
                0 5px 14px rgba(20,124,245,.06);
        }


        /* =========================================================
           ALERT
        ========================================================== */

        .teacher-alert {
            display: flex;
            align-items: flex-start;

            gap: 12px;

            margin-bottom: 20px;
            padding: 15px 17px;

            border: 1px solid #f5c2c7;
            border-radius: 13px;

            background: #fff1f2;

            color: #b4232f;

            font-size: 13px;

            animation: teacherFadeUp .4s ease both;
        }

        .teacher-alert-icon {
            width: 35px;
            height: 35px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 10px;

            background: var(--teacher-danger);

            color: #ffffff;
        }

        .teacher-alert-content strong {
            display: block;

            margin-bottom: 4px;

            font-weight: 800;
        }

        .teacher-alert ul {
            margin: 5px 0 0;
            padding-left: 18px;
        }

        .teacher-alert li {
            margin-bottom: 3px;
        }


        /* =========================================================
           FORM CARD
        ========================================================== */

        .teacher-form-card {
            position: relative;

            overflow: hidden;

            margin-bottom: 18px;

            border: 1px solid var(--teacher-border);
            border-radius: 16px;

            background: rgba(255,255,255,.98);

            box-shadow: var(--teacher-shadow);

            animation: teacherFadeUp .5s ease both;

            transition:
                box-shadow .25s ease,
                transform .25s ease;
        }

        .teacher-form-card:hover {
            box-shadow: var(--teacher-shadow-hover);
        }

        .teacher-form-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 3px;

            background:
                linear-gradient(
                    90deg,
                    var(--teacher-primary),
                    var(--teacher-secondary),
                    var(--teacher-accent)
                );
        }


        /* =========================================================
           FORM HEADER
        ========================================================== */

        .teacher-form-header {
            display: flex;
            align-items: center;

            gap: 11px;

            padding: 16px 20px;

            border-bottom: 1px solid #edf1f6;

            background:
                linear-gradient(
                    180deg,
                    #ffffff,
                    #fcfdff
                );
        }

        .teacher-form-header-icon {
            width: 39px;
            height: 39px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 10px;

            background: var(--teacher-blue-light);

            color: var(--teacher-primary);

            font-size: 18px;
        }

        .teacher-form-header h3 {
            margin: 0;

            color: var(--teacher-text);

            font-size: 16px;
            font-weight: 800;
        }

        .teacher-form-header p {
            margin: 3px 0 0;

            color: var(--teacher-muted);

            font-size: 11px;
        }

        .teacher-form-body {
            padding: 20px;
        }


        /* =========================================================
           FORM CONTROLS
        ========================================================== */

        .teacher-form-group {
            position: relative;
        }

        .teacher-form-label {
            display: block;

            margin-bottom: 7px;

            color: #334155;

            font-size: 12px;
            font-weight: 750;
        }

        .teacher-form-label .required {
            color: var(--teacher-danger);
        }

        .teacher-form-control {
            width: 100%;

            min-height: 43px;

            padding: 9px 12px;

            border: 1px solid #dce4ee;
            border-radius: 9px;

            outline: none;

            background: #ffffff;

            color: var(--teacher-text);

            font-size: 13px;

            transition:
                border-color .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }

        .teacher-form-control:hover {
            border-color: #c8d5e3;
        }

        .teacher-form-control:focus {
            border-color: var(--teacher-primary);

            background: #ffffff;

            box-shadow:
                0 0 0 3px rgba(20,124,245,.09);
        }

        .teacher-form-control::placeholder {
            color: #a3adbb;
        }

        textarea.teacher-form-control {
            min-height: 105px;

            resize: vertical;

            line-height: 1.55;
        }

        select.teacher-form-control {
            cursor: pointer;
        }

        .teacher-form-help {
            margin-top: 6px;

            color: #8994a7;

            font-size: 11px;

            line-height: 1.4;
        }

        .teacher-form-control.is-invalid {
            border-color: #e63946;

            box-shadow:
                0 0 0 3px rgba(230,57,70,.07);
        }


        /* =========================================================
           PROFESSIONAL GRID
           SAME 3-COLUMN STYLE AS SHOW PAGE
        ========================================================== */

        .professional-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 16px;
        }

        .professional-item {
            min-width: 0;

            min-height: 94px;

            padding: 14px 15px;

            display: flex;
            flex-direction: column;
            justify-content: center;

            border: 1px solid #edf1f6;

            border-radius: 11px;

            background: #fbfcff;

            transition:
                background .25s ease,
                border-color .25s ease,
                transform .25s ease,
                box-shadow .25s ease;
        }

        .professional-item:hover {
            background: #f7faff;

            border-color: #dce8f6;

            transform: translateY(-2px);

            box-shadow:
                0 5px 15px rgba(20,124,245,.05);
        }

        .professional-label {
            margin-bottom: 7px;

            color: #8994a7;

            font-size: 11px;
            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: .35px;
        }

        .professional-field {
            width: 100%;
        }

        .professional-field .teacher-form-control {
            min-height: 42px;
        }


        /* =========================================================
           CURRENT PHOTO
        ========================================================== */

        .teacher-current-photo {
            display: flex;
            align-items: center;

            gap: 16px;

            margin-bottom: 18px;

            padding: 15px;

            border: 1px solid #e4edf7;

            border-radius: 13px;

            background:
                linear-gradient(
                    135deg,
                    #f8fbff,
                    #fbfcff
                );
        }

        .teacher-current-photo img,
        .teacher-photo-placeholder {
            width: 82px;
            height: 82px;

            flex-shrink: 0;

            border: 4px solid #ffffff;

            border-radius: 50%;

            object-fit: cover;

            box-shadow:
                0 7px 20px rgba(20,60,100,.11);
        }

        .teacher-photo-placeholder {
            display: flex;
            align-items: center;
            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #eaf3ff,
                    #f0edff
                );

            color: var(--teacher-primary);

            font-size: 28px;
            font-weight: 800;
        }

        .teacher-current-photo-info {
            color: var(--teacher-muted);

            font-size: 12px;

            line-height: 1.55;
        }

        .teacher-current-photo-info strong {
            display: block;

            margin-bottom: 4px;

            color: var(--teacher-text);

            font-size: 13px;
            font-weight: 800;
        }


        /* =========================================================
           FILE INPUT
        ========================================================== */

        input[type="file"].teacher-form-control {
            padding: 7px 9px;

            cursor: pointer;
        }

        input[type="file"].teacher-form-control::file-selector-button {
            margin-right: 9px;

            padding: 7px 11px;

            border: 0;
            border-radius: 7px;

            background: var(--teacher-blue-light);

            color: var(--teacher-primary-dark);

            font-size: 11px;
            font-weight: 700;

            cursor: pointer;

            transition: background .2s ease;
        }

        input[type="file"].teacher-form-control::file-selector-button:hover {
            background: #dcecff;
        }


        /* =========================================================
           PHOTO PREVIEW
        ========================================================== */

        .teacher-photo-preview {
            display: none;

            margin-top: 16px;

            padding: 15px;

            border: 1px dashed #cbd9e8;

            border-radius: 13px;

            background: #f8fbff;
        }

        .teacher-photo-preview.show {
            display: block;

            animation: teacherFadeIn .3s ease;
        }

        .teacher-photo-preview-label {
            margin-bottom: 10px;

            color: var(--teacher-text);

            font-size: 12px;
            font-weight: 750;
        }

        .teacher-photo-preview img {
            width: 105px;
            height: 105px;

            border: 4px solid #ffffff;

            border-radius: 50%;

            object-fit: cover;

            box-shadow:
                0 8px 22px rgba(20,60,100,.12);
        }


        /* =========================================================
           FORM ACTIONS
        ========================================================== */

        .teacher-form-actions {
            display: flex;

            align-items: center;
            justify-content: space-between;

            gap: 12px;

            flex-wrap: wrap;

            padding: 16px 18px;

            border: 1px solid var(--teacher-border);

            border-radius: 16px;

            background: rgba(255,255,255,.98);

            box-shadow: var(--teacher-shadow);
        }

        .teacher-action-left,
        .teacher-action-right {
            display: flex;

            align-items: center;

            gap: 9px;

            flex-wrap: wrap;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================== */

        @media (max-width: 1100px) {

            .professional-grid {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }
        }


        @media (max-width: 900px) {

            .teacher-edit-page {
                padding: 15px 6px 35px;
            }
        }


        @media (max-width: 768px) {

            .teacher-page-header {
                align-items: flex-start;

                flex-direction: column;

                padding: 18px;
            }

            .teacher-page-header > .d-flex {
                width: 100%;
            }

            .teacher-page-header-content {
                align-items: flex-start;
            }

            .teacher-page-header h1 {
                font-size: 24px;
            }

            .teacher-page-subtitle {
                font-size: 12px;
            }

            .teacher-page-header .teacher-btn {
                width: 100%;
            }

            .teacher-form-body {
                padding: 17px;
            }

            .teacher-form-header {
                padding: 15px 17px;
            }

            .teacher-form-actions {
                padding: 15px;
            }

            .teacher-action-left,
            .teacher-action-right {
                width: 100%;
            }

            .teacher-action-left .teacher-btn,
            .teacher-action-right .teacher-btn {
                flex: 1;
            }
        }


        @media (max-width: 575px) {

            .teacher-edit-page {
                padding: 10px 0 25px;
            }

            .teacher-page-header {
                padding: 16px 14px;
            }

            .teacher-page-header-content {
                gap: 10px;
            }

            .teacher-page-header-icon {
                width: 44px;
                height: 44px;

                font-size: 19px;
            }

            .teacher-page-header h1 {
                font-size: 21px;
            }

            .teacher-form-header h3 {
                font-size: 15px;
            }

            .teacher-form-body {
                padding: 14px;
            }

            .teacher-current-photo {
                align-items: flex-start;

                gap: 12px;
            }

            .teacher-current-photo img,
            .teacher-photo-placeholder {
                width: 68px;
                height: 68px;
            }

            .teacher-action-left,
            .teacher-action-right {
                flex-direction: column;

                width: 100%;
            }

            .teacher-btn {
                width: 100%;
            }

            .teacher-alert {
                padding: 13px;
            }

            .professional-grid {
                grid-template-columns: 1fr;
            }
        }


        /* =========================================================
           REDUCED MOTION
        ========================================================== */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;

                animation-iteration-count: 1 !important;

                transition-duration: .01ms !important;
            }
        }


        /* =========================================================
           ANIMATIONS
        ========================================================== */

        @keyframes teacherFadeUp {

            from {
                opacity: 0;

                transform: translateY(12px);
            }

            to {
                opacity: 1;

                transform: translateY(0);
            }
        }

        @keyframes teacherFadeIn {

            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>


    {{-- =========================================================
         EDIT TEACHER PAGE
    ========================================================== --}}

    <div class="teacher-edit-page">

        <div class="teacher-edit-wrapper">


            {{-- =====================================================
                 PAGE HEADER
            ====================================================== --}}

            <div class="teacher-page-header">

                <div
                    class="d-flex justify-content-between align-items-center flex-wrap gap-3 w-100"
                >

                    <div class="teacher-page-header-content">

                        <div class="teacher-page-header-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>

                        <div>

                            <h1>
                                Edit Teacher
                            </h1>

                            <div class="teacher-page-subtitle">
                                Update teacher information and profile details
                            </div>

                        </div>

                    </div>


                    <a
                        href="{{ route('admin.teachers.show', $teacher) }}"
                        class="teacher-btn teacher-btn-secondary"
                    >
                        <i class="bi bi-arrow-left"></i>
                        Back to Profile
                    </a>

                </div>

            </div>


            {{-- =====================================================
                 VALIDATION ERRORS
            ====================================================== --}}

            @if($errors->any())

                <div class="teacher-alert">

                    <div class="teacher-alert-icon">
                        <i class="bi bi-exclamation-triangle"></i>
                    </div>

                    <div class="teacher-alert-content">

                        <strong>
                            Please correct the following errors:
                        </strong>

                        <ul>

                            @foreach($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>

            @endif


            {{-- =====================================================
                 FORM
            ====================================================== --}}

            <form
                action="{{ route('admin.teachers.update', $teacher) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                @method('PUT')


                {{-- =================================================
                     PERSONAL INFORMATION
                ================================================== --}}

                <div class="teacher-form-card">

                    <div class="teacher-form-header">

                        <div class="teacher-form-header-icon">
                            <i class="bi bi-person-vcard"></i>
                        </div>

                        <div>

                            <h3>
                                Personal Information
                            </h3>

                            <p>
                                Basic information about the teacher
                            </p>

                        </div>

                    </div>


                    <div class="teacher-form-body">

                        <div class="row g-3">


                            {{-- Teacher ID --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">

                                    Teacher ID

                                    <span class="required">*</span>

                                </label>

                                <input
                                    type="text"
                                    name="teacher_id"
                                    class="teacher-form-control @error('teacher_id') is-invalid @enderror"
                                    value="{{ old('teacher_id', $teacher->teacher_id) }}"
                                    required
                                >

                            </div>


                            {{-- Gender --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">
                                    Gender
                                </label>

                                <select
                                    name="gender"
                                    class="teacher-form-control @error('gender') is-invalid @enderror"
                                >

                                    <option value="">
                                        Select Gender
                                    </option>

                                    <option
                                        value="Male"
                                        {{ old('gender', $teacher->gender) == 'Male' ? 'selected' : '' }}
                                    >
                                        Male
                                    </option>

                                    <option
                                        value="Female"
                                        {{ old('gender', $teacher->gender) == 'Female' ? 'selected' : '' }}
                                    >
                                        Female
                                    </option>

                                    <option
                                        value="Other"
                                        {{ old('gender', $teacher->gender) == 'Other' ? 'selected' : '' }}
                                    >
                                        Other
                                    </option>

                                </select>

                            </div>


                            {{-- First Name --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">

                                    First Name

                                    <span class="required">*</span>

                                </label>

                                <input
                                    type="text"
                                    name="first_name"
                                    class="teacher-form-control @error('first_name') is-invalid @enderror"
                                    value="{{ old('first_name', $teacher->first_name) }}"
                                    required
                                >

                            </div>


                            {{-- Last Name --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">

                                    Last Name

                                    <span class="required">*</span>

                                </label>

                                <input
                                    type="text"
                                    name="last_name"
                                    class="teacher-form-control @error('last_name') is-invalid @enderror"
                                    value="{{ old('last_name', $teacher->last_name) }}"
                                    required
                                >

                            </div>


                            {{-- Date of Birth --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">
                                    Date of Birth
                                </label>

                                <input
                                    type="date"
                                    name="date_of_birth"
                                    class="teacher-form-control @error('date_of_birth') is-invalid @enderror"
                                    value="{{ old(
                                        'date_of_birth',
                                        optional($teacher->date_of_birth)->format('Y-m-d')
                                    ) }}"
                                >

                            </div>


                            {{-- Status --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">

                                    Status

                                    <span class="required">*</span>

                                </label>

                                <select
                                    name="status"
                                    class="teacher-form-control @error('status') is-invalid @enderror"
                                    required
                                >

                                    <option
                                        value="active"
                                        {{ old('status', $teacher->status) == 'active' ? 'selected' : '' }}
                                    >
                                        Active
                                    </option>

                                    <option
                                        value="inactive"
                                        {{ old('status', $teacher->status) == 'inactive' ? 'selected' : '' }}
                                    >
                                        Inactive
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     CONTACT INFORMATION
                ================================================== --}}

                <div class="teacher-form-card">

                    <div class="teacher-form-header">

                        <div class="teacher-form-header-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>

                            <h3>
                                Contact Information
                            </h3>

                            <p>
                                Teacher contact and address details
                            </p>

                        </div>

                    </div>


                    <div class="teacher-form-body">

                        <div class="row g-3">


                            {{-- Email --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="teacher-form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', $teacher->email) }}"
                                    placeholder="teacher@example.com"
                                >

                            </div>


                            {{-- Phone --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">

                                    Phone

                                    <span class="required">*</span>

                                </label>

                                <input
                                    type="text"
                                    name="phone"
                                    class="teacher-form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone', $teacher->phone) }}"
                                    required
                                >

                            </div>


                            {{-- Alternate Phone --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">
                                    Alternate Phone
                                </label>

                                <input
                                    type="text"
                                    name="alternate_phone"
                                    class="teacher-form-control @error('alternate_phone') is-invalid @enderror"
                                    value="{{ old(
                                        'alternate_phone',
                                        $teacher->alternate_phone
                                    ) }}"
                                >

                            </div>


                            {{-- City --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">
                                    City
                                </label>

                                <input
                                    type="text"
                                    name="city"
                                    class="teacher-form-control @error('city') is-invalid @enderror"
                                    value="{{ old('city', $teacher->city) }}"
                                >

                            </div>


                            {{-- State --}}

                            <div class="col-md-6">

                                <label class="teacher-form-label">
                                    State
                                </label>

                                <input
                                    type="text"
                                    name="state"
                                    class="teacher-form-control @error('state') is-invalid @enderror"
                                    value="{{ old('state', $teacher->state) }}"
                                >

                            </div>


                            {{-- Address --}}

                            <div class="col-12">

                                <label class="teacher-form-label">
                                    Address
                                </label>

                                <textarea
                                    name="address"
                                    class="teacher-form-control @error('address') is-invalid @enderror"
                                    rows="3"
                                    placeholder="Enter complete address"
                                >{{ old('address', $teacher->address) }}</textarea>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     PROFESSIONAL INFORMATION
                ================================================== --}}

                <div class="teacher-form-card">

                    <div class="teacher-form-header">

                        <div class="teacher-form-header-icon">
                            <i class="bi bi-briefcase"></i>
                        </div>

                        <div>

                            <h3>
                                Professional Information
                            </h3>

                            <p>
                                Qualification, subject and employment details
                            </p>

                        </div>

                    </div>


                    <div class="teacher-form-body">

                        <div class="professional-grid">


                            {{-- Subject --}}

                            <div class="professional-item">

                                <label class="professional-label">
                                    Subject
                                </label>

                                <div class="professional-field">

                                    <input
                                        type="text"
                                        name="subject"
                                        class="teacher-form-control @error('subject') is-invalid @enderror"
                                        value="{{ old('subject', $teacher->subject) }}"
                                        placeholder="e.g. Mathematics"
                                    >

                                </div>

                            </div>


                            {{-- Qualification --}}

                            <div class="professional-item">

                                <label class="professional-label">
                                    Qualification
                                </label>

                                <div class="professional-field">

                                    <input
                                        type="text"
                                        name="qualification"
                                        class="teacher-form-control @error('qualification') is-invalid @enderror"
                                        value="{{ old(
                                            'qualification',
                                            $teacher->qualification
                                        ) }}"
                                        placeholder="e.g. B.Ed, M.Ed"
                                    >

                                </div>

                            </div>


                            {{-- Specialization --}}

                            <div class="professional-item">

                                <label class="professional-label">
                                    Specialization
                                </label>

                                <div class="professional-field">

                                    <input
                                        type="text"
                                        name="specialization"
                                        class="teacher-form-control @error('specialization') is-invalid @enderror"
                                        value="{{ old(
                                            'specialization',
                                            $teacher->specialization
                                        ) }}"
                                        placeholder="e.g. Science Education"
                                    >

                                </div>

                            </div>


                            {{-- Experience --}}

                            <div class="professional-item">

                                <label class="professional-label">
                                    Experience
                                </label>

                                <div class="professional-field">

                                    <input
                                        type="number"
                                        name="experience"
                                        class="teacher-form-control @error('experience') is-invalid @enderror"
                                        value="{{ old(
                                            'experience',
                                            $teacher->experience
                                        ) }}"
                                        min="0"
                                        max="99.9"
                                        step="0.1"
                                        placeholder="Years"
                                    >

                                </div>

                            </div>


                            {{-- Employment Type --}}

                            <div class="professional-item">

                                <label class="professional-label">
                                    Employment Type
                                </label>

                                <div class="professional-field">

                                    <select
                                        name="employment_type"
                                        class="teacher-form-control @error('employment_type') is-invalid @enderror"
                                    >

                                        <option value="">
                                            Select Employment Type
                                        </option>

                                        <option
                                            value="Full Time"
                                            {{ old(
                                                'employment_type',
                                                $teacher->employment_type
                                            ) == 'Full Time' ? 'selected' : '' }}
                                        >
                                            Full Time
                                        </option>

                                        <option
                                            value="Part Time"
                                            {{ old(
                                                'employment_type',
                                                $teacher->employment_type
                                            ) == 'Part Time' ? 'selected' : '' }}
                                        >
                                            Part Time
                                        </option>

                                        <option
                                            value="Contract"
                                            {{ old(
                                                'employment_type',
                                                $teacher->employment_type
                                            ) == 'Contract' ? 'selected' : '' }}
                                        >
                                            Contract
                                        </option>

                                        <option
                                            value="Guest"
                                            {{ old(
                                                'employment_type',
                                                $teacher->employment_type
                                            ) == 'Guest' ? 'selected' : '' }}
                                        >
                                            Guest
                                        </option>

                                    </select>

                                </div>

                            </div>


                            {{-- Joining Date --}}

                            <div class="professional-item">

                                <label class="professional-label">
                                    Joining Date
                                </label>

                                <div class="professional-field">

                                    <input
                                        type="date"
                                        name="joining_date"
                                        class="teacher-form-control @error('joining_date') is-invalid @enderror"
                                        value="{{ old(
                                            'joining_date',
                                            optional($teacher->joining_date)->format('Y-m-d')
                                        ) }}"
                                    >

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     PROFILE PHOTO
                ================================================== --}}

                <div class="teacher-form-card">

                    <div class="teacher-form-header">

                        <div class="teacher-form-header-icon">
                            <i class="bi bi-camera"></i>
                        </div>

                        <div>

                            <h3>
                                Profile Photo
                            </h3>

                            <p>
                                Manage the teacher's profile picture
                            </p>

                        </div>

                    </div>


                    <div class="teacher-form-body">


                        {{-- Current Photo --}}

                        @if($teacher->profile_photo)

                            <div class="teacher-current-photo">

                                <img
                                    src="{{ asset('storage/' . $teacher->profile_photo) }}"
                                    alt="{{ trim(($teacher->first_name ?? '') . ' ' . ($teacher->last_name ?? '')) }}"
                                >

                                <div class="teacher-current-photo-info">

                                    <strong>
                                        Current Profile Photo
                                    </strong>

                                    Upload a new photo below to replace
                                    the existing profile picture.

                                </div>

                            </div>

                        @else

                            <div class="teacher-current-photo">

                                <div class="teacher-photo-placeholder">

                                    {{ strtoupper(
                                        substr(
                                            $teacher->first_name ?? 'T',
                                            0,
                                            1
                                        )
                                    ) }}

                                </div>

                                <div class="teacher-current-photo-info">

                                    <strong>
                                        No Profile Photo
                                    </strong>

                                    You can upload a profile photo below.

                                </div>

                            </div>

                        @endif


                        {{-- Upload --}}

                        <label class="teacher-form-label">
                            Replace Profile Photo
                        </label>

                        <input
                            type="file"
                            name="profile_photo"
                            id="profile_photo"
                            class="teacher-form-control @error('profile_photo') is-invalid @enderror"
                            accept=".jpg,.jpeg,.png,.webp"
                        >

                        <div class="teacher-form-help">
                            JPG, JPEG, PNG or WEBP. Maximum size: 2 MB.
                        </div>


                        {{-- Preview --}}

                        <div
                            class="teacher-photo-preview"
                            id="photoPreview"
                        >

                            <div class="teacher-photo-preview-label">
                                New Photo Preview
                            </div>

                            <img
                                id="previewImage"
                                src=""
                                alt="New profile photo preview"
                            >

                        </div>

                    </div>

                </div>


                {{-- =================================================
                     FORM ACTIONS
                ================================================== --}}

                <div class="teacher-form-actions">

                    <div class="teacher-action-left">

                        <a
                            href="{{ route('admin.teachers.show', $teacher) }}"
                            class="teacher-btn teacher-btn-secondary"
                        >
                            <i class="bi bi-x-lg"></i>
                            Cancel
                        </a>

                    </div>


                    <div class="teacher-action-right">

                        <button
                            type="submit"
                            class="teacher-btn teacher-btn-primary"
                        >
                            <i class="bi bi-check-lg"></i>
                            Update Teacher
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>


    {{-- =============================================================
         PHOTO PREVIEW
    ============================================================== --}}

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const photoInput =
                document.getElementById('profile_photo');

            const previewContainer =
                document.getElementById('photoPreview');

            const previewImage =
                document.getElementById('previewImage');


            if (
                !photoInput ||
                !previewContainer ||
                !previewImage
            ) {
                return;
            }


            photoInput.addEventListener('change', function (event) {

                const file =
                    event.target.files[0];


                if (!file) {

                    previewContainer.classList.remove('show');

                    previewImage.src = '';

                    return;
                }


                if (!file.type.startsWith('image/')) {

                    previewContainer.classList.remove('show');

                    previewImage.src = '';

                    return;
                }


                if (file.size > 2 * 1024 * 1024) {

                    alert('Profile photo must be 2 MB or smaller.');

                    photoInput.value = '';

                    previewContainer.classList.remove('show');

                    previewImage.src = '';

                    return;
                }


                const reader =
                    new FileReader();


                reader.onload = function (e) {

                    previewImage.src =
                        e.target.result;

                    previewContainer.classList.add('show');

                };


                reader.readAsDataURL(file);

            });

        });
    </script>

</x-ladmin-panel>

