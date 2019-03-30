<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Basic need -->
    <title>Rental Service</title>
    <meta charset="UTF-8">
    <meta name="description" content="Rental Service">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Mobile specific meta -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone-no">

    <!-- External Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,700,800|Roboto:400,500,700"
          rel="stylesheet">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<header class="header header--blue header--top">
    <div class="container">
        <div class="topbar">
            <ul class="topbar__contact">
                <li>
                    <span class="ion-ios-telephone-outline topbar__icon"></span>
                    <a href="tel:8801962126456" class="topbar__link">(+880)1743068092</a>
                </li>
                <li>
                    <span class="ion-ios-email-outline topbar__icon"></span>
                    <a href="mailto:mobassirjabin@gmail.com" class="topbar__link">Rentalservice@support
                        .com</a>
                </li>
            </ul><!-- .topbar__contact -->

            @guest
            <ul class="topbar__user">
                <span class="ion-ios-person-outline topbar__user-icon"></span>
                <li><a href="login" class="topbar__link">Sign In</a></li>
            </ul>
            @endguest
        </div><!-- .topbar -->

        <div class="header__main">
            <div class="header__logo">
                <a href="{{ route('home') }}">
                    <h1 class="screen-reader-text">Rental Service</h1>
                    <img src="images/uploads/logo.png" alt="Rental Service">
                </a>
            </div><!-- .header__main -->

            <div class="nav-mobile">
                <a href="#" class="nav-toggle">
                    <span></span>
                </a><!-- .nav-toggle -->
            </div><!-- .nav-mobile -->

            <div class="header__menu header__menu--v1">
                <ul class="header__nav">
                    <li class="header__nav-item">
                        <a href="{{ route('home') }}" class="header__nav-link">Home</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{ route('feed') }}" class="header__nav-link">Feed</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{ route('about.us') }}" class="header__nav-link">About Us</a>
                    </li>
                </ul>

                @auth
                <div class="header__user">
                    <div class="header__user-inner">
                        @if(Auth::user()->profile->avatar == null)
                            <img src="{{ asset('/images/default.png') }}" height="30" width="20"
                                 class="header__user-avatar" alt="">
                        @else
                            <img src="{{ asset('/images/uploads/avatar/'. Auth::user()->profile->avatar) }}"
                                 alt="" class="header__user-avatar" height="30" width="20">
                        @endif
                        <span class="header__user-name">Hi, {{ Auth::user()->name }}!</span>

                        <ul class="header__user-menu">
                            @if(auth()->user()->is_admin == false)
                                <li class="setting">
                                    <a href="{{ route('my.profile') }}" class="setting__link">
                                        <i class="ion-ios-person-outline setting__icon"></i>My Profile</a>
                                </li>
                                <li class="setting">
                                    <a href="{{ route('my.properties') }}" class="setting__link">
                                        <i class="ion-ios-home-outline setting__icon"></i>My Property</a>
                                </li>
                                <li class="setting">
                                    <a href="{{ route('my.profile.change.password') }}" class="setting__link">
                                        <i class="ion-ios-unlocked-outline setting__icon"></i>Change Password</a>
                                </li>
                            @else
                                <li class="setting">
                                    <a href="{{ route('admin.dashboard') }}" class="setting__link">
                                        <i class="ion-ios-person-outline setting__icon"></i>Goto Dashboard</a>
                                </li>
                            @endif
                            <li class="setting">
                                <a class="setting__link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ion-ios-undo-outline setting__icon"></i>Log Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div><!-- .header__user-inner -->
                </div><!-- .header__user -->
                @endauth

            </div><!-- .header__menu -->

            <a href="{{ route('my.properties.create') }}" class="header__cta">&plus; Submit Property</a>
        </div><!-- .header__main -->
    </div><!-- .container -->
</header><!-- .header -->

<section class="main-slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="realand-slider-1"
         data-source="gallery"
         style="margin:0px auto;background:rgba(0,0,0,0.5);padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.6 fullwidth mode -->
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="images/revslider/main_slider_1-100x50.jpg" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/image/1.jpg" alt="" title="main_slider_1" width="1920" height="820"
                         data-lazyload="images/revslider/main_slider_1.jpg" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                         data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-60','-40']"
                         data-fontsize="['18','18','16','14']" data-width="none" data-height="none"
                         data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                         style="z-index: 5; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: #f3f3f3; letter-spacing: 0px;font-family:Roboto;">
                        THE BEST REAL ESTATE DEALS IN OUR COUNTRY
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme" id="slide-1-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['60','60','40','26']" data-width="none" data-height="none"
                         data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                         style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 900; color: #ffffff; letter-spacing: 0px;font-family:Raleway;">
                        Discover Your Perfect Home
                    </div>

                    <!-- LAYER NR. 3 -->
                    <a href="#" data-lity class="tp-caption   tp-resizeme"
                       target="_self" id="slide-1-layer-7" data-x="['center','center','center','center']"
                       data-hoffset="['6','6','6','6']" data-y="['top','top','top','top']"
                       data-voffset="['480','380','300','230']" data-fontsize="['60','60','36','36']" data-width="none"
                       data-height="none" data-whitespace="nowrap" data-type="text" data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                       style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;text-decoration: none;"><i
                                class="fa fa-play-circle-o"></i> </a>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-12" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="images/revslider/main_slider_1-2-100x50.jpeg" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/image/2.jpg" alt="" title="Main Slider 1-2" width="1920" height="820"
                         data-lazyload="images/revslider/main_slider_1-2.jpeg" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                         data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" id="slide-12-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-60','-40']"
                         data-fontsize="['18','18','16','14']" data-width="none" data-height="none"
                         data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                         style="z-index: 5; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: #f3f3f3; letter-spacing: 0px;font-family:Roboto;">
                        THE BEST REAL ESTATE DEALS
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme" id="slide-12-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['60','60','40','26']" data-width="none" data-height="none"
                         data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                         style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 900; color: #ffffff; letter-spacing: 0px;font-family:Raleway;">
                        Discover Your Perfect Home
                    </div>

                    <!-- LAYER NR. 6 -->
                    <a href="#" data-lity class="tp-caption   tp-resizeme"
                       target="_self" id="slide-12-layer-7" data-x="['center','center','center','center']"
                       data-hoffset="['6','6','6','6']" data-y="['top','top','top','top']"
                       data-voffset="['480','380','300','230']" data-fontsize="['60','60','36','36']" data-width="none"
                       data-height="none" data-whitespace="nowrap" data-type="text" data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                       style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;text-decoration: none;"><i
                                class="fa fa-play-circle-o"></i> </a>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <section class="main-search main-search--absolute">
        <div class="container">
            <div class="main-search__container">
                <section class="listing-search">
                    <form action="{{ route('search') }}" method="get" role="search" class="listing-search__form">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="listing-type" class="listing-search__label">Property Type</label>
                                <select name="property" id="listing-type" class="ht-field">
                                    <option value="Single Bed" selected>Single Bed</option>
                                    <option value="Single Room">Single Room</option>
                                    <option value="Flat">Flat</option>
                                </select>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="offer-type" class="listing-search__label">Offer Type</label>
                                <select name="offer" id="offer-type" class="ht-field">
                                    <option value="rent" selected>For Rent</option>
                                    <option value="sale">For Sale</option>
                                </select>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="city" class="listing-search__label">Select Your City</label>
                                <select name="city" id="city" class="ht-field">
                                    @foreach(\App\City::all() as $city)
                                        <option value="{{ $city->name }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div><!-- .col -->

                            <div class="col-sm-3">
                                <label for="listing-btn" class="listing-search__label listing-search__label--hidden">Search</label>
                                <input type="submit" id="listing-btn" class="listing-search__btn" value="Search">
                            </div><!-- .col -->
                        </div><!-- row -->
                    </form><!-- .listing-search__form -->
                </section><!-- .listing-search -->
            </div><!-- .main-search__container -->
        </div><!-- .container -->
    </section><!-- .main-search -->
</section><!-- .main-slider -->

<section class="item-grid">
    <div class="container">
        <div class="row">
            <h2 class="text-center" style="text-align: center; margin: 20px">Featured Items</h2>
            @foreach($properties as $property)
                <div class="col-md-6 item-grid__container">
                    <div class="listing">
                        <div class="item-grid__image-container">
                            <a href="{{ route('feed.properties.single', $property->id) }}">
                                <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
                                <img style="height: 300px; width: 100%"
                                     src="{{ asset('/images/uploads/'.$property->get_featured_image()->location) }}"
                                     alt="Real House Luxury Villa"
                                     class="listing__img">
                                <span class="listing__favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                            </a>
                        </div><!-- .item-grid__image-container -->

                        <div class="item-grid__content-container">
                            <div class="listing__content">
                                <div class="listing__header">
                                    <div class="listing__header-primary">
                                        <h3 class="listing__title">
                                            <a href="{{ route('feed.properties.single', $property->id) }}">{{ $property->title }}</a>
                                        </h3>
                                        <p class="listing__location">
                                            <span class="ion-ios-location-outline listing__location-icon"></span>
                                            {{ $property->address }}
                                        </p>
                                    </div><!-- .listing__header-primary -->
                                    <p class="listing__price">{{ $property->price }} Tk</p>
                                </div><!-- .listing__header -->
                                <div class="listing__details">
                                    @if($property->type == "Flat")
                                        <ul class="listing__stats">
                                            <li><span class="listing__figure">{{ $property->bedrooms }}<sup>&plus;</sup></span> Beds</li>
                                            <li><span class="listing__figure">{{ $property->bathrooms }}</span> Baths</li>
                                            <li><span class="listing__figure">{{ $property->space }}</span> sq.ft</li>
                                        </ul><!-- .listing__stats -->
                                    @endif
                                    <a href="{{ route('feed.properties.single', $property->id) }}" class="listing__btn">Details
                                        <span class="listing__btn-icon">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    </a>
                                </div><!-- .listing__details -->
                            </div><!-- .listing-content -->
                        </div><!-- .item-grid__content-container -->
                    </div><!-- .listing -->
                </div><!-- .col -->
            @endforeach
        </div><!-- .row -->

        {{--<div class="item-grid--centered">--}}
        {{--<a href="#" class="item-grid__load-more">Load More</a>--}}
        {{--</div>--}}
    </div><!-- .container -->
</section><!-- .item-grid-2 -->
<section class="features">
    <div class="features__overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature">
                        <img src="images/icon_map.png" alt="Map" class="feature__icon">
                        <h3 class="feature__title">Freshest Market Info</h3>
                        <p class="feature__desc">
                            Our extensive database of listings and market info provide the most accurate.
                        </p>
                    </div><!-- .feature -->
                </div><!-- .col -->

                <div class="col-sm-4">
                    <div class="feature">
                        <img src="images/icon_search.png" alt="Search" class="feature__icon">
                        <h3 class="feature__title">Top Local Agents</h3>
                        <p class="feature__desc">
                            Our extensive database of listings and market info provide the most accurate.
                        </p>
                    </div><!-- .feature -->
                </div><!-- .col -->
                <div class="col-sm-4">
                    <div class="feature">
                        <img src="images/icon_negotiation.png" alt="Negotiation" class="feature__icon">
                        <h3 class="feature__title">Peace of Mind</h3>
                        <p class="feature__desc">
                            Our extensive database of listings and market info provide the most accurate.
                        </p>
                    </div><!-- .feature -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .features__overlay -->
</section><!-- .features -->
<section class="partners">
    <div class="container">
        <ul class="partners__list">
            <li><img src="images/uploads/partner1.jpg" alt="Partner"></li>
            <li><img src="images/uploads/partner2.jpg" alt="Partner"></li>
            <li><img src="images/uploads/partner4.jpg" alt="Partner"></li>
            <li><img src="images/uploads/partner5.jpg" alt="Partner"></li>
            
            
          
        </ul><!-- .partners__list -->
    </div><!-- .container -->
</section><!-- .partners -->
<footer class="footer">
    <div class="footer__links">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-4 footer__links-single">
                    <h3 class="footer__title">Contact Us</h3>
                    <ul class="footer__list">
                        <li><span class="footer--highlighted">Address:</span> <a href="#">Shyamoli, Ring Road,2/B/7</a></li>
                        <li><span class="footer--highlighted">Email:</span> <a
                                    href="mailto:ReaLand@support.com">Rentalservice@support.com</a></li>
                        <li><span class="footer--highlighted">Phone:</span> <a href="tel:+8802993999">(880)-01743068092</a>
                        </li>
                        <li><span class="footer--highlighted">Fax:</span> <a href="#">(880)-1962126456</a></li>
                    </ul><!-- .footer__list -->
                </div><!-- .col -->
                <div class="col-sm-4 col-md-2 footer__links-single">
                    <h3 class="footer__title">Buy</h3>
                    <ul class="footer__list">
                        <li><a href="#">Homes for Sale</a></li>
                        <li><a href="#">Open Houses</a></li>
                        <li><a href="#">New Listings</a></li>
                        <li><a href="#">Recently Reduced</a></li>
                        <li><a href="#">Off-Market Homes</a></li>
                    </ul><!-- .footer__list -->
                </div><!-- .col -->
                <div class="col-sm-4 col-md-2 footer__links-single">
                    <h3 class="footer__title">Sell</h3>
                    <ul class="footer__list">
                        <li><a href="#">Sell Your Home</a></li>
                        <li><a href="#">Get a Home Valuation</a></li>
                        <li><a href="#">Local Home Prices</a></li>
                        <li><a href="#">Guides & Rules</a></li>
                        <li><a href="#">Others</a></li>
                    </ul><!-- .footer__list -->
                </div><!-- .col -->
                <div class="col-sm-4 col-md-2 footer__links-single">
                    <h3 class="footer__title">My ReaLand</h3>
                    <ul class="footer__list">
                        <li><a href="#">Favorites</a></li>
                        <li><a href="#">Save Searches</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Join Us</a></li>
                    </ul><!-- .footer__list -->
                </div><!-- .col -->
                <div class="col-sm-4 col-md-2 footer__links-single">
                    <h3 class="footer__title">ReaLand Estate</h3>
                    <ul class="footer__list">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Management Team</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul><!-- .footer__list -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer__links -->

    <div class="footer__main">
        <div class="container">
            <div class="footer__logo">
                <h1 class="screen-reader-text">Rental Service</h1>
                <img src="images/uploads/logo_dark.png" alt="Rental Service">
            </div><!-- .footer__logo -->
            <p class="footer__desc">Rental Service is made for buying and selling houses faster, easier and customized for
                you.</p>
            <ul class="footer__social">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul><!-- .footer__social -->
        </div><!-- .container -->
    </div><!-- .footer__main -->

    <div class="footer__copyright">
        <div class="container">
            <div class="footer__copyright-inner">
                <p class="footer__copyright-desc">
                    &copy; 2018 <span class="footer--highlighted">Rental Service</span> Real Estate. All Right Reserved.
                </p>
                <ul class="footer__copyright-list">
                    <li><a href="#">Neighborhood Guide</a></li>
                    <li><a href="#">Market Trends</a></li>
                    <li><a href="#">Schools</a></li>
                    <li><a href="#">Real Estate Tips</a></li>
                </ul>
            </div><!-- .footer__copyright-inner -->
        </div><!-- .container -->
    </div><!-- .footer__copyright -->
</footer><!-- .footer -->
<a href="#" class="back-to-top"><span class="ion-ios-arrow-up"></span></a>
<div id="submit-property-wysiwyg-icons">
    <svg xmlns="http://www.w3.org/2000/svg">
        <symbol id="trumbowyg-blockquote" viewBox="0 0 72 72">
            <path d="M21.3 31.9h-.6c.8-1.2 1.9-2.2 3.4-3.2 2.1-1.4 5-2.7 9.2-3.3l-1.4-8.9c-4.7.7-8.5 2.1-11.7 4-2.4 1.4-4.3 3.1-5.8 4.9-2.3 2.7-3.7 5.7-4.5 8.5-.8 2.8-1 5.4-1 7.5 0 2.3.3 4 .4 4.8 0 .1.1.3.1.4 1.2 5.4 6.1 9.5 11.9 9.5 6.7 0 12.2-5.4 12.2-12.2s-5.5-12-12.2-12zM49.5 31.9h-.6c.8-1.2 1.9-2.2 3.4-3.2 2.1-1.4 5-2.7 9.2-3.3l-1.4-8.9c-4.7.7-8.5 2.1-11.7 4-2.4 1.4-4.3 3.1-5.8 4.9-2.3 2.7-3.7 5.7-4.5 8.5-.8 2.8-1 5.4-1 7.5 0 2.3.3 4 .4 4.8 0 .1.1.3.1.4 1.2 5.4 6.1 9.5 11.9 9.5 6.7 0 12.2-5.4 12.2-12.2s-5.5-12-12.2-12z"/>
        </symbol>
        <symbol id="trumbowyg-bold" viewBox="0 0 72 72">
            <path d="M51.1 37.8c-1.1-1.4-2.5-2.5-4.2-3.3 1.2-.8 2.1-1.8 2.8-3 1-1.6 1.5-3.5 1.5-5.3 0-2-.6-4-1.7-5.8-1.1-1.8-2.8-3.2-4.8-4.1-2-.9-4.6-1.3-7.8-1.3h-16v42h16.3c2.6 0 4.8-.2 6.7-.7 1.9-.5 3.4-1.2 4.7-2.1 1.3-1 2.4-2.4 3.2-4.1.9-1.7 1.3-3.6 1.3-5.7.2-2.5-.5-4.7-2-6.6zM40.8 50.2c-.6.1-1.8.2-3.4.2h-9V38.5h8.3c2.5 0 4.4.2 5.6.6 1.2.4 2 1 2.7 2 .6.9 1 2 1 3.3 0 1.1-.2 2.1-.7 2.9-.5.9-1 1.5-1.7 1.9-.8.4-1.7.8-2.8 1zm2.6-20.4c-.5.7-1.3 1.3-2.5 1.6-.8.3-2.5.4-4.8.4h-7.7V21.6h7.1c1.4 0 2.6 0 3.6.1s1.7.2 2.2.4c1 .3 1.7.8 2.2 1.7.5.9.8 1.8.8 3-.1 1.3-.4 2.2-.9 3z"/>
        </symbol>
        <symbol id="trumbowyg-close" viewBox="0 0 72 72">
            <path d="M57 20.5l-5.4-5.4-15.5 15.5-15.6-15.5-5.4 5.4L30.7 36 15.1 51.5l5.4 5.4 15.6-15.5 15.5 15.5 5.4-5.4L41.5 36z"/>
        </symbol>
        <symbol id="trumbowyg-create-link" viewBox="0 0 72 72">
            <path d="M31.1 48.9l-6.7 6.7c-.8.8-1.6.9-2.1.9s-1.4-.1-2.1-.9L15 50.4c-1.1-1.1-1.1-3.1 0-4.2l6.1-6.1.2-.2 6.5-6.5c-1.2-.6-2.5-.9-3.8-.9-2.3 0-4.6.9-6.3 2.6L11 41.8c-3.5 3.5-3.5 9.2 0 12.7l5.2 5.2c1.7 1.7 4 2.6 6.3 2.6s4.6-.9 6.3-2.6l6.7-6.7c2.5-2.6 3.1-6.7 1.5-10l-5.9 5.9zM38.7 22.5l6.7-6.7c.8-.8 1.6-.9 2.1-.9s1.4.1 2.1.9l5.2 5.2c1.1 1.1 1.1 3.1 0 4.2l-6.1 6.1-.2.2L42 38c1.2.6 2.5.9 3.8.9 2.3 0 4.6-.9 6.3-2.6l6.7-6.7c3.5-3.5 3.5-9.2 0-12.7l-5.2-5.2c-1.7-1.7-4-2.6-6.3-2.6s-4.6.9-6.3 2.6l-6.7 6.7c-2.7 2.7-3.3 6.9-1.7 10.2l6.1-6.1c0 .1 0 .1 0 0z"/>
            <path d="M44.2 30.5c.2-.2.4-.6.4-.9 0-.3-.1-.6-.4-.9l-2.3-2.3c-.3-.2-.6-.4-.9-.4-.3 0-.6.1-.9.4L25.9 40.6c-.2.2-.4.6-.4.9 0 .3.1.6.4.9l2.3 2.3c.2.2.6.4.9.4.3 0 .6-.1.9-.4l14.2-14.2zM49.9 55.4h-8.5v-5h8.5v-8.9h5.2v8.9h8.5v5h-8.5v8.9h-5.2v-8.9z"/>
        </symbol>
        <symbol id="trumbowyg-del" viewBox="0 0 72 72">
            <path d="M45.8 45c0 1-.3 1.9-.9 2.8-.6.9-1.6 1.6-3 2.1s-3.1.8-5 .8c-2.1 0-4-.4-5.7-1.1-1.7-.7-2.9-1.7-3.6-2.7-.8-1.1-1.3-2.6-1.5-4.5l-.1-.8-6.7.6v.9c.1 2.8.9 5.4 2.3 7.6 1.5 2.3 3.5 4 6.1 5.1 2.6 1.1 5.7 1.6 9.4 1.6 2.9 0 5.6-.5 8-1.6 2.4-1.1 4.3-2.7 5.6-4.7 1.3-2 2-4.2 2-6.5 0-1.6-.3-3.1-.9-4.5l-.2-.6H44c0 .1 1.8 2.3 1.8 5.5zM29 28.9c-.8-.8-1.2-1.7-1.2-2.9 0-.7.1-1.3.4-1.9.3-.6.7-1.1 1.4-1.6.6-.5 1.4-.9 2.5-1.1 1.1-.3 2.4-.4 3.9-.4 2.9 0 5 .6 6.3 1.7 1.3 1.1 2.1 2.7 2.4 5.1l.1.9 6.8-.5v-.9c-.1-2.5-.8-4.7-2.1-6.7s-3.2-3.5-5.6-4.5c-2.4-1-5.1-1.5-8.1-1.5-2.8 0-5.3.5-7.6 1.4-2.3 1-4.2 2.4-5.4 4.3-1.2 1.9-1.9 3.9-1.9 6.1 0 1.7.4 3.4 1.2 4.9l.3.5h11.8c-2.3-.9-3.9-1.7-5.2-2.9zm13.3-6.2zM22.7 20.3zM13 34.1h46.1v3.4H13z"/>
        </symbol>
        <symbol id="trumbowyg-em" viewBox="0 0 72 72">
            <path d="M26 57l10.1-42h7.2L33.2 57H26z"/>
        </symbol>
        <symbol id="trumbowyg-fullscreen" viewBox="0 0 72 72">
            <path d="M25.2 7.1H7.1v17.7l6.7-6.5 10.5 10.5 4.5-4.5-10.4-10.5zM47.2 7.1l6.5 6.7-10.5 10.5 4.5 4.5 10.5-10.4 6.7 6.8V7.1zM47.7 43.2l-4.5 4.5 10.4 10.5-6.8 6.7h18.1V47.2l-6.7 6.5zM24.3 43.2L13.8 53.6l-6.7-6.8v18.1h17.7l-6.5-6.7 10.5-10.5z"/>
            <path fill="currentColor"
                  d="M10.7 28.8h18.1V11.2l-6.6 6.4L11.6 7.1l-4.5 4.5 10.5 10.5zM60.8 28.8l-6.4-6.6 10.5-10.6-4.5-4.5-10.5 10.5-6.7-6.9v18.1zM60.4 64.9l4.5-4.5-10.5-10.5 6.9-6.7H43.2v17.6l6.6-6.4zM11.6 64.9l10.5-10.5 6.7 6.9V43.2H11.1l6.5 6.6L7.1 60.4z"/>
        </symbol>
        <symbol id="trumbowyg-h1" viewBox="0 0 72 72">
            <path d="M6.4 14.9h7.4v16.7h19.1V14.9h7.4V57h-7.4V38H13.8v19H6.4V14.9zM47.8 22.5c1.4 0 2.8-.1 4.1-.4 1.3-.2 2.5-.6 3.6-1.2 1.1-.5 2-1.3 2.8-2.1.8-.9 1.3-1.9 1.5-3.2h5.5v41.2h-7.4v-29H47.8v-5.3z"/>
        </symbol>
        <symbol id="trumbowyg-h2" viewBox="0 0 72 72">
            <path d="M1.5 14.9h7.4v16.7H28V14.9h7.4V57H28V38H8.8v19H1.5V14.9zM70.2 56.9H42c0-3.4.9-6.4 2.5-9s3.8-4.8 6.6-6.7c1.3-1 2.7-1.9 4.2-2.9 1.5-.9 2.8-1.9 4-3 1.2-1.1 2.2-2.2 3-3.4.8-1.2 1.2-2.7 1.2-4.3 0-.7-.1-1.5-.3-2.4s-.5-1.6-1-2.4c-.5-.7-1.2-1.3-2.1-1.8-.9-.5-2.1-.7-3.5-.7-1.3 0-2.4.3-3.3.8s-1.6 1.3-2.1 2.2-.9 2-1.2 3.3c-.3 1.3-.4 2.6-.4 4.1h-6.7c0-2.3.3-4.4.9-6.3.6-1.9 1.5-3.6 2.7-5 1.2-1.4 2.7-2.5 4.4-3.3 1.7-.8 3.8-1.2 6.1-1.2 2.5 0 4.6.4 6.3 1.2 1.7.8 3.1 1.9 4.1 3.1 1 1.3 1.8 2.6 2.2 4.1.4 1.5.6 2.9.6 4.2 0 1.6-.3 3.1-.8 4.5-.5 1.3-1.2 2.6-2.1 3.7-.9 1.1-1.8 2.2-2.9 3.1-1.1.9-2.2 1.8-3.4 2.7-1.2.8-2.4 1.6-3.5 2.4-1.2.7-2.3 1.5-3.3 2.2-1 .7-1.9 1.5-2.6 2.3-.7.8-1.3 1.7-1.5 2.6h20.1v5.9z"/>
        </symbol>
        <symbol id="trumbowyg-h3" viewBox="0 0 72 72">
            <path d="M1.4 14.5h7.4v16.7h19.1V14.5h7.4v42.1h-7.4v-19H8.8v19H1.4V14.5zM53.1 32.4c1.1 0 2.2 0 3.3-.2 1.1-.2 2.1-.5 2.9-1 .9-.5 1.6-1.2 2.1-2 .5-.9.8-1.9.8-3.2 0-1.8-.6-3.2-1.8-4.2-1.2-1.1-2.7-1.6-4.6-1.6-1.2 0-2.2.2-3.1.7-.9.5-1.6 1.1-2.2 1.9-.6.8-1 1.7-1.3 2.7-.3 1-.4 2-.4 3.1h-6.7c.1-2 .5-3.9 1.1-5.6.7-1.7 1.6-3.2 2.7-4.4s2.6-2.2 4.2-2.9c1.6-.7 3.5-1.1 5.6-1.1 1.6 0 3.2.2 4.7.7 1.6.5 2.9 1.2 4.2 2.1 1.2.9 2.2 2.1 3 3.4.7 1.4 1.1 3 1.1 4.8 0 2.1-.5 3.9-1.4 5.4-.9 1.6-2.4 2.7-4.4 3.4v.1c2.4.5 4.2 1.6 5.5 3.5 1.3 1.9 2 4.1 2 6.8 0 2-.4 3.7-1.2 5.3-.8 1.6-1.8 2.9-3.2 3.9-1.3 1.1-2.9 1.9-4.7 2.5-1.8.6-3.6.9-5.6.9-2.4 0-4.5-.3-6.3-1s-3.3-1.7-4.5-2.9c-1.2-1.3-2.1-2.8-2.7-4.5-.6-1.8-1-3.7-1-5.9h6.7c-.1 2.5.5 4.6 1.9 6.3 1.3 1.7 3.3 2.5 5.9 2.5 2.2 0 4.1-.6 5.6-1.9 1.5-1.3 2.3-3.1 2.3-5.4 0-1.6-.3-2.9-.9-3.8-.6-.9-1.5-1.7-2.5-2.2-1-.5-2.2-.8-3.4-.9-1.3-.1-2.6-.2-3.9-.1v-5.2z"/>
        </symbol>
        <symbol id="trumbowyg-h4" viewBox="0 0 72 72">
            <path d="M1.5 14.9h7.4v16.7H28V14.9h7.4V57H28V38H8.9v19H1.5V14.9zM70.5 47.2h-5.3V57h-6.4v-9.8H41.2v-6.7l17.7-24.8h6.4v26.2h5.3v5.3zm-24.2-5.3h12.5V23.7h-.1L46.3 41.9z"/>
        </symbol>
        <symbol id="trumbowyg-horizontal-rule" viewBox="0 0 72 72">
            <path d="M9.1 32h54v8h-54z"/>
        </symbol>
        <symbol id="trumbowyg-insert-image" viewBox="0 0 72 72">
            <path d="M64 17v38H8V17h56m8-8H0v54h72V9z"/>
            <path d="M17.5 22C15 22 13 24 13 26.5s2 4.5 4.5 4.5 4.5-2 4.5-4.5-2-4.5-4.5-4.5zM16 50h27L29.5 32zM36 36.2l8.9-8.5L60.2 50H45.9S35.6 35.9 36 36.2z"/>
        </symbol>
        <symbol id="trumbowyg-italic" viewBox="0 0 72 72">
            <path d="M26 57l10.1-42h7.2L33.2 57H26z"/>
        </symbol>
        <symbol id="trumbowyg-justify-center" viewBox="0 0 72 72">
            <path d="M9 14h54v8H9zM9 50h54v8H9zM18 32h36v8H18z"/>
        </symbol>
        <symbol id="trumbowyg-justify-full" viewBox="0 0 72 72">
            <path d="M9 14h54v8H9zM9 50h54v8H9zM9 32h54v8H9z"/>
        </symbol>
        <symbol id="trumbowyg-justify-left" viewBox="0 0 72 72">
            <path d="M9 14h54v8H9zM9 50h54v8H9zM9 32h36v8H9z"/>
        </symbol>
        <symbol id="trumbowyg-justify-right" viewBox="0 0 72 72">
            <path d="M9 14h54v8H9zM9 50h54v8H9zM27 32h36v8H27z"/>
        </symbol>
        <symbol id="trumbowyg-link" viewBox="0 0 72 72">
            <path d="M30.9 49.1l-6.7 6.7c-.8.8-1.6.9-2.1.9s-1.4-.1-2.1-.9l-5.2-5.2c-1.1-1.1-1.1-3.1 0-4.2l6.1-6.1.2-.2 6.5-6.5c-1.2-.6-2.5-.9-3.8-.9-2.3 0-4.6.9-6.3 2.6L10.8 42c-3.5 3.5-3.5 9.2 0 12.7l5.2 5.2c1.7 1.7 4 2.6 6.3 2.6s4.6-.9 6.3-2.6l6.7-6.7C38 50.5 38.6 46.3 37 43l-6.1 6.1zM38.5 22.7l6.7-6.7c.8-.8 1.6-.9 2.1-.9s1.4.1 2.1.9l5.2 5.2c1.1 1.1 1.1 3.1 0 4.2l-6.1 6.1-.2.2-6.5 6.5c1.2.6 2.5.9 3.8.9 2.3 0 4.6-.9 6.3-2.6l6.7-6.7c3.5-3.5 3.5-9.2 0-12.7l-5.2-5.2c-1.7-1.7-4-2.6-6.3-2.6s-4.6.9-6.3 2.6l-6.7 6.7c-2.7 2.7-3.3 6.9-1.7 10.2l6.1-6.1z"/>
            <path d="M44.1 30.7c.2-.2.4-.6.4-.9 0-.3-.1-.6-.4-.9l-2.3-2.3c-.2-.2-.6-.4-.9-.4-.3 0-.6.1-.9.4L25.8 40.8c-.2.2-.4.6-.4.9 0 .3.1.6.4.9l2.3 2.3c.2.2.6.4.9.4.3 0 .6-.1.9-.4l14.2-14.2z"/>
        </symbol>
        <symbol id="trumbowyg-ordered-list" viewBox="0 0 72 72">
            <path d="M27 14h36v8H27zM27 50h36v8H27zM27 32h36v8H27zM11.8 15.8V22h1.8v-7.8h-1.5l-2.1 1 .3 1.3zM12.1 38.5l.7-.6c1.1-1 2.1-2.1 2.1-3.4 0-1.4-1-2.4-2.7-2.4-1.1 0-2 .4-2.6.8l.5 1.3c.4-.3 1-.6 1.7-.6.9 0 1.3.5 1.3 1.1 0 .9-.9 1.8-2.6 3.3l-1 .9V40H15v-1.5h-2.9zM13.3 53.9c1-.4 1.4-1 1.4-1.8 0-1.1-.9-1.9-2.6-1.9-1 0-1.9.3-2.4.6l.4 1.3c.3-.2 1-.5 1.6-.5.8 0 1.2.3 1.2.8 0 .7-.8.9-1.4.9h-.7v1.3h.7c.8 0 1.6.3 1.6 1.1 0 .6-.5 1-1.4 1-.7 0-1.5-.3-1.8-.5l-.4 1.4c.5.3 1.3.6 2.3.6 2 0 3.2-1 3.2-2.4 0-1.1-.8-1.8-1.7-1.9z"/>
        </symbol>
        <symbol id="trumbowyg-p" viewBox="0 0 72 72">
            <path d="M47.8 15.1H30.1c-4.7 0-8.5 3.7-8.5 8.4s3.7 8.4 8.4 8.4v25h7V19.8h3v37.1h4.1V19.8h3.7v-4.7z"/>
        </symbol>
        <symbol id="trumbowyg-redo" viewBox="0 0 72 72">
            <path d="M10.8 51.2c0-5.1 2.1-9.7 5.4-13.1 3.3-3.3 8-5.4 13.1-5.4H46v-12L61.3 36 45.9 51.3V39.1H29.3c-3.3 0-6.4 1.3-8.5 3.5-2.2 2.2-3.5 5.2-3.5 8.5h-6.5z"/>
        </symbol>
        <symbol id="trumbowyg-removeformat" viewBox="0 0 72 72">
            <path d="M58.2 54.6L52 48.5l3.6-3.6 6.1 6.1 6.4-6.4 3.8 3.8-6.4 6.4 6.1 6.1-3.6 3.6-6.1-6.1-6.4 6.4-3.7-3.8 6.4-6.4zM21.7 52.1H50V57H21.7zM18.8 15.2h34.1v6.4H39.5v24.2h-7.4V21.5H18.8v-6.3z"/>
        </symbol>
        <symbol id="trumbowyg-strikethrough" viewBox="0 0 72 72">
            <path d="M45.8 45c0 1-.3 1.9-.9 2.8-.6.9-1.6 1.6-3 2.1s-3.1.8-5 .8c-2.1 0-4-.4-5.7-1.1-1.7-.7-2.9-1.7-3.6-2.7-.8-1.1-1.3-2.6-1.5-4.5l-.1-.8-6.7.6v.9c.1 2.8.9 5.4 2.3 7.6 1.5 2.3 3.5 4 6.1 5.1 2.6 1.1 5.7 1.6 9.4 1.6 2.9 0 5.6-.5 8-1.6 2.4-1.1 4.3-2.7 5.6-4.7 1.3-2 2-4.2 2-6.5 0-1.6-.3-3.1-.9-4.5l-.2-.6H44c0 .1 1.8 2.3 1.8 5.5zM29 28.9c-.8-.8-1.2-1.7-1.2-2.9 0-.7.1-1.3.4-1.9.3-.6.7-1.1 1.4-1.6.6-.5 1.4-.9 2.5-1.1 1.1-.3 2.4-.4 3.9-.4 2.9 0 5 .6 6.3 1.7 1.3 1.1 2.1 2.7 2.4 5.1l.1.9 6.8-.5v-.9c-.1-2.5-.8-4.7-2.1-6.7s-3.2-3.5-5.6-4.5c-2.4-1-5.1-1.5-8.1-1.5-2.8 0-5.3.5-7.6 1.4-2.3 1-4.2 2.4-5.4 4.3-1.2 1.9-1.9 3.9-1.9 6.1 0 1.7.4 3.4 1.2 4.9l.3.5h11.8c-2.3-.9-3.9-1.7-5.2-2.9zm13.3-6.2zM22.7 20.3zM13 34.1h46.1v3.4H13z"/>
        </symbol>
        <symbol id="trumbowyg-strong" viewBox="0 0 72 72">
            <path d="M51.1 37.8c-1.1-1.4-2.5-2.5-4.2-3.3 1.2-.8 2.1-1.8 2.8-3 1-1.6 1.5-3.5 1.5-5.3 0-2-.6-4-1.7-5.8-1.1-1.8-2.8-3.2-4.8-4.1-2-.9-4.6-1.3-7.8-1.3h-16v42h16.3c2.6 0 4.8-.2 6.7-.7 1.9-.5 3.4-1.2 4.7-2.1 1.3-1 2.4-2.4 3.2-4.1.9-1.7 1.3-3.6 1.3-5.7.2-2.5-.5-4.7-2-6.6zM40.8 50.2c-.6.1-1.8.2-3.4.2h-9V38.5h8.3c2.5 0 4.4.2 5.6.6 1.2.4 2 1 2.7 2 .6.9 1 2 1 3.3 0 1.1-.2 2.1-.7 2.9-.5.9-1 1.5-1.7 1.9-.8.4-1.7.8-2.8 1zm2.6-20.4c-.5.7-1.3 1.3-2.5 1.6-.8.3-2.5.4-4.8.4h-7.7V21.6h7.1c1.4 0 2.6 0 3.6.1s1.7.2 2.2.4c1 .3 1.7.8 2.2 1.7.5.9.8 1.8.8 3-.1 1.3-.4 2.2-.9 3z"/>
        </symbol>
        <symbol id="trumbowyg-subscript" viewBox="0 0 72 72">
            <path d="M32 15h7.8L56 57.1h-7.9L44.3 46H27.4l-4 11.1h-7.6L32 15zm-2.5 25.4h12.9L36 22.3h-.2l-6.3 18.1zM58.7 59.9c.6-1.4 2-2.8 4.1-4.4 1.9-1.3 3.1-2.3 3.7-2.9.8-.9 1.3-1.9 1.3-3 0-.9-.2-1.6-.7-2.2-.5-.6-1.2-.9-2.1-.9-1.2 0-2.1.5-2.5 1.4-.3.5-.4 1.4-.5 2.5h-4c.1-1.8.4-3.2 1-4.3 1.1-2.1 3-3.1 5.8-3.1 2.2 0 3.9.6 5.2 1.8 1.3 1.2 1.9 2.8 1.9 4.8 0 1.5-.5 2.9-1.4 4.1-.6.8-1.6 1.7-3 2.6L66 57.7c-1 .7-1.7 1.2-2.1 1.6-.4.3-.7.7-1 1.1H72V64H57.8c0-1.5.3-2.8.9-4.1z"/>
        </symbol>
        <symbol id="trumbowyg-superscript" viewBox="0 0 72 72">
            <path d="M32 15h7.8L56 57.1h-7.9l-4-11.1H27.4l-4 11.1h-7.6L32 15zm-2.5 25.4h12.9L36 22.3h-.2l-6.3 18.1zM49.6 28.8c.5-1.1 1.6-2.3 3.4-3.6 1.5-1.1 2.5-1.9 3-2.4.7-.7 1-1.6 1-2.4 0-.7-.2-1.3-.6-1.8-.4-.5-1-.7-1.7-.7-1 0-1.7.4-2.1 1.1-.2.4-.3 1.1-.4 2.1H49c.1-1.5.3-2.6.8-3.5.9-1.7 2.5-2.6 4.8-2.6 1.8 0 3.2.5 4.3 1.5 1.1 1 1.6 2.3 1.6 4 0 1.3-.4 2.4-1.1 3.4-.5.7-1.3 1.4-2.4 2.2l-1.3 1c-.8.6-1.4 1-1.7 1.3-.3.3-.6.6-.8.9h7.4v3H48.8c0-1.3.3-2.4.8-3.5z"/>
        </symbol>
        <symbol id="trumbowyg-table" viewBox="0 0 72 72">
            <path d="M25.686 51.38v-6.347q0-.462-.297-.76-.298-.297-.761-.297H14.04q-.463 0-.761.297-.298.298-.298.76v6.346q0 .463.298.76.298.298.76.298h10.589q.463 0 .76-.298.298-.297.298-.76zm0-12.692v-6.346q0-.463-.297-.76-.298-.298-.761-.298H14.04q-.463 0-.761.298-.298.297-.298.76v6.346q0 .462.298.76.298.297.76.297h10.589q.463 0 .76-.297.298-.298.298-.76zm16.94 12.691v-6.346q0-.462-.297-.76-.298-.297-.761-.297H30.98q-.463 0-.76.297-.299.298-.299.76v6.346q0 .463.298.76.298.298.761.298h10.588q.463 0 .76-.298.299-.297.299-.76zm-16.94-25.383v-6.345q0-.463-.297-.76-.298-.298-.761-.298H14.04q-.463 0-.761.297-.298.298-.298.76v6.346q0 .463.298.76.298.298.76.298h10.589q.463 0 .76-.298.298-.297.298-.76zm16.94 12.692v-6.346q0-.463-.297-.76-.298-.298-.761-.298H30.98q-.463 0-.76.298-.299.297-.299.76v6.346q0 .462.298.76.298.297.761.297h10.588q.463 0 .76-.297.299-.298.299-.76zm16.94 12.691v-6.346q0-.462-.297-.76-.298-.297-.76-.297H47.92q-.463 0-.76.297-.298.298-.298.76v6.346q0 .463.297.76.298.298.761.298h10.588q.463 0 .761-.298.298-.297.298-.76zm-16.94-25.383v-6.345q0-.463-.297-.76-.298-.298-.761-.298H30.98q-.463 0-.76.297-.299.298-.299.76v6.346q0 .463.298.76.298.298.761.298h10.588q.463 0 .76-.298.299-.297.299-.76zm16.94 12.692v-6.346q0-.463-.297-.76-.298-.298-.76-.298H47.92q-.463 0-.76.298-.298.297-.298.76v6.346q0 .462.297.76.298.297.761.297h10.588q.463 0 .761-.297.298-.298.298-.76zm0-12.692v-6.345q0-.463-.297-.76-.298-.298-.76-.298H47.92q-.463 0-.76.297-.298.298-.298.76v6.346q0 .463.297.76.298.298.761.298h10.588q.463 0 .761-.298.298-.297.298-.76zm4.236-10.576v35.96q0 2.18-1.555 3.734-1.555 1.553-3.739 1.553H14.04q-2.184 0-3.739-1.553-1.555-1.553-1.555-3.735V15.42q0-2.181 1.555-3.735 1.555-1.553 3.739-1.553h44.468q2.184 0 3.739 1.553 1.555 1.554 1.555 3.735z"/>
        </symbol>
        <symbol id="trumbowyg-underline" viewBox="0 0 72 72">
            <path d="M36 35zM15.2 55.9h41.6V59H15.2zM21.1 13.9h6.4v21.2c0 1.2.1 2.5.2 3.7.1 1.3.5 2.4 1 3.4.6 1 1.4 1.8 2.6 2.5 1.1.6 2.7 1 4.8 1 2.1 0 3.7-.3 4.8-1 1.1-.6 2-1.5 2.6-2.5.6-1 .9-2.1 1-3.4.1-1.3.2-2.5.2-3.7V13.9H51v23.3c0 2.3-.4 4.4-1.1 6.1-.7 1.7-1.7 3.2-3 4.4-1.3 1.2-2.9 2-4.7 2.6-1.8.6-3.9.9-6.1.9-2.2 0-4.3-.3-6.1-.9-1.8-.6-3.4-1.5-4.7-2.6-1.3-1.2-2.3-2.6-3-4.4-.7-1.7-1.1-3.8-1.1-6.1V13.9z"/>
        </symbol>
        <symbol id="trumbowyg-undo" viewBox="0 0 72 72">
            <path d="M61.2 51.2c0-5.1-2.1-9.7-5.4-13.1-3.3-3.3-8-5.4-13.1-5.4H26.1v-12L10.8 36l15.3 15.3V39.1h16.7c3.3 0 6.4 1.3 8.5 3.5 2.2 2.2 3.5 5.2 3.5 8.5h6.4z"/>
        </symbol>
        <symbol id="trumbowyg-unlink" viewBox="0 0 72 72">
            <path d="M30.9 49.1l-6.7 6.7c-.8.8-1.6.9-2.1.9s-1.4-.1-2.1-.9l-5.2-5.2c-1.1-1.1-1.1-3.1 0-4.2l6.1-6.1.2-.2 6.5-6.5c-1.2-.6-2.5-.9-3.8-.9-2.3 0-4.6.9-6.3 2.6L10.8 42c-3.5 3.5-3.5 9.2 0 12.7l5.2 5.2c1.7 1.7 4 2.6 6.3 2.6s4.6-.9 6.3-2.6l6.7-6.7C38 50.5 38.6 46.3 37 43l-6.1 6.1zM38.5 22.7l6.7-6.7c.8-.8 1.6-.9 2.1-.9s1.4.1 2.1.9l5.2 5.2c1.1 1.1 1.1 3.1 0 4.2l-6.1 6.1-.2.2-6.5 6.5c1.2.6 2.5.9 3.8.9 2.3 0 4.6-.9 6.3-2.6l6.7-6.7c3.5-3.5 3.5-9.2 0-12.7l-5.2-5.2c-1.7-1.7-4-2.6-6.3-2.6s-4.6.9-6.3 2.6l-6.7 6.7c-2.7 2.7-3.3 6.9-1.7 10.2l6.1-6.1z"/>
            <path d="M44.1 30.7c.2-.2.4-.6.4-.9 0-.3-.1-.6-.4-.9l-2.3-2.3c-.2-.2-.6-.4-.9-.4-.3 0-.6.1-.9.4L25.8 40.8c-.2.2-.4.6-.4.9 0 .3.1.6.4.9l2.3 2.3c.2.2.6.4.9.4.3 0 .6-.1.9-.4l14.2-14.2zM41.3 55.8v-5h22.2v5H41.3z"/>
        </symbol>
        <symbol id="trumbowyg-unordered-list" viewBox="0 0 72 72">
            <path d="M27 14h36v8H27zM27 50h36v8H27zM9 50h9v8H9zM9 32h9v8H9zM9 14h9v8H9zM27 32h36v8H27z"/>
        </symbol>
        <symbol id="trumbowyg-view-html" viewBox="0 0 72 72">
            <path fill="none" stroke="currentColor" stroke-width="8" stroke-miterlimit="10"
                  d="M26.9 17.9L9 36.2 26.9 54M45 54l17.9-18.3L45 17.9"/>
        </symbol>
        <symbol id="trumbowyg-base64" viewBox="0 0 72 72">
            <path d="M64 17v38H8V17h56m8-8H0v54h72V9z"/>
            <path d="M29.9 28.9c-.5-.5-1.1-.8-1.8-.8s-1.4.2-1.9.7c-.5.4-.9 1-1.2 1.6-.3.6-.5 1.3-.6 2.1-.1.7-.2 1.4-.2 1.9l.1.1c.6-.8 1.2-1.4 2-1.8.8-.4 1.7-.5 2.7-.5.9 0 1.8.2 2.6.6.8.4 1.6.9 2.2 1.5.6.6 1 1.3 1.2 2.2.3.8.4 1.6.4 2.5 0 1.1-.2 2.1-.5 3-.3.9-.8 1.7-1.5 2.4-.6.7-1.4 1.2-2.3 1.6-.9.4-1.9.6-3 .6-1.6 0-2.8-.3-3.9-.9-1-.6-1.8-1.4-2.5-2.4-.6-1-1-2.1-1.3-3.4-.2-1.3-.4-2.6-.4-3.9 0-1.3.1-2.6.4-3.8.3-1.3.8-2.4 1.4-3.5.7-1 1.5-1.9 2.5-2.5 1-.6 2.3-1 3.8-1 .9 0 1.7.1 2.5.4.8.3 1.4.6 2 1.1.6.5 1.1 1.1 1.4 1.8.4.7.6 1.5.7 2.5h-4c0-1-.3-1.6-.8-2.1zm-3.5 6.8c-.4.2-.8.5-1 .8-.3.4-.5.8-.6 1.2-.1.5-.2 1-.2 1.5s.1.9.2 1.4c.1.5.4.9.6 1.2.3.4.6.7 1 .9.4.2.9.3 1.4.3.5 0 1-.1 1.3-.3.4-.2.7-.5 1-.9.3-.4.5-.8.6-1.2.1-.5.2-.9.2-1.4 0-.5-.1-1-.2-1.4-.1-.5-.3-.9-.6-1.2-.3-.4-.6-.7-1-.9-.4-.2-.9-.3-1.4-.3-.4 0-.9.1-1.3.3zM36.3 41.3v-3.8l9-12.1H49v12.4h2.7v3.5H49v4.8h-4v-4.8h-8.7zM45 30.7l-5.3 7.2h5.4l-.1-7.2z"/>
        </symbol>
        <symbol id="trumbowyg-back-color" viewBox="0 0 72 72">
            <path d="M36.5 22.3l-6.3 18.1H43l-6.3-18.1z"/>
            <path d="M9 8.9v54.2h54.1V8.9H9zm39.9 48.2L45 46H28.2l-3.9 11.1h-7.6L32.8 15h7.8l16.2 42.1h-7.9z"/>
        </symbol>
        <symbol id="trumbowyg-fore-color" viewBox="0 0 72 72">
            <path d="M32 15h7.8L56 57.1h-7.9l-4-11.1H27.4l-4 11.1h-7.6L32 15zm-2.5 25.4h12.9L36 22.3h-.2l-6.3 18.1z"/>
        </symbol>
        <symbol id="trumbowyg-emoji" viewBox="0 0 72 72">
            <path d="M36.05 9C21.09 9 8.949 21.141 8.949 36.101c0 14.96 12.141 27.101 27.101 27.101 14.96 0 27.101-12.141 27.101-27.101S51.01 9 36.05 9zm9.757 15.095c2.651 0 4.418 1.767 4.418 4.418s-1.767 4.418-4.418 4.418-4.418-1.767-4.418-4.418 1.767-4.418 4.418-4.418zm-19.479 0c2.651 0 4.418 1.767 4.418 4.418s-1.767 4.418-4.418 4.418-4.418-1.767-4.418-4.418 1.767-4.418 4.418-4.418zm9.722 30.436c-14.093 0-16.261-13.009-16.261-13.009h32.522S50.143 54.531 36.05 54.531z"/>
        </symbol>
        <symbol id="trumbowyg-insert-audio" viewBox="0 0 8 8">
            <path d="M3.344 0L2 2H0v4h2l1.344 2H4V0h-.656zM5 1v1c.152 0 .313.026.469.063H5.5c.86.215 1.5.995 1.5 1.938a1.99 1.99 0 0 1-2 2.001v1a2.988 2.988 0 0 0 3-3 2.988 2.988 0 0 0-3-3zm0 2v2l.25-.031C5.683 4.851 6 4.462 6 4c0-.446-.325-.819-.75-.938v-.031h-.031L5 3z"/>
        </symbol>
        <symbol id="trumbowyg-noembed" viewBox="0 0 72 72">
            <path d="M31.5 33.6V25l11 11-11 11v-8.8z"/>
            <path d="M64 17v38H8V17h56m8-8H0v54h72V9z"/>
        </symbol>
        <symbol id="trumbowyg-preformatted" viewBox="0 0 72 72">
            <path d="M10.3 33.5c.4 0 .9-.1 1.5-.2s1.2-.3 1.8-.7c.6-.3 1.1-.8 1.5-1.3.4-.5.6-1.3.6-2.1V17.1c0-1.4.3-2.6.8-3.6s1.2-1.9 2-2.5c.8-.7 1.6-1.2 2.5-1.5.9-.3 1.6-.5 2.2-.5h5.3v5.3h-3.2c-.7 0-1.3.1-1.8.4-.4.3-.8.6-1 1-.2.4-.4.9-.4 1.3-.1.5-.1.9-.1 1.4v11.4c0 1.2-.2 2.1-.7 2.9-.5.8-1 1.4-1.7 1.8-.6.4-1.3.8-2 1-.7.2-1.3.3-1.7.4v.1c.5 0 1 .1 1.7.3.7.2 1.3.5 2 .9.6.5 1.2 1.1 1.7 1.9.5.8.7 2 .7 3.4v11.1c0 .4 0 .9.1 1.4.1.5.2.9.4 1.3s.6.7 1 1c.4.3 1 .4 1.8.4h3.2V63h-5.3c-.6 0-1.4-.2-2.2-.5-.9-.3-1.7-.8-2.5-1.5s-1.4-1.5-2-2.5c-.5-1-.8-2.2-.8-3.6V43.5c0-.9-.2-1.7-.6-2.3-.4-.6-.9-1.1-1.5-1.5-.6-.4-1.2-.6-1.8-.7-.6-.1-1.1-.2-1.5-.2v-5.3zM61.8 38.7c-.4 0-1 .1-1.6.2-.6.1-1.2.4-1.8.7-.6.3-1.1.7-1.5 1.3-.4.5-.6 1.3-.6 2.1v12.1c0 1.4-.3 2.6-.8 3.6s-1.2 1.9-2 2.5c-.8.7-1.6 1.2-2.5 1.5-.9.3-1.6.5-2.2.5h-5.3v-5.3h3.2c.7 0 1.3-.1 1.8-.4.4-.3.8-.6 1-1 .2-.4.4-.9.4-1.3.1-.5.1-.9.1-1.4V42.3c0-1.2.2-2.1.7-2.9.5-.8 1-1.4 1.7-1.8.6-.4 1.3-.8 2-1 .7-.2 1.3-.3 1.7-.4v-.1c-.5 0-1-.1-1.7-.3-.7-.2-1.3-.5-2-.9-.6-.4-1.2-1.1-1.7-1.9-.5-.8-.7-2-.7-3.4V18.5c0-.4 0-.9-.1-1.4-.1-.5-.2-.9-.4-1.3s-.6-.7-1-1c-.4-.3-1-.4-1.8-.4h-3.2V9.1h5.3c.6 0 1.4.2 2.2.5.9.3 1.7.8 2.5 1.5s1.4 1.5 2 2.5c.5 1 .8 2.2.8 3.6v11.6c0 .9.2 1.7.6 2.3.4.6.9 1.1 1.5 1.5.6.4 1.2.6 1.8.7.6.1 1.2.2 1.6.2v5.2z"/>
        </symbol>
        <symbol id="trumbowyg-ruby" viewBox="0 0 72 72">
            <path d="M16.499 24.477h8.018L41.08 67.5H33l-4.04-11.361H11.804L7.764 67.5H0l16.499-43.023zm-2.65 25.907h13.127l-6.438-18.497h-.177l-6.512 18.497zM65.053 16.685c-6.316 1.178-12.025 1.98-17.126 2.408a362.385 362.385 0 0 0-.965 5.833c-.25 1.57-.679 3.907-1.286 7.013 3.033-1.963 5.852-3.266 8.458-3.907 2.639-.642 4.905-.891 6.797-.75 1.891.108 3.746.661 5.566 1.661 1.82.964 3.264 2.408 4.334 4.334 1.104 1.893 1.427 4.088.965 6.584-.466 2.461-1.554 4.494-3.265 6.101-1.679 1.605-3.658 2.783-5.941 3.532-2.283.785-4.853 1.251-7.707 1.391-2.819.144-5.906.161-9.259.056 0-1.642-.287-3.212-.857-4.71l.108-.59c2.711.5 5.246.768 7.601.802 2.39 0 4.529-.195 6.421-.589 1.927-.393 3.605-1.069 5.031-2.031 1.427-.965 2.319-2.319 2.676-4.067.394-1.75.269-3.229-.373-4.443-.644-1.249-1.446-2.213-2.408-2.891-.929-.68-2.161-1.034-3.693-1.071-1.536-.072-3.265.089-5.192.482-1.927.391-3.82 1.14-5.672 2.248a24.308 24.308 0 0 0-4.978 3.907l-4.872-1.981c1.463-5.031 2.355-8.597 2.677-10.703.321-2.105.642-4.067.963-5.887-3.961.25-7.154.411-9.58.481-.215-1.927-.52-3.534-.91-4.817l.32-.32c3.604.32 7.225.446 10.865.375.214-1.355.481-3.103.804-5.245.354-2.175.407-3.621.16-4.336.034-.784.374-1.017 1.017-.695l5.085.749c.428.251.444.573.055.964l-.857.91c-.537 2.89-.981 5.352-1.338 7.385 4.279-.427 9.312-1.393 15.092-2.89l1.284 4.707"/>
        </symbol>
        <symbol id="trumbowyg-upload" viewBox="0 0 72 72">
            <path d="M64 27v28H8V27H0v36h72V27h-8z"/>
            <path d="M32.1 6.7h8v33.6h-8z"/>
            <path d="M48 35.9L36 49.6 24 36h24z"/>
        </symbol>
    </svg>
</div>

<div id="page-loader">
    <div class="page-loader__logo">
        <img src="images/uploads/logo_dark.png" alt="Rental Service Logo">
    </div><!-- .page-loader__logo -->

    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div><!-- .sk-folding-cube -->
</div><!-- .page-loader -->

<!-- JS Files -->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/plugins.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<script src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
