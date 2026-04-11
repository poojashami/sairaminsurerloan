@extends('layouts.app')
@section('title', 'Personal Loan - Sai Ram Insurers')
@section('content')
<div class="common-hero" style="background-image: url({{ asset('assets/img/service/services-deatils-bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;"><div class="row"><div class="col-lg-12"><div class="main-headding text-center"><h1 class="title">Personal Loan</h1><div class="space16"></div><p>Quick financial assistance for your personal milestones and emergencies.</p></div></div></div></div>
</div>
<div class="service-details-area sp">
    <div class="container"><div class="row"><div class="col-lg-8"><div class="service-details-content">
        <div class="image"><img src="{{ asset('assets/img/service/personal-loan.jpg') }}" alt="Personal Loan"></div>
        <div class="space30"></div>
        <div class="heading1"><h2>Funds for Your Every Need</h2><div class="space16"></div><p>Our personal loans come with minimal documentation and quick approval processes. Whether it's for travel, education, or weddings, we get you the funds you need without hassle.</p></div>
    </div></div><div class="col-lg-4">@include('components.service-sidebar')</div></div></div>
</div>
@endsection
