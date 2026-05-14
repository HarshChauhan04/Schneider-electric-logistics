<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account — Schneider Electric | Join India's #1 Industrial Freight Network</title>
<meta name="description" content="Register on Schneider Electric — India's largest on-demand heavy freight platform. Book trucks, flatbeds, and heavy haulers across 500+ Indian cities instantly.">
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
    background: radial-gradient(ellipse at 70% 50%, rgba(255,107,0,0.06) 0%, transparent 60%),
                radial-gradient(ellipse at 20% 80%, rgba(255,107,0,0.04) 0%, transparent 50%);
  }
  .grid-overlay {
    position: absolute; inset: 0; pointer-events: none;
    background-image: linear-gradient(rgba(255,107,0,0.03) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(255,107,0,0.03) 1px, transparent 1px);
    background-size: 60px 60px;
  }
  .auth-card {
    position: relative; z-index: 2;
    width: 100%; max-width: 520px;
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

  .card-body { padding: 32px 36px; display: flex; flex-direction: column; gap: 16px; }

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

  .field-hint { font-size: 11px; color: #666; margin-top: 4px; }

  .submit-btn {
    width: 100%; padding: 15px; background: var(--orange); color: white; border: none;
    border-radius: 10px; font-family: var(--font-body); font-size: 15px; font-weight: 700;
    cursor: pointer; transition: all 0.25s; letter-spacing: 0.5px;
    box-shadow: 0 4px 20px rgba(255,107,0,0.3);
    margin-top: 4px;
  }
  .submit-btn:hover { background: var(--orange-glow); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(255,107,0,0.5); }

  .divider { display: flex; align-items: center; gap: 12px; }
  .divider-line { flex: 1; height: 1px; background: var(--steel); }
  .divider-text { font-size: 11px; color: var(--gray); font-family: var(--font-mono); }

  .alt-link { text-align: center; font-size: 13px; color: var(--gray); }
  .alt-link a { color: var(--orange); text-decoration: none; font-weight: 600; }
  .alt-link a:hover { color: var(--orange-glow); text-decoration: underline; }

  .perks {
    display: grid; grid-template-columns: 1fr 1fr; gap: 10px;
    margin: 4px 0 8px;
  }
  .perk {
    background: var(--dark3); border: 1px solid var(--steel);
    border-radius: 8px; padding: 10px 12px;
    display: flex; align-items: center; gap: 8px;
    font-size: 11px; color: var(--gray);
  }
  .perk-icon { font-size: 16px; flex-shrink: 0; }

  .trust-badges {
    display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;
    padding: 18px 36px 28px;
    border-top: 1px solid var(--steel);
  }
  .badge { display: flex; align-items: center; gap: 6px; font-size: 10px; color: var(--gray); font-family: var(--font-mono); }
  .badge-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--green); box-shadow: 0 0 6px var(--green); }

  .terms-note { font-size: 11px; color: #555; text-align: center; line-height: 1.6; }
  .terms-note a { color: var(--gray); }

  footer {
    text-align: center; padding: 20px;
    font-size: 11px; color: #555; font-family: var(--font-mono);
    border-top: 1px solid rgba(255,255,255,0.05);
  }
  @media (max-width: 560px) {
    .auth-card { border-radius: 16px; }
    .card-top, .card-body { padding: 24px 22px; }
    .input-row { grid-template-columns: 1fr; }
    .perks { grid-template-columns: 1fr; }
    .trust-badges { padding: 16px 22px 22px; }
  }
</style>
</head>
<body>

<nav id="topbar">
  <a href="{{ route('home') }}" class="logo">SCHNEIDER<span>HAUL</span></a>
  <div style="font-family:var(--font-mono);font-size:11px;color:var(--gray)">🇮🇳 PAN-INDIA FREIGHT NETWORK</div>
</nav>

<div class="auth-wrapper">
  <div class="auth-bg"></div>
  <div class="grid-overlay"></div>

  <div class="auth-card">
    <div class="card-top">
      <div class="card-icon">🏭</div>
      <div class="card-title">JOIN SCHNEIDER ELECTRIC</div>
      <div class="card-sub">Book industrial freight across India in minutes</div>
    </div>

    <div class="card-body">
      @if($errors->any())
        <div class="error-msg">⚠️ {{ $errors->first() }}</div>
      @endif

      <div class="perks">
        <div class="perk"><span class="perk-icon">🚛</span>500+ Indian cities covered</div>
        <div class="perk"><span class="perk-icon">⚡</span>Instant driver dispatch</div>
        <div class="perk"><span class="perk-icon">📍</span>Live GPS tracking</div>
        <div class="perk"><span class="perk-icon">💰</span>₹ Competitive freight rates</div>
      </div>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-row" style="margin-bottom:16px">
          <div class="input-group">
            <label class="input-label" for="name">Full Name</label>
            <input class="input-field" type="text" id="name" name="name" placeholder="Rahul Sharma" value="{{ old('name') }}" required autofocus>
          </div>
          <div class="input-group">
            <label class="input-label" for="phone">Mobile Number</label>
            <input class="input-field" type="tel" id="phone" name="phone" placeholder="+91 98765 43210" value="{{ old('phone') }}" required>
          </div>
        </div>

        <div class="input-group" style="margin-bottom:16px">
          <label class="input-label" for="email">Business / Personal Email</label>
          <input class="input-field" type="email" id="email" name="email" placeholder="rahul@yourcompany.in" value="{{ old('email') }}" required>
          <span class="field-hint">Use your company email for GST invoice access</span>
        </div>

        <div class="input-row" style="margin-bottom:16px">
          <div class="input-group">
            <label class="input-label" for="password">Password</label>
            <input class="input-field" type="password" id="password" name="password" placeholder="Min. 8 characters" required>
          </div>
          <div class="input-group">
            <label class="input-label" for="password_confirmation">Confirm Password</label>
            <input class="input-field" type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-enter password" required>
          </div>
        </div>

        <button class="submit-btn" type="submit" id="register-btn">🚀 Create My Account</button>

        <p class="terms-note" style="margin-top:14px">
          By registering, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
          Your data is protected under India's IT Act, 2000.
        </p>
      </form>

      <div class="divider">
        <div class="divider-line"></div>
        <span class="divider-text">ALREADY HAVE AN ACCOUNT</span>
        <div class="divider-line"></div>
      </div>

      <div class="alt-link">
        <a href="{{ route('login') }}">← Sign In to Schneider Electric</a>
      </div>
    </div>

    <div class="trust-badges">
      <div class="badge"><div class="badge-dot"></div>SSL Secured</div>
      <div class="badge"><div class="badge-dot"></div>GST Compliant</div>
      <div class="badge"><div class="badge-dot"></div>MCA Registered</div>
      <div class="badge"><div class="badge-dot"></div>28 States Covered</div>
    </div>
  </div>
</div>

<footer>© 2025 Schneider Electric India Pvt. Ltd. · CIN: U72900MH2025PTC000001 · Registered in Mumbai, Maharashtra</footer>

</body>
</html>
