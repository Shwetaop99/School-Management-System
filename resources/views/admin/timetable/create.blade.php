<x-ladmin-panel title="{{ isset($editing) && $editing ? 'Edit Timetable' : 'Add Timetable' }}">

<style>

/* =========================================================
   PAGE BASE
========================================================= */

body {
    background: #f4f7fb;
}

.timetable-page {
    max-width: 1400px;
    margin: 0 auto;
}

/* =========================================================
   PAGE HEADER
========================================================= */

.school-page-header {
    margin-bottom: 25px;
}

.school-page-header h1 {
    font-size: 29px;
    font-weight: 750;
    color: #16213e;
    margin: 0 0 6px;
    letter-spacing: -0.3px;
}

.school-page-header h1 i {
    color: #0d6efd;
}

.school-page-header p {
    color: #718096;
    margin: 0;
    font-size: 14px;
}

/* =========================================================
   BACK BUTTON
========================================================= */

.btn-back {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 10px 18px;
    border-radius: 10px;
    font-weight: 600;
    color: #16213e;
    background: #ffffff;
    border: 1px solid #dfe5ed;
    transition: all .2s ease;
    text-decoration: none;
}

.btn-back:hover {
    background: #eef5ff;
    border-color: #0d6efd;
    color: #0d6efd;
    transform: translateY(-1px);
}

/* =========================================================
   INFORMATION BOX
========================================================= */

.info-box {
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: flex-start;
    gap: 13px;
    background: linear-gradient(
        135deg,
        #eaf3ff 0%,
        #f5f9ff 100%
    );
    border: 1px solid #cfe2ff;
    border-left: 4px solid #0d6efd;
    border-radius: 13px;
    padding: 15px 18px;
    margin-bottom: 22px;
    color: #24446d;
    box-shadow: 0 4px 14px rgba(13, 110, 253, .06);
}

.info-box i {
    color: #0d6efd;
    font-size: 18px;
    margin-top: 1px;
}

.info-box strong {
    color: #16213e;
}

/* =========================================================
   MAIN FORM CARD
========================================================= */

.timetable-card {
    background: #ffffff;
    border: 1px solid #e5eaf1;
    border-radius: 18px;
    padding: 30px;
    box-shadow:
        0 8px 30px rgba(22, 33, 62, .06),
        0 2px 8px rgba(22, 33, 62, .03);
}

/* =========================================================
   FORM SECTION HEADER
========================================================= */

.section-title {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 18px;
    font-weight: 700;
    color: #16213e;
    margin-bottom: 22px;
}

.section-title-icon {
    width: 42px;
    height: 42px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    background: linear-gradient(
        135deg,
        #0d6efd,
        #0b5ed7
    );
    color: #ffffff;
    box-shadow: 0 5px 13px rgba(13, 110, 253, .20);
    font-size: 16px;
}

.section-title-text {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.section-title-text small {
    font-size: 12px;
    font-weight: 500;
    color: #8a94a6;
}

/* =========================================================
   FORM LABELS
========================================================= */

.form-label {
    display: block;
    font-size: 13.5px;
    font-weight: 650;
    color: #26344d;
    margin-bottom: 8px;
}

.required {
    color: #dc3545;
    font-weight: 700;
}

/* =========================================================
   INPUT ICON
========================================================= */

.input-icon {
    position: relative;
}

.input-icon > i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 3;
    color: #0d6efd;
    font-size: 14px;
    pointer-events: none;
    transition: color .2s ease;
}

/* =========================================================
   FORM CONTROLS
========================================================= */

.form-control,
.form-select {
    min-height: 47px;
    width: 100%;
    border-radius: 10px;
    border: 1px solid #dce2ea;
    background: #fbfcfe;
    color: #29364d;
    font-size: 14px;
    font-weight: 500;
    padding: 10px 13px 10px 42px;
    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        background-color .2s ease,
        transform .2s ease;
}

.form-control:hover,
.form-select:hover {
    border-color: #b9c5d5;
    background: #ffffff;
}

.form-control:focus,
.form-select:focus {
    border-color: #0d6efd;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(13, 110, 253, .10);
    outline: none;
}

.input-icon:focus-within > i {
    color: #084298;
}

.form-control::placeholder {
    color: #a0a8b5;
    font-weight: 400;
}

select.form-select {
    cursor: pointer;
}

/* =========================================================
   FIELD HELP
========================================================= */

.field-help {
    display: flex;
    align-items: center;
    gap: 5px;
    margin-top: 6px;
    color: #8b95a5;
    font-size: 11.5px;
    line-height: 1.4;
}

.field-help i {
    color: #0d6efd;
    font-size: 10px;
}

/* =========================================================
   DIVIDER
========================================================= */

.form-divider {
    border: 0;
    border-top: 1px solid #edf0f4;
    margin: 30px 0;
}

/* =========================================================
   WEEKLY TIMETABLE
========================================================= */

.weekly-wrapper {
    width: 100%;
    overflow-x: auto;
    border: 1px solid #e3e8ef;
    border-radius: 14px;
    background: #ffffff;
}

.weekly-table {
    width: 100%;
    min-width: 1250px;
    border-collapse: separate;
    border-spacing: 0;
}

.weekly-table th,
.weekly-table td {
    border-right: 1px solid #e7ebf1;
    border-bottom: 1px solid #e7ebf1;
}

.weekly-table th:last-child,
.weekly-table td:last-child {
    border-right: none;
}

/* =========================================================
   TABLE HEADER
========================================================= */

.weekly-table thead th {
    background: #16213e;
    color: #ffffff;
    padding: 14px 10px;
    text-align: center;
    font-size: 13px;
    font-weight: 700;
    white-space: nowrap;
}

.weekly-table thead th:first-child {
    width: 125px;
    border-top-left-radius: 13px;
}

.weekly-table thead th:last-child {
    border-top-right-radius: 13px;
}

.day-icon {
    display: block;
    font-size: 13px;
    margin-bottom: 4px;
    opacity: .85;
}

/* =========================================================
   TIME COLUMN
========================================================= */

.time-cell {
    width: 125px;
    min-width: 125px;
    background: #f7f9fc;
    text-align: center;
    vertical-align: middle;
    padding: 12px 8px;
}

.time-main {
    font-size: 12px;
    font-weight: 700;
    color: #26344d;
    white-space: nowrap;
}

.time-sub {
    margin-top: 4px;
    font-size: 10px;
    color: #8b95a5;
}

/* =========================================================
   PERIOD CELL
========================================================= */

.period-cell {
    min-width: 185px;
    padding: 9px;
    vertical-align: top;
    background: #ffffff;
}

.period-cell-inner {
    display: flex;
    flex-direction: column;
    gap: 7px;
}

/* =========================================================
   GRID SELECTS
========================================================= */

.grid-select,
.grid-input {
    width: 100%;
    min-height: 36px;
    border: 1px solid #dce2ea;
    border-radius: 7px;
    background: #fbfcfe;
    color: #29364d;
    font-size: 11.5px;
    font-weight: 500;
    padding: 7px 8px;
    outline: none;
    transition:
        border-color .15s ease,
        box-shadow .15s ease,
        background-color .15s ease;
}

.grid-select:hover,
.grid-input:hover {
    border-color: #b9c5d5;
    background: #ffffff;
}

.grid-select:focus,
.grid-input:focus {
    border-color: #0d6efd;
    background: #ffffff;
    box-shadow: 0 0 0 2px rgba(13, 110, 253, .08);
}

.grid-input::placeholder {
    color: #a0a8b5;
}

/* =========================================================
   CELL LABEL
========================================================= */

.cell-label {
    display: flex;
    align-items: center;
    gap: 5px;
    color: #718096;
    font-size: 9.5px;
    font-weight: 600;
    margin-bottom: -3px;
}

.cell-label i {
    color: #0d6efd;
    font-size: 9px;
}

/* =========================================================
   BREAK / LUNCH ROW
========================================================= */

.special-row td {
    background: #f8fafc;
}

.special-cell {
    text-align: center;
    padding: 13px;
    background: #f4f7fb !important;
}

.special-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    color: #718096;
    font-size: 12px;
    font-weight: 700;
}

.special-content i {
    font-size: 15px;
    color: #0d6efd;
}

.special-content small {
    color: #9aa3af;
    font-size: 10px;
    font-weight: 500;
}

/* =========================================================
   GRID NOTE
========================================================= */

.grid-note {
    display: flex;
    align-items: center;
    gap: 7px;
    margin-top: 12px;
    color: #7b8798;
    font-size: 11.5px;
}

.grid-note i {
    color: #0d6efd;
}

/* =========================================================
   ACTION AREA
========================================================= */

.action-area {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    margin-top: 30px;
    padding-top: 22px;
    border-top: 1px solid #edf0f4;
}

.action-note {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #7b8798;
    font-size: 12px;
}

.action-note i {
    color: #0d6efd;
}

/* =========================================================
   SAVE BUTTON
========================================================= */

.btn-save {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 46px;
    padding: 10px 24px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(
        135deg,
        #0d6efd,
        #0959c7
    );
    color: #ffffff;
    font-size: 14px;
    font-weight: 650;
    box-shadow: 0 6px 16px rgba(13, 110, 253, .20);
    transition: all .2s ease;
}

.btn-save:hover {
    background: linear-gradient(
        135deg,
        #0b5ed7,
        #084298
    );
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(13, 110, 253, .26);
}

.btn-save:active {
    transform: translateY(0);
}

/* =========================================================
   CANCEL BUTTON
========================================================= */

.btn-cancel {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    min-height: 46px;
    padding: 10px 21px;
    border-radius: 10px;
    border: 1px solid #dce2ea;
    background: #ffffff;
    color: #526174;
    font-size: 14px;
    font-weight: 600;
    transition: all .2s ease;
    text-decoration: none;
}

.btn-cancel:hover {
    background: #f5f7fa;
    border-color: #c6ced9;
    color: #16213e;
}

/* =========================================================
   ALERTS
========================================================= */

.alert {
    border-radius: 12px;
    border: none;
    padding: 14px 17px;
    box-shadow: 0 3px 12px rgba(22, 33, 62, .04);
}

.alert-success {
    background: #eaf8f0;
    color: #176b3a;
    border-left: 4px solid #198754;
}

.alert-danger {
    background: #fff0f1;
    color: #842029;
    border-left: 4px solid #dc3545;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .timetable-card {
        padding: 24px;
    }

    .action-note {
        display: none;
    }

    .action-area {
        justify-content: flex-end;
    }
}

@media (max-width: 767px) {

    .school-page-header h1 {
        font-size: 24px;
    }

    .school-page-header {
        margin-bottom: 20px;
    }

    .timetable-card {
        padding: 19px;
        border-radius: 14px;
    }

    .section-title {
        font-size: 16px;
    }

    .section-title-icon {
        width: 38px;
        height: 38px;
    }

    .action-area {
        flex-direction: column-reverse;
        align-items: stretch;
    }

    .btn-save,
    .btn-cancel {
        width: 100%;
    }

    .btn-back {
        width: 100%;
        justify-content: center;
    }
}

</style>


<div class="timetable-page">

    {{-- =====================================================
         PAGE HEADER
    ====================================================== --}}

    <div class="school-page-header">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div>

                <h1>

                    <i class="fas {{ isset($editing) && $editing ? 'fa-calendar-pen' : 'fa-calendar-plus' }} me-2"></i>

                    {{ isset($editing) && $editing ? 'Edit Timetable' : 'Add Timetable' }}

                </h1>

                <p>
                    {{ isset($editing) && $editing
                        ? 'Update the weekly timetable for your class and division.'
                        : 'Create a complete weekly timetable for your class and division.'
                    }}
                </p>

            </div>


            <a
                href="{{ route('admintimetable') }}"
                class="btn btn-back"
            >

                <i class="fas fa-arrow-left"></i>

                Back to Timetable

            </a>

        </div>

    </div>


    {{-- =====================================================
         SUCCESS MESSAGE
    ====================================================== --}}

    @if(session('success'))

        <div class="alert alert-success mb-4">

            <i class="fas fa-check-circle me-2"></i>

            {{ session('success') }}

        </div>

    @endif


    {{-- =====================================================
         VALIDATION ERRORS
    ====================================================== --}}

    @if($errors->any())

        <div class="alert alert-danger mb-4">

            <div class="fw-bold mb-2">

                <i class="fas fa-exclamation-circle me-2"></i>

                Please fix the following errors:

            </div>

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>
                        {{ $error }}
                    </li>

                @endforeach

            </ul>

        </div>

    @endif


    {{-- =====================================================
         INFORMATION BOX
    ====================================================== --}}

    <div class="info-box">

        <i class="fas fa-circle-info"></i>

        <div>

            <strong>
                {{ isset($editing) && $editing
                    ? 'Weekly Timetable Update'
                    : 'Weekly Timetable Setup'
                }}
            </strong>

            <div>

                {{ isset($editing) && $editing
                    ? 'Existing timetable data is loaded below. Change any subject, teacher or room and save the timetable.'
                    : 'Select the academic year, class and division. Then enter subjects, teachers and classrooms for each period from Monday to Saturday.'
                }}

            </div>

        </div>

    </div>


    {{-- =====================================================
         MAIN FORM
    ====================================================== --}}

    <form
        method="POST"
        action="{{ route('admintimetable.store') }}"
        class="timetable-card"
        id="weeklyTimetableForm"
    >

        @csrf


        {{-- =================================================
             BASIC INFORMATION
        ================================================== --}}

        <div class="section-title">

            <span class="section-title-icon">

                <i class="fas fa-calendar-days"></i>

            </span>

            <span class="section-title-text">

                Timetable Information

                <small>
                    Select class, division and academic year
                </small>

            </span>

        </div>


        <div class="row g-4">


            {{-- =================================================
                 ACADEMIC YEAR
            ================================================== --}}

            <div class="col-md-4">

                <label class="form-label">

                    Academic Year

                    <span class="required">*</span>

                </label>

                <div class="input-icon">

                    <i class="fas fa-calendar-check"></i>

                    <input
                        type="text"
                        name="academic_year"
                        id="academic_year"
                        class="form-control"
                        value="{{ old('academic_year', $academicYear ?? '') }}"
                        placeholder="Example: 2026-27"
                        maxlength="20"
                        required
                    >

                </div>

                <div class="field-help">

                    <i class="fas fa-circle-info"></i>

                    Enter the academic year.

                </div>

            </div>


            {{-- =================================================
                 CLASS
            ================================================== --}}

            <div class="col-md-4">

                <label class="form-label">

                    Class

                    <span class="required">*</span>

                </label>

                <div class="input-icon">

                    <i class="fas fa-school"></i>

                    <select
                        name="class_id"
                        id="class_id"
                        class="form-select"
                        required
                    >

                        <option value="">
                            Select Class
                        </option>

                        @foreach($classes as $class)

                            @php

                                $className =
                                    trim((string) $class->name);

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
                                {{ old('class_id', $selectedClassId ?? '') == $class->id ? 'selected' : '' }}
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

                <div class="field-help">

                    <i class="fas fa-circle-info"></i>

                    Select the class for this timetable.

                </div>

            </div>


            {{-- =================================================
                 DIVISION / SECTION
            ================================================== --}}

            <div class="col-md-4">

                <label class="form-label">

                    Division / Section

                    <span class="required">*</span>

                </label>

                <div class="input-icon">

                    <i class="fas fa-layer-group"></i>

                    <select
                        name="section_id"
                        id="section_id"
                        class="form-select"
                        required
                    >

                        <option value="">
                            Select Class First
                        </option>

                        @foreach($sections as $section)

                            <option
                                value="{{ $section->id }}"
                                data-class-id="{{ $section->class_id }}"
                                {{ old('section_id', $selectedSectionId ?? '') == $section->id ? 'selected' : '' }}
                            >

                                {{ strtoupper(trim((string) $section->name)) }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="field-help">

                    <i class="fas fa-circle-info"></i>

                    Division is filtered according to class.

                </div>

            </div>

        </div>


        <hr class="form-divider">


        {{-- =================================================
             WEEKLY TIMETABLE
        ================================================== --}}

        <div class="section-title">

            <span class="section-title-icon">

                <i class="fas fa-table-cells"></i>

            </span>

            <span class="section-title-text">

                Weekly Timetable

                <small>
                    Enter subject, teacher and classroom for each period
                </small>

            </span>

        </div>


        <div class="weekly-wrapper">

            <table class="weekly-table">

                <thead>

                    <tr>

                        <th>

                            <i class="fas fa-clock day-icon"></i>

                            TIME

                        </th>

                        <th>

                            <i class="fas fa-calendar-day day-icon"></i>

                            MONDAY

                        </th>

                        <th>

                            <i class="fas fa-calendar-day day-icon"></i>

                            TUESDAY

                        </th>

                        <th>

                            <i class="fas fa-calendar-day day-icon"></i>

                            WEDNESDAY

                        </th>

                        <th>

                            <i class="fas fa-calendar-day day-icon"></i>

                            THURSDAY

                        </th>

                        <th>

                            <i class="fas fa-calendar-day day-icon"></i>

                            FRIDAY

                        </th>

                        <th>

                            <i class="fas fa-calendar-day day-icon"></i>

                            SATURDAY

                        </th>

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


                    @forelse($slots as $slot)


                        {{-- =================================================
                             BREAK / LUNCH
                        ================================================== --}}

                        @if(in_array($slot->type, ['break', 'lunch']))

                            <tr class="special-row">

                                <td class="time-cell">

                                    <div class="time-main">

                                        {{ \Carbon\Carbon::parse($slot->start_time)->format('g:i A') }}

                                        -

                                        {{ \Carbon\Carbon::parse($slot->end_time)->format('g:i A') }}

                                    </div>

                                    <div class="time-sub">

                                        {{ ucfirst($slot->type) }}

                                    </div>

                                </td>


                                <td
                                    colspan="6"
                                    class="special-cell"
                                >

                                    <div class="special-content">

                                        @if($slot->type === 'break')

                                            <i class="fas fa-mug-hot"></i>

                                        @else

                                            <i class="fas fa-utensils"></i>

                                        @endif


                                        <span>

                                            {{ $slot->label ?: ucfirst($slot->type) }}

                                        </span>


                                        <small>

                                            {{ \Carbon\Carbon::parse($slot->start_time)->format('g:i A') }}

                                            -

                                            {{ \Carbon\Carbon::parse($slot->end_time)->format('g:i A') }}

                                        </small>

                                    </div>

                                </td>

                            </tr>


                        {{-- =================================================
                             NORMAL PERIOD
                        ================================================== --}}

                        @else

                            <tr>

                                {{-- TIME --}}

                                <td class="time-cell">

                                    <div class="time-main">

                                        {{ \Carbon\Carbon::parse($slot->start_time)->format('g:i A') }}

                                        -

                                        {{ \Carbon\Carbon::parse($slot->end_time)->format('g:i A') }}

                                    </div>

                                    <div class="time-sub">

                                        Period {{ $slot->sort_order }}

                                    </div>

                                </td>


                                {{-- MONDAY-SATURDAY --}}

                                @foreach($days as $day)

                                    @php

                                        $existing = null;

                                        if (isset($timetableLookup)) {

                                            $lookupKey =
                                                $day . '_' . $slot->id;

                                            $existing =
                                                $timetableLookup[$lookupKey] ?? null;

                                        }

                                        $oldSubject =
                                            old(
                                                "entries.{$slot->id}.{$day}.subject_id"
                                            );

                                        $oldTeacher =
                                            old(
                                                "entries.{$slot->id}.{$day}.teacher_id"
                                            );

                                        $oldRoom =
                                            old(
                                                "entries.{$slot->id}.{$day}.room"
                                            );

                                        $subjectValue =
                                            $oldSubject !== null
                                                ? $oldSubject
                                                : ($existing?->subject_id ?? '');

                                        $teacherValue =
                                            $oldTeacher !== null
                                                ? $oldTeacher
                                                : ($existing?->teacher_id ?? '');

                                        $roomValue =
                                            $oldRoom !== null
                                                ? $oldRoom
                                                : ($existing?->room ?? '');

                                    @endphp


                                    <td class="period-cell">

                                        <div class="period-cell-inner">


                                            {{-- SUBJECT --}}

                                            <div>

                                                <div class="cell-label">

                                                    <i class="fas fa-book-open"></i>

                                                    Subject

                                                </div>


                                                <select
                                                    name="entries[{{ $slot->id }}][{{ $day }}][subject_id]"
                                                    class="grid-select"
                                                >

                                                    <option value="">
                                                        Select Subject
                                                    </option>


                                                    @foreach($subjects as $subject)

                                                        <option
                                                            value="{{ $subject->id }}"
                                                            {{ (string) $subjectValue === (string) $subject->id ? 'selected' : '' }}
                                                        >

                                                            {{ $subject->name }}

                                                            @if($subject->code)

                                                                ({{ $subject->code }})

                                                            @endif

                                                        </option>

                                                    @endforeach

                                                </select>

                                            </div>


                                            {{-- TEACHER --}}

                                            <div>

                                                <div class="cell-label">

                                                    <i class="fas fa-chalkboard-user"></i>

                                                    Teacher

                                                </div>


                                                <select
                                                    name="entries[{{ $slot->id }}][{{ $day }}][teacher_id]"
                                                    class="grid-select"
                                                >

                                                    <option value="">
                                                        Select Teacher
                                                    </option>


                                                    @foreach($teachers as $teacher)

                                                        <option
                                                            value="{{ $teacher->id }}"
                                                            {{ (string) $teacherValue === (string) $teacher->id ? 'selected' : '' }}
                                                        >

                                                            {{ $teacher->name }}

                                                            @if($teacher->employee_id)

                                                                - {{ $teacher->employee_id }}

                                                            @endif

                                                        </option>

                                                    @endforeach

                                                </select>

                                            </div>


                                            {{-- ROOM --}}

                                            <div>

                                                <div class="cell-label">

                                                    <i class="fas fa-door-open"></i>

                                                    Room

                                                </div>


                                                <input
                                                    type="text"
                                                    name="entries[{{ $slot->id }}][{{ $day }}][room]"
                                                    class="grid-input"
                                                    placeholder="Room 101"
                                                    maxlength="100"
                                                    value="{{ $roomValue }}"
                                                >

                                            </div>


                                        </div>

                                    </td>

                                @endforeach

                            </tr>

                        @endif


                    @empty

                        <tr>

                            <td
                                colspan="7"
                                class="special-cell"
                            >

                                <div class="special-content">

                                    <i class="fas fa-clock"></i>

                                    <span>
                                        No timetable slots configured.
                                    </span>

                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        <div class="grid-note">

            <i class="fas fa-circle-info"></i>

            Break and lunch periods are automatically managed from the configured timetable slots.

        </div>


        {{-- =================================================
             ACTION AREA
        ================================================== --}}

        <div class="action-area">

            <div class="action-note">

                <i class="fas fa-shield-halved"></i>

                Fill only the periods required for each day.

            </div>


            <div class="d-flex gap-2">

                <a
                    href="{{ route('admintimetable') }}"
                    class="btn btn-cancel"
                >

                    <i class="fas fa-times"></i>

                    Cancel

                </a>


                <button
                    type="submit"
                    class="btn btn-save"
                    id="saveTimetableBtn"
                >

                    <i class="fas {{ isset($editing) && $editing ? 'fa-rotate' : 'fa-check' }}"></i>

                    {{ isset($editing) && $editing
                        ? 'Update Complete Timetable'
                        : 'Save Complete Timetable'
                    }}

                </button>

            </div>

        </div>

    </form>

</div>


<script>

document.addEventListener('DOMContentLoaded', function () {

    const classSelect =
        document.getElementById('class_id');

    const sectionSelect =
        document.getElementById('section_id');

    const form =
        document.getElementById('weeklyTimetableForm');

    const saveButton =
        document.getElementById('saveTimetableBtn');


    if (
        !classSelect ||
        !sectionSelect ||
        !form
    ) {
        return;
    }


    const sectionOptions =
        Array.from(
            sectionSelect.querySelectorAll(
                'option[data-class-id]'
            )
        );


    function filterSections() {

        const selectedClassId =
            classSelect.value;


        sectionOptions.forEach(function (option) {

            const belongsToClass =
                selectedClassId &&
                option.dataset.classId === selectedClassId;

            option.hidden =
                !belongsToClass;

        });


        const selectedSection =
            sectionOptions.find(function (option) {

                return (
                    option.value === sectionSelect.value &&
                    !option.hidden
                );

            });


        if (
            sectionSelect.value &&
            !selectedSection
        ) {

            sectionSelect.value = '';

        }


        const placeholder =
            sectionSelect.querySelector(
                'option[value=""]'
            );


        if (placeholder) {

            placeholder.textContent =
                selectedClassId
                    ? 'Select Division / Section'
                    : 'Select Class First';

        }

    }


    classSelect.addEventListener(
        'change',
        function () {

            sectionSelect.value = '';

            filterSections();

        }
    );


    filterSections();


    /*
    |--------------------------------------------------------------------------
    | PREVENT DOUBLE SUBMISSION
    |--------------------------------------------------------------------------
    */

    form.addEventListener(
        'submit',
        function () {

            if (!form.checkValidity()) {
                return;
            }


            if (saveButton) {

                saveButton.disabled = true;

                saveButton.innerHTML =
                    '<i class="fas fa-spinner fa-spin"></i> Saving Timetable...';

            }

        }
    );

});

</script>

</x-ladmin-panel>