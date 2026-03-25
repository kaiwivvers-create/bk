<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
        body { margin: 0; font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background: #fff4b5; color: #2a2100; }
        .wrap { min-height: 100vh; display: grid; place-items: center; padding: 1rem; }
        .card { width: min(430px, 95vw); background: #fff7d1; border: 1px solid rgba(42,33,0,.15); border-radius: 14px; padding: 1.2rem; }
        h1 { margin: 0 0 .9rem; font-size: 1.3rem; }
        label { display: block; font-size: .9rem; margin-bottom: .25rem; }
        input { width: 100%; padding: .6rem .7rem; border-radius: 8px; border: 1px solid rgba(42,33,0,.2); margin-bottom: .85rem; }
        .row { display: flex; justify-content: space-between; align-items: center; margin-bottom: .85rem; }
        .btn { width: 100%; padding: .65rem .9rem; border-radius: 8px; border: 1px solid #2a2100; background: #2a2100; color: #fff7ce; font-weight: 700; cursor: pointer; }
        .muted { margin-top: .85rem; font-size: .9rem; }
        a { color: #6c4d00; text-decoration: none; font-weight: 600; }
        .error { color: #8c1f00; font-size: .85rem; margin: -.6rem 0 .75rem; }
    </style>
</head>
<body>
    <div class="wrap">
        <form method="POST" action="{{ route('login.post') }}" class="card">
            @csrf
            <h1>Log in</h1>

            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
            @error('email')<div class="error">{{ $message }}</div>@enderror

            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>

            <div class="row">
                <label style="display:flex;gap:.4rem;align-items:center;margin:0;">
                    <input type="checkbox" name="remember" style="width:auto;margin:0;">
                    Remember me
                </label>
            </div>

            <button class="btn" type="submit">Log in</button>
            <p class="muted">No account yet? <a href="{{ route('register') }}">Register</a></p>
        </form>
    </div>
</body>
</html>
