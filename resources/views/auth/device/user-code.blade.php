<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Enter Device Code</title>
<style>
    body { font-family: system-ui, sans-serif; background: #f5f5f5; margin: 0; padding: 40px 20px; }
    .container { max-width: 500px; margin: 0 auto; }
    .card { background: white; border-radius: 12px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
    .logo { text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bold; color: #333; }
    .form-group { margin: 20px 0; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
    .form-control { width: 100%; padding: 12px 16px; border: 2px solid #e1e5e9; border-radius: 8px; font-size: 16px; text-align: center; letter-spacing: 2px; text-transform: uppercase; }
    .form-control:focus { outline: none; border-color: #007bff; }
    .btn { width: 100%; padding: 14px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; }
    .btn-primary { background: #007bff; color: white; }
    .btn-primary:hover { background: #0056b3; }
    .help-text { text-align: center; margin-top: 20px; color: #666; font-size: 14px; }
    .error { background: #f8d7da; color: #721c24; padding: 12px; border-radius: 6px; margin: 15px 0; }
</style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="logo">{{ config('app.name') }}</div>

        <h2 style="text-align: center; margin-bottom: 10px;">Enter Device Code</h2>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">
            Enter the code displayed on your device to continue
        </p>

        @if (session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form method="GET" action="{{ route('passport.device.authorizations.authorize') }}">
            <div class="form-group">
                <label for="user_code">Device Code</label>
                <input
                    type="text"
                    id="user_code"
                    name="user_code"
                    class="form-control"
                    placeholder="Enter your code"
                    maxlength="9"
                    required
                    autofocus>
            </div>

            <button type="submit" class="btn btn-primary">Continue</button>
        </form>

        <div class="help-text">
            <p>Don't have a code? Check your device or application for the verification code.</p>
        </div>
    </div>
</div>

<script>
    // Auto-format the code input
    document.getElementById('user_code').addEventListener('input', function(e) {
        let value = e.target.value.replace(/[^A-Z0-9]/g, '');
        if (value.length > 4) {
            value = value.slice(0, 4) + '-' + value.slice(4, 8);
        }
        e.target.value = value;
    });
</script>
</body>
</html>
