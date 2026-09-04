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
        margin: 16px 28px 16px 16px;
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
        padding: 2px 4px;
    }

    /* =========================================================
       SCHOOL HEADER
    ========================================================= */

    .school-header {
        width: 100%;
        background: #172554;
        color: #ffffff;
        border-radius: 11px;
        padding: 13px 10px;
        margin-bottom: 11px;
    }

    .school-header-table {
        width: 100%;
        border-collapse: collapse;
    }

    .logo-cell {
        width: 72px;
        vertical-align: middle;
        text-align: center;
    }

    .logo {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: #ffffff;
        text-align: center;
        line-height: 52px;
        font-size: 22px;
        color: #172554;
        font-weight: bold;
    }

    .school-info {
        vertical-align: middle;
        padding-left: 13px;
    }

    .school-name {
        font-size: 19px;
        font-weight: bold;
        margin-bottom: 5px;
        letter-spacing: 0.3px;
    }

    .header-line {
        width: 55px;
        height: 2px;
        background: #ffffff;
        margin-bottom: 6px;
    }

    .school-subtitle {
        font-size: 8px;
        color: #dbeafe;
    }

    .document-title {
        width: 175px;
        text-align: right;
        vertical-align: middle;
        padding-right: 4px;
    }

    .document-title-main {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 4px;
    }

    .document-title-small {
        font-size: 7px;
        color: #bfdbfe;
    }

    /* =========================================================
       INFORMATION
    ========================================================= */

    .info-table {
        width: 96%;
        margin: 0 auto 10px auto;
        border-collapse: separate;
        border-spacing: 7px 0;
    }

    .info-box {
        background: #f8fafc;
        border: 1px solid #d9e2ef;
        border-radius: 8px;
        padding: 8px 11px;
        height: 48px;
    }

    .info-label {
        font-size: 6.5px;
        text-transform: uppercase;
        font-weight: bold;
        color: #64748b;
        margin-bottom: 4px;
        letter-spacing: 0.5px;
    }

    .info-value {
        font-size: 10px;
        font-weight: bold;
        color: #172554;
    }

    /* =========================================================
       CENTER TITLE
    ========================================================= */

    .schedule-title {
        width: 96%;
        margin: 7px auto 6px auto;
        text-align: center;
    }

    .schedule-title-main {
        font-size: 9px;
        font-weight: bold;
        color: #172554;
        letter-spacing: 0.7px;
    }

    .schedule-title-line {
        width: 55px;
        height: 2px;
        background: #172554;
        margin: 3px auto 0 auto;
    }

    /* =========================================================
       TIMETABLE WRAPPER
    ========================================================= */

    .timetable-wrapper {
        width: 96%;
        margin: 0 auto;
        padding: 5px;
        background: #f8fafc;
        border: 1px solid #dbe4ef;
        border-radius: 10px;
    }

    /* =========================================================
       TIMETABLE
    ========================================================= */

    .timetable {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        overflow: hidden;
        table-layout: fixed;
        background: #ffffff;
    }

    .timetable th,
    .timetable td {
        border-right: 1px solid #dbe3ed;
        border-bottom: 1px solid #dbe3ed;
        text-align: center;
        vertical-align: middle;
    }

    .timetable th:last-child,
    .timetable td:last-child {
        border-right: none;
    }

    .timetable tbody tr:last-child td {
        border-bottom: none;
    }

    /* =========================================================
       TABLE HEADER
    ========================================================= */

    .timetable thead th {
        background: #e8eef8;
        color: #172554;
        padding: 8px 4px;
        font-size: 7.5px;
        font-weight: bold;
    }

    .day-header {
        width: 74px;
        background: #172554 !important;
        color: #ffffff !important;
        font-size: 8px !important;
        padding: 9px 4px !important;
    }

    .period-name {
        display: block;
        font-size: 8px;
        font-weight: bold;
        margin-bottom: 3px;
    }

    .period-time {
        display: block;
        font-size: 6px;
        color: #64748b;
        font-weight: normal;
        line-height: 8px;
    }

    /* =========================================================
       DAY CELL
    ========================================================= */

    .day-cell {
        background: #f1f5f9;
        color: #172554;
        font-weight: bold;
        font-size: 8px;
        padding: 7px 3px;
        letter-spacing: 0.3px;
    }

    /* =========================================================
       PERIOD CELL
    ========================================================= */

    .period-cell {
        height: 52px;
        padding: 6px 4px;
        background: #ffffff;
    }

    .subject {
        font-size: 7.5px;
        font-weight: bold;
        color: #172554;
        margin-bottom: 4px;
        line-height: 9px;
    }

    .teacher {
        font-size: 6.3px;
        color: #475569;
        margin-bottom: 3px;
        line-height: 8px;
    }

    .room {
        display: inline-block;
        padding: 2px 5px;
        border-radius: 4px;
        background: #f1f5f9;
        color: #475569;
        font-size: 5.8px;
    }

    /* =========================================================
       BREAK / LUNCH
    ========================================================= */

    .break-cell {
        height: 52px;
        background: #fff7ed;
        color: #9a3412;
        font-weight: bold;
        font-size: 7px;
        vertical-align: middle;
        padding: 6px 4px;
    }

    .break-icon {
        display: block;
        font-size: 11px;
        margin-bottom: 3px;
    }

    /* =========================================================
       EMPTY
    ========================================================= */

    .empty-cell {
        height: 52px;
        background: #ffffff;
        color: #cbd5e1;
        font-size: 11px;
        vertical-align: middle;
    }

    /* =========================================================
       SIGNATURE
    ========================================================= */

    .signature-table {
        width: 94%;
        margin: 13px auto 0 auto;
        border-collapse: collapse;
    }

    .signature {
        width: 33.33%;
        text-align: center;
        padding-top: 8px;
        font-size: 7px;
        color: #334155;
        font-weight: bold;
    }

    .signature-line {
        width: 105px;
        border-top: 1px solid #64748b;
        margin: 0 auto 4px auto;
    }

    /* =========================================================
       FOOTER
    ========================================================= */

    .footer-table {
        width: 94%;
        margin: 9px auto 0 auto;
        border-collapse: collapse;
        border-top: 1px solid #e2e8f0;
    }

    .footer-left {
        width: 50%;
        text-align: left;
        font-size: 6px;
        color: #64748b;
        padding-top: 5px;
    }

    .footer-right {
        width: 50%;
        text-align: right;
        font-size: 6px;
        color: #64748b;
        padding-top: 5px;
    }

</style>
```

</head>

<body>

<div class="page">

```
{{-- =========================================================
     SCHOOL HEADER
========================================================== --}}

<div class="school-header">

    <table class="school-header-table">

        <tr>

            <td class="logo-cell">

                <div class="logo">
                    🎓
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
                {{ $class->name }}
            </div>

        </td>


        <td class="info-box">

            <div class="info-label">
                Section
            </div>

            <div class="info-value">
                {{ $section->name }}
            </div>

        </td>


        <td class="info-box">

            <div class="info-label">
                Academic Year
            </div>

            <div class="info-value">
                {{ $academicYear }}
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
                    'Saturday'
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


                        {{-- BREAK / LUNCH --}}

                        @if(in_array($slot->type, ['break', 'lunch'], true))

                            <td class="break-cell">

                                <span class="break-icon">
                                    ☕
                                </span>

                                {{ strtoupper($slot->type) }}

                            </td>


                        {{-- NORMAL PERIOD --}}

                        @elseif($entry)

                            <td class="period-cell">

                                <div class="subject">

                                    📚
                                    {{ $entry->subject->name ?? '—' }}

                                </div>


                                <div class="teacher">

                                    👨‍🏫
                                    {{ $entry->teacher->name ?? '—' }}

                                </div>


                                @if(!empty($entry->room))

                                    <span class="room">

                                        🚪 Room {{ $entry->room }}

                                    </span>

                                @endif

                            </td>


                        {{-- EMPTY --}}

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
