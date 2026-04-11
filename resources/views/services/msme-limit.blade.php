@extends('layouts.app')
@section('title', 'MSME Limit - Sai Ram Insurers')
@section('content')
<div class="common-hero" style="background-image: url({{ asset('assets/img/service/services-deatils-bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;"><div class="row"><div class="col-lg-12"><div class="main-headding text-center"><h1 class="title">MSME / CGTMSE Limit</h1><div class="space16"></div><p>Empowering Small Businesses with Collateral-Free Government Schemes.</p></div></div></div></div>
</div>
<div class="service-details-area sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details-content">
                    <div class="image"><img src="{{ asset('assets/img/service/msme.jpg') }}" alt="MSME Limit"></div>
                    <div class="space30"></div>
                    <div class="heading1">
                        <h2>Scale Your Enterprise with Government-Backed Credit</h2>
                        <div class="space16"></div>
                        <p>At Sai Ram Insurers, we are committed to supporting the backbone of our economy—MSMEs. The CGTMSE (Credit Guarantee Fund Trust for Micro and Small Enterprises) scheme allows businesses to access credit without the need for third-party guarantees or collateral security.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">@include('components.service-sidebar')</div>
        </div>
    </div>
</div>
@endsection
