<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About</title>
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
                            <a class="nav-link" aria-current="page" href="<?= ($BASE) ?>/index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= ($BASE) ?>/about">About Us</a>
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
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-sm-5 mt-4">
                            About Us </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="<?= ($Base) ?>/index">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> About Us</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-index3-->
    <section class="w3l-index-about py-5" id="about2">
        <div class="container py-md-5 py-2">
            <div class="row">
                <div class="col-lg-6 pe-lg-5">
                    <div class="w3l-abouthny-img">
                        <img src="<?= ($BASE) ?>/ui/frontend/images/team1.jpg" alt="" class="img-fluid radius-image">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="w3l-abouthny-info">
                        <h6 class="title-subw3hny">Who we are</h6>
                        <h3 class="title-w3l">We're one of the best real estate company in the UK</h3>
                        <p class="mt-4">We have over 15 year experience, Over 20,000 people work for us in more than 70
                            cities all over the world. Our experience and expertise speaks volume. Learn more about our work!
                        </p>
                        <p class="mt-3">We provide a range of professional services to help you achieve your dreams. You can contact us for any of the services such as:</p>
                        <ul class="w3l-right-book w3l-right-book-grid mt-md-5 mt-4">
                            <li><span class="fas fa-check"></span> Outstanding property</li>
                            <li><span class="fas fa-check"></span> Social responsibility</li>
                            <li><span class="fas fa-check"></span> Get expert advice</li>
                            <li><span class="fas fa-check"></span> Group structure</li>
                            <li><span class="fas fa-check"></span> Specialist services</li>
                            <li><span class="fas fa-check"></span> Vision & strategy</li>
                        </ul>
                        <a href="<?= ($Base) ?>/services" class="btn btn-style btn-primary mt-4">Explore our services <i class="fas fa-angle-double-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-index3-->
    <!--/w3-grids-->
    <section class="w3l-passion-mid-sec home-phny py-5">
        <div class="container py-md-5 py-3">
            <div class="container">
                <div class="row w3l-passion-mid-grids">
                    <div class="col-lg-6 passion-grid-item-info pe-lg-5 mb-lg-0 mb-5">
                        <h6 class="title-subw3hny mb-1">Rent a Pg/ Co-living</h6>
                        <h3 class="title-w3l mb-4">Paying Guest or Co-living options</h3>
                        <p class="mt-3 pe-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
                            ligula. Semper at tempufddfel.Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia
                            cum ex ipsam autem!earum sequi amet.</p>

                    </div>
                    <div class="col-lg-6 w3hny-passion-item">
                        <div class="row">
                            <div class="col-6 passion-grid-item-pic">
                                <img src="<?= ($BASE) ?>/ui/frontend/images/d5.jpg" alt="" class="img-fluid radius-image">
                            </div>
                            <div class="col-6 passion-grid-item-pic">
                                <img src="<?= ($BASE) ?>/ui/frontend/images/d4.jpg" alt="" class="img-fluid radius-image">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3-grids-->
    <!--/progress-->
    <section class="w3l-servicesblock w3l-servicesblock1 py-5" id="progress">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-5 pe-lg-5">
                    <h5 class="title-subw3hny mb-1">Progress Bars</h5>
                    <h3 class="title-w3l">The Core Company Values Of
                        Our main Goal</h3>
                    <p class="mt-md-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at. Lorem ipsum dolor sit amet
                        elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet init.
                    </p>

                </div>
                <div class="col-lg-6 align-self pe-lg-4">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">Modern Technology <span class="">70%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">Tax Solution Area<span class="">80%</span>
                        </h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Quick Support <span class="">90%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--//progress-->
    <!--/faq-section-->
    <div class="w3l-faq-block py-5" id="faq">
        <div class="container content-gd py-lg-5">
            <div class="row mt-3">
                <div class="col-lg-6 faqw3-right pe-lg-5">
                    <div class="faqw3content text-left">
                        <h6 class="title-subw3hny mb-1 text-left">Ask by Client</h6>
                        <h3 class="title-w3l mb-2">Frequently Asked Questions</h3>
                    </div>
                    <p class="mb-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at. Lorem ipsum dolor sit amet
                        elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet init.
                    </p>
                    <img src="<?= ($BASE) ?>/ui/frontend/images/banner3.jpg" alt="" class="img-fluid radius-image">

                </div>
                <div class="col-lg-6 faqw3-left">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01. Lorem ipsum viverra feugiat?
                                </button>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02.Lorem ipsum viverra feugiat?
                                </button>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                    sunt explicabo.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    03.Sed ut perspiciatis unde?
                                </button>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                    sunt explicabo.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingFourth">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                    04.Deserunt mollit anim id est laborum?
                                </button>
                            </h4>
                            <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beat vitaedicta
                                    sunt explicabo.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- //faq-section -->
    <!--/w3-grids-->
    <section class="w3l-stats-section py-5" id="stats">
        <div class="container py-md-4">
            <div class="w3l-stats-inner-inf">
                <div class="row stats-con">
                    <div class="col-lg-3 col-6 stats_info counter_grid">
                        <p class="counter">2500 </p>
                        <h3>Completed Properties</h3>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid">
                        <p class="counter">1500 </p>
                        <h3>Property Sales</h3>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-4">
                        <p class="counter">1280 </p>
                        <h3>Appartment Rent</h3>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-4">
                        <p class="counter">3020</p>
                        <h3>Happy Clients</h3>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//w3-grids-->
    <!--/w3l-subscribe-content-->
    <section class="w3l-join-main py-5">
        <div class="container py-md-5">
            <div class="w3l-project-in">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="bottom-info">
                            <div class="header-section">
                                <h6 class="title-subw3hny mb-lg-2">Let’s Take a Tour </h6>
                                <h3 class="title-w3l two mb-2">Search Property Smarter,
                                    Quicker & Anywhere
                                </h3>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 align-self mt-lg-0 mt-3">
                        <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at. Lorem ipsum dolor sit amet elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-subscribe-content-->
    <!--/team-sec-->
    <section class="w3l-team-main team py-5" id="team">
        <div class="container py-lg-5">
            <div class="title-content text-center mb-2">
                <h6 class="title-subw3hny mb-1">Our Team</h6>
                <h3 class="title-w3l">Who Worked With Us.</h3>
            </div>
            <div class="row team-row justify-content-center">
                <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="<?= ($BASE) ?>/ui/frontend/images/team1.jpg" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="#url">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fab fa-linkedin-in"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#url" class="team-title">Lawrence Petrie</a>
                        <p>Selling Agent</p>
                    </div>
                </div>
                <!-- end team member -->
                <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="<?= ($BASE) ?>/ui/frontend/images/team2.jpg" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="#url">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fab fa-linkedin-in"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#url" class="team-title">Jack Peters</a>
                        <p>Selling Agent</p>
                    </div>
                </div>
                <!-- end team member -->
                <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="<?= ($BASE) ?>/ui/frontend/images/team3.jpg" alt="" class="radius-image">
                            <div class="overlay-team">
                                <div class="team-details text-center">
                                    <div class="socials mt-20">
                                        <a href="#url">
                                            <span class="fab fa-facebook-f"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fab fa-twitter"></span>
                                        </a>
                                        <a href="#url">
                                            <span class="fab fa-linkedin-in"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#url" class="team-title">Anna Phillips</a>
                        <p>Selling Agent</p>

                    </div>
                </div>
                <!-- end team member -->
            </div>

        </div>
    </section>
    <!--//team-sec-->
    <!--/footer-9-->
    <footer class="w3l-footer9">
        <section class="footer-inner-main py-5">
            <div class="container py-md-4">
                <div class="right-side">
                    <div class="row footer-hny-grids sub-columns">
                        <div class="col-lg-3 sub-one-left">
                            <h6>About </h6>
                            <p class="footer-phny pe-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ute dolor sit.</p>
                            <div class="columns-2 mt-4 pt-lg-2">
                                <ul class="social">
                                    <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Company</h6>
                            <ul>

                                <li><a href="#why"><i class="fas fa-angle-right"></i> Why Us</a>
                                </li>
                                <li><a href="#licence"><i class="fas fa-angle-right"></i>Our Agents
                                    </a>
                                </li>
                                <li><a href="#log"><i class="fas fa-angle-right"></i>Our Offers
                                    </a></li>

                                <li><a href="#career"><i class="fas fa-angle-right"></i> Careers</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Services</h6>
                            <ul>
                                <li><a href="#processing"><i class="fas fa-angle-right"></i> Buy Properties</a>
                                </li>
                                <li><a href="#research"><i class="fas fa-angle-right"></i> Sell Properties</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Rent Properties</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Property Search</a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Explore</h6>
                            <ul>
                                <li><a href="#processing"><i class="fas fa-angle-right"></i> Homes for Rent</a>
                                </li>
                                <li><a href="#research"><i class="fas fa-angle-right"></i> Apartments for Rent</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Homes for Sale</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Apartments for Sale</a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-lg-3 sub-one-left ps-lg-5">
                            <h6>Stay Update!</h6>
                            <p class="w3f-para mb-4">Subscribe to our newsletter to receive our weekly feed.</p>
                            <div class="w3l-subscribe-content align-self mt-lg-0 mt-5">
                                <form action="#" method="post" class="subscribe-wthree">
                                    <div class="flex-wrap subscribe-wthree-field">
                                        <input class="form-control" type="email" placeholder="Email" name="email" required="">
                                        <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="below-section mt-5 pt-lg-3">
                    <div class="copyright-footer">
                        <div class="columns text-left">
                            <p>© 2021 RealHouzing.All rights reserved.</p>
                        </div>
                        <ul class="footer-w3list text-right">
                            <li><a href="#url">Privacy Policy</a>
                            </li>
                            <li><a href="#url">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>
    <!--//footer-9 -->

    <!-- Template JavaScript -->
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/theme-change.js"></script>
    <!--/search-->
    <script src="<?= ($BASE) ?>/ui/frontend/js/modernizr.custom.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/classie.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/demo1.js"></script>
    <!--//search-->
    <!--/stats-number-counter-->
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery.waypoints.min.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!--//stats-number-counter-->

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
