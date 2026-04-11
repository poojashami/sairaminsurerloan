@extends('layouts.app')
@section('title', 'Over Draft (OD) Limit - Sai Ram Insurers')
@section('content')
<div class="common-hero" style="background-image: url({{ asset('assets/img/service/services-deatils-bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;"><div class="row"><div class="col-lg-12"><div class="main-headding text-center"><h1 class="title">Over Draft (OD) Limit</h1><div class="space16"></div><p>Unlock liquidity for your business with a flexible Overdraft facility.</p></div></div></div></div>
</div>
<div class="service-details-area sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details-content">
                    <div class="image"><img src="{{ asset('assets/img/service/over-draft.jpg') }}" alt="OD Limit"></div>
                    <div class="space30"></div>
                    <div class="heading1">
                        <h2>Manage Your Working Capital with Ease</h2>
                        <div class="space16"></div>
                        <p>An Overdraft (OD) Limit is the perfect solution for businesses facing fluctuating cash requirements. At Sai Ram Insurers, we provide OD facilities that allow you to withdraw funds up to a sanctioned limit, providing instant liquidity.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">@include('components.service-sidebar')</div>
        </div>
    </div>
</div>
@endsection
