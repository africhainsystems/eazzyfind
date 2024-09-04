<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset('web/images/logo.png') }}" alt="Eazzyfind"></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>

        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
                <li class="language-nav">
                <div class="translate_wrapper">
                    <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                    </div>
                    <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    </div>
                </div>
                </li>
                <li>
                <span class="header-search">
                    <svg>
                    <use href="{{ asset('admin/svg/icon-sprite.svg#search') }}"></use>
                </svg></span>
                </li>
                <li>
                <div class="mode">
                    <svg>
                    <use href="{{ asset('admin/svg/icon-sprite.svg#moon') }}"></use>
                    </svg>
                </div>
                </li>
                <li class="onhover-dropdown">
                <div class="notification-box">
                    <svg>
                    <use href="{{ asset('admin/svg/icon-sprite.svg#notification') }}"></use>
                    </svg><span class="badge rounded-pill badge-secondary">4 </span>
                </div>
                <div class="onhover-show-div notification-dropdown">
                    <h6 class="f-18 mb-0 dropdown-title">Notitications                               </h6>
                    <ul>
                    <li class="b-l-primary border-4">
                        <p>Delivery processing <span class="font-danger">10 min.</span></p>
                    </li>
                    <li class="b-l-success border-4">
                        <p>Order Complete<span class="font-success">1 hr</span></p>
                    </li>
                    <li class="b-l-secondary border-4">
                        <p>Tickets Generated<span class="font-secondary">3 hr</span></p>
                    </li>
                    <li class="b-l-warning border-4">
                        <p>Delivery Complete<span class="font-warning">6 hr</span></p>
                    </li>
                    <li><a class="f-w-700" href="#">Check all</a></li>
                    </ul>
                </div>
                </li>
                <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="media profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.png" alt="">
                    <div class="media-body"><span>Eazzyfind</span>
                    <p class="mb-0">Admin <i class="middle fa fa-angle-down"></i></p>
                    </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                    <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                    <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                    <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                    <li><a href="#"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
