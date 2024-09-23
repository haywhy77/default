<?php echo $this->render('includes/public/header.htm',NULL,get_defined_vars(),0); ?>

<div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
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
<!-- contacts -->
<section class="w3l-contact-7 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <h3 class="title-big">Send us a Message</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="" method="post" class="text-right">
                            <div class="form-grid">
                                <input type="text" name="fullname" id="w3lName" placeholder="Name*" required="">
                                <input type="email" name="email" id="w3lSender" placeholder="Email*" required="">
                                
                            </div>
                            
                            <div class="form-block">
                              <input type="text" name="subject" id="w3lSubject" placeholder="Subject">
                            </div>
                            <textarea name="message" id="w3lMessage" placeholder="Message"></textarea>
                            <div class="g-recaptcha" style="margin-top:10px;" data-sitekey="6LfzoRwpAAAAAJZBCChLejNoc8zl1mODnVAd_vrI"></div>

                            <button type="submit" name="submit" class="btn btn-primary btn-style mt-3">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Contact Address</h5>
                            <p><span class="fa fa-map-marker"></span>Abuja, Nigeria</p>
                            <p> <a href="mailto:info@example.com"><span
                                        class="fa fa-envelope"></span>info@knowdemwell.org</a></p>
                           <!-- <p><span class="fa fa-phone"></span><a href="tel:+44-000-888-999"> +44-000-888-999</a></p> -->
                            <a href="donate.php" class="btn btn-style btn-outline-primary mt-4">
                                <span class="fa fa-heart mr-1"></span> Make Donation</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contacts -->

<?php echo $this->render('includes/public/footer.htm',NULL,get_defined_vars(),0); ?>