<x-ladmin-panel title="View Timetable">

    <style>
        body {
            background: #f6f8fb;
        }

        .timetable-view-page {
            padding: 10px 0 30px;
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 22px;
        }

        .page-title-area h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: #16213e;
        }

        .page-title-area p {
            margin: 6px 0 0;
            color: #7a8499;
            font-size: 14px;
        }

        .header-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            min-height: 42px;
            padding: 0 15px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: .15s ease;
        }

        .edit-btn {
            background: #16213e;
            color: #fff;
        }

        .edit-btn:hover {
            color: #fff;
            opacity: .92;
        }

        .print-btn {
            background: #e9f7ef;
            color: #198754;
        }

        .print-btn:hover {
            background: #d9f1e3;
        }

        .pdf-btn {
            background: #fff0f0;
            color: #dc3545;
        }

        .pdf-btn:hover {
            background: #ffe1e1;
        }

        .back-btn {
            background: #eef1f5;
            color: #344054;
        }

        .back-btn:hover {
            background: #e2e6ec;
            color: #344054;
        }

        /* Timetable Header Card */
        .timetable-heading-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(31, 45, 61, .08);
            padding: 22px;
            margin-bottom: 20px;
        }

        .school-timetable-heading {
            text-align: center;
        }

        .school-timetable-heading h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 800;
            color: #16213e;
            text-transform: uppercase;
        }

        .school-timetable-heading h3 {
            margin: 6px 0 0;
            font-size: 17px;
            font-weight: 700;
            color: #f28c28;
        }

        .school-timetable-heading p {
            margin: 6px 0 0;
            color: #7a8499;
            font-size: 13px;
        }

        /* Table Card */
        .table-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(31, 45, 61, .08);
            overflow: hidden;
        }

        .table-scroll {
            overflow-x: auto;
            width: 100%;
        }

        .weekly-table {
            width: 100%;
            min-width: 1050px;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .weekly-table th,
        .weekly-table td {
            border: 1px solid #e1e5eb;
            vertical-align: middle;
        }

        .weekly-table thead th {
            background: #16213e;
            color: #fff;
            padding: 14px 8px;
            text-align: center;
            font-size: 13px;
            font-weight: 700;
        }

        .weekly-table thead th:first-child {
            width: 135px;
        }

        .time-cell {
            background: #f7f8fa;
            text-align: center;
            padding: 12px 8px;
        }

        .time-cell strong {
            display: block;
            color: #16213e;
            font-size: 12px;
            font-weight: 700;
        }

        .time-cell small {
            display: block;
            color: #8a94a6;
            margin-top: 3px;
            font-size: 11px;
        }

        .period-cell {
            height: 86px;
            padding: 9px;
            text-align: center;
            background: #fff;
        }

        .period-content {
            min-height: 66px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 3px;
        }

        .subject-name {
            color: #16213e;
            font-size: 13px;
            font-weight: 800;
        }

        .teacher-name {
            color: #667085;
            font-size: 11px;
        }

        .room-name {
            color: #98a2b3;
            font-size: 10px;
        }

        .empty-period {
            color: #b2bac7;
            font-size: 12px;
            font-style: italic;
        }

        /* Break / Lunch */
        .break-row td {
            background: #fff8ed !important;
        }

        .lunch-row td {
            background: #eefaf4 !important;
        }

        .special-slot-cell {
            text-align: center;
            padding: 12px;
        }

        .special-slot-label {
            font-weight: 800;
            font-size: 13px;
            color: #475467;
        }

        .special-slot-time {
            display: block;
            margin-top: 3px;
            color: #98a2b3;
            font-size: 11px;
        }

        /* Information */
        .info-card {
            margin-top: 20px;
            background: #fff;
            border-radius: 12px;
            padding: 16px 18px;
            box-shadow: 0 5px 20px rgba(31, 45, 61, .06);
            color: #667085;
            font-size: 13px;
        }

        .info-card i {
            color: #3b82f6;
            margin-right: 7px;
        }

        /* No Data */
        .no-timetable {
            text-align: center;
            padding: 55px 20px;
            color: #7a8499;
        }

        .no-timetable i {
            font-size: 42px;
            color: #c7ced9;
            margin-bottom: 12px;
        }

        .no-timetable h3 {
            margin: 0 0 5px;
            color: #475467;
            font-size: 18px;
        }

        .no-timetable p {
            margin: 0;
            font-size: 13px;
        }

        /* Print */
        @media print {

            @page {
                size: A4 landscape;
                margin: 8mm;
            }

            body {
                background: #fff !important;
            }

            .page-header {
                display: none !important;
            }

            .info-card {
                display: none !important;
            }

            .timetable-heading-card {
                box-shadow: none !important;
                border-radius: 0 !important;
                padding: 10px 0 !important;
                margin-bottom: 10px !important;
            }

            .table-card {
                box-shadow: none !important;
                border-radius: 0 !important;
            }

            .table-scroll {
                overflow: visible !important;
            }

            .weekly-table {
                min-width: 0 !important;
                width: 100% !important;
            }

            .weekly-table th,
            .weekly-table td {
                border: 1px solid #555 !important;
            }

            .weekly-table thead th {
                background: #16213e !important;
                color: #fff !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .break-row td {
                background: #fff8ed !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .lunch-row td {
                background: #eefaf4 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }

        @media (max-width: 768px) {

            .page-header {
                flex-direction: column;
            }

            .header-actions {
                width: 100%;
            }

            .action-btn {
                flex: 1;
            }

            .school-timetable-heading h2 {
                font-size: 20px;
            }
        }
    </style>


    <div class="timetable-view-page">

        {{-- =========================================================
             PAGE HEADER
        ========================================================== --}}
        <div class="page-header">

            <div class="page-title-area">

                <h1>
                    <i class="fas fa-calendar-alt me-2"></i>
                    Timetable
                </h1>

                <p>
                    Complete weekly timetable for the selected class and division.
                </p>

            </div>


            <div class="header-actions">

                {{-- Edit --}}
                <a
                    href="{{ route('admintimetable') }}?class_id={{ $class->id }}&section_id={{ $section->id }}"
                    class="action-btn edit-btn"
                >
                    <i class="fas fa-edit"></i>
                    Edit Timetable
                </a>


                {{-- Print --}}
                <button
                    type="button"
                    class="action-btn print-btn"
                    onclick="window.print()"
                >
                    <i class="fas fa-print"></i>
                    Print
                </button>


                {{-- PDF --}}
                <a
                    href="{{ route('admintimetable.pdf', [
                        'class_id' => $class->id,
                        'section_id' => $section->id
                    ]) }}"
                    class="action-btn pdf-btn"
                >
                    <i class="fas fa-file-pdf"></i>
                    Download PDF
                </a>


                {{-- Back --}}
                <a
                    href="{{ route('admintimetable') }}"
                    class="action-btn back-btn"
                >
                    <i class="fas fa-arrow-left"></i>
                    Back
                </a>

            </div>

        </div>


        {{-- =========================================================
             TIMETABLE HEADING
        ========================================================== --}}
        <div class="timetable-heading-card">

            <div class="school-timetable-heading">

                <h2>
                    {{ $class->name }}
                    -
                    {{ strtoupper($section->name) }}
                </h2>

                <h3>
                    Weekly Timetable
                </h3>

                <p>
                    Class: {{ $class->name }}
                    &nbsp; | &nbsp;
                    Division: {{ strtoupper($section->name) }}
                </p>

            </div>

        </div>


        {{-- =========================================================
             TABLE
        ========================================================== --}}
        <div class="table-card">

            @if($slots->count())

                <div class="table-scroll">

                    <table class="weekly-table">

                        {{-- =========================
                             TABLE HEADER
                        ========================== --}}
                        <thead>

                            <tr>

                                <th>
                                    Time
                                </th>

                                @foreach([
                                    'Monday',
                                    'Tuesday',
                                    'Wednesday',
                                    'Thursday',
                                    'Friday',
                                    'Saturday'
                                ] as $day)

                                    <th>
                                        {{ $day }}
                                    </th>

                                @endforeach

                            </tr>

                        </thead>


                        {{-- =========================
                             TABLE BODY
                        ========================== --}}
                        <tbody>

                            @foreach($slots as $slot)

                                @php
                                    $startTime = \Carbon\Carbon::parse(
                                        $slot->start_time
                                    )->format('H:i');

                                    $endTime = \Carbon\Carbon::parse(
                                        $slot->end_time
                                    )->format('H:i');
                                @endphp


                                {{-- =================================================
                                     BREAK / LUNCH
                                ================================================== --}}
                                @if(in_array($slot->type, ['break', 'lunch']))

                                    <tr
                                        class="{{ $slot->type === 'break' ? 'break-row' : 'lunch-row' }}"
                                    >

                                        <td class="time-cell">

                                            <strong>
                                                {{ $startTime }}
                                                -
                                                {{ $endTime }}
                                            </strong>

                                            <small>
                                                {{ ucfirst($slot->type) }}
                                            </small>

                                        </td>


                                        <td
                                            colspan="6"
                                            class="special-slot-cell"
                                        >

                                            <span class="special-slot-label">

                                                @if($slot->type === 'break')
                                                    ☕ {{ $slot->label ?? 'Break' }}
                                                @else
                                                    🍱 {{ $slot->label ?? 'Lunch' }}
                                                @endif

                                            </span>

                                            <span class="special-slot-time">
                                                {{ $startTime }}
                                                -
                                                {{ $endTime }}
                                            </span>

                                        </td>

                                    </tr>

                                    @continue

                                @endif


                                {{-- =================================================
                                     NORMAL PERIOD
                                ================================================== --}}
                                <tr>

                                    {{-- Time --}}
                                    <td class="time-cell">

                                        <strong>
                                            {{ $startTime }}
                                            -
                                            {{ $endTime }}
                                        </strong>

                                        <small>
                                            Period
                                        </small>

                                    </td>


                                    {{-- Days --}}
                                    @foreach([
                                        'Monday',
                                        'Tuesday',
                                        'Wednesday',
                                        'Thursday',
                                        'Friday',
                                        'Saturday'
                                    ] as $day)

                                        @php
                                            $key = $day . '_' . $slot->id;

                                            $entry =
                                                $timetableLookup[$key] ?? null;
                                        @endphp


                                        <td class="period-cell">

                                            @if($entry)

                                                <div class="period-content">

                                                    {{-- Subject --}}
                                                    <div class="subject-name">

                                                        {{ $entry->subject->name ?? 'Subject' }}

                                                    </div>


                                                    {{-- Teacher --}}
                                                    @if($entry->teacher)

                                                        <div class="teacher-name">

                                                            <i class="fas fa-user-tie me-1"></i>

                                                            {{ $entry->teacher->name }}

                                                        </div>

                                                    @endif


                                                    {{-- Room --}}
                                                    @if($entry->room)

                                                        <div class="room-name">

                                                            <i class="fas fa-door-open me-1"></i>

                                                            {{ $entry->room }}

                                                        </div>

                                                    @endif

                                                </div>

                                            @else

                                                <div class="period-content">

                                                    <span class="empty-period">
                                                        —
                                                    </span>

                                                </div>

                                            @endif

                                        </td>

                                    @endforeach

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="no-timetable">

                    <i class="fas fa-calendar-times"></i>

                    <h3>
                        No Timetable Slots Found
                    </h3>

                    <p>
                        Please configure timetable slots before creating the timetable.
                    </p>

                </div>

            @endif

        </div>


        {{-- =========================================================
             INFORMATION
        ========================================================== --}}
        <div class="info-card">

            <i class="fas fa-info-circle"></i>

            <strong>
                Timetable Information:
            </strong>

            This timetable belongs to
            <strong>{{ $class->name }}</strong>
            -
            <strong>{{ strtoupper($section->name) }}</strong>.

            Use
            <strong>Print</strong>
            to print the timetable or
            <strong>Download PDF</strong>
            to save it as a PDF file.

        </div>

    </div>


    {{-- =============================================================
         PRINT SCRIPT
    ============================================================= --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /*
             * Browser print is intentionally used here.
             * It keeps the timetable lightweight and avoids
             * unnecessary JavaScript libraries.
             */

        });
    </script>

</x-ladmin-panel>

