@extends('layouts.app')

@section('title', 'Features — Schneider Electric Logistics Platform')
@section('meta_desc', 'Explore all features of Schneider Electric Logistics — real-time GPS tracking, instant dispatch, AI pricing, GST billing, and more.')
@section('canonical', '/features')

@section('content')

{{-- HERO --}}
<section style="padding:80px 28px 60px;border-bottom:1px solid var(--steel);position:relative;overflow:hidden;text-align:center;">
  <div style="max-width:1200px;margin:0 auto;position:relative;z-index:2;">
    <div class="hero-badge reveal">⚡ Platform Capabilities</div>
    <h1 class="section-title reveal" style="font-size:clamp(48px,6vw,84px)">
      BUILT FOR INDIA'S<br><span style="color:var(--green-se)">TOUGHEST HAULS</span>
    </h1>
    <p style="font-size:17px;color:var(--gray);max-width:640px;line-height:1.8;margin:20px auto 0" class="reveal">
      Every feature engineered to solve a real problem faced by Indian industrial freight operators —
      from booking to billing, dispatch to delivery.
    </p>
  </div>
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 50% 50%, rgba(61,205,88,0.07) 0%, transparent 60%);pointer-events:none;"></div>
</section>

{{-- FEATURE CARDS GRID --}}
<section style="padding:80px 28px;max-width:1200px;margin:0 auto;">
  <div class="section-label">Core Features</div>
  <h2 class="section-title reveal">WHAT MAKES US DIFFERENT</h2>

  <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:48px">
    @foreach([
      ['📍', 'Real-Time GPS Tracking', 'Track every truck live on an interactive map. Know exactly where your consignment is — city, road, even the lane. Updates every 30 seconds with route deviation alerts.', ['Live Location', 'Route Alerts', 'ETA Updates']],
      ['⚡', 'Instant Dispatch Engine', 'Our AI dispatch engine matches your load to the nearest available certified driver in under 4 minutes — 10x faster than traditional freight booking.', ['Sub-4 min match', 'AI Optimised', '24/7 Available']],
      ['🧾', 'GST-Compliant E-Billing', 'Auto-generated digital Lorry Receipts (LR), E-Way Bills, and GST invoices. Fully compliant with MCA and GSTN norms. Zero manual paperwork.', ['E-Way Bill', 'Auto LR Gen', 'GSTIN Linked']],
      ['💰', 'Transparent Pricing', 'Dynamic freight rates calculated by distance, weight, cargo type, and vehicle class. No hidden charges. Lock your rate before booking. Instant quote in seconds.', ['No Hidden Fees', 'Live Quotes', 'Rate Lock']],
      ['🔒', 'Cargo Insurance', 'Every consignment is automatically covered up to ₹2 Cr under our comprehensive cargo insurance policy. Single-click claim filing with 72-hour settlement.', ['Up to ₹2 Cr', 'One-Click Claim', '72hr Settlement']],
      ['📊', 'Analytics Dashboard', 'Full freight analytics — spend trends, delivery performance, driver ratings, route efficiency. Export to Excel or integrate via API with your ERP.', ['ERP Integration', 'Custom Reports', 'API Access']],
      ['🗓️', 'Smart Scheduling', 'Plan hauls days or weeks in advance. Recurring schedules for plant-to-plant operations. Auto-rematch if driver cancels with zero disruption.', ['Pre-Scheduling', 'Recurring Hauls', 'Auto-Rematch']],
      ['📱', 'Driver Mobile App', 'Purpose-built app for drivers with job matching, navigation, digital pod, and instant payment settlement. Supports 12 Indian languages.', ['12 Languages', 'Instant Pay', 'Digital POD']],
      ['🤖', 'AI Route Optimisation', 'Our engine analyses real-time traffic, road conditions, permit zones, and weight restrictions to find the fastest, most cost-effective route for every haul.', ['Traffic-Aware', 'Permit Zones', 'Weight Limits']],
    ] as $f)
    <div class="reveal" style="background:var(--dark2);border:1px solid var(--steel);border-radius:18px;padding:28px;transition:all 0.3s;position:relative;overflow:hidden"
         onmouseenter="this.style.borderColor='rgba(61,205,88,0.4)';this.style.transform='translateY(-5px)';this.style.boxShadow='0 20px 40px rgba(0,0,0,0.4)';this.querySelector('.feat-bar').style.transform='scaleX(1)'"
         onmouseleave="this.style.borderColor='var(--steel)';this.style.transform='none';this.style.boxShadow='none';this.querySelector('.feat-bar').style.transform='scaleX(0)'">
      <div class="feat-bar" style="position:absolute;top:0;left:0;right:0;height:2px;background:var(--green-se);transform:scaleX(0);transform-origin:left;transition:transform 0.4s"></div>
      <div style="width:54px;height:54px;border-radius:14px;background:rgba(61,205,88,0.1);border:1px solid rgba(61,205,88,0.2);display:flex;align-items:center;justify-content:center;font-size:26px;margin-bottom:20px">{{ $f[0] }}</div>
      <div style="font-family:var(--font-display);font-size:22px;color:var(--white);margin-bottom:10px">{{ $f[1] }}</div>
      <div style="font-size:13px;color:var(--gray);line-height:1.7;margin-bottom:16px">{{ $f[2] }}</div>
      <div style="display:flex;gap:6px;flex-wrap:wrap">
        @foreach($f[3] as $tag)
        <span style="font-size:10px;padding:3px 9px;border-radius:20px;background:var(--dark3);border:1px solid var(--steel);color:var(--gray);font-family:var(--font-mono)">{{ $tag }}</span>
        @endforeach
      </div>
    </div>
    @endforeach
  </div>
</section>

{{-- COMPARISON TABLE --}}
<section style="padding:60px 28px 80px;background:var(--dark2);border-top:1px solid var(--steel);">
  <div style="max-width:900px;margin:0 auto">
    <div class="section-label" style="text-align:center">Why Choose Us</div>
    <h2 class="section-title reveal" style="text-align:center;margin-bottom:48px">SCHNEIDER ELECTRIC VS TRADITIONAL FREIGHT</h2>

    <div class="reveal" style="background:var(--dark3);border:1px solid var(--steel);border-radius:16px;overflow:hidden">
      <table style="width:100%;border-collapse:collapse">
        <thead>
          <tr style="border-bottom:1px solid var(--steel)">
            <th style="padding:16px 20px;text-align:left;font-size:12px;color:var(--gray);font-family:var(--font-mono);font-weight:normal">FEATURE</th>
            <th style="padding:16px 20px;text-align:center;font-size:12px;color:var(--green-se);font-family:var(--font-mono)">SCHNEIDER ELECTRIC</th>
            <th style="padding:16px 20px;text-align:center;font-size:12px;color:var(--gray);font-family:var(--font-mono)">TRADITIONAL FREIGHT</th>
          </tr>
        </thead>
        <tbody>
          @foreach([
            ['Booking Time', '< 4 minutes', '2–8 hours'],
            ['Live Tracking', '✅ Real-time GPS', '❌ Phone calls only'],
            ['Pricing', '✅ Instant transparent quote', '❌ Manual negotiation'],
            ['Billing', '✅ Auto GST + E-Way Bill', '❌ Manual paper receipts'],
            ['Availability', '✅ 24/7/365', '❌ Business hours only'],
            ['Cargo Insurance', '✅ Auto-included up to ₹2 Cr', '❌ Separate arrangement'],
            ['Driver Vetting', '✅ Background checked & rated', '❌ Unknown quality'],
            ['Analytics', '✅ Full dashboard + API', '❌ No data available'],
          ] as $i => $v)
          <tr style="border-bottom:1px solid var(--steel);background:{{ $i % 2 === 0 ? 'transparent' : 'rgba(255,255,255,0.02)' }}">
            <td style="padding:14px 20px;font-size:13px;color:var(--light)">{{ $v[0] }}</td>
            <td style="padding:14px 20px;text-align:center;font-size:13px;color:var(--green-se);font-family:var(--font-mono)">{{ $v[1] }}</td>
            <td style="padding:14px 20px;text-align:center;font-size:13px;color:#666;font-family:var(--font-mono)">{{ $v[2] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

{{-- CTA --}}
<section style="padding:80px 28px;text-align:center;">
  <div style="max-width:600px;margin:0 auto" class="reveal">
    <h2 style="font-family:var(--font-display);font-size:48px;color:var(--white);margin-bottom:16px">READY TO EXPERIENCE IT?</h2>
    <p style="font-size:15px;color:var(--gray);line-height:1.7;margin-bottom:32px">Join 4,200+ industrial companies already using Schneider Electric Logistics.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
      <a href="{{ route('register') }}" style="padding:16px 36px;background:var(--green-se);color:var(--dark);border-radius:10px;font-family:var(--font-body);font-size:15px;font-weight:700;text-decoration:none;transition:all 0.25s;display:inline-block"
         onmouseenter="this.style.background='#4ae869';this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 30px rgba(61,205,88,0.5)'"
         onmouseleave="this.style.background='var(--green-se)';this.style.transform='none';this.style.boxShadow='none'">
        🚀 Start Free Today
      </a>
      <a href="{{ route('how-it-works') }}" style="padding:16px 36px;background:transparent;color:var(--light);border:1px solid var(--steel);border-radius:10px;font-family:var(--font-body);font-size:15px;font-weight:600;text-decoration:none;transition:all 0.25s;display:inline-block"
         onmouseenter="this.style.borderColor='var(--green-se)';this.style.color='var(--green-se)'"
         onmouseleave="this.style.borderColor='var(--steel)';this.style.color='var(--light)'">
        📖 See How It Works
      </a>
    </div>
  </div>
</section>

@endsection
