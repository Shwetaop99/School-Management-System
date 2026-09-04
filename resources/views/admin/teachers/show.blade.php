<x-ladmin-panel title="Teacher Profile">

    <style>
        /* =========================================
           TEACHER PROFILE
           Same visual language as Dashboard
        ========================================= */

        .teacher-profile-header {
            margin-bottom: 22px;
        }

        .teacher-breadcrumb {
            font-size: 14px;
            color: #7b8496;
            margin-bottom: 7px;
        }

        .teacher-breadcrumb a {
            color: #147cf5;
            text-decoration: none;
        }

        .teacher-breadcrumb a:hover {
            color: #1268ca;
        }

        .teacher-profile-header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #16213e;
            margin: 0;
        }

        .teacher-profile-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* Profile Card */

        .teacher-profile-card {
            background: #ffffff;
            border: 1px solid #e7ecf3;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(22, 33, 62, 0.05);
            padding: 25px;
            margin-bottom: 22px;
        }

        .teacher-profile-main {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .teacher-profile-photo {
            width: 105px;
            height: 105px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #f0f4f9;
            box-shadow: 0 3px 12px rgba(22, 33, 62, 0.08);
        }

        .teacher-profile-placeholder {
            width: 105px;
            height: 105px;
            border-radius: 50%;
            background: #eaf3ff;
            color: #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: 700;
            border: 4px solid #f0f4f9;
        }

        .teacher-profile-name {
            font-size: 25px;
            font-weight: 700;
            color: #17213c;
            margin-bottom: 6px;
        }

        .teacher-profile-id {
            color: #7b8496;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .teacher-profile-subject {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #1268ca;
            font-size: 14px;
            font-weight: 600;
        }

        /* Status */

        .teacher-status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: capitalize;
        }

        .teacher-status.active {
            background: #e8f7ef;
            color: #198754;
        }

        .teacher-status.inactive {
            background: #fdebed;
            color: #e63946;
        }

        .teacher-status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: currentColor;
        }

        /* Information Cards */

        .teacher-info-card {
            background: #ffffff;
            border: 1px solid #e7ecf3;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(22, 33, 62, 0.05);
            overflow: hidden;
            height: 100%;
        }

        .teacher-info-header {
            padding: 17px 20px;
            border-bottom: 1px solid #edf1f6;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .teacher-info-header-icon {
            width: 36px;
            height: 36px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eaf3ff;
            color: #0d6efd;
            font-size: 17px;
        }

        .teacher-info-header h3 {
            margin: 0;
            color: #17213c;
            font-size: 17px;
            font-weight: 700;
        }

        .teacher-info-body {
            padding: 5px 20px 10px;
        }

        .teacher-info-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 14px 0;
            border-bottom: 1px solid #f0f3f7;
        }

        .teacher-info-row:last-child {
            border-bottom: none;
        }

        .teacher-info-label {
            color: #8994a7;
            font-size: 13px;
            font-weight: 600;
            min-width: 135px;
        }

        .teacher-info-value {
            color: #17213c;
            font-size: 14px;
            font-weight: 600;
            text-align: right;
            word-break: break-word;
        }

        .teacher-info-value.muted {
            color: #a0a8b5;
            font-weight: 500;
        }

        /* Action Card */

        .teacher-action-card {
            background: #ffffff;
            border: 1px solid #e7ecf3;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 4px 18px rgba(22, 33, 62, 0.05);
            margin-top: 22px;
        }

        .teacher-action-title {
            color: #17213c;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .teacher-action-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .teacher-btn {
            border-radius: 8px;
            padding: 9px 16px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border: 1px solid transparent;
            cursor: pointer;
        }

        .teacher-btn-primary {
            background: #0d6efd;
            color: #ffffff;
        }

        .teacher-btn-primary:hover {
            background: #0b5ed7;
            color: #ffffff;
        }

        .teacher-btn-secondary {
            background: #ffffff;
            color: #17213c;
            border-color: #dce3ec;
        }

        .teacher-btn-secondary:hover {
            background: #f6f8fb;
            color: #17213c;
        }

        .teacher-btn-danger {
            background: #fff1f2;
            color: #e63946;
            border-color: #f5c2c7;
        }

        .teacher-btn-danger:hover {
            background: #e63946;
            color: #ffffff;
        }

        /* Responsive */

        @media (max-width: 768px) {

            .teacher-profile-main {
                align-items: flex-start;
                flex-direction: column;
            }

            .teacher-profile-name {
                font-size: 22px;
            }

            .teacher-info-row {
                flex-direction: column;
                gap: 5px;
            }

            .teacher-info-value {
                text-align: left;
            }
        }

        @media (max-width: 575px) {

            .teacher-profile-card {
                padding: 18px;
            }

            .teacher-profile-header h1 {
                font-size: 23px;
            }

            .teacher-profile-actions,
            .teacher-action-buttons {
                width: 100%;
            }

            .teacher-btn {
                width: 100%;
            }
        }
    </style>


    {{-- =========================================
         PAGE HEADER
    ========================================== --}}

    <div class="teacher-profile-header">

        <div class="teacher-breadcrumb">
            <a href="{{ route('admin.teachers.index') }}">
                Teachers
            </a>

            <span> / Teacher Profile</span>
        </div>

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div>
                <h1>Teacher Profile</h1>
            </div>

            <div class="teacher-profile-actions">

                <a
                    href="{{ route('admin.teachers.index') }}"
                    class="teacher-btn teacher-btn-secondary"
                >
                    <i class="bi bi-arrow-left"></i>
                    Back to Teachers
                </a>

                <a
                    href="{{ route('admin.teachers.edit', $teacher) }}"
                    class="teacher-btn teacher-btn-primary"
                >
                    <i class="bi bi-pencil"></i>
                    Edit Teacher
                </a>

            </div>

        </div>

    </div>


    {{-- =========================================
         PROFILE SUMMARY
    ========================================== --}}

    <div class="teacher-profile-card">

        <div class="teacher-profile-main">

            {{-- Profile Photo --}}

            @if($teacher->profile_photo)

                <img
                    src="{{ asset('storage/' . $teacher->profile_photo) }}"
                    alt="{{ $teacher->full_name }}"
                    class="teacher-profile-photo"
                >

            @else

                <div class="teacher-profile-placeholder">
                    {{ strtoupper(substr($teacher->first_name, 0, 1)) }}
                </div>

            @endif


            {{-- Profile Details --}}

            <div>

                <div class="teacher-profile-name">
                    {{ $teacher->full_name }}
                </div>

                <div class="teacher-profile-id">
                    Teacher ID: <strong>{{ $teacher->teacher_id }}</strong>
                </div>

                @if($teacher->subject)

                    <div class="teacher-profile-subject">
                        <i class="bi bi-book"></i>
                        {{ $teacher->subject }}
                    </div>

                @endif

                <div class="mt-2">

                    <span class="teacher-status {{ $teacher->status }}">

                        <span class="teacher-status-dot"></span>

                        {{ ucfirst($teacher->status) }}

                    </span>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================
         INFORMATION CARDS
    ========================================== --}}

    <div class="row g-4">

        {{-- PERSONAL INFORMATION --}}

        <div class="col-lg-6">

            <div class="teacher-info-card">

                <div class="teacher-info-header">

                    <div class="teacher-info-header-icon">
                        <i class="bi bi-person"></i>
                    </div>

                    <h3>Personal Information</h3>

                </div>

                <div class="teacher-info-body">

                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            First Name
                        </div>

                        <div class="teacher-info-value">
                            {{ $teacher->first_name }}
                        </div>

                    </div>


                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            Last Name
                        </div>

                        <div class="teacher-info-value">
                            {{ $teacher->last_name }}
                        </div>

                    </div>


                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            Gender
                        </div>

                        <div class="teacher-info-value {{ !$teacher->gender ? 'muted' : '' }}">
                            {{ $teacher->gender ?: 'Not provided' }}
                        </div>

                    </div>


                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            Date of Birth
                        </div>

                        <div class="teacher-info-value {{ !$teacher->date_of_birth ? 'muted' : '' }}">

                            @if($teacher->date_of_birth)
                                {{ $teacher->date_of_birth->format('d M Y') }}
                            @else
                                Not provided
                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- CONTACT INFORMATION --}}

        <div class="col-lg-6">

            <div class="teacher-info-card">

                <div class="teacher-info-header">

                    <div class="teacher-info-header-icon">
                        <i class="bi bi-telephone"></i>
                    </div>

                    <h3>Contact Information</h3>

                </div>

                <div class="teacher-info-body">

                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            Email
                        </div>

                        <div class="teacher-info-value {{ !$teacher->email ? 'muted' : '' }}">
                            {{ $teacher->email ?: 'Not provided' }}
                        </div>

                    </div>


                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            Phone
                        </div>

                        <div class="teacher-info-value">
                            {{ $teacher->phone }}
                        </div>

                    </div>


                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            Alternate Phone
                        </div>

                        <div class="teacher-info-value {{ !$teacher->alternate_phone ? 'muted' : '' }}">
                            {{ $teacher->alternate_phone ?: 'Not provided' }}
                        </div>

                    </div>


                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            City
                        </div>

                        <div class="teacher-info-value {{ !$teacher->city ? 'muted' : '' }}">
                            {{ $teacher->city ?: 'Not provided' }}
                        </div>

                    </div>


                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            State
                        </div>

                        <div class="teacher-info-value {{ !$teacher->state ? 'muted' : '' }}">
                            {{ $teacher->state ?: 'Not provided' }}
                        </div>

                    </div>


                    <div class="teacher-info-row">

                        <div class="teacher-info-label">
                            Address
                        </div>

                        <div class="teacher-info-value {{ !$teacher->address ? 'muted' : '' }}">
                            {{ $teacher->address ?: 'Not provided' }}
                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- PROFESSIONAL INFORMATION --}}

        <div class="col-12">

            <div class="teacher-info-card">

                <div class="teacher-info-header">

                    <div class="teacher-info-header-icon">
                        <i class="bi bi-briefcase"></i>
                    </div>

                    <h3>Professional Information</h3>

                </div>

                <div class="teacher-info-body">

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="teacher-info-row">

                                <div class="teacher-info-label">
                                    Qualification
                                </div>

                                <div class="teacher-info-value {{ !$teacher->qualification ? 'muted' : '' }}">
                                    {{ $teacher->qualification ?: 'Not provided' }}
                                </div>

                            </div>


                            <div class="teacher-info-row">

                                <div class="teacher-info-label">
                                    Subject
                                </div>

                                <div class="teacher-info-value {{ !$teacher->subject ? 'muted' : '' }}">
                                    {{ $teacher->subject ?: 'Not provided' }}
                                </div>

                            </div>


                            <div class="teacher-info-row">

                                <div class="teacher-info-label">
                                    Specialization
                                </div>

                                <div class="teacher-info-value {{ !$teacher->specialization ? 'muted' : '' }}">
                                    {{ $teacher->specialization ?: 'Not provided' }}
                                </div>

                            </div>

                        </div>


                        <div class="col-lg-6">

                            <div class="teacher-info-row">

                                <div class="teacher-info-label">
                                    Experience
                                </div>

                                <div class="teacher-info-value">

                                    @if($teacher->experience !== null)
                                        {{ number_format((float) $teacher->experience, 1) }} years
                                    @else
                                        <span class="muted">Not provided</span>
                                    @endif

                                </div>

                            </div>


                            <div class="teacher-info-row">

                                <div class="teacher-info-label">
                                    Employment Type
                                </div>

                                <div class="teacher-info-value {{ !$teacher->employment_type ? 'muted' : '' }}">
                                    {{ $teacher->employment_type ?: 'Not provided' }}
                                </div>

                            </div>


                            <div class="teacher-info-row">

                                <div class="teacher-info-label">
                                    Joining Date
                                </div>

                                <div class="teacher-info-value {{ !$teacher->joining_date ? 'muted' : '' }}">

                                    @if($teacher->joining_date)
                                        {{ $teacher->joining_date->format('d M Y') }}
                                    @else
                                        Not provided
                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================
         ACTIONS
    ========================================== --}}

    <div class="teacher-action-card">

        <div class="teacher-action-title">
            Teacher Actions
        </div>

        <div class="teacher-action-buttons">

            <a
                href="{{ route('admin.teachers.edit', $teacher) }}"
                class="teacher-btn teacher-btn-primary"
            >
                <i class="bi bi-pencil"></i>
                Edit Teacher
            </a>


            <a
                href="{{ route('admin.teachers.index') }}"
                class="teacher-btn teacher-btn-secondary"
            >
                <i class="bi bi-people"></i>
                Teacher List
            </a>


            <form
                action="{{ route('admin.teachers.destroy', $teacher) }}"
                method="POST"
                onsubmit="return confirm('Are you sure you want to delete this teacher?');"
                style="display:inline;"
            >

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="teacher-btn teacher-btn-danger"
                >
                    <i class="bi bi-trash"></i>
                    Delete Teacher
                </button>

            </form>

        </div>

    </div>

</x-ladmin-panel>