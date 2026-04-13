@extends('layouts.app')

@section('content')
<!--=====HERO AREA START=======-->
<div class="hero1">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <div class="main-headding centered-content">
          <span class="sub-title">Pioneering Financial Solutions</span>
          <h1 class="title tg-element-title text-white">
            Reliable Financial Expertise, Built on <br> Trust and Security.
          </h1>
          <div class="space30"></div>
          <div class="hero-btns">
            <a class="hero-btn-outline" href="{{ route('contact') }}">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====HERO AREA END=======-->

<!--=====HERO BOTTOM AREA START=======-->
<div class="">
  <div class="container">
    <div class="row hero-bottom-area">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-box">
          <div class="icon"><i class="fa-solid fa-headset"></i></div>
          <div class="headding">
            <h5>Instant Support</h5>
            <p>Always Ready for Support</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-box">
          <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
          <div class="headding">
            <h5>2.5k Case Solved</h5>
            <p>Multiple Solutions for Multiple Customers</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-box">
          <div class="icon"><i class="fa-solid fa-users"></i></div>
          <div class="headding">
            <h5>Personalised Contact</h5>
            <p>One to One Services for Loans</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-box">
          <div class="icon"><i class="fa-solid fa-award"></i></div>
          <div class="headding">
            <h5>Award Wining Solutions</h5>
            <p>100% Satisfaction from our Clients</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====HERO BOTTOM AREA END=======-->

<!--=====ABOUT AREA START=======-->
<div class="about1 sp">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-image">
          <div class="about-img-wrapper">
            <img src="{{ asset('assets/img/about/about1.png') }}" alt="Sai Ram Insurers" class="img-fluid reveal">
          </div>
          <div class="icon-box">
            <img src="{{ asset('assets/img/icons/about1-shape-icon.png') }}" alt="" />
            <p>Sai Ram Insurers</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="heading1">
          <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="{{ asset('assets/img/icons/span1.png') }}" alt="" /> About Our Company</span>
          <h2 class="title tg-element-title">Your Trusted Partner for Financial Empowerment and Growth</h2>
          <div class="space16"></div>
          <p data-aos="fade-left" data-aos-duration="800">
            Sai Ram Insurers is a premier financial consultancy dedicated to helping individuals and businesses achieve their financial aspirations. With our expert guidance and diverse range of loan products, we simplify the borrowing process, ensuring you get the best capital solutions tailored to your specific needs.
          </p>
          <ul class="list" data-aos="fade-left" data-aos-duration="1100">
            <li><span><i class="fa-solid fa-check"></i></span> Expert financial advice tailored to your goals.</li>
            <li><span><i class="fa-solid fa-check"></i></span> Quick processing and transparent documentation.</li>
            <li><span><i class="fa-solid fa-check"></i></span> Competitive interest rates from top lenders.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====ABOUT AREA END=======-->

<!--=====SERVICE AREA START=======-->
<div class="service1 sp">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="heading1 text-center">
          <span class="span" data-aos="zoom-in-center" data-aos-duration="700"><img src="{{ asset('assets/img/icons/span1.png') }}" alt="" />Our Services</span>
          <h2 class="title tg-element-title mb-5">Comprehensive insurance solutions tailored to your needs</h2>
        </div>
      </div>
      <div class="service-one-inner">
        @php
          $homeServices = [
              'retail-health-insurance' => ['title' => 'RETAIL HEALTH INSURANCE', 'icon' => 'fa-heart-pulse', 'desc' => 'Comprehensive health coverage for you and your family.'],
              'motor-insurance' => ['title' => 'MOTOR INSURANCE', 'icon' => 'fa-car', 'desc' => 'Protect your vehicles with our robust motor insurance plans.'],
              'fire-insurance' => ['title' => 'FIRE INSURANCE', 'icon' => 'fa-fire-extinguisher', 'desc' => 'Safeguard your property and assets against fire-related risks.'],
              'burglary-insurance' => ['title' => 'BURGLARY INSURANCE', 'icon' => 'fa-mask', 'desc' => 'Specialized coverage against theft and burglary attempts.'],
              'industrial-all-risk' => ['title' => 'INDUSTRIAL ALL RISK', 'icon' => 'fa-industry', 'desc' => 'Comprehensive protection for large-scale industrial operations.'],
              'marine-insurance' => ['title' => 'MARINE INSURANCE', 'icon' => 'fa-ship', 'desc' => 'Insurance solutions for cargo and transit across domestic and international waters.'],
          ];
        @endphp
        @foreach($homeServices as $slug => $s)
        <div class="service-one-box">
          <div class="service-one-box-image">
            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&q=80&w=800" alt="{{ $s['title'] }}">
          </div>
          <div class="service-one-icon-box">
            <i class="fa-solid {{ $s['icon'] }}"></i>
          </div>
          <div class="service-one-info">
            <h4>{{ $s['title'] }}</h4>
            <p>{{ $s['desc'] }}</p>
          </div>
          <a class="read-more-btn" href="{{ route('services.show', $slug) }}"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        @endforeach
      </div>
      <div class="col-lg-12 text-center mt-5">
          <a href="{{ route('services') }}" class="hero-btn-outline" style="color: var(--ztc-bg-main-bg-1); border-color: var(--ztc-bg-main-bg-1);">View All 30+ Services <span><i class="fa-solid fa-arrow-right"></i></span></a>
      </div>
    </div>
  </div>
</div>
<!--=====SERVICE AREA END=======-->

<!--=====PROCESS AREA START=======-->
<div class="process-section sp">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="process-content" data-aos="fade-right">
          <div class="heading1 ">
            <span class="span" data-aos="zoom-in-center" data-aos-duration="700"><img src="{{ asset('assets/img/icons/span1.png') }}" alt="" /> Our Process</span>
            <h2 class="title tg-element-title mb-2">Consultation successful loan approval process</h2>
          </div>
          <p class="description">Our comprehensive process ensures a seamless journey from initial consultation to successful loan approval. Experience personalized guidance and expert support every step of the way.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="process-img-thumb" data-aos="fade-left">
          <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?auto=format&fit=crop&q=80&w=800" alt="Consultation">
        </div>
      </div>
    </div>
    <div class="process-timeline">
      <div class="timeline-line"></div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="process-step" data-aos="fade-up" data-aos-delay="100">
            <div class="step-icon"><i class="fa-solid fa-pen-to-square"></i></div>
            <h4 class="step-title">Application</h4>
            <span class="step-marker"></span>
            <p class="step-text">Start by filling out our easy online application form. Provide basic information about yourself and your financial needs.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="process-step" data-aos="fade-up" data-aos-delay="200">
            <div class="step-icon"><i class="fa-solid fa-file-signature"></i></div>
            <h4 class="step-title">Documentation</h4>
            <span class="step-marker"></span>
            <p class="step-text">Upon approval, you'll receive clear instructions on the required documentation. This may include income verification.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="process-step" data-aos="fade-up" data-aos-delay="300">
            <div class="step-icon"><i class="fa-solid fa-stamp"></i></div>
            <h4 class="step-title">Approval</h4>
            <span class="step-marker"></span>
            <p class="step-text">Once your application is reviewed, we aim to provide swift approval decisions. Our goal is to get you approved.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="process-step" data-aos="fade-up" data-aos-delay="400">
            <div class="step-icon"><i class="fa-solid fa-money-bill-trend-up"></i></div>
            <h4 class="step-title">Funding</h4>
            <span class="step-marker"></span>
            <p class="step-text">After your documentation is verified and finalized, we initiate the funding process. Funds are typically deposited quickly.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====PROCESS AREA END=======-->

<!--=====TESTIMONIAL SUCCESS START=======-->
<div class="testimonial-success">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="testimonial-content-wrap">
          <div class="heading1 ">
            <span class="span " data-aos="zoom-in-center" data-aos-duration="700"><img src="{{ asset('assets/img/icons/span1.png') }}" alt="" style="color: black !important;" /> Success Story</span>
            <h2 class="title tg-element-title mb-2">Customer experiences with us</h2>
          </div>
          <div class="single-testimonial-slider">
            <div class="testimonial-item">
              <p class="description">The Process With Sai Ram Insurers Was Incredibly Smooth. From Signing The Agreement To Completing The Documentation, Their Team Made Sure Everything Was Clear And Easy To Follow. I Felt Supported Every Step Of The Way.</p>
              <div class="testimonial-user-info">
                <img src="https://i.pravatar.cc/150?u=emily" alt="Emily Martin" class="user-img">
                <div class="user-details"><h4>Emily Martin</h4><span>Satisfied Client</span></div>
              </div>
            </div>
            <div class="testimonial-item">
              <p class="description">Finding the right loan options was overwhelming until I found Sai Ram Insurers. Their team guided me through every option and helped me choose the best one for my situation. The transparency and efficiency were impressive.</p>
              <div class="testimonial-user-info">
                <img src="https://i.pravatar.cc/150?u=sarah" alt="Sarah Johnson" class="user-img">
                <div class="user-details"><h4>Sarah Johnson</h4><span>Business Owner</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====TESTIMONIAL SUCCESS END=======-->

<!--=====TRUST SECTION START (DARK)=======-->
<div class="trust-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="trust-content">
          <div class="trust-badge" data-aos="fade-up"><i class="fa-solid fa-heart"></i> WHY CHOOSE</div>
          <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Your trusted partner for personalized insurance solutions, expert protection guidance</h2>
          <img src="{{ asset('assets/img/others/why-choose-image.jpg') }}" alt="Consultation" class="trust-banner-img" data-aos="zoom-in">
          <div class="trust-features">
            <div class="trust-feature-item" data-aos="fade-up" data-aos-delay="200">
              <i class="fa-solid fa-user-gear"></i>
              <h5>Personalized Insurance</h5>
              <p>We offer customized insurance options tailored to meet your specific protection needs and goals.</p>
            </div>
            <div class="trust-feature-item" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-award"></i>
              <h5>Competitive Rates</h5>
              <p>Benefit from competitive rates designed to make your insurance more affordable and manageable.</p>
            </div>
            <div class="trust-feature-item" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-handshake-angle"></i>
              <h5>Trusted Partner</h5>
              <p>With a commitment to transparency, personalized service, we work as your partner.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="trust-stats-column" data-aos="fade-left">
          <div class="stat-item">
            <span class="stat-number">25 +</span>
            <span class="stat-content">Years of trusted expertise</span>
            <span class="stat-index">01</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">50 K</span>
            <span class="stat-content">Loans approved</span>
            <span class="stat-index">02</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">10 K</span>
            <span class="stat-content">Satisfied clients</span>
            <span class="stat-index">03</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====TRUST SECTION END=======-->

<!--=====CTA AREA START=======-->
<div class="cta">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="heading1-w">
          <h2 class="title tg-element-title">Committed to Providing the Best Capital Solutions</h2>
          <div class="space16"></div>
          <p data-aos="fade-right" data-aos-duration="700">Take the first step towards achieving your financial goals by contacting us today. Schedule a consultation with one of our loan experts to discuss your requirements and explore how we can help.</p>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="buttons">
          <a class="cta-btn1" href="{{ route('contact') }}">Request a Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====CTA AREA END=======-->
@endsection
