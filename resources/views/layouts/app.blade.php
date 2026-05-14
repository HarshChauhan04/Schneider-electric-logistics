<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Schneider Electric — Industrial Logistics India')</title>
<meta name="description" content="@yield('meta_desc', 'Schneider Electric India — On-demand industrial freight and heavy haul logistics across 500+ Indian cities.')">
<meta name="keywords" content="Schneider Electric logistics, industrial freight India, heavy haul truck, on-demand cargo India">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://schneiderelectric-logistics.in@yield('canonical', '/')">
<meta property="og:title" content="@yield('title', 'Schneider Electric — Industrial Logistics India')">
<meta property="og:type" content="website">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css"/>
<style>
  :root {
    --orange: #FF6B00;
    --orange-glow: #FF8C00;
    --green-se: #3DCD58; /* Schneider Electric green */
    --dark: #0A0A0A;
    --dark2: #111111;
    --dark3: #1A1A1A;
    --dark4: #222222;
    --steel: #2A2A2A;
    --gray: #888;
    --light: #EEEEEE;
    --white: #FFFFFF;
    --green: #00C853;
    --red: #FF1744;
    --yellow: #FFD600;
    --font-display: 'Bebas Neue', sans-serif;
    --font-body: 'DM Sans', sans-serif;
    --font-mono: 'JetBrains Mono', monospace;
  }
  * { margin:0; padding:0; box-sizing:border-box; }
  body { background: var(--dark); color: var(--light); font-family: var(--font-body); overflow-x: hidden; }
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: var(--dark2); }
  ::-webkit-scrollbar-thumb { background: var(--green-se); border-radius: 3px; }

  /* ── TOPBAR ─────────────────────────────── */
  #topbar {
    position: fixed; top:0; left:0; right:0; z-index:999;
    height: 64px;
    background: rgba(10,10,10,0.95);
    backdrop-filter: blur(14px);
    border-bottom: 1px solid rgba(61,205,88,0.15);
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 28px;
  }
  .logo {
    font-family: var(--font-display);
    font-size: 22px;
    letter-spacing: 1px;
    color: var(--white);
    text-decoration: none;
    display: flex; align-items: center; gap: 10px;
  }
  .logo .se-badge {
    background: var(--green-se);
    color: var(--dark);
    font-size: 10px;
    font-family: var(--font-mono);
    padding: 2px 7px;
    border-radius: 4px;
    font-weight: 700;
    letter-spacing: 1px;
  }
  .nav-links { display: flex; gap: 22px; align-items: center; }
  .nav-links a {
    color: var(--gray); text-decoration: none; font-size: 12px; font-weight: 500;
    letter-spacing: 0.5px; text-transform: uppercase; transition: color 0.2s;
  }
  .nav-links a:hover, .nav-links a.active { color: var(--green-se); }
  .topbar-right { display: flex; gap: 10px; align-items: center; }
  .btn-ghost {
    border: 1px solid var(--steel); background: transparent; color: var(--light);
    padding: 8px 16px; border-radius: 6px; font-family: var(--font-body);
    font-size: 12px; font-weight: 500; cursor: pointer; transition: all 0.2s;
    text-decoration: none; display: inline-block;
  }
  .btn-ghost:hover { border-color: var(--green-se); color: var(--green-se); }
  .btn-primary {
    background: var(--green-se); color: var(--dark); border: none;
    padding: 9px 20px; border-radius: 6px; font-family: var(--font-body);
    font-size: 12px; font-weight: 700; cursor: pointer; transition: all 0.2s;
    text-decoration: none; display: inline-block;
  }
  .btn-primary:hover { background: #4ae869; transform: translateY(-1px); box-shadow: 0 4px 20px rgba(61,205,88,0.4); }

  /* ── PAGE WRAPPER ─────────────────────────────── */
  .page-wrap { padding-top: 64px; min-height: 100vh; }

  /* ── SECTION COMMONS ─────────────────────────────── */
  .section-label {
    font-family: var(--font-mono); font-size: 11px; color: var(--green-se);
    letter-spacing: 3px; text-transform: uppercase; margin-bottom: 12px;
  }
  .section-title {
    font-family: var(--font-display); font-size: clamp(36px, 4vw, 58px);
    color: var(--white); margin-bottom: 16px; line-height: 1;
  }
  .section-sub { font-size: 15px; color: var(--gray); max-width: 600px; line-height: 1.7; margin-bottom: 48px; }
  .reveal { opacity: 0; transform: translateY(30px); transition: all 0.6s ease; }
  .reveal.visible { opacity: 1; transform: none; }

  /* ── HERO GENERIC ─────────────────────────────── */
  .page-hero {
    padding: 80px 28px 60px;
    background: radial-gradient(ellipse at 60% 40%, rgba(61,205,88,0.07) 0%, transparent 60%);
    border-bottom: 1px solid var(--steel);
    max-width: 1200px; margin: 0 auto;
  }
  .hero-badge {
    font-family: var(--font-mono); font-size: 10px; color: var(--green-se);
    background: rgba(61,205,88,0.1); border: 1px solid rgba(61,205,88,0.2);
    padding: 5px 14px; border-radius: 20px; display: inline-block; margin-bottom: 20px;
  }
  .grid-overlay {
    position: fixed; inset: 0; pointer-events: none; z-index: 0;
    background-image: linear-gradient(rgba(61,205,88,0.02) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(61,205,88,0.02) 1px, transparent 1px);
    background-size: 60px 60px;
  }

  /* ── FOOTER ─────────────────────────────── */
  footer {
    background: var(--dark2); border-top: 1px solid var(--steel);
    padding: 40px 28px 24px; margin-top: auto;
  }
  .footer-inner { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; }
  .footer-copy { font-size: 11px; color: #555; font-family: var(--font-mono); }
  .footer-links { display: flex; gap: 20px; }
  .footer-links a { color: var(--gray); text-decoration: none; font-size: 12px; transition: color 0.2s; }
  .footer-links a:hover { color: var(--green-se); }

  @media (max-width: 900px) {
    .nav-links { display: none; }
    .footer-inner { flex-direction: column; text-align: center; }
  }
</style>
@stack('styles')
</head>
<body>
<div class="grid-overlay"></div>

<nav id="topbar">
  <a href="{{ route('home') }}" class="logo">
    <span>SCHNEIDER ELECTRIC</span>
    <span class="se-badge">LOGISTICS</span>
  </a>
  <div class="nav-links">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('home') }}#booking">Book Haul</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
    <a href="{{ route('features') }}" class="{{ request()->routeIs('features') ? 'active' : '' }}">Features</a>
    <a href="{{ route('how-it-works') }}" class="{{ request()->routeIs('how-it-works') ? 'active' : '' }}">How It Works</a>
    <a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'active' : '' }}">Team</a>
  </div>
  <div class="topbar-right">
    @auth
      <span style="font-size:12px;color:var(--gray)">👤 {{ Auth::user()->name }}</span>
      <form method="POST" action="{{ route('logout') }}" style="margin:0">
        @csrf
        <button class="btn-ghost" type="submit">Sign Out</button>
      </form>
    @else
      <a href="{{ route('login') }}" class="btn-ghost">Sign In</a>
      <a href="{{ route('register') }}" class="btn-primary">Join Free</a>
    @endauth
  </div>
</nav>

<div class="page-wrap">
  @yield('content')
</div>

<footer>
  <div class="footer-inner">
    <div class="footer-copy">© 2025 Schneider Electric India Pvt. Ltd. · CIN: U72900MH2025PTC000001 · GST: 27AACCS1234P1Z5</div>
    <div class="footer-links">
      <a href="{{ route('about') }}">About</a>
      <a href="{{ route('team') }}">Team</a>
      <a href="{{ route('features') }}">Features</a>
      <a href="{{ route('how-it-works') }}">How It Works</a>
      <a href="#">Privacy</a>
      <a href="#">Terms</a>
    </div>
  </div>
</footer>

@stack('scripts')
<script>
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
</body>
</html>
