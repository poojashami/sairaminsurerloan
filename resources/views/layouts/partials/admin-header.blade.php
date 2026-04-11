<header class="top-header" id="header">
    <div class="header-left">
        <button class="sidebar-toggle" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <div class="header-right">
        <div class="notifications me-3 d-none d-sm-block">
            <div class="icon-badge">
                <i class="far fa-bell"></i>
                <span class="badge-dot"></span>
            </div>
        </div>
        
        <div class="user-profile-dropdown">
            <div class="profile-info" id="profileToggle">
                <div class="text-end d-none d-md-block me-2">
                    <div class="user-name">{{ auth()->user()->name }}</div>
                    <div class="user-role">Administrator</div>
                </div>
                <div class="avatar-wrapper">
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=3b82f6&color=fff&bold=true" alt="User">
                </div>
            </div>

            <div class="profile-menu" id="profileMenu">
                <div class="menu-header">
                    <h6>{{ auth()->user()->name }}</h6>
                    <span>{{ auth()->user()->email }}</span>
                </div>
                <div class="menu-items">
                    <a href="#"><i class="far fa-user"></i> My Profile</a>
                    <a href="#"><i class="fas fa-key"></i> Change Password</a>
                    <hr>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logout-link">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
