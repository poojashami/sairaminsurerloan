<div class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <div class="d-flex align-items-center gap-2">
            <div class="brand-icon">S</div>
            <span class="brand-text">Sai Ram Insurer</span>
        </div>
    </div>
    
    <div class="sidebar-menu">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-th-large"></i>
            <span class="nav-text">Dashboard</span>
        </a>
        
        <a class="nav-link {{ request()->routeIs('admin.contacts.index') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
            <i class="fas fa-address-book"></i>
            <span class="nav-text">Contacts</span>
        </a>
    </div>

</div>
