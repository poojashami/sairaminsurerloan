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
