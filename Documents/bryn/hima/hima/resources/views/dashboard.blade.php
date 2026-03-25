<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <style>
        body { margin: 0; font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; background: #fff4b5; color: #2a2100; }
        .wrap { width: min(980px, 92%); margin: 0 auto; padding: 1.25rem 0; }
        .top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; }
        .box { background: #fff7d1; border: 1px solid rgba(42,33,0,.15); border-radius: 14px; padding: 1.1rem; }
        .btn { padding: .55rem 1rem; border-radius: 8px; border: 1px solid #2a2100; background: #2a2100; color: #fff7ce; font-weight: 700; cursor: pointer; }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="top">
            <h1 style="margin:0;font-size:1.4rem;">Dashboard</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn">Log out</button>
            </form>
        </div>
        <div class="box">
            <p style="margin:0 0 .5rem;">You are logged in as <strong>{{ auth()->user()->name }}</strong>.</p>
            <p style="margin:0;">Welcome to your main dashboard area.</p>
        </div>
    </div>
</body>
</html>
