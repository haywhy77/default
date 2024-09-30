<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= ($BASE) ?>/ui/frontend/css/style-liberty.css">
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <img src="<?= ($BASE) ?>/ui/frontend/images/alpha-logo.png" width="200">
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= ($BASE) ?>/index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ($BASE) ?>/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ($BASE) ?>/services">Our Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Properties <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item pt-2" href="<?= ($BASE) ?>/sale">For Sale</a></li>
                                <li><a class="dropdown-item" href="<?= ($BASE) ?>/rent">For Rent</a></li>
                                <li><a class="dropdown-item" href="<?= ($BASE) ?>/lease">For Lease</a></li>
                                <li><a class="dropdown-item" href="<?= ($BASE) ?>/airbnb">Air BnB</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ($BASE) ?>/contact">Contact Us</a>
                        </li>
                    </ul>
                    <!--/search-->
                    <button id="trigger-overlay" class="searchw3-icon me-xl-4 me-lg-3" type="button"><i class="fas fa-search"></i></button>
                    <!-- open/close -->
                    <div class="overlay overlay-slidedown">
                        <button type="button" class="overlay-close"><i class="fas fa-times"></i></button>
                        <nav class="w3l-formhny">
                            <h5 class="mb-3">Search here</h5>
                            <form action="#" method="GET" class="d-sm-flex search-header">
                                <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search" required>
                                <button class="btn btn-style btn-primary" type="submit">Search</button>
                            </form>
                        </nav>
                    </div>
                    <!--//search-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/Banner-Start-->
    <!-- main-slider -->
    <section class="w3l-main-slider banner-slider" id="home">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag">Real Estate is our life</p>
                            <h3 class="title-hero-19">The creativity of the new world.</h3>
                            <a href="<?= ($BASE) ?>/about" class="btn btn-style btn-primary mt-4">Read More <i class="fas fa-angle-double-right ms-2"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top2">
                    <div class="container">
                        <div class="banner-info header-hero-19">

                            <p class="w3hny-tag">Your edge in Real Estate.</p>
                            <h3 class="title-hero-19">The power tools to sell your home</h3>
                            <a href="<?= ($BASE) ?>/about" class="btn btn-style btn-primary mt-4">Read More <i class="fas fa-angle-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-info banner-view banner-top3">
                    <div class="container">
                        <div class="banner-info header-hero-19">
                            <p class="w3hny-tag">Real Estate is our life</p>
                            <h3 class="title-hero-19">Everyone deserves the right home</h3>

                            <a href="<?= ($BASE) ?>/about" class="btn btn-style btn-primary mt-4">Read More <i class="fas fa-angle-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>
    <!-- //main-slider -->
    <!--/w3l-properties-->
    <section class="w3l-witemshny-main py-5">
        <div class="container py-md-4">
            <!--/row-1-->
            <div class="witemshny-grids row">
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d1.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Buying a Home</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d2.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Renting a Home</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d3.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Sell Your Property</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d4.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Leasing a space</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d5.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Buying Spaces</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d6.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Air BnB</a>
                    </h4>
                </div>
            </div>
            <!--//row-1-->

        </div>
    </section>
    <!--//w3l-properties-->
    <!--/bottom-3-grids-->
    <div class=" w3l-3-grids py-5" id="grids-3">
        <div class="container py-md-4">
            <div class="row">
                <div class="col-md-6 mt-md-0">
                    <div class="grids3-info position-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/banner1.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info">
                            <h4 class="gdnhy-1"><a href="#img">Buy a Commercial<br>Property</a>
                                <a class="w3item-link btn btn-style mt-4" href="<?= ($BASE) ?>/sale">
                                    Explore Property <i class="fas fa-angle-double-right ms-2"></i>
                                </a>

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4 grids3-info2">
                    <div class="grids3-info position-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/banner2.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="w3-grids3-info second">
                            <h4 class="gdnhy-1"><a href="#img">Lease a Commercial<br>Property</a>
                                <a class="w3item-link btn btn-style mt-4" href="<?= ($BASE) ?>/lease">
                                    Explore Property <i class="fas fa-angle-double-right ms-2"></i>
                                </a>
                            </h4>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//bottom-3-grids-->

    <!--/grids-->
    <section class="w3l-grids-3 py-5" id="about">
        <div class="container py-md-5 py-3">
            <div class="row bottom-ab-grids">
                <div class="w3l-video-left col-lg-6" id="video">
                    <!-- /home-page-video-popup-->
                    <div class="w3l-index5">
                        <div class="position-relative mt-4">
                            <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://player.vimeo.com/video/23512331" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- //home-page-video-popup-->
                    </div>
                </div>
                <div class="w3ab-left-top col-lg-6 mt-lg-0 mt-5 ps-lg-5">
                    <h6 class="title-subw3hny mb-1">Buy a Home</h6>
                    <h3 class="title-w3l mb-2">Find, Buy & Own Your Dream Home</h3>
                    <p class="my-3">Finding, buying, and owning your dream home is a significant milestone in one's life. It involves a lot of work from searching to getting a self-fulfilling home that resonates with your preferences, needs, and aspirations.</p>
                    <p class="my-3"> Stress no more, we at Alhpaadehomes will take care of your needs and wants. You're one click away from exploring your dream home.</p>
                    <a href="<?= ($BASE) ?>/sale" class="btn btn-style btn-primary mt-4">Explore Buying <i class="fas fa-angle-double-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--//grids-->
    <!--/w3-grids-->
    <section class="w3l-passion-mid-sec py-5 pt-0">
        <div class="container py-md-5 py-3 pt-0">
            <div class="container">
                <div class="row w3l-passion-mid-grids">
                    <div class="col-lg-6 passion-grid-item-info pe-lg-5 mb-lg-0 mb-5">
                        <h6 class="title-subw3hny mb-1">Rent a home</h6>
                        <h3 class="title-w3l mb-4">Looking for a home to rent?</h3>
                        <p class="mt-3 pe-lg-5">We have categories of amazing apartments available for rents at a very reseaonable amount. Our properties are well renovated and comfotable for living.</p>
                        <div class="w3banner-content-btns">
                            <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4 me-2">Rent a Home<i class="fas fa-angle-double-right ms-2"></i></a>

                        </div>
                    </div>
                    <div class="col-lg-6 passion-grid-item-info">
                        <img src="<?= ($BASE) ?>/ui/frontend/images/g6.jpg" alt="" class="img-fluid radius-image">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//w3-grids-->

    <!-- features section -->
    <section class="w3l-features py-5" id="features">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center mb-lg-3 mb-4">
                <h6 class="title-subw3hny mb-1">What We Do</h6>
                <h3 class="title-w3l">We're on a Mission to Change
                    View of RealEstate Field.</h3>
            </div>
            <div class="main-cont-wthree-2">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-pen-fancy"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Your One-Stop Site for Finding Your Dream Home</a></h4>
                            <p class="text-para">We have amazing properties available for sales, rents, lease, and AirBnB well suitable for your dream home.</p>
                            <p class="text-para">Dream it - Get it.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Schedule a viewing Appointment</a></h4>
                            <p class="text-para">You can contact us to schedule an appointment for any of our available properties. We would be glad to show you.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-house-user"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Get the Value of Your Property</a></h4>
                            <p class="text-para">Do you want to know the value of your property? Our esteemed team is available to help you evaluate and give the right value for your property.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//features section -->
    <!--/properties-->
    <section class="locations-1" id="locations">
        <div class="locations py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="heading text-center mx-auto">
                    <h6 class="title-subw3hny mb-1">Our Properties</h6>
                    <h3 class="title-w3l mb-3">Latest Properties</h3>
                </div>
                <div class="row pt-md-5 pt-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <div class="rentext-listing-category"><span class="pro-left">Buy</span><span class="pro-right">Rent</span></div>
                                    <img class="img-fluid" src="<?= ($BASE) ?>/ui/frontend/images/g1.jpg" alt="">
                                    <div class="box-content">
                                        <h3 class="title">$25,00,000</h3>
                                        <span class="post">51 Merrick Way, Coral Gables, USA</span>
                                    </div>
                                </div>
                            </a>
                            <div class="list-information space-between">
                                <ul class="product-features">
                                    <li>
                                        <i class="fas fa-bed"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Beds </span>

                                            <span class="value">
                                                <span>0</span>4 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-shower"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Baths </span>

                                            <span class="value">
                                                <span>0</span>2 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-vector-square"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                            </span>

                                            <span class="value">
                                                1200 </span>

                                            <span class="suffix">
                                                Sqft </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                    <img class="img-fluid" src="<?= ($BASE) ?>/ui/frontend/images/g2.jpg" alt="">
                                    <div class="box-content">
                                        <h3 class="title">$37,00,000</h3>
                                        <span class="post">51 Merrick Way, Coral Gables, USA</span>

                                    </div>
                                </div>
                            </a>
                            <div class="list-information space-between">
                                <ul class="product-features">
                                    <li>
                                        <i class="fas fa-bed"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Beds </span>

                                            <span class="value">
                                                <span>0</span>2 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-shower"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Baths </span>

                                            <span class="value">
                                                <span>0</span>2 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-vector-square"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                            </span>

                                            <span class="value">
                                                1000 </span>

                                            <span class="suffix">
                                                Sqft </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 pt-lg-0 mt-4 pt-md-2">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                    <img class="img-fluid" src="<?= ($BASE) ?>/ui/frontend/images/g3.jpg" alt="">
                                    <div class="box-content">
                                        <h3 class="title">$41,00,000</h3>
                                        <span class="post">51 Merrick Way, Coral Gables, USA</span>

                                    </div>
                                </div>
                            </a>
                            <div class="list-information space-between">
                                <ul class="product-features">
                                    <li>
                                        <i class="fas fa-bed"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Beds </span>

                                            <span class="value">
                                                <span>0</span>3 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-shower"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Baths </span>

                                            <span class="value">
                                                <span>0</span>2 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-vector-square"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                            </span>

                                            <span class="value">
                                                1400 </span>

                                            <span class="suffix">
                                                Sqft </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                    <img class="img-fluid" src="<?= ($BASE) ?>/ui/frontend/images/g4.jpg" alt="">
                                    <div class="box-content">
                                        <h3 class="title">$19,00,000</h3>
                                        <span class="post">51 Merrick Way, Coral Gables, USA</span>

                                    </div>
                                </div>
                            </a>
                            <div class="list-information space-between">
                                <ul class="product-features">
                                    <li>
                                        <i class="fas fa-bed"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Beds </span>

                                            <span class="value">
                                                <span>0</span>2 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-shower"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Baths </span>

                                            <span class="value">
                                                <span>0</span>2 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-vector-square"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                            </span>

                                            <span class="value">
                                                1200 </span>

                                            <span class="suffix">
                                                Sqft </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                    <img class="img-fluid" src="<?= ($BASE) ?>/ui/frontend/images/g5.jpg" alt="">
                                    <div class="box-content">
                                        <h3 class="title">$26,00,000</h3>
                                        <span class="post">51 Merrick Way, Coral Gables, USA</span>

                                    </div>
                                </div>
                            </a>
                            <div class="list-information space-between">
                                <ul class="product-features">
                                    <li>
                                        <i class="fas fa-bed"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Beds </span>

                                            <span class="value">
                                                <span>0</span>3 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-shower"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Baths </span>

                                            <span class="value">
                                                <span>0</span>2 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-vector-square"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                            </span>

                                            <span class="value">
                                                1400 </span>

                                            <span class="suffix">
                                                Sqft </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 pt-md-2">
                        <div class="w3property-grid">
                            <a href="#property">
                                <div class="box16">
                                    <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                    <img class="img-fluid" src="<?= ($BASE) ?>/ui/frontend/images/g6.jpg" alt="">
                                    <div class="box-content">
                                        <h3 class="title">$34,00,000</h3>
                                        <span class="post">51 Merrick Way, Coral Gables, USA</span>
                                    </div>
                                </div>
                            </a>
                            <div class="list-information space-between">
                                <ul class="product-features">
                                    <li>
                                        <i class="fas fa-bed"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Beds </span>

                                            <span class="value">
                                                <span>0</span>3 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-shower"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                                Baths </span>

                                            <span class="value">
                                                <span>0</span>1 </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-vector-square"></i>
                                        <span class="listable-value">
                                            <span class="prefix">
                                            </span>

                                            <span class="value">
                                                1200 </span>

                                            <span class="suffix">
                                                Sqft </span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//properties-->
    <!--/w3l-join-main-->
    <section class="w3l-join-main py-5">
        <div class="container py-md-5">
            <div class="w3l-project-in">
                <div class="bottom-info text-center pb-lg-5">
                    <div class="header-section pe-lg-5">
                        <h6 class="title-subw3hny mb-2">Join Us</h6>
                        <h3 class="title-w3l two mb-2">Become a Real Estate Agent
                        </h3>
                        <p class="mb-2">We only work with the best companies around the globe</p>
                        <div class="w3banner-content-btns pb-5 pb-5">
                            <a href="about.html" class="btn btn-style btn-primary mt-4">Read More <i class="fas fa-angle-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-join-main-->



    <!--/w3l-properties-->
    <section class="w3l-witemshny-main py-5">
        <div class="container py-md-4">

            <div class="heading text-center mx-auto">
                <h3 class="title-w3l mb-3">Our Constructions</h3>
            </div>

            <!--/row-1-->
            <div class="witemshny-grids row">
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d1.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Buying a Home</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d2.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Renting a Home</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d3.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Sell Your Property</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d4.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Leasing a space</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d5.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Buying Spaces</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="#img" class="d-block zoom"><img src="<?= ($BASE) ?>/ui/frontend/images/d6.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="#img">Air BnB</a>
                    </h4>
                </div>
            </div>
            <!--//row-1-->

        </div>
    </section>
    <!--//w3l-properties-->




    <!--/footer-9-->
<?php echo $this->render('public/footer.htm',NULL,get_defined_vars(),0); ?>
    <!--footer-->
    <!-- Template JavaScript -->
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/theme-change.js"></script>
    <!--light-box-files -->
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery-2.1.4.min.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery.chocolat.js"></script>
    <script type="text/javascript ">
        $(function() {
            $('.w3_agile_portfolio_grid a').Chocolat();
        });

    </script>
    <!-- /js for portfolio lightbox -->
    <!-- stats number counter-->
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery.waypoints.min.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!-- //stats number counter -->
    <!-- owlcarousel -->
    <script src="<?= ($BASE) ?>/ui/frontend/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    667: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })

    </script>
    <!-- //script -->
    <!-- //tesimonials-->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })

    </script>
    <!-- //tesimonials-->

    <!-- video popup -->
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>
    <!-- //video popup -->
    <!--/search-->
    <script src="<?= ($BASE) ?>/ui/frontend/js/modernizr.custom.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/classie.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/demo1.js"></script>
    <!--//search-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="<?= ($BASE) ?>/ui/frontend/js/bootstrap.min.js"></script>

</body>

</html>