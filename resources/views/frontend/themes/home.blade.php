@extends('frontend.layouts.app')
@section('body')
<main id="main" class="site-main home-main business-main overflow">
    <div class="site-banner bg_hero_02">
        <video class="overlay-video" autoplay="" muted="" playsinline="" loop="" src="https://getgolo.com/images/video3.mp4"></video>
        <div class="container">
            <div class="site-banner__content">
                <h1 class="site-banner__title">Find your Local needs</h1>
                <p><i>20</i> cities, <i>10</i> categories, <i>5662</i> listings.</p>
                <form action="#" class="site-banner__search layout-02">
                    <div class="field-input">
                        <label for="s">Find</label>
                        <input class="site-banner__search__input open-suggestion" id="s" type="text" name="s" placeholder="What are you looking for?" autocomplete="off">
                        <div class="search-suggestions name-suggestions">
                            <ul>
                                <li><a href="#"><i class="las la-utensils"></i><span>Restaurant</span></a></li>
                                <li><a href="#"><i class="las la-spa"></i><span>Beauty</span></a></li>
                                <li><a href="#"><i class="las la-dumbbell"></i><span>Fitness</span></a></li>
                                <li><a href="#"><i class="las la-cocktail"></i><span>Nightlight</span></a></li>
                                <li><a href="#"><i class="las la-shopping-bag"></i><span>Shopping</span></a></li>
                                <li><a href="#"><i class="las la-film"></i><span>Cinema</span></a></li>
                            </ul>
                        </div>
                    </div><!-- .site-banner__search__input -->
                    <div class="field-input">
                        <label for="loca">Where</label>
                        <input class="site-banner__search__input open-suggestion" id="loca" type="text" name="where" placeholder="Your city" autocomplete="off">
                        <div class="search-suggestions location-suggestions">
                            <ul>
                                <li><a href="#"><i class="las la-location-arrow"></i><span>Current location</span></a></li>
                                <li><a href="#"><span>Kampala, UG</span></a></li>
                            </ul>
                        </div>
                    </div><!-- .site-banner__search__input -->
                    <div class="field-submit">
                        <button><i class="las la-search la-24-black"></i></button>
                    </div>
                </form><!-- .site-banner__search -->
            </div><!-- .site-banner__content -->
        </div>
    </div><!-- .site-banner -->

    <div class="business-category">
        <div class="container">
            <h2 class="title title-border-bottom align-center offset-item">Browse Businesses by Category</h2>
            <div class="slick-sliders offset-item">
                <div class="slick-slider business-cat-slider slider-pd30" data-item="6" data-arrows="true" data-itemScroll="6" data-dots="true" data-centerPadding="50" data-tabletitem="3" data-tabletscroll="3" data-smallpcitem="4" data-smallpcscroll="4" data-mobileitem="2" data-mobilescroll="2" data-mobilearrows="false">
                    <div class="bsn-cat-item rosy-pink">
                        <a href="ex-half-map-1.html">
                            <i class="las la-utensils"></i>
                            <span class="title">Restaurant</span>
                            <span class="place">12 Places</span>
                        </a>
                    </div>
                    <div class="bsn-cat-item purple">
                        <a href="ex-half-map-1.html">
                            <i class="las la-spa"></i>
                            <span class="title">Beauty</span>
                            <span class="place">8 Places</span>
                        </a>
                    </div>
                    <div class="bsn-cat-item blue">
                        <a href="ex-half-map-1.html">
                            <i class="las la-dumbbell"></i>
                            <span class="title">Fitness</span>
                            <span class="place">6 Places</span>
                        </a>
                    </div>
                    <div class="bsn-cat-item orange">
                        <a href="ex-half-map-1.html">
                            <i class="las la-cocktail"></i>
                            <span class="title">Nightlife</span>
                            <span class="place">10 Places</span>
                        </a>
                    </div>
                    <div class="bsn-cat-item charcoal-purple">
                        <a href="ex-half-map-1.html">
                            <i class="las la-shopping-bag"></i>
                            <span class="title">Shopping</span>
                            <span class="place">12 Places</span>
                        </a>
                    </div>
                    <div class="bsn-cat-item green">
                        <a href="ex-half-map-1.html">
                            <i class="las la-film"></i>
                            <span class="title">Cinema</span>
                            <span class="place">15 Places</span>
                        </a>
                    </div>
                    <div class="bsn-cat-item rosy-pink">
                        <a href="ex-half-map-1.html">
                            <i class="las la-utensils"></i>
                            <span class="title">Restaurant</span>
                            <span class="place">12 Places</span>
                        </a>
                    </div>
                </div>
                <div class="place-slider__nav slick-nav">
                    <div class="place-slider__prev slick-nav__prev">
                        <i class="las la-angle-left"></i>
                    </div><!-- .place-slider__prev -->
                    <div class="place-slider__next slick-nav__next">
                        <i class="las la-angle-right"></i>
                    </div><!-- .place-slider__next -->
                </div><!-- .place-slider__nav -->
            </div>
        </div>
    </div><!-- .business-category -->

    <div class="trending trending-business">
        <div class="container">
            <h2 class="title text-center title-border-bottom offset-item">Trending Business Places</h2>

            <div class="slick-sliders offset-item">
                <div class="slick-slider trending-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="4" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-tabletscroll="2" data-smallpcscroll="3" data-smallpcitem="3" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="#"><img src="{{ asset('web/images/listing/01.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category rosy-pink" href="#">
                                    <i class="las la-utensils"></i><span>Restaurant</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/male-3.jpg') }}" alt="Author"></a>
                                <div class="feature">Featured</div>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Restaurant</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Paris</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Mattone Restaurant</a></h3>
                                <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <div class="place-rating">
                                            <span>5.0</span>
                                            <i class="la la-star"></i>
                                        </div>
                                        <span class="count-reviews">(2 Reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="single-1.html"><img src="{{ asset('web/images/listing/02.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category blue" href="#">
                                    <i class="las la-dumbbell"></i><span>Gym</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/male-2.jpg') }}" alt="Author"></a>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Gym</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Bordeaux</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Retro Fitness</a></h3>
                                <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <div class="place-rating">
                                            <span>5.0</span>
                                            <i class="la la-star"></i>
                                        </div>
                                        <span class="count-reviews">(2 Reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="single-1.html"><img src="{{ asset('web/images/listing/04.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category purple" href="#">
                                    <i class="las la-spa"></i><span>Massage</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/female-3.jpg') }}" alt="Author"></a>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Massage</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Lyon</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Renew Body Spa</a></h3>
                                <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <div class="place-rating">
                                            <span>5.0</span>
                                            <i class="la la-star"></i>
                                        </div>
                                        <span class="count-reviews">(2 Reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="single-1.html"><img src="{{ asset('web/images/listing/05.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category charcoal-purple" href="#">
                                    <i class="las la-shopping-bag"></i><span>Clothing Shop</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/male-4.jpg') }}" alt="Author"></a>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Clothing Shop</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Nantes</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Antoinette</a></h3>
                                <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <span class="no-reviews">(no reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="single-1.html"><img src="{{ asset('web/images/listing/06.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category green" href="#">
                                    <i class="las la-film"></i><span>Cinema</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/female-3.jpg') }}" alt="Author"></a>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Restaurant</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Paris</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Kathay Cinema</a></h3>
                                <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <span class="no-reviews">(no reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-slider__nav slick-nav">
                    <div class="place-slider__prev slick-nav__prev">
                        <i class="las la-angle-left"></i>
                    </div><!-- .place-slider__prev -->
                    <div class="place-slider__next slick-nav__next">
                        <i class="las la-angle-right"></i>
                    </div><!-- .place-slider__next -->
                </div><!-- .place-slider__nav -->
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="service-head d-flex">
                        <a href="#" class="btn btn-border">View More</a>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .trending -->

    <section class="cities-wrap" style="background-image: url({{ asset('web/images/workspace/bg-world.png') }});">
        <div class="container">
            <div class="title-wrap align-center">
                <h2>Popular Cities</h2>
                <p>Search for coworking spaces in our most popular cities</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="item hover-img">
                        <div class="item-inner">
                            <div class="entry-thumb"><a href="#"><img src="{{ asset('web/images/workspace/city-01.jpg') }}" alt=""></a></div>
                            <div class="entry-detail">
                                <h3><a href="#">Kampala</a></h3>
                                <span>65 Spaces</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="item hover-img">
                        <div class="item-inner">
                            <div class="entry-thumb"><a href="#"><img src="{{ asset('web/images/workspace/city-02.jpg') }}" alt=""></a></div>
                            <div class="entry-detail">
                                <h3><a href="#">Entebbe</a></h3>
                                <span>72 Spaces</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="item hover-img">
                        <div class="item-inner">
                            <div class="entry-thumb"><a href="#"><img src="{{ asset('web/images/workspace/city-03.jpg') }}" alt=""></a></div>
                            <div class="entry-detail">
                                <h3><a href="#">Mbale</a></h3>
                                <span>33 Spaces</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="item hover-img">
                        <div class="item-inner">
                            <div class="entry-thumb"><a href="#"><img src="{{ asset('web/images/workspace/city-04.jpg') }}" alt=""></a></div>
                            <div class="entry-detail">
                                <h3><a href="#">Mbarara</a></h3>
                                <span>42 Spaces</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="item hover-img">
                        <div class="item-inner">
                            <div class="entry-thumb"><a href="#"><img src="{{ asset('web/images/workspace/city-05.jpg') }}" alt=""></a></div>
                            <div class="entry-detail">
                                <h3><a href="#">Jinja</a></h3>
                                <span>12 Spaces</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="item hover-img">
                        <div class="item-inner">
                            <div class="entry-thumb"><a href="#"><img src="{{ asset('web/images/workspace/city-06.jpg') }}" alt=""></a></div>
                            <div class="entry-detail">
                                <h3><a href="#">Mukono</a></h3>
                                <span>32 Spaces</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- .cities-wrap -->

    <div class="trending latest trending-business">
        <div class="container">
            <h2 class="title text-center title-border-bottom offset-item">Latest Business Places</h2>

            <div class="slick-sliders offset-item">
                <div class="slick-slider trending-slider slider-pd30" data-item="4" data-arrows="true" data-itemScroll="4" data-dots="true" data-centerPadding="30" data-tabletitem="2" data-tabletscroll="2" data-smallpcscroll="3" data-smallpcitem="3" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="#"><img src="{{ asset('web/images/listing/01.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category rosy-pink" href="#">
                                    <i class="las la-utensils"></i><span>Restaurant</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/male-3.jpg') }}" alt="Author"></a>
                                <div class="feature">Featured</div>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Restaurant</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Paris</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Mattone Restaurant</a></h3>
                                <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <div class="place-rating">
                                            <span>5.0</span>
                                            <i class="la la-star"></i>
                                        </div>
                                        <span class="count-reviews">(2 Reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="single-1.html"><img src="{{ asset('web/images/listing/02.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category blue" href="#">
                                    <i class="las la-dumbbell"></i><span>Gym</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/male-2.jpg') }}" alt="Author"></a>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Gym</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Bordeaux</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Retro Fitness</a></h3>
                                <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <div class="place-rating">
                                            <span>5.0</span>
                                            <i class="la la-star"></i>
                                        </div>
                                        <span class="count-reviews">(2 Reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="single-1.html"><img src="{{ asset('web/images/listing/04.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category purple" href="#">
                                    <i class="las la-spa"></i><span>Massage</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/female-3.jpg') }}" alt="Author"></a>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Massage</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Lyon</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Renew Body Spa</a></h3>
                                <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <div class="place-rating">
                                            <span>5.0</span>
                                            <i class="la la-star"></i>
                                        </div>
                                        <span class="count-reviews">(2 Reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="single-1.html"><img src="{{ asset('web/images/listing/05.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category charcoal-purple" href="#">
                                    <i class="las la-shopping-bag"></i><span>Clothing Shop</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/male-4.jpg') }}" alt="Author"></a>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Clothing Shop</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Nantes</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Antoinette</a></h3>
                                <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <span class="no-reviews">(no reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb hover-img">
                                <a class="entry-thumb" href="single-1.html"><img src="{{ asset('web/images/listing/06.jpg') }}" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>
                                </a>
                                <a class="entry-category green" href="#">
                                    <i class="las la-film"></i><span>Cinema</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="{{ asset('web/images/avatars/female-3.jpg') }}" alt="Author"></a>
                            </div>
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Restaurant</span>
                                    </div>
                                    <div class="place-city">
                                        <a href="#">Paris</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="single-1.html">Kathay Cinema</a></h3>
                                <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <span class="no-reviews">(no reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>$$</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-slider__nav slick-nav">
                    <div class="place-slider__prev slick-nav__prev">
                        <i class="las la-angle-left"></i>
                    </div><!-- .place-slider__prev -->
                    <div class="place-slider__next slick-nav__next">
                        <i class="las la-angle-right"></i>
                    </div><!-- .place-slider__next -->
                </div><!-- .place-slider__nav -->
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="service-head d-flex">
                        <a href="#" class="btn btn-border">View More</a>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .trending -->

    <div class="testimonial">
        <div class="container">
            <h2 class="title title-border-bottom align-center offset-item">People Talking About Us</h2>
            <div class="slick-sliders offset-item">
                <div class="slick-slider testimonial-slider layout-02 slider-pd30" data-item="2" data-arrows="true" data-itemScroll="2" data-dots="true" data-centerPadding="30" data-tabletitem="1" data-tabletscroll="1" data-mobileitem="1" data-mobilescroll="1" data-mobilearrows="false">
                    <div class="testimonial-item">
                        <div class="avatar">
                            <img src="{{ asset('web/images/avatars/male-1.jpg') }}" alt="Avatar">
                        </div>
                        <div class="testimonial-info">
                            <p>Really useful app to find interesting things to see do, drink and eat in new places. I’ve been using it regularly in my travels over the past few months.</p>
                            <div class="testimonial-meta">
                                <b>Kari Granleese</b>
                                <span>CEO Alididi</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="avatar">
                            <img src="{{ asset('web/images/avatars/female-1.jpg') }}" alt="Avatar">
                        </div>
                        <div class="testimonial-info">
                            <p>Really useful app to find interesting things to see do, drink and eat in new places. I’ve been using it regularly in my travels over the past few months.</p>
                            <div class="testimonial-meta">
                                <b>Kari Granleese</b>
                                <span>CEO Alididi</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="avatar">
                            <img src="{{ asset('web/images/avatars/female-3.jpg') }}" alt="Avatar">
                        </div>
                        <div class="testimonial-info">
                            <p>Really useful app to find interesting things to see do, drink and eat in new places. I’ve been using it regularly in my travels over the past few months.</p>
                            <div class="testimonial-meta">
                                <b>Kari Granleese</b>
                                <span>CEO Alididi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="place-slider__nav slick-nav">
                    <div class="place-slider__prev slick-nav__prev">
                        <i class="las la-angle-left"></i>
                    </div><!-- .place-slider__prev -->
                    <div class="place-slider__next slick-nav__next">
                        <i class="las la-angle-right"></i>
                    </div><!-- .place-slider__next -->
                </div><!-- .place-slider__nav -->
            </div>
        </div>
    </div><!-- .testimonial -->
    <div class="blogs">
        <div class="container">
            <h2 class="title title-border-bottom align-center offset-item">From Our Blog</h2>
            <div class="news__content offset-item">
                <div class="row">
                    <div class="col-md-4">
                        <article class="post hover__box">
                            <div class="post__thumb hover__box__thumb">
                                <a title="The 8 Most Affordable Michelin Restaurants in Paris" href="#"><img src="images/blog/thumb-05.jpg" alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
                            </div>
                            <div class="post__info">
                                <ul class="post__category">
                                    <li><a title="Food" href="#">Food & Drink</a></li>
                                </ul>
                                <h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris" href="#">10 Best Classic Diners in Manhattan</a></h3>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="post hover__box">
                            <div class="post__thumb hover__box__thumb">
                                <a title="The 7 Best Restaurants to Try Kobe Beef in London" href="#"><img src="images/blog/thumb-01.jpg" alt="The 7 Best Restaurants to Try Kobe Beef in London"></a>
                            </div>
                            <div class="post__info">
                                <ul class="post__category">
                                    <li><a title="Art & Decor" href="#">Lifestyle</a></li>
                                </ul>
                                <h3 class="post__title"><a title="The 7 Best Restaurants to Try Kobe Beef in London" href="#">The Stepping Razor Barbershop</a></h3>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="post hover__box">
                            <div class="post__thumb hover__box__thumb">
                                <a title="The 8 Most Affordable Michelin Restaurants in Paris" href="#"><img src="images/blog/thumb-10.jpg" alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
                            </div>
                            <div class="post__info">
                                <ul class="post__category">
                                    <li><a title="Stay" href="#">Place to Stay</a></li>
                                </ul>
                                <h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris" href="#">The 9 Best Cheap Hotels in New York City</a></h3>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="align-center button-wrap"><a href="#" class="btn btn-border">View more</a></div>
            </div>
        </div>
    </div><!-- .blogs -->
</main><!-- .site-main -->
@endsection
