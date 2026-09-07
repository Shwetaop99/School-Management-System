<x-ladmin-panel title="Dashboard">

    {{-- =========================
         DASHBOARD STYLES
    ========================== --}}
    <style>

        body {
            background: #f6f8fb;
        }

        /* Page Header */
        .school-page-header {
            margin-bottom: 20px;
        }

        .school-page-header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #16213e;
            margin: 0;
        }

        .school-page-header p {
            margin: 5px 0 0;
            color: #7b8496;
            font-size: 14px;
        }

        .admin-status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-bottom: 8px;
            padding: 4px 9px;
            border-radius: 999px;
            background: #eef8f1;
            color: #198754;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.2px;
        }

        .admin-status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #20c997;
            box-shadow: 0 0 0 3px rgba(32, 201, 151, 0.12);
        }


        /* Welcome Banner */
        .school-welcome {
            min-height: 145px;
            border-radius: 15px;
            padding: 30px 36px;
            margin-bottom: 28px;

            background: linear-gradient(110deg, #0d6efd 0%, #1987e8 55%, #21b8d6 100%);

            color: white;

            position: relative;
            overflow: hidden;
        }

        .school-welcome::before {
            content: "";

            position: absolute;

            width: 170px;
            height: 170px;

            border-radius: 50%;

            right: -40px;
            top: -80px;

            background: rgba(255,255,255,0.10);
        }

        .school-welcome::after {
            content: "";

            position: absolute;

            width: 100px;
            height: 100px;

            border-radius: 50%;

            right: 120px;
            bottom: -60px;

            background: rgba(248, 244, 244, 0.96);
        }

        .school-welcome h1 {
            position: relative;
            z-index: 2;

            font-size: 30px;
            font-weight: 700;

            margin: 0 0 10px;
        }

        .school-welcome p {
            position: relative;
            z-index: 2;

            font-size: 16px;

            margin: 0;
        }


        /* =========================
           STAT CARDS (AdminLTE-style)
        ========================== */
        .stat-card {
            border-radius: 14px;
            padding: 22px 24px;
            min-height: 128px;
            position: relative;
            overflow: hidden;
            color: white;
            box-shadow: 0 8px 20px rgba(30, 50, 80, 0.10);
            transition: all 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(30, 50, 80, 0.16);
        }

        .stat-card .stat-icon {
            position: absolute;
            top: 18px;
            right: 20px;
            font-size: 34px;
            opacity: 0.85;
        }

        .stat-card .stat-number {
            font-size: 30px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 6px;
        }

        .stat-card .stat-label {
            font-size: 14px;
            font-weight: 500;
            opacity: 0.95;
            margin-bottom: 18px;
        }

        .stat-card .stat-more {
            font-size: 12px;
            color: white;
            text-decoration: none;
            opacity: 0.9;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .stat-card .stat-more:hover {
            opacity: 1;
            text-decoration: underline;
            color: white;
        }

        .stat-blue   { background: linear-gradient(135deg, #147cf5, #1268ca); }
        .stat-orange { background: linear-gradient(135deg, #ffb238, #ff9d1c); }
        .stat-red    { background: linear-gradient(135deg, #ff6d61, #f65343); }
        .stat-cyan   { background: linear-gradient(135deg, #2bcfe8, #18b5d5); }


        /* Section Heading */
        .section-heading {
            display: flex;

            justify-content: space-between;
            align-items: center;

            margin-bottom: 15px;
        }

        .section-heading h3 {
            font-size: 18px;

            font-weight: 700;

            color: #16213e;

            margin: 0;
        }

        .section-heading a {
            color: #1683f5;

            text-decoration: none;

            font-size: 13px;
        }


        /* Course Card */
        .course-card {
            background: white;

            border-radius: 12px;

            padding: 16px;

            min-height: 245px;

            border: 1px solid #edf0f5;

            box-shadow:
                0 3px 15px rgba(30, 50, 80, 0.07);

            transition: all 0.2s ease;
        }

        .course-card:hover {
            transform: translateY(-3px);

            box-shadow:
                0 8px 25px rgba(30, 50, 80, 0.12);
        }


        /* Course Colors */
        .course-title {
            color: white;

            border-radius: 7px;

            text-align: center;

            padding: 9px;

            font-weight: 600;

            margin-bottom: 15px;
        }

        .math {
            background: #1268ca;
        }

        .science {
            background: #ff9d1c;
        }

        .english {
            background: #f65343;
        }

        .computer {
            background: #18b5d5;
        }


        .course-card h4 {
            font-size: 16px;

            font-weight: 700;

            color: #17213c;

            margin-bottom: 8px;
        }

        .course-card p {
            font-size: 13px;

            color: #788297;

            line-height: 1.5;

            min-height: 40px;
        }


        /* Faculty */
        .faculty {
            font-size: 12px;

            color: #8992a4;

            margin-top: 15px;
        }

        .faculty strong {
            color: #17213c;

            margin-left: 4px;
        }


        /* Progress */
        .progress-info {
            display: flex;

            justify-content: space-between;

            margin-top: 12px;

            font-size: 12px;

            color: #788297;
        }

        .school-progress {
            height: 7px;

            background: #edf0f4;

            border-radius: 10px;

            overflow: hidden;
        }

        .school-progress-bar {
            height: 100%;

            border-radius: 10px;
        }

        .math-progress {
            background: #147cf5;
        }

        .science-progress {
            background: #ffb000;
        }

        .english-progress {
            background: #ee3948;
        }

        .computer-progress {
            background: #16bddd;
        }


        /* Bottom Cards */
        .school-card {
            background: white;

            border-radius: 12px;

            border: 1px solid #edf0f5;

            box-shadow:
                0 3px 15px rgba(30, 50, 80, 0.06);

            overflow: hidden;

            height: 100%;
        }

        .school-card-header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 18px 20px;

            border-bottom: 1px solid #edf0f5;
        }

        .school-card-header h3 {
            margin: 0;

            font-size: 16px;

            font-weight: 700;

            color: #16213e;
        }

        .school-card-header a {
            color: #1683f5;

            font-size: 13px;

            text-decoration: none;
        }


        /* Lessons */
        .lesson {
            display: flex;

            justify-content: space-between;

            padding: 18px 20px;

            border-bottom: 1px solid #f0f2f6;
        }

        .lesson h4 {
            font-size: 14px;

            font-weight: 700;

            color: #17213c;

            margin: 0 0 6px;
        }

        .lesson p {
            margin: 0;

            font-size: 12px;

            color: #7d8799;
        }

        .lesson > span {
            color: #b5bdc9;
        }


        /* Course List */
        .course-list-item {
            display: flex;

            align-items: center;

            gap: 12px;

            padding: 14px 18px;

            border-bottom: 1px solid #f0f2f6;
        }

        .course-icon {
            width: 42px;
            height: 42px;

            border-radius: 8px;

            display: flex;

            align-items: center;
            justify-content: center;
        }

        .math-icon {
            background: #fff0d8;
            color: #ff9d1c;
        }

        .science-icon {
            background: #e5f1ff;
            color: #147cf5;
        }

        .english-icon {
            background: #ffe8e8;
            color: #ee3948;
        }

        .course-list-item-info {
            flex: 1;
        }

        .course-list-item strong {
            display: block;

            font-size: 13px;

            color: #17213c;
        }

        .course-list-item small {
            color: #8b94a5;
        }


        /* Notifications */
        .notification {
            display: flex;

            gap: 15px;

            padding: 17px 20px;

            border-bottom: 1px solid #f0f2f6;
        }

        .notification-time {
            color: #1679d9;

            font-weight: 600;

            font-size: 13px;

            min-width: 45px;
        }

        .notification strong {
            font-size: 13px;

            color: #17213c;
        }

        .notification p {
            margin: 4px 0 0;

            font-size: 12px;

            color: #8a93a5;
        }


        /* Responsive */
        @media (max-width: 768px) {

            .school-welcome {
                padding: 25px;
            }

            .school-welcome h1 {
                font-size: 24px;
            }

            .school-page-header h1 {
                font-size: 24px;
            }

            .stat-card {
                min-height: 110px;
            }

        }


/* =========================================
   LIGHT / WHITE ADMINLTE THEME
========================================= */

/* Main page */
html,
body {
    background: #f6f8fb !important;
    color: #17213c !important;
}


/* =========================================
   SIDEBAR
========================================= */

.app-sidebar {
    background: #ffffff !important;
    border-right: 1px solid #e7ebf2 !important;
    box-shadow: 2px 0 10px rgba(30, 50, 80, 0.04);
}

/* Sidebar brand */
.app-sidebar .brand-link {
    background: #ffffff !important;
    color: #17213c !important;
    border-bottom: 1px solid #edf0f5 !important;
}

.app-sidebar .brand-link .brand-text {
    color: #17213c !important;
    font-weight: 700;
}


/* Sidebar menu text */
.app-sidebar .nav-link {
    color: #596579 !important;
    border-radius: 8px !important;
    margin: 3px 10px !important;
}


/* Sidebar icons */
.app-sidebar .nav-link i {
    color: #718096 !important;
}


/* Hover */
.app-sidebar .nav-link:hover {
    background: #f0f6ff !important;
    color: #147cf5 !important;
}

.app-sidebar .nav-link:hover i {
    color: #147cf5 !important;
}


/* Active menu */
.app-sidebar .nav-link.active {
    background: #147cf5 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 10px rgba(20, 124, 245, 0.18);
}

.app-sidebar .nav-link.active i {
    color: #ffffff !important;
}


/* Sidebar headers */
.app-sidebar .nav-header {
    color: #9aa5b5 !important;
    font-size: 11px !important;
    font-weight: 700 !important;
    letter-spacing: 0.5px;
}


/* Submenu */
.app-sidebar .nav-treeview .nav-link {
    color: #6d788b !important;
}

.app-sidebar .nav-treeview .nav-link:hover {
    background: #f5f8fc !important;
    color: #147cf5 !important;
}


/* =========================================
   TOP NAVBAR
========================================= */

.app-header {
    background: #ffffff !important;
    border-bottom: 1px solid #e7ebf2 !important;
    box-shadow: 0 2px 8px rgba(30, 50, 80, 0.04);
}


/* Navbar links/icons */
.app-header .nav-link {
    color: #536174 !important;
}

.app-header .nav-link:hover {
    color: #0f2a5f !important;
}


/* =========================================
   MAIN CONTENT
========================================= */

.app-main {
    background: #f6f8fb !important;
}

.app-content {
    background: #f6f8fb !important;
}


/* =========================================
   BREADCRUMB / PAGE HEADER
========================================= */

.breadcrumb {
    background: transparent !important;
}

.breadcrumb-item {
    color: #7b8496 !important;
}

.breadcrumb-item.active {
    color: #17213c !important;
}


/* =========================================
   SCROLLBAR
========================================= */

.app-sidebar::-webkit-scrollbar,
.app-main::-webkit-scrollbar {
    width: 6px;
}

.app-sidebar::-webkit-scrollbar-thumb,
.app-main::-webkit-scrollbar-thumb {
    background: #d8dee8;
    border-radius: 10px;
}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 768px) {

    .app-sidebar {
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.08);
    }

}

<style>

.school-calendar {
    width: 100%;
}

.calendar-row {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
}

.calendar-row > div {
    min-height: 48px;
    padding: 8px 4px;
    border: 1px solid #f0f0f0;
    font-size: 13px;
    position: relative;
}

.calendar-header > div {
    min-height: auto;
    border: none;
    font-weight: 600;
    color: #6c757d;
    padding-bottom: 10px;
}

.calendar-row > div:not(.empty):hover {
    background: #f8f9fa;
}

.event {
    background: #eef5ff;
    color: #0d6efd;
    font-weight: 700;
    border-radius: 6px;
}

.event small,
.holiday small {
    display: block;
    font-size: 8px;
    margin-top: 2px;
}

.holiday {
    background: #fff3f3;
    color: #dc3545;
    font-weight: 600;
    border-radius: 6px;
}

.legend {
    display: inline-block;
    width: 9px;
    height: 9px;
    border-radius: 50%;
    margin-right: 5px;
}

.event-legend {
    background: #0d6efd;
}

.holiday-legend {
    background: #dc3545;
}

        /* Final dashboard color overrides */
        .school-calendar .calendar-row > div {
            background-color: #ffffff !important;
            color: #536174 !important;
        }

        .school-calendar .calendar-row > .event {
            background-color: #eaf3ff !important;
            color: #0d6efd !important;
        }

        .school-calendar .calendar-row > .holiday {
            background-color: #fff0f1 !important;
            color: #e63946 !important;
        }

        .school-calendar .calendar-header > div {
            color: #718096 !important;
            background-color: #ffffff !important;
        }

        .school-calendar .empty {
            background-color: #ffffff !important;
        }


        /* =========================================
           STUDENT STATISTICS + SCHOOL CALENDAR
           Light theme matching the colorful cards
        ========================================= */

        .row.mt-4 > .col-lg-5 > .card,
        .row.mt-4 > .col-lg-7 > .card {
            background: #ffffff !important;
            color: #17213c !important;
            border: 1px solid #e8edf4 !important;
            border-radius: 14px !important;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(30, 50, 80, 0.08) !important;
        }

        .row.mt-4 > .col-lg-5 > .card .card-header,
        .row.mt-4 > .col-lg-7 > .card .card-header,
        .row.mt-4 > .col-lg-5 > .card .card-body,
        .row.mt-4 > .col-lg-7 > .card .card-body {
            background: #ffffff !important;
            color: #17213c !important;
        }

        .row.mt-4 > .col-lg-5 > .card h5,
        .row.mt-4 > .col-lg-7 > .card h5 {
            color: #17213c !important;
        }

        .row.mt-4 > .col-lg-5 > .card small,
        .row.mt-4 > .col-lg-7 > .card small,
        .row.mt-4 > .col-lg-5 > .card .text-muted,
        .row.mt-4 > .col-lg-7 > .card .text-muted {
            color: #7b8798 !important;
        }

        /* Statistics chart area */
        #studentGenderChart {
            background: transparent !important;
        }

        /* Calendar */
        .school-calendar {
            background: #ffffff !important;
            border-radius: 10px;
            overflow: hidden;
        }

        .calendar-row {
            background: #ffffff !important;
        }

        .calendar-row > div {
            background: #ffffff !important;
            color: #536174 !important;
            border-color: #e7ecf3 !important;
        }

        .calendar-header > div {
            background: #f8faff !important;
            color: #66758a !important;
            font-weight: 700 !important;
            border-color: #e7ecf3 !important;
        }

        .calendar-row > div:not(.empty):hover {
            background: #f0f6ff !important;
            color: #0d6efd !important;
        }

        .calendar-row > div.event {
            background: #eaf3ff !important;
            color: #0d6efd !important;
            border-color: #cfe2ff !important;
            font-weight: 700;
        }

        .calendar-row > div.event small {
            color: #0d6efd !important;
        }

        .calendar-row > div.holiday {
            background: #fff0f1 !important;
            color: #e63946 !important;
            border-color: #ffd5d8 !important;
            font-weight: 700;
        }

        .calendar-row > div.holiday small {
            color: #e63946 !important;
        }

        .school-calendar .empty {
            background: #ffffff !important;
        }

        /* Calendar controls */
        .row.mt-4 .btn-light {
            background: #f5f8fc !important;
            border: 1px solid #e3e9f1 !important;
            color: #536174 !important;
        }

        .row.mt-4 .btn-light:hover {
            background: #eaf3ff !important;
            color: #0d6efd !important;
        }

        /* Calendar legend */
        .row.mt-4 .legend {
            vertical-align: middle;
        }

        .row.mt-4 .event-legend {
            background: #0d6efd !important;
        }

        .row.mt-4 .holiday-legend {
            background: #e63946 !important;
        }


        /* =========================================
           FINAL SCHOOL DASHBOARD UI
        ========================================= */

        .school-dashboard-card {
            background: #ffffff !important;
            border: 1px solid #e7ecf3;
            border-radius: 14px;
            box-shadow: 0 5px 18px rgba(30, 50, 80, 0.07);
            overflow: hidden;
            color: #17213c;
        }

        .dashboard-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 19px 22px;
            border-bottom: 1px solid #edf1f6;
            background: #ffffff;
        }

        .dashboard-card-header h3 {
            margin: 0 0 4px;
            font-size: 18px;
            font-weight: 700;
            color: #17213c;
        }

        .dashboard-card-header p {
            margin: 0;
            color: #8792a5;
            font-size: 12px;
        }

        .dashboard-card-body {
            padding: 20px 22px;
            background: #ffffff;
        }

        .dashboard-badge {
            display: inline-flex;
            align-items: center;
            padding: 7px 11px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
        }

        .blue-badge {
            background: #eaf3ff;
            color: #0d6efd;
        }

        .dashboard-outline-btn {
            border: 1px solid #0d6efd;
            border-radius: 7px;
            padding: 7px 11px;
            color: #0d6efd;
            background: #ffffff;
            font-size: 12px;
            text-decoration: none;
        }

        .dashboard-outline-btn:hover {
            background: #0d6efd;
            color: #ffffff;
        }

        .dashboard-link {
            color: #0d6efd;
            font-size: 12px;
            text-decoration: none;
            font-weight: 600;
        }

        .student-chart-wrap {
            height: 245px;
        }

        .student-stat-item {
            margin-bottom: 24px;
        }

        .student-stat-item:last-child {
            margin-bottom: 0;
        }

        .student-stat-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #718096;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .student-stat-item strong {
            display: block;
            font-size: 26px;
            color: #17213c;
            line-height: 1.1;
        }

        .student-stat-item small {
            color: #8994a7;
            font-size: 11px;
        }

        .stat-dot,
        .legend-dot {
            display: inline-block;
            width: 9px;
            height: 9px;
            border-radius: 50%;
        }

        .blue-dot,
        .blue-legend {
            background: #0d6efd;
        }

        .cyan-dot,
        .cyan-legend {
            background: #0dcaf0;
        }

        .red-legend {
            background: #e63946;
        }

        .calendar-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 13px;
        }

        .calendar-toolbar h4 {
            margin: 0;
            color: #17213c;
            font-size: 18px;
            font-weight: 700;
        }

        .calendar-nav {
            width: 38px;
            height: 38px;
            border: 1px solid #e4eaf2;
            border-radius: 8px;
            background: #f7f9fc;
            color: #536174;
        }

        .calendar-nav:hover {
            background: #eaf3ff;
            color: #0d6efd;
        }

        .calendar-legend {
            display: flex;
            gap: 22px;
            margin-top: 13px;
            color: #66758a;
            font-size: 12px;
        }

        .calendar-legend span {
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .notice-card {
            border-top: 3px solid #0d6efd;
        }

        .notice-icon {
            color: #f59e0b;
            margin-right: 5px;
        }

        .notice-list {
            padding: 2px 22px;
        }

        .notice-item {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 15px 0;
            border-bottom: 1px solid #edf1f6;
        }

        .notice-item:last-child {
            border-bottom: 0;
        }

        .notice-item-icon {
            width: 38px;
            height: 38px;
            flex: 0 0 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9px;
        }

        .notice-blue {
            background: #eaf3ff;
            color: #0d6efd;
        }

        .notice-orange {
            background: #fff4df;
            color: #f59e0b;
        }

        .notice-cyan {
            background: #e5fafd;
            color: #06a9c4;
        }

        .notice-content {
            flex: 1;
            min-width: 0;
        }

        .notice-content strong {
            display: block;
            color: #17213c;
            font-size: 13px;
            margin-bottom: 3px;
        }

        .notice-content p {
            margin: 0;
            color: #8994a7;
            font-size: 12px;
        }

        .notice-date {
            color: #9aa4b4;
            font-size: 11px;
            white-space: nowrap;
        }

        .overview-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            padding: 20px 22px 15px;
        }

        .overview-item {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 14px;
            border: 1px solid #edf1f6;
            border-radius: 10px;
            background: #fbfcfe;
        }

        .overview-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9px;
            font-size: 17px;
            flex: 0 0 38px;
        }

        .blue-overview {
            background: #eaf3ff;
            color: #0d6efd;
        }

        .orange-overview {
            background: #fff4df;
            color: #f59e0b;
        }

        .cyan-overview {
            background: #e5fafd;
            color: #06a9c4;
        }

        .red-overview {
            background: #fff0f1;
            color: #e63946;
        }

        .overview-item strong {
            display: block;
            color: #17213c;
            font-size: 20px;
            line-height: 1;
        }

        .overview-item span {
            display: block;
            margin-top: 4px;
            color: #8994a7;
            font-size: 11px;
        }

        .overview-progress-section {
            padding: 0 22px 20px;
        }

        .overview-progress-head {
            display: flex;
            justify-content: space-between;
            margin-bottom: 7px;
            color: #66758a;
            font-size: 12px;
        }

        .overview-progress-head strong {
            color: #0d6efd;
        }

        .overview-progress {
            height: 7px;
            background: #edf1f6;
            border-radius: 999px;
            overflow: hidden;
        }

        .overview-progress > div {
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, #0d6efd, #21b8d6);
        }

        .notification-list {
            padding: 4px 20px;
        }

        .notification-item {
            display: grid;
            grid-template-columns: 42px 3px 1fr;
            gap: 10px;
            align-items: start;
            padding: 14px 0;
            border-bottom: 1px solid #edf1f6;
        }

        .notification-item:last-child {
            border-bottom: 0;
        }

        .notification-time {
            color: #66758a;
            font-size: 11px;
            padding-top: 2px;
        }

        .notification-line {
            width: 3px;
            min-height: 35px;
            border-radius: 5px;
        }

        .blue-line { background: #0d6efd; }
        .orange-line { background: #f59e0b; }
        .cyan-line { background: #06b6d4; }
        .red-line { background: #e63946; }

        .notification-item strong {
            display: block;
            color: #17213c;
            font-size: 12px;
            margin-bottom: 3px;
        }

        .notification-item p {
            margin: 0;
            color: #8994a7;
            font-size: 11px;
            line-height: 1.4;
        }

        .quick-operations-card {
            margin-bottom: 25px;
        }

        .quick-title-icon {
            color: #f59e0b;
            margin-right: 5px;
        }

        .quick-operation-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            padding: 22px;
        }

        .quick-operation {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 105px;
            gap: 10px;
            padding: 14px;
            background: #ffffff;
            border: 1px solid #dfe6ef;
            border-radius: 10px;
            text-decoration: none;
            color: #17213c;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }

        .quick-operation:hover {
            transform: translateY(-2px);
            border-color: #cdd8e6;
            box-shadow: 0 7px 18px rgba(30, 50, 80, 0.08);
            color: #0d6efd;
        }

        .quick-operation-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 19px;
        }

        .quick-operation span {
            font-size: 13px;
            font-weight: 600;
        }

        .quick-blue {
            background: #eaf3ff;
            color: #0d6efd;
        }

        .quick-orange {
            background: #fff4df;
            color: #f59e0b;
        }

        .quick-cyan {
            background: #e5fafd;
            color: #06a9c4;
        }

        .quick-green {
            background: #e9f8ef;
            color: #198754;
        }

        @media (max-width: 991px) {
            .overview-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .quick-operation-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 575px) {
            .overview-grid,
            .quick-operation-grid {
                grid-template-columns: 1fr;
            }

            .dashboard-card-header {
                align-items: flex-start;
            }

            .notice-item {
                align-items: flex-start;
            }
        }


        /* School System Overview */
        .school-overview-card {
            border-top: 3px solid #f4b400;
        }

        .school-overview-title {
            padding: 17px 20px;
        }

        .school-overview-title h3 {
            font-size: 18px;
        }

        .school-overview-icon {
            color: #f4b400;
            margin-right: 6px;
        }

        .school-info-table {
            width: 100%;
        }

        .school-info-row {
            display: grid;
            grid-template-columns: 32% 68%;
            min-height: 48px;
            border-bottom: 1px solid #edf1f6;
        }

        .school-info-label,
        .school-info-value {
            display: flex;
            align-items: center;
            padding: 10px 18px;
        }

        .school-info-label {
            justify-content: center;
            color: #607087;
            font-size: 13px;
            border-right: 1px solid #17213c;
        }

        .school-info-value {
            justify-content: center;
            color: #17213c;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
        }

        .info-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 4px 9px;
            border-radius: 5px;
            color: #ffffff;
            font-size: 11px;
            font-weight: 700;
        }

        .dark-badge {
            background: #212529;
        }

        .cyan-badge {
            background: #17a2b8;
        }

        .green-badge {
            background: #28a745;
        }

        .overview-summary {
            border-top: 1px solid #edf1f6;
            padding-top: 2px;
        }

        .overview-summary-header {
            padding: 15px 22px 0;
        }

        .overview-summary-header strong {
            display: block;
            color: #17213c;
            font-size: 14px;
        }

        .overview-summary-header span {
            display: block;
            margin-top: 3px;
            color: #8994a7;
            font-size: 11px;
        }

        @media (max-width: 575px) {
            .school-info-row {
                grid-template-columns: 42% 58%;
            }

            .school-info-label,
            .school-info-value {
                padding: 9px 8px;
                font-size: 12px;
            }
        }



        /* Top-right Logout */
        .dashboard-header-row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
        }

        .dashboard-logout-form {
            margin: 2px 0 0 auto;
        }

        .dashboard-logout-btn {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border: 1px solid #e4e9f1;
            border-radius: 9px;
            background: #ffffff;
            color: #4f5f73;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .1px;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(30, 50, 80, .06);
            transition: transform .2s ease, box-shadow .2s ease,
                        background .2s ease, border-color .2s ease, color .2s ease;
        }

        .dashboard-logout-btn i {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            height: 25px;
            border-radius: 7px;
            background: #fff0f1;
            color: #e63946;
            font-size: 14px;
            transition: background .2s ease, color .2s ease;
        }

        .dashboard-logout-btn:hover {
            transform: translateY(-1px);
            background: #fff8f8;
            border-color: #ffcdd2;
            color: #d63342;
            box-shadow: 0 6px 16px rgba(230, 57, 70, .12);
        }

        .dashboard-logout-btn:hover i {
            background: #e63946;
            color: #ffffff;
        }

        .dashboard-logout-btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 7px rgba(30, 50, 80, .08);
        }

        @media (max-width: 575px) {
            .dashboard-header-row {
                align-items: center;
            }

            .dashboard-logout-btn span {
                display: none;
            }

            .dashboard-logout-btn {
                width: 38px;
                height: 38px;
                justify-content: center;
                padding: 0;
            }

            .dashboard-logout-btn i {
                width: 27px;
                height: 27px;
            }
        }

    </style>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const genderChart = document.getElementById('studentGenderChart');

    if (!genderChart) {
        return;
    }

    new Chart(genderChart, {

        type: 'doughnut',

        data: {

            labels: [
                'Male',
                'Female'
            ],

            datasets: [{

                data: [
                    {{ $maleStudents }},
                    {{ $femaleStudents }}
                ],

                backgroundColor: [
                    '#0d6efd',
                    '#0dcaf0'
                ],

                borderWidth: 0

            }]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            cutout: '70%',

            plugins: {

                legend: {
                    display: false
                },

                tooltip: {

                    callbacks: {

                        label: function(context) {

                            return ' '
                                + context.label
                                + ': '
                                + context.raw
                                + ' students';

                        }

                    }

                }

            }

        }

    });

});
</script>



    {{-- =========================
         PAGE HEADER
    ========================== --}}

    <x-slot name="contentHeader">
        <div class="school-page-header dashboard-header-row">
            <div>
                <div class="admin-status">
                <span class="admin-status-dot"></span>
                <span>Admin • Online</span>
            </div>

            <h1>Dashboard</h1>
                <p>School Management System</p>
            </div>

            <form action="{{ route('logout') }}" method="POST" class="dashboard-logout-form">
                @csrf
                <button type="submit" class="dashboard-logout-btn" title="Logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </x-slot>


    {{-- =========================
         WELCOME BANNER
    ========================== --}}

    <div class="school-welcome">
        <h1>Welcome back, Admin! 👋</h1>
        <p>Manage your school, students and faculty from one place.</p>
    </div>


    {{-- =========================
         FOUR KEY STATISTICS
    ========================== --}}

    <div class="row g-3 mb-1">

        <div class="col-xl-3 col-md-6">
            <div class="stat-card stat-blue">
                <i class="bi bi-people-fill stat-icon"></i>
                <div class="stat-number">350</div>
                <div class="stat-label">Total Students</div>
                <a href="#" class="stat-more">View students <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="stat-card stat-orange">
                <i class="bi bi-person-check-fill stat-icon"></i>
                <div class="stat-number">92%</div>
                <div class="stat-label">Attendance</div>
                <a href="#" class="stat-more">View attendance <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="stat-card stat-cyan">
                <i class="bi bi-award-fill stat-icon"></i>
                <div class="stat-number">86%</div>
                <div class="stat-label">Result</div>
                <a href="#" class="stat-more">View results <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="stat-card stat-red">
                <i class="bi bi-mortarboard-fill stat-icon"></i>
                <div class="stat-number">45</div>
                <div class="stat-label">Total Faculty</div>
                <a href="#" class="stat-more">View faculty <i class="bi bi-arrow-right-short"></i></a>
            </div>
        </div>

    </div>


    {{-- =========================
         STUDENT STATISTICS + CALENDAR
    ========================== --}}

    <div class="row mt-4">

        {{-- Student Statistics --}}
<div class="col-lg-5 mb-4">

    <div class="school-dashboard-card h-100">

        <div class="dashboard-card-header">

            <div>
                <h3>Student Statistics</h3>
                <p>Gender-wise student distribution</p>
            </div>

            <span class="dashboard-badge blue-badge">
                Total: {{ $totalStudents ?? 0 }}
            </span>

        </div>


        <div class="dashboard-card-body">

            <div class="row align-items-center">

                <div class="col-md-7">

                    <div class="student-chart-wrap">
                        <canvas id="studentGenderChart"></canvas>
                    </div>

                </div>


                <div class="col-md-5">

                    @php
                        $genderTotal = $maleStudents + $femaleStudents;

                        $malePercentage = $genderTotal > 0
                            ? round(($maleStudents / $genderTotal) * 100, 1)
                            : 0;

                        $femalePercentage = $genderTotal > 0
                            ? round(($femaleStudents / $genderTotal) * 100, 1)
                            : 0;
                    @endphp


                    <div class="student-stat-item">

                        <div class="student-stat-label">

                            <span class="stat-dot blue-dot"></span>

                            <span>Male</span>

                        </div>

                        <strong>
                            {{ $maleStudents }}
                        </strong>

                        <small>
                            {{ $malePercentage }}%
                        </small>

                    </div>


                    <div class="student-stat-item">

                        <div class="student-stat-label">

                            <span class="stat-dot cyan-dot"></span>

                            <span>Female</span>

                        </div>

                        <strong>
                            {{ $femaleStudents }}
                        </strong>

                        <small>
                            {{ $femalePercentage }}%
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


        {{-- School Calendar --}}
        <div class="col-lg-7 mb-4">
            <div class="school-dashboard-card h-100">

                <div class="dashboard-card-header">
                    <div>
                        <h3>School Calendar</h3>
                        <p>Academic events and important dates</p>
                    </div>

                    <a href="#" class="dashboard-outline-btn">View Calendar</a>
                </div>

                <div class="dashboard-card-body">

                    <div class="calendar-toolbar">
                        <button class="calendar-nav">
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <h4>September 2026</h4>

                        <button class="calendar-nav">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>

                    <div class="school-calendar">

                        <div class="calendar-row calendar-header">
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                            <div>Sun</div>
                        </div>

                        <div class="calendar-row">
                            <div class="empty"></div>
                            <div>1</div>
                            <div>2</div>
                            <div>3</div>
                            <div>4</div>
                            <div class="holiday">5 <small>Holiday</small></div>
                            <div class="holiday">6</div>
                        </div>

                        <div class="calendar-row">
                            <div>7</div>
                            <div>8</div>
                            <div class="event">9 <small>Exam</small></div>
                            <div>10</div>
                            <div>11</div>
                            <div>12</div>
                            <div>13</div>
                        </div>

                        <div class="calendar-row">
                            <div>14</div>
                            <div class="event">15 <small>PTM</small></div>
                            <div>16</div>
                            <div>17</div>
                            <div>18</div>
                            <div>19</div>
                            <div>20</div>
                        </div>

                        <div class="calendar-row">
                            <div>21</div>
                            <div>22</div>
                            <div>23</div>
                            <div class="event">24 <small>Sports</small></div>
                            <div>25</div>
                            <div>26</div>
                            <div>27</div>
                        </div>

                        <div class="calendar-row">
                            <div>28</div>
                            <div>29</div>
                            <div>30</div>
                            <div class="empty"></div>
                            <div class="empty"></div>
                            <div class="empty"></div>
                            <div class="empty"></div>
                        </div>

                    </div>

                    <div class="calendar-legend">
                        <span><i class="legend-dot blue-legend"></i>School Event</span>
                        <span><i class="legend-dot red-legend"></i>Holiday</span>
                    </div>

                </div>
            </div>
        </div>

    </div>


    {{-- =========================
         NOTICE
    ========================== --}}

    <div class="school-dashboard-card notice-card mb-4">

        <div class="dashboard-card-header">
            <div>
                <h3><i class="bi bi-megaphone-fill notice-icon"></i> Notice</h3>
                <p>Latest announcements from the school</p>
            </div>

            <a href="#" class="dashboard-link">View All</a>
        </div>

        <div class="notice-list">

            <div class="notice-item">
                <div class="notice-item-icon notice-blue">
                    <i class="bi bi-calendar-event"></i>
                </div>
                <div class="notice-content">
                    <strong>Unit Test Examination</strong>
                    <p>Unit test examinations will begin from 9 September 2026.</p>
                </div>
                <span class="notice-date">Sep 01</span>
            </div>

            <div class="notice-item">
                <div class="notice-item-icon notice-orange">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="notice-content">
                    <strong>Parent Teacher Meeting</strong>
                    <p>PTM is scheduled for 15 September 2026.</p>
                </div>
                <span class="notice-date">Sep 01</span>
            </div>

            <div class="notice-item">
                <div class="notice-item-icon notice-cyan">
                    <i class="bi bi-trophy-fill"></i>
                </div>
                <div class="notice-content">
                    <strong>Annual Sports Event</strong>
                    <p>School sports activities are scheduled for 24 September 2026.</p>
                </div>
                <span class="notice-date">Aug 30</span>
            </div>

        </div>
    </div>


    {{-- =========================
         SCHOOL OVERVIEW + RECENT NOTIFICATIONS
    ========================== --}}

    <div class="row g-3">

        {{-- School Overview --}}
        <div class="col-xl-8">
            <div class="school-dashboard-card h-100 school-overview-card">

                <div class="dashboard-card-header school-overview-title">
                    <div>
                        <h3><i class="bi bi-buildings-fill school-overview-icon"></i> School System Overview</h3>
                    </div>
                </div>

                <div class="school-info-table">

                    <div class="school-info-row">
                        <div class="school-info-label">School Name</div>
                        <div class="school-info-value">Demo School</div>
                    </div>

                    <div class="school-info-row">
                        <div class="school-info-label">UDISE No</div>
                        <div class="school-info-value">
                            <span class="info-badge dark-badge">27250100101</span>
                        </div>
                    </div>

                    <div class="school-info-row">
                        <div class="school-info-label">Academic Year</div>
                        <div class="school-info-value">
                            <span class="info-badge cyan-badge">2025–2026</span>
                        </div>
                    </div>

                    <div class="school-info-row">
                        <div class="school-info-label">ERP License</div>
                        <div class="school-info-value">
                            <span class="info-badge green-badge">Active / Premium</span>
                        </div>
                    </div>

                    <div class="school-info-row">
                        <div class="school-info-label">System</div>
                        <div class="school-info-value">Zap School Management</div>
                    </div>

                </div>

                {{-- Keep the useful dashboard summary content below the school details --}}
                <div class="overview-summary">

                    <div class="overview-summary-header">
                        <div>
                            <strong>School Activity Summary</strong>
                            <span>Current academic statistics</span>
                        </div>
                    </div>

                    <div class="overview-grid">

                        <div class="overview-item">
                            <div class="overview-icon blue-overview">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div>
                                <strong>350</strong>
                                <span>Students</span>
                            </div>
                        </div>

                        <div class="overview-item">
                            <div class="overview-icon orange-overview">
                                <i class="bi bi-person-workspace"></i>
                            </div>
                            <div>
                                <strong>45</strong>
                                <span>Faculty</span>
                            </div>
                        </div>

                        <div class="overview-item">
                            <div class="overview-icon cyan-overview">
                                <i class="bi bi-book-fill"></i>
                            </div>
                            <div>
                                <strong>24</strong>
                                <span>Subjects</span>
                            </div>
                        </div>

                        <div class="overview-item">
                            <div class="overview-icon red-overview">
                                <i class="bi bi-building"></i>
                            </div>
                            <div>
                                <strong>12</strong>
                                <span>Classes</span>
                            </div>
                        </div>

                    </div>

                    <div class="overview-progress-section">

                        <div class="overview-progress-head">
                            <span>Academic Progress</span>
                            <strong>78%</strong>
                        </div>

                        <div class="overview-progress">
                            <div style="width:78%"></div>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        {{-- Recent Notifications --}}
        <div class="col-xl-4">
            <div class="school-dashboard-card h-100">

                <div class="dashboard-card-header">
                    <div>
                        <h3>Recent Notifications</h3>
                        <p>Latest school activities</p>
                    </div>
                </div>

                <div class="notification-list">

                    <div class="notification-item">
                        <span class="notification-time">10:10</span>
                        <div class="notification-line blue-line"></div>
                        <div>
                            <strong>New Student Registered</strong>
                            <p>Student registration completed.</p>
                        </div>
                    </div>

                    <div class="notification-item">
                        <span class="notification-time">08:40</span>
                        <div class="notification-line orange-line"></div>
                        <div>
                            <strong>Faculty Added</strong>
                            <p>New faculty member added.</p>
                        </div>
                    </div>

                    <div class="notification-item">
                        <span class="notification-time">07:10</span>
                        <div class="notification-line cyan-line"></div>
                        <div>
                            <strong>Exam Schedule Updated</strong>
                            <p>New examination schedule published.</p>
                        </div>
                    </div>

                    <div class="notification-item">
                        <span class="notification-time">06:30</span>
                        <div class="notification-line red-line"></div>
                        <div>
                            <strong>New Notice Published</strong>
                            <p>A new school notice is available.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>


    {{-- =========================
         QUICK SCHOOL OPERATIONS
    ========================== --}}

    <div class="school-dashboard-card quick-operations-card mt-4">

        <div class="dashboard-card-header">
            <div>
                <h3><i class="bi bi-lightning-charge-fill quick-title-icon"></i> Quick School Operations</h3>
                <p>Frequently used school management actions</p>
            </div>
        </div>

        <div class="quick-operation-grid">

            <a href="#" class="quick-operation">
                <div class="quick-operation-icon quick-blue">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <span>Student Register</span>
            </a>

            <a href="#" class="quick-operation">
                <div class="quick-operation-icon quick-orange">
                    <i class="bi bi-pencil-square"></i>
                </div>
                <span>Marks Entry</span>
            </a>

            <a href="#" class="quick-operation">
                <div class="quick-operation-icon quick-cyan">
                    <i class="bi bi-file-earmark-text-fill"></i>
                </div>
                <span>Progress Sheet</span>
            </a>

            <a href="#" class="quick-operation">
                <div class="quick-operation-icon quick-green">
                    <i class="bi bi-sliders"></i>
                </div>
                <span>Default Settings</span>
            </a>

        </div>

    </div>


</x-ladmin-panel>