<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
            <h1><a class="navbar-brand" href="<?= ($BASE) ?>/">
                    <img src="<?= ($BASE) ?>/ui/frontend/images/alpha-logo.png" width="100">
                </a></h1>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <?php echo $this->render('includes/public/nav.htm',NULL,get_defined_vars(),0); ?>
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