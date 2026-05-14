@extends('layouts.app')

@section('title', 'How It Works — Schneider Electric Logistics')
@section('meta_desc', 'Learn how Schneider Electric Logistics works — from booking your haul to delivery in 5 simple steps. Instant dispatch, live tracking, and GST billing.')
@section('canonical', '/how-it-works')

@section('content')

{{-- HERO --}}
<section style="padding:80px 28px 60px;border-bottom:1px solid var(--steel);position:relative;overflow:hidden;text-align:center;">
  <div style="max-width:1200px;margin:0 auto;position:relative;z-index:2;">
    <div class="hero-badge reveal">🗺️ The Process</div>
    <h1 class="section-title reveal" style="font-size:clamp(48px,6vw,84px)">
      FROM BOOKING TO<br><span style="color:var(--green-se)">DELIVERY IN MINUTES</span>
    </h1>
    <p style="font-size:17px;color:var(--gray);max-width:600px;line-height:1.8;margin:20px auto 0" class="reveal">
      We've eliminated every friction point in industrial freight. Here's exactly how Schneider Electric works —
      from your first click to the final kilometre.
    </p>
  </div>
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 50% 60%, rgba(61,205,88,0.07) 0%, transparent 60%);pointer-events:none;"></div>
</section>

{{-- STEPS --}}
<section style="padding:80px 28px;max-width:1000px;margin:0 auto;">
  <div class="section-label">Step-by-Step</div>
  <h2 class="section-title reveal">5 STEPS. ONE HAUL.</h2>

  @foreach([
    ['01', '📋', 'Configure Your Shipment', 'Fill in your pickup and delivery locations (anywhere in India), enter your cargo weight and type, select your preferred vehicle class (Semi Truck, Flatbed, Reefer, or Heavy Haul), and choose your priority level — Standard, Expedited, or Emergency.', ['Takes 60 seconds', 'Any city in India', '8 cargo types']],
    ['02', '💰', 'Get Instant Transparent Quote', 'Our AI pricing engine calculates your freight cost in real-time based on distance, weight, vehicle type, fuel surcharge, tolls, and GST. No negotiation, no hidden fees — just a clear price. Lock it in with one click.', ['Rate locked instantly', 'Includes all taxes', 'No hidden costs']],
    ['03', '⚡', 'Driver Auto-Matched & Dispatched', 'Our dispatch engine scans all available, verified drivers within your pickup radius and matches the optimal driver based on proximity, vehicle type, cargo certification, and driver rating. You get a match in under 4 minutes, 24/7.', ['< 4 min average', 'Verified drivers only', 'Rating-based match']],
    ['04', '📍', 'Track Your Load Live', 'The moment your driver picks up the cargo, live GPS tracking activates on your dashboard. Watch your shipment move across India in real-time. Get ETA alerts, route deviation notifications, and delivery confirmation automatically.', ['30-sec GPS updates', 'WhatsApp alerts', 'Proof of Delivery']],
    ['05', '🧾', 'Auto-Generated GST Documents', 'On delivery, a digital Proof of Delivery (POD) is captured instantly. Your GST invoice, Lorry Receipt (LR), and E-Way Bill are automatically generated and sent to your email and portal. Seamlessly integrated with Tally and SAP ERP systems.', ['Instant LR + Invoice', 'E-Way Bill auto', 'Tally / SAP sync']],
  ] as $s)
  <div class="reveal" style="display:flex;gap:32px;margin-bottom:48px;align-items:flex-start">
    {{-- Step Number --}}
    <div style="flex-shrink:0;display:flex;flex-direction:column;align-items:center">
      <div style="width:72px;height:72px;border-radius:50%;background:linear-gradient(135deg,rgba(61,205,88,0.15),rgba(61,205,88,0.05));border:2px solid var(--green-se);display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:28px;color:var(--green-se);flex-shrink:0">
        {{ $s[0] }}
      </div>
      @if($s[0] !== '05')
      <div style="width:2px;height:60px;background:linear-gradient(var(--green-se),rgba(61,205,88,0.1));margin-top:8px"></div>
      @endif
    </div>
    {{-- Content --}}
    <div style="flex:1;padding-top:10px">
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
        <span style="font-size:28px">{{ $s[1] }}</span>
        <div style="font-family:var(--font-display);font-size:26px;color:var(--white)">{{ $s[2] }}</div>
      </div>
      <p style="font-size:14px;color:var(--gray);line-height:1.8;margin-bottom:14px">{{ $s[3] }}</p>
      <div style="display:flex;gap:8px;flex-wrap:wrap">
        @foreach($s[4] as $tag)
        <span style="font-size:11px;padding:4px 12px;border-radius:20px;background:rgba(61,205,88,0.08);border:1px solid rgba(61,205,88,0.2);color:var(--green-se);font-family:var(--font-mono)">✓ {{ $tag }}</span>
        @endforeach
      </div>
    </div>
  </div>
  @endforeach
</section>

{{-- USE CASES --}}
<section style="padding:60px 28px;background:var(--dark2);border-top:1px solid var(--steel);border-bottom:1px solid var(--steel);">
  <div style="max-width:1200px;margin:0 auto">
    <div class="section-label" style="text-align:center">Who Uses Schneider Electric</div>
    <h2 class="section-title reveal" style="text-align:center;margin-bottom:48px">BUILT FOR EVERY INDUSTRY</h2>

    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px" class="reveal">
      @foreach([
        ['🏗️', 'Construction', 'TMT bars, cement, machinery, and ODC loads for infrastructure projects.'],
        ['⚙️', 'Manufacturing', 'Raw material inbound and finished goods outbound for factories.'],
        ['💊', 'Pharma', 'Temperature-controlled reefer transport for medicines and vaccines.'],
        ['🚗', 'Automotive', 'CKD kits, stamped parts, and assembly-line components.'],
        ['🧵', 'Textile', 'Yarn, fabric, and garment shipments from mills to export houses.'],
        ['🌾', 'Agri-Commodities', 'Grain, pulses, and processed foods with food-grade vehicles.'],
        ['🛢️', 'Chemicals', 'Hazmat-certified tankers and containers for chemical freight.'],
        ['⚡', 'Energy / Power', 'Transformers, cables, and solar panel transport for infra projects.'],
      ] as $u)
      <div style="background:var(--dark3);border:1px solid var(--steel);border-radius:14px;padding:22px;transition:all 0.3s"
           onmouseenter="this.style.borderColor='rgba(61,205,88,0.3)';this.style.transform='translateY(-4px)'"
           onmouseleave="this.style.borderColor='var(--steel)';this.style.transform='none'">
        <div style="font-size:30px;margin-bottom:12px">{{ $u[0] }}</div>
        <div style="font-family:var(--font-display);font-size:18px;color:var(--white);margin-bottom:8px">{{ $u[1] }}</div>
        <div style="font-size:12px;color:var(--gray);line-height:1.6">{{ $u[2] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- FAQ --}}
<section style="padding:80px 28px;max-width:800px;margin:0 auto;">
  <div class="section-label">Got Questions?</div>
  <h2 class="section-title reveal" style="margin-bottom:40px">FREQUENTLY ASKED</h2>

  @foreach([
    ['How quickly can I book a truck?', 'Once you submit your shipment details, our system matches you with a driver in under 4 minutes. Total booking time from start to driver confirmation is typically under 6 minutes.'],
    ['What if I need to move cargo across state borders?', 'We handle all inter-state freight including E-Way Bill generation, permit coordination, and cross-state driver handoffs automatically. No extra steps needed.'],
    ['Is cargo insurance mandatory?', 'Cargo insurance up to ₹2 Crore is automatically included in every booking at no extra cost. This covers theft, damage, and loss during transit.'],
    ['Can I integrate with my ERP (Tally, SAP)?', 'Yes. We provide REST APIs and native integrations for Tally, SAP, and Oracle ERP systems. Your logistics data syncs automatically without manual entry.'],
    ['Do you support temperature-controlled (reefer) transport?', 'Absolutely. Our reefer fleet operates across all major Indian cities with real-time temperature logging, cold chain reports, and pharma-grade compliance.'],
    ['How are drivers verified?', 'Every driver undergoes background verification (police clearance), driving licence validation, vehicle fitness check, and cargo certification check before being onboarded. Ratings are continuously monitored.'],
  ] as $i => $faq)
  <div class="reveal" style="border:1px solid var(--steel);border-radius:12px;margin-bottom:12px;overflow:hidden;transition:border-color 0.2s"
       onmouseenter="this.style.borderColor='rgba(61,205,88,0.3)'" onmouseleave="this.style.borderColor='var(--steel)'">
    <details style="cursor:pointer">
      <summary style="padding:18px 24px;font-size:14px;font-weight:600;color:var(--light);list-style:none;display:flex;justify-content:space-between;align-items:center;user-select:none">
        {{ $faq[0] }}
        <span style="font-size:18px;color:var(--green-se);font-family:var(--font-mono)">+</span>
      </summary>
      <div style="padding:0 24px 18px;font-size:13px;color:var(--gray);line-height:1.8;border-top:1px solid var(--steel)">
        <div style="padding-top:14px">{{ $faq[1] }}</div>
      </div>
    </details>
  </div>
  @endforeach
</section>

{{-- CTA --}}
<section style="padding:60px 28px 80px;text-align:center;">
  <div style="max-width:600px;margin:0 auto" class="reveal">
    <h2 style="font-family:var(--font-display);font-size:48px;color:var(--white);margin-bottom:16px">MOVE YOUR FIRST LOAD</h2>
    <p style="font-size:15px;color:var(--gray);line-height:1.7;margin-bottom:32px">Takes 60 seconds. No commitment. Get an instant quote now.</p>
    <a href="{{ route('register') }}" style="padding:18px 48px;background:var(--green-se);color:var(--dark);border-radius:12px;font-family:var(--font-body);font-size:16px;font-weight:700;text-decoration:none;display:inline-block;transition:all 0.25s;box-shadow:0 4px 20px rgba(61,205,88,0.3)"
       onmouseenter="this.style.transform='translateY(-3px)';this.style.boxShadow='0 12px 40px rgba(61,205,88,0.5)'"
       onmouseleave="this.style.transform='none';this.style.boxShadow='0 4px 20px rgba(61,205,88,0.3)'">
      🚛 Book Your First Haul →
    </a>
  </div>
</section>

@endsection
