<x-ladmin-panel title="Assign Class Teacher">


<style>

    /* =========================================================
       ASSIGN CLASS TEACHER - LIGHT THEME
    ========================================================= */

    :root {
        --assign-blue: #147cf5;
        --assign-blue-dark: #1268ca;
        --assign-blue-light: #eaf3ff;
        --assign-purple: #7c4dff;
        --assign-purple-dark: #6639df;
        --assign-purple-light: #f1edff;
        --assign-cyan: #12b8d4;
        --assign-cyan-light: #e9fbff;
        --assign-green: #19a974;
        --assign-green-light: #eafaf3;
        --assign-orange: #ff9f1c;
        --assign-orange-light: #fff5e5;
        --assign-red: #ef5350;
        --assign-red-light: #fff0ef;
        --assign-bg: #f5f8fc;
        --assign-text: #17213c;
        --assign-text-soft: #29344d;
        --assign-muted: #7b8497;
        --assign-border: #e3eaf3;
        --assign-shadow: 0 8px 28px rgba(24, 35, 55, .07);
        --assign-shadow-hover: 0 16px 40px rgba(24, 35, 55, .12);
    }

    /* =========================================================
       GLOBAL PAGE
    ========================================================= */

    html,
    body {
        background: var(--assign-bg) !important;
        color: var(--assign-text) !important;
    }

    .app-wrapper,
    .app-main,
    .app-content,
    .content-wrapper {
        background: var(--assign-bg) !important;
    }

    /* =========================================================
       SIDEBAR
    ========================================================= */

    .app-sidebar,
    .app-sidebar[data-bs-theme="dark"],
    .app-sidebar[data-bs-theme="light"],
    .main-sidebar,
    .sidebar-dark-primary {
        background: #ffffff !important;
        color: #596579 !important;
        border-right: 1px solid var(--assign-border) !important;
        box-shadow: 4px 0 22px rgba(30, 50, 80, .045) !important;
    }

    .app-sidebar .sidebar-brand,
    .app-sidebar .brand-link,
    .main-sidebar .brand-link {
        background: #ffffff !important;
        color: var(--assign-text) !important;
        border-bottom: 1px solid var(--assign-border) !important;
    }

    .app-sidebar .brand-text,
    .main-sidebar .brand-text {
        color: var(--assign-text) !important;
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
        color: #596579 !important;
        background: transparent !important;
        border-radius: 9px;
        margin: 2px 8px;
        transition: all .2s ease;
    }

    .app-sidebar .nav-link .nav-icon,
    .app-sidebar .nav-link i,
    .main-sidebar .nav-link .nav-icon,
    .main-sidebar .nav-link i {
        color: #707c90 !important;
        transition: all .2s ease;
    }

    .app-sidebar .nav-link:hover,
    .main-sidebar .nav-link:hover {
        background: var(--assign-blue-light) !important;
        color: var(--assign-blue) !important;
        transform: translateX(2px);
    }

    .app-sidebar .nav-link:hover .nav-icon,
    .app-sidebar .nav-link:hover i,
    .main-sidebar .nav-link:hover .nav-icon,
    .main-sidebar .nav-link:hover i {
        color: var(--assign-blue) !important;
    }

    .app-sidebar .nav-link.active,
    .main-sidebar .nav-link.active {
        background: var(--assign-blue-light) !important;
        color: var(--assign-blue) !important;
        font-weight: 700;
    }

    .app-sidebar .nav-link.active .nav-icon,
    .app-sidebar .nav-link.active i,
    .main-sidebar .nav-link.active .nav-icon,
    .main-sidebar .nav-link.active i {
        color: var(--assign-blue) !important;
    }

    .app-sidebar .nav-header,
    .main-sidebar .nav-header {
        color: #8a94a6 !important;
    }

    .app-sidebar .nav-arrow,
    .main-sidebar .nav-arrow {
        color: #8a94a6 !important;
    }

    /* =========================================================
       NAVBAR
    ========================================================= */

    .app-header,
    .app-header[data-bs-theme="dark"],
    .main-header,
    .navbar,
    .navbar-dark,
    .navbar-black {
        background: #ffffff !important;
        color: #596579 !important;
        border-bottom: 1px solid var(--assign-border) !important;
        box-shadow: 0 2px 12px rgba(24, 35, 55, .035) !important;
    }

    .app-header .nav-link,
    .main-header .nav-link,
    .navbar .nav-link {
        color: #596579 !important;
        transition: color .2s ease;
    }

    .app-header .nav-link:hover,
    .main-header .nav-link:hover,
    .navbar .nav-link:hover {
        color: var(--assign-blue) !important;
    }

    .app-header .nav-link i,
    .main-header .nav-link i,
    .navbar .nav-link i {
        color: #596579 !important;
    }

    /* =========================================================
       FOOTER
    ========================================================= */

    .app-footer,
    .app-footer[data-bs-theme="dark"] {
        background: #ffffff !important;
        color: var(--assign-muted) !important;
        border-top: 1px solid var(--assign-border) !important;
    }

    .app-footer a {
        color: var(--assign-blue) !important;
    }

    /* =========================================================
       MAIN PAGE
    ========================================================= */

    .assign-class-page {
        min-height: calc(100vh - 120px);
        padding: 22px 0 40px;
        background:
            radial-gradient(
                circle at top right,
                rgba(20, 124, 245, .055),
                transparent 30%
            ),
            radial-gradient(
                circle at bottom left,
                rgba(124, 77, 255, .035),
                transparent 25%
            ),
            var(--assign-bg);
    }

    /* =========================================================
       PAGE HEADER
    ========================================================= */

    .assign-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 24px;
    }

    .assign-title {
        position: relative;
        padding-left: 16px;
    }

    .assign-title::before {
        content: "";
        position: absolute;
        top: 3px;
        bottom: 3px;
        left: 0;
        width: 4px;
        border-radius: 10px;
        background: linear-gradient(
            180deg,
            var(--assign-blue),
            var(--assign-purple)
        );
    }

    .assign-title h2 {
        margin: 0;
        color: var(--assign-text) !important;
        font-size: 28px;
        font-weight: 750;
        letter-spacing: -.5px;
    }

    .assign-title p {
        margin: 7px 0 0;
        color: var(--assign-muted) !important;
        font-size: 14px;
    }

    /* =========================================================
       HEADER BUTTON ALIGNMENT
    ========================================================= */

    .assign-header-actions {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 11px;
        flex-wrap: wrap;
    }

    .teacher-back-btn,
    .btn-view-assigned {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 45px;
        padding: 0 18px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 700;
        line-height: 1;
        white-space: nowrap;
        text-decoration: none !important;
        transition:
            transform .22s ease,
            border-color .22s ease,
            background .22s ease,
            color .22s ease,
            box-shadow .22s ease;
    }

    .teacher-back-btn {
        border: 1px solid #dfe5ee;
        background: #ffffff !important;
        color: #536078 !important;
        box-shadow: 0 5px 13px rgba(24, 52, 91, .06);
    }

    .teacher-back-btn i {
        color: #718096 !important;
        font-size: 16px;
        line-height: 1;
        transition: transform .22s ease, color .22s ease;
    }

    .teacher-back-btn:hover {
        border-color: #b9d8fb !important;
        background: #eef6ff !important;
        color: var(--assign-blue) !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(20, 124, 245, .13);
    }

    .teacher-back-btn:hover i {
        color: var(--assign-blue) !important;
        transform: translateX(-4px);
    }

    .btn-view-assigned {
        border: 1px solid #cfe1fb;
        background: #ffffff !important;
        color: var(--assign-blue) !important;
        box-shadow: 0 4px 12px rgba(20, 124, 245, .07);
    }

    .btn-view-assigned i {
        color: var(--assign-blue) !important;
        font-size: 15px;
        transition: transform .22s ease, color .22s ease;
    }

    .btn-view-assigned:hover {
        border-color: var(--assign-blue) !important;
        background: linear-gradient(
            135deg,
            var(--assign-blue),
            #398ff8
        ) !important;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(20, 124, 245, .20);
    }

    .btn-view-assigned:hover i {
        color: #ffffff !important;
        transform: scale(1.08);
    }

    .teacher-back-btn:focus-visible,
    .btn-view-assigned:focus-visible {
        outline: 3px solid rgba(20, 124, 245, .18);
        outline-offset: 3px;
    }

    /* =========================================================
       MAIN CARD
    ========================================================= */

    .assign-card {
        position: relative;
        overflow: hidden;
        border: 1px solid var(--assign-border);
        border-radius: 18px;
        background: #ffffff !important;
        box-shadow: var(--assign-shadow);
        transition: box-shadow .25s ease, transform .25s ease;
    }

    .assign-card:hover {
        box-shadow: var(--assign-shadow-hover);
    }

    .assign-card::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        height: 4px;
        background: linear-gradient(
            90deg,
            var(--assign-blue),
            var(--assign-purple),
            var(--assign-cyan)
        );
    }

    /* =========================================================
       CARD HEADER
    ========================================================= */

    .assign-card-header {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 24px 25px;
        border-bottom: 1px solid #edf0f5;
        background: linear-gradient(
            180deg,
            #ffffff,
            #fcfdff
        ) !important;
    }

    .assign-card-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        flex: 0 0 50px;
        border: 1px solid #d9e9ff;
        border-radius: 13px;
        background: linear-gradient(
            135deg,
            #eaf3ff,
            #f0ebff
        ) !important;
        color: var(--assign-blue) !important;
        font-size: 21px;
        box-shadow: 0 5px 14px rgba(20, 124, 245, .08);
    }

    .assign-card-header h4 {
        margin: 0;
        color: var(--assign-text) !important;
        font-size: 18px;
        font-weight: 750;
    }

    .assign-card-header p {
        margin: 5px 0 0;
        color: #8a94a6 !important;
        font-size: 13px;
    }

    /* =========================================================
       VALIDATION ERRORS
    ========================================================= */

    .error-wrapper {
        padding: 20px 25px 0;
        background: #ffffff !important;
    }

    .alert-error {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 15px 17px;
        border: 1px solid #f1caca;
        border-radius: 11px;
        background: linear-gradient(
            135deg,
            #fff8f8,
            #fff4f4
        ) !important;
        color: #b42318 !important;
        font-size: 13px;
        box-shadow: 0 4px 12px rgba(239, 83, 80, .04);
    }

    .alert-error-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 25px;
        height: 25px;
        flex: 0 0 25px;
        border-radius: 50%;
        background: var(--assign-red-light) !important;
        color: var(--assign-red) !important;
        font-size: 14px;
    }

    .alert-error-content {
        flex: 1;
    }

    .alert-error strong {
        color: #a61b13 !important;
        font-weight: 750;
    }

    .alert-error ul {
        margin: 8px 0 0;
        padding-left: 18px;
    }

    .alert-error li {
        margin-bottom: 4px;
    }

    /* =========================================================
       FORM AREA
    ========================================================= */

    .assign-form {
        padding: 28px 25px;
        background: linear-gradient(
            180deg,
            #ffffff,
            #fdfefe
        ) !important;
    }

    .assign-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0 22px;
    }

    .teacher-field {
        grid-column: 1 / -1;
    }

    .form-group {
        margin-bottom: 23px;
    }

    .form-label {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        color: var(--assign-text-soft) !important;
        font-size: 13px;
        font-weight: 700;
    }

    .required {
        margin-left: 3px;
        color: var(--assign-red) !important;
        font-size: 14px;
    }

    /* =========================================================
       FORM CONTROLS
    ========================================================= */

    .form-select,
    .form-control {
        width: 100%;
        min-height: 48px;
        padding: 11px 14px;
        border: 1px solid #dfe5ee !important;
        border-radius: 10px;
        outline: none;
        background: #ffffff !important;
        color: #26334d !important;
        font-size: 14px;
        line-height: 1.5;
        box-shadow: 0 1px 2px rgba(16, 24, 40, .02);
        transition:
            border-color .2s ease,
            box-shadow .2s ease,
            background-color .2s ease,
            transform .2s ease;
    }

    .form-select:hover,
    .form-control:hover {
        border-color: #cbd5e3 !important;
        background: #fcfdff !important;
    }

    .form-select:focus,
    .form-control:focus {
        border-color: var(--assign-blue) !important;
        background: #ffffff !important;
        box-shadow:
            0 0 0 3px rgba(20, 124, 245, .10),
            0 4px 12px rgba(20, 124, 245, .05);
    }

    .form-select {
        cursor: pointer;
    }

    .form-select option {
        color: #26334d;
        background: #ffffff;
    }

    .form-help {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-top: 7px;
        color: #929bab !important;
        font-size: 12px;
        line-height: 1.5;
    }

    .form-help::before {
        content: "ⓘ";
        color: var(--assign-blue);
        font-size: 11px;
    }

    .is-invalid {
        border-color: var(--assign-red) !important;
        background: #fffafa !important;
    }

    .is-invalid:focus {
        border-color: var(--assign-red) !important;
        box-shadow: 0 0 0 3px rgba(239, 83, 80, .10) !important;
    }

    /* =========================================================
       FORM LABEL ICONS
    ========================================================= */

    .teacher-field .form-label::before {
        content: "👨‍🏫";
        margin-right: 7px;
        font-size: 13px;
    }

    .assign-grid .form-group:nth-child(2) .form-label::before {
        content: "📚";
        margin-right: 7px;
        font-size: 12px;
    }

    .assign-grid .form-group:nth-child(3) .form-label::before {
        content: "🔤";
        margin-right: 7px;
        font-size: 12px;
    }

    .assign-grid .form-group:nth-child(4) .form-label::before {
        content: "📅";
        margin-right: 7px;
        font-size: 12px;
    }

    /* =========================================================
       FORM FOOTER
    ========================================================= */

    .assign-footer {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 11px;
        padding: 19px 25px;
        border-top: 1px solid #edf0f5;
        background: linear-gradient(
            180deg,
            #fafbfd,
            #f8fafd
        ) !important;
    }

    .btn-cancel,
    .btn-assign {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 45px;
        padding: 10px 19px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 700;
        line-height: 1;
        text-decoration: none !important;
        cursor: pointer;
        transition:
            background .2s ease,
            border-color .2s ease,
            color .2s ease,
            transform .2s ease,
            box-shadow .2s ease;
    }

    .btn-cancel {
        border: 1px solid #dfe5ee;
        background: #ffffff !important;
        color: #596579 !important;
        box-shadow: 0 2px 5px rgba(16, 24, 40, .03);
    }

    .btn-cancel:hover {
        border-color: #cfd7e3 !important;
        background: #f5f7fa !important;
        color: #25314a !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(16, 24, 40, .06);
    }

    .btn-assign {
        position: relative;
        overflow: hidden;
        border: 1px solid var(--assign-blue);
        background: linear-gradient(
            135deg,
            var(--assign-blue),
            #398ff8
        ) !important;
        color: #ffffff !important;
        box-shadow: 0 6px 16px rgba(20, 124, 245, .20);
    }

    .btn-assign::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 60%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.22),
            transparent
        );
        transform: skewX(-20deg);
        transition: left .5s ease;
    }

    .btn-assign:hover::before {
        left: 130%;
    }

    .btn-assign:hover {
        border-color: var(--assign-blue-dark);
        background: linear-gradient(
            135deg,
            var(--assign-blue-dark),
            var(--assign-blue)
        ) !important;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 9px 22px rgba(20, 124, 245, .27);
    }

    .btn-cancel i,
    .btn-assign i {
        font-size: 14px;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 768px) {

        .assign-class-page {
            padding: 15px 0 30px;
        }

        .assign-header {
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 19px;
        }

        .assign-title h2 {
            font-size: 24px;
        }

        .assign-header-actions {
            width: 100%;
            justify-content: flex-start;
        }

        .assign-grid {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .teacher-field {
            grid-column: auto;
        }

        .assign-form {
            padding: 23px 18px;
        }

        .error-wrapper {
            padding: 18px 18px 0;
        }

        .assign-footer {
            padding: 17px 18px;
        }
    }

    @media (max-width: 480px) {

        .assign-title {
            padding-left: 13px;
        }

        .assign-title h2 {
            font-size: 22px;
        }

        .assign-title p {
            font-size: 13px;
        }

        .assign-card {
            border-radius: 14px;
        }

        .assign-card-header {
            gap: 12px;
            padding: 19px 18px;
        }

        .assign-card-icon {
            width: 44px;
            height: 44px;
            flex-basis: 44px;
            font-size: 18px;
        }

        .assign-card-header h4 {
            font-size: 16px;
        }

        .assign-card-header p {
            font-size: 12px;
        }

        .assign-header-actions {
            flex-direction: column;
            align-items: stretch;
            gap: 10px;
        }

        .teacher-back-btn,
        .btn-view-assigned {
            width: 100%;
        }

        .assign-footer {
            flex-direction: column-reverse;
            align-items: stretch;
        }

        .btn-cancel,
        .btn-assign {
            width: 100%;
        }

        .form-select,
        .form-control {
            min-height: 46px;
        }
    }

</style>

<div class="assign-class-page">

    <div class="container-fluid px-3 px-md-4">

        {{-- =====================================================
             PAGE HEADER
        ====================================================== --}}

        <div class="assign-header">

            <div class="assign-title">

                <h2>Assign Class Teacher</h2>

                <p>
                    Assign a teacher to a class and section
                </p>

            </div>

            <div class="assign-header-actions">

                <a href="{{ route('admin.teachers.index') }}"
                   class="teacher-back-btn">

                    <i class="bi bi-arrow-left"></i>

                    Back to Teachers

                </a>

                <a href="{{ route('admin.class-teacher-assignments.index') }}"
                   class="btn-view-assigned">

                    <i class="bi bi-people-fill"></i>

                    View Assigned Teachers

                </a>

            </div>

        </div>

        {{-- =====================================================
             MAIN CARD
        ====================================================== --}}

        <div class="assign-card">

            <div class="assign-card-header">

                <div class="assign-card-icon">

                    <i class="bi bi-person-check-fill"></i>

                </div>

                <div>

                    <h4>Teacher Assignment</h4>

                    <p>
                        Select the teacher, class, section and academic year
                    </p>

                </div>

            </div>

            {{-- Validation Errors --}}

            @if ($errors->any())

                <div class="error-wrapper">

                    <div class="alert-error">

                        <div class="alert-error-icon">

                            <i class="bi bi-exclamation-circle-fill"></i>

                        </div>

                        <div class="alert-error-content">

                            <strong>
                                Please fix the following errors:
                            </strong>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>

            @endif

            {{-- Assignment Form --}}

            <form action="{{ route('admin.class-teacher-assignments.store') }}"
                  method="POST">

                @csrf

                <div class="assign-form">

                    <div class="assign-grid">

                        {{-- =================================================
                             TEACHER
                        ================================================== --}}

                        <div class="form-group teacher-field">

                            <label for="teacher_id" class="form-label">

                                Teacher

                                <span class="required">*</span>

                            </label>

                            <select name="teacher_id"
                                    id="teacher_id"
                                    class="form-select @error('teacher_id') is-invalid @enderror"
                                    required>

                                <option value="">
                                    Select Teacher
                                </option>

                                @foreach ($teachers as $teacher)

                                    <option value="{{ $teacher->id }}"
                                        {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>

                                        {{ $teacher->first_name }}
                                        {{ $teacher->last_name }}

                                        — {{ $teacher->teacher_id }}

                                        @if (!empty($teacher->subject))

                                            — {{ $teacher->subject }}

                                        @endif

                                    </option>

                                @endforeach

                            </select>

                            <div class="form-help">
                                Select an active teacher from the teacher list.
                            </div>

                        </div>

                        {{-- =================================================
                             CLASS
                        ================================================== --}}

                        <div class="form-group">

                            <label for="class_name" class="form-label">

                                Class

                                <span class="required">*</span>

                            </label>

                            <select name="class_name"
                                    id="class_name"
                                    class="form-select @error('class_name') is-invalid @enderror"
                                    required>

                                <option value="">
                                    Select Class
                                </option>

                                {{-- ONLY CLASS 1 TO 10 --}}

                                @for ($class = 1; $class <= 10; $class++)

                                    <option value="{{ $class }}"
                                        {{ old('class_name') == $class ? 'selected' : '' }}>

                                        Class {{ $class }}

                                    </option>

                                @endfor

                            </select>

                            <div class="form-help">
                                Select the class for this teacher.
                            </div>

                        </div>

                        {{-- =================================================
                             DIVISION / SECTION
                        ================================================== --}}

                        <div class="form-group">

                            <label for="section" class="form-label">

                                Division

                                <span class="required">*</span>

                            </label>

                            <select name="section"
                                    id="section"
                                    class="form-select @error('section') is-invalid @enderror"
                                    required>

                                <option value="">
                                    Select Division
                                </option>

                                {{-- ONLY DIVISION A, B, C --}}

                                @foreach (['A', 'B', 'C'] as $division)

                                    <option value="{{ $division }}"
                                        {{ old('section') == $division ? 'selected' : '' }}>

                                        Division {{ $division }}

                                    </option>

                                @endforeach

                            </select>

                            <div class="form-help">
                                Select the division for this class.
                            </div>

                        </div>

                        {{-- =================================================
                             ACADEMIC YEAR
                        ================================================== --}}

                        <div class="form-group">

                            <label for="academic_year" class="form-label">

                                Academic Year

                                <span class="required">*</span>

                            </label>

                            <select name="academic_year"
                                    id="academic_year"
                                    class="form-select @error('academic_year') is-invalid @enderror"
                                    required>

                                <option value="2025-2026"
                                    {{ old('academic_year') == '2025-2026' ? 'selected' : '' }}>

                                    2025-2026

                                </option>

                                <option value="2026-2027"
                                    {{ old('academic_year', '2026-2027') == '2026-2027' ? 'selected' : '' }}>

                                    2026-2027

                                </option>

                                <option value="2027-2028"
                                    {{ old('academic_year') == '2027-2028' ? 'selected' : '' }}>

                                    2027-2028

                                </option>

                            </select>

                            <div class="form-help">
                                Select the academic year.
                            </div>

                        </div>

                    </div>

                </div>

                {{-- =====================================================
                     FORM FOOTER
                ====================================================== --}}

                <div class="assign-footer">

                    <a href="{{ route('admin.class-teacher-assignments.index') }}"
                       class="btn-cancel">

                        <i class="bi bi-x-lg"></i>

                        Cancel

                    </a>

                    <button type="submit"
                            class="btn-assign">

                        <i class="bi bi-person-check-fill"></i>

                        Assign Teacher

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


</x-ladmin-panel>
