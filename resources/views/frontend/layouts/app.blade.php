<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Eazzyfind | Business Listing</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/fonts/jost/stylesheet.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/line-awesome/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/fontawesome-pro/css/fontawesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/slick/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/quilljs/css/quill.bubble.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/quilljs/css/quill.core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/quilljs/css/quill.snow.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/chosen/chosen.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/datetimepicker/jquery.datetimepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/libs/venobox/venobox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/responsive.css') }}" />
    <style>
        .home-main .site-banner:after{
            background-image: url({{ asset('web/images/bgs/mask-1.svg') }});
        }
    </style>

</head>

<body>
    <div id="wrapper">
        <header id="header" class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-5">
                        <div class="site">
                            <div class="site__menu">
                                <a title="Menu Icon" href="#" class="site__menu__icon">
                                    <i class="las la-bars la-24-black"></i>
                                </a>
                                <div class="popup-background"></div>
                                <div class="popup popup--left">
                                    <a title="Close" href="#" class="popup__close">
                                        <i class="las la-times la-24-black"></i>
                                    </a><!-- .popup__close -->
                                    <div class="popup__content">
                                        <div class="popup__user popup__box open-form">
                                            <a title="Login" href="#" class="open-login">Login</a>
                                        </div><!-- .popup__user -->
                                        <div class="popup__destinations popup__box">
                                            <ul class="menu-arrow">
                                                <li><a title="Home" href="#">Home </a></li>
                                                <li><a title="About" href="#">About </a></li>
                                            </ul>
                                        </div>
                                        <div class="popup__menu popup__box">
                                            <ul class="menu-arrow">
                                                <li><a href="#" title="Experts">Experts</a></li>
                                                <li><a href="#" title="Travel">Travel</a></li>
                                                <li>
                                                    <a href="#" title="Listings">Listings</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="#" title="Business">Business</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="#" title="Restaurants">Restaurants</a></li>
                                                                <li><a href="#" title="Officespace">Officespace</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#" title="Events">Events</a></li>
                                                        <li>
                                                            <a href="#" title="Career">Career</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="#" title="Job Listings">Job Listings</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div><!-- .popup__menu -->
                                    </div><!-- .popup__content -->
                                    <div class="popup__button popup__box">
                                        <a title="Add place" href="#" class="btn">
                                            <i class="la la-plus"></i>
                                            <span>Register</span>
                                        </a>
                                    </div><!-- .popup__button -->
                                </div><!-- .popup -->
                            </div><!-- .site__menu -->
                            <div class="site__brand">
                                <a title="Logo" href="{{ url('/') }}" class="site__brand__logo"><img src="{{ asset('web/images/logo.png') }}" alt="Eazzyfind"></a>
                            </div><!-- .site__brand -->

                        </div><!-- .site -->
                    </div><!-- .col-md-6 -->
                    <div class="col-xl-6 col-7">
                        <div class="right-header align-right">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="#" title="Experts">Experts</a></li>
                                    <li><a href="#" title="Experts">Travel</a></li>
                                    <li>
                                        <a href="#" title="Listings">Listings</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#" title="Business Search">Business</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#" title="Business">Restuarants</a></li>
                                                    <li><a href="#" title="Business">Officespace</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" title="Events">Events</a>
                                            </li>
                                            <li>
                                                <a href="#" title="Business Search">Career</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#" title="Business">Job Listings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="right-header__login">
                                <a title="Login" class="open-login" href="#">Login</a>
                            </div><!-- .right-header__login -->
                            <div class="popup popup-form">
                                <a title="Close" href="#" class="popup__close">
                                    <i class="las la-times la-24-black"></i>
                                </a><!-- .popup__close -->
                                <ul class="choose-form">
                                    <li class="nav-signup"><a title="Sign Up" href="#signup">Sign Up</a></li>
                                    <li class="nav-login"><a title="Log In" href="#login">Log In</a></li>
                                </ul>
                                <p class="choose-more">Continue with <a title="Facebook" class="fb" href="#">Facebook</a> or <a title="Google" class="gg" href="#">Google</a></p>
                                <p class="choose-or"><span>Or</span></p>
                                <div class="popup-content">
                                    <form action="#" class="form-sign form-content" id="signup">
                                        <div class="field-inline">
                                            <div class="field-input">
                                                <input type="text" placeholder="First Name" value="" name="first_name">
                                            </div>
                                            <div class="field-input">
                                                <input type="text" placeholder="Last Name" value="" name="last_name">
                                            </div>
                                        </div>
                                        <div class="field-input">
                                            <input type="email" placeholder="Email" value="" name="email">
                                        </div>
                                        <div class="field-input">
                                            <input type="password" placeholder="Password" value="" name="password">
                                        </div>
                                        <div class="field-check">
                                            <label for="accept">
                                                <input type="checkbox" id="accept" value="">
                                                Accept the <a title="Terms" href="#">Terms</a> and <a title="Privacy Policy" href="#">Privacy Policy</a>
                                                <span class="checkmark">
                                                    <i class="la la-check"></i>
                                                </span>
                                            </label>
                                        </div>
                                        <input type="submit" name="submit" value="Sign Up">
                                    </form>
                                    <form action="#" class="form-log form-content" id="login">
                                        <div class="field-input">
                                            <input type="text" placeholder="Username or Email" value="" name="user">
                                        </div>
                                        <div class="field-input">
                                            <input type="password" placeholder="Password" value="" name="password">
                                        </div>
                                        <a title="Forgot password" class="forgot_pass" href="#">Forgot password</a>
                                        <input type="submit" name="submit" value="Login">
                                    </form>
                                </div>
                            </div><!-- .popup-form -->
                            <div class="right-header__search">
                                <a title="Search" href="#" class="search-open">
                                    <i class="las la-search la-24-black"></i>
                                </a>
                                <div class="site__search">
                                    <a title="Close" href="#" class="search__close">
                                        <i class="la la-times"></i>
                                    </a><!-- .search__close -->
                                    <form action="#" class="site__search__form" method="GET">
                                        <div class="site__search__field">
                                            <span class="site__search__icon">
                                                <i class="las la-search la-24-black"></i>
                                            </span><!-- .site__search__icon -->
                                            <input class="site__search__input" type="text" name="s" placeholder="Search places, cities">
                                        </div><!-- .search__input -->
                                    </form><!-- .search__form -->
                                </div><!-- .site__search -->
                            </div>
                            <div class="right-header__button btn">
                                <a title="Add place" href="#">
                                    <i class="las la-plus la-24-white"></i>
                                    <span>Register</span>
                                </a>
                            </div><!-- .right-header__button -->
                        </div><!-- .right-header -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </header><!-- .site-header -->

        @yield('body')

        <footer id="footer" class="footer">
            <div class="container">
                <div class="footer__top">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="footer__top__info">
                                <a title="Logo" href="{{ url('/') }}" class="footer__top__info__logo"><img src="{{ asset('web/images/logo.svg') }}" alt="Eazzyfind"></a>
                                <p class="footer__top__info__desc">Discover amazing things to do everywhere you go.</p>
                                <div class="footer__top__info__app">
                                    <a title="App Store" href="#" class="banner-apps__download__iphone"><img src="{{ asset('web/images/app-store.png') }}" alt="App Store"></a>
                                    <a title="Google Play" href="#" class="banner-apps__download__android"><img src="{{ asset('web/images/google-play.png') }}" alt="Google Play"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <aside class="footer__top__nav">
                                <h3>Company</h3>
                                <ul>
                                    <li><a title="About Us" href="{{ route('about') }}">About Us</a></li>
                                    <li><a title="Blog" href="#">Blog</a></li>
                                    <li><a title="Faqs" href="#">Faqs</a></li>
                                    <li><a title="Contact" href="#">Contact</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2">
                            <aside class="footer__top__nav">
                                <h3>Support</h3>
                                <ul>
                                    <li><a title="Get in Touch" href="#">Get in Touch</a></li>
                                    <li><a title="Help Center" href="#">Help Center</a></li>
                                    <li><a title="Live chat" href="#">Live chat</a></li>
                                    <li><a title="How it works" href="#">How it works</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3">
                            <aside class="footer__top__nav footer__top__nav--contact">
                                <h3>Contact Us</h3>
                                <p>Email: <a href="#" class="__cf_email__">[email&#160;protected]</a></p>
                                <p>Phone: <a href="#" class="__cf_email__">[phone&#160;protected]</a></p>
                                <ul>
                                    <li class="facebook">
                                        <a title="Facebook" href="#">
											<i class="la la-facebook-f"></i>
										</a>
                                    </li>
                                    <li class="twitter">
                                        <a title="Twitter" href="#">
											<i class="la la-twitter"></i>
										</a>
                                    </li>
                                    <li class="youtube">
                                        <a title="Youtube" href="#">
											<i class="la la-youtube"></i>
										</a>
                                    </li>
                                    <li class="instagram">
                                        <a title="Instagram" href="#">
											<i class="la la-instagram"></i>
										</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div><!-- .top-footer -->
                <div class="footer__bottom">
                    <p class="footer__bottom__copyright">2024 &copy; <a title="Uxper Team" href="#">eazzyfind.com</a>. All rights reserved.</p>
                </div><!-- .top-footer -->
            </div><!-- .container -->
        </footer><!-- site-footer -->
    </div><!-- #wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('web/js/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('web/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('web/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/libs/slick/slick.min.js') }}"></script>
    <script src="{{ asset('web/libs/slick/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('web/libs/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('web/libs/quilljs/js/quill.core.js') }}"></script>
    <script src="{{ asset('web/libs/quilljs/js/quill.js') }}"></script>
    <script src="{{ asset('web/libs/chosen/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('web/libs/datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('web/libs/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('web/libs/waypoints/jquery.waypoints.min.js') }}"></script>
    <!-- orther script -->
    <script src="{{ asset('web/js/main.js') }}"></script>

</html>
