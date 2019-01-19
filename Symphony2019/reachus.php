<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes"
    />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <title>Reach Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/css/pater.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" />
    <link rel="stylesheet" href="assets/css/reachus.css" />
    <link rel="stylesheet" href="assets/css/sitemap.css" />
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132742730-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-132742730-1');
    </script>
  </head>
  <body class="demo-6">
    <main class="main--demo-6">
      <div class="content--demo-6">
        <!-- HAMBURGER ICON -->
        <div class="hamburger hamburger--demo-6 js-hover">
          <div class="hamburger__line hamburger__line--01">
            <div
              class="hamburger__line-in hamburger__line-in--01 hamburger__line-in--demo-5"
            ></div>
          </div>
          <div class="hamburger__line hamburger__line--02">
            <div
              class="hamburger__line-in hamburger__line-in--02 hamburger__line-in--demo-5"
            ></div>
          </div>
          <div class="hamburger__line hamburger__line--03">
            <div
              class="hamburger__line-in hamburger__line-in--03 hamburger__line-in--demo-5"
            ></div>
          </div>
          <div class="hamburger__line hamburger__line--cross01">
            <div
              class="hamburger__line-in hamburger__line-in--cross01 hamburger__line-in--demo-5"
            ></div>
          </div>
          <div class="hamburger__line hamburger__line--cross02">
            <div
              class="hamburger__line-in hamburger__line-in--cross02 hamburger__line-in--demo-5"
            ></div>
          </div>
        </div>
        <!-- TOP LEFT IMAGE GOES HERE, height 100px -> 50px -->
        <div class="header">
          <a href=" index.php"><img id="logo" src="assets/images/2019/Updated symphony logo withtheme.svg" alt=""/></a>
        </div>
        <!-- MAIN CONTENT GOES HERE, height calc(100vh - 200px) -> calc(100vh - 100px) -->
        <div class="carousel__container reach-us-wrapper" id="main-content">
          <div class="carousel__carouselContainer" id="map">
            <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=KJ%20Somaiya%20Engineering&key=AIzaSyBWfmSamzCQJ8PKdpAIl7ravpkVZKEd3oU" allowfullscreen></iframe>
          </div>
          <div class="carousel__textContainer" id="address">
            <div class="carousel__img text-left"  class="source-sans regular" >
              <img id="reach-us-address" src="./assets/images/address.png" alt="" >
            </div>
          </div>
        </div>
        
        <!-- SITEMAP -->
        <?php
        require_once("./includes/sitemap.php");
        ?>
      </div>
    </main>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/easings.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/demo6.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    
    <script>
    $(document).ready(function() {
    $("#owl-demo").owlCarousel({
    autoplay: true,
    autoplaySpeed: 100,
    dots: true,
    items: 1,
    nav: true,
    rewind: true,
    navText: [
    "<i class='fa fa-chevron-circle-left color-red'></i>",
    "<i class='fa fa-chevron-circle-right color-red'></i>"
    ]
    });
    });
    </script>
  </body>
</html>