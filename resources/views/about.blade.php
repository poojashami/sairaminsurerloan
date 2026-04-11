@extends('layouts.app')

@section('title', 'About Us - Sai Ram Insurers')

@section('content')
<!--=====HERO AREA START=======-->
<div class="common-hero" style="background-image: url({{ asset('assets/img/about/about1.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headding text-center">
                    <h1 class="title">About Us</h1>
                    <div class="space16"></div>
                    <p>Your Trusted Partner for Financial Empowerment and Growth.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====HERO AREA END=======-->

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
@endsection
