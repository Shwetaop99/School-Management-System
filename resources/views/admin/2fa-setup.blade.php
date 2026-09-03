<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Set Up 2FA</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .box {
            width: 400px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        p {
            color: #555;
            line-height: 1.5;
        }

        .qr {
            margin: 25px 0;
        }

        .secret {
            background: #f1f1f1;
            padding: 12px;
            border-radius: 5px;
            word-break: break-all;
            font-family: monospace;
            margin: 15px 0 25px;
        }

        input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            font-size: 18px;
            text-align: center;
            letter-spacing: 5px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>Set Up Two-Factor Authentication</h2>

    <p>
        Scan this QR code using Google Authenticator or another
        authenticator app.
    </p>

    <div class="qr">
        {!! $qrCodeUrl !!}
    </div>

    <p>
        If you cannot scan the QR code, enter this secret manually:
    </p>

    <div class="secret">
        {{ $secret }}
    </div>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <p>
        After adding the account, enter the 6-digit code generated
        by your authenticator app.
    </p>

    <form method="POST" action="{{ route('admin.2fa.verify') }}">

        @csrf

        <input
            type="text"
            name="code"
            inputmode="numeric"
            maxlength="6"
            pattern="[0-9]{6}"
            autocomplete="one-time-code"
            placeholder="000000"
            required
        >

        <button type="submit">
            Verify & Continue
        </button>

    </form>

</div>

</body>
</html>