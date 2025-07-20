<header class="header" style="background:#fff; border-bottom:1px solid #f0f0f0; font-family:'Inter',sans-serif;">
    <nav class="navbar navbar-expand-lg" style="padding:1.2rem 0; justify-content:center; position:relative;">
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <a href="/home" class="navbar-brand" style="font-weight:700; font-size:2rem; color:#4f8cff; letter-spacing:1px;">Library Admin</a>
            <div style="position:absolute; right:30px; top:50%; transform:translateY(-50%); display:flex; align-items:center; gap:1rem;">
                <div style="background:#f5faff; border-radius:10px; padding:0.5rem 1.2rem; font-weight:600; color:#2563eb; box-shadow:0 2px 8px rgba(79,140,255,0.07); font-size:1rem;">
                    <span style="margin-right:0.7rem;">👤 {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" style="background:#4f8cff; color:#fff; border:none; border-radius:6px; padding:0.35rem 1.1rem; font-weight:500; font-size:0.97rem; cursor:pointer; transition:background 0.18s;">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
