<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <title>Parvaah</title>
    <link rel="stylesheet" href="assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.css" />
  <link rel="stylesheet" href="assets/css/demo.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/hamburger.css">
    <link rel="stylesheet" href="assets/css/theme.css" />
</head>

<body class="demo-6">
    <main class="main main--demo-6">
        <div class="content content--demo-6">
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
            <div class="demo-title demo-title--demo-6">

                <!-- TOP LEFT IMAGE GOES HERE, height 100px -> 50px -->
                <div class="header">
                    <img src="assets/images/2019/Updated symphony logo withtheme.svg" alt="" />
                </div>

                <!-- MAIN CONTENT GOES HERE, height calc(100vh - 200px) -> calc(100vh - 100px) -->
                <div class="carousel__container">
                    <div class="carousel__carouselContainer">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="carousel__item">
                                <img src="assets/images/2019/carousel/1.svg" alt="" />
                                <span>Tacky line here !</span>
                            </div>
                            <div class="carousel__item">
                                <img src="assets/images/2019/carousel/2.svg" alt="" />
                                <span>Tacky line here !</span>
                            </div>
                            <div class="carousel__item">
                                <img src="assets/images/2019/carousel/3.svg" alt="" />
                                <span>Tacky line here !</span>
                            </div>
                            <div class="carousel__item">
                                <img src="assets/images/2019/carousel/4.svg" alt="" />
                                <span>Tacky line here !</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel__textContainer">
                        <div class="carousel__textImg">
                            <img src="https://media.giphy.com/media/2tL33I7EtHPmG2aqa9/giphy.gif" alt="" />
                        </div>
                        <div class="carousel__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quos quisquam eos qui mollitia corporis eum, aliquid, laborum dolorem maiores neque fuga facilis ducimus voluptatum quas. Sed inventore id itaque!
                        </div>
                    </div>
                </div>

                <!-- SOCIAL MEDIA ICONS GO HERE, height 100px -> 50px, flex column -> flex row -->
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
                require_once('./includes/waves.php');
        ?>

        </div>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/easings.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/demo6.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoplay: true,
                autoplaySpeed: 100,
                dots: true,
                items: 1,
                nav: true,
                rewind: true,
                navText: ["◀", "▶"]
            });
        });

    </script>
</body>

</html>
