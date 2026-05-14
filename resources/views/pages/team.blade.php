@extends('layouts.app')

@section('title', 'Meet the Team — Schneider Electric Logistics')
@section('meta_desc', 'Meet the talented engineers and developers behind Schneider Electric Logistics — Harsh Chauhan and Tejaswi Yadav.')
@section('canonical', '/team')

@section('content')

{{-- HERO --}}
<section style="padding:80px 28px 60px;border-bottom:1px solid var(--steel);position:relative;overflow:hidden;">
  <div style="max-width:1200px;margin:0 auto;position:relative;z-index:2;text-align:center;">
    <div class="hero-badge reveal">👨‍💻 The Builders</div>
    <h1 class="section-title reveal" style="font-size:clamp(48px,6vw,84px)">
      THE TEAM BEHIND<br><span style="color:var(--green-se)">SCHNEIDER ELECTRIC</span>
    </h1>
    <p style="font-size:17px;color:var(--gray);max-width:600px;line-height:1.8;margin:20px auto 0" class="reveal">
      A small, high-impact engineering team that built India's most advanced industrial freight platform from scratch.
      Passionate engineers. Relentless builders.
    </p>
  </div>
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 50% 60%, rgba(61,205,88,0.06) 0%, transparent 60%);pointer-events:none;"></div>
</section>

{{-- TEAM MEMBERS --}}
<section style="padding:80px 28px;max-width:1000px;margin:0 auto;">
  <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:start">

    {{-- HARSH CHAUHAN --}}
    <div class="reveal" style="background:var(--dark2);border:1px solid var(--steel);border-radius:24px;overflow:hidden;transition:all 0.4s"
         onmouseenter="this.style.borderColor='rgba(61,205,88,0.5)';this.style.transform='translateY(-6px)';this.style.boxShadow='0 30px 60px rgba(0,0,0,0.5)'"
         onmouseleave="this.style.borderColor='var(--steel)';this.style.transform='none';this.style.boxShadow='none'">
      {{-- Card Top --}}
      <div style="padding:40px 36px 32px;background:linear-gradient(135deg,rgba(61,205,88,0.08),rgba(61,205,88,0.02));border-bottom:1px solid var(--steel);text-align:center;">
        <div style="width:120px;height:120px;border-radius:50%;background:linear-gradient(135deg,#3DCD58,#1a7a30);display:flex;align-items:center;justify-content:center;font-size:48px;margin:0 auto 20px;box-shadow:0 0 40px rgba(61,205,88,0.3);border:3px solid rgba(61,205,88,0.4)">
          💻
        </div>
        <h2 style="font-family:var(--font-display);font-size:34px;color:var(--white);letter-spacing:1px;margin-bottom:6px">HARSH CHAUHAN</h2>
        <div style="font-family:var(--font-mono);font-size:11px;color:var(--green-se);letter-spacing:2px;text-transform:uppercase">Backend Developer</div>
        <div style="display:flex;gap:8px;justify-content:center;margin-top:16px;flex-wrap:wrap">
          @foreach(['PHP / Laravel', 'MySQL', 'REST APIs', 'Redis', 'Docker'] as $tech)
            <span style="font-size:10px;padding:3px 10px;border-radius:20px;background:rgba(61,205,88,0.1);border:1px solid rgba(61,205,88,0.25);color:var(--green-se);font-family:var(--font-mono)">{{ $tech }}</span>
          @endforeach
        </div>
      </div>
      {{-- Card Body --}}
      <div style="padding:28px 36px;">
        <p style="font-size:14px;color:var(--gray);line-height:1.8;margin-bottom:20px">
          Harsh is the architectural backbone of Schneider Electric's logistics platform. With deep expertise in
          Laravel and distributed systems, he designed and implemented the core booking engine, real-time dispatch
          system, database schema, and all RESTful APIs that power the platform.
        </p>
        <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:24px">
          @foreach([
            ['⚙️', 'Core Platform Architecture', 'Designed the MVC-structured Laravel backend from ground up'],
            ['🗄️', 'Database Design', 'Engineered optimised MySQL schemas for bookings, drivers, and routes'],
            ['🔐', 'Auth & Security', 'Implemented secure authentication with session management and CSRF protection'],
            ['📡', 'API Development', 'Built all RESTful endpoints for the driver-facing and client-facing systems'],
          ] as $f)
          <div style="display:flex;gap:12px;align-items:flex-start;padding:12px;background:var(--dark3);border-radius:10px;border:1px solid var(--steel)">
            <span style="font-size:18px;flex-shrink:0;margin-top:1px">{{ $f[0] }}</span>
            <div>
              <div style="font-size:12px;font-weight:600;color:var(--light);margin-bottom:2px">{{ $f[1] }}</div>
              <div style="font-size:11px;color:var(--gray)">{{ $f[2] }}</div>
            </div>
          </div>
          @endforeach
        </div>
        <div style="display:flex;gap:10px">
          <a href="#" style="flex:1;text-align:center;padding:10px;background:rgba(61,205,88,0.1);border:1px solid rgba(61,205,88,0.3);border-radius:8px;color:var(--green-se);font-size:12px;font-family:var(--font-mono);text-decoration:none;transition:all 0.2s"
             onmouseenter="this.style.background='rgba(61,205,88,0.2)'" onmouseleave="this.style.background='rgba(61,205,88,0.1)'">
            🔗 GitHub
          </a>
          <a href="#" style="flex:1;text-align:center;padding:10px;background:var(--dark3);border:1px solid var(--steel);border-radius:8px;color:var(--light);font-size:12px;font-family:var(--font-mono);text-decoration:none;transition:all 0.2s"
             onmouseenter="this.style.borderColor='var(--green-se)'" onmouseleave="this.style.borderColor='var(--steel)'">
            💼 LinkedIn
          </a>
        </div>
      </div>
    </div>

    {{-- TEJASWI YADAV --}}
    <div class="reveal" style="background:var(--dark2);border:1px solid var(--steel);border-radius:24px;overflow:hidden;transition:all 0.4s"
         onmouseenter="this.style.borderColor='rgba(61,205,88,0.5)';this.style.transform='translateY(-6px)';this.style.boxShadow='0 30px 60px rgba(0,0,0,0.5)'"
         onmouseleave="this.style.borderColor='var(--steel)';this.style.transform='none';this.style.boxShadow='none'">
      {{-- Card Top --}}
      <div style="padding:40px 36px 32px;background:linear-gradient(135deg,rgba(61,205,88,0.08),rgba(61,205,88,0.02));border-bottom:1px solid var(--steel);text-align:center;">
        <div style="width:120px;height:120px;border-radius:50%;background:linear-gradient(135deg,#FF6B00,#cc5500);display:flex;align-items:center;justify-content:center;font-size:48px;margin:0 auto 20px;box-shadow:0 0 40px rgba(255,107,0,0.3);border:3px solid rgba(255,107,0,0.4)">
          🎨
        </div>
        <h2 style="font-family:var(--font-display);font-size:34px;color:var(--white);letter-spacing:1px;margin-bottom:6px">TEJASWI YADAV</h2>
        <div style="font-family:var(--font-mono);font-size:11px;color:var(--orange);letter-spacing:2px;text-transform:uppercase">Frontend Developer</div>
        <div style="display:flex;gap:8px;justify-content:center;margin-top:16px;flex-wrap:wrap">
          @foreach(['HTML / CSS', 'JavaScript', 'Blade Templates', 'Leaflet.js', 'UI/UX'] as $tech)
            <span style="font-size:10px;padding:3px 10px;border-radius:20px;background:rgba(255,107,0,0.1);border:1px solid rgba(255,107,0,0.25);color:var(--orange);font-family:var(--font-mono)">{{ $tech }}</span>
          @endforeach
        </div>
      </div>
      {{-- Card Body --}}
      <div style="padding:28px 36px;">
        <p style="font-size:14px;color:var(--gray);line-height:1.8;margin-bottom:20px">
          Tejaswi is the creative force behind every pixel of the Schneider Electric platform. She crafted the dark
          industrial design system, the interactive live-tracking maps, and the immersive user experience that makes
          complex freight operations feel intuitive and visually powerful.
        </p>
        <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:24px">
          @foreach([
            ['🎨', 'Design System', 'Created the entire industrial dark-theme design language and component library'],
            ['🗺️', 'Interactive Maps', 'Built real-time Leaflet.js tracking maps with animated truck markers across India'],
            ['✨', 'Micro-animations', 'Engineered all scroll reveals, hover effects, and premium UI interactions'],
            ['📱', 'Responsive UI', 'Ensured flawless experience across mobile, tablet, and desktop devices'],
          ] as $f)
          <div style="display:flex;gap:12px;align-items:flex-start;padding:12px;background:var(--dark3);border-radius:10px;border:1px solid var(--steel)">
            <span style="font-size:18px;flex-shrink:0;margin-top:1px">{{ $f[0] }}</span>
            <div>
              <div style="font-size:12px;font-weight:600;color:var(--light);margin-bottom:2px">{{ $f[1] }}</div>
              <div style="font-size:11px;color:var(--gray)">{{ $f[2] }}</div>
            </div>
          </div>
          @endforeach
        </div>
        <div style="display:flex;gap:10px">
          <a href="#" style="flex:1;text-align:center;padding:10px;background:rgba(255,107,0,0.1);border:1px solid rgba(255,107,0,0.3);border-radius:8px;color:var(--orange);font-size:12px;font-family:var(--font-mono);text-decoration:none;transition:all 0.2s"
             onmouseenter="this.style.background='rgba(255,107,0,0.2)'" onmouseleave="this.style.background='rgba(255,107,0,0.1)'">
            🔗 GitHub
          </a>
          <a href="#" style="flex:1;text-align:center;padding:10px;background:var(--dark3);border:1px solid var(--steel);border-radius:8px;color:var(--light);font-size:12px;font-family:var(--font-mono);text-decoration:none;transition:all 0.2s"
             onmouseenter="this.style.borderColor='var(--orange)'" onmouseleave="this.style.borderColor='var(--steel)'">
            💼 LinkedIn
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- COLLABORATION SECTION --}}
<section style="padding:60px 28px 80px;background:var(--dark2);border-top:1px solid var(--steel);">
  <div style="max-width:800px;margin:0 auto;text-align:center" class="reveal">
    <div class="section-label">The Partnership</div>
    <h2 class="section-title" style="font-size:clamp(32px,4vw,52px)">BACKEND + FRONTEND = SCHNEIDER ELECTRIC</h2>
    <p style="font-size:15px;color:var(--gray);line-height:1.8;margin:20px auto 40px;max-width:600px">
      Harsh and Tejaswi built this platform as a unified team — with the backend's robustness meeting the frontend's
      elegance to create a product that's both powerful and beautiful. Every API call, every animation, every database
      query was crafted with the same obsession: making India's industrial freight effortless.
    </p>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px">
      @foreach([
        ['🚀', '3 Months', 'Total build time from idea to production'],
        ['10K+', '10,000+', 'Lines of code powering the platform'],
        ['⭐', '4.9/5', 'User satisfaction rating at launch'],
      ] as $s)
      <div style="background:var(--dark3);border:1px solid var(--steel);border-radius:14px;padding:24px">
        <div style="font-size:28px;margin-bottom:8px">{{ $s[0] }}</div>
        <div style="font-family:var(--font-display);font-size:28px;color:var(--green-se);margin-bottom:4px">{{ $s[1] }}</div>
        <div style="font-size:11px;color:var(--gray)">{{ $s[2] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
