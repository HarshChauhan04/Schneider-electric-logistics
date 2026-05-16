<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Schneider Electric India — #1 On-Demand Industrial Freight & Heavy Haul Network</title>
<meta name="description" content="Schneider Electric is India's leading industrial on-demand freight platform. Book heavy haul trucks, flatbeds, and specialised cargo transport across 500+ Indian cities. Real-time GPS tracking, instant dispatch, GST billing.">
<meta name="keywords" content="industrial freight India, heavy haul truck booking, on-demand logistics India, freight transport Mumbai Delhi, industrial transport Pune Chennai, cargo booking India, truck booking app India">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Schneider Electric India — Industrial Freight On-Demand">
<meta property="og:description" content="Book industrial freight across India. Real-time tracking, certified drivers, GST invoicing. Covering 500+ cities nationwide.">
<meta property="og:type" content="website">
<link rel="canonical" href="https://schneiderelectric-logistics.in/">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
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
    --yellow: #FFD600;
    --font-display: 'Bebas Neue', sans-serif;
    --font-body: 'DM Sans', sans-serif;
    --font-mono: 'JetBrains Mono', monospace;
  }

  * { margin:0; padding:0; box-sizing:border-box; }

  body {
    background: var(--dark);
    color: var(--light);
    font-family: var(--font-body);
    overflow-x: hidden;
  }

  /* ──────────────── SCROLLBAR ──────────────── */
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: var(--dark2); }
  ::-webkit-scrollbar-thumb { background: var(--orange); border-radius: 3px; }

  /* ──────────────── TOPBAR ──────────────── */
  #topbar {
    position: fixed; top:0; left:0; right:0; z-index:999;
    height: 64px;
    background: rgba(10,10,10,0.92);
    backdrop-filter: blur(14px);
    border-bottom: 1px solid rgba(255,107,0,0.15);
    display: flex; align-items: center; justify-content: space-between;
    padding: 0 28px;
  }
  .logo {
    font-family: var(--font-display);
    font-size: 28px;
    letter-spacing: 2px;
    color: var(--white);
  }
  .logo span { color: var(--orange); }
  .nav-links { display: flex; gap: 28px; align-items: center; }
  .nav-links a {
    color: var(--gray); text-decoration: none; font-size: 13px; font-weight: 500;
    letter-spacing: 0.5px; text-transform: uppercase; transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--orange); }
  .topbar-right { display: flex; gap: 12px; align-items: center; }
  .btn-ghost {
    border: 1px solid var(--steel); background: transparent; color: var(--light);
    padding: 8px 18px; border-radius: 6px; font-family: var(--font-body);
    font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s;
  }
  .btn-ghost:hover { border-color: var(--orange); color: var(--orange); }
  .btn-primary {
    background: var(--orange); color: var(--white); border: none;
    padding: 9px 22px; border-radius: 6px; font-family: var(--font-body);
    font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.2s;
    letter-spacing: 0.3px;
  }
  .btn-primary:hover { background: var(--orange-glow); transform: translateY(-1px); box-shadow: 0 4px 20px rgba(255,107,0,0.4); }

  /* ──────────────── HERO ──────────────── */
  #hero {
    min-height: 100vh; display: flex; align-items: center;
    position: relative; overflow: hidden; padding-top: 64px;
  }
  .hero-bg {
    position: absolute; inset: 0;
    background-image: url('/images/hero_logistics_bg.png');
    background-size: cover; background-position: center;
  }
  .hero-bg-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(90deg, rgba(10,10,10,0.93) 0%, rgba(10,10,10,0.75) 55%, rgba(10,10,10,0.4) 100%),
                radial-gradient(ellipse at 70% 50%, rgba(255,107,0,0.08) 0%, transparent 60%);
  }
  .grid-overlay {
    position: absolute; inset: 0; pointer-events: none;
    background-image: linear-gradient(rgba(255,107,0,0.02) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(255,107,0,0.02) 1px, transparent 1px);
    background-size: 60px 60px;
  }
  .hero-content {
    position: relative; z-index: 2;
    max-width: 1200px; margin: 0 auto; padding: 0 28px;
    display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;
  }
  .hero-eyebrow {
    font-family: var(--font-mono); font-size: 11px; color: var(--orange);
    letter-spacing: 3px; text-transform: uppercase; margin-bottom: 20px;
    display: flex; align-items: center; gap: 10px;
  }
  .hero-eyebrow::before {
    content: ''; width: 30px; height: 1px; background: var(--orange);
  }
  .hero-title {
    font-family: var(--font-display);
    font-size: clamp(56px, 7vw, 96px);
    line-height: 0.92;
    color: var(--white);
    margin-bottom: 28px;
  }
  .hero-title .accent { color: var(--orange); }
  .hero-subtitle {
    font-size: 16px; color: var(--gray); line-height: 1.7;
    margin-bottom: 40px; max-width: 480px;
  }
  .hero-cta { display: flex; gap: 14px; flex-wrap: wrap; }
  .btn-large {
    padding: 14px 32px; font-size: 15px; font-weight: 600;
    border-radius: 8px; cursor: pointer; transition: all 0.25s; font-family: var(--font-body);
  }
  .btn-orange-large {
    background: var(--orange); color: white; border: none;
    box-shadow: 0 0 40px rgba(255,107,0,0.3);
  }
  .btn-orange-large:hover { background: var(--orange-glow); transform: translateY(-2px); box-shadow: 0 8px 40px rgba(255,107,0,0.5); }
  .btn-outline-large {
    background: transparent; color: var(--light); border: 1px solid var(--steel);
  }
  .btn-outline-large:hover { border-color: var(--orange); color: var(--orange); }
  .hero-stats { display: flex; gap: 40px; margin-top: 50px; }
  .stat { display: flex; flex-direction: column; gap: 4px; }
  .stat-num {
    font-family: var(--font-display); font-size: 36px; color: var(--white); line-height: 1;
  }
  .stat-label { font-size: 12px; color: var(--gray); text-transform: uppercase; letter-spacing: 1px; }

  /* Hero Right — Live Map Card */
  .hero-card {
    background: var(--dark2);
    border: 1px solid var(--steel);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 40px 80px rgba(0,0,0,0.6), 0 0 60px rgba(255,107,0,0.05);
    animation: float 6s ease-in-out infinite;
  }
  @keyframes float {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-12px); }
  }
  .card-header {
    padding: 16px 20px;
    background: var(--dark3);
    border-bottom: 1px solid var(--steel);
    display: flex; align-items: center; justify-content: space-between;
  }
  .card-header-left { display: flex; align-items: center; gap: 10px; }
  .pulse-dot {
    width: 8px; height: 8px; border-radius: 50%; background: var(--green);
    box-shadow: 0 0 8px var(--green);
    animation: pulse 2s infinite;
  }
  @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:0.6;transform:scale(1.3)} }
  .card-title { font-size: 13px; font-weight: 600; color: var(--light); }
  .card-badge {
    font-family: var(--font-mono); font-size: 10px; color: var(--green);
    background: rgba(0,200,83,0.1); border: 1px solid rgba(0,200,83,0.2);
    padding: 3px 8px; border-radius: 20px;
  }
  #minimap { height: 220px; width: 100%; }
  .card-body { padding: 16px 20px; display: flex; flex-direction: column; gap: 12px; }
  .route-line {
    display: flex; align-items: center; gap: 10px; font-size: 13px;
  }
  .route-dot {
    width: 10px; height: 10px; border-radius: 50%; flex-shrink: 0;
  }
  .route-dot.from { background: var(--orange); }
  .route-dot.to { background: var(--green); }
  .route-dashes {
    width: 1px; height: 16px; border-left: 2px dashed var(--steel); margin-left: 4px;
  }
  .route-label { color: var(--gray); font-size: 11px; }
  .route-value { color: var(--light); font-weight: 500; }
  .card-footer {
    padding: 14px 20px; background: rgba(255,107,0,0.06);
    border-top: 1px solid rgba(255,107,0,0.1);
    display: flex; align-items: center; justify-content: space-between;
  }
  .driver-info { display: flex; align-items: center; gap: 10px; }
  .driver-avatar {
    width: 36px; height: 36px; border-radius: 50%;
    background: linear-gradient(135deg, #FF6B00, #FF8C00);
    display: flex; align-items: center; justify-content: center;
    font-weight: 700; font-size: 14px;
  }
  .driver-name { font-size: 13px; font-weight: 600; }
  .driver-sub { font-size: 11px; color: var(--gray); }
  .eta-pill {
    background: var(--orange); color: white;
    padding: 6px 14px; border-radius: 20px;
    font-family: var(--font-mono); font-size: 12px; font-weight: 700;
  }

  /* ──────────────── BOOKING SECTION ──────────────── */
  #booking {
    padding: 100px 28px;
    max-width: 1200px; margin: 0 auto;
  }
  .section-label {
    font-family: var(--font-mono); font-size: 11px; color: var(--orange);
    letter-spacing: 3px; text-transform: uppercase; margin-bottom: 12px;
  }
  .section-title {
    font-family: var(--font-display); font-size: clamp(36px, 4vw, 56px);
    color: var(--white); margin-bottom: 16px;
  }
  .section-sub { font-size: 15px; color: var(--gray); max-width: 500px; margin-bottom: 48px; line-height: 1.7; }
  .booking-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: 40px; align-items: start; }
  .booking-form {
    background: var(--dark2); border: 1px solid var(--steel);
    border-radius: 16px; overflow: hidden;
  }
  .form-header {
    padding: 20px 24px; background: var(--dark3);
    border-bottom: 1px solid var(--steel);
    font-family: var(--font-display); font-size: 20px; letter-spacing: 1px;
  }
  .form-body { padding: 24px; display: flex; flex-direction: column; gap: 16px; }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
  .input-group { display: flex; flex-direction: column; gap: 6px; }
  .input-label { font-size: 11px; color: var(--gray); text-transform: uppercase; letter-spacing: 1px; font-weight: 600; }
  .input-field {
    background: var(--dark3); border: 1px solid var(--steel);
    color: var(--light); padding: 11px 14px; border-radius: 8px;
    font-family: var(--font-body); font-size: 14px; outline: none;
    transition: border-color 0.2s;
    width: 100%;
  }
  .input-field:focus { border-color: var(--orange); }
  .input-field option { background: var(--dark3); }
  .vehicle-select { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
  .vehicle-opt {
    border: 1px solid var(--steel); border-radius: 10px;
    padding: 12px 8px; cursor: pointer; text-align: center; transition: all 0.2s;
    background: var(--dark3);
  }
  .vehicle-opt:hover { border-color: var(--orange); }
  .vehicle-opt.selected { border-color: var(--orange); background: rgba(255,107,0,0.08); }
  .vehicle-icon { font-size: 24px; margin-bottom: 6px; }
  .vehicle-name { font-size: 11px; font-weight: 600; color: var(--light); }
  .vehicle-cap { font-size: 10px; color: var(--gray); margin-top: 2px; }
  .price-preview {
    background: rgba(255,107,0,0.06); border: 1px solid rgba(255,107,0,0.15);
    border-radius: 10px; padding: 16px; display: flex; justify-content: space-between; align-items: center;
  }
  .price-breakdown { display: flex; flex-direction: column; gap: 4px; }
  .price-label { font-size: 11px; color: var(--gray); text-transform: uppercase; letter-spacing: 1px; }
  .price-val { font-family: var(--font-display); font-size: 28px; color: var(--orange); }
  .price-note { font-size: 11px; color: var(--gray); }
  .book-btn {
    width: 100%; padding: 15px; background: var(--orange); color: white; border: none;
    border-radius: 10px; font-family: var(--font-body); font-size: 15px; font-weight: 700;
    cursor: pointer; transition: all 0.25s; letter-spacing: 0.5px;
    box-shadow: 0 4px 20px rgba(255,107,0,0.3);
  }
  .book-btn:hover { background: var(--orange-glow); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(255,107,0,0.5); }

  /* Map Panel */
  #bookingMap { height: 440px; border-radius: 16px; border: 1px solid var(--steel); overflow: hidden; }
  .map-controls {
    margin-top: 14px; display: flex; gap: 10px;
  }
  .map-ctrl-btn {
    flex: 1; padding: 10px; background: var(--dark2); border: 1px solid var(--steel);
    color: var(--light); border-radius: 8px; font-family: var(--font-body);
    font-size: 12px; font-weight: 500; cursor: pointer; transition: all 0.2s;
  }
  .map-ctrl-btn:hover { border-color: var(--orange); color: var(--orange); }

  /* ──────────────── LIVE TRACKING ──────────────── */
  #tracking {
    padding: 80px 28px;
    background: var(--dark2);
    border-top: 1px solid var(--steel);
    border-bottom: 1px solid var(--steel);
  }
  .tracking-inner { max-width: 1200px; margin: 0 auto; }
  #liveTrackMap { height: 500px; border-radius: 16px; border: 1px solid var(--steel); margin-top: 40px; overflow: hidden; }
  .tracking-stats {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 24px;
  }
  .t-stat {
    background: var(--dark3); border: 1px solid var(--steel); border-radius: 12px;
    padding: 20px; display: flex; flex-direction: column; gap: 8px;
  }
  .t-stat-icon { font-size: 20px; }
  .t-stat-val { font-family: var(--font-display); font-size: 24px; color: var(--white); }
  .t-stat-label { font-size: 12px; color: var(--gray); }
  .t-stat-change { font-size: 11px; color: var(--green); font-family: var(--font-mono); }

  /* ──────────────── SERVICES ──────────────── */
  #services { padding: 100px 28px; max-width: 1200px; margin: 0 auto; }
  .services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 48px; }
  .service-card {
    background: var(--dark2); border: 1px solid var(--steel); border-radius: 16px;
    padding: 28px; transition: all 0.3s; position: relative; overflow: hidden;
  }
  .service-card::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px;
    background: var(--orange); transform: scaleX(0); transform-origin: left;
    transition: transform 0.3s;
  }
  .service-card:hover { border-color: rgba(255,107,0,0.3); transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.4); }
  .service-card:hover::before { transform: scaleX(1); }
  .service-icon-wrap {
    width: 52px; height: 52px; border-radius: 12px;
    background: rgba(255,107,0,0.1); border: 1px solid rgba(255,107,0,0.2);
    display: flex; align-items: center; justify-content: center;
    font-size: 24px; margin-bottom: 20px;
  }
  .service-title { font-family: var(--font-display); font-size: 22px; margin-bottom: 10px; }
  .service-desc { font-size: 13px; color: var(--gray); line-height: 1.7; margin-bottom: 16px; }
  .service-tags { display: flex; gap: 6px; flex-wrap: wrap; }
  .tag {
    font-size: 10px; padding: 3px 9px; border-radius: 20px;
    background: var(--dark3); border: 1px solid var(--steel);
    color: var(--gray); font-family: var(--font-mono);
  }

  /* ──────────────── FLEET ──────────────── */
  #fleet { padding: 80px 28px; background: var(--dark2); border-top: 1px solid var(--steel); border-bottom: 1px solid var(--steel); }
  .fleet-inner { max-width: 1200px; margin: 0 auto; }
  .fleet-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 48px; }
  .fleet-card {
    background: var(--dark3); border: 1px solid var(--steel); border-radius: 14px;
    padding: 24px; cursor: pointer; transition: all 0.25s; text-align: center;
  }
  .fleet-card:hover { border-color: var(--orange); transform: translateY(-4px); }
  .fleet-emoji { font-size: 48px; margin-bottom: 14px; display: block; }
  .fleet-name { font-family: var(--font-display); font-size: 20px; margin-bottom: 6px; }
  .fleet-cap { font-size: 12px; color: var(--orange); font-family: var(--font-mono); margin-bottom: 10px; }
  .fleet-rate { font-size: 13px; color: var(--gray); }
  .fleet-avail {
    margin-top: 12px; font-size: 10px; padding: 4px 12px;
    border-radius: 20px; display: inline-block;
    background: rgba(0,200,83,0.1); border: 1px solid rgba(0,200,83,0.2);
    color: var(--green); font-family: var(--font-mono);
  }

  /* ──────────────── DRIVER PANEL ──────────────── */
  #driver-panel { padding: 100px 28px; max-width: 1200px; margin: 0 auto; }
  .driver-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .driver-metrics { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 32px; }
  .metric-box {
    background: var(--dark2); border: 1px solid var(--steel); border-radius: 12px; padding: 20px;
  }
  .metric-val { font-family: var(--font-display); font-size: 30px; color: var(--orange); }
  .metric-label { font-size: 12px; color: var(--gray); margin-top: 4px; }
  .driver-cta-wrap { display: flex; gap: 14px; margin-top: 32px; }
  .driver-visual {
    background: var(--dark2); border: 1px solid var(--steel); border-radius: 16px;
    padding: 28px; display: flex; flex-direction: column; gap: 14px;
  }
  .dv-header {
    font-family: var(--font-display); font-size: 18px; padding-bottom: 14px;
    border-bottom: 1px solid var(--steel); display: flex; align-items: center; justify-content: space-between;
  }
  .status-toggle {
    display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--gray);
  }
  .toggle-sw {
    width: 40px; height: 22px; background: var(--green); border-radius: 11px;
    position: relative; cursor: pointer;
  }
  .toggle-sw::after {
    content: ''; position: absolute; width: 16px; height: 16px;
    background: white; border-radius: 50%; top: 3px; right: 3px; transition: all 0.3s;
  }
  .job-item {
    display: flex; align-items: center; gap: 14px;
    padding: 14px; background: var(--dark3); border-radius: 10px;
    border: 1px solid var(--steel);
  }
  .job-icon { font-size: 22px; }
  .job-details { flex: 1; }
  .job-title { font-size: 13px; font-weight: 600; margin-bottom: 3px; }
  .job-meta { font-size: 11px; color: var(--gray); }
  .job-price { font-family: var(--font-mono); color: var(--orange); font-size: 14px; font-weight: 700; }

  /* ──────────────── MODAL ──────────────── */
  .modal-overlay {
    position: fixed; inset: 0; background: rgba(0,0,0,0.85);
    z-index: 9999; display: none; align-items: center; justify-content: center;
    backdrop-filter: blur(8px);
  }
  .modal-overlay.show { display: flex; }
  .modal {
    background: var(--dark2); border: 1px solid var(--steel);
    border-radius: 20px; padding: 36px; max-width: 480px; width: 90%;
    animation: popIn 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  @keyframes popIn { from { transform: scale(0.85); opacity: 0; } to { transform: scale(1); opacity: 1; } }
  .modal-title { font-family: var(--font-display); font-size: 28px; margin-bottom: 8px; }
  .modal-sub { font-size: 13px; color: var(--gray); margin-bottom: 24px; }
  .modal-track {
    background: var(--dark3); border: 1px solid var(--steel);
    border-radius: 12px; padding: 20px; margin-bottom: 20px;
  }
  .track-steps { display: flex; flex-direction: column; gap: 0; }
  .track-step { display: flex; gap: 16px; align-items: flex-start; }
  .step-line-wrap { display: flex; flex-direction: column; align-items: center; }
  .step-dot {
    width: 14px; height: 14px; border-radius: 50%; border: 2px solid var(--steel); background: var(--dark4);
    flex-shrink: 0;
  }
  .step-dot.done { background: var(--orange); border-color: var(--orange); }
  .step-dot.active { background: var(--orange); border-color: var(--orange); box-shadow: 0 0 10px var(--orange); animation: pulse 1.5s infinite; }
  .step-connector { width: 2px; height: 30px; background: var(--steel); margin: 2px 0; }
  .step-connector.done { background: var(--orange); }
  .step-info { padding-bottom: 20px; }
  .step-name { font-size: 13px; font-weight: 600; margin-bottom: 3px; }
  .step-time { font-size: 11px; color: var(--gray); font-family: var(--font-mono); }
  .modal-close {
    width: 100%; padding: 13px; background: var(--orange); color: white; border: none;
    border-radius: 10px; font-family: var(--font-body); font-size: 14px; font-weight: 700;
    cursor: pointer; transition: all 0.2s;
  }
  .modal-close:hover { background: var(--orange-glow); }

  /* ──────────────── FOOTER ──────────────── */
  footer {
    background: var(--dark2); border-top: 1px solid var(--steel);
    padding: 60px 28px 30px;
  }
  .footer-inner { max-width: 1200px; margin: 0 auto; }
  .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px; margin-bottom: 48px; }
  .footer-logo { font-family: var(--font-display); font-size: 32px; color: var(--white); margin-bottom: 14px; }
  .footer-logo span { color: var(--orange); }
  .footer-desc { font-size: 13px; color: var(--gray); line-height: 1.7; max-width: 280px; }
  .footer-col-title { font-size: 12px; font-weight: 700; color: var(--light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px; }
  .footer-link {
    display: block; color: var(--gray); text-decoration: none; font-size: 13px;
    margin-bottom: 10px; transition: color 0.2s;
  }
  .footer-link:hover { color: var(--orange); }
  .footer-bottom {
    border-top: 1px solid var(--steel); padding-top: 24px;
    display: flex; justify-content: space-between; align-items: center;
  }
  .footer-copy { font-size: 12px; color: var(--gray); font-family: var(--font-mono); }

  /* ──────────────── TOAST ──────────────── */
  #toast {
    position: fixed; bottom: 28px; right: 28px; z-index: 9998;
    display: flex; flex-direction: column; gap: 10px;
  }
  .toast-item {
    background: var(--dark3); border: 1px solid var(--orange);
    border-radius: 10px; padding: 14px 20px;
    display: flex; align-items: center; gap: 12px;
    min-width: 280px; animation: slideIn 0.3s ease;
    box-shadow: 0 8px 30px rgba(0,0,0,0.5);
  }
  @keyframes slideIn { from { transform: translateX(100px); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
  .toast-icon { font-size: 18px; }
  .toast-msg { font-size: 13px; font-weight: 500; }

  /* Scroll animations */
  .reveal { opacity: 0; transform: translateY(30px); transition: all 0.6s ease; }
  .reveal.visible { opacity: 1; transform: none; }

  /* Responsive */
  @media (max-width: 900px) {
    .hero-content, .booking-grid, .driver-layout, .footer-grid { grid-template-columns: 1fr; }
    .services-grid, .fleet-grid { grid-template-columns: repeat(2, 1fr); }
    .tracking-stats { grid-template-columns: repeat(2, 1fr); }
    .nav-links { display: none; }
  }
  @media (max-width: 560px) {
    .services-grid, .fleet-grid, .tracking-stats { grid-template-columns: 1fr; }
    .hero-stats { flex-direction: column; gap: 16px; }
    .vehicle-select { grid-template-columns: repeat(2, 1fr); }
  }
</style>
</head>
<body>

<!-- TOPBAR -->
<nav id="topbar">
  <a href="{{ route('home') }}" style="text-decoration:none;display:flex;align-items:center;gap:10px" class="logo">
    SCHNEIDER ELECTRIC
    <span style="background:var(--orange);color:var(--dark);font-size:9px;font-family:var(--font-mono);padding:2px 7px;border-radius:4px;font-weight:700;letter-spacing:1px">LOGISTICS</span>
  </a>
  <div class="nav-links">
    <a href="#booking">Book Haul</a>
    <a href="#tracking">Live Track</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('features') }}">Features</a>
    <a href="{{ route('how-it-works') }}">How It Works</a>
    <a href="{{ route('team') }}">Team</a>
    <a href="#cities">Cities</a>
  </div>
  <div class="topbar-right">
    @auth
      <div style="display:flex;align-items:center;gap:10px">
        <span style="font-size:12px;color:var(--gray)">👤 {{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}" style="margin:0">
          @csrf
          <button class="btn-ghost" type="submit">Sign Out</button>
        </form>
      </div>
    @else
      <a href="{{ route('login') }}"><button class="btn-ghost">Sign In</button></a>
      <a href="{{ route('register') }}"><button class="btn-primary">Join Free</button></a>
    @endauth
  </div>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-bg-overlay"></div>
  <div class="grid-overlay"></div>
  <div class="hero-content">
    <div class="hero-left">
      <div class="hero-eyebrow">Trusted across India's industrial corridors</div>
      <h1 class="hero-title">
        Move Heavy.<br>
        Move <span class="accent">Fast.</span>
      </h1>
      <p class="hero-subtitle">
        We connect factories, warehouses, and ports across India with certified drivers who show up on time, every time. 
        From a single pallet to an oversized ODC load — we handle it.
      </p>
      <div class="hero-cta">
        <button class="btn-large btn-orange-large" onclick="document.getElementById('booking').scrollIntoView({behavior:'smooth'})">Book a Haul</button>
        <button class="btn-large btn-outline-large" onclick="document.getElementById('tracking').scrollIntoView({behavior:'smooth'})">Track Live</button>
      </div>
      <div class="hero-stats">
        <div class="stat">
          <span class="stat-num" id="counterDrivers">0</span>
          <span class="stat-label">Certified drivers</span>
        </div>
        <div class="stat">
          <span class="stat-num" id="counterLoads">0</span>
          <span class="stat-label">Loads delivered</span>
        </div>
        <div class="stat">
          <span class="stat-num" id="counterRating">0</span>
          <span class="stat-label">Customer rating</span>
        </div>
      </div>
    </div>

    <div class="hero-right">
      <div class="hero-card">
        <div class="card-header">
          <div class="card-header-left">
            <div class="pulse-dot"></div>
            <span class="card-title">Live Dispatch — Mumbai Region</span>
          </div>
          <span class="card-badge">● LIVE</span>
        </div>
        <div id="minimap"></div>
        <div class="card-body">
          <div class="route-line">
            <div class="route-dot from"></div>
            <div style="flex:1">
              <div class="route-label">Pickup</div>
              <div class="route-value">JNPT Terminal — Nhava Sheva, Mumbai</div>
            </div>
          </div>
          <div class="route-dashes" style="margin-left:4px"></div>
          <div class="route-line">
            <div class="route-dot to"></div>
            <div style="flex:1">
              <div class="route-label">Delivery</div>
              <div class="route-value">Chakan Industrial Zone — Pune, MH</div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="driver-info">
            <div class="driver-avatar">MR</div>
            <div>
              <div class="driver-name">Rajesh Patil</div>
              <div class="driver-sub">★ 4.97 · HGV-A · 14 yrs exp</div>
            </div>
          </div>
          <div class="eta-pill" id="etaCount">ETA 14 min</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BOOKING -->
<section id="booking">
  <div style="max-width:1200px;margin:0 auto;padding:80px 0">
    <div class="section-label">On-Demand Dispatch</div>
    <h2 class="section-title reveal">Book Your Haul</h2>
    <p class="section-sub reveal">Industrial freight, scheduled or instant. Tell us what you need and we'll match you with a certified driver — usually in under 5 minutes.</p>
    <div class="booking-grid reveal">
      <!-- Form -->
      <form action="{{ route('bookings.store') }}" method="POST" class="booking-form">
        @csrf
        <div class="form-header">🏭 Configure Shipment</div>
        <div class="form-body">
          <div class="form-row">
            <div class="input-group">
              <label class="input-label">Pickup Location</label>
              <input class="input-field" type="text" placeholder="Origin address" id="pickupAddr" name="pickup_location" value="Mumbai, MH">
            </div>
            <div class="input-group">
              <label class="input-label">Delivery Location</label>
              <input class="input-field" type="text" placeholder="Destination address" id="dropAddr" name="delivery_location" value="Pune, MH">
            </div>
          </div>
          <div class="form-row">
            <div class="input-group">
              <label class="input-label">Load Weight</label>
              <input class="input-field" type="number" placeholder="lbs" id="weightInput" name="weight" value="15000" oninput="calcPrice()">
            </div>
            <div class="input-group">
              <label class="input-label">Cargo Type</label>
              <select class="input-field" id="cargoType" name="cargo_type" onchange="calcPrice()">
                <option>Steel / Metal</option>
                <option>Machinery</option>
                <option>Chemicals / Petrochemicals</option>
                <option>Cement / Construction Material</option>
                <option>Textile / Garments</option>
                <option>FMCG / Consumer Goods</option>
                <option>Pharmaceutical</option>
                <option>Automotive Parts</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="input-group">
              <label class="input-label">Pickup Date</label>
              <input class="input-field" type="date" id="pickDate" name="pickup_date">
            </div>
            <div class="input-group">
              <label class="input-label">Priority</label>
              <select class="input-field" id="priority" name="priority" onchange="calcPrice()">
                <option value="1">Standard (24-48hr)</option>
                <option value="1.5">Expedited (Same Day)</option>
                <option value="2.2">Emergency (Instant)</option>
              </select>
            </div>
          </div>
          <div class="input-group">
            <label class="input-label">Select Vehicle Class</label>
            <input type="hidden" name="vehicle_class" id="vehicle_class_input" value="1">
            <div class="vehicle-select">
              <div class="vehicle-opt selected" onclick="selectVehicle(this, 1)" data-mult="1">
                <div class="vehicle-icon">🚛</div>
                <div class="vehicle-name">Semi Truck</div>
                <div class="vehicle-cap">Up to 40,000 lbs</div>
              </div>
              <div class="vehicle-opt" onclick="selectVehicle(this, 1.4)" data-mult="1.4">
                <div class="vehicle-icon">🏗️</div>
                <div class="vehicle-name">Flatbed</div>
                <div class="vehicle-cap">Up to 48,000 lbs</div>
              </div>
              <div class="vehicle-opt" onclick="selectVehicle(this, 1.8)" data-mult="1.8">
                <div class="vehicle-icon">⚙️</div>
                <div class="vehicle-name">Heavy Haul</div>
                <div class="vehicle-cap">40,000+ kg ODC</div>
              </div>
            </div>
          </div>
          <div class="price-preview">
            <div class="price-breakdown">
              <span class="price-label">Estimated Cost</span>
              <span class="price-val" id="priceDisplay">?81,200</span>
              <span class="price-note">Includes fuel surcharge & insurance</span>
            </div>
            <div style="text-align:right">
              <div style="font-size:12px;color:var(--gray)">Est. Transit</div>
              <div style="font-family:var(--font-mono);color:var(--orange);font-size:16px" id="transitTime">~2.5 hrs</div>
              <div style="font-size:11px;color:var(--gray)" id="distDisplay">~149 km</div>
            </div>
          </div>
          <button class="book-btn" type="submit">🚛 Book Haul Now</button>
        </div>
      </form>
      <!-- Map -->
      <div>
        <div id="bookingMap"></div>
        <div class="map-controls">
          <button class="map-ctrl-btn" onclick="showToast('📍','Finding nearest drivers...')">🔍 Find Nearby Drivers</button>
          <button class="map-ctrl-btn" onclick="showToast('🗺️','Route optimized!')">⚡ Optimize Route</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LIVE TRACKING -->
<section id="tracking">
  <div class="tracking-inner">
    <div class="section-label">Real-Time Intelligence</div>
    <h2 class="section-title reveal">Live Fleet Tracker</h2>
    <p class="section-sub reveal">Know exactly where your shipment is, at any moment. Every truck, every route — streamed live so you're never left guessing.</p>
    <div id="liveTrackMap"></div>
    <div class="tracking-stats reveal">
      <div class="t-stat">
        <div class="t-stat-icon">🚛</div>
        <div class="t-stat-val" id="activeTrucks">48</div>
        <div class="t-stat-label">Trucks On Road</div>
        <div class="t-stat-change">↑ 6 from last hour</div>
      </div>
      <div class="t-stat">
        <div class="t-stat-icon">📦</div>
        <div class="t-stat-val" id="activeLoads">127</div>
        <div class="t-stat-label">Active Loads</div>
        <div class="t-stat-change">↑ 12 from yesterday</div>
      </div>
      <div class="t-stat">
        <div class="t-stat-icon">⚡</div>
        <div class="t-stat-val">4.2 min</div>
        <div class="t-stat-label">Avg Dispatch Time</div>
        <div class="t-stat-change">↓ 30 sec improvement</div>
      </div>
      <div class="t-stat">
        <div class="t-stat-icon">✅</div>
        <div class="t-stat-val">99.1%</div>
        <div class="t-stat-label">On-Time Delivery</div>
        <div class="t-stat-change">↑ 0.3% this week</div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="section-label">What We Haul</div>
  <h2 class="section-title reveal">Our Services</h2>
  <p class="section-sub reveal">From heavy machinery to hazardous cargo, we have the specialised equipment and expertise to get it there safely.</p>
  <div class="services-grid reveal">
    <div class="service-card">
      <div class="service-icon-wrap">🏗️</div>
      <div class="service-title">Heavy Haul</div>
      <div class="service-desc">Oversized and overweight cargo transport with permitted routes, escort vehicles, and specialized rigging — built for loads no one else will touch.</div>
      <div class="service-tags">
        <span class="tag">Permitted</span>
        <span class="tag">Escorted</span>
        <span class="tag">ODC Ready</span>
      </div>
    </div>
    <div class="service-card">
      <div class="service-icon-wrap">⚗️</div>
      <div class="service-title">Hazmat Freight</div>
      <div class="service-desc">Fully compliant hazardous material transport handled by certified drivers with the right training, documentation, and equipment.</div>
      <div class="service-tags">
        <span class="tag">DOT Compliant</span>
        <span class="tag">All Classes</span>
        <span class="tag">Certified</span>
      </div>
    </div>
    <div class="service-card">
      <div class="service-icon-wrap">🏭</div>
      <div class="service-title">Plant-to-Plant</div>
      <div class="service-desc">Dedicated shuttles that sync with your production calendar — so your supply chain never has to wait on freight.</div>
      <div class="service-tags">
        <span class="tag">Scheduled</span>
        <span class="tag">Dedicated</span>
        <span class="tag">Fleet Managed</span>
      </div>
    </div>
    <div class="service-card">
      <div class="service-icon-wrap">⚡</div>
      <div class="service-title">Emergency Dispatch</div>
      <div class="service-desc">Production stopped? We dispatch around the clock. A driver is on site within 30 minutes, no matter where you are in our network.</div>
      <div class="service-tags">
        <span class="tag">24/7</span>
        <span class="tag">30 min SLA</span>
        <span class="tag">Priority</span>
      </div>
    </div>
    <div class="service-card">
      <div class="service-icon-wrap">🔩</div>
      <div class="service-title">Machinery Moving</div>
      <div class="service-desc">CNC machines, presses, turbines — moved with precision rigging, cranes, and the kind of care heavy equipment deserves.</div>
      <div class="service-tags">
        <span class="tag">Rigging</span>
        <span class="tag">Crane Ready</span>
        <span class="tag">White-Glove</span>
      </div>
    </div>
    <div class="service-card">
      <div class="service-icon-wrap">📊</div>
      <div class="service-title">Supply Chain Analytics</div>
      <div class="service-desc">Live dashboards that show you fleet efficiency, route performance, and delivery trends — so you can make better decisions faster.</div>
      <div class="service-tags">
        <span class="tag">Live Reports</span>
        <span class="tag">API Access</span>
        <span class="tag">Export Ready</span>
      </div>
    </div>
  </div>
</section>

<!-- FLEET -->
<section id="fleet">
  <div class="fleet-inner">
    <div class="section-label">Our Vehicles</div>
    <h2 class="section-title reveal">The Fleet</h2>
    <p class="section-sub reveal">From standard dry vans to multi-axle heavy haulers, we have the right vehicle waiting for your load right now.</p>
    <div class="fleet-grid reveal">
      <div class="fleet-card" onclick="showToast('🚛','Semi Truck selected — checking availability...')">
        <span class="fleet-emoji">🚛</span>
        <div class="fleet-name">SEMI TRUCK</div>
        <div class="fleet-cap">Up to 20,000 kg</div>
        <div class="fleet-rate">From ₹35/km</div>
        <div class="fleet-avail">● 23 Available</div>
      </div>
      <div class="fleet-card" onclick="showToast('🏗️','Flatbed selected — checking availability...')">
        <span class="fleet-emoji">🏗️</span>
        <div class="fleet-name">FLATBED</div>
        <div class="fleet-cap">Up to 25,000 kg</div>
        <div class="fleet-rate">From ₹48/km</div>
        <div class="fleet-avail">● 14 Available</div>
      </div>
      <div class="fleet-card" onclick="showToast('🚚','Refrigerated Truck selected!')">
        <span class="fleet-emoji">❄️</span>
        <div class="fleet-name">REEFER</div>
        <div class="fleet-cap">Temp Controlled</div>
        <div class="fleet-rate">From ₹55/km</div>
        <div class="fleet-avail">● 8 Available</div>
      </div>
      <div class="fleet-card" onclick="showToast('⚙️','Heavy Haul — calling dispatcher...')">
        <span class="fleet-emoji">⚙️</span>
        <div class="fleet-name">HEAVY HAUL</div>
        <div class="fleet-cap">40,000+ kg ODC</div>
        <div class="fleet-rate">From ₹90/km</div>
        <div class="fleet-avail">● 6 Available</div>
      </div>
    </div>
  </div>
</section>

<!-- DRIVER PANEL -->
<section id="driver-panel">
  <div class="section-label">For Drivers</div>
  <div class="driver-layout reveal">
    <div>
      <h2 class="section-title">Drive with<br><span style="color:var(--orange)">Schneider.<br>Earn More.</span></h2>
      <p style="font-size:15px;color:var(--gray);line-height:1.7;margin-top:16px;">
        Our drivers are the backbone of everything we do. Set your schedule, pick the loads that work for you, 
        and get paid fast — with support available every hour of the day.
      </p>
      <div class="driver-metrics">
        <div class="metric-box">
          <div class="metric-val">₹1,80,000</div>
          <div class="metric-label">Avg. weekly earnings</div>
        </div>
        <div class="metric-box">
          <div class="metric-val">4.2 min</div>
          <div class="metric-label">Average load match time</div>
        </div>
        <div class="metric-box">
          <div class="metric-val">100%</div>
          <div class="metric-label">Instant pay available</div>
        </div>
        <div class="metric-box">
          <div class="metric-val">24/7</div>
          <div class="metric-label">Driver support line</div>
        </div>
      </div>
      <div class="driver-cta-wrap">
        <button class="btn-large btn-orange-large" onclick="showToast('🚛','Driver onboarding portal opening...')">Apply to Drive</button>
        <button class="btn-large btn-outline-large" onclick="showToast('📱','App download link sent to your phone!')">Download the App</button>
      </div>
    </div>
    <div class="driver-visual" style="padding:0;overflow:hidden;position:relative;">
      <img src="/images/driver_photo.png" alt="Schneider driver standing by his truck at a freight terminal" style="width:100%;height:320px;object-fit:cover;object-position:center top;display:block;">
      <div style="padding:22px 28px;display:flex;flex-direction:column;gap:14px;">
        <div class="dv-header" style="font-size:15px;">
          Driver Dashboard
          <div class="status-toggle">
            <span>Online</span>
            <div class="toggle-sw"></div>
          </div>
        </div>
        <div class="job-item">
          <div class="job-details">
            <div class="job-title">Steel Coils — 12,000 kg</div>
            <div class="job-meta">Mumbai JNPT → Chakan, Pune · 149 km · Flatbed</div>
          </div>
          <div class="job-price">₹18,500</div>
        </div>
        <div class="job-item" style="border-color:rgba(255,107,0,0.3)">
          <div class="job-details">
            <div class="job-title">Urgent: Machinery Parts — 4,200 kg</div>
            <div class="job-meta">Ahmedabad → Surat · 288 km · Semi</div>
          </div>
          <div class="job-price" style="color:var(--yellow)">₹15,200</div>
        </div>
        <div style="display:flex;gap:10px;">
          <div style="flex:1;background:var(--dark3);border-radius:10px;padding:14px;text-align:center">
            <div style="font-family:var(--font-mono);color:var(--orange);font-size:18px">₹74,500</div>
            <div style="font-size:11px;color:var(--gray);margin-top:4px">Today's earnings</div>
          </div>
          <div style="flex:1;background:var(--dark3);border-radius:10px;padding:14px;text-align:center">
            <div style="font-family:var(--font-mono);color:var(--green);font-size:18px">★ 4.98</div>
            <div style="font-size:11px;color:var(--gray);margin-top:4px">Your rating</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ───── CITIES SECTION ─────────────────────────────────────────────────── -->
<section id="cities" style="padding:80px 28px;max-width:1200px;margin:0 auto">
  <div class="section-label">Pan-India Coverage</div>
  <h2 class="section-title reveal">500+ Cities Covered</h2>
  <p class="section-sub reveal">From the metros to tier-2 industrial hubs — our fleet is on the ground and ready across every corner of India.</p>
  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:12px;margin-top:36px" class="reveal">
    @foreach([
      ['Mumbai','MH','🏳️'],['Delhi NCR','DL','🏹'],['Bengaluru','KA','💻'],['Chennai','TN','⛓️'],
      ['Kolkata','WB','🏭'],['Hyderabad','TS','💊'],['Pune','MH','🚗'],['Ahmedabad','GJ','🧺'],
      ['Surat','GJ','🧵'],['Jaipur','RJ','🏰'],['Lucknow','UP','🎒'],['Indore','MP','🌾'],
      ['Nagpur','MH','🍊'],['Coimbatore','TN','🧵'],['Vadodara','GJ','🏭'],['Ludhiana','PB','⚙️'],
      ['Kochi','KL','🚢'],['Visakhapatnam','AP','⚓'],['Bhopal','MP','🌿'],['Chandigarh','PB','🏗️'],
    ] as $c)
      <div style="background:var(--dark2);border:1px solid var(--steel);border-radius:12px;padding:16px;text-align:center;transition:all 0.25s;cursor:default" onmouseenter="this.style.borderColor='var(--orange)'" onmouseleave="this.style.borderColor='var(--steel)'">
        <div style="font-size:22px;margin-bottom:8px">{{ $c[2] }}</div>
        <div style="font-size:13px;font-weight:600;color:var(--light)">{{ $c[0] }}</div>
        <div style="font-size:10px;color:var(--orange);font-family:var(--font-mono);margin-top:3px">{{ $c[1] }}</div>
      </div>
    @endforeach
  </div>
</section>
<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div>
        <div class="footer-logo">SCHNEIDER<span>HAUL</span></div>
        <div class="footer-desc">India's #1 industrial on-demand freight — connecting factories, warehouses, and ports across 500+ cities with certified drivers.</div>
        <div style="margin-top:20px;display:flex;gap:12px">
          <button class="btn-ghost" onclick="showToast('📱','App store opening...')">App Store</button>
          <button class="btn-ghost" onclick="showToast('🤖','Google Play opening...')">Google Play</button>
        </div>
      </div>
      <div>
        <div class="footer-col-title">Services</div>
        <a class="footer-link" href="#">Heavy Haul</a>
        <a class="footer-link" href="#">Hazmat Freight</a>
        <a class="footer-link" href="#">Plant-to-Plant</a>
        <a class="footer-link" href="#">Emergency Dispatch</a>
        <a class="footer-link" href="#">Machinery Moving</a>
      </div>
      <div>
        <div class="footer-col-title">Company</div>
        <a class="footer-link" href="#">About Us</a>
        <a class="footer-link" href="#">Careers</a>
        <a class="footer-link" href="#">Safety</a>
        <a class="footer-link" href="#">Compliance</a>
        <a class="footer-link" href="#">Press</a>
      </div>
      <div>
        <div class="footer-col-title">Support</div>
        <a class="footer-link" href="#">Help Center</a>
        <a class="footer-link" href="#">Driver Support</a>
        <a class="footer-link" href="#">Safety Hotline</a>
        <a class="footer-link" href="#">API Docs</a>
        <a class="footer-link" href="#">Contact</a>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-copy">© 2025 Schneider Electric India Pvt. Ltd. · CIN: U72900MH2025PTC000001 · GST: 27AACCS1234P1Z5</div>
      <div style="display:flex;gap:20px">
        <a href="#" style="color:var(--gray);text-decoration:none;font-size:12px">Privacy</a>
        <a href="#" style="color:var(--gray);text-decoration:none;font-size:12px">Terms</a>
        <a href="#" style="color:var(--gray);text-decoration:none;font-size:12px">Cookies</a>
      </div>
    </div>
  </div>
</footer>

<!-- BOOKING MODAL -->
<div class="modal-overlay" id="bookingModal">
  <div class="modal">
    <div class="modal-title">🚛 Driver Dispatched!</div>
    <div class="modal-sub">Your load has been matched and your driver is en route. Track below.</div>
    <div class="modal-track">
      <div class="track-steps" id="trackSteps">
        <div class="track-step">
          <div class="step-line-wrap">
            <div class="step-dot done"></div>
            <div class="step-connector done"></div>
          </div>
          <div class="step-info">
            <div class="step-name">Order Confirmed</div>
            <div class="step-time" id="t0"></div>
          </div>
        </div>
        <div class="track-step">
          <div class="step-line-wrap">
            <div class="step-dot done"></div>
            <div class="step-connector done"></div>
          </div>
          <div class="step-info">
            <div class="step-name">Driver Matched — Marcus R.</div>
            <div class="step-time" id="t1"></div>
          </div>
        </div>
        <div class="track-step">
          <div class="step-line-wrap">
            <div class="step-dot active"></div>
            <div class="step-connector"></div>
          </div>
          <div class="step-info">
            <div class="step-name">En Route to Pickup</div>
            <div class="step-time" id="t2">Now — ETA 14 min</div>
          </div>
        </div>
        <div class="track-step">
          <div class="step-line-wrap">
            <div class="step-dot"></div>
            <div class="step-connector"></div>
          </div>
          <div class="step-info">
            <div class="step-name">Loading at Origin</div>
            <div class="step-time">Pending</div>
          </div>
        </div>
        <div class="track-step">
          <div class="step-line-wrap">
            <div class="step-dot"></div>
          </div>
          <div class="step-info">
            <div class="step-name">Delivered</div>
            <div class="step-time">Pending</div>
          </div>
        </div>
      </div>
    </div>
    <div style="background:var(--dark3);border-radius:10px;padding:14px;display:flex;gap:14px;align-items:center;margin-bottom:20px">
      <div class="driver-avatar">MR</div>
      <div style="flex:1">
        <div style="font-weight:600;font-size:14px">Marcus Reynolds</div>
        <div style="font-size:12px;color:var(--gray)">Peterbilt 389 · IL-CDL-98234 · ★ 4.97</div>
      </div>
      <button class="btn-primary" onclick="showToast('📞','Calling Marcus...')">📞 Call</button>
    </div>
    <button class="modal-close" onclick="document.getElementById('bookingModal').classList.remove('show')">Close & Track on Map</button>
  </div>
</div>

<!-- TOAST CONTAINER -->
<div id="toast"></div>

<script>
// ── TOAST ─────────────────────────────────────────────────────────────────────
function showToast(icon, msg) {
  const container = document.getElementById('toast');
  const el = document.createElement('div');
  el.className = 'toast-item';
  el.innerHTML = `<span class="toast-icon">${icon}</span><span class="toast-msg">${msg}</span>`;
  container.appendChild(el);
  setTimeout(() => { el.style.opacity = '0'; el.style.transform = 'translateX(100px)'; el.style.transition = 'all 0.3s'; setTimeout(() => el.remove(), 300); }, 3000);
}

// ── PRICE CALC ────────────────────────────────────────────────────────────────
let vehicleMult = 1;
function selectVehicle(el, mult) {
  document.querySelectorAll('.vehicle-opt').forEach(v => v.classList.remove('selected'));
  el.classList.add('selected');
  vehicleMult = mult;
  const vInput = document.getElementById('vehicle_class_input');
  if (vInput) vInput.value = mult;
  calcPrice();
}
function calcPrice() {
  const weight = parseFloat(document.getElementById('weightInput').value) || 10000;
  const priority = parseFloat(document.getElementById('priority').value) || 1;
  const base = 15000 + (weight / 1000) * 450;
  const price = Math.round(base * vehicleMult * priority / 100) * 100;
  document.getElementById('priceDisplay').textContent = '\u20b9' + price.toLocaleString('en-IN');
  const dist = Math.round(120 + Math.random() * 400);
  const hrs = (dist / 60 * vehicleMult * 0.9).toFixed(1);
  document.getElementById('transitTime').textContent = `~${hrs} hrs`;
  document.getElementById('distDisplay').textContent = `~${dist} km`;
}

// ── BOOKING MODAL ─────────────────────────────────────────────────────────────
function openBookingModal() {
  const now = new Date();
  const fmt = d => d.toLocaleTimeString([], {hour:'2-digit',minute:'2-digit'});
  document.getElementById('t0').textContent = fmt(new Date(now - 60000));
  document.getElementById('t1').textContent = fmt(new Date(now - 20000));
  document.getElementById('bookingModal').classList.add('show');
  showToast('✅', 'Driver dispatched! Marcus is on his way.');
}
document.getElementById('bookingModal').addEventListener('click', function(e) {
  if(e.target === this) this.classList.remove('show');
});

// ── DATE DEFAULT ───────────────────────────────────────────────────────────────
document.getElementById('pickDate').value = new Date().toISOString().split('T')[0];

// ── COUNTERS ──────────────────────────────────────────────────────────────────
function animCount(id, target, suffix='') {
  let v = 0; const step = target / 60;
  const interval = setInterval(() => {
    v = Math.min(v + step, target);
    const el = document.getElementById(id);
    if (el) el.textContent = Number.isInteger(target) ? Math.round(v).toLocaleString() + suffix : v.toFixed(1) + suffix;
    if (v >= target) clearInterval(interval);
  }, 25);
}
setTimeout(() => {
  animCount('counterDrivers', 1240, '+');
  animCount('counterLoads', 84300);
  animCount('counterRating', 4.9, '★');
}, 600);

// ── ETA LIVE TICKER ───────────────────────────────────────────────────────────
let eta = 14;
setInterval(() => {
  if (eta > 1) eta--;
  const el = document.getElementById('etaCount');
  if (el) el.textContent = `ETA ${eta} min`;
}, 8000);

// ── SCROLL REVEAL ─────────────────────────────────────────────────────────────
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// ── LIVE STATS TICK ───────────────────────────────────────────────────────────
setInterval(() => {
  const trucks = document.getElementById('activeTrucks');
  const loads = document.getElementById('activeLoads');
  if (trucks) trucks.textContent = 45 + Math.floor(Math.random() * 10);
  if (loads) loads.textContent = 120 + Math.floor(Math.random() * 20);
}, 5000);

// ── LEAFLET MINI MAP (HERO) — Mumbai → Pune ───────────────────────────────
const minimap = L.map('minimap', { zoomControl: false, attributionControl: false, dragging: false, scrollWheelZoom: false });
L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', { maxZoom: 19 }).addTo(minimap);
minimap.setView([19.2, 73.8], 7);
const orangeIcon = L.divIcon({ html: '<div style="width:14px;height:14px;background:#FF6B00;border-radius:50%;border:2px solid white;box-shadow:0 0 10px #FF6B00"></div>', className: '', iconSize: [14,14] });
const greenIcon = L.divIcon({ html: '<div style="width:14px;height:14px;background:#00C853;border-radius:50%;border:2px solid white;box-shadow:0 0 10px #00C853"></div>', className: '', iconSize: [14,14] });
const truckIcon = L.divIcon({ html: '<div style="font-size:20px;filter:drop-shadow(0 0 6px #FF6B00)">🚛</div>', className: '', iconSize: [24,24] });
L.marker([18.96, 72.82], {icon: orangeIcon}).addTo(minimap).bindPopup('JNPT Terminal — Nhava Sheva, Mumbai');
L.marker([18.66, 73.77], {icon: greenIcon}).addTo(minimap).bindPopup('Chakan Industrial Zone — Pune');
const truckMarker = L.marker([18.8, 73.2], {icon: truckIcon}).addTo(minimap);
let pct = 0;
setInterval(() => {
  pct = (pct + 0.004) % 1;
  const lat = 18.96 + (18.66 - 18.96) * pct;
  const lng = 72.82 + (73.77 - 72.82) * pct;
  truckMarker.setLatLng([lat, lng]);
}, 200);
L.polyline([[18.96,72.82],[18.66,73.77]], {color:'#FF6B00', weight:2, opacity:0.6, dashArray:'8 4'}).addTo(minimap);

// ── LEAFLET BOOKING MAP — India ────────────────────────────────────────────
const bookMap = L.map('bookingMap', { zoomControl: true, attributionControl: false });
L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', { maxZoom: 19 }).addTo(bookMap);
bookMap.setView([19.5, 73.5], 7);
const bOrange = L.divIcon({ html: '<div style="width:16px;height:16px;background:#FF6B00;border-radius:50%;border:3px solid white;box-shadow:0 0 12px #FF6B00"></div>', className: '', iconSize: [16,16] });
const bGreen = L.divIcon({ html: '<div style="width:16px;height:16px;background:#00C853;border-radius:50%;border:3px solid white;box-shadow:0 0 12px #00C853"></div>', className: '', iconSize: [16,16] });
L.marker([18.96,72.82], {icon: bOrange}).addTo(bookMap).bindPopup('<b>Pickup:</b> JNPT, Mumbai');
L.marker([18.66,73.77], {icon: bGreen}).addTo(bookMap).bindPopup('<b>Delivery:</b> Chakan, Pune');
L.polyline([[18.96,72.82],[18.66,73.77]], {color:'#FF6B00', weight:3, opacity:0.8, dashArray:'10 5'}).addTo(bookMap);
// Nearby drivers in Maharashtra
const drivers = [[19.1,72.9],[18.9,73.1],[19.3,73.3],[18.5,73.6]];
const dIcon = L.divIcon({ html: '<div style="font-size:16px">🚛</div>', className: '', iconSize: [20,20] });
drivers.forEach(pos => L.marker(pos, {icon: dIcon}).addTo(bookMap).bindPopup('Driver Available'));

// ── LEAFLET LIVE TRACK MAP — Pan-India ─────────────────────────────────────
const liveMap = L.map('liveTrackMap', { zoomControl: true, attributionControl: false });
L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', { maxZoom: 19 }).addTo(liveMap);
liveMap.setView([20.5, 79.0], 5);
// Multiple trucks moving across India
const liveTrucks = [
  { start: [18.96,72.82], end: [18.66,73.77], label: 'Steel Coils — 12,000 kg | Mumbai → Pune', color:'#FF6B00' },
  { start: [17.38,78.49], end: [12.97,77.59],  label: 'Pharmaceutical — 8,000 kg | Hyderabad → Bengaluru', color:'#FFD600' },
  { start: [22.57,88.36], end: [13.08,80.27],  label: 'Machinery — 15,000 kg | Kolkata → Chennai', color:'#00C853' },
  { start: [23.02,72.57], end: [28.63,77.22],  label: 'Textile — 6,000 kg | Ahmedabad → Delhi', color:'#FF6B00' },
];
const liveTruckMarkers = liveTrucks.map((t, i) => {
  const icon = L.divIcon({ html: `<div style="font-size:18px;filter:drop-shadow(0 0 5px ${t.color})">🚛</div>`, className: '', iconSize: [22,22] });
  L.polyline([t.start, t.end], {color: t.color, weight:2, opacity:0.4, dashArray:'8 4'}).addTo(liveMap);
  return { marker: L.marker(t.start, {icon}).addTo(liveMap).bindPopup(t.label), t, pct: Math.random() };
});
setInterval(() => {
  liveTruckMarkers.forEach(lt => {
    lt.pct = (lt.pct + 0.003) % 1;
    const lat = lt.t.start[0] + (lt.t.end[0] - lt.t.start[0]) * lt.pct;
    const lng = lt.t.start[1] + (lt.t.end[1] - lt.t.start[1]) * lt.pct;
    lt.marker.setLatLng([lat, lng]);
  });
}, 300);
</script>
@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        openBookingModal();
        showToast('✅', '{{ session('success') }}');
    });
</script>
@endif
</body>
</html>
