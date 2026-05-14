@extends('layouts.app')

@section('title', 'About Schneider Electric Logistics — India\'s Industrial Freight Pioneer')
@section('meta_desc', 'Learn about Schneider Electric Logistics — our history, mission, and how we became India\'s most trusted industrial freight network since 1995.')
@section('canonical', '/about')

@section('content')

{{-- HERO --}}
<section style="padding:80px 28px 60px; border-bottom: 1px solid var(--steel); position:relative; overflow:hidden;">
  <div style="max-width:1200px;margin:0 auto;position:relative;z-index:2;">
    <div class="hero-badge reveal">🏭 Our Story</div>
    <h1 class="section-title reveal" style="font-size:clamp(48px,6vw,84px)">
      POWERING INDIA'S<br><span style="color:var(--green-se)">INDUSTRIAL FUTURE</span>
    </h1>
    <p style="font-size:17px;color:var(--gray);max-width:700px;line-height:1.8;margin-top:20px" class="reveal">
      For nearly three decades, Schneider Electric Logistics has been the invisible backbone of India's industrial economy —
      moving steel, machinery, chemicals, and critical equipment across the subcontinent with precision, speed, and trust.
    </p>
    <div style="display:flex;gap:32px;margin-top:48px;flex-wrap:wrap" class="reveal">
      <div style="border-left:3px solid var(--green-se);padding-left:20px">
        <div style="font-family:var(--font-display);font-size:48px;color:var(--white)">1995</div>
        <div style="font-size:12px;color:var(--gray);text-transform:uppercase;letter-spacing:1px">Founded in Mumbai</div>
      </div>
      <div style="border-left:3px solid var(--green-se);padding-left:20px">
        <div style="font-family:var(--font-display);font-size:48px;color:var(--white)">500+</div>
        <div style="font-size:12px;color:var(--gray);text-transform:uppercase;letter-spacing:1px">Cities Covered</div>
      </div>
      <div style="border-left:3px solid var(--green-se);padding-left:20px">
        <div style="font-family:var(--font-display);font-size:48px;color:var(--white)">84K+</div>
        <div style="font-size:12px;color:var(--gray);text-transform:uppercase;letter-spacing:1px">Loads Delivered</div>
      </div>
      <div style="border-left:3px solid var(--green-se);padding-left:20px">
        <div style="font-family:var(--font-display);font-size:48px;color:var(--white)">1,240+</div>
        <div style="font-size:12px;color:var(--gray);text-transform:uppercase;letter-spacing:1px">Active Drivers</div>
      </div>
    </div>
  </div>
  {{-- BG gradient --}}
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 80% 50%, rgba(61,205,88,0.06) 0%, transparent 60%);pointer-events:none;"></div>
</section>

{{-- MISSION & VISION --}}
<section style="padding:80px 28px;max-width:1200px;margin:0 auto;">
  <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:start">
    <div class="reveal">
      <div class="section-label">Our Mission</div>
      <h2 style="font-family:var(--font-display);font-size:40px;color:var(--white);margin-bottom:20px;line-height:1">
        MOVE INDIA'S INDUSTRY FORWARD
      </h2>
      <p style="font-size:15px;color:var(--gray);line-height:1.8;">
        Our mission is to eliminate the friction in industrial freight — making it as simple to move 40 tonnes of steel
        from Bhilai to Chennai as it is to book a cab. We believe every factory, plant, and industrial estate in India
        deserves world-class logistics on demand, with full transparency and zero surprises.
      </p>
      <div style="margin-top:28px;padding:20px;background:var(--dark2);border:1px solid var(--steel);border-radius:12px;border-left:3px solid var(--green-se)">
        <div style="font-size:13px;color:var(--gray);font-style:italic;line-height:1.7">
          "We are not just a trucking company. We are the digital nervous system of Indian manufacturing."
        </div>
        <div style="margin-top:12px;font-size:12px;color:var(--green-se);font-family:var(--font-mono)">— Founding Charter, 1995</div>
      </div>
    </div>
    <div class="reveal" style="display:flex;flex-direction:column;gap:16px">
      <div class="section-label">Our Vision</div>
      <h2 style="font-family:var(--font-display);font-size:40px;color:var(--white);margin-bottom:4px;line-height:1">
        INDIA'S #1 INDUSTRIAL FREIGHT PLATFORM BY 2030
      </h2>
      <p style="font-size:15px;color:var(--gray);line-height:1.8;">
        To become the definitive platform for industrial freight in South Asia — covering every port, SEZ, industrial
        corridor, and manufacturing hub with real-time, on-demand logistics powered by technology and trusted by the
        world's largest manufacturers operating in India.
      </p>
      @foreach([
        ['🇮🇳', 'Present in all 28 Indian States & 8 UTs'],
        ['🏭', '4,200+ industrial clients including Fortune 500'],
        ['⚡', 'Sub-5 minute average dispatch time'],
        ['🔒', 'ISO 9001:2015 & ISO 14001:2015 certified'],
      ] as $v)
      <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;background:var(--dark2);border:1px solid var(--steel);border-radius:10px">
        <span style="font-size:20px">{{ $v[0] }}</span>
        <span style="font-size:13px;color:var(--light)">{{ $v[1] }}</span>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- TIMELINE --}}
<section style="padding:60px 28px 80px;background:var(--dark2);border-top:1px solid var(--steel);border-bottom:1px solid var(--steel);">
  <div style="max-width:900px;margin:0 auto;">
    <div class="section-label" style="text-align:center">Company History</div>
    <h2 class="section-title reveal" style="text-align:center;margin-bottom:60px">THREE DECADES OF IMPACT</h2>

    @foreach([
      ['1995', '🏛️', 'Founded in Mumbai', 'Schneider Electric Logistics was established in Andheri East, Mumbai with a fleet of just 12 trucks and a vision to modernise industrial freight in India. Founders Arjun Mehta and Priya Sharma started with JNPT port operations.'],
      ['2001', '🗺️', 'National Expansion', 'Expanded operations to Delhi, Chennai, and Kolkata. Launched the first India-wide industrial freight network connecting all 4 major metro industrial corridors. Fleet grew to 280 vehicles.'],
      ['2008', '💻', 'Digital Transformation', 'Launched India\'s first online freight booking portal for industrial cargo. Introduced real-time GPS tracking, 3 years before Uber existed in India. Filed 2 patents for route-optimization algorithms.'],
      ['2014', '📱', 'Mobile-First Platform', 'Launched Android and iOS apps enabling on-demand freight booking from any device. Integrated GST-compliant digital invoicing 3 years ahead of GST rollout. Passed 10,000 daily bookings milestone.'],
      ['2019', '🤖', 'AI & Automation', 'Deployed AI-powered dispatch engine reducing average match time to under 4 minutes. Introduced predictive freight pricing, automated LORRY RECEIPT generation, and driver rating analytics.'],
      ['2023', '🚀', 'Schneider Electric Platform Launch', 'Launched the next-generation Schneider Electric platform with live fleet tracking, instant driver dispatch, and B2B freight management API. Crossed ₹1,000 Cr in annual freight booked.'],
      ['2025', '🌐', 'Pan-India #1 Position', 'Achieved market leadership in industrial on-demand freight. 1,240+ active drivers, 500+ cities, 84,000+ loads delivered. Expanding to Sri Lanka, Bangladesh, and Nepal corridors.'],
    ] as $t)
    <div class="reveal" style="display:flex;gap:24px;margin-bottom:40px;position:relative">
      <div style="display:flex;flex-direction:column;align-items:center;flex-shrink:0">
        <div style="width:48px;height:48px;border-radius:50%;background:var(--dark3);border:2px solid var(--green-se);display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0">{{ $t[1] }}</div>
        <div style="width:2px;flex:1;background:linear-gradient(var(--green-se),transparent);margin-top:8px;min-height:40px"></div>
      </div>
      <div style="padding-bottom:8px">
        <div style="font-family:var(--font-mono);font-size:12px;color:var(--green-se);margin-bottom:4px">{{ $t[0] }}</div>
        <div style="font-family:var(--font-display);font-size:22px;color:var(--white);margin-bottom:8px">{{ $t[2] }}</div>
        <div style="font-size:14px;color:var(--gray);line-height:1.7">{{ $t[3] }}</div>
      </div>
    </div>
    @endforeach
  </div>
</section>

{{-- VALUES --}}
<section style="padding:80px 28px;max-width:1200px;margin:0 auto;">
  <div class="section-label">What Drives Us</div>
  <h2 class="section-title reveal">OUR CORE VALUES</h2>
  <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:40px" class="reveal">
    @foreach([
      ['⚡', 'Speed', 'Every second matters in industrial operations. We obsess over reducing dispatch time, transit time, and billing time.'],
      ['🔒', 'Trust', 'Your cargo is your business continuity. We treat every consignment with the same care as if it were our own.'],
      ['📊', 'Transparency', 'Real-time tracking, instant notifications, and clear pricing — no hidden fees, no surprises, ever.'],
      ['🌍', 'Sustainability', 'Committed to reducing the carbon footprint of Indian freight through route optimization and EV fleet integration.'],
      ['🤝', 'Partnership', 'We succeed when our clients succeed and our drivers earn well. Every stakeholder matters equally.'],
      ['🇮🇳', 'India First', 'Built for Indian roads, Indian regulations, and Indian industries. Localised, compliant, and deeply rooted.'],
    ] as $v)
    <div style="background:var(--dark2);border:1px solid var(--steel);border-radius:16px;padding:28px;transition:all 0.3s;position:relative;overflow:hidden"
         onmouseenter="this.style.borderColor='rgba(61,205,88,0.4)';this.style.transform='translateY(-4px)'"
         onmouseleave="this.style.borderColor='var(--steel)';this.style.transform='translateY(0)'">
      <div style="position:absolute;top:0;left:0;right:0;height:2px;background:var(--green-se);transform:scaleX(0);transform-origin:left;transition:transform 0.3s" class="val-line"></div>
      <div style="width:52px;height:52px;border-radius:12px;background:rgba(61,205,88,0.1);border:1px solid rgba(61,205,88,0.2);display:flex;align-items:center;justify-content:center;font-size:24px;margin-bottom:20px">{{ $v[0] }}</div>
      <div style="font-family:var(--font-display);font-size:22px;margin-bottom:10px">{{ $v[1] }}</div>
      <div style="font-size:13px;color:var(--gray);line-height:1.7">{{ $v[2] }}</div>
    </div>
    @endforeach
  </div>
</section>

@endsection
