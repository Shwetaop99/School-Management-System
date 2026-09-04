<x-ladmin-panel title="Class Teacher Assignments">

    <style>
        /* =========================================================
           CLASS TEACHER ASSIGNMENTS
           MODERN LIGHT + COLORFUL THEME
        ========================================================= */

        :root {
            --cta-blue: #147cf5;
            --cta-blue-dark: #1268ca;
            --cta-blue-light: #eaf3ff;

            --cta-purple: #7c4dff;
            --cta-purple-light: #f1edff;

            --cta-cyan: #12b8d4;
            --cta-cyan-light: #e9fbff;

            --cta-green: #19a974;
            --cta-green-light: #eafaf3;

            --cta-orange: #ff9f1c;
            --cta-orange-light: #fff5e5;

            --cta-red: #ef5350;
            --cta-red-light: #fff1f0;

            --cta-text: #17213c;
            --cta-text-soft: #29344d;
            --cta-muted: #7b8497;

            --cta-border: #e4eaf2;
            --cta-bg: #f5f8fc;

            --cta-shadow:
                0 8px 28px rgba(25, 40, 70, 0.07);

            --cta-shadow-hover:
                0 16px 40px rgba(25, 40, 70, 0.12);
        }


        /* =========================================================
           GLOBAL PAGE COLORS
        ========================================================= */

        html,
        body {
            background: var(--cta-bg) !important;
            color: var(--cta-text) !important;
        }

        .app-wrapper,
        .app-main,
        .app-content {
            background: var(--cta-bg) !important;
        }


        /* =========================================================
           SIDEBAR
        ========================================================= */

        .app-sidebar,
        .app-sidebar[data-bs-theme="dark"] {
            background: #ffffff !important;
            color: #596579 !important;
            border-right: 1px solid var(--cta-border) !important;
        }

        .app-sidebar .sidebar-brand,
        .app-sidebar .brand-link {
            background: #ffffff !important;
            color: var(--cta-text) !important;
            border-bottom: 1px solid var(--cta-border) !important;
        }

        .app-sidebar .nav-link {
            color: #596579 !important;
            background: transparent !important;
            border-radius: 9px;
            margin: 2px 8px;
            transition: all .2s ease;
        }

        .app-sidebar .nav-link .nav-icon,
        .app-sidebar .nav-link i {
            color: #7b879a !important;
            transition: all .2s ease;
        }

        .app-sidebar .nav-link:hover {
            background: var(--cta-blue-light) !important;
            color: var(--cta-blue) !important;
            transform: translateX(2px);
        }

        .app-sidebar .nav-link:hover .nav-icon,
        .app-sidebar .nav-link:hover i {
            color: var(--cta-blue) !important;
        }

        .app-sidebar .nav-link.active {
            background: var(--cta-blue-light) !important;
            color: var(--cta-blue) !important;
            font-weight: 600;
        }

        .app-sidebar .nav-link.active .nav-icon,
        .app-sidebar .nav-link.active i {
            color: var(--cta-blue) !important;
        }

        .app-sidebar .nav-header {
            color: #929caf !important;
        }

        .app-sidebar .nav-arrow {
            color: #8d98aa !important;
        }


        /* =========================================================
           TOP NAVBAR
        ========================================================= */

        .app-header,
        .app-header[data-bs-theme="dark"] {
            background: #ffffff !important;
            color: #596579 !important;
            border-bottom: 1px solid var(--cta-border) !important;
            box-shadow: 0 2px 12px rgba(25, 40, 70, 0.03);
        }

        .app-header .nav-link {
            color: #596579 !important;
            transition: color .2s ease;
        }

        .app-header .nav-link:hover {
            color: var(--cta-blue) !important;
        }

        .app-header .nav-link i {
            color: #596579 !important;
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        .app-footer,
        .app-footer[data-bs-theme="dark"] {
            background: #ffffff !important;
            color: var(--cta-muted) !important;
            border-top: 1px solid var(--cta-border) !important;
        }

        .app-footer a {
            color: var(--cta-blue) !important;
        }


        /* =========================================================
           MAIN PAGE
        ========================================================= */

        .class-assignment-page {
            min-height: calc(100vh - 120px);
            padding: 22px 0 40px;
            background:
                radial-gradient(
                    circle at top right,
                    rgba(20, 124, 245, .055),
                    transparent 30%
                ),
                var(--cta-bg);
        }


        /* =========================================================
           PAGE HEADER
        ========================================================= */

        .assignment-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 24px;
        }

        .assignment-title {
            position: relative;
            padding-left: 15px;
        }

        .assignment-title::before {
            content: "";
            position: absolute;
            left: 0;
            top: 4px;
            bottom: 4px;
            width: 4px;
            border-radius: 10px;
            background:
                linear-gradient(
                    180deg,
                    var(--cta-blue),
                    var(--cta-purple)
                );
        }

        .assignment-title h2 {
            margin: 0;
            color: var(--cta-text);
            font-size: 28px;
            font-weight: 750;
            letter-spacing: -.5px;
        }

        .assignment-title p {
            margin: 7px 0 0;
            color: var(--cta-muted);
            font-size: 14px;
        }


        /* =========================================================
           ADD BUTTON
        ========================================================= */

        .add-assignment-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            min-height: 45px;
            padding: 11px 19px;

            border: 1px solid var(--cta-blue);
            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #147cf5,
                    #398ff8
                );

            color: #ffffff !important;

            font-size: 13px;
            font-weight: 700;
            text-decoration: none;

            box-shadow:
                0 7px 18px rgba(20, 124, 245, .20);

            transition:
                transform .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }

        .add-assignment-btn:hover {
            background:
                linear-gradient(
                    135deg,
                    #1268ca,
                    #147cf5
                );

            color: #ffffff !important;

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(20, 124, 245, .28);
        }

        .add-assignment-btn i {
            font-size: 15px;
        }


        /* =========================================================
           SUCCESS ALERT
        ========================================================= */

        .assignment-alert {
            display: flex;
            align-items: center;
            gap: 11px;

            margin-bottom: 20px;
            padding: 14px 17px;

            border: 1px solid #c9ebdb;
            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #f1fcf6,
                    #e9f9f1
                );

            color: #14784f;

            font-size: 13px;
            font-weight: 600;

            box-shadow:
                0 4px 14px rgba(25, 169, 116, .06);
        }

        .assignment-alert i {
            display: flex;
            align-items: center;
            justify-content: center;

            width: 30px;
            height: 30px;

            border-radius: 50%;

            background: var(--cta-green-light);
            color: var(--cta-green);

            font-size: 15px;
        }


        /* =========================================================
           MAIN CARD
        ========================================================= */

        .assignment-card {
            position: relative;

            background: #ffffff;

            border: 1px solid var(--cta-border);
            border-radius: 18px;

            overflow: hidden;

            box-shadow: var(--cta-shadow);

            transition:
                box-shadow .25s ease,
                transform .25s ease;
        }

        .assignment-card:hover {
            box-shadow: var(--cta-shadow-hover);
        }


        /* =========================================================
           CARD TOP ACCENT
        ========================================================= */

        .assignment-card::before {
            content: "";

            position: absolute;
            top: 0;
            left: 0;
            right: 0;

            height: 3px;

            background:
                linear-gradient(
                    90deg,
                    var(--cta-blue),
                    var(--cta-purple),
                    var(--cta-cyan)
                );
        }


        /* =========================================================
           CARD HEADER
        ========================================================= */

        .assignment-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 23px 25px;

            background: #ffffff;

            border-bottom: 1px solid #edf1f6;
        }

        .assignment-card-header h4 {
            margin: 0;

            color: var(--cta-text);

            font-size: 18px;
            font-weight: 750;
        }

        .assignment-card-header p {
            margin: 5px 0 0;

            color: var(--cta-muted);

            font-size: 13px;
        }


        /* =========================================================
           TABLE WRAPPER
        ========================================================= */

        .assignment-table-wrapper {
            width: 100%;
            overflow-x: auto;
        }


        /* =========================================================
           TABLE
        ========================================================= */

        .assignment-table {
            width: 100%;
            margin: 0;

            border-collapse: separate;
            border-spacing: 0;
        }

        .assignment-table thead th {
            padding: 15px 24px;

            background:
                linear-gradient(
                    180deg,
                    #fbfcfe,
                    #f8fafd
                );

            border-bottom: 1px solid #e9edf3;

            color: #68758a;

            font-size: 11px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: .55px;

            white-space: nowrap;
        }

        .assignment-table tbody td {
            padding: 20px 24px;

            background: #ffffff;

            border-bottom: 1px solid #f0f2f6;

            color: var(--cta-text-soft);

            font-size: 14px;

            vertical-align: middle;
        }

        .assignment-table tbody tr:last-child td {
            border-bottom: none;
        }

        .assignment-table tbody tr {
            transition:
                transform .15s ease,
                background .15s ease;
        }

        .assignment-table tbody tr:hover td {
            background: #fbfdff;
        }


        /* =========================================================
           TEACHER INFO
        ========================================================= */

        .teacher-info {
            display: flex;
            align-items: center;

            gap: 13px;

            min-width: 210px;
        }

        .teacher-avatar {
            position: relative;

            width: 48px;
            height: 48px;

            flex: 0 0 48px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid #dbeaff;
            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #eaf3ff,
                    #f3edff
                );

            color: var(--cta-blue);

            font-size: 16px;
            font-weight: 800;

            box-shadow:
                0 4px 10px rgba(20, 124, 245, .08);
        }

        .teacher-avatar::after {
            content: "";

            position: absolute;

            right: -1px;
            bottom: 1px;

            width: 10px;
            height: 10px;

            border: 2px solid #ffffff;
            border-radius: 50%;

            background: var(--cta-green);
        }

        .teacher-details strong {
            display: block;

            margin-bottom: 4px;

            color: var(--cta-text);

            font-size: 14px;
            font-weight: 750;
        }

        .teacher-details span {
            display: block;

            color: #8a94a6;

            font-size: 12px;
        }


        /* =========================================================
           CLASS BADGE
        ========================================================= */

        .class-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 100px;

            padding: 9px 14px;

            border: 1px solid #d9eaff;
            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #edf5ff,
                    #e9f2ff
                );

            color: #1470dc;

            font-size: 13px;
            font-weight: 750;

            box-shadow:
                0 3px 8px rgba(20, 124, 245, .05);
        }


        /* =========================================================
           SECTION
        ========================================================= */

        .section-value {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            min-width: 38px;
            height: 34px;

            padding: 0 10px;

            border-radius: 9px;

            background: var(--cta-purple-light);
            color: #6840dc;

            font-size: 13px;
            font-weight: 800;
        }


        /* =========================================================
           ACADEMIC YEAR
        ========================================================= */

        .academic-year {
            display: inline-flex;
            align-items: center;

            padding: 8px 11px;

            border-radius: 8px;

            background: #f5f8fc;

            color: #596579;

            font-size: 13px;
            font-weight: 650;

            white-space: nowrap;
        }


        /* =========================================================
           STATUS
        ========================================================= */

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;

            padding: 8px 13px;

            border: 1px solid #cdebdc;
            border-radius: 20px;

            background:
                linear-gradient(
                    135deg,
                    #effbf5,
                    #e8f8f0
                );

            color: #16845b;

            font-size: 12px;
            font-weight: 750;
        }

        .status-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: var(--cta-green);

            box-shadow:
                0 0 0 3px rgba(25, 169, 116, .10);
        }


        /* =========================================================
           DELETE BUTTON
        ========================================================= */

        .delete-form {
            display: inline-block;
            margin: 0;
        }

        .delete-btn {
            width: 43px;
            height: 43px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            border: 1px solid #f2d7d7;
            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #fffafa,
                    #fff5f5
                );

            color: var(--cta-red);

            cursor: pointer;

            font-size: 15px;

            transition:
                transform .2s ease,
                background .2s ease,
                border-color .2s ease,
                box-shadow .2s ease;
        }

        .delete-btn:hover {
            background:
                linear-gradient(
                    135deg,
                    #fff0f0,
                    #ffe8e8
                );

            border-color: #edaaaa;

            color: #d83c3c;

            transform: translateY(-2px);

            box-shadow:
                0 6px 14px rgba(239, 83, 80, .12);
        }


        /* =========================================================
           EMPTY STATE
        ========================================================= */

        .empty-state {
            padding: 65px 25px;

            text-align: center;
        }

        .empty-icon {
            width: 70px;
            height: 70px;

            margin: 0 auto 17px;

            display: flex;
            align-items: center;
            justify-content: center;

            border: 1px solid #dbeaff;
            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #edf5ff,
                    #f2edff
                );

            color: var(--cta-blue);

            font-size: 28px;

            box-shadow:
                0 8px 20px rgba(20, 124, 245, .08);
        }

        .empty-state h5 {
            margin: 0 0 7px;

            color: var(--cta-text-soft);

            font-size: 17px;
            font-weight: 750;
        }

        .empty-state p {
            margin: 0;

            color: var(--cta-muted);

            font-size: 13px;
        }


        /* =========================================================
           SCROLLBAR
        ========================================================= */

        .assignment-table-wrapper::-webkit-scrollbar {
            height: 7px;
        }

        .assignment-table-wrapper::-webkit-scrollbar-track {
            background: #f4f6f9;
        }

        .assignment-table-wrapper::-webkit-scrollbar-thumb {
            background: #cbd5e3;
            border-radius: 20px;
        }

        .assignment-table-wrapper::-webkit-scrollbar-thumb:hover {
            background: #aebbd0;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 992px) {

            .assignment-table {
                min-width: 900px;
            }

            .assignment-header {
                align-items: flex-start;
            }
        }


        @media (max-width: 768px) {

            .class-assignment-page {
                padding: 15px 0 30px;
            }

            .assignment-header {
                flex-direction: column;
                align-items: stretch;
            }

            .assignment-title h2 {
                font-size: 24px;
            }

            .add-assignment-btn {
                width: 100%;
            }

            .assignment-card {
                border-radius: 14px;
            }

            .assignment-card-header {
                padding: 19px 20px;
            }
        }


        @media (max-width: 480px) {

            .assignment-title {
                padding-left: 12px;
            }

            .assignment-title h2 {
                font-size: 21px;
            }

            .assignment-title p {
                font-size: 12px;
            }

            .assignment-card-header h4 {
                font-size: 16px;
            }

            .assignment-card-header p {
                font-size: 12px;
            }

            .empty-state {
                padding: 50px 20px;
            }

            .empty-icon {
                width: 62px;
                height: 62px;
                font-size: 24px;
            }
        }
    </style>


    <div class="class-assignment-page">

        {{-- =====================================================
             PAGE HEADER
        ====================================================== --}}

        <div class="assignment-header">

            <div class="assignment-title">

                <h2>
                    Class Teacher Assignments
                </h2>

                <p>
                    Manage teachers assigned to classes and sections
                </p>

            </div>


            <a
                href="{{ route('admin.class-teacher-assignments.create') }}"
                class="add-assignment-btn"
            >

                <i class="bi bi-person-plus-fill"></i>

                Assign Class Teacher

            </a>

        </div>


        {{-- =====================================================
             SUCCESS MESSAGE
        ====================================================== --}}

        @if (session('success'))

            <div class="assignment-alert">

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        {{-- =====================================================
             MAIN CARD
        ====================================================== --}}

        <div class="assignment-card">


            {{-- =================================================
                 CARD HEADER
            ================================================== --}}

            <div class="assignment-card-header">

                <div>

                    <h4>
                        Assigned Teachers
                    </h4>

                    <p>
                        Current class teacher assignments
                    </p>

                </div>

            </div>


            {{-- =================================================
                 ASSIGNMENT TABLE
            ================================================== --}}

            @if ($assignments->count())

                <div class="assignment-table-wrapper">

                    <table class="assignment-table">

                        <thead>

                            <tr>

                                <th>
                                    Teacher
                                </th>

                                <th>
                                    Class
                                </th>

                                <th>
                                    Section
                                </th>

                                <th>
                                    Academic Year
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach ($assignments as $assignment)

                                <tr>

                                    {{-- =================================
                                         TEACHER
                                    ================================== --}}

                                    <td>

                                        <div class="teacher-info">

                                            <div class="teacher-avatar">

                                                {{ strtoupper(
                                                    substr(
                                                        $assignment->teacher->first_name ?? 'T',
                                                        0,
                                                        1
                                                    )
                                                ) }}

                                            </div>


                                            <div class="teacher-details">

                                                <strong>

                                                    {{ $assignment->teacher->first_name }}
                                                    {{ $assignment->teacher->last_name }}

                                                </strong>

                                                <span>

                                                    ID:
                                                    {{ $assignment->teacher->teacher_id }}

                                                </span>

                                            </div>

                                        </div>

                                    </td>


                                    {{-- =================================
                                         CLASS
                                    ================================== --}}

                                    <td>

                                        <span class="class-badge">

                                            Class
                                            {{ $assignment->class_name }}

                                        </span>

                                    </td>


                                    {{-- =================================
                                         SECTION
                                    ================================== --}}

                                    <td>

                                        <span class="section-value">

                                            {{ $assignment->section }}

                                        </span>

                                    </td>


                                    {{-- =================================
                                         ACADEMIC YEAR
                                    ================================== --}}

                                    <td>

                                        <span class="academic-year">

                                            {{ $assignment->academic_year }}

                                        </span>

                                    </td>


                                    {{-- =================================
                                         STATUS
                                    ================================== --}}

                                    <td>

                                        @if ($assignment->status)

                                            <span class="status-badge">

                                                <span class="status-dot"></span>

                                                Active

                                            </span>

                                        @else

                                            <span
                                                class="status-badge"
                                                style="
                                                    background:#f4f5f7;
                                                    border-color:#e2e5ea;
                                                    color:#697386;
                                                "
                                            >

                                                <span
                                                    class="status-dot"
                                                    style="
                                                        background:#98a2b3;
                                                        box-shadow:none;
                                                    "
                                                ></span>

                                                Inactive

                                            </span>

                                        @endif

                                    </td>


                                    {{-- =================================
                                         DELETE
                                    ================================== --}}

                                    <td>

                                        <form
                                            action="{{ route(
                                                'admin.class-teacher-assignments.destroy',
                                                $assignment
                                            ) }}"
                                            method="POST"
                                            class="delete-form"
                                            onsubmit="return confirm(
                                                'Are you sure you want to remove this class teacher assignment?'
                                            );"
                                        >

                                            @csrf

                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="delete-btn"
                                                title="Remove Assignment"
                                                aria-label="Remove Assignment"
                                            >

                                                <i class="bi bi-trash3"></i>

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


            @else

                {{-- =================================================
                     EMPTY STATE
                ================================================== --}}

                <div class="empty-state">

                    <div class="empty-icon">

                        <i class="bi bi-person-check"></i>

                    </div>


                    <h5>
                        No Class Teacher Assignments
                    </h5>


                    <p>
                        No teachers have been assigned to a class yet.
                    </p>

                </div>

            @endif

        </div>

    </div>

</x-ladmin-panel>