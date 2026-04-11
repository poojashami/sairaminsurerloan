@extends('layouts.app')

@section('title', 'Contact Us - Sai Ram Insurers')

@section('content')
<!--=====HERO AREA START=======-->
<div class="common-hero" style="background-image: url({{ asset('assets/img/service/services-deatils-bg.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-headding text-center">
                    <h1 class="title">Contact Us</h1>
                    <div class="space16"></div>
                    <p>Get in touch with our experts for all your financial needs.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====HERO AREA END=======-->

<!--=====CONTACT AREA START=======-->
<div class="contact-page sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-box" data-aos="fade-right" data-aos-duration="1000">
                    <div class="icon"><img src="{{ asset('assets/img/icons/contact-page-icon1.png') }}" alt="Call Us" /></div>
                    <div class="content">
                        <h4>Call Anytime</h4>
                        <a href="tel:7838466134">+91 7838466134</a>
                    </div>
                </div>
                <div class="contact-box" data-aos="fade-right" data-aos-duration="1000">
                    <div class="icon"><img src="{{ asset('assets/img/icons/contact-page-icon2.png') }}" alt="Email Us" /></div>
                    <div class="content">
                        <a href="mailto:info@sairaminsurers.com">info@sairaminsurers.com</a>
                    </div>
                </div>
                <div class="contact-box" data-aos="fade-right" data-aos-duration="1200">
                    <div class="icon"><img src="{{ asset('assets/img/icons/contact-page-icon3.png') }}" alt="Visit Us" /></div>
                    <div class="content">
                        <h4>Visit Our Office</h4>
                        <p>Shop No-FF-18, Sunrise Buildmark Pvt Ltd, <br> Vasundhara, Ghaziabad, 201012</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form-box" style="background-color: var(--ztc-bg-bg-1); padding:40px; border-radius: 10px;">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="heading1">
                        <h2>Send Us a Message</h2>
                        <div class="space16"></div>
                        <p>Have a question? Fill out the form below.</p>
                    </div>
                    <div class="space30"></div>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 15px; margin-bottom: 20px; border: 1px solid var(--ztc-border-border-1); border-radius: 5px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Your Email" required style="width: 100%; padding: 15px; margin-bottom: 20px; border: 1px solid var(--ztc-border-border-1); border-radius: 5px;">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="subject" placeholder="Subject" style="width: 100%; padding: 15px; margin-bottom: 20px; border: 1px solid var(--ztc-border-border-1); border-radius: 5px;">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Your Message" rows="5" required style="width: 100%; padding: 15px; margin-bottom: 20px; border: 1px solid var(--ztc-border-border-1); border-radius: 5px;"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="theme-btn1">Send Message <span><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====CONTACT AREA END=======-->
@endsection
