<x-ladmin-panel title="Add Teacher">


<style>
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
    --teacher-danger: #dc3545;

    --teacher-shadow:
        0 8px 30px rgba(24, 52, 91, 0.07);

    --teacher-shadow-hover:
        0 14px 35px rgba(20, 124, 245, 0.13);
}


/* =========================================================
   GLOBAL BACKGROUND
========================================================= */

html,
body {
    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(20, 124, 245, 0.045),
            transparent 28%
        ),
        radial-gradient(
            circle at 90% 20%,
            rgba(108, 99, 255, 0.045),
            transparent 25%
        ),
        var(--teacher-bg) !important;

    color: var(--teacher-text) !important;
}

.app-wrapper,
.app-main,
.app-content {
    background: transparent !important;
}


/* =========================================================
   SIDEBAR
========================================================= */

/* =========================================================
   LIGHT SIDEBAR
========================================================= */

.app-sidebar,
.app-sidebar[data-bs-theme="dark"],
.app-sidebar[data-bs-theme="light"] {
    background: #ffffff !important;
    color: #596579 !important;
    border-right: 1px solid #e6edf5 !important;
    box-shadow: 4px 0 22px rgba(30, 50, 80, 0.045) !important;
}

/* Sidebar brand */
.app-sidebar .sidebar-brand,
.app-sidebar .brand-link {
    background: #ffffff !important;
    color: #17213c !important;
    border-bottom: 1px solid #edf1f6 !important;
}

.app-sidebar .brand-link .brand-text,
.app-sidebar .sidebar-brand .brand-text {
    color: #17213c !important;
    font-weight: 750 !important;
}

/* Sidebar content */
.app-sidebar .sidebar-wrapper {
    background: #ffffff !important;
}

/* Sidebar menu */
.app-sidebar .nav {
    background: #ffffff !important;
}

.app-sidebar .nav-link {
    position: relative;

    margin: 4px 10px !important;
    padding: 10px 12px !important;

    border-radius: 10px !important;

    background: transparent !important;

    color: #596579 !important;

    transition:
        background .25s ease,
        color .25s ease,
        transform .25s ease,
        box-shadow .25s ease;
}

/* Sidebar icons */
.app-sidebar .nav-link .nav-icon,
.app-sidebar .nav-link i {
    color: #718096 !important;

    transition:
        color .25s ease,
        transform .25s ease;
}

/* Hover */
.app-sidebar .nav-link:hover {
    background:
        linear-gradient(
            135deg,
            #eef6ff,
            #f4f1ff
        ) !important;

    color: #147cf5 !important;

    transform: translateX(3px);

    box-shadow:
        0 4px 12px rgba(20, 124, 245, 0.06);
}

.app-sidebar .nav-link:hover .nav-icon,
.app-sidebar .nav-link:hover i {
    color: #147cf5 !important;

    transform: scale(1.1);
}

/* Active menu */
.app-sidebar .nav-link.active,
.app-sidebar .nav-link[aria-current="page"] {
    background:
        linear-gradient(
            135deg,
            #eaf3ff,
            #f0edff
        ) !important;

    color: #147cf5 !important;

    font-weight: 700 !important;

    box-shadow:
        0 5px 14px rgba(20, 124, 245, 0.09) !important;
}

/* Active left indicator */
.app-sidebar .nav-link.active::before,
.app-sidebar .nav-link[aria-current="page"]::before {
    content: "";

    position: absolute;

    left: 0;
    top: 8px;
    bottom: 8px;

    width: 3px;

    border-radius: 0 5px 5px 0;

    background:
        linear-gradient(
            180deg,
            #147cf5,
            #6c63ff
        );
}

/* Active icon */
.app-sidebar .nav-link.active .nav-icon,
.app-sidebar .nav-link.active i,
.app-sidebar .nav-link[aria-current="page"] .nav-icon,
.app-sidebar .nav-link[aria-current="page"] i {
    color: #147cf5 !important;
}

/* Menu headers */
.app-sidebar .nav-header {
    color: #9aa5b5 !important;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: .5px;

    text-transform: uppercase;
}

/* Arrows */
.app-sidebar .nav-arrow {
    color: #8994a7 !important;
}

.app-sidebar .nav-link:hover .nav-arrow {
    color: #147cf5 !important;
}

/* Submenu */
.app-sidebar .nav-treeview {
    background: #fbfcff !important;
}

.app-sidebar .nav-treeview .nav-link {
    color: #697589 !important;
}

.app-sidebar .nav-treeview .nav-link:hover {
    background: #f0f6ff !important;
    color: #147cf5 !important;
}

/* Sidebar scrollbar */
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
   HEADER
========================================================= */

.app-header {
    background: rgba(255, 255, 255, 0.96) !important;

    border-bottom: 1px solid #e4eaf2 !important;

    box-shadow:
        0 3px 14px rgba(30, 50, 80, 0.05);
}

.app-header .nav-link {
    color: #536174 !important;

    transition:
        color .2s ease,
        background .2s ease;
}

.app-header .nav-link:hover {
    color: var(--teacher-primary) !important;
    background: #f1f6ff;
    border-radius: 8px;
}


/* =========================================================
   MAIN PAGE
========================================================= */

.teacher-create-page {
    min-height: calc(100vh - 100px);

    padding: 15px 6px 45px;

    background:
        radial-gradient(
            circle at 5% 0%,
            rgba(20, 124, 245, 0.06),
            transparent 25%
        ),
        radial-gradient(
            circle at 95% 10%,
            rgba(108, 99, 255, 0.055),
            transparent 23%
        );

    color: var(--teacher-text);
}


/* =========================================================
   PAGE HEADER
========================================================= */

.teacher-page-header {
    position: relative;

    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 20px;

    margin-bottom: 25px;
    padding: 22px 24px;

    overflow: hidden;

    border: 1px solid rgba(20, 124, 245, 0.10);
    border-radius: 16px;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.98),
            rgba(247,250,255,.98)
        );

    box-shadow:
        0 8px 28px rgba(30, 50, 80, 0.06);
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
            #147cf5,
            #6c63ff,
            #00b8d9
        );
}

.teacher-page-header::after {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    right: -70px;
    top: -100px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(20,124,245,.08),
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
    font-weight: 750;

    letter-spacing: -0.6px;
}

.teacher-page-subtitle {
    position: relative;
    z-index: 1;

    margin: 7px 0 0;

    color: #7b8497;

    font-size: 14px;
}


/* =========================================================
   BACK BUTTON
========================================================= */

.teacher-back-btn {
    position: relative;
    z-index: 2;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 8px;

    min-height: 42px;

    padding: 0 17px;

    border: 1px solid #dce5f0;
    border-radius: 10px;

    background: #ffffff;

    color: #536174;

    font-size: 13px;
    font-weight: 650;

    text-decoration: none;

    box-shadow:
        0 4px 12px rgba(30,50,80,.05);

    transition:
        transform .25s ease,
        color .25s ease,
        border-color .25s ease,
        background .25s ease,
        box-shadow .25s ease;
}

.teacher-back-btn:hover {
    transform: translateY(-2px);

    color: var(--teacher-primary);

    border-color: #bcd7f8;

    background:
        linear-gradient(
            135deg,
            #f0f7ff,
            #f8f6ff
        );

    box-shadow:
        0 8px 20px rgba(20,124,245,.10);
}

.teacher-back-btn i {
    transition: transform .25s ease;
}

.teacher-back-btn:hover i {
    transform: translateX(-3px);
}


/* =========================================================
   ERROR
========================================================= */

.teacher-error-summary {
    position: relative;

    margin-bottom: 20px;

    padding: 17px 19px;

    border: 1px solid #f1c1c6;
    border-left: 5px solid #dc3545;

    border-radius: 12px;

    background:
        linear-gradient(
            135deg,
            #fff7f7,
            #fffafa
        );

    color: #842029;

    box-shadow:
        0 6px 18px rgba(220,53,69,.06);

    animation: teacherFadeUp .45s ease;
}

.teacher-error-summary strong {
    display: block;

    margin-bottom: 8px;

    color: #842029;

    font-size: 14px;
    font-weight: 700;
}

.teacher-error-summary ul {
    margin: 0;
    padding-left: 20px;

    color: #842029;

    font-size: 13px;
    line-height: 1.7;
}


/* =========================================================
   FORM CARDS
========================================================= */

.teacher-form-card {
    position: relative;

    margin-bottom: 20px;

    overflow: hidden;

    background: #ffffff;

    border: 1px solid var(--teacher-border);

    border-radius: 16px;

    box-shadow: var(--teacher-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}

.teacher-form-card:hover {
    transform: translateY(-2px);

    border-color: #d5e3f4;

    box-shadow: var(--teacher-shadow-hover);
}


/* =========================================================
   SECTION HEADER
========================================================= */

.teacher-section-header {
    position: relative;

    display: flex;
    align-items: center;

    gap: 14px;

    padding: 19px 23px;

    border-bottom: 1px solid #edf1f6;

    background:
        linear-gradient(
            135deg,
            #ffffff,
            #f9fbff
        );
}

.teacher-section-header::after {
    content: "";

    position: absolute;

    left: 0;
    bottom: 0;

    width: 100%;
    height: 2px;

    background:
        linear-gradient(
            90deg,
            #147cf5,
            #6c63ff,
            #00b8d9,
            transparent
        );

    opacity: .55;
}

.teacher-section-icon {
    width: 43px;
    height: 43px;

    flex: 0 0 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background:
        linear-gradient(
            135deg,
            #eaf3ff,
            #f0edff
        );

    color: var(--teacher-primary);

    font-size: 18px;

    box-shadow:
        inset 0 0 0 1px rgba(20,124,245,.06);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        background .3s ease;
}

.teacher-form-card:hover .teacher-section-icon {
    transform: rotate(-4deg) scale(1.07);

    background:
        linear-gradient(
            135deg,
            #147cf5,
            #6c63ff
        );

    color: #ffffff;

    box-shadow:
        0 7px 16px rgba(20,124,245,.20);
}

.teacher-section-title {
    margin: 0;

    color: #17213c;

    font-size: 16px;
    font-weight: 750;
}

.teacher-section-description {
    margin: 4px 0 0;

    color: #8994a7;

    font-size: 12px;
}


/* =========================================================
   FORM BODY
========================================================= */

.teacher-section-body {
    padding: 24px;

    background: #ffffff;
}


/* =========================================================
   FORM GRID
========================================================= */

.teacher-form-row {
    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    gap: 19px;

    margin-bottom: 19px;
}

.teacher-form-row.three {
    grid-template-columns:
        repeat(3, minmax(0, 1fr));
}

.teacher-form-row:last-child {
    margin-bottom: 0;
}

.teacher-form-group {
    min-width: 0;

    display: flex;
    flex-direction: column;
}

.teacher-form-group.full {
    grid-column: 1 / -1;
}


/* =========================================================
   LABELS
========================================================= */

.teacher-form-label {
    margin-bottom: 8px;

    color: #344054;

    font-size: 13px;
    font-weight: 650;
}

.teacher-required {
    color: #e04444;
    margin-left: 2px;
}


/* =========================================================
   INPUTS
========================================================= */

.teacher-form-control,
.teacher-form-select,
.teacher-form-textarea {
    width: 100%;

    border: 1px solid #dce4ee;

    border-radius: 9px;

    background: #ffffff;

    color: #17213c;

    font-family: inherit;
    font-size: 13px;

    outline: none;

    box-sizing: border-box;

    transition:
        border-color .25s ease,
        box-shadow .25s ease,
        background .25s ease,
        transform .25s ease;
}

.teacher-form-control,
.teacher-form-select {
    height: 44px;
    padding: 0 13px;
}

.teacher-form-textarea {
    min-height: 98px;

    padding: 11px 13px;

    resize: vertical;

    line-height: 1.5;
}

.teacher-form-control::placeholder,
.teacher-form-textarea::placeholder {
    color: #a1aaba;
}


/* Hover */

.teacher-form-control:hover,
.teacher-form-select:hover,
.teacher-form-textarea:hover {
    border-color: #b9cce3;

    background: #fcfdff;

    box-shadow:
        0 3px 10px rgba(30,50,80,.04);
}


/* Focus */

.teacher-form-control:focus,
.teacher-form-select:focus,
.teacher-form-textarea:focus {
    border-color: var(--teacher-primary);

    background: #ffffff;

    box-shadow:
        0 0 0 3px rgba(20,124,245,.10),
        0 5px 14px rgba(20,124,245,.07);

    transform: translateY(-1px);
}


/* Select */

.teacher-form-select {
    cursor: pointer;
}

.teacher-form-select option {
    color: #17213c;
    background: #ffffff;
}


/* =========================================================
   HELP / ERRORS
========================================================= */

.teacher-form-help {
    margin-top: 6px;

    color: #8994a7;

    font-size: 11px;
}

.teacher-field-error {
    margin-top: 5px;

    color: #dc3545;

    font-size: 12px;
}


/* =========================================================
   PHOTO AREA
========================================================= */

.teacher-photo-area {
    position: relative;

    display: flex;
    align-items: center;

    gap: 22px;

    padding: 20px;

    border: 1px dashed #cbd9e9;

    border-radius: 13px;

    background:
        linear-gradient(
            135deg,
            #f8fbff,
            #fbfaff
        );

    transition:
        border-color .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}

.teacher-photo-area:hover {
    border-color: #8dbcf1;

    background:
        linear-gradient(
            135deg,
            #f1f8ff,
            #f7f5ff
        );

    box-shadow:
        0 7px 20px rgba(20,124,245,.07);
}

.teacher-photo-preview {
    width: 88px;
    height: 88px;

    flex: 0 0 88px;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;

    border: 3px solid #ffffff;

    border-radius: 50%;

    background:
        linear-gradient(
            135deg,
            #eaf3ff,
            #eeeaff
        );

    color: var(--teacher-primary);

    font-size: 29px;

    box-shadow:
        0 0 0 1px #d7e4f3,
        0 7px 18px rgba(20,124,245,.12);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}

.teacher-photo-area:hover .teacher-photo-preview {
    transform: scale(1.05);

    box-shadow:
        0 0 0 4px rgba(20,124,245,.08),
        0 9px 22px rgba(20,124,245,.15);
}

.teacher-photo-preview img {
    width: 100%;
    height: 100%;

    object-fit: cover;
}

.teacher-photo-content {
    flex: 1;
    min-width: 0;
}

.teacher-photo-title {
    display: block;

    margin-bottom: 5px;

    color: #17213c;

    font-size: 14px;
    font-weight: 750;
}

.teacher-photo-info {
    display: block;

    margin-bottom: 12px;

    color: #8994a7;

    font-size: 12px;
}

.teacher-file-input {
    display: block;

    max-width: 100%;

    color: #687386;

    font-size: 12px;
}

.teacher-file-input::file-selector-button {
    margin-right: 9px;

    padding: 8px 13px;

    border: 1px solid #d3dfec;

    border-radius: 8px;

    background: #ffffff;

    color: #344054;

    font-size: 12px;
    font-weight: 650;

    cursor: pointer;

    transition:
        background .25s ease,
        color .25s ease,
        border-color .25s ease,
        transform .25s ease;
}

.teacher-file-input::file-selector-button:hover {
    transform: translateY(-1px);

    background:
        linear-gradient(
            135deg,
            #eaf3ff,
            #f1eeff
        );

    border-color: #bcd5f2;

    color: var(--teacher-primary);
}


/* =========================================================
   FORM ACTIONS
========================================================= */

.teacher-form-actions {
    display: flex;
    align-items: center;
    justify-content: flex-end;

    gap: 11px;

    padding: 18px 23px;

    border-top: 1px solid #edf1f6;

    background:
        linear-gradient(
            135deg,
            #fafcff,
            #f8f9ff
        );
}

.teacher-cancel-btn,
.teacher-save-btn {
    min-width: 130px;

    height: 43px;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 8px;

    padding: 0 18px;

    border-radius: 9px;

    font-size: 13px;
    font-weight: 650;

    text-decoration: none;

    cursor: pointer;

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        background .25s ease,
        border-color .25s ease;
}


/* Cancel */

.teacher-cancel-btn {
    border: 1px solid #dce4ee;

    background: #ffffff;

    color: #687386;
}

.teacher-cancel-btn:hover {
    transform: translateY(-2px);

    border-color: #c7d5e5;

    background: #f4f8fd;

    color: #344054;

    box-shadow:
        0 7px 15px rgba(30,50,80,.08);
}


/* Save */

.teacher-save-btn {
    border: 1px solid transparent;

    background:
        linear-gradient(
            135deg,
            #147cf5,
            #5b63e6
        );

    color: #ffffff;

    box-shadow:
        0 7px 17px rgba(20,124,245,.20);
}

.teacher-save-btn:hover {
    transform: translateY(-2px);

    background:
        linear-gradient(
            135deg,
            #1268ca,
            #514bd5
        );

    color: #ffffff;

    box-shadow:
        0 11px 23px rgba(20,124,245,.27);
}

.teacher-save-btn i,
.teacher-cancel-btn i {
    transition: transform .25s ease;
}

.teacher-save-btn:hover i {
    transform: scale(1.15);
}


/* =========================================================
   TEACHER MANAGEMENT
========================================================= */

.teacher-management-card {
    position: relative;

    overflow: hidden;

    margin-top: 20px;

    background: #ffffff;

    border: 1px solid #e1e8f1;

    border-radius: 17px;

    box-shadow: var(--teacher-shadow);

    transition:
        transform .3s ease,
        box-shadow .3s ease;
}

.teacher-management-card:hover {
    box-shadow:
        0 14px 35px rgba(30,50,80,.09);
}


/* Header */

.teacher-management-header {
    position: relative;

    display: flex;
    align-items: center;

    gap: 14px;

    padding: 20px 23px;

    overflow: hidden;

    border-bottom: 1px solid #edf1f6;

    background:
        linear-gradient(
            135deg,
            #ffffff,
            #f7faff
        );
}

.teacher-management-header::after {
    content: "";

    position: absolute;

    right: -45px;
    top: -65px;

    width: 160px;
    height: 160px;

    border-radius: 50%;

    background:
        linear-gradient(
            135deg,
            rgba(20,124,245,.07),
            rgba(108,99,255,.06)
        );
}

.teacher-management-icon {
    width: 44px;
    height: 44px;

    flex: 0 0 44px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background:
        linear-gradient(
            135deg,
            #147cf5,
            #6c63ff
        );

    color: #ffffff;

    font-size: 18px;

    box-shadow:
        0 7px 16px rgba(20,124,245,.18);

    transition:
        transform .3s ease;
}

.teacher-management-card:hover .teacher-management-icon {
    transform: rotate(4deg) scale(1.06);
}

.teacher-management-title {
    margin: 0;

    color: #17213c;

    font-size: 17px;
    font-weight: 750;
}

.teacher-management-description {
    margin: 4px 0 0;

    color: #8994a7;

    font-size: 12px;
}


/* Grid */

.teacher-management-grid {
    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 15px;

    padding: 21px 23px;

    background:
        linear-gradient(
            135deg,
            #fbfdff,
            #faf9ff
        );
}


/* Management item */

.teacher-management-item {
    position: relative;

    display: flex;
    align-items: center;

    gap: 13px;

    min-width: 0;

    padding: 17px;

    overflow: hidden;

    border: 1px solid #e2e8f1;

    border-radius: 12px;

    background: #ffffff;

    color: #17213c;

    text-decoration: none;

    box-shadow:
        0 3px 10px rgba(30,50,80,.035);

    transition:
        transform .3s ease,
        border-color .3s ease,
        box-shadow .3s ease,
        background .3s ease;
}

.teacher-management-item::before {
    content: "";

    position: absolute;

    left: 0;
    top: 0;

    width: 3px;
    height: 100%;

    background:
        linear-gradient(
            180deg,
            #147cf5,
            #6c63ff
        );

    transform: scaleY(0);

    transform-origin: center;

    transition:
        transform .3s ease;
}

.teacher-management-item:hover {
    transform: translateY(-4px);

    border-color: #c7dcf5;

    background:
        linear-gradient(
            135deg,
            #ffffff,
            #f7faff
        );

    color: #17213c;

    box-shadow:
        0 12px 26px rgba(20,124,245,.11);
}

.teacher-management-item:hover::before {
    transform: scaleY(1);
}


/* Management icon */

.teacher-management-item-icon {
    width: 43px;
    height: 43px;

    flex: 0 0 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 11px;

    background:
        linear-gradient(
            135deg,
            #eaf3ff,
            #f0edff
        );

    color: #147cf5;

    font-size: 17px;

    transition:
        transform .3s ease,
        background .3s ease,
        color .3s ease,
        box-shadow .3s ease;
}

.teacher-management-item:hover
.teacher-management-item-icon {
    transform: scale(1.08);

    background:
        linear-gradient(
            135deg,
            #147cf5,
            #6c63ff
        );

    color: #ffffff;

    box-shadow:
        0 7px 15px rgba(20,124,245,.18);
}


/* Content */

.teacher-management-item-content {
    flex: 1;
    min-width: 0;
}

.teacher-management-item-content h3 {
    margin: 0 0 5px;

    color: #17213c;

    font-size: 13px;
    font-weight: 750;
}

.teacher-management-item-content p {
    margin: 0;

    color: #8994a7;

    font-size: 11px;
    line-height: 1.5;
}


/* Arrow */

.teacher-management-arrow {
    width: 29px;
    height: 29px;

    flex: 0 0 29px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 8px;

    background: #f3f6fa;

    color: #7b8798;

    font-size: 12px;

    transition:
        transform .3s ease,
        background .3s ease,
        color .3s ease;
}

.teacher-management-item:hover
.teacher-management-arrow {
    transform: translateX(4px);

    background: #eaf3ff;

    color: #147cf5;
}


/* =========================================================
   ANIMATION
========================================================= */

@keyframes teacherFadeUp {

    from {
        opacity: 0;
        transform: translateY(10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}

.teacher-form-card,
.teacher-management-card {
    animation: teacherFadeUp .45s ease both;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1100px) {

    .teacher-form-row.three {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

    .teacher-management-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}


@media (max-width: 768px) {

    .teacher-create-page {
        padding: 8px 0 30px;
    }

    .teacher-page-header {
        align-items: flex-start;
        flex-direction: column;

        padding: 19px;
    }

    .teacher-page-title {
        font-size: 25px;
    }

    .teacher-back-btn {
        width: 100%;
    }

    .teacher-form-row,
    .teacher-form-row.three {
        grid-template-columns: 1fr;
    }

    .teacher-section-body {
        padding: 18px;
    }

    .teacher-section-header {
        padding: 17px 18px;
    }

    .teacher-photo-area {
        align-items: flex-start;
    }

    .teacher-form-actions {
        flex-direction: column-reverse;

        padding: 17px;
    }

    .teacher-cancel-btn,
    .teacher-save-btn {
        width: 100%;
    }

    .teacher-management-grid {
        grid-template-columns: 1fr;

        padding: 17px;
    }

}


@media (max-width: 575px) {

    .teacher-page-title {
        font-size: 22px;
    }

    .teacher-page-subtitle {
        font-size: 13px;
    }

    .teacher-section-icon,
    .teacher-management-icon {
        width: 38px;
        height: 38px;
        flex-basis: 38px;
    }

    .teacher-photo-area {
        flex-direction: column;
    }

    .teacher-photo-content {
        width: 100%;
    }

    .teacher-management-item {
        padding: 14px;
    }

}
</style>

<div class="teacher-create-page">

    {{-- =====================================================
         PAGE HEADER
    ====================================================== --}}

    <div class="teacher-page-header">

        <div>
            <h1 class="teacher-page-title">
                Add Teacher
            </h1>

            <p class="teacher-page-subtitle">
                Add a new teacher and their professional information.
            </p>
        </div>

        <a
            href="{{ route('admin.teachers.index') }}"
            class="teacher-back-btn"
        >
            <i class="bi bi-arrow-left"></i>
            Back to Teachers
        </a>

    </div>


    {{-- =====================================================
         VALIDATION ERRORS
    ====================================================== --}}

    @if($errors->any())

        <div class="teacher-error-summary">

            <strong>
                <i class="bi bi-exclamation-triangle-fill me-1"></i>
                Please correct the following errors:
            </strong>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif


    {{-- =====================================================
         TEACHER FORM
    ====================================================== --}}

    <form
        action="{{ route('admin.teachers.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf


        {{-- =================================================
             PERSONAL INFORMATION
        ================================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-section-header">

                <div class="teacher-section-icon">
                    <i class="bi bi-person-fill"></i>
                </div>

                <div>
                    <h2 class="teacher-section-title">
                        Personal Information
                    </h2>

                    <p class="teacher-section-description">
                        Enter the teacher's basic personal details.
                    </p>
                </div>

            </div>


            <div class="teacher-section-body">

                <div class="teacher-form-row three">

                    {{-- Teacher ID --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Teacher ID
                            <span class="teacher-required">*</span>
                        </label>

                        <input
                            type="text"
                            name="teacher_id"
                            class="teacher-form-control"
                            value="{{ old('teacher_id') }}"
                            placeholder="e.g. TCH-001"
                            required
                        >

                        @error('teacher_id')
                            <div class="teacher-field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- First Name --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            First Name
                            <span class="teacher-required">*</span>
                        </label>

                        <input
                            type="text"
                            name="first_name"
                            class="teacher-form-control"
                            value="{{ old('first_name') }}"
                            placeholder="Enter first name"
                            required
                        >

                        @error('first_name')
                            <div class="teacher-field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Last Name --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Last Name
                            <span class="teacher-required">*</span>
                        </label>

                        <input
                            type="text"
                            name="last_name"
                            class="teacher-form-control"
                            value="{{ old('last_name') }}"
                            placeholder="Enter last name"
                            required
                        >

                        @error('last_name')
                            <div class="teacher-field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>


                <div class="teacher-form-row three">

                    {{-- Gender --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Gender
                        </label>

                        <select
                            name="gender"
                            class="teacher-form-select"
                        >
                            <option value="">
                                Select Gender
                            </option>

                            <option
                                value="Male"
                                {{ old('gender') == 'Male' ? 'selected' : '' }}
                            >
                                Male
                            </option>

                            <option
                                value="Female"
                                {{ old('gender') == 'Female' ? 'selected' : '' }}
                            >
                                Female
                            </option>

                            <option
                                value="Other"
                                {{ old('gender') == 'Other' ? 'selected' : '' }}
                            >
                                Other
                            </option>

                        </select>

                    </div>


                    {{-- Date of Birth --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Date of Birth
                        </label>

                        <input
                            type="date"
                            name="date_of_birth"
                            class="teacher-form-control"
                            value="{{ old('date_of_birth') }}"
                        >

                    </div>


                    {{-- Status --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Status
                            <span class="teacher-required">*</span>
                        </label>

                        <select
                            name="status"
                            class="teacher-form-select"
                            required
                        >

                            <option
                                value="active"
                                {{ old('status', 'active') == 'active' ? 'selected' : '' }}
                            >
                                Active
                            </option>

                            <option
                                value="inactive"
                                {{ old('status') == 'inactive' ? 'selected' : '' }}
                            >
                                Inactive
                            </option>

                        </select>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             CONTACT INFORMATION
        ================================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-section-header">

                <div class="teacher-section-icon">
                    <i class="bi bi-telephone-fill"></i>
                </div>

                <div>
                    <h2 class="teacher-section-title">
                        Contact Information
                    </h2>

                    <p class="teacher-section-description">
                        Provide the teacher's contact and address details.
                    </p>
                </div>

            </div>


            <div class="teacher-section-body">

                <div class="teacher-form-row">

                    {{-- Email --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Email Address
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="teacher-form-control"
                            value="{{ old('email') }}"
                            placeholder="teacher@example.com"
                        >

                        @error('email')
                            <div class="teacher-field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    {{-- Phone --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Phone Number
                            <span class="teacher-required">*</span>
                        </label>

                        <input
                            type="text"
                            name="phone"
                            class="teacher-form-control"
                            value="{{ old('phone') }}"
                            placeholder="Enter phone number"
                            required
                        >

                        @error('phone')
                            <div class="teacher-field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>


                <div class="teacher-form-row">

                    {{-- Alternate Phone --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Alternate Phone
                        </label>

                        <input
                            type="text"
                            name="alternate_phone"
                            class="teacher-form-control"
                            value="{{ old('alternate_phone') }}"
                            placeholder="Optional alternate number"
                        >

                    </div>


                    {{-- City --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            City
                        </label>

                        <input
                            type="text"
                            name="city"
                            class="teacher-form-control"
                            value="{{ old('city') }}"
                            placeholder="Enter city"
                        >

                    </div>

                </div>


                <div class="teacher-form-row">

                    {{-- State --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            State
                        </label>

                        <input
                            type="text"
                            name="state"
                            class="teacher-form-control"
                            value="{{ old('state') }}"
                            placeholder="Enter state"
                        >

                    </div>


                    {{-- Address --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Address
                        </label>

                        <textarea
                            name="address"
                            class="teacher-form-textarea"
                            placeholder="Enter complete address"
                        >{{ old('address') }}</textarea>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             PROFESSIONAL INFORMATION
        ================================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-section-header">

                <div class="teacher-section-icon">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>

                <div>
                    <h2 class="teacher-section-title">
                        Professional Information
                    </h2>

                    <p class="teacher-section-description">
                        Enter teaching experience and professional details.
                    </p>
                </div>

            </div>


            <div class="teacher-section-body">

                <div class="teacher-form-row three">

                    {{-- Qualification --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Qualification
                        </label>

                        <input
                            type="text"
                            name="qualification"
                            class="teacher-form-control"
                            value="{{ old('qualification') }}"
                            placeholder="e.g. M.Ed, B.Ed"
                        >

                    </div>


                    {{-- Subject --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Subject
                        </label>

                        <input
                            type="text"
                            name="subject"
                            class="teacher-form-control"
                            value="{{ old('subject') }}"
                            placeholder="e.g. Mathematics"
                        >

                    </div>


                    {{-- Specialization --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Specialization
                        </label>

                        <input
                            type="text"
                            name="specialization"
                            class="teacher-form-control"
                            value="{{ old('specialization') }}"
                            placeholder="e.g. Computer Science"
                        >

                    </div>

                </div>


                <div class="teacher-form-row three">

                    {{-- Experience --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Experience
                        </label>

                        <input
                            type="number"
                            name="experience"
                            class="teacher-form-control"
                            value="{{ old('experience') }}"
                            placeholder="Years"
                            min="0"
                            max="99.9"
                            step="0.1"
                        >

                        <div class="teacher-form-help">
                            Enter experience in years.
                        </div>

                    </div>


                    {{-- Employment Type --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Employment Type
                        </label>

                        <select
                            name="employment_type"
                            class="teacher-form-select"
                        >

                            <option value="">
                                Select Type
                            </option>

                            <option
                                value="Full Time"
                                {{ old('employment_type') == 'Full Time' ? 'selected' : '' }}
                            >
                                Full Time
                            </option>

                            <option
                                value="Part Time"
                                {{ old('employment_type') == 'Part Time' ? 'selected' : '' }}
                            >
                                Part Time
                            </option>

                            <option
                                value="Contract"
                                {{ old('employment_type') == 'Contract' ? 'selected' : '' }}
                            >
                                Contract
                            </option>

                        </select>

                    </div>


                    {{-- Joining Date --}}
                    <div class="teacher-form-group">

                        <label class="teacher-form-label">
                            Joining Date
                        </label>

                        <input
                            type="date"
                            name="joining_date"
                            class="teacher-form-control"
                            value="{{ old('joining_date') }}"
                        >

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             PROFILE PHOTO
        ================================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-section-header">

                <div class="teacher-section-icon">
                    <i class="bi bi-camera-fill"></i>
                </div>

                <div>
                    <h2 class="teacher-section-title">
                        Profile Photo
                    </h2>

                    <p class="teacher-section-description">
                        Upload a professional profile photo for the teacher.
                    </p>
                </div>

            </div>


            <div class="teacher-section-body">

                <div class="teacher-photo-area">

                    <div
                        class="teacher-photo-preview"
                        id="photoPreview"
                    >
                        <i class="bi bi-person-fill"></i>
                    </div>


                    <div class="teacher-photo-content">

                        <strong class="teacher-photo-title">
                            Teacher Profile Photo
                        </strong>

                        <span class="teacher-photo-info">
                            JPG, JPEG, PNG or WEBP. Maximum size 2MB.
                        </span>

                        <input
                            type="file"
                            name="profile_photo"
                            id="profilePhoto"
                            class="teacher-file-input"
                            accept=".jpg,.jpeg,.png,.webp"
                        >

                        @error('profile_photo')
                            <div class="teacher-field-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
             ACTIONS
        ================================================== --}}

        <div class="teacher-form-card">

            <div class="teacher-form-actions">

                <a
                    href="{{ route('admin.teachers.index') }}"
                    class="teacher-cancel-btn"
                >
                    <i class="bi bi-x-lg"></i>
                    Cancel
                </a>

                <button
                    type="submit"
                    class="teacher-save-btn"
                >
                    <i class="bi bi-check-lg"></i>
                    Save Teacher
                </button>

            </div>

        </div>

    </form>


    {{-- =====================================================
         TEACHER MANAGEMENT
         These pages are accessed from Add Teacher
    ====================================================== --}}

    <div class="teacher-management-card">

        <div class="teacher-management-header">

            <div class="teacher-management-icon">
                <i class="bi bi-grid-1x2-fill"></i>
            </div>

            <div>
                <h2 class="teacher-management-title">
                    Teacher Management
                </h2>

                <p class="teacher-management-description">
                    Manage teachers, class assignments and teacher responsibilities.
                </p>
            </div>

        </div>


        <div class="teacher-management-grid">

            {{-- ALL TEACHERS --}}
            <a
                href="{{ route('admin.teachers.index') }}"
                class="teacher-management-item"
            >

                <div class="teacher-management-item-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <div class="teacher-management-item-content">

                    <h3>
                        All Teachers
                    </h3>

                    <p>
                        View, search and manage all registered teachers.
                    </p>

                </div>

                <div class="teacher-management-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>

            </a>


            {{-- ASSIGN CLASS TEACHER --}}
            <a
                href="{{ route('admin.class-teacher-assignments.create') }}"
                class="teacher-management-item"
            >

                <div class="teacher-management-item-icon">
                    <i class="bi bi-person-check-fill"></i>
                </div>

                <div class="teacher-management-item-content">

                    <h3>
                        Assign Class Teacher
                    </h3>

                    <p>
                        Assign a teacher to a class and section.
                    </p>

                </div>

                <div class="teacher-management-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>

            </a>


            {{-- CLASS TEACHER ASSIGNMENTS --}}
            <a
                href="{{ route('admin.class-teacher-assignments.index') }}"
                class="teacher-management-item"
            >

                <div class="teacher-management-item-icon">
                    <i class="bi bi-diagram-3-fill"></i>
                </div>

                <div class="teacher-management-item-content">

                    <h3>
                        Class Teacher Assignments
                    </h3>

                    <p>
                        View and manage existing class teacher assignments.
                    </p>

                </div>

                <div class="teacher-management-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>

            </a>

        </div>

    </div>

</div>


{{-- =========================================================
     PROFILE PHOTO PREVIEW
========================================================== --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    const photoInput = document.getElementById('profilePhoto');
    const photoPreview = document.getElementById('photoPreview');

    if (!photoInput || !photoPreview) {
        return;
    }

    photoInput.addEventListener('change', function (event) {

        const file = event.target.files[0];

        if (!file) {

            photoPreview.innerHTML =
                '<i class="bi bi-person-fill"></i>';

            return;
        }

        const reader = new FileReader();

        reader.onload = function (e) {

            photoPreview.innerHTML =
                '<img src="' +
                e.target.result +
                '" alt="Profile Preview">';

        };

        reader.readAsDataURL(file);

    });

});
</script>

</x-ladmin-panel>