<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('admin/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" type="image/x-icon">
    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/animate.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">
  </head>
  <body>
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"> <span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
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
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" sidebar-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid for-light" src="{{ asset('web/images/logo.png') }}" alt="Eazzyfind" width="150"><img class="img-fluid for-dark" src="{{ asset('web/images/logo.png') }}" alt="Eazzyfind" width="150"></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset('web/images/logo-icon.png') }}" alt="Eazzyfind" width="50"></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset('web/images/logo-icon.png') }}" alt="Eazzyfind" width="50"></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div>
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-home') }}"></use>
                      </svg><span class="lan-3">Dashboard</span></a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-10">Listings</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="layers"></i></span>
                      <span class="lan-11">Categories</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-12" href="#">Category</a></li>
                      <li><a class="lan-13" href="#">Sub Category</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="align-justify"></i></span>
                      <span class="lan-14">Listings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-15" href="#">All Listings</a></li>
                      <li><a class="lan-16" href="#">Add Listings</a></li>
                      <li><a class="lan-17" href="#">Pending Listings</a></li>
                      <li><a class="lan-18" href="#">Inactive Listings</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="star"></i></span>
                      <span class="lan-19">Reviews</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-20" href="#">All Reviews</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="message-circle"></i></span>
                      <span class="lan-21">Listing Messages</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="users"></i></span>
                      <span>Vendors</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-22" href="#">All Vendors</a></li>
                      <li><a class="lan-23" href="#">Pending Vendors</a></li>
                      <li><a class="lan-24" href="#">Active Vendors</a></li>
                      <li><a class="lan-25" href="#">Cancelled Vendors</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>CONTENT</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="book-open"></i></span>
                      <span>Pages</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">All Pages</a></li>
                      <li><a class="lan-" href="#">Add Pages</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-blog') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-blog') }}"></use>
                      </svg>
                      <span>Blog</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">All Articles</a></li>
                      <li><a class="lan-" href="#">Add Articles</a></li>
                      <li><a class="lan-" href="#">Categories</a></li>
                      <li><a class="lan-" href="#">Blog Comments</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="navigation"></i></span>
                      <span>Location</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">Countries</a></li>
                      <li><a class="lan-" href="#">Cities</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>MEMBERSHIP</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="file-plus"></i></span>
                      <span>Membership</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-22" href="#">Subscriptions</a></li>
                      <li><a class="lan-23" href="#">Transactions</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>REPORTS</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="shopping-bag"></i></span>
                      <span>Revenue</span>
                    </a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>USER MANAGEMENT</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="users"></i></span>
                      <span>Manage Users</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-22" href="#">Admins</a></li>
                      <li><a class="lan-23" href="#">Users</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="lock"></i></span>
                      <span>Roles & Permissions</span>
                    </a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>MANAGEMENT</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="message-circle"></i></span>
                      <span>Contact Messages</span>
                    </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="message-square"></i></span>
                      <span>Email Templates</span>
                    </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="alert-octagon"></i></span>
                      <span>Abuse Report</span>
                    </a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="bell"></i></span>
                      <span>Push Notifications</span>
                    </a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>SETTINGS</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="settings"></i></span>
                      <span>General Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">General Settings</a></li>
                      <li><a class="lan-" href="#">Localization</a></li>
                      <li><a class="lan-" href="#">Profile</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="globe"></i></span>
                      <span>Website Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">SEO Settings</a></li>
                      <li><a class="lan-" href="#">Footer Settings</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="settings"></i></span>
                      <span>System Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">System Settings</a></li>
                      <li><a class="lan-" href="#">Email Settings</a></li>
                      <li><a class="lan-" href="#">SMS Settings</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title" href="#">
                      <span><i data-feather="credit-card"></i></span>
                      <span>Financial Settings</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-" href="#">Payment Settings</a></li>
                      <li><a class="lan-" href="#">Currency Settings</a></li>
                      <li><a class="lan-" href="#">Tax Settings</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="#">
                      <span><i data-feather="briefcase"></i></span>
                      <span>Service Settings</span>
                    </a>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6>MISCELLANEOUS</h6>
                    </div>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-faq') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-faq') }}"></use>
                      </svg><span>FAQ</span></a>
                  </li>

                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-knowledgebase') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-knowledgebase') }}"></use>
                      </svg><span>Knowledgebase</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="#">
                      <svg class="stroke-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#stroke-support-tickets') }}"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="{{ asset('admin/svg/icon-sprite.svg#fill-support-tickets') }}"></use>
                      </svg><span>Support Ticket</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">

          <!-- Container-fluid starts-->
          {{ $slot }}
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2024 © Eazzyfind Uganda.  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('admin/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('admin/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('admin/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/js/slick/slick.js') }}"></script>
    <script src="{{ asset('admin/js/header-slick.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard/dashboard_5.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin/js/script.js') }}"></script>
  </body>
</html>
