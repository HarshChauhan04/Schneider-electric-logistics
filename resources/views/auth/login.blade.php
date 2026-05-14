<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In — Schneider Electric | India's #1 Industrial Freight Network</title>
<meta name="description" content="Sign in to Schneider Electric — India's largest industrial on-demand freight platform. Book heavy hauls, track shipments live across India.">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
  :root {
    --orange: #FF6B00;
    --orange-glow: #FF8C00;
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
    --font-display: 'Bebas Neue', sans-serif;
    --font-body: 'DM Sans', sans-serif;
    --font-mono: 'JetBrains Mono', monospace;
  }
  * { margin:0; padding:0; box-sizing:border-box; }
  body {
    background: var(--dark);
    color: var(--light);
    font-family: var(--font-body);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: var(--dark2); }
  ::-webkit-scrollbar-thumb { background: var(--orange); border-radius: 3px; }

  /* TOPBAR */
  #topbar {
    height: 64px;
    background: rgba(10,10,10,0.95);
    backdrop-filter: blur(14px);
    border-bottom: 1px solid rgba(255,107,0,0.15);
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 28px;
    position: fixed; top:0; left:0; right:0; z-index:999;
  }
  .logo { font-family: var(--font-display); font-size: 28px; letter-spacing: 2px; color: var(--white); text-decoration:none; }
  .logo span { color: var(--orange); }

  /* MAIN */
  .auth-wrapper {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px 20px 40px;
    position: relative;
    overflow: hidden;
  }
  .auth-bg {
    position: absolute; inset: 0;
    background: radial-gradient(ellipse at 30% 50%, rgba(255,107,0,0.06) 0%, transparent 60%),
                radial-gradient(ellipse at 80% 20%, rgba(255,107,0,0.04) 0%, transparent 50%);
  }
  .grid-overlay {
    position: absolute; inset: 0; pointer-events: none;
    background-image: linear-gradient(rgba(255,107,0,0.03) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(255,107,0,0.03) 1px, transparent 1px);
    background-size: 60px 60px;
  }
  .auth-card {
    position: relative; z-index: 2;
    width: 100%; max-width: 460px;
    background: var(--dark2);
    border: 1px solid var(--steel);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 40px 80px rgba(0,0,0,0.6), 0 0 60px rgba(255,107,0,0.04);
    animation: popIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  @keyframes popIn { from { transform: scale(0.9) translateY(20px); opacity: 0; } to { transform: scale(1) translateY(0); opacity: 1; } }
  .card-top {
    padding: 32px 36px 28px;
    background: var(--dark3);
    border-bottom: 1px solid var(--steel);
    text-align: center;
  }
  .card-icon { font-size: 40px; margin-bottom: 12px; }
  .card-title { font-family: var(--font-display); font-size: 32px; color: var(--white); letter-spacing: 1px; }
  .card-sub { font-size: 13px; color: var(--gray); margin-top: 6px; }
  .card-body { padding: 32px 36px; display: flex; flex-direction: column; gap: 18px; }

  .input-group { display: flex; flex-direction: column; gap: 6px; }
  .input-label { font-size: 11px; color: var(--gray); text-transform: uppercase; letter-spacing: 1px; font-weight: 600; }
  .input-field {
    background: var(--dark3); border: 1px solid var(--steel);
    color: var(--light); padding: 13px 16px; border-radius: 10px;
    font-family: var(--font-body); font-size: 14px; outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
    width: 100%;
  }
  .input-field:focus { border-color: var(--orange); box-shadow: 0 0 0 3px rgba(255,107,0,0.1); }
  .input-field::placeholder { color: #555; }

  .input-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }

  .error-msg {
    background: rgba(255,23,68,0.1); border: 1px solid rgba(255,23,68,0.3);
    border-radius: 8px; padding: 10px 14px;
    font-size: 12px; color: #FF6B8A;
    display: flex; align-items: center; gap: 8px;
  }

  .submit-btn {
    width: 100%; padding: 15px; background: var(--orange); color: white; border: none;
    border-radius: 10px; font-family: var(--font-body); font-size: 15px; font-weight: 700;
    cursor: pointer; transition: all 0.25s; letter-spacing: 0.5px;
    box-shadow: 0 4px 20px rgba(255,107,0,0.3);
    margin-top: 6px;
  }
  .submit-btn:hover { background: var(--orange-glow); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(255,107,0,0.5); }

  .divider { display: flex; align-items: center; gap: 12px; }
  .divider-line { flex: 1; height: 1px; background: var(--steel); }
  .divider-text { font-size: 11px; color: var(--gray); font-family: var(--font-mono); }

  .alt-link { text-align: center; font-size: 13px; color: var(--gray); }
  .alt-link a { color: var(--orange); text-decoration: none; font-weight: 600; }
  .alt-link a:hover { color: var(--orange-glow); text-decoration: underline; }

  .remember-row { display: flex; align-items: center; justify-content: space-between; }
  .checkbox-wrap { display: flex; align-items: center; gap: 8px; cursor: pointer; }
  .checkbox-wrap input[type="checkbox"] { accent-color: var(--orange); width: 15px; height: 15px; cursor: pointer; }
  .checkbox-label { font-size: 13px; color: var(--gray); }

  .trust-badges {
    display: flex; gap: 14px; justify-content: center;
    padding: 18px 36px 28px;
    border-top: 1px solid var(--steel);
  }
  .badge {
    display: flex; align-items: center; gap: 6px;
    font-size: 10px; color: var(--gray); font-family: var(--font-mono);
  }
  .badge-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--green); box-shadow: 0 0 6px var(--green); }

  footer {
    text-align: center; padding: 20px;
    font-size: 11px; color: #555; font-family: var(--font-mono);
    border-top: 1px solid rgba(255,255,255,0.05);
  }

  @media (max-width: 520px) {
    .auth-card { border-radius: 16px; }
    .card-top, .card-body { padding: 24px 22px; }
    .input-row { grid-template-columns: 1fr; }
    .trust-badges { padding: 16px 22px 22px; flex-wrap: wrap; }
  }
</style>
</head>
<body>

<nav id="topbar">
  <a href="{{ route('home') }}" class="logo">SCHNEIDER<span>HAUL</span></a>
  <div style="font-family:var(--font-mono);font-size:11px;color:var(--gray)">🇮🇳 INDIA'S FREIGHT NETWORK</div>
</nav>

<div class="auth-wrapper">
  <div class="auth-bg"></div>
  <div class="grid-overlay"></div>

  <div class="auth-card">
    <div class="card-top">
      <div class="card-icon">🚛</div>
      <div class="card-title">WELCOME BACK</div>
      <div class="card-sub">Sign in to dispatch your next haul across India</div>
    </div>

    <div class="card-body">
      @if($errors->any())
        <div class="error-msg">
          ⚠️ {{ $errors->first() }}
        </div>
      @endif

      @if(session('success'))
        <div style="background:rgba(0,200,83,0.1);border:1px solid rgba(0,200,83,0.3);border-radius:8px;padding:10px 14px;font-size:12px;color:#00C853;display:flex;align-items:center;gap:8px;">
          ✅ {{ session('success') }}
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group" style="margin-bottom:18px">
          <label class="input-label" for="email">Email Address</label>
          <input class="input-field" type="email" id="email" name="email" placeholder="yourname@company.in" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="input-group" style="margin-bottom:18px">
          <label class="input-label" for="password">Password</label>
          <input class="input-field" type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="remember-row" style="margin-bottom:20px">
          <label class="checkbox-wrap">
            <input type="checkbox" name="remember" id="remember">
            <span class="checkbox-label">Remember me</span>
          </label>
        </div>

        <button class="submit-btn" type="submit" id="login-btn">🔑 Sign In to Schneider Electric</button>
      </form>

      <div class="divider">
        <div class="divider-line"></div>
        <span class="divider-text">OR</span>
        <div class="divider-line"></div>
      </div>

      <div class="alt-link">
        New to Schneider Electric? <a href="{{ route('register') }}">Create your account →</a>
      </div>
    </div>

    <div class="trust-badges">
      <div class="badge"><div class="badge-dot"></div>SSL Secured</div>
      <div class="badge"><div class="badge-dot"></div>GST Compliant</div>
      <div class="badge"><div class="badge-dot"></div>28 States Covered</div>
      <div class="badge"><div class="badge-dot"></div>ISO 9001:2015</div>
    </div>
  </div>
</div>

<footer>© 2025 Schneider Electric India Pvt. Ltd. · CIN: U72900MH2025PTC000001 · All rights reserved.</footer>

</body>
</html>
