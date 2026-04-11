@extends('layouts.app')

@section('title', 'Business Loan - Sai Ram Insurers')

@section('content')
<!--=====HERO AREA START=======-->
<div class="common-hero" style="background-image: url({{ asset('assets/img/service/services-deatils-bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headding text-center">
                    <h1 class="title">Business Loan</h1>
                    <div class="space16"></div>
                    <p>Fuel your business growth with our flexible and customized term loans.</p>
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
                        <img src="{{ asset('assets/img/service/business-loan.jpg') }}" alt="Business Loan">
                    </div>
                    <div class="space30"></div>
                    <div class="heading1">
                        <h2>Flexible Financing for Your Business Expansion</h2>
                        <div class="space16"></div>
                        <p>At Sai Ram Insurers, we understand that businesses need timely capital to grow, innovate, and thrive. Our Business Loan solutions are designed for entrepreneurs who have a vision and need the right financial backing to realize it.</p>
                    </div>
                    <div class="space40"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="details-box" style="background: #f8f9fa; padding: 30px; border-radius: 12px; border-left: 5px solid var(--ztc-bg-main-bg-1); margin-bottom: 30px;">
                                <h4 style="color: var(--ztc-text-text-1); font-weight: 700;">Key Features of Business Loans</h4>
                                <div class="space20"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check" style="color: var(--ztc-bg-main-bg-1); margin-right: 10px;"></i> High Loan Disbursement Limits</li>
                                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check" style="color: var(--ztc-bg-main-bg-1); margin-right: 10px;"></i> Flexible Repayment Tenures</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled">
                                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check" style="color: var(--ztc-bg-main-bg-1); margin-right: 10px;"></i> Competitive Interest Rates</li>
                                            <li style="margin-bottom: 12px;"><i class="fa-solid fa-circle-check" style="color: var(--ztc-bg-main-bg-1); margin-right: 10px;"></i> Swift Processing & Minimal Paperwork</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-box">
                    <h4>Our Services</h4>
                    <div class="space16"></div>
                    <ul class="service-list">
                        <li><a href="{{ route('services.business-loan') }}" class="{{ request()->routeIs('services.business-loan') ? 'active' : '' }}"><i class="fa-solid fa-briefcase main-icon"></i> Business Loan <i class="fa-solid fa-chevron-right arrow-right"></i></a></li>
                        <li><a href="{{ route('services.od-limit') }}" class="{{ request()->routeIs('services.od-limit') ? 'active' : '' }}"><i class="fa-solid fa-building-columns main-icon"></i> Over Draft (OD) Limit <i class="fa-solid fa-chevron-right arrow-right"></i></a></li>
                        <li><a href="{{ route('services.msme-limit') }}" class="{{ request()->routeIs('services.msme-limit') ? 'active' : '' }}"><i class="fa-solid fa-industry main-icon"></i> MSME Limit <i class="fa-solid fa-chevron-right arrow-right"></i></a></li>
                        <li><a href="{{ route('services.lap') }}" class="{{ request()->routeIs('services.lap') ? 'active' : '' }}"><i class="fa-solid fa-house-lock main-icon"></i> Loan Against Property <i class="fa-solid fa-chevron-right arrow-right"></i></a></li>
                        <li><a href="{{ route('services.home-loan') }}" class="{{ request()->routeIs('services.home-loan') ? 'active' : '' }}"><i class="fa-solid fa-house-chimney main-icon"></i> Home Loan <i class="fa-solid fa-chevron-right arrow-right"></i></a></li>
                        <li><a href="{{ route('services.personal-loan') }}" class="{{ request()->routeIs('services.personal-loan') ? 'active' : '' }}"><i class="fa-solid fa-user-tie main-icon"></i> Personal Loan <i class="fa-solid fa-chevron-right arrow-right"></i></a></li>
                    </ul>
                </div>
                <div class="space30"></div>
                <div class="contact-box sidebar-cta" >
                    <h3>Need Help?</h3>
                    <p>Speak with our financial experts today to get a customized loan plan.</p>
                    <a href="tel:7838466134" class="theme-btn1" style="background-color: #fff; color: var(--ztc-bg-main-bg-1);">+91 7838466134</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====SERVICE DETAILS END=======-->
@endsection
