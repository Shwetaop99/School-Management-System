<x-ladmin-panel title="Teacher QR Code">


<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

<style>
    /* =========================================================
       TEACHER QR — LIGHT PREMIUM THEME
    ========================================================== */

    :root {
        --qr-primary: #147cf5;
        --qr-primary-dark: #1268ca;
        --qr-secondary: #6c63ff;
        --qr-accent: #00b8d9;

        --qr-bg: #f3f7fc;
        --qr-card: #ffffff;
        --qr-text: #17213c;
        --qr-muted: #7b8497;
        --qr-border: #e2e8f1;

        --qr-blue-light: #eaf3ff;
        --qr-purple-light: #f0edff;
        --qr-cyan-light: #e8faff;

        --qr-success: #16a34a;
        --qr-success-light: #eaf8ef;

        --qr-shadow:
            0 10px 35px rgba(24, 52, 91, .08);

        --qr-shadow-hover:
            0 18px 50px rgba(20, 124, 245, .15);
    }


    /* =========================================================
       GLOBAL
    ========================================================== */

    html,
    body {
        background:
            radial-gradient(
                circle at 10% 10%,
                rgba(20, 124, 245, .05),
                transparent 28%
            ),
            radial-gradient(
                circle at 90% 20%,
                rgba(108, 99, 255, .05),
                transparent 25%
            ),
            var(--qr-bg) !important;

        color: var(--qr-text) !important;
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
        color: var(--qr-text) !important;
        border-bottom: 1px solid #edf1f6 !important;
    }

    .app-sidebar .brand-text,
    .main-sidebar .brand-text {
        color: var(--qr-text) !important;
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

    .app-sidebar .nav-link:hover,
    .main-sidebar .nav-link:hover {
        background:
            linear-gradient(
                135deg,
                #eef6ff,
                #f4f1ff
            ) !important;

        color: var(--qr-primary) !important;

        transform: translateX(3px);

        box-shadow:
            0 4px 12px rgba(20, 124, 245, .06);
    }

    .app-sidebar .nav-link:hover i,
    .app-sidebar .nav-link:hover .nav-icon,
    .main-sidebar .nav-link:hover i,
    .main-sidebar .nav-link:hover .nav-icon {
        color: var(--qr-primary) !important;

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

        color: var(--qr-primary) !important;

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
                var(--qr-primary),
                var(--qr-secondary)
            );
    }


    /* =========================================================
       LIGHT HEADER
    ========================================================== */

    .app-header,
    .main-header,
    .navbar,
    .navbar-dark,
    .navbar-black {
        background:
            rgba(255, 255, 255, .96) !important;

        color: var(--qr-text) !important;

        border-bottom:
            1px solid #e4eaf2 !important;

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
        color: var(--qr-primary) !important;
    }


    /* =========================================================
       PAGE
    ========================================================== */

    .teacher-qr-page {
        position: relative;

        min-height: calc(100vh - 100px);

        padding:
            25px 15px 55px;

        overflow: hidden;

        background:
            radial-gradient(
                circle at 5% 0%,
                rgba(20, 124, 245, .07),
                transparent 28%
            ),
            radial-gradient(
                circle at 95% 10%,
                rgba(108, 99, 255, .06),
                transparent 25%
            );
    }

    .teacher-qr-page::before {
        content: "";

        position: absolute;

        width: 280px;
        height: 280px;

        top: 40px;
        right: -120px;

        border-radius: 50%;

        background:
            radial-gradient(
                circle,
                rgba(20, 124, 245, .08),
                transparent 70%
            );

        pointer-events: none;
    }

    .teacher-qr-page::after {
        content: "";

        position: absolute;

        width: 240px;
        height: 240px;

        bottom: 20px;
        left: -130px;

        border-radius: 50%;

        background:
            radial-gradient(
                circle,
                rgba(108, 99, 255, .07),
                transparent 70%
            );

        pointer-events: none;
    }

    .qr-wrapper {
        position: relative;
        z-index: 1;

        width: 100%;
        max-width: 720px;

        margin: 0 auto;
    }


    /* =========================================================
       HEADER
    ========================================================== */

    .qr-header {
        text-align: center;

        margin-bottom: 27px;

        animation:
            qrHeaderIn .6s ease both;
    }

    .qr-icon {
        position: relative;

        width: 72px;
        height: 72px;

        margin: 0 auto 15px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 20px;

        background:
            linear-gradient(
                135deg,
                var(--qr-primary),
                var(--qr-secondary)
            );

        color: #ffffff;

        font-size: 30px;

        box-shadow:
            0 12px 30px rgba(20, 124, 245, .23);

        animation:
            qrIconFloat 3s ease-in-out infinite;
    }

    .qr-icon::after {
        content: "";

        position: absolute;

        inset: -6px;

        border-radius: 24px;

        border: 1px solid rgba(20, 124, 245, .15);

        animation:
            qrPulse 2.5s ease-in-out infinite;
    }

    .qr-header h1 {
        margin: 0;

        color: #16213e;

        font-size: 30px;
        font-weight: 800;

        letter-spacing: -.7px;
    }

    .qr-header p {
        margin: 8px 0 0;

        color: var(--qr-muted);

        font-size: 14px;
    }


    /* =========================================================
       MAIN CARD
    ========================================================== */

    .qr-card {
        position: relative;

        overflow: hidden;

        background:
            linear-gradient(
                145deg,
                rgba(255,255,255,.98),
                rgba(249,252,255,.98)
            );

        border:
            1px solid rgba(20, 124, 245, .10);

        border-radius: 24px;

        padding: 38px 35px;

        text-align: center;

        box-shadow:
            0 20px 60px rgba(24, 52, 91, .10);

        animation:
            qrCardIn .7s ease .1s both;

        transition:
            box-shadow .35s ease,
            transform .35s ease;
    }

    .qr-card:hover {
        transform: translateY(-2px);

        box-shadow:
            var(--qr-shadow-hover);
    }

    .qr-card::before {
        content: "";

        position: absolute;

        top: 0;
        left: 0;
        right: 0;

        height: 4px;

        background:
            linear-gradient(
                90deg,
                var(--qr-primary),
                var(--qr-secondary),
                var(--qr-accent)
            );
    }

    .qr-card::after {
        content: "";

        position: absolute;

        top: -80px;
        right: -80px;

        width: 190px;
        height: 190px;

        border-radius: 50%;

        background:
            radial-gradient(
                circle,
                rgba(20,124,245,.055),
                transparent 70%
            );

        pointer-events: none;
    }


    /* =========================================================
       TEACHER PROFILE
    ========================================================== */

    .teacher-profile-section {
        position: relative;
        z-index: 2;

        margin-bottom: 25px;
    }

    .teacher-avatar {
        position: relative;

        width: 84px;
        height: 84px;

        margin: 0 auto 14px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background:
            linear-gradient(
                135deg,
                #eaf3ff,
                #f0edff
            );

        color: var(--qr-primary);

        font-size: 30px;
        font-weight: 800;

        border:
            4px solid #ffffff;

        box-shadow:
            0 8px 25px rgba(20, 124, 245, .13);

        animation:
            avatarIn .7s ease .25s both;
    }

    .teacher-avatar::before {
        content: "";

        position: absolute;

        inset: -5px;

        border-radius: 50%;

        border:
            1px solid rgba(20, 124, 245, .14);
    }

    .teacher-name {
        color: var(--qr-text);

        font-size: 24px;
        font-weight: 800;

        margin-bottom: 7px;
    }

    .teacher-id {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 7px;

        min-height: 30px;

        padding: 6px 13px;

        border:
            1px solid #d8e7fa;

        border-radius: 50px;

        background:
            linear-gradient(
                135deg,
                #eef6ff,
                #f3f0ff
            );

        color: var(--qr-primary-dark);

        font-size: 12px;
        font-weight: 750;

        box-shadow:
            0 4px 12px rgba(20,124,245,.05);
    }

    .teacher-id i {
        color: var(--qr-secondary);
    }


    /* =========================================================
       QR AREA
    ========================================================== */

    .qr-section {
        position: relative;

        display: flex;
        flex-direction: column;
        align-items: center;

        margin-top: 5px;
    }

    .qr-container {
        position: relative;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        padding: 24px;

        background: #ffffff;

        border:
            1px solid #dfe8f3;

        border-radius: 22px;

        box-shadow:
            0 14px 40px rgba(20, 60, 100, .10);

        transition:
            transform .3s ease,
            box-shadow .3s ease;
    }

    .qr-container:hover {
        transform: translateY(-5px);

        box-shadow:
            0 20px 48px rgba(20, 60, 100, .15);
    }

    /* QR corner frame */

    .qr-container::before,
    .qr-container::after {
        content: "";

        position: absolute;

        width: 25px;
        height: 25px;

        border:
            3px solid var(--qr-primary);

        pointer-events: none;
    }

    .qr-container::before {
        top: 9px;
        left: 9px;

        border-right: 0;
        border-bottom: 0;

        border-radius: 7px 0 0 0;
    }

    .qr-container::after {
        right: 9px;
        bottom: 9px;

        border-left: 0;
        border-top: 0;

        border-radius: 0 0 7px 0;
    }

    #teacherQr {
        width: 280px;
        height: 280px;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    #teacherQr img,
    #teacherQr canvas {
        display: block;

        max-width: 100%;
        height: auto;

        border-radius: 4px;
    }


    /* =========================================================
       QR SCAN LINE EFFECT
    ========================================================== */

    .qr-scan-line {
        position: absolute;

        left: 24px;
        right: 24px;

        top: 24px;

        height: 2px;

        background:
            linear-gradient(
                90deg,
                transparent,
                var(--qr-primary),
                var(--qr-accent),
                transparent
            );

        box-shadow:
            0 0 10px rgba(20,124,245,.45);

        opacity: .65;

        pointer-events: none;

        animation:
            qrScanLine 2.7s ease-in-out infinite;
    }


    /* =========================================================
       QR STATUS
    ========================================================== */

    .qr-status {
        display: inline-flex;
        align-items: center;

        gap: 7px;

        margin-top: 17px;

        padding: 7px 13px;

        border:
            1px solid #ccefe0;

        border-radius: 50px;

        background:
            var(--qr-success-light);

        color: #168052;

        font-size: 11px;
        font-weight: 750;
    }

    .qr-status-dot {
        width: 7px;
        height: 7px;

        border-radius: 50%;

        background:
            currentColor;

        box-shadow:
            0 0 0 4px rgba(22,163,74,.08);

        animation:
            statusPulse 1.8s ease-in-out infinite;
    }


    /* =========================================================
       LOADING
    ========================================================== */

    .qr-loading {
        display: none;

        margin-top: 13px;

        color: var(--qr-muted);

        font-size: 13px;
    }

    .qr-loading.show {
        display: block;
    }

    .qr-loading i {
        margin-right: 5px;

        animation:
            spin 1s linear infinite;
    }


    /* =========================================================
       INSTRUCTION
    ========================================================== */

    .qr-instruction {
        position: relative;

        display: flex;
        align-items: flex-start;

        gap: 13px;

        max-width: 540px;

        margin: 25px auto;

        padding: 16px 17px;

        text-align: left;

        background:
            linear-gradient(
                135deg,
                #f0f7ff,
                #f6f3ff
            );

        border:
            1px solid #dce9f8;

        border-radius: 14px;

        color: #53647b;

        font-size: 13px;

        line-height: 1.55;

        box-shadow:
            0 5px 18px rgba(20,124,245,.04);
    }

    .qr-instruction-icon {
        width: 38px;
        height: 38px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 10px;

        background:
            linear-gradient(
                135deg,
                var(--qr-primary),
                var(--qr-secondary)
            );

        color: #ffffff;

        font-size: 15px;

        box-shadow:
            0 6px 14px rgba(20,124,245,.16);
    }

    .qr-instruction strong {
        display: block;

        margin-bottom: 2px;

        color: var(--qr-text);

        font-size: 13px;
    }


    /* =========================================================
       ACTIONS
    ========================================================== */

    .qr-actions {
        display: flex;
        align-items: center;
        justify-content: center;

        gap: 10px;

        flex-wrap: wrap;
    }

    .qr-btn {
        position: relative;

        min-width: 150px;
        min-height: 43px;

        padding: 0 18px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 8px;

        border: 0;
        border-radius: 10px;

        font-size: 13px;
        font-weight: 700;

        text-decoration: none !important;

        cursor: pointer;

        overflow: hidden;

        transition:
            transform .25s ease,
            box-shadow .25s ease,
            background .25s ease;
    }

    .qr-btn-primary {
        color: #ffffff !important;

        background:
            linear-gradient(
                135deg,
                var(--qr-primary),
                var(--qr-secondary)
            );

        box-shadow:
            0 7px 18px rgba(20,124,245,.20);
    }

    .qr-btn-primary::before {
        content: "";

        position: absolute;

        top: 0;
        left: -110%;

        width: 75%;
        height: 100%;

        background:
            linear-gradient(
                90deg,
                transparent,
                rgba(255,255,255,.24),
                transparent
            );

        transform: skewX(-20deg);

        transition:
            left .55s ease;
    }

    .qr-btn-primary:hover::before {
        left: 135%;
    }

    .qr-btn-primary:hover {
        color: #ffffff !important;

        transform:
            translateY(-3px);

        box-shadow:
            0 12px 25px rgba(20,124,245,.28);
    }

    .qr-btn-primary i {
        transition:
            transform .25s ease;
    }

    .qr-btn-primary:hover i {
        transform:
            translateY(-1px)
            scale(1.08);
    }

    .qr-btn-secondary {
        color: #536078 !important;

        background: #ffffff;

        border:
            1px solid #dfe6ef;

        box-shadow:
            0 4px 12px rgba(30,50,80,.04);
    }

    .qr-btn-secondary:hover {
        color: var(--qr-secondary) !important;

        background:
            var(--qr-purple-light);

        border-color:
            #d8d0ff;

        transform:
            translateY(-3px);

        box-shadow:
            0 8px 18px rgba(108,99,255,.10);
    }

    .qr-btn-secondary i {
        transition:
            transform .25s ease;
    }

    .qr-btn-secondary:hover i {
        transform:
            translateX(-3px);
    }


    /* =========================================================
       QR VALUE
    ========================================================== */

    .qr-value {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 5px;

        margin-top: 18px;

        padding: 6px 10px;

        border-radius: 8px;

        background: #f8fafc;

        color: #94a3b8;

        font-size: 11px;
    }

    .qr-value strong {
        color: #64748b;

        font-weight: 750;
    }


    /* =========================================================
       ACCESSIBILITY
    ========================================================== */

    .qr-btn:focus-visible {
        outline:
            3px solid rgba(20,124,245,.18);

        outline-offset: 3px;
    }


    /* =========================================================
       ANIMATIONS
    ========================================================== */

    @keyframes qrHeaderIn {
        from {
            opacity: 0;
            transform: translateY(-15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes qrCardIn {
        from {
            opacity: 0;
            transform:
                translateY(25px)
                scale(.985);
        }

        to {
            opacity: 1;
            transform:
                translateY(0)
                scale(1);
        }
    }

    @keyframes avatarIn {
        from {
            opacity: 0;
            transform: scale(.75);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes qrIconFloat {
        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    @keyframes qrPulse {
        0%,
        100% {
            opacity: .35;
            transform: scale(1);
        }

        50% {
            opacity: .75;
            transform: scale(1.04);
        }
    }

    @keyframes qrScanLine {
        0% {
            top: 24px;
            opacity: .1;
        }

        20% {
            opacity: .7;
        }

        50% {
            top: calc(100% - 26px);
            opacity: .7;
        }

        80% {
            opacity: .7;
        }

        100% {
            top: 24px;
            opacity: .1;
        }
    }

    @keyframes statusPulse {
        0%,
        100% {
            opacity: .65;
            transform: scale(.9);
        }

        50% {
            opacity: 1;
            transform: scale(1.15);
        }
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }


    /* =========================================================
       RESPONSIVE
    ========================================================== */

    @media (max-width: 768px) {

        .teacher-qr-page {
            padding:
                20px 10px 40px;
        }

        .qr-card {
            padding:
                32px 20px;
        }

        .qr-header h1 {
            font-size: 27px;
        }

        .teacher-name {
            font-size: 22px;
        }
    }


    @media (max-width: 576px) {

        .teacher-qr-page {
            padding:
                18px 8px 35px;
        }

        .qr-wrapper {
            max-width: 100%;
        }

        .qr-header {
            margin-bottom: 20px;
        }

        .qr-icon {
            width: 62px;
            height: 62px;

            border-radius: 17px;

            font-size: 26px;
        }

        .qr-header h1 {
            font-size: 23px;
        }

        .qr-header p {
            font-size: 13px;
        }

        .qr-card {
            padding:
                28px 13px;

            border-radius: 20px;
        }

        .teacher-avatar {
            width: 72px;
            height: 72px;

            font-size: 26px;
        }

        .teacher-name {
            font-size: 20px;
        }

        .teacher-id {
            font-size: 11px;
        }

        .qr-container {
            padding: 17px;

            border-radius: 18px;
        }

        #teacherQr {
            width: 230px;
            height: 230px;
        }

        .qr-scan-line {
            left: 17px;
            right: 17px;
            top: 17px;
        }

        .qr-instruction {
            padding: 13px;

            font-size: 12px;
        }

        .qr-instruction-icon {
            width: 34px;
            height: 34px;
        }

        .qr-actions {
            flex-direction: column;
        }

        .qr-btn {
            width: 100%;
            min-width: 0;
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
       PRINT
    ========================================================== */

    @media print {

        @page {
            size: A4;
            margin: 15mm;
        }

        html,
        body {
            background: #ffffff !important;
        }

        body * {
            visibility: hidden !important;
        }

        .teacher-qr-page,
        .teacher-qr-page * {
            visibility: visible !important;
        }

        .teacher-qr-page {
            position: absolute;

            inset: 0;

            min-height: auto;

            padding: 10px !important;

            background: #ffffff !important;
        }

        .teacher-qr-page::before,
        .teacher-qr-page::after,
        .qr-icon::after,
        .qr-card::after,
        .qr-scan-line {
            display: none !important;
        }

        .qr-wrapper {
            max-width: 620px;

            margin: 0 auto;
        }

        .qr-header {
            margin-bottom: 15px;

            animation: none !important;
        }

        .qr-icon {
            animation: none !important;

            width: 55px;
            height: 55px;

            box-shadow: none !important;
        }

        .qr-header h1 {
            font-size: 24px;
        }

        .qr-card {
            padding: 20px;

            border:
                1px solid #ddd !important;

            border-radius: 15px;

            box-shadow: none !important;

            animation: none !important;
        }

        .teacher-avatar {
            animation: none !important;

            box-shadow: none !important;
        }

        .qr-container {
            padding: 15px;

            border:
                1px solid #ddd !important;

            box-shadow: none !important;

            transform: none !important;
        }

        .qr-instruction,
        .qr-actions,
        .qr-value,
        .qr-loading,
        .qr-status {
            display: none !important;
        }
    }
</style>


<div class="teacher-qr-page">

    <div class="qr-wrapper">

        <!-- =====================================================
             HEADER
        ====================================================== -->

        <div class="qr-header">

            <div class="qr-icon">
                <i class="fas fa-qrcode"></i>
            </div>

            <h1>
                Teacher QR Code
            </h1>

            <p>
                Scan this code to mark teacher attendance
            </p>

        </div>


        <!-- =====================================================
             MAIN QR CARD
        ====================================================== -->

        <div class="qr-card">

            <!-- Teacher Profile -->

            <div class="teacher-profile-section">

                <div class="teacher-avatar">

                    {{ strtoupper(substr($teacher->first_name ?? 'T', 0, 1)) }}

                </div>

                <div class="teacher-name">

                    {{ $teacher->first_name }}
                    {{ $teacher->last_name }}

                </div>

                <div class="teacher-id">

                    <i class="fas fa-id-badge"></i>

                    Teacher ID:
                    {{ $teacher->teacher_id }}

                </div>

            </div>


            <!-- QR -->

            <div class="qr-section">

                <div class="qr-container">

                    <div id="teacherQr"></div>

                    <div class="qr-scan-line"></div>

                </div>

                <div class="qr-status">

                    <span class="qr-status-dot"></span>

                    QR Ready for Attendance

                </div>

            </div>


            <!-- Loading -->

            <div id="qrLoading" class="qr-loading show">

                <i class="fas fa-spinner"></i>

                Generating QR code...

            </div>


            <!-- Instruction -->

            <div class="qr-instruction">

                <div class="qr-instruction-icon">

                    <i class="fas fa-camera"></i>

                </div>

                <div>

                    <strong>
                        Attendance Scanner
                    </strong>

                    Ask the teacher to show this QR code
                    to the attendance scanner.
                    The scanner will recognize the teacher
                    automatically.

                </div>

            </div>


            <!-- Actions -->

            <div class="qr-actions">

                <button
                    type="button"
                    class="qr-btn qr-btn-primary"
                    onclick="printQr()">

                    <i class="fas fa-print"></i>

                    Print QR

                </button>

                <a
                    href="{{ route('admin.teachers.index') }}"
                    class="qr-btn qr-btn-secondary">

                    <i class="fas fa-arrow-left"></i>

                    Back to Teachers

                </a>

            </div>


            <!-- QR Value -->

            <div class="qr-value">

                <span>
                    QR value:
                </span>

                <strong>
                    {{ $teacher->teacher_id }}
                </strong>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     QR GENERATOR
========================================================== -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

<script>

    document.addEventListener('DOMContentLoaded', function () {

        const qrElement =
            document.getElementById('teacherQr');

        const loading =
            document.getElementById('qrLoading');

        const teacherId =
            @json($teacher->teacher_id);


        if (!qrElement) {
            return;
        }


        try {

            new QRCode(qrElement, {

                text: teacherId,

                width: 280,

                height: 280,

                colorDark: "#17213c",

                colorLight: "#ffffff",

                correctLevel:
                    QRCode.CorrectLevel.H

            });


            setTimeout(function () {

                if (loading) {
                    loading.classList.remove('show');
                }

            }, 500);


        } catch (error) {

            console.error(
                'QR generation failed:',
                error
            );


            if (loading) {

                loading.innerHTML =
                    '<i class="fas fa-exclamation-circle"></i> ' +
                    'Unable to generate QR code.';

            }

        }

    });


    function printQr() {

        window.print();

    }

</script>


</x-ladmin-panel>
