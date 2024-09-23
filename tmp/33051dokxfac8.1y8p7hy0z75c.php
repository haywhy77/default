<!-- footer 14 -->
<div class="w3l-footer-main">
    <div class="w3l-sub-footer-content">
        <section class="_form-3">
            <div class="form-main">
                <div class="container">
                    <div class="middle-section grid-column top-bottom">
                        <div class="image grid-three-column">
                            <img src="<?= ($BASE) ?>/<?= ($ASSETS) ?>/frontend/assets/images/subscribe.png" alt="" class="img-fluid radius-image-full">
                        </div>
                        <div class="text-grid grid-three-column">
                            <h2>Enter your email here and never miss our updates again</h2>
                            <p>We won’t give you spam mails.</p>
                        </div>
                        <div class="form-text grid-three-column">
                            <form action="/" method="GET">
                                <input type="email" name=" placeholder" placeholder="Enter Your Email" required="">
                                <button type="submit" class="btn btn-style btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footers-14 -->
        <footer class="footer-14">
            <div id="footers14-block">
                <div class="container">
                    <div class="footers20-content">
                        <div class="d-grid grid-col-4 grids-content">
                           
                            <div class="column">
                                <h4>Our Address</h4>
                                  <p>Abuja, Nigeria</p>
                            </div>
                            
                            <div class="column">
                                <h4>Mail Us</h4>
                                <p><a href="mailto:info@knowdemwell.com">info@knowdemwell.org</a></p>
                            </div>
                            <div class="column">
                                <h4>Follow Us On</h4>
                                <ul>
                                    <li><a href="#facebook"><span class="fa fa-facebook"
                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fa fa-twitter"
                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#instsgram"><span class="fa fa-instagram"
                                                aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="footers14-bottom d-flex">
                        <div class="copyright">
                          <p>©KnowDemWell. All Rights Reserved</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                &uarr;
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
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
            <!-- /move top -->
  
        </footer>
        <!-- Footers-14 -->
    </div>
</div>
<!-- //footer 14 -->


<script src="<?= ($BASE) ?>/<?= ($ASSETS) ?>/frontend/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="<?= ($BASE) ?>/<?= ($ASSETS) ?>/frontend/assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

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
  <script src="<?= ($BASE) ?>/<?= ($ASSETS) ?>/frontend/assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->
  </body>
  
  </html>
  
</body>
</html>