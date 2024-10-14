<footer class="w3l-footer9">
    <section class="footer-inner-main py-5">
        <div class="container py-md-4">
            <div class="right-side">
                <div class="row footer-hny-grids sub-columns">
                    <div class="col-lg-3 sub-one-left">
                        <h6>About </h6>
                        <p class="footer-phny pe-lg-5"><?= ($business) ?> is your one-stop place to get affordable homes for sales, rent, and lease.</p>
                        <div class="columns-2 mt-4 pt-lg-2">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/profile.php?id=61565390235257&mibextid=LQQJ4d" target="_blank"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Falphaadehomes%3Ffbclid%3DIwZXh0bgNhZW0CMTAAAR0hCnU6WoSx0WZdje0DUzui9WVUV10jmXGJq3O0U1K7FqRWfBp69XiRA3A_aem_z1RHaraSrzLkV7Dhyc20GA&h=AT2Ve_r_exmN6EciscklLp7fh08g5DUzxwRh3fNbY-knLnwyFkbfj2sdftG5NuiS_1D4M29NrqWCWr1zJB90cwuyogwkEuXd_3D9RELn7yr3PYJJG0U5lYjQu16upsrj8AEV6MXFxL3aMBSyHQw9" target="_blank"><span class="fab fa-instagram"></span></a>
                                </li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li><a href="#"><span class="fab fa-tiktok"></span></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 sub-two-right">
                        <h6>Company</h6>
                        <ul>

                            <li><a href="<?= ($BASE) ?>/services"><i class="fas fa-angle-right"></i> Why Us</a>
                            </li>
                            <li><a href="<?= ($BASE) ?>/about"><i class="fas fa-angle-right"></i>Our Agents
                                </a>
                            </li>
                            <li><a href="<?= ($BASE) ?>/properties/rent"><i class="fas fa-angle-right"></i>Our Offers
                                </a></li>

                            <li><a href="<?= ($BASE) ?>/contact"><i class="fas fa-angle-right"></i> Careers</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-2 sub-two-right">
                        <h6>Services</h6>
                        <ul>
                            <li><a href="<?= ($BASE) ?>/properties/sale"><i class="fas fa-angle-right"></i> Buy Properties</a>
                            </li>
                            <li><a href="<?= ($BASE) ?>/properties/sale"><i class="fas fa-angle-right"></i> Sell Properties</a>
                            </li>
                            <li><a href="<?= ($BASE) ?>/properties/rent"><i class="fas fa-angle-right"></i> Rent Properties</a>
                            </li>
                            <li><a href="<?= ($BASE) ?>/properties/rent"><i class="fas fa-angle-right"></i> Property Search</a>
                            </li>


                        </ul>
                    </div>
                    <div class="col-lg-2 sub-two-right">
                        <h6>Explore</h6>
                        <ul>
                            <li><a href="<?= ($BASE) ?>/properties/rent"><i class="fas fa-angle-right"></i> Homes for Rent</a>
                            </li>
                            <li><a href="<?= ($BASE) ?>/properties/rent"><i class="fas fa-angle-right"></i> Apartments for Rent</a>
                            </li>
                            <li><a href="<?= ($BASE) ?>/properties/sale"><i class="fas fa-angle-right"></i> Homes for Sale</a>
                            </li>
                            <li><a href="<?= ($BASE) ?>/properties/sale"><i class="fas fa-angle-right"></i> Apartments for Sale</a>
                            </li>


                        </ul>
                    </div>
                    <div class="col-lg-3 sub-one-left ps-lg-5">
                        <h6>Stay Updated!</h6>
                        <p class="w3f-para mb-4">Subscribe to our newsletter to receive our new properties updates.</p>
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
                        <p>© <?= (date('Y')) ?> <?= ($business) ?>. All rights reserved | <a href="<?= ($BASE) ?>/ui/frontend/websites-privacy-cookie-policy.pdf" target="new">Privacy Policy</a> | Powered by
                            <a href="http://icoderesources.com.ng/">iCode Resources</a></p></p>
                    </div>
                    <!-- <ul class="footer-w3list text-right">
                        <li><a href="#url">Privacy Policy</a>
                        </li>
                        <li><a href="#url">Terms &amp; Conditions</a>
                        </li>
                    </ul> -->
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