<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Authorize Device</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #f5f5f5; margin: 0; padding: 40px 20px; }
        .container { max-width: 500px; margin: 0 auto; }
        .card { background: white; border-radius: 12px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        .logo { text-align: center; margin-bottom: 30px; font-size: 24px; font-weight: bold; color: #333; }
        .device-info { background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 8px; padding: 20px; margin: 20px 0; }
        .device-code { font-family: monospace; font-size: 18px; font-weight: bold; color: #007bff; text-align: center; letter-spacing: 2px; }
        .scopes { margin: 20px 0; }
        .scope-list { list-style: none; padding: 0; }
        .scope-list li { padding: 8px 0; border-bottom: 1px solid #eee; }
        .actions { display: flex; gap: 15px; margin-top: 30px; }
        .btn { flex: 1; padding: 14px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; text-decoration: none; text-align: center; }
        .btn-primary { background: #28a745; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
        .btn:hover { opacity: 0.9; }
        .warning { background: #fff3cd; color: #856404; padding: 15px; border-radius: 6px; margin: 20px 0; }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="logo">{{ config('app.name') }}</div>

        <h2 style="text-align: center; margin-bottom: 10px;">Authorize Device</h2>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">
            {{ $client->name }} wants to access your account
        </p>

        <div class="device-info">
            <p style="margin: 0 0 10px 0; text-align: center; color: #666;">Device Code:</p>
            <div class="device-code">{{ request('user_code') }}</div>
        </div>

        @if (count($scopes) > 0)
            <div class="scopes">
                <h4>This application will be able to:</h4>
                <ul class="scope-list">
                    @foreach ($scopes as $scope)
                        <li>{{ $scope->description }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="warning">
            <strong>Security Notice:</strong> Only authorize this device if you initiated this request from your trusted device or application.
        </div>

        <div class="actions">
            <form method="POST" action="{{ route('passport.device.authorizations.approve') }}" style="flex: 1;">
                @csrf
                <input type="hidden" name="state" value="{{ $request->state }}">
                <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                <button type="submit" class="btn btn-primary">
                    ✓ Authorize Device
                </button>
            </form>

            <form method="DELETE" action="{{ route('passport.device.authorizations.deny') }}" style="flex: 1;">
                @csrf
                @method('DELETE')
                <input type="hidden" name="state" value="{{ $request->state }}">
                <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                <button type="submit" class="btn btn-secondary">
                    ✗ Cancel
                </button>
            </form>
        </div>

        <p style="text-align: center; margin-top: 30px; color: #666; font-size: 14px;">
            You're currently signed in as <strong>{{ $user->name }}</strong>
            <br>
            <a href="{{ route('logout') }}" style="color: #007bff;">Sign in as different user</a>
        </p>
    </div>
</div>
</body>
</html>
