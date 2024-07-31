@extends('frontend.layouts.app')
@section('body')
<main id="main" class="site-main">
    <div class="page-title page-title--small align-left" style="background-image: url({{ asset('web/images/bgs/bg-about.png') }});">
        <div class="container">
            <div class="page-title__content">
                <h1 class="page-title__name">About Us</h1>
                <p class="page-title__slogan">Tell you about us</p>
            </div>
        </div>
    </div><!-- .page-title -->
    <div class="site-content">
        <div class="container">
            <div class="company-info flex-inline">
                <img src="{{ asset('web/images/about-2.jpg') }}" alt="Our Company">
                <div class="ci-content">
                    <span>Our Company</span>
                    <h2>Mission statement</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div><!-- .company-info -->

            <div class="join-team align-center mt-5">
                <div class="container">
                    <h2 class="title">Join our team</h2>
                    <div class="jt-content">
                        <p>We’re always looking for talented individuals and <br> people who are hungry to do great work.</p>
                        <a href="#" class="btn" title="View openings">View openings</a>
                    </div>
                </div>
            </div><!-- .join-team -->
        </div>
    </div><!-- .site-content -->
</main><!-- .site-main -->
@endsection
