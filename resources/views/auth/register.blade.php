<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5faff 0%, #f0f4ff 100%);
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(79,140,255,0.10);
            padding: 2.5rem 2rem 2rem 2rem;
            width: 100%;
            max-width: 420px;
        }
        .auth-card h2 {
            text-align: center;
            color: #4f8cff;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .form-group { margin-bottom: 1.2rem; }
        label { display: block; margin-bottom: 0.5rem; color: #222; font-weight: 500; }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.7rem 1rem;
            border: 1px solid #e0e6ed;
            border-radius: 8px;
            font-size: 1rem;
            background: #f8fbff;
            transition: border 0.2s;
        }
        input:focus { border: 1.5px solid #4f8cff; outline: none; background: #fff; }
        .btn-primary {
            width: 100%;
            background: #4f8cff;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.8rem 0;
            font-size: 1.1rem;
            font-weight: 600;
            margin-top: 0.5rem;
            cursor: pointer;
            transition: background 0.18s;
        }
        .btn-primary:hover { background: #2563eb; }
        .text-link { color: #4f8cff; text-decoration: none; font-size: 0.97rem; }
        .text-link:hover { text-decoration: underline; }
        .alert { background: #eaf3ff; color: #2563eb; border-radius: 6px; padding: 0.7rem 1rem; margin-bottom: 1rem; text-align: center; }
    </style>
</head>
<body>
    <div class="auth-card">
        <h2>Register</h2>
        <x-validation-errors class="mb-4" />
        @if(session('success'))
            <div class="alert">
                <p>{{ session('success') }}</p>
                <a href="{{ route('login') }}" class="btn-primary" style="margin-top:1rem;">Login to continue</a>
            </div>
        @else
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input id="address" type="text" name="address" value="{{ old('address') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit" class="btn-primary">Register</button>
            <div style="margin-top:1.2rem; text-align:center;">
                <span style="color:#888;">Already registered?</span>
                <a href="{{ route('login') }}" class="text-link">Login</a>
            </div>
        </form>
        @endif
    </div>
</body>
</html>
