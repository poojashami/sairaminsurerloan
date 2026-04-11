@extends('layouts.app')
@section('title', 'Our Services - Sai Ram Insurers')
@section('content')
<div class="common-hero" style="background-image: url({{ asset('assets/img/about/about-hero-img.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row"><div class="col-lg-12"><div class="main-headding"><h1 class="title">Our Services</h1><div class="space16"></div><p>Comprehensive financial solutions tailored to your individual and business needs.</p></div></div></div>
    </div>
</div>
<div class="service1 sp">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="heading1 text-center">
          <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="{{ asset('assets/img/icons/span1.png') }}" alt="" /> Our Services</span>
          <h2 class="title tg-element-title">Comprehensive Loan & Financial Services</h2>
        </div>
      </div>
    </div>
    <div class="space30"></div>
    <div class="row">
      @php
        $services = [
            ['title' => 'Business Loan', 'route' => 'services.business-loan', 'icon' => 'service-icon1.png', 'desc' => 'Fuel your business growth with our flexible term loans.'],
            ['title' => 'Over Draft Limit (OD)', 'route' => 'services.od-limit', 'icon' => 'service-icon2.png', 'desc' => 'Manage your working capital efficiently with flexible overdraft limits.'],
            ['title' => 'MSME / CGTMSE Limit', 'route' => 'services.msme-limit', 'icon' => 'service-icon3.png', 'desc' => 'Collateral-free credit for Micro and Small Enterprises.'],
            ['title' => 'Home Loan', 'route' => 'services.home-loan', 'icon' => 'service-icon4.png', 'desc' => 'Turn your dream home into reality with low interest rates.'],
            ['title' => 'Loan Against Property (LAP)', 'route' => 'services.lap', 'icon' => 'service-icon5.png', 'desc' => 'Unlock the hidden potential of your property.'],
            ['title' => 'Personal Loan', 'route' => 'services.personal-loan', 'icon' => 'service-icon1.png', 'desc' => 'Quick and convenient personal loans for any need.'],
        ];
      @endphp
      @foreach($services as $s)
      <div class="col-lg-4 col-md-6" data-aos="zoom-in-up">
        <div class="single-box">
          <div class="icon"><img src="{{ asset('assets/img/icons/'.$s['icon']) }}" alt="" /></div>
          <div class="heading1">
            <h4><a href="{{ route($s['route']) }}">{{ $s['title'] }}</a></h4>
            <div class="space16"></div>
            <p>{{ $s['desc'] }}</p>
            <div class="space16"></div>
            <a href="{{ route($s['route']) }}" class="learn">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
