@extends('layouts.app')
@section('title', 'Home Loan - Sai Ram Insurers')
@section('content')
<div class="common-hero" style="background-image: url({{ asset('assets/img/service/services-deatils-bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;"><div class="row"><div class="col-lg-12"><div class="main-headding text-center"><h1 class="title">Home Loan</h1><div class="space16"></div><p>Own your dream home with our easy and affordable home loan solutions.</p></div></div></div></div>
</div>
<div class="service-details-area sp">
    <div class="container"><div class="row"><div class="col-lg-8"><div class="service-details-content">
        <div class="image"><img src="{{ asset('assets/img/service/home-loan.jpg') }}" alt="Home Loan"></div>
        <div class="space30"></div>
        <div class="heading1"><h2>Step into Your Dream Home Today</h2><div class="space16"></div><p>We provide comprehensive home loan assistance, from application to disbursement. Enjoy low interest rates and long tenures that make your EMIs manageable.</p></div>
    </div></div><div class="col-lg-4">@include('components.service-sidebar')</div></div></div>
</div>
@endsection
