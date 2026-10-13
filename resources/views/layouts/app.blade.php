<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'E-Order')</title>
    <style>
        body{font-family:Arial,sans-serif;margin:0;background:#f4f7fb;color:#182230}
        header{background:#123b63;color:white;padding:16px 5%;display:flex;justify-content:space-between;align-items:center}
        main{max-width:1000px;margin:28px auto;padding:0 18px}
        .card{background:white;padding:22px;border-radius:12px;box-shadow:0 2px 12px #10203012;margin-bottom:18px}
        a{color:#1261a0} .btn{display:inline-block;padding:9px 14px;border:0;border-radius:7px;background:#1261a0;color:white;text-decoration:none;cursor:pointer}
        .btn-danger{background:#b42318}.field{margin:12px 0}.field label{display:block;margin-bottom:5px;font-weight:bold}
        input,select{box-sizing:border-box;width:100%;padding:10px;border:1px solid #cbd5e1;border-radius:7px}
        table{width:100%;border-collapse:collapse}th,td{text-align:left;padding:10px;border-bottom:1px solid #e5e7eb}
        .alert{padding:12px;border-radius:7px;background:#e8f7ec;margin-bottom:12px}.error{color:#b42318}
        nav{display:flex;gap:14px;align-items:center}nav a{color:white}
    </style>
</head>
<body>
<header>
    <strong>E-Order</strong>
    @auth
        <nav>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            @if(auth()->user()->role === 'admin')
                <a href="{{ route('users.index') }}">Management Pengguna</a>
            @endif
            <span>{{ auth()->user()->name }} ({{ ucfirst(auth()->user()->role) }})</span>
            <form method="POST" action="{{ route('logout') }}">@csrf<button class="btn" type="submit">Logout</button></form>
        </nav>
    @endauth
</header>
<main>
    @if(session('success'))<div class="alert">{{ session('success') }}</div>@endif
    @if(session('status'))<div class="alert">{{ session('status') }}</div>@endif
    @if(session('error'))<div class="alert">{{ session('error') }}</div>@endif
    @yield('content')
</main>
</body>
</html>
