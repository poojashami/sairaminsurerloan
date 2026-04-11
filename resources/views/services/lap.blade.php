@extends('layouts.app')
@section('title', 'Loan Against Property - Sai Ram Insurers')
@section('content')
<div class="common-hero" style="background-image: url({{ asset('assets/img/service/services-deatils-bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;"><div class="row"><div class="col-lg-12"><div class="main-headding text-center"><h1 class="title">Loan Against Property (LAP)</h1><div class="space16"></div><p>Unlock the value of your property for your bigger dreams.</p></div></div></div></div>
</div>
<div class="service-details-area sp">
    <div class="container"><div class="row"><div class="col-lg-8"><div class="service-details-content">
        <div class="image"><img src="{{ asset('assets/img/service/lap.jpg') }}" alt="LAP"></div>
        <div class="space30"></div>
        <div class="heading1"><h2>Convert Your Property Value into Capital</h2><div class="space16"></div><p>Whether it's for business expansion, a wedding, or medical needs, your property can be your biggest financial asset. We help you get loans at lower interest rates by using your property as collateral.</p></div>
    </div></div><div class="col-lg-4">@include('components.service-sidebar')</div></div></div>
</div>
@endsection
