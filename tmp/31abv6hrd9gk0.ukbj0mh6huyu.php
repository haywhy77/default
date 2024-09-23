<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>KnowDemWell | Home </title>

    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= ($BASE) ?>/<?= ($ASSETS) ?>/frontend/assets/css/style-liberty.css">
    <link rel="icon" type="image/x-icon" href="<?= ($BASE) ?>/<?= ($ASSETS) ?>/frontend/assets/images/subscribe.png">
    <link rel="stylesheet" href="<?= ($BASE) ?>/<?= ($ASSETS) ?>/css/chart.css">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg stroke">
    <a class="navbar-brand" href="index.php">
        <img src="<?= ($BASE) ?>/<?= ($ASSETS) ?>/frontend/assets/images/logo.png" alt="KnowDemWell Logo" title="KnowDemWell logo" style=" margin-right: 100px; margin-left: 20px;" />
    </a>
    <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav w-100">
          <li class="nav-item active">
            <a class="nav-link" href="<?= ($BASE) ?>/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="<?= ($BASE) ?>/about-us">About Us</a>
          </li>
            <li class="nav-item dropdown @@blog__active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Candidates<span class="fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item @@b__active" href="<?= ($BASE) ?>/get-list?type=candidacy&category=prs">Presidential</a>
              <a class="dropdown-item @@bs__active" href="<?= ($BASE) ?>/get-list?type=candidacy&category=lg_">Legislative</a>
              <a class="dropdown-item @@donate__active" href="<?= ($BASE) ?>/get-list?type=candidacy&category=hoa">House of Assembly</a>
              <a class="dropdown-item @@bs__active" href="<?= ($BASE) ?>/get-list?type=candidacy&category=gov">Governorship</a>
              <a class="dropdown-item @@bs__active" href="<?= ($BASE) ?>/get-list?type=candidacy&category=lga_">LGA</a>
            </div>
          </li>
 
        <li class="nav-item dropdown @@blog__active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Executive<span class="fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item @@b__active" href="<?= ($BASE) ?>/get-list?type=executive&category=prs">The Presidents</a>
              <a class="dropdown-item @@bs__active" href="<?= ($BASE) ?>/get-list?type=executive&category=vprs">Vice Presidents</a>
            </div>
          </li>
 
          <li class="nav-item dropdown @@pages__active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Legislature<span class="fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item @@causes__active" href="<?= ($BASE) ?>/get-list?type=legislative&category=lg_sntr">The Senate</a>
              <a class="dropdown-item @@donate__active" href="<?= ($BASE) ?>/get-list?type=legislative&category=lg_hos">The House of Reps</a>
              <a class="dropdown-item @@donate__active" href="<?= ($BASE) ?>/get-list?type=legislative&category=hoa">Houses of Assembly</a>
            </div>
          </li>
         <li class="nav-item @@contact__active">
            <a class="nav-link" href="<?= ($BASE) ?>/contact-us">Contact Us</a>
          </li>
          <li class="ml-lg-auto mr-lg-0 m-auto">
            <!--/search-right-->
            <div class="search-right">
              <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                  <div class="popup">
                      <h4 class="mb-3">Search here</h4>
                      <form action="#" method="GET" class="search-box">
                          <input type="search" placeholder="Enter Keyword" name="search" required="required"
                              autofocus="">
                          <button type="submit" class="btn btn-style btn-primary">Search</button>
                      </form>

                  </div>
                  <a class="close" href="#close">×</a>
              </div>
              <!-- /search popup -->
          </div>
          <!--//search-right-->
          </li>
          <li class="align-self">
            <a href="<?= ($BASE) ?>/donate" class="btn btn-style btn-primary ml-lg-3 mr-lg-2"><span class="fa fa-heart mr-1"></span> Donate</a>
          </li>
        </ul>
      </div>
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position" style="margin-right:20px;">
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
<script>
  document.addEventListener("DOMContentLoaded", function () {
    $(".nav-link").on("click", function(){
      $(".nav-item").removeClass("active");
      // $(this).closest(".nav-item").addClass("active");
    })
  })
</script>