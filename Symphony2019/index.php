<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/hamburger.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/newhome.css" />
</head>

<body class="demo-6">

    <!-- preload images -->
    <div style="display: none;">
        <img src="assets/images/2019/homepage/aboutus.png" alt="" />
        <img src="assets/images/2019/homepage/events.png" alt="" />
        <img src="assets/images/2019/homepage/parvaah.png" alt="" />
        <img src="assets/images/2019/homepage/proshows.png" alt="" />
        <img src="assets/images/2019/homepage/reachus.png" alt="" />
        <img src="assets/images/2019/homepage/rules.png" alt="" />
        <img src="assets/images/2019/homepage/shield.png" alt="" />
        <img src="assets/images/2019/homepage/sponsors.png" alt="" />
        <img src="assets/images/2019/homepage/syahi.png" alt="" />
        <img src="assets/images/2019/homepage/theme.png" alt="" />
    </div>

    <!-- DISPLAYED CONTENT STARTS HERE -->
    <main class="main--demo-6">
        <div class="content--demo-6">

            <!-- HAMBURGER ICON -->
            <div class="hamburger hamburger--demo-6 js-hover">
                <div class="hamburger__line hamburger__line--01">
                    <div class="hamburger__line-in hamburger__line-in--01 hamburger__line-in--demo-5"></div>
                </div>
                <div class="hamburger__line hamburger__line--02">
                    <div class="hamburger__line-in hamburger__line-in--02 hamburger__line-in--demo-5"></div>
                </div>
                <div class="hamburger__line hamburger__line--03">
                    <div class="hamburger__line-in hamburger__line-in--03 hamburger__line-in--demo-5"></div>
                </div>
                <div class="hamburger__line hamburger__line--cross01">
                    <div class="hamburger__line-in hamburger__line-in--cross01 hamburger__line-in--demo-5"></div>
                </div>
                <div class="hamburger__line hamburger__line--cross02">
                    <div class="hamburger__line-in hamburger__line-in--cross02 hamburger__line-in--demo-5"></div>
                </div>
            </div>

            <!-- MAIN CONTENT GOES HERE -->

            <!-- HEAD -->

            <!-- MAIN CONTENT HEIGHT - 100vh - 200px for DESK, 100vh - 100px for Mobile-->
            <div class="homepage">
                <div class="homepage__menu">
                    <div class="homepage__titles">
                        <div class="homepage__title aboutus">
                            <a href="#">About Us <br /></a>
                        </div>
                        <div class="homepage__title theme">
                            <a href="#">Theme <br /></a>
                        </div>
                        <div class="homepage__title events">
                            <a href="#">Events <br /></a>
                        </div>
                        <div class="homepage__title proshows">
                            <a href="#">Pro-Shows <br /></a>
                        </div>
                        <div class="homepage__title shield">
                            <a href="#">Shield <br /></a>
                        </div>
                        <div class="homepage__title syahi">
                            <a href="#">Syahi <br /></a>
                        </div>
                        <div class="homepage__title rules">
                            <a href="#">Rules <br /></a>
                        </div>
                        <div class="homepage__title parvaah">
                            <a href="#">Parvaah <br /></a>
                        </div>
                        <div class="homepage__title sponsors">
                            <a href="#">Sponsors <br /></a>
                        </div>
                        <div class="homepage__title reachus">
                            <a href="#">Reach Us <br /></a>
                        </div>
                    </div>
                </div>
                <div class="homepage__img">
                    <div class="homepage__imgContainer">
                        <img class="homepage__imgChange" src="assets/images/2019/Updated symphony logo withtheme.svg" alt="Symphony Logo" />
                    </div>
                </div>
                <!-- SOCIAL MEDIA change flex orientation from column to row, for desktop to mobile-->
                <div class="socialmedia">
                    <div class="socialmedia__line1">
                        <img src="assets/images/2019/social media icons/facebook.svg" alt="" />
                        <img src="assets/images/2019/social media icons/youtube.svg" alt="" />
                        <img src="assets/images/2019/social media icons/instagram.svg" alt="" />
                    </div>
                    <div class="socialmedia__line2">
                        <img src="assets/images/2019/social media icons/twitter.svg" alt="" />
                        <img src="assets/images/2019/social media icons/snapchat.svg" alt="" />
                        <img src="assets/images/2019/social media icons/wordpress.svg" alt="" />
                    </div>
                </div>
            </div>
            <?php
                require_once('./includes/global-menu.php');
            ?>
                <?php
                require_once('./includes/sidebar.php');
            ?>

                    <?php
                require_once('./includes/waves.php');
            ?>
        </div>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/easings.js"></script>
    <script src="assets/js/demo6.js"></script>
    <script src="assets/js/homepage.js"></script>
</body>

</html>
