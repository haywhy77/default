<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>KnowDemWell | Presidents </title>

    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
        <link rel="icon" type="text/css" href="assets/images/subscribe.png">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg stroke">
    <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo.png" alt="KnowDemWell Logo" title="KnowDemWell logo" style=" margin-right: 100px; margin-left: 20px;" />
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
            <li class="nav-item dropdown @@blog__active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Candidates<span class="fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item @@b__active" href="presidential.php">Presidential</a>
              <a class="dropdown-item @@bs__active" href="legislative.php">Legislative</a>
              <a class="dropdown-item @@donate__active" href="house_rep.php">House of Assembly</a>
              <a class="dropdown-item @@bs__active" href="governorship.php">Governorship</a>
              <a class="dropdown-item @@bs__active" href="lga.php">LGA</a>
            </div>
          </li>
 
        <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Executive<span class="fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item @@b__active" href="presidents.php">The Presidents</a>
              <a class="dropdown-item @@bs__active" href="vice.php">Vice Presidents</a>
            </div>
          </li>
 
          <li class="nav-item dropdown @@pages__active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Legislature<span class="fa fa-angle-down"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item @@causes__active" href="senate.php">The Senate</a>
              <a class="dropdown-item @@donate__active" href="house_rep.php">The House of Reps</a>
              <a class="dropdown-item @@donate__active" href="house_rep.php">Houses of Assembly</a>
            </div>
          </li>
         <li class="nav-item @@contact__active">
            <a class="nav-link" href="contact.php">Contact Us</a>
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
            <a href="donate.php" class="btn btn-style btn-primary ml-lg-3 mr-lg-2"><span class="fa fa-heart mr-1"></span> Donate</a>
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

<!-- //header -->
<div class="inner-banner">
    <section class="w3l-breadcrumb py-5"> 
        
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Presidents</h2>
        </div>
    </section>
</div>
<!-- banner bottom shape -->
<div class="position-relative">
    <div class="shape overflow-hidden">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- banner bottom shape -->



<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h3 class="title-big">Presidential Profiles</h3>
            </div>
            <div class="team-row mt-md-5 mt-4">
                
<?php

include('config.php');
$result = $conn->query("SELECT * FROM presidents WHERE status='1' ORDER BY id ASC");
if($result->num_rows > 0)
{ 
    while($row = $result->fetch_assoc()) 
    {     

                echo '<div class="team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <a href="president-details.php?htennek007='.$row['id'].'"><img src="admin/'.$row['images'].'" class="radius-image img-fluid"/></a>
                        </div>
                        <a href="president-details.php?htennek007='.$row['id'].'" class="team-title">'.$row['fullname'].'</a>
                        <p>'.$row['party'].'</p>
                    </div>
                </div>';

    }
}
else {
    echo '<font color="red">There are no Presidential Profiles at the moment</font>';
}
?>



            </div>
        </div>
</section>

<?php include ('footer.php'); ?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      dots: false,
      margin: 0,
      nav: true,
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

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1
        },
        736: {
          items: 1
        },
        1000: {
          items: 2,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="assets/js/counter.js"></script>

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap-->
</body>

</html>