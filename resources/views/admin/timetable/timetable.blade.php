<x-ladmin-panel title="Manage Timetable">

{{-- =========================================================
     TIMETABLE PAGE STYLES
     Dashboard UI design preserved
========================================================== --}}

<style>

    body {
        background: #f6f8fb;
    }

    /* =========================
       PAGE HEADER
    ========================== */

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

    /* =========================
       HEADER ROW
    ========================== */

    .timetable-header-row {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 20px;
    }

    /* =========================
       ADD TIMETABLE BUTTON
    ========================== */

    .add-timetable-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 15px;
        border: 1px solid #0d6efd;
        border-radius: 9px;
        background: #ffffff;
        color: #0d6efd;
        font-size: 12px;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 3px 10px rgba(30, 50, 80, .05);
        transition: all .2s ease;
    }

    .add-timetable-btn:hover {
        background: #0d6efd;
        color: #ffffff;
        transform: translateY(-1px);
        box-shadow: 0 6px 16px rgba(13, 110, 253, .15);
    }

    /* =========================
       STAT CARDS
    ========================== */

    .timetable-stat-card {
        border-radius: 14px;
        padding: 22px 24px;
        min-height: 128px;
        position: relative;
        overflow: hidden;
        color: white;
        box-shadow: 0 8px 20px rgba(30, 50, 80, 0.10);
        transition: all 0.2s ease;
    }

    .timetable-stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 28px rgba(30, 50, 80, 0.16);
    }

    .timetable-stat-card .stat-icon {
        position: absolute;
        top: 18px;
        right: 20px;
        font-size: 34px;
        opacity: 0.85;
    }

    .timetable-stat-card .stat-number {
        font-size: 30px;
        font-weight: 800;
        line-height: 1;
        margin-bottom: 6px;
    }

    .timetable-stat-card .stat-label {
        font-size: 14px;
        font-weight: 500;
        opacity: 0.95;
        margin-bottom: 18px;
    }

    .timetable-stat-blue {
        background: linear-gradient(135deg, #147cf5, #1268ca);
    }

    .timetable-stat-orange {
        background: linear-gradient(135deg, #ffb238, #ff9d1c);
    }

    .timetable-stat-cyan {
        background: linear-gradient(135deg, #2bcfe8, #18b5d5);
    }

    .timetable-stat-red {
        background: linear-gradient(135deg, #ff6d61, #f65343);
    }

    /* =========================
       MAIN DASHBOARD CARD
    ========================== */

    .timetable-dashboard-card {
        background: #ffffff;
        border: 1px solid #e7ecf3;
        border-radius: 14px;
        box-shadow: 0 5px 18px rgba(30, 50, 80, 0.07);
        overflow: hidden;
        color: #17213c;
    }

    .timetable-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding: 19px 22px;
        border-bottom: 1px solid #edf1f6;
        background: #ffffff;
    }

    .timetable-card-header h3 {
        margin: 0 0 4px;
        font-size: 18px;
        font-weight: 700;
        color: #17213c;
    }

    .timetable-card-header p {
        margin: 0;
        color: #8792a5;
        font-size: 12px;
    }

    .timetable-card-body {
        padding: 20px 22px;
        background: #ffffff;
    }

    /* =========================
       FILTER CARD
    ========================== */

    .filter-card {
        margin-bottom: 25px;
    }

    .filter-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .filter-group label {
        display: block;
        margin-bottom: 7px;
        color: #607087;
        font-size: 12px;
        font-weight: 600;
    }

    .filter-select,
    .filter-input {
        width: 100%;
        height: 42px;
        border: 1px solid #dfe6ef;
        border-radius: 8px;
        background: #ffffff;
        color: #536174;
        padding: 0 12px;
        font-size: 13px;
        outline: none;
        transition: border-color .2s ease, box-shadow .2s ease;
    }

    .filter-select:focus,
    .filter-input:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 3px rgba(13, 110, 253, .08);
    }

    /* =========================
       DIVISION SELECT
    ========================== */

    .filter-select.section-select {
        cursor: pointer;
    }

    .filter-select.section-select.section-waiting {
        background: #f8fafc;
        color: #8994a7;
    }

    /* =========================
       VIEW BUTTON
    ========================== */

    .filter-button-wrap {
        display: flex;
        align-items: flex-end;
    }

    .view-timetable-btn {
        width: 100%;
        height: 42px;
        border: none;
        border-radius: 8px;
        background: #0d6efd;
        color: #ffffff;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        transition: all .2s ease;
    }

    .view-timetable-btn:hover {
        background: #0b5ed7;
        transform: translateY(-1px);
        box-shadow: 0 5px 14px rgba(13, 110, 253, .18);
    }

    /* =========================
       TIMETABLE HEADER
    ========================== */

    .display-title-wrap {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .display-title-icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eaf3ff;
        color: #0d6efd;
        font-size: 19px;
        flex-shrink: 0;
    }

    .timetable-actions {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .timetable-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        min-height: 37px;
        padding: 7px 12px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: all .2s ease;
    }

    .print-btn {
        background: #f5f8fc;
        border: 1px solid #dfe6ef;
        color: #536174;
    }

    .print-btn:hover {
        background: #eaf3ff;
        border-color: #cfe2ff;
        color: #0d6efd;
    }

    .pdf-btn {
        background: #fff0f1;
        border: 1px solid #ffd5d8;
        color: #e63946;
    }

    .pdf-btn:hover {
        background: #e63946;
        border-color: #e63946;
        color: #ffffff;
    }

    /* =========================
       TIMETABLE TABLE
    ========================== */

    .timetable-table-wrapper {
        width: 100%;
        overflow-x: auto;
        border: 1px solid #e7ecf3;
        border-radius: 10px;
    }

    .school-timetable {
        width: 100%;
        min-width: 950px;
        border-collapse: separate;
        border-spacing: 0;
        background: #ffffff;
    }

    .school-timetable th {
        padding: 13px 10px;
        background: #17213c;
        color: #ffffff;
        border-right: 1px solid rgba(255,255,255,.12);
        border-bottom: 1px solid #17213c;
        text-align: center;
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
    }

    .school-timetable th:first-child {
        border-top-left-radius: 8px;
    }

    .school-timetable th:last-child {
        border-top-right-radius: 8px;
        border-right: none;
    }

    .school-timetable td {
        min-width: 125px;
        height: 88px;
        padding: 10px;
        border-right: 1px solid #e7ecf3;
        border-bottom: 1px solid #e7ecf3;
        text-align: center;
        vertical-align: middle;
        background: #ffffff;
    }

    .school-timetable tr td:last-child {
        border-right: none;
    }

    .school-timetable tbody tr:last-child td {
        border-bottom: none;
    }

    /* Time */

    .time-cell {
        width: 115px;
        min-width: 115px !important;
        background: #f8faff !important;
        color: #536174;
        font-size: 11px;
        font-weight: 700;
    }

    .time-cell i {
        color: #0d6efd;
        margin-right: 3px;
    }

    /* Subject */

    .subject-name {
        color: #17213c;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.35;
        margin-bottom: 5px;
    }

    .teacher-name {
        color: #7b8798;
        font-size: 11px;
        line-height: 1.3;
    }

    .teacher-name i {
        color: #0d6efd;
        margin-right: 3px;
    }

    .room-name {
        margin-top: 4px;
        color: #9aa4b4;
        font-size: 10px;
    }

    .room-name i {
        color: #06a9c4;
        margin-right: 3px;
    }

    .empty-cell {
        color: #c2cad5;
        font-size: 14px;
    }

    /* =========================
       BREAK
    ========================== */

    .break-row td {
        height: 48px;
        background: #eef6ff !important;
        color: #0d6efd;
        font-size: 12px;
        font-weight: 700;
    }

    .break-row td i {
        color: #0d6efd;
        margin-right: 5px;
    }

    /* =========================
       LUNCH
    ========================== */

    .lunch-row td {
        height: 48px;
        background: #fff0f1 !important;
        color: #d63342;
        font-size: 12px;
        font-weight: 700;
    }

    .lunch-row td i {
        color: #e63946;
        margin-right: 5px;
    }

    /* =========================
       NO TIMETABLE
    ========================== */

    .no-timetable {
        min-height: 270px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 40px 20px;
    }

    .no-timetable-icon {
        width: 65px;
        height: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 14px;
        border-radius: 14px;
        background: #eaf3ff;
        color: #0d6efd;
        font-size: 28px;
    }

    .no-timetable h4 {
        margin: 0 0 5px;
        color: #17213c;
        font-size: 17px;
        font-weight: 700;
    }

    .no-timetable p {
        margin: 0;
        color: #8994a7;
        font-size: 12px;
    }

    /* =========================
       INFORMATION CARD
    ========================== */

    .information-card {
        border-top: 3px solid #0d6efd;
        margin-top: 25px;
    }

    .information-icon {
        color: #0d6efd;
        margin-right: 5px;
    }

    .information-list {
        padding: 4px 22px;
    }

    .information-item {
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 15px 0;
        border-bottom: 1px solid #edf1f6;
    }

    .information-item:last-child {
        border-bottom: none;
    }

    .information-item-icon {
        width: 38px;
        height: 38px;
        flex: 0 0 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
    }

    .information-blue {
        background: #eaf3ff;
        color: #0d6efd;
    }

    .information-orange {
        background: #fff4df;
        color: #f59e0b;
    }

    .information-cyan {
        background: #e5fafd;
        color: #06a9c4;
    }

    .information-content {
        flex: 1;
        min-width: 0;
    }

    .information-content strong {
        display: block;
        color: #17213c;
        font-size: 13px;
        margin-bottom: 3px;
    }

    .information-content p {
        margin: 0;
        color: #8994a7;
        font-size: 12px;
    }

    /* =========================
       RESPONSIVE
    ========================== */

    @media (max-width: 991px) {

        .filter-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 767px) {

        .timetable-header-row {
            align-items: center;
        }

        .timetable-card-header {
            align-items: flex-start;
        }

        .filter-grid {
            grid-template-columns: 1fr;
        }

        .timetable-actions {
            width: 100%;
        }

        .timetable-action-btn {
            flex: 1;
        }
    }

    @media (max-width: 575px) {

        .school-page-header h1 {
            font-size: 24px;
        }

        .timetable-stat-card {
            min-height: 110px;
        }

        .timetable-card-header {
            flex-direction: column;
        }

        .timetable-actions {
            width: 100%;
        }

        .display-title-wrap {
            width: 100%;
        }

        .add-timetable-btn {
            width: 100%;
            justify-content: center;
        }

        .information-item {
            align-items: flex-start;
        }
    }

    /* =========================
       PRINT
    ========================== */

    @media print {

        body {
            background: #ffffff !important;
        }

        .app-sidebar,
        .app-header,
        .school-page-header,
        .timetable-header-row,
        .filter-card,
        .timetable-stat-card,
        .information-card,
        .timetable-actions {
            display: none !important;
        }

        .app-main,
        .app-content {
            background: #ffffff !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        .timetable-dashboard-card {
            border: none !important;
            box-shadow: none !important;
            margin: 0 !important;
        }

        .timetable-card-header {
            padding: 0 0 15px !important;
            border: none !important;
        }

        .timetable-card-body {
            padding: 0 !important;
        }

        .timetable-table-wrapper {
            overflow: visible !important;
            border: none !important;
        }

        .school-timetable {
            min-width: 100% !important;
        }

        .school-timetable th {
            background: #17213c !important;
            color: #ffffff !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .school-timetable td {
            height: 70px;
        }

        .break-row td {
            background: #eef6ff !important;
            color: #0d6efd !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .lunch-row td {
            background: #fff0f1 !important;
            color: #d63342 !important;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
    }

</style>


{{-- =========================================================
     PAGE HEADER
========================================================== --}}

<x-slot name="contentHeader">

    <div class="school-page-header timetable-header-row">

        <div>

            <h1>
                <i class="bi bi-calendar-week"></i>
                Timetable Management
            </h1>

            <p>
                Manage and view class-wise weekly timetables
            </p>

        </div>

        <a
            href="{{ route('admintimetable.create') }}"
            class="add-timetable-btn"
        >
            <i class="bi bi-plus-lg"></i>
            Add Timetable
        </a>

    </div>

</x-slot>


{{-- =========================================================
     STATISTICS
========================================================== --}}

<div class="row g-3 mb-1">

    {{-- Classes --}}

    <div class="col-xl-3 col-md-6">

        <div class="timetable-stat-card timetable-stat-blue">

            <i class="bi bi-building stat-icon"></i>

            <div class="stat-number">
                {{ $classes->count() }}
            </div>

            <div class="stat-label">
                Total Classes
            </div>

        </div>

    </div>


    {{-- Teachers --}}

    <div class="col-xl-3 col-md-6">

        <div class="timetable-stat-card timetable-stat-orange">

            <i class="bi bi-person-workspace stat-icon"></i>

            <div class="stat-number">
                {{ $teachersCount }}
            </div>

            <div class="stat-label">
                Total Teachers
            </div>

        </div>

    </div>


    {{-- Periods --}}

    <div class="col-xl-3 col-md-6">

        <div class="timetable-stat-card timetable-stat-cyan">

            <i class="bi bi-book-fill stat-icon"></i>

            <div class="stat-number">

                {{ $slots->where('type', 'period')->count() }}

            </div>

            <div class="stat-label">
                Total Periods
            </div>

        </div>

    </div>


    {{-- Timetable Records --}}

    <div class="col-xl-3 col-md-6">

        <div class="timetable-stat-card timetable-stat-red">

            <i class="bi bi-clock-fill stat-icon"></i>

            <div class="stat-number">
                {{ $timetablesCount }}
            </div>

            <div class="stat-label">
                Total Timetable Entries
            </div>

        </div>

    </div>

</div>


{{-- =========================================================
     FILTER CARD
========================================================== --}}

<div class="timetable-dashboard-card filter-card mt-4">

    <div class="timetable-card-header">

        <div>

            <h3>

                <i
                    class="bi bi-funnel-fill"
                    style="color:#0d6efd;"
                ></i>

                Select Class Timetable

            </h3>

            <p>
                Select class, division and academic year to view the weekly timetable
            </p>

        </div>

    </div>


    <div class="timetable-card-body">

        <form
            method="GET"
            action="{{ route('admintimetable') }}"
            id="timetableFilterForm"
        >

            <div class="filter-grid">


                {{-- =================================================
                     CLASS
                ================================================== --}}

                <div class="filter-group">

                    <label>
                        Class
                    </label>

                    <select
                        name="class_id"
                        id="class_id"
                        class="filter-select"
                    >

                        <option value="">
                            Select Class
                        </option>

                        @foreach($classes as $class)

                            @php

                                $className = trim(
                                    (string) $class->name
                                );

                                preg_match(
                                    '/\d+/',
                                    $className,
                                    $classMatches
                                );

                                $classNumber =
                                    $classMatches[0] ?? null;

                            @endphp

                            <option
                                value="{{ $class->id }}"
                                {{ (string) $selectedClassId === (string) $class->id ? 'selected' : '' }}
                            >

                                @if($classNumber)

                                    Class {{ $classNumber }}

                                @else

                                    {{ $className }}

                                @endif

                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- =================================================
                     DIVISION / SECTION
                ================================================== --}}

                <div class="filter-group">

                    <label>
                        Division / Section
                    </label>

                    <select
                        name="section_id"
                        id="section_id"
                        class="filter-select section-select {{ !$selectedClassId ? 'section-waiting' : '' }}"
                    >

                        <option value="">
                            Select Division
                        </option>

                        @foreach($sections as $section)

                            @php

                                $sectionName = trim(
                                    (string) $section->name
                                );

                            @endphp

                            <option
                                value="{{ $section->id }}"
                                data-class-id="{{ $section->class_id }}"
                                {{ (string) $selectedSectionId === (string) $section->id ? 'selected' : '' }}
                            >

                                {{ strtoupper($sectionName) }}

                            </option>

                        @endforeach

                    </select>

                </div>


                {{-- =================================================
                     ACADEMIC YEAR
                ================================================== --}}

                <div class="filter-group">

                    <label>
                        Academic Year
                    </label>

                    <input
                        type="text"
                        name="academic_year"
                        id="academic_year"
                        class="filter-input"
                        value="{{ $academicYear ?? '' }}"
                        placeholder="Example: 2026-27"
                        maxlength="20"
                    >

                </div>

            </div>


            {{-- =================================================
                 VIEW TIMETABLE BUTTON
            ================================================== --}}

            <div style="margin-top:15px;">

                <button
                    type="submit"
                    class="view-timetable-btn"
                    id="viewTimetableButton"
                >

                    <i class="bi bi-eye-fill"></i>

                    View Timetable

                </button>

            </div>

        </form>

    </div>

</div>


{{-- =========================================================
     TIMETABLE DISPLAY
========================================================== --}}

<div class="timetable-dashboard-card">

    <div class="timetable-card-header">

        <div class="display-title-wrap">

            <div class="display-title-icon">

                <i class="bi bi-calendar3"></i>

            </div>


            <div>

                <h3>

                    @if($showTimetable)

                        @php

                            $selectedClass =
                                $classes->firstWhere(
                                    'id',
                                    $selectedClassId
                                );

                            $selectedSection =
                                $sections->firstWhere(
                                    'id',
                                    $selectedSectionId
                                );

                        @endphp

                        {{ $selectedClass?->name ?? 'Class' }}

                        @if($selectedSection)

                            -
                            {{ strtoupper(trim($selectedSection->name)) }}

                        @endif

                    @else

                        Class Timetable

                    @endif

                </h3>


                <p>

                    Weekly Class Timetable

                    @if($showTimetable)

                        • Academic Year:
                        {{ $academicYear }}

                    @endif

                </p>

            </div>

        </div>


        {{-- =================================================
             PRINT + PDF
        ================================================== --}}

        @if($showTimetable)

            <div class="timetable-actions">

                {{-- PRINT --}}

                <button
                    type="button"
                    class="timetable-action-btn print-btn"
                    onclick="window.print()"
                >

                    <i class="bi bi-printer-fill"></i>

                    Print

                </button>


                {{-- PDF --}}

                <a
                    href="{{ route(
                        'admintimetable.pdf',
                        [
                            'class_id' => $selectedClassId,
                            'section_id' => $selectedSectionId,
                            'academic_year' => $academicYear
                        ]
                    ) }}"
                    class="timetable-action-btn pdf-btn"
                >

                    <i class="bi bi-file-earmark-pdf-fill"></i>

                    Download PDF

                </a>

            </div>

        @endif

    </div>


    <div class="timetable-card-body">


        {{-- =================================================
             SHOW TIMETABLE ONLY AFTER ALL FILTERS
        ================================================== --}}

        @if($showTimetable)

            @php

                /*
                |--------------------------------------------------------------------------
                | WEEK DAYS
                |--------------------------------------------------------------------------
                */

                $days = [
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                ];


                /*
                |--------------------------------------------------------------------------
                | FAST TIMETABLE LOOKUP
                |--------------------------------------------------------------------------
                */

                $timetableLookup = [];

                foreach ($timetable as $entry) {

                    if ($entry->slot_id) {

                        $lookupKey =
                            $entry->day . '_' . $entry->slot_id;

                        $timetableLookup[$lookupKey] =
                            $entry;
                    }

                }

            @endphp


            {{-- =================================================
                 TIME SLOTS AVAILABLE
            ================================================== --}}

            @if($slots->count())


                <div class="timetable-table-wrapper">

                    <table class="school-timetable">


                        {{-- =================================================
                             TABLE HEADER
                        ================================================== --}}

                        <thead>

                            <tr>

                                <th>

                                    <i class="bi bi-clock"></i>

                                    Time

                                </th>


                                @foreach($days as $day)

                                    <th>

                                        {{ $day }}

                                    </th>

                                @endforeach

                            </tr>

                        </thead>


                        {{-- =================================================
                             TABLE BODY
                        ================================================== --}}

                        <tbody>


                            @foreach($slots as $slot)


                                {{-- =================================================
                                     BREAK
                                ================================================== --}}

                                @if($slot->type === 'break')

                                    <tr class="break-row">

                                        <td>

                                            <i class="bi bi-cup-hot-fill"></i>

                                            {{
                                                \Carbon\Carbon::parse(
                                                    $slot->start_time
                                                )->format('h:i A')
                                            }}

                                            -

                                            {{
                                                \Carbon\Carbon::parse(
                                                    $slot->end_time
                                                )->format('h:i A')
                                            }}

                                        </td>


                                        <td colspan="6">

                                            <i class="bi bi-cup-hot-fill"></i>

                                            {{ $slot->label ?? 'Break' }}

                                        </td>

                                    </tr>


                                {{-- =================================================
                                     LUNCH
                                ================================================== --}}

                                @elseif($slot->type === 'lunch')

                                    <tr class="lunch-row">

                                        <td>

                                            <i class="bi bi-clock"></i>

                                            {{
                                                \Carbon\Carbon::parse(
                                                    $slot->start_time
                                                )->format('h:i A')
                                            }}

                                            -

                                            {{
                                                \Carbon\Carbon::parse(
                                                    $slot->end_time
                                                )->format('h:i A')
                                            }}

                                        </td>


                                        <td colspan="6">

                                            <i class="bi bi-egg-fried"></i>

                                            {{ $slot->label ?? 'Lunch Break' }}

                                        </td>

                                    </tr>


                                {{-- =================================================
                                     NORMAL PERIOD
                                ================================================== --}}

                                @else

                                    <tr>


                                        {{-- TIME CELL --}}

                                        <td class="time-cell">

                                            <i class="bi bi-clock"></i>

                                            {{
                                                \Carbon\Carbon::parse(
                                                    $slot->start_time
                                                )->format('h:i A')
                                            }}

                                            <br>

                                            <span
                                                style="color:#a0a9b7;font-weight:400;"
                                            >
                                                to
                                            </span>

                                            <br>

                                            {{
                                                \Carbon\Carbon::parse(
                                                    $slot->end_time
                                                )->format('h:i A')
                                            }}

                                        </td>


                                        {{-- DAYS --}}

                                        @foreach($days as $day)

                                            @php

                                                $lookupKey =
                                                    $day . '_' . $slot->id;

                                                $entry =
                                                    $timetableLookup[
                                                        $lookupKey
                                                    ] ?? null;

                                            @endphp


                                            <td>

                                                @if($entry)


                                                    {{-- SUBJECT --}}

                                                    <div class="subject-name">

                                                        {{
                                                            $entry->subject?->name
                                                            ?? 'Subject'
                                                        }}

                                                    </div>


                                                    {{-- TEACHER --}}

                                                    <div class="teacher-name">

                                                        <i class="bi bi-person-workspace"></i>

                                                        {{
                                                            $entry->teacher?->name
                                                            ?? 'Teacher not assigned'
                                                        }}

                                                    </div>


                                                    {{-- ROOM --}}

                                                    @if($entry->room)

                                                        <div class="room-name">

                                                            <i class="bi bi-door-open-fill"></i>

                                                            {{ $entry->room }}

                                                        </div>

                                                    @endif


                                                @else

                                                    <span class="empty-cell">
                                                        —
                                                    </span>

                                                @endif

                                            </td>

                                        @endforeach

                                    </tr>

                                @endif


                            @endforeach

                        </tbody>

                    </table>

                </div>


            @else


                {{-- =================================================
                     NO SLOTS
                ================================================== --}}

                <div class="no-timetable">

                    <div class="no-timetable-icon">

                        <i class="bi bi-clock-history"></i>

                    </div>

                    <h4>
                        No Time Slots Found
                    </h4>

                    <p>
                        No timetable time slots have been configured yet.
                    </p>

                </div>


            @endif


        @else


            {{-- =================================================
                 FILTERS NOT COMPLETED
            ================================================== --}}

            <div class="no-timetable">

                <div class="no-timetable-icon">

                    <i class="bi bi-calendar-week"></i>

                </div>


                <h4>
                    Select Class, Division & Academic Year
                </h4>


                <p>
                    Select the class, division and academic year above,
                    then click View Timetable.
                </p>

            </div>


        @endif


    </div>

</div>


{{-- =========================================================
     TIMETABLE INFORMATION
========================================================== --}}

<div class="timetable-dashboard-card information-card">

    <div class="timetable-card-header">

        <div>

            <h3>

                <i class="bi bi-info-circle-fill information-icon"></i>

                Timetable Information

            </h3>

            <p>
                Information about class timetable management
            </p>

        </div>

    </div>


    <div class="information-list">


        {{-- ITEM 1 --}}

        <div class="information-item">

            <div class="information-item-icon information-blue">

                <i class="bi bi-calendar-check-fill"></i>

            </div>


            <div class="information-content">

                <strong>
                    Class-wise Timetable
                </strong>

                <p>
                    Select a class and division to view its complete weekly timetable.
                </p>

            </div>

        </div>


        {{-- ITEM 2 --}}

        <div class="information-item">

            <div class="information-item-icon information-orange">

                <i class="bi bi-people-fill"></i>

            </div>


            <div class="information-content">

                <strong>
                    Teacher & Subject Data
                </strong>

                <p>
                    Teacher and subject information is connected with the existing school records.
                </p>

            </div>

        </div>


        {{-- ITEM 3 --}}

        <div class="information-item">

            <div class="information-item-icon information-cyan">

                <i class="bi bi-printer-fill"></i>

            </div>


            <div class="information-content">

                <strong>
                    Print & PDF
                </strong>

                <p>
                    Once a class timetable is displayed, you can print or download it as PDF.
                </p>

            </div>

        </div>


    </div>

</div>


{{-- =========================================================
     CLASS → DIVISION DYNAMIC JAVASCRIPT

     IMPORTANT:

     - Class change does NOT submit form.
     - Division change does NOT submit form.
     - Division options are filtered instantly.
     - Form submits ONLY when View Timetable is clicked.
========================================================== --}}

<script>

document.addEventListener('DOMContentLoaded', function () {

    const classSelect =
        document.getElementById('class_id');

    const sectionSelect =
        document.getElementById('section_id');

    const academicYearInput =
        document.getElementById('academic_year');

    const form =
        document.getElementById('timetableFilterForm');


    if (
        !classSelect ||
        !sectionSelect ||
        !academicYearInput ||
        !form
    ) {
        return;
    }


    /*
    |--------------------------------------------------------------------------
    | STORE ALL DIVISION OPTIONS
    |--------------------------------------------------------------------------
    */

    const allSectionOptions =
        Array.from(
            sectionSelect.querySelectorAll(
                'option[data-class-id]'
            )
        ).map(function (option) {

            return {

                value: option.value,

                text: option.textContent.trim(),

                classId: option.dataset.classId

            };

        });


    /*
    |--------------------------------------------------------------------------
    | UPDATE DIVISIONS
    |--------------------------------------------------------------------------
    */

    function updateSections() {

        const selectedClassId =
            classSelect.value;

        const currentSectionId =
            sectionSelect.value;


        /*
        |--------------------------------------------------------------------------
        | CLEAR CURRENT OPTIONS
        |--------------------------------------------------------------------------
        */

        sectionSelect.innerHTML = '';


        /*
        |--------------------------------------------------------------------------
        | DEFAULT OPTION
        |--------------------------------------------------------------------------
        */

        const defaultOption =
            document.createElement('option');

        defaultOption.value = '';


        if (!selectedClassId) {

            defaultOption.textContent =
                'Select Class First';

            sectionSelect.classList.add(
                'section-waiting'
            );

        } else {

            defaultOption.textContent =
                'Select Division';

            sectionSelect.classList.remove(
                'section-waiting'
            );

        }


        sectionSelect.appendChild(
            defaultOption
        );


        /*
        |--------------------------------------------------------------------------
        | NO CLASS SELECTED
        |--------------------------------------------------------------------------
        */

        if (!selectedClassId) {

            sectionSelect.value = '';

            return;

        }


        /*
        |--------------------------------------------------------------------------
        | ADD ONLY MATCHING DIVISIONS
        |--------------------------------------------------------------------------
        */

        allSectionOptions
            .filter(function (section) {

                return section.classId === selectedClassId;

            })
            .forEach(function (section) {

                const option =
                    document.createElement('option');

                option.value =
                    section.value;

                option.textContent =
                    section.text;


                /*
                |--------------------------------------------------------------------------
                | PRESERVE SELECTED DIVISION
                |--------------------------------------------------------------------------
                */

                if (
                    String(section.value) ===
                    String(currentSectionId)
                ) {

                    option.selected = true;

                }


                sectionSelect.appendChild(
                    option
                );

            });


        /*
        |--------------------------------------------------------------------------
        | CHECK SELECTED OPTION
        |--------------------------------------------------------------------------
        */

        const selectedOption =
            sectionSelect.querySelector(
                'option:checked'
            );


        if (
            !selectedOption ||
            !selectedOption.value
        ) {

            sectionSelect.value = '';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | CLASS CHANGE
    |--------------------------------------------------------------------------
    |
    | Do NOT submit the form.
    |
    */

    classSelect.addEventListener(
        'change',
        function () {

            sectionSelect.value = '';

            updateSections();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | INITIAL LOAD
    |--------------------------------------------------------------------------
    */

    updateSections();


    /*
    |--------------------------------------------------------------------------
    | FORM SUBMIT
    |--------------------------------------------------------------------------
    |
    | Form submits ONLY when:
    |
    | View Timetable button is clicked.
    |
    */

    form.addEventListener(
        'submit',
        function (event) {

            const classId =
                classSelect.value;

            const sectionId =
                sectionSelect.value;

            const academicYear =
                academicYearInput.value.trim();


            /*
            |--------------------------------------------------------------------------
            | CLASS REQUIRED
            |--------------------------------------------------------------------------
            */

            if (!classId) {

                event.preventDefault();

                alert(
                    'Please select a class.'
                );

                classSelect.focus();

                return;

            }


            /*
            |--------------------------------------------------------------------------
            | DIVISION REQUIRED
            |--------------------------------------------------------------------------
            */

            if (!sectionId) {

                event.preventDefault();

                alert(
                    'Please select a division / section.'
                );

                sectionSelect.focus();

                return;

            }


            /*
            |--------------------------------------------------------------------------
            | ACADEMIC YEAR REQUIRED
            |--------------------------------------------------------------------------
            */

            if (!academicYear) {

                event.preventDefault();

                alert(
                    'Please enter the academic year.'
                );

                academicYearInput.focus();

                return;

            }

        }
    );

});

</script>


</x-ladmin-panel>