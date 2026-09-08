
<x-ladmin-panel title="Teacher Attendance">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <style>

        /* =========================================================
           LIGHT TEACHER MANAGEMENT THEME
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
            --teacher-success-light: #eaf8ef;

            --teacher-danger: #dc3545;
            --teacher-danger-light: #fff0f1;

            --teacher-warning: #e59600;
            --teacher-warning-light: #fff6e5;

            --teacher-shadow:
                0 8px 30px rgba(24, 52, 91, 0.07);

            --teacher-shadow-hover:
                0 14px 35px rgba(20, 124, 245, 0.13);
        }


        /* =========================================================
           GLOBAL LIGHT THEME
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
        ========================================================== */

        .app-sidebar,
        .app-sidebar[data-bs-theme="dark"],
        .app-sidebar[data-bs-theme="light"],
        .main-sidebar,
        .sidebar-dark-primary {
            background: #ffffff !important;
            color: #596579 !important;
            border-right: 1px solid #e6edf5 !important;
            box-shadow:
                4px 0 22px rgba(30, 50, 80, .045) !important;
        }

        .app-sidebar .sidebar-brand,
        .app-sidebar .brand-link,
        .main-sidebar .brand-link {
            background: #ffffff !important;
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

        .teacher-page {
            min-height: calc(100vh - 100px);

            padding: 15px 6px 45px;

            background:
                radial-gradient(
                    circle at 5% 0%,
                    rgba(20, 124, 245, .06),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 95% 10%,
                    rgba(108, 99, 255, .055),
                    transparent 23%
                );

            color: var(--teacher-text);
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

            margin-bottom: 25px;
            padding: 22px 24px;

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

            animation:
                teacherFadeUp .45s ease both;
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

        .teacher-page-header::after {
            content: "";

            position: absolute;

            top: -100px;
            right: -70px;

            width: 180px;
            height: 180px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(20, 124, 245, .08),
                    transparent 70%
                );

            pointer-events: none;
        }

        .teacher-page-title {
            position: relative;
            z-index: 1;

            margin: 0;

            color: #16213e;

            font-size: 29px;
            font-weight: 800;

            letter-spacing: -.7px;
        }

        .teacher-page-subtitle {
            position: relative;
            z-index: 1;

            margin: 7px 0 0;

            color: var(--teacher-muted);

            font-size: 14px;
        }


        /* =========================================================
           HEADER BUTTONS
        ========================================================== */

        .teacher-add-btn {
            position: relative;
            z-index: 2;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 8px;

            min-height: 44px;

            padding: 0 19px;

            overflow: hidden;

            border: 0;
            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    var(--teacher-primary),
                    var(--teacher-secondary)
                );

            color: #ffffff !important;

            font-size: 13px;
            font-weight: 700;

            text-decoration: none !important;

            box-shadow:
                0 7px 17px rgba(20, 124, 245, .20);

            transition:
                transform .25s ease,
                box-shadow .25s ease,
                filter .25s ease;
        }

        .teacher-add-btn:hover {
            transform: translateY(-3px);

            filter: brightness(1.04);

            box-shadow:
                0 12px 25px rgba(20, 124, 245, .28);
        }

        .teacher-add-btn i {
            font-size: 16px;

            transition:
                transform .25s ease;
        }

        .teacher-add-btn:hover i {
            transform:
                rotate(90deg)
                scale(1.1);
        }


        /* =========================================================
           STATISTICS
        ========================================================== */

        .teacher-stats {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 18px;

            margin-bottom: 23px;
        }

        .teacher-stat-card {
            position: relative;

            display: flex;
            align-items: center;

            gap: 16px;

            min-height: 116px;

            padding: 22px;

            overflow: hidden;

            border-radius: 15px;

            color: #ffffff;

            box-shadow: var(--teacher-shadow);

            transition:
                transform .3s ease,
                box-shadow .3s ease;

            animation:
                teacherFadeUp .5s ease both;
        }

        .teacher-stat-card:nth-child(1) {
            background:
                linear-gradient(
                    135deg,
                    #147cf5,
                    #1268ca
                );

            animation-delay: .05s;
        }

        .teacher-stat-card:nth-child(2) {
            background:
                linear-gradient(
                    135deg,
                    #13b8d4,
                    #13a9c3
                );

            animation-delay: .10s;
        }

        .teacher-stat-card:nth-child(3) {
            background:
                linear-gradient(
                    135deg,
                    #ffb52e,
                    #f18d08
                );

            animation-delay: .15s;
        }

        .teacher-stat-card:nth-child(4) {
            background:
                linear-gradient(
                    135deg,
                    #ef4444,
                    #dc2626
                );

            animation-delay: .20s;
        }

        .teacher-stat-card::before,
        .teacher-stat-card::after {
            content: "";

            position: absolute;

            border-radius: 50%;

            background:
                rgba(255,255,255,.10);

            pointer-events: none;
        }

        .teacher-stat-card::before {
            width: 170px;
            height: 170px;

            top: -90px;
            right: -55px;
        }

        .teacher-stat-card::after {
            width: 100px;
            height: 100px;

            bottom: -58px;
            left: 45%;

            background:
                rgba(255,255,255,.07);
        }

        .teacher-stat-card:hover {
            transform: translateY(-6px);

            box-shadow:
                var(--teacher-shadow-hover);
        }

        .teacher-stat-icon {
            position: relative;
            z-index: 1;

            width: 54px;
            height: 54px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border: 1px solid rgba(255,255,255,.22);
            border-radius: 14px;

            background:
                rgba(255,255,255,.18);

            color: #ffffff;

            font-size: 22px;
        }

        .teacher-stat-card > div:last-child {
            position: relative;
            z-index: 1;
        }

        .teacher-stat-label {
            margin: 0 0 6px;

            color:
                rgba(255,255,255,.88);

            font-size: 13px;
            font-weight: 600;
        }

        .teacher-stat-value {
            margin: 0;

            color: #ffffff;

            font-size: 29px;
            font-weight: 800;

            line-height: 1;
        }


        /* =========================================================
           ALERT
        ========================================================== */

        .teacher-alert {
            display: flex;
            align-items: center;

            gap: 11px;

            margin-bottom: 20px;

            padding: 14px 17px;

            border: 1px solid #bce8d3;
            border-left: 4px solid var(--teacher-success);
            border-radius: 11px;

            background: #effbf5;

            color: #168052;

            font-size: 13px;
            font-weight: 600;

            box-shadow:
                0 5px 18px rgba(25, 169, 116, .07);
        }

        .teacher-alert.error {
            border-color: #f7c4c4;
            border-left-color: var(--teacher-danger);

            background: var(--teacher-danger-light);

            color: var(--teacher-danger);
        }

        .teacher-alert i {
            font-size: 18px;
        }


        /* =========================================================
           FILTER CARD
        ========================================================== */

        .teacher-filter-card {
            position: relative;

            margin-bottom: 23px;

            padding: 19px;

            overflow: hidden;

            background: #ffffff;

            border: 1px solid var(--teacher-border);
            border-radius: 15px;

            box-shadow: var(--teacher-shadow);

            animation:
                teacherFadeUp .5s ease .2s both;
        }

        .teacher-filter-card::before,
        .teacher-table-card::before {
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

        .teacher-filter-form {
            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                auto
                auto;

            align-items: end;

            gap: 12px;
        }

        .teacher-filter-group label {
            display: block;

            margin-bottom: 7px;

            color: #536078;

            font-size: 13px;
            font-weight: 700;
        }

        .teacher-input {
            width: 100%;
            height: 43px;

            padding: 0 13px;

            border: 1px solid #dfe5ee;
            border-radius: 9px;

            outline: none;

            background: #ffffff;

            color: var(--teacher-text);

            font-family: inherit;
            font-size: 13px;

            transition:
                border-color .22s ease,
                box-shadow .22s ease,
                transform .22s ease;
        }

        .teacher-input:hover {
            border-color: #bfcde0;
            transform: translateY(-1px);
        }

        .teacher-input:focus {
            border-color:
                var(--teacher-primary);

            box-shadow:
                0 0 0 3px rgba(20,124,245,.10),
                0 6px 15px rgba(20,124,245,.07);

            transform: translateY(-1px);
        }

        .teacher-filter-btn,
        .teacher-reset-btn {
            height: 43px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 7px;

            padding: 0 17px;

            border-radius: 9px;

            font-size: 13px;
            font-weight: 700;

            cursor: pointer;

            transition:
                transform .22s ease,
                box-shadow .22s ease,
                background .22s ease,
                color .22s ease;
        }

        .teacher-filter-btn {
            border: 0;

            background:
                linear-gradient(
                    135deg,
                    var(--teacher-primary),
                    var(--teacher-primary-dark)
                );

            color: #ffffff;

            box-shadow:
                0 5px 13px rgba(20,124,245,.15);
        }

        .teacher-filter-btn:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(20,124,245,.23);
        }

        .teacher-reset-btn {
            border: 1px solid #dfe5ee;

            background: #ffffff;

            color: #536078;

            text-decoration: none !important;
        }

        .teacher-reset-btn:hover {
            transform: translateY(-2px);

            border-color: #d8caff;

            background:
                var(--teacher-purple-light);

            color:
                var(--teacher-secondary);
        }


        /* =========================================================
           SCANNER CARD
        ========================================================== */

        .scanner-card {
            position: relative;

            margin-bottom: 23px;

            padding: 20px;

            overflow: hidden;

            background: #ffffff;

            border: 1px solid var(--teacher-border);
            border-radius: 15px;

            box-shadow: var(--teacher-shadow);

            animation:
                teacherFadeUp .5s ease both;
        }

        .scanner-card::before {
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

        .scanner-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;

            margin-bottom: 18px;

            padding-bottom: 15px;

            border-bottom: 1px solid #edf0f5;
        }

        .scanner-title {
            margin: 0;

            color: var(--teacher-text);

            font-size: 18px;
            font-weight: 800;
        }

        .scanner-subtitle {
            margin: 5px 0 0;

            color: var(--teacher-muted);

            font-size: 13px;
        }

        .scanner-active {
            display: inline-flex;
            align-items: center;

            gap: 7px;

            min-height: 30px;

            padding: 0 11px;

            border: 1px solid #ccefe0;
            border-radius: 20px;

            background:
                var(--teacher-success-light);

            color: #168052;

            font-size: 11px;
            font-weight: 800;

            white-space: nowrap;
        }

        .scanner-active-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: var(--teacher-success);

            animation:
                scannerPulse 1.3s infinite;
        }

        @keyframes scannerPulse {
            0% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .4;
                transform: scale(.75);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .scanner-grid {
            display: grid;

            grid-template-columns:
                minmax(300px, 1fr)
                minmax(300px, 1fr);

            gap: 20px;

            align-items: start;
        }

        .scanner-camera {
            padding: 10px;

            border: 1px solid #e1e7f0;
            border-radius: 13px;

            background:
                #f8fafc;
        }

        #teacherQrReader {
            width: 100%;

            overflow: hidden;

            border-radius: 10px;

            background: #17213c;
        }

        #teacherQrReader video {
            width: 100% !important;

            border-radius: 10px !important;
        }

        #teacherQrReader__dashboard {
            background: #ffffff;
        }

        .scanner-help {
            margin: 11px 0 0;

            color: var(--teacher-muted);

            font-size: 12px;

            text-align: center;
        }


        /* =========================================================
           LIVE SUMMARY
        ========================================================== */

        .live-summary {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 10px;

            margin-bottom: 14px;
        }

        .live-summary-card {
            padding: 13px;

            border: 1px solid #e1e7f0;
            border-radius: 11px;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #f8fbff
                );

            text-align: center;
        }

        .live-summary-label {
            display: block;

            color: #8994a7;

            font-size: 10px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: .4px;
        }

        .live-summary-value {
            display: block;

            margin-top: 4px;

            color: var(--teacher-text);

            font-size: 23px;
            font-weight: 800;
        }


        /* =========================================================
           SCAN RESULT
        ========================================================== */

        .scan-result {
            min-height: 178px;

            padding: 20px;

            border: 1px solid #e1e7f0;
            border-radius: 13px;

            background: #fbfcff;

            transition:
                background .25s ease,
                border-color .25s ease,
                transform .25s ease;
        }

        .scan-result.success {
            border-color: #bce8d3;
            background: #effbf5;
        }

        .scan-result.warning {
            border-color: #f5d78d;
            background: #fff9eb;
        }

        .scan-result.error {
            border-color: #f7c4c4;
            background: #fff4f4;
        }

        .scan-empty {
            min-height: 135px;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;

            color: #98a3b5;

            font-size: 13px;
        }

        .scan-status {
            display: inline-flex;
            align-items: center;

            gap: 6px;

            margin-bottom: 11px;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 800;
        }

        .scan-result.success .scan-status {
            background: #dcfce7;
            color: #168052;
        }

        .scan-result.warning .scan-status {
            background: #fff0c2;
            color: #a16207;
        }

        .scan-result.error .scan-status {
            background: #ffe1e1;
            color: #c62828;
        }

        .scan-teacher-name {
            margin-bottom: 4px;

            color: var(--teacher-text);

            font-size: 20px;
            font-weight: 800;
        }

        .scan-teacher-id {
            margin-bottom: 10px;

            color: #8994a7;

            font-size: 12px;
        }

        .scan-message {
            color: #536078;

            font-size: 13px;

            line-height: 1.5;
        }


        /* =========================================================
           TABLE CARD
        ========================================================== */

        .teacher-table-card {
            position: relative;

            overflow: hidden;

            background: #ffffff;

            border: 1px solid var(--teacher-border);
            border-radius: 15px;

            box-shadow: var(--teacher-shadow);

            animation:
                teacherFadeUp .55s ease .25s both;
        }

        .teacher-table-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;

            padding: 19px 20px;

            border-bottom: 1px solid #edf0f5;

            background:
                linear-gradient(
                    180deg,
                    #ffffff,
                    #fcfdff
                );
        }

        .teacher-table-title {
            margin: 0;

            color: var(--teacher-text);

            font-size: 17px;
            font-weight: 750;
        }

        .teacher-table-count {
            display: inline-flex;
            align-items: center;

            min-height: 29px;

            padding: 0 10px;

            border: 1px solid #dce8f6;
            border-radius: 20px;

            background:
                var(--teacher-blue-light);

            color:
                var(--teacher-primary);

            font-size: 12px;
            font-weight: 700;
        }

        .teacher-table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        .teacher-table {
            width: 100%;
            min-width: 850px;

            border-collapse: separate;
            border-spacing: 0;
        }

        .teacher-table thead th {
            padding: 14px 16px;

            border-bottom: 1px solid #e7ecf3;

            background: #f8fafc;

            color: #68748a;

            font-size: 11px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: .45px;

            white-space: nowrap;
        }

        .teacher-table tbody td {
            padding: 15px 16px;

            border-bottom: 1px solid #edf0f5;

            color: #35415a;

            font-size: 13px;

            vertical-align: middle;
        }

        .teacher-table tbody tr {
            transition:
                background .2s ease;
        }

        .teacher-table tbody tr:hover {
            background:
                linear-gradient(
                    90deg,
                    rgba(20,124,245,.035),
                    rgba(124,77,255,.025)
                );
        }

        .teacher-table tbody tr:last-child td {
            border-bottom: none;
        }


        /* =========================================================
           PROFILE
        ========================================================== */

        .teacher-profile {
            display: flex;
            align-items: center;

            gap: 11px;
        }

        .teacher-avatar {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            overflow: hidden;

            border: 2px solid #e2edfb;
            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #eaf3ff,
                    #f1ebff
                );

            color:
                var(--teacher-primary);

            font-size: 17px;

            box-shadow:
                0 3px 9px rgba(20,124,245,.08);
        }

        .teacher-avatar img {
            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        .teacher-name {
            color: var(--teacher-text);
            font-weight: 750;
        }

        .teacher-email {
            margin-top: 3px;

            color: #8994a7;

            font-size: 11px;
        }


        /* =========================================================
           ATTENDANCE STATUS
        ========================================================== */

        .attendance-status {
            display: inline-flex;
            align-items: center;
            gap: 6px;

            min-height: 27px;

            padding: 4px 10px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 750;

            text-transform: capitalize;
        }

        .attendance-status.present {
            border: 1px solid #ccefe0;

            background:
                var(--teacher-success-light);

            color: #168052;
        }

        .attendance-status.absent {
            border: 1px solid #f7d4d1;

            background:
                var(--teacher-danger-light);

            color: var(--teacher-danger);
        }

        .attendance-status.leave {
            border: 1px solid #f7dfaa;

            background:
                var(--teacher-warning-light);

            color: var(--teacher-warning);
        }

        .attendance-status.half_day {
            border: 1px solid #d8d0ff;

            background:
                var(--teacher-purple-light);

            color: var(--teacher-secondary);
        }

        .attendance-status.not-marked {
            border: 1px solid #e1e6ee;

            background: #f6f8fb;

            color: #7b8497;
        }

        .attendance-status-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: currentColor;
        }


        /* =========================================================
           REMARKS
        ========================================================== */

        .attendance-remarks {
            max-width: 280px;

            color: #68748a;

            font-size: 12px;

            line-height: 1.4;
        }


        /* =========================================================
           EMPTY STATE
        ========================================================== */

        .teacher-empty {
            padding: 65px 20px;

            text-align: center;

            background:
                radial-gradient(
                    circle at center,
                    rgba(20,124,245,.025),
                    transparent 45%
                );
        }

        .teacher-empty-icon {
            width: 70px;
            height: 70px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 17px;

            border: 1px solid #dfeaf7;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #f0f6ff,
                    #f4f0ff
                );

            color:
                var(--teacher-primary);

            font-size: 27px;
        }

        .teacher-empty h4 {
            margin: 0 0 7px;

            color: var(--teacher-text);

            font-size: 17px;
            font-weight: 750;
        }

        .teacher-empty p {
            margin: 0;

            color:
                var(--teacher-muted);

            font-size: 13px;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================== */

        @media (max-width: 1200px) {

            .teacher-stats {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

        }

        @media (max-width: 992px) {

            .teacher-page {
                padding:
                    15px 0 35px;
            }

            .teacher-stats {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .teacher-filter-form {
                grid-template-columns:
                    1fr 1fr auto;
            }

            .scanner-grid {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 768px) {

            .teacher-page-header {
                align-items: flex-start;

                flex-direction: column;

                padding: 19px;
            }

            .teacher-page-title {
                font-size: 25px;
            }

            .teacher-add-btn {
                width: 100%;
            }

            .teacher-stats {
                grid-template-columns: 1fr;
            }

            .teacher-filter-form {
                grid-template-columns: 1fr;
            }

            .teacher-filter-btn,
            .teacher-reset-btn {
                width: 100%;
            }

            .teacher-filter-card {
                padding: 16px;
            }

            .teacher-table-header {
                align-items: flex-start;

                flex-direction: column;

                padding: 16px;
            }

            .scanner-header {
                align-items: flex-start;

                flex-direction: column;
            }

        }

        @media (max-width: 576px) {

            .teacher-page-title {
                font-size: 23px;
            }

            .teacher-page-subtitle {
                font-size: 13px;
            }

            .teacher-stat-card {
                min-height: 102px;

                padding: 18px;
            }

            .teacher-stat-icon {
                width: 47px;
                height: 47px;

                border-radius: 12px;
            }

            .teacher-stat-value {
                font-size: 25px;
            }

            .live-summary {
                grid-template-columns:
                    repeat(3, 1fr);
            }

            .live-summary-value {
                font-size: 19px;
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
           ANIMATION
        ========================================================== */

        @keyframes teacherFadeUp {

            from {
                opacity: 0;

                transform:
                    translateY(14px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }

        }

    </style>


    @php

        $totalTeachers = $teachers->count();

        $presentCount =
            $attendanceRecords
                ->where('status', 'present')
                ->count();

        $absentCount =
            $attendanceRecords
                ->where('status', 'absent')
                ->count();

        $leaveCount =
            $attendanceRecords
                ->where('status', 'leave')
                ->count();

        $remainingCount =
            max(
                0,
                $totalTeachers - $presentCount
            );

    @endphp


    <div class="teacher-page">


        {{-- =====================================================
             PAGE HEADER
        ====================================================== --}}

        <div class="teacher-page-header">

            <div>

                <h1 class="teacher-page-title">
                    Teacher Attendance
                </h1>

                <p class="teacher-page-subtitle">
                    Manage and track teacher attendance
                    for {{ \Carbon\Carbon::parse($date)->format('d M Y') }}
                </p>

            </div>


            <div
                style="
                    display:flex;
                    gap:10px;
                    flex-wrap:wrap;
                "
            >

                <a
                    href="{{ route('admin.teachers.index') }}"
                    class="teacher-add-btn"
                >
                    <i class="bi bi-people"></i>
                    Teacher List
                </a>


                <button
                    type="button"
                    id="openScannerBtn"
                    class="teacher-add-btn"
                >
                    <i class="bi bi-qr-code-scan"></i>
                    Scan Attendance
                </button>

            </div>

        </div>


        {{-- =====================================================
             SUCCESS MESSAGE
        ====================================================== --}}

        @if(session('success'))

            <div
                class="teacher-alert"
                role="alert"
            >

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        {{-- =====================================================
             ERROR MESSAGE
        ====================================================== --}}

        @if($errors->any())

            <div
                class="teacher-alert error"
                role="alert"
            >

                <i class="bi bi-exclamation-circle-fill"></i>

                <span>
                    {{ $errors->first() }}
                </span>

            </div>

        @endif


        {{-- =====================================================
             STATISTICS
        ====================================================== --}}

        <div class="teacher-stats">


            {{-- TOTAL --}}

            <div class="teacher-stat-card">

                <div class="teacher-stat-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <div>

                    <p class="teacher-stat-label">
                        Total Teachers
                    </p>

                    <h3
                        class="teacher-stat-value"
                        id="totalTeacherCount"
                    >
                        {{ $totalTeachers }}
                    </h3>

                </div>

            </div>


            {{-- PRESENT --}}

            <div class="teacher-stat-card">

                <div class="teacher-stat-icon">
                    <i class="bi bi-person-check-fill"></i>
                </div>

                <div>

                    <p class="teacher-stat-label">
                        Present
                    </p>

                    <h3
                        class="teacher-stat-value"
                        id="presentTeacherCount"
                    >
                        {{ $presentCount }}
                    </h3>

                </div>

            </div>


            {{-- ABSENT --}}

            <div class="teacher-stat-card">

                <div class="teacher-stat-icon">
                    <i class="bi bi-person-x-fill"></i>
                </div>

                <div>

                    <p class="teacher-stat-label">
                        Absent
                    </p>

                    <h3 class="teacher-stat-value">
                        {{ $absentCount }}
                    </h3>

                </div>

            </div>


            {{-- LEAVE --}}

            <div class="teacher-stat-card">

                <div class="teacher-stat-icon">
                    <i class="bi bi-calendar-x-fill"></i>
                </div>

                <div>

                    <p class="teacher-stat-label">
                        Leave
                    </p>

                    <h3 class="teacher-stat-value">
                        {{ $leaveCount }}
                    </h3>

                </div>

            </div>

        </div>


        {{-- =====================================================
             LIVE QR SCANNER
        ====================================================== --}}

        <div
            class="scanner-card"
            id="scannerCard"
            style="display:none;"
        >

            <div class="scanner-header">

                <div>

                    <h2 class="scanner-title">
                        Live QR Attendance Scanner
                    </h2>

                    <p class="scanner-subtitle">
                        Scan a teacher QR code to mark attendance.
                        The scanner will remain active for the next teacher.
                    </p>

                </div>


                <div class="scanner-active">

                    <span class="scanner-active-dot"></span>

                    Scanner Active

                </div>

            </div>


            <div class="scanner-grid">


                {{-- =================================================
                     CAMERA
                ================================================== --}}

                <div>

                    <div class="scanner-camera">

                        <div id="teacherQrReader"></div>

                    </div>

                    <p class="scanner-help">
                        Position the teacher's QR code inside the camera.
                    </p>

                </div>


                {{-- =================================================
                     LIVE RESULT
                ================================================== --}}

                <div>


                    {{-- LIVE COUNTS --}}

                    <div class="live-summary">

                        <div class="live-summary-card">

                            <span class="live-summary-label">
                                Present
                            </span>

                            <span
                                class="live-summary-value"
                                id="livePresentCount"
                            >
                                {{ $presentCount }}
                            </span>

                        </div>


                        <div class="live-summary-card">

                            <span class="live-summary-label">
                                Remaining
                            </span>

                            <span
                                class="live-summary-value"
                                id="liveRemainingCount"
                            >
                                {{ $remainingCount }}
                            </span>

                        </div>


                        <div class="live-summary-card">

                            <span class="live-summary-label">
                                Total
                            </span>

                            <span
                                class="live-summary-value"
                                id="liveTotalCount"
                            >
                                {{ $totalTeachers }}
                            </span>

                        </div>

                    </div>


                    {{-- RESULT --}}

                    <div
                        id="scanResult"
                        class="scan-result"
                    >

                        <div class="scan-empty">

                            <div>

                                <i
                                    class="bi bi-qr-code"
                                    style="
                                        display:block;
                                        font-size:32px;
                                        margin-bottom:8px;
                                    "
                                ></i>

                                Scan a teacher QR code
                                to mark attendance.

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             DATE FILTER
        ====================================================== --}}

        <div class="teacher-filter-card">

            <form
                method="GET"
                action="{{ route('admin.teachers.attendance') }}"
                class="teacher-filter-form"
            >

                <div class="teacher-filter-group">

                    <label for="date">
                        Attendance Date
                    </label>

                    <input
                        id="date"
                        type="date"
                        name="date"
                        class="teacher-input"
                        value="{{ $date }}"
                    >

                </div>


                <button
                    type="submit"
                    class="teacher-filter-btn"
                >

                    <i class="bi bi-funnel-fill"></i>

                    Apply

                </button>


                <a
                    href="{{ route('admin.teachers.attendance') }}"
                    class="teacher-reset-btn"
                >

                    <i class="bi bi-calendar-day"></i>

                    Today

                </a>

            </form>

        </div>


        {{-- =====================================================
             ATTENDANCE TABLE
        ====================================================== --}}

        <div class="teacher-table-card">


            <div class="teacher-table-header">

                <h2 class="teacher-table-title">
                    Teacher Attendance List
                </h2>

                <span class="teacher-table-count">

                    {{ $totalTeachers }}

                    teacher(s)

                </span>

            </div>


            @if($totalTeachers > 0)

                <div class="teacher-table-wrapper">

                    <table class="teacher-table">

                        <thead>

                            <tr>

                                <th>
                                    Teacher
                                </th>

                                <th>
                                    Teacher ID
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Remarks
                                </th>

                            </tr>

                        </thead>


                        <tbody id="attendanceTableBody">

                            @foreach($teachers as $teacher)

                                @php

                                    $attendance =
                                        $attendanceRecords
                                            ->get($teacher->id);

                                    $teacherName =
                                        trim(
                                            $teacher->first_name .
                                            ' ' .
                                            $teacher->last_name
                                        );

                                    $initials =
                                        strtoupper(
                                            substr(
                                                $teacher->first_name ?? 'T',
                                                0,
                                                1
                                            ) .
                                            substr(
                                                $teacher->last_name ?? '',
                                                0,
                                                1
                                            )
                                        );

                                @endphp


                                <tr
                                    id="teacher-row-{{ $teacher->id }}"
                                    data-teacher-id="{{ $teacher->teacher_id }}"
                                >


                                    {{-- TEACHER --}}

                                    <td>

                                        <div class="teacher-profile">

                                            <div class="teacher-avatar">

                                                @if($teacher->profile_photo)

                                                    <img
                                                        src="{{ asset('storage/' . $teacher->profile_photo) }}"
                                                        alt="{{ $teacherName }}"
                                                    >

                                                @else

                                                    {{ $initials }}

                                                @endif

                                            </div>


                                            <div>

                                                <div class="teacher-name">
                                                    {{ $teacherName }}
                                                </div>

                                                @if($teacher->email)

                                                    <div class="teacher-email">
                                                        {{ $teacher->email }}
                                                    </div>

                                                @endif

                                            </div>

                                        </div>

                                    </td>


                                    {{-- TEACHER ID --}}

                                    <td>

                                        <strong>
                                            {{ $teacher->teacher_id }}
                                        </strong>

                                    </td>


                                    {{-- STATUS --}}

                                    <td>

                                        @if($attendance)

                                            <span
                                                class="attendance-status {{ $attendance->status }}"
                                            >

                                                <span class="attendance-status-dot"></span>

                                                {{ str_replace('_', ' ', $attendance->status) }}

                                            </span>

                                        @else

                                            <span
                                                class="attendance-status not-marked"
                                            >

                                                <span class="attendance-status-dot"></span>

                                                Not Marked

                                            </span>

                                        @endif

                                    </td>


                                    {{-- REMARKS --}}

                                    <td>

                                        <div class="attendance-remarks">

                                            {{ $attendance?->remarks ?? '—' }}

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="teacher-empty">

                    <div class="teacher-empty-icon">

                        <i class="bi bi-calendar-x"></i>

                    </div>

                    <h4>
                        No Teachers Found
                    </h4>

                    <p>
                        There are currently no teachers available.
                    </p>

                </div>

            @endif

        </div>

    </div>


    {{-- =========================================================
         QR SCANNER LIBRARY
    ========================================================== --}}

    <script src="https://unpkg.com/html5-qrcode"></script>


    <script>

        document.addEventListener(
            'DOMContentLoaded',
            function () {


                /* =================================================
                   ELEMENTS
                ================================================== */

                const openScannerBtn =
                    document.getElementById(
                        'openScannerBtn'
                    );

                const scannerCard =
                    document.getElementById(
                        'scannerCard'
                    );

                const scanResult =
                    document.getElementById(
                        'scanResult'
                    );

                const livePresentCount =
                    document.getElementById(
                        'livePresentCount'
                    );

                const liveRemainingCount =
                    document.getElementById(
                        'liveRemainingCount'
                    );

                const liveTotalCount =
                    document.getElementById(
                        'liveTotalCount'
                    );

                const presentTeacherCount =
                    document.getElementById(
                        'presentTeacherCount'
                    );


                /* =================================================
                   VARIABLES
                ================================================== */

                let qrScanner = null;

                let scannerRunning = false;

                let processingScan = false;

                let livePresent =
                    Number(
                        {{ $presentCount }}
                    );

                const totalTeachers =
                    Number(
                        {{ $totalTeachers }}
                    );


                /* =================================================
                   INITIAL COUNTS
                ================================================== */

                liveTotalCount.textContent =
                    totalTeachers;


                function updateLiveCounts() {

                    const remaining =
                        Math.max(
                            0,
                            totalTeachers - livePresent
                        );

                    livePresentCount.textContent =
                        livePresent;

                    liveRemainingCount.textContent =
                        remaining;

                    presentTeacherCount.textContent =
                        livePresent;
                }


                /* =================================================
                   ESCAPE HTML
                ================================================== */

                function escapeHtml(value) {

                    const div =
                        document.createElement('div');

                    div.textContent =
                        value ?? '';

                    return div.innerHTML;
                }


                /* =================================================
                   SHOW RESULT
                ================================================== */

                function showResult(
                    type,
                    icon,
                    title,
                    teacherName,
                    teacherId,
                    message
                ) {

                    scanResult.className =
                        'scan-result ' + type;

                    scanResult.innerHTML = `

                        <div class="scan-status">
                            ${icon} ${escapeHtml(title)}
                        </div>

                        <div class="scan-teacher-name">
                            ${escapeHtml(teacherName)}
                        </div>

                        <div class="scan-teacher-id">
                            Teacher ID:
                            ${escapeHtml(teacherId)}
                        </div>

                        <div class="scan-message">
                            ${escapeHtml(message)}
                        </div>

                    `;
                }


                /* =================================================
                   UPDATE TABLE
                ================================================== */

                function updateTeacherRow(
                    teacherDatabaseId,
                    status,
                    remarks
                ) {

                    const row =
                        document.getElementById(
                            'teacher-row-' +
                            teacherDatabaseId
                        );

                    if (!row) {
                        return;
                    }


                    const statusElement =
                        row.querySelector(
                            '.attendance-status'
                        );

                    const remarksElement =
                        row.querySelector(
                            '.attendance-remarks'
                        );


                    if (statusElement) {

                        statusElement.className =
                            'attendance-status ' +
                            status;

                        statusElement.innerHTML = `

                            <span
                                class="attendance-status-dot"
                            ></span>

                            ${escapeHtml(
                                status.replace('_', ' ')
                            )}

                        `;
                    }


                    if (remarksElement) {

                        remarksElement.textContent =
                            remarks || '—';
                    }

                }


                /* =================================================
                   HANDLE QR SCAN
                ================================================== */

                async function handleQrScan(
                    decodedText
                ) {

                    if (processingScan) {
                        return;
                    }


                    processingScan = true;


                    const teacherId =
                        String(
                            decodedText || ''
                        ).trim();


                    if (!teacherId) {

                        showResult(
                            'error',
                            '❌',
                            'Invalid QR',
                            'Unknown Teacher',
                            '—',
                            'The QR code does not contain a valid teacher ID.'
                        );


                        setTimeout(
                            function () {
                                processingScan = false;
                            },
                            1500
                        );

                        return;
                    }


                    try {

                        const response =
                            await fetch(
                                "{{ route('admin.teachers.attendance.scan') }}",
                                {
                                    method: 'POST',

                                    headers: {

                                        'Content-Type':
                                            'application/json',

                                        'Accept':
                                            'application/json',

                                        'X-CSRF-TOKEN':
                                            document
                                                .querySelector(
                                                    'meta[name="csrf-token"]'
                                                )
                                                ?.getAttribute(
                                                    'content'
                                                )
                                    },

                                    body:
                                        JSON.stringify({

                                            teacher_id:
                                                teacherId,

                                            attendance_date:
                                                "{{ now()->toDateString() }}"

                                        })
                                }
                            );


                        const data =
                            await response.json();


                        /* =============================================
                           ALREADY MARKED
                        ============================================== */

                        if (
                            response.status === 409
                        ) {

                            const teacher =
                                data.teacher || {};


                            showResult(
                                'warning',
                                '⚠️',
                                'Already Marked',
                                teacher.name ||
                                    'Teacher',
                                teacher.teacher_id ||
                                    teacherId,
                                data.message ||
                                    'Attendance has already been marked for this teacher today.'
                            );


                            setTimeout(
                                function () {
                                    processingScan = false;
                                },
                                1800
                            );

                            return;
                        }


                        /* =============================================
                           ERROR
                        ============================================== */

                        if (
                            !response.ok ||
                            !data.success
                        ) {

                            showResult(
                                'error',
                                '❌',
                                'Scan Failed',
                                data.teacher?.name ||
                                    'Teacher',
                                data.teacher?.teacher_id ||
                                    teacherId,
                                data.message ||
                                    'Unable to mark attendance.'
                            );


                            setTimeout(
                                function () {
                                    processingScan = false;
                                },
                                1800
                            );

                            return;
                        }


                        /* =============================================
                           SUCCESS
                        ============================================== */

                        const teacher =
                            data.teacher || {};

                        const attendance =
                            data.attendance || {};


                        livePresent++;

                        updateLiveCounts();


                        updateTeacherRow(
                            teacher.id,
                            attendance.status ||
                                'present',
                            attendance.remarks ||
                                'Marked through QR scanner'
                        );


                        showResult(
                            'success',
                            '✅',
                            'Attendance Marked',
                            teacher.name ||
                                'Teacher',
                            teacher.teacher_id ||
                                teacherId,
                            'Present attendance was successfully recorded.'
                        );


                        /*
                         * DO NOT RELOAD THE PAGE.
                         *
                         * Scanner stays active.
                         */


                        setTimeout(
                            function () {

                                processingScan = false;

                            },
                            1800
                        );

                    } catch (error) {

                        console.error(
                            'QR attendance error:',
                            error
                        );


                        showResult(
                            'error',
                            '❌',
                            'Connection Error',
                            'Attendance Not Saved',
                            teacherId,
                            'Could not connect to the server. Please try again.'
                        );


                        setTimeout(
                            function () {

                                processingScan = false;

                            },
                            1800
                        );
                    }

                }


                /* =================================================
                   START SCANNER
                ================================================== */

                async function startScanner() {

                    if (scannerRunning) {
                        return;
                    }


                    scannerCard.style.display =
                        'block';


                    openScannerBtn.innerHTML = `

                        <i class="bi bi-stop-circle"></i>

                        Stop Scanner

                    `;


                    scannerCard.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });


                    qrScanner =
                        new Html5Qrcode(
                            'teacherQrReader'
                        );


                    try {

                        await qrScanner.start(

                            {
                                facingMode:
                                    'environment'
                            },

                            {
                                fps: 10,

                                qrbox: {
                                    width: 250,
                                    height: 250
                                }
                            },

                            function (decodedText) {

                                handleQrScan(
                                    decodedText
                                );

                            },

                            function () {

                                /*
                                 * Camera continuously
                                 * checks for QR codes.
                                 *
                                 * Normal scan errors are ignored.
                                 */

                            }

                        );


                        scannerRunning = true;

                    } catch (error) {

                        console.error(
                            'Camera error:',
                            error
                        );


                        showResult(
                            'error',
                            '❌',
                            'Camera Error',
                            'Scanner Could Not Start',
                            '—',
                            'Please allow camera permission and try again.'
                        );


                        openScannerBtn.innerHTML = `

                            <i class="bi bi-qr-code-scan"></i>

                            Scan Attendance

                        `;


                        scannerRunning = false;

                    }

                }


                /* =================================================
                   STOP SCANNER
                ================================================== */

                async function stopScanner() {

                    if (!qrScanner) {

                        scannerCard.style.display =
                            'none';

                        openScannerBtn.innerHTML = `

                            <i class="bi bi-qr-code-scan"></i>

                            Scan Attendance

                        `;

                        return;
                    }


                    try {

                        if (scannerRunning) {

                            await qrScanner.stop();

                        }


                        qrScanner.clear();

                    } catch (error) {

                        console.error(
                            'Scanner stop error:',
                            error
                        );

                    }


                    qrScanner = null;

                    scannerRunning = false;

                    processingScan = false;


                    scannerCard.style.display =
                        'none';


                    openScannerBtn.innerHTML = `

                        <i class="bi bi-qr-code-scan"></i>

                        Scan Attendance

                    `;

                }


                /* =================================================
                   SCANNER BUTTON
                ================================================== */

                openScannerBtn.addEventListener(
                    'click',
                    function () {

                        if (scannerRunning) {

                            stopScanner();

                        } else {

                            startScanner();

                        }

                    }
                );


                /* =================================================
                   INITIALIZE
                ================================================== */

                updateLiveCounts();

            }

        );

    </script>

</x-ladmin-panel>

