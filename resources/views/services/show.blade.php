@extends('layouts.app')

@section('title', $title . ' - Sai Ram Insurers')

@section('content')
<!--=====HERO AREA START=======-->
<div class="common-hero" style="background-image: url({{ asset('assets/img/service/services-deatils-bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headding text-center">
                    <h1 class="title">{{ $title }}</h1>
                    <div class="space16"></div>
                    <p>Comprehensive insurance solutions tailored to protect what matters most to you.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====HERO AREA END=======-->

<!--=====SERVICE DETAILS START=======-->
<div class="service-details-area sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details-content">
                    <div class="image">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80&w=1200" alt="{{ $title }}" style="width: 100%; border-radius: 20px;">
                    </div>
                    <div class="space30"></div>
                    <div class="heading1">
                        <h2>Flexible Protection with {{ $title }}</h2>
                        <div class="space16"></div>
                        <p>At Sai Ram Insurers, we understand that risk is an inherent part of life and business. Our {{ $title }} solutions are designed to provide you with peace of mind, knowing that you are protected by expert guidance and reliable coverage.</p>
                        <p>We work closely with you to understand your specific needs and tailor a plan that offers the best protection at competitive rates. Whether you are looking for personal protection or complex commercial coverage, our team is here to support you every step of the way.</p>
                    </div>
                    <div class="space40"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="details-box" style="background: #f8f9fa; padding: 30px; border-radius: 12px; border-left: 5px solid var(--ztc-bg-main-bg-1); margin-bottom: 30px;">
                                <h4 style="color: var(--ztc-text-text-1); font-weight: 700;">Key Features of {{ $title }}</h4>
                                <div class="space20"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check" style="color: var(--ztc-bg-main-bg-1); margin-right: 10px;"></i> Customized Coverage Options</li>
                                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check" style="color: var(--ztc-bg-main-bg-1); margin-right: 10px;"></i> Competitive Premium Rates</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check" style="color: var(--ztc-bg-main-bg-1); margin-right: 10px;"></i> Expert Advisory Support</li>
                                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check" style="color: var(--ztc-bg-main-bg-1); margin-right: 10px;"></i> Fast & Simple Claims Process</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-box" style="max-height: 600px; overflow-y: auto;">
                    <h4>Our Services</h4>
                    <div class="space16"></div>
                    <ul class="service-list">
                        @foreach($allServices as $sSlug => $sName)
                        <li>
                            <a href="{{ route('services.show', $sSlug) }}" class="{{ $slug == $sSlug ? 'active' : '' }}">
                                <i class="fa-solid fa-shield-halved main-icon"></i> 
                                {{ $sName }} 
                                <i class="fa-solid fa-chevron-right arrow-right"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="space30"></div>
                <div class="contact-box sidebar-cta" >
                    <h3>Need Help?</h3>
                    <p>Speak with our insurance experts today to get a customized protection plan.</p>
                    <a href="tel:7838466134" class="theme-btn1" style="background-color: #fff; color: var(--ztc-bg-main-bg-1);">+91 7838466134</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====SERVICE DETAILS END=======-->
@endsection
