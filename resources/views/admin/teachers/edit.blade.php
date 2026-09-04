<x-ladmin-panel title="Edit Teacher">

    <style>
        /* =========================================
           EDIT TEACHER
           Same dashboard / Add Teacher styling
        ========================================== */

        .teacher-page-header {
            margin-bottom: 22px;
        }

        .teacher-page-header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #16213e;
            margin: 0;
        }

        .teacher-page-subtitle {
            color: #7b8496;
            font-size: 14px;
            margin-top: 5px;
        }

        .teacher-form-card {
            background: #ffffff;
            border: 1px solid #e7ecf3;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(22, 33, 62, 0.05);
            margin-bottom: 22px;
            overflow: hidden;
        }

        .teacher-form-header {
            padding: 18px 22px;
            border-bottom: 1px solid #edf1f6;
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .teacher-form-header-icon {
            width: 38px;
            height: 38px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eaf3ff;
            color: #0d6efd;
            font-size: 18px;
        }

        .teacher-form-header h3 {
            margin: 0;
            color: #17213c;
            font-size: 17px;
            font-weight: 700;
        }

        .teacher-form-body {
            padding: 22px;
        }

        .teacher-form-label {
            display: block;
            color: #17213c;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .teacher-form-label .required {
            color: #e63946;
        }

        .teacher-form-control {
            width: 100%;
            min-height: 43px;
            border: 1px solid #dce3ec;
            border-radius: 8px;
            padding: 9px 12px;
            color: #17213c;
            background: #ffffff;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .teacher-form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.10);
        }

        textarea.teacher-form-control {
            min-height: 95px;
            resize: vertical;
        }

        .teacher-form-help {
            color: #8994a7;
            font-size: 12px;
            margin-top: 5px;
        }

        .teacher-current-photo {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .teacher-current-photo img,
        .teacher-photo-placeholder {
            width: 82px;
            height: 82px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #f0f4f9;
        }

        .teacher-photo-placeholder {
            background: #eaf3ff;
            color: #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: 700;
        }

        .teacher-current-photo-info {
            color: #7b8496;
            font-size: 13px;
        }

        .teacher-current-photo-info strong {
            display: block;
            color: #17213c;
            font-size: 14px;
            margin-bottom: 3px;
        }

        .teacher-photo-preview {
            display: none;
            margin-top: 15px;
        }

        .teacher-photo-preview img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #edf1f6;
        }

        .teacher-form-actions {
            background: #ffffff;
            border: 1px solid #e7ecf3;
            border-radius: 14px;
            padding: 18px 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            box-shadow: 0 4px 18px rgba(22, 33, 62, 0.05);
        }

        .teacher-action-left,
        .teacher-action-right {
            display: flex;
            align-items: center;
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

        .teacher-alert {
            background: #fff1f2;
            border: 1px solid #f5c2c7;
            color: #b4232f;
            border-radius: 10px;
            padding: 13px 16px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .teacher-alert ul {
            margin: 7px 0 0;
            padding-left: 20px;
        }

        @media (max-width: 768px) {

            .teacher-page-header h1 {
                font-size: 24px;
            }

            .teacher-form-body {
                padding: 17px;
            }

            .teacher-form-actions {
                padding: 16px;
            }

            .teacher-action-left,
            .teacher-action-right {
                width: 100%;
            }

            .teacher-action-left .teacher-btn,
            .teacher-action-right .teacher-btn {
                flex: 1;
            }
        }

        @media (max-width: 575px) {

            .teacher-btn {
                width: 100%;
            }

            .teacher-action-left,
            .teacher-action-right {
                flex-direction: column;
            }
        }
    </style>


    {{-- =========================================
         PAGE HEADER
    ========================================== --}}

    <div class="teacher-page-header">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div>
                <h1>Edit Teacher</h1>

                <div class="teacher-page-subtitle">
                    Update teacher information and profile details
                </div>
            </div>

            <a
                href="{{ route('admin.teachers.show', $teacher) }}"
                class="teacher-btn teacher-btn-secondary"
            >
                <i class="bi bi-arrow-left"></i>
                Back to Profile
            </a>

        </div>

    </div>


    {{-- =========================================
         VALIDATION ERRORS
    ========================================== --}}

    @if($errors->any())

        <div class="teacher-alert">

            <strong>
                Please correct the following errors:
            </strong>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif


    {{-- =========================================
         EDIT FORM
    ========================================== --}}

    <form
        action="{{ route('admin.teachers.update', $teacher) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')


        {{-- =====================================
             PERSONAL INFORMATION
        ====================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-form-header">

                <div class="teacher-form-header-icon">
                    <i class="bi bi-person"></i>
                </div>

                <h3>Personal Information</h3>

            </div>

            <div class="teacher-form-body">

                <div class="row g-3">

                    {{-- Teacher ID --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Teacher ID <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="teacher_id"
                            class="teacher-form-control"
                            value="{{ old('teacher_id', $teacher->teacher_id) }}"
                            required
                        >

                    </div>


                    {{-- Gender --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Gender
                        </label>

                        <select
                            name="gender"
                            class="teacher-form-control"
                        >

                            <option value="">Select Gender</option>

                            <option
                                value="Male"
                                {{ old('gender', $teacher->gender) == 'Male' ? 'selected' : '' }}
                            >
                                Male
                            </option>

                            <option
                                value="Female"
                                {{ old('gender', $teacher->gender) == 'Female' ? 'selected' : '' }}
                            >
                                Female
                            </option>

                            <option
                                value="Other"
                                {{ old('gender', $teacher->gender) == 'Other' ? 'selected' : '' }}
                            >
                                Other
                            </option>

                        </select>

                    </div>


                    {{-- First Name --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            First Name <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="first_name"
                            class="teacher-form-control"
                            value="{{ old('first_name', $teacher->first_name) }}"
                            required
                        >

                    </div>


                    {{-- Last Name --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Last Name <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="last_name"
                            class="teacher-form-control"
                            value="{{ old('last_name', $teacher->last_name) }}"
                            required
                        >

                    </div>


                    {{-- Date of Birth --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Date of Birth
                        </label>

                        <input
                            type="date"
                            name="date_of_birth"
                            class="teacher-form-control"
                            value="{{ old('date_of_birth', optional($teacher->date_of_birth)->format('Y-m-d')) }}"
                        >

                    </div>


                    {{-- Status --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Status <span class="required">*</span>
                        </label>

                        <select
                            name="status"
                            class="teacher-form-control"
                            required
                        >

                            <option
                                value="active"
                                {{ old('status', $teacher->status) == 'active' ? 'selected' : '' }}
                            >
                                Active
                            </option>

                            <option
                                value="inactive"
                                {{ old('status', $teacher->status) == 'inactive' ? 'selected' : '' }}
                            >
                                Inactive
                            </option>

                        </select>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================
             CONTACT INFORMATION
        ====================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-form-header">

                <div class="teacher-form-header-icon">
                    <i class="bi bi-telephone"></i>
                </div>

                <h3>Contact Information</h3>

            </div>

            <div class="teacher-form-body">

                <div class="row g-3">

                    {{-- Email --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="teacher-form-control"
                            value="{{ old('email', $teacher->email) }}"
                        >

                    </div>


                    {{-- Phone --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Phone <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="phone"
                            class="teacher-form-control"
                            value="{{ old('phone', $teacher->phone) }}"
                            required
                        >

                    </div>


                    {{-- Alternate Phone --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Alternate Phone
                        </label>

                        <input
                            type="text"
                            name="alternate_phone"
                            class="teacher-form-control"
                            value="{{ old('alternate_phone', $teacher->alternate_phone) }}"
                        >

                    </div>


                    {{-- City --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            City
                        </label>

                        <input
                            type="text"
                            name="city"
                            class="teacher-form-control"
                            value="{{ old('city', $teacher->city) }}"
                        >

                    </div>


                    {{-- State --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            State
                        </label>

                        <input
                            type="text"
                            name="state"
                            class="teacher-form-control"
                            value="{{ old('state', $teacher->state) }}"
                        >

                    </div>


                    {{-- Address --}}

                    <div class="col-12">

                        <label class="teacher-form-label">
                            Address
                        </label>

                        <textarea
                            name="address"
                            class="teacher-form-control"
                            rows="3"
                        >{{ old('address', $teacher->address) }}</textarea>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================
             PROFESSIONAL INFORMATION
        ====================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-form-header">

                <div class="teacher-form-header-icon">
                    <i class="bi bi-briefcase"></i>
                </div>

                <h3>Professional Information</h3>

            </div>

            <div class="teacher-form-body">

                <div class="row g-3">

                    {{-- Qualification --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Qualification
                        </label>

                        <input
                            type="text"
                            name="qualification"
                            class="teacher-form-control"
                            value="{{ old('qualification', $teacher->qualification) }}"
                        >

                    </div>


                    {{-- Subject --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Subject
                        </label>

                        <input
                            type="text"
                            name="subject"
                            class="teacher-form-control"
                            value="{{ old('subject', $teacher->subject) }}"
                        >

                    </div>


                    {{-- Specialization --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Specialization
                        </label>

                        <input
                            type="text"
                            name="specialization"
                            class="teacher-form-control"
                            value="{{ old('specialization', $teacher->specialization) }}"
                        >

                    </div>


                    {{-- Experience --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Experience
                        </label>

                        <input
                            type="number"
                            name="experience"
                            class="teacher-form-control"
                            value="{{ old('experience', $teacher->experience) }}"
                            min="0"
                            max="99.9"
                            step="0.1"
                        >

                        <div class="teacher-form-help">
                            Enter experience in years.
                        </div>

                    </div>


                    {{-- Employment Type --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Employment Type
                        </label>

                        <select
                            name="employment_type"
                            class="teacher-form-control"
                        >

                            <option value="">
                                Select Employment Type
                            </option>

                            <option
                                value="Full Time"
                                {{ old('employment_type', $teacher->employment_type) == 'Full Time' ? 'selected' : '' }}
                            >
                                Full Time
                            </option>

                            <option
                                value="Part Time"
                                {{ old('employment_type', $teacher->employment_type) == 'Part Time' ? 'selected' : '' }}
                            >
                                Part Time
                            </option>

                            <option
                                value="Contract"
                                {{ old('employment_type', $teacher->employment_type) == 'Contract' ? 'selected' : '' }}
                            >
                                Contract
                            </option>

                            <option
                                value="Guest"
                                {{ old('employment_type', $teacher->employment_type) == 'Guest' ? 'selected' : '' }}
                            >
                                Guest
                            </option>

                        </select>

                    </div>


                    {{-- Joining Date --}}

                    <div class="col-md-6">

                        <label class="teacher-form-label">
                            Joining Date
                        </label>

                        <input
                            type="date"
                            name="joining_date"
                            class="teacher-form-control"
                            value="{{ old('joining_date', optional($teacher->joining_date)->format('Y-m-d')) }}"
                        >

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================
             PROFILE PHOTO
        ====================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-form-header">

                <div class="teacher-form-header-icon">
                    <i class="bi bi-camera"></i>
                </div>

                <h3>Profile Photo</h3>

            </div>

            <div class="teacher-form-body">

                @if($teacher->profile_photo)

                    <div class="teacher-current-photo">

                        <img
                            src="{{ asset('storage/' . $teacher->profile_photo) }}"
                            alt="{{ $teacher->full_name }}"
                        >

                        <div class="teacher-current-photo-info">

                            <strong>Current Profile Photo</strong>

                            Upload a new photo below to replace it.

                        </div>

                    </div>

                @else

                    <div class="teacher-current-photo">

                        <div class="teacher-photo-placeholder">
                            {{ strtoupper(substr($teacher->first_name, 0, 1)) }}
                        </div>

                        <div class="teacher-current-photo-info">

                            <strong>No Profile Photo</strong>

                            You can upload a profile photo below.

                        </div>

                    </div>

                @endif


                <label class="teacher-form-label">
                    Replace Profile Photo
                </label>

                <input
                    type="file"
                    name="profile_photo"
                    id="profile_photo"
                    class="teacher-form-control"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <div class="teacher-form-help">
                    JPG, JPEG, PNG or WEBP. Maximum size: 2 MB.
                </div>


                <div
                    class="teacher-photo-preview"
                    id="photoPreview"
                >

                    <img
                        id="previewImage"
                        src=""
                        alt="New profile photo preview"
                    >

                </div>

            </div>

        </div>


        {{-- =====================================
             FORM ACTIONS
        ====================================== --}}

        <div class="teacher-form-actions">

            <div class="teacher-action-left">

                <a
                    href="{{ route('admin.teachers.show', $teacher) }}"
                    class="teacher-btn teacher-btn-secondary"
                >
                    <i class="bi bi-x-lg"></i>
                    Cancel
                </a>

            </div>


            <div class="teacher-action-right">

                <button
                    type="submit"
                    class="teacher-btn teacher-btn-primary"
                >
                    <i class="bi bi-check-lg"></i>
                    Update Teacher
                </button>

            </div>

        </div>

    </form>


    {{-- =========================================
         PHOTO PREVIEW
    ========================================== --}}

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const photoInput = document.getElementById('profile_photo');
            const previewContainer = document.getElementById('photoPreview');
            const previewImage = document.getElementById('previewImage');

            if (!photoInput) {
                return;
            }

            photoInput.addEventListener('change', function (event) {

                const file = event.target.files[0];

                if (!file) {
                    previewContainer.style.display = 'none';
                    previewImage.src = '';
                    return;
                }

                if (!file.type.startsWith('image/')) {
                    previewContainer.style.display = 'none';
                    previewImage.src = '';
                    return;
                }

                const reader = new FileReader();

                reader.onload = function (e) {

                    previewImage.src = e.target.result;
                    previewContainer.style.display = 'block';

                };

                reader.readAsDataURL(file);

            });

        });
    </script>

</x-ladmin-panel>