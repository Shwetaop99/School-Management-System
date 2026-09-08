<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>
        {{ $class->name }} - {{ $section->name }} Timetable
    </title>

    <style>

        @page {
            size: A4 landscape;
            margin: 14px 18px 14px 18px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: DejaVu Sans, sans-serif;
            background: #ffffff;
            color: #172033;
            font-size: 8px;
        }

        .page {
            width: 100%;
            padding: 2px;
        }

        /* =========================================================
           SCHOOL HEADER
        ========================================================= */

        .school-header {
            width: 100%;
            background: #172554;
            color: #ffffff;
            padding: 12px 10px;
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .school-header-table {
            width: 100%;
            border-collapse: collapse;
        }

        .logo-cell {
            width: 65px;
            text-align: center;
            vertical-align: middle;
        }

        .logo {
            width: 46px;
            height: 46px;
            line-height: 46px;
            background: #ffffff;
            color: #172554;
            border-radius: 23px;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
        }

        .school-info {
            vertical-align: middle;
            padding-left: 10px;
        }

        .school-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .header-line {
            width: 50px;
            height: 2px;
            background: #ffffff;
            margin-bottom: 5px;
        }

        .school-subtitle {
            font-size: 8px;
            color: #dbeafe;
        }

        .document-title {
            width: 170px;
            text-align: right;
            vertical-align: middle;
            padding-right: 3px;
        }

        .document-title-main {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 3px;
        }

        .document-title-small {
            font-size: 7px;
            color: #bfdbfe;
        }

        /* =========================================================
           INFORMATION
        ========================================================= */

        .info-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 6px 0;
            margin: 0 0 9px 0;
        }

        .info-box {
            width: 25%;
            background: #f8fafc;
            border: 1px solid #d9e2ef;
            padding: 7px 9px;
            height: 43px;
        }

        .info-label {
            font-size: 6px;
            text-transform: uppercase;
            font-weight: bold;
            color: #64748b;
            margin-bottom: 3px;
        }

        .info-value {
            font-size: 9px;
            font-weight: bold;
            color: #172554;
        }

        /* =========================================================
           SCHEDULE TITLE
        ========================================================= */

        .schedule-title {
            width: 100%;
            margin: 5px 0 6px 0;
            text-align: center;
        }

        .schedule-title-main {
            font-size: 9px;
            font-weight: bold;
            color: #172554;
            letter-spacing: 0.6px;
        }

        .schedule-title-line {
            width: 50px;
            height: 2px;
            background: #172554;
            margin: 3px auto 0 auto;
        }

        /* =========================================================
           TIMETABLE WRAPPER
        ========================================================= */

        .timetable-wrapper {
            width: 100%;
            padding: 4px;
            background: #f8fafc;
            border: 1px solid #dbe4ef;
        }

        /* =========================================================
           TIMETABLE
        ========================================================= */

        .timetable {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            background: #ffffff;
            border: 1px solid #cbd5e1;
        }

        .timetable th,
        .timetable td {
            border: 1px solid #dbe3ed;
            text-align: center;
            vertical-align: middle;
        }

        /* =========================================================
           TABLE HEADER
        ========================================================= */

        .timetable thead th {
            background: #e8eef8;
            color: #172554;
            padding: 6px 3px;
            font-size: 7px;
            font-weight: bold;
        }

        .day-header {
            width: 68px;
            background: #172554 !important;
            color: #ffffff !important;
            font-size: 7.5px !important;
        }

        .period-name {
            display: block;
            font-size: 7px;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .period-time {
            display: block;
            font-size: 5.5px;
            color: #64748b;
            font-weight: normal;
            line-height: 7px;
        }

        /* =========================================================
           DAY CELL
        ========================================================= */

        .day-cell {
            background: #f1f5f9;
            color: #172554;
            font-weight: bold;
            font-size: 7px;
            padding: 5px 2px;
            letter-spacing: 0.2px;
        }

        /* =========================================================
           PERIOD CELL
        ========================================================= */

        .period-cell {
            height: 48px;
            padding: 4px 3px;
            background: #ffffff;
        }

        .subject {
            font-size: 7px;
            font-weight: bold;
            color: #172554;
            margin-bottom: 3px;
            line-height: 8px;
        }

        .teacher {
            font-size: 5.8px;
            color: #475569;
            margin-bottom: 2px;
            line-height: 7px;
        }

        .room {
            display: inline-block;
            padding: 2px 4px;
            background: #f1f5f9;
            color: #475569;
            font-size: 5.5px;
        }

        /* =========================================================
           BREAK / LUNCH
        ========================================================= */

        .break-cell {
            height: 48px;
            background: #fff7ed;
            color: #9a3412;
            font-weight: bold;
            font-size: 6.5px;
            vertical-align: middle;
            padding: 5px 3px;
        }

        .break-label {
            display: block;
            font-size: 7px;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .break-time {
            display: block;
            font-size: 5.5px;
            color: #c2410c;
            font-weight: normal;
        }

        /* =========================================================
           EMPTY CELL
        ========================================================= */

        .empty-cell {
            height: 48px;
            background: #ffffff;
            color: #cbd5e1;
            font-size: 9px;
            vertical-align: middle;
        }

        /* =========================================================
           SIGNATURE
        ========================================================= */

        .signature-table {
            width: 100%;
            margin-top: 11px;
            border-collapse: collapse;
        }

        .signature {
            width: 33.33%;
            text-align: center;
            padding-top: 7px;
            font-size: 6.5px;
            color: #334155;
            font-weight: bold;
        }

        .signature-line {
            width: 95px;
            border-top: 1px solid #64748b;
            margin: 0 auto 4px auto;
        }

        /* =========================================================
           FOOTER
        ========================================================= */

        .footer-table {
            width: 100%;
            margin-top: 7px;
            border-collapse: collapse;
            border-top: 1px solid #e2e8f0;
        }

        .footer-left {
            width: 50%;
            text-align: left;
            font-size: 5.5px;
            color: #64748b;
            padding-top: 4px;
        }

        .footer-right {
            width: 50%;
            text-align: right;
            font-size: 5.5px;
            color: #64748b;
            padding-top: 4px;
        }

    </style>

</head>


<body>

<div class="page">

    {{-- =========================================================
         SCHOOL HEADER
    ========================================================== --}}

    <div class="school-header">

        <table class="school-header-table">

            <tr>

                <td class="logo-cell">

                    <div class="logo">
                        GV
                    </div>

                </td>


                <td class="school-info">

                    <div class="school-name">
                        GURUKUL VIDYALAYA
                    </div>

                    <div class="header-line"></div>

                    <div class="school-subtitle">
                        Weekly Academic Timetable
                    </div>

                </td>


                <td class="document-title">

                    <div class="document-title-main">
                        TIMETABLE
                    </div>

                    <div class="document-title-small">
                        Academic Schedule
                    </div>

                </td>

            </tr>

        </table>

    </div>


    {{-- =========================================================
         INFORMATION CARDS
    ========================================================== --}}

    <table class="info-table">

        <tr>

            <td class="info-box">

                <div class="info-label">
                    Class
                </div>

                <div class="info-value">
                    {{ $class->name ?? '—' }}
                </div>

            </td>


            <td class="info-box">

                <div class="info-label">
                    Section
                </div>

                <div class="info-value">
                    {{ $section->name ?? '—' }}
                </div>

            </td>


            <td class="info-box">

                <div class="info-label">
                    Academic Year
                </div>

                <div class="info-value">
                    {{ $academicYear ?? '—' }}
                </div>

            </td>


            <td class="info-box">

                <div class="info-label">
                    Working Days
                </div>

                <div class="info-value">
                    Monday - Saturday
                </div>

            </td>

        </tr>

    </table>


    {{-- =========================================================
         CENTER TITLE
    ========================================================== --}}

    <div class="schedule-title">

        <div class="schedule-title-main">
            WEEKLY CLASS SCHEDULE
        </div>

        <div class="schedule-title-line"></div>

    </div>


    {{-- =========================================================
         TIMETABLE
    ========================================================== --}}

    <div class="timetable-wrapper">

        <table class="timetable">

            <thead>

                <tr>

                    <th class="day-header">
                        DAY
                    </th>


                    @foreach($slots as $slot)

                        <th>

                            <span class="period-name">

                                {{ $slot->name ?? 'Period' }}

                            </span>


                            @if($slot->start_time && $slot->end_time)

                                <span class="period-time">

                                    {{ \Carbon\Carbon::parse($slot->start_time)->format('h:i A') }}

                                    -

                                    {{ \Carbon\Carbon::parse($slot->end_time)->format('h:i A') }}

                                </span>

                            @endif

                        </th>

                    @endforeach

                </tr>

            </thead>


            <tbody>

                @php

                    $days = [
                        'Monday',
                        'Tuesday',
                        'Wednesday',
                        'Thursday',
                        'Friday',
                        'Saturday',
                    ];

                @endphp


                @foreach($days as $day)

                    <tr>

                        <td class="day-cell">

                            {{ strtoupper($day) }}

                        </td>


                        @foreach($slots as $slot)

                            @php

                                $key = $day . '_' . $slot->id;

                                $entry = $timetableLookup[$key] ?? null;

                            @endphp


                            {{-- =================================================
                                 BREAK / LUNCH
                            ================================================== --}}

                            @if(in_array($slot->type, ['break', 'lunch'], true))

                                <td class="break-cell">

                                    <span class="break-label">

                                        {{ strtoupper($slot->type) }}

                                    </span>


                                    @if($slot->start_time && $slot->end_time)

                                        <span class="break-time">

                                            {{ \Carbon\Carbon::parse($slot->start_time)->format('h:i A') }}

                                            -

                                            {{ \Carbon\Carbon::parse($slot->end_time)->format('h:i A') }}

                                        </span>

                                    @endif

                                </td>


                            {{-- =================================================
                                 NORMAL PERIOD
                            ================================================== --}}

                            @elseif($entry)

                                <td class="period-cell">

                                    <div class="subject">

                                        {{ $entry->subject->name ?? 'Subject Not Assigned' }}

                                    </div>


                                    <div class="teacher">

                                        {{ $entry->teacher->name ?? 'Teacher Not Assigned' }}

                                    </div>


                                    @if(!empty($entry->room))

                                        <span class="room">

                                            Room {{ $entry->room }}

                                        </span>

                                    @endif

                                </td>


                            {{-- =================================================
                                 EMPTY
                            ================================================== --}}

                            @else

                                <td class="empty-cell">

                                    —

                                </td>

                            @endif

                        @endforeach

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>


    {{-- =========================================================
         SIGNATURES
    ========================================================== --}}

    <table class="signature-table">

        <tr>

            <td class="signature">

                <div class="signature-line"></div>

                Class Teacher

            </td>


            <td class="signature">

                <div class="signature-line"></div>

                Coordinator

            </td>


            <td class="signature">

                <div class="signature-line"></div>

                Principal

            </td>

        </tr>

    </table>


    {{-- =========================================================
         FOOTER
    ========================================================== --}}

    <table class="footer-table">

        <tr>

            <td class="footer-left">

                Generated from Gurukul Vidyalaya

            </td>


            <td class="footer-right">

                Generated on:

                {{ now()->format('d M Y, h:i A') }}

            </td>

        </tr>

    </table>

</div>

</body>

</html>
