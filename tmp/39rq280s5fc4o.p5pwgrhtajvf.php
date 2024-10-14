<!doctype html>
<html lang="en">

<head>
    <?php echo $this->render('includes/public/title-meta.htm',NULL,get_defined_vars(),0); ?>

    <?php echo $this->render('includes/public/head-css.htm',NULL,get_defined_vars(),0); ?>
</head>

<body>
    
    <?php echo $this->render('includes/public/header.htm',NULL,get_defined_vars(),0); ?>
    <!--//Header-->
    <?php echo $this->render('includes/public/top-bar.htm',NULL,get_defined_vars(),0); ?>
    <!-- contacts-5-grid -->
    <div class="w3l-contact-10 py-5" id="contact">
        <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
            <div class="container">
                <div class="heading text-center mx-auto">
                    <h5 class="title-subw3hny text-center">Contact our team</h5>
                    <h3 class="title-w3l">Got any <span class="inn-text">Questions? </span></h3>
                </div>

                <div class="contacts-5-grid-main mt-5">
                    <div class="contacts-5-grid">
                        <div class="map-content-5">
                            <div class="d-grid grid-col-2 justify-content-center">
                                <div class="contact-type">
                                    <div class="address-grid">
                                        <span class="fas fa-map-marked-alt"></span>
                                        <h6>Address</h6>
                                        <p>51, Ferndale Road Ashford Middlesex, London, United Kingdom</p>

                                    </div>
                                    <div class="address-grid">
                                        <span class="fas fa-envelope-open-text"></span>
                                        <h6>Email</h6>
                                        <a href="mailto:info@alphaadehomes.co.uk" class="link1">info@alphaadehomes.co.uk</a>
                                        <a href="mailto:contact@alphaadehomes.co.uk" class="link1">contact@alphaadehomes.co.uk</a>

                                    </div>
                                    <div class="address-grid">
                                        <span class="fas fa-phone-alt"></span>
                                        <h6>Phone</h6>
                                        <a href="tel:+44 7984 974466" class="link1">+44 7984 974466</a>
                                        <a href="tel:+44 7861 993875" class="link1">+44 7861 993875</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-inner-cont mt-5">
                    <div style="margin: 0 34px">
                        <?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
                            <div class="alert alert-<?= ($msg['status']) ?> alert-dismissable">
                                <?= ($msg['text'])."
" ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <form action="<?= ($BASE) ?>/contact" method="post" class="signin-form">
                        <div class="form-grids">
                            <div class="form-input">
                                <input type="text" name="name" id="w3lName" placeholder="Enter your name *" required="" />
                            </div>
                            <div class="form-input">
                                <input type="text" name="subject" id="w3lSubject" placeholder="Enter subject " required />
                            </div>
                            <div class="form-input">
                                <input type="email" name="sender" id="w3lSender" placeholder="Enter your email *" required />
                            </div>
                            <div class="form-input">
                                <input type="text" name="phone" id="w3lPhone" placeholder="Enter your Phone Number *" required />
                            </div>
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="message" placeholder="Type your query here" required=""></textarea>
                        </div>
                        <div class="w3-submit text-right">
                            <button type="summary" class="btn btn-style btn-primary">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- //contacts-5-grid -->
    </div>

    <div class="contacts-sub-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.4998274099858!2d-0.4801646233554965!3d51.43061401630976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876715337904f7d%3A0x5f817e3b152d3740!2s51%20Ferndale%20Rd%2C%20Ashford%20TW15%203PP%2C%20UK!5e0!3m2!1sen!2sse!4v1728935407187!5m2!1sen!2sse" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
    <!--/footer-9-->
    <?php echo $this->render('includes/public/footer.htm',NULL,get_defined_vars(),0); ?>
    <?php echo $this->render('includes/public/vendor-scripts.htm',NULL,get_defined_vars(),0); ?>
    <!--//footer-9 -->

    <!-- Template JavaScript -->
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/theme-change.js"></script>
    <!-- stats number counter-->
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery.waypoints.min.js"></script>
    <script src="<?= ($BASE) ?>/ui/frontend/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
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
