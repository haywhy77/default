
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?= ($business) ?></title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="<?= ($BASE) ?>/ui/frontend/login/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="<?= ($BASE) ?>/ui/frontend/login/css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form">
        <h1></h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Log In</h2>
                        <?php foreach ((\Flash::instance()->getMessages()?:[]) as $msg): ?>
                            <div class="alert alert-<?= ($msg['status']) ?> alert-dismissable">
                                <?= ($msg['text'])."
" ?>
                            </div>
                        <?php endforeach; ?>
                        <form action="<?= ($BASE) ?>/<?= ($form['action']) ?>" method="post" autocomplete="off">
                            <input type="text" class="text" name="email" placeholder="User Email" required="" autofocus>
                            <input type="password" class="password" name="password" placeholder="User Password" required="" autofocus>
                            <button class="btn" type="submit">Log In</button>
                        </form>
                        
                        <!-- <p class="account">Don't have an account? <a href="#signup">Register</a></p> -->
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="<?= ($BASE) ?>/ui/frontend/login/images/1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2024. All rights reserved | Design by <a href="https://w3layouts.com">W3layouts</a></p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html>