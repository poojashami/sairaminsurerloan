@extends('layouts.app')
@section('title', 'Our Services - Sai Ram Insurers')
@section('content')
<div class="common-hero" style="background-image: url({{ asset('assets/img/about/about-hero-img.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-10">
                <div class="main-headding" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); padding: 50px; border-radius: 30px; border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 25px 50px rgba(0,0,0,0.3);">
                    <h1 class="title" style="color: #fff !important; font-size: 50px; font-weight: 900; letter-spacing: -1px; margin-bottom: 20px;">Our Services</h1>
                    <div class="space16"></div>
                    <p style="color: #fff; font-size: 19px; max-width: 800px; margin: 0 auto; line-height: 1.6; opacity: 0.95;">Comprehensive insurance solutions tailored to protect your personal and business interests with expert guidance and reliable coverage.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="service-page-section sp" style="background: #f8fafc; padding: 100px 0;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="heading1 text-center mb-5">
          <span class="span" style="background: #e0e7ff; color: #4338ca; padding: 8px 20px; border-radius: 50px; font-weight: 700; font-size: 12px; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px; display: inline-block;">
            <i class="fa-solid fa-shield-halved mr-2"></i> Protection First
          </span>
          <h2 class="title" style="font-size: 42px; font-weight: 800; color: #1e293b;">Comprehensive Insurance Solutions</h2>
          <div class="space20"></div>
          <div style="height: 4px; width: 80px; background: var(--ztc-bg-main-bg-1); margin: 0 auto; border-radius: 2px;"></div>
        </div>
      </div>
    </div>

    <div class="row">
      @php
        $services = [
            'retail-health-insurance' => ['title' => 'RETAIL HEALTH INSURANCE', 'icon' => 'fa-heart-pulse', 'color' => '#ef4444'],
            'motor-insurance' => ['title' => 'MOTOR INSURANCE', 'icon' => 'fa-car', 'color' => '#3b82f6'],
            'fire-insurance' => ['title' => 'FIRE INSURANCE', 'icon' => 'fa-fire-extinguisher', 'color' => '#f59e0b'],
            'burglary-insurance' => ['title' => 'BURGLARY INSURANCE', 'icon' => 'fa-mask', 'color' => '#6366f1'],
            'industrial-all-risk' => ['title' => 'INDUSTRIAL ALL RISK', 'icon' => 'fa-industry', 'color' => '#10b981'],
            'marine-insurance' => ['title' => 'MARINE INSURANCE', 'icon' => 'fa-ship', 'color' => '#0ea5e9'],
            'commercial-general-liability' => ['title' => 'COMMERCIAL GENERAL LIABILITY', 'icon' => 'fa-handshake', 'color' => '#8b5cf6'],
            'directors-and-officers-liability' => ['title' => 'DIRECTORS AND OFFICERS LIABILITY', 'icon' => 'fa-user-tie', 'color' => '#475569'],
            'public-liability' => ['title' => 'PUBLIC LIABILITY', 'icon' => 'fa-users', 'color' => '#06b6d4'],
            'cyber-liability' => ['title' => 'CYBER LIABILITY', 'icon' => 'fa-shield-virus', 'color' => '#ec4899'],
            'employee-dishonesty-commercial-crime' => ['title' => 'EMPLOYEE DISHONESTY', 'icon' => 'fa-user-secret', 'color' => '#64748b'],
            'fidelity-guarantee' => ['title' => 'FIDELITY GUARANTEE', 'icon' => 'fa-file-signature', 'color' => '#22c55e'],
            'machinary-breakdown' => ['title' => 'MACHINARY BREAKDOWN', 'icon' => 'fa-gears', 'color' => '#f97316'],
            'electronic-equipment-portable-equipments' => ['title' => 'ELECTRONIC EQUIPMENT', 'icon' => 'fa-laptop-code', 'color' => '#3b82f6'],
            'erection-all-risk' => ['title' => 'ERECTION ALL RISK', 'icon' => 'fa-crane-tower', 'color' => '#0f172a'],
            'contractor-all-risk' => ['title' => 'CONTRACTOR ALL RISK', 'icon' => 'fa-helmet-safety', 'color' => '#d97706'],
            'contractor-plant-and-machinary' => ['title' => 'CONTRACTOR PLANT & MACHINARY', 'icon' => 'fa-truck-pickup', 'color' => '#1e40af'],
            'workmens-compensation' => ['title' => 'WORKMENS COMPENSATION', 'icon' => 'fa-person-falling-burst', 'color' => '#dc2626'],
            'group-health-insurance' => ['title' => 'GROUP HEALTH INSURANCE', 'icon' => 'fa-house-medical', 'color' => '#059669'],
            'group-personal-accident' => ['title' => 'GROUP PERSONAL ACCIDENT', 'icon' => 'fa-user-injured', 'color' => '#e11d48'],
            'professional-indemnity' => ['title' => 'PROFESSIONAL INDEMNITY', 'icon' => 'fa-user-doctor', 'color' => '#2563eb'],
            'surety-bond' => ['title' => 'SURETY BOND', 'icon' => 'fa-stamp', 'color' => '#4d7c0f'],
            'trade-credit' => ['title' => 'TRADE CREDIT', 'icon' => 'fa-credit-card', 'color' => '#7c3aed'],
            'event-insurance' => ['title' => 'EVENT INSURANCE', 'icon' => 'fa-calendar-check', 'color' => '#db2777'],
            'places-of-worship-insurance' => ['title' => 'PLACES OF WORSHIP INSURANCE', 'icon' => 'fa-mosque', 'color' => '#0891b2'],
            'interior-insurance' => ['title' => 'INTERIOR INSURANCE', 'icon' => 'fa-couch', 'color' => '#71717a'],
            'extended-warranty-insurance' => ['title' => 'EXTENDED WARRANTY', 'icon' => 'fa-clock-rotate-left', 'color' => '#4f46e5'],
            'jellers-block-insurance' => ['title' => 'JELLERS BLOCK INSURANCE', 'icon' => 'fa-gem', 'color' => '#0d9488'],
            'art-insurance' => ['title' => 'ART INSURANCE', 'icon' => 'fa-palette', 'color' => '#c026d3'],
            'aviation-hull-liability' => ['title' => 'AVIATION HULL & LIABILITY', 'icon' => 'fa-plane', 'color' => '#1d4ed8'],
            'retail-cyber-insurance' => ['title' => 'RETAIL CYBER INSURANCE', 'icon' => 'fa-user-shield', 'color' => '#be123c'],
        ];
      @endphp

      @foreach($services as $slug => $s)
      <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
        <div class="attractive-service-card" style="background: #fff; padding: 40px; border-radius: 20px; height: 100%; border: 1px solid #e2e8f0; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05); transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; display: flex; flex-direction: column;">
          <!-- Hover Background -->
          <div class="card-hover-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, {{ $s['color'] }} 0%, #1e293b 100%); opacity: 0; transition: all 0.3s; z-index: 1;"></div>
          
          <div style="position: relative; z-index: 2; height: 100%; display: flex; flex-direction: column;">
            <div class="card-icon-wrapper" style="width: 70px; height: 70px; background: {{ $s['color'] }}20; border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 30px; transition: all 0.3s;">
                <i class="fa-solid {{ $s['icon'] }}" style="font-size: 32px; color: {{ $s['color'] }}; transition: all 0.3s;"></i>
            </div>
            
            <h4 style="font-size: 21px; font-weight: 800; color: #1e293b; margin-bottom: 15px; transition: all 0.3s; text-transform: uppercase; letter-spacing: -0.5px;">{{ $s['title'] }}</h4>
            <p style="color: #64748b; font-size: 15px; line-height: 1.6; margin-bottom: 30px; transition: all 0.3s;">Protect your valuable assets with our tailored {{ strtolower($s['title']) }} plans, designed for maximum security and peace of mind.</p>
            
            <div style="margin-top: auto;">
                <a href="{{ route('services.show', $slug) }}" class="attractive-btn" style="display: inline-flex; align-items: center; font-weight: 700; color: {{ $s['color'] }}; transition: all 0.3s; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; text-decoration: none;">
                    Explore Detailed Info <i class="fa-solid fa-arrow-right-long" style="margin-left: 10px; transition: all 0.3s;"></i>
                </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<style>
.attractive-service-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    border-color: transparent;
}
.attractive-service-card:hover .card-hover-bg {
    opacity: 1;
}
.attractive-service-card:hover h4, 
.attractive-service-card:hover p, 
.attractive-service-card:hover .attractive-btn {
    color: #fff !important;
}
.attractive-service-card:hover .card-icon-wrapper {
    background: rgba(255, 255, 255, 0.1) !important;
}
.attractive-service-card:hover .card-icon-wrapper i {
    color: #fff !important;
    transform: scale(1.1);
}
.attractive-service-card:hover .attractive-btn i {
    transform: translateX(10px);
}
</style>
    </div>
  </div>
</div>
@endsection
