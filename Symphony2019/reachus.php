<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <meta name="description" content="A set of morphing shape overlays with SVG" />
    <meta name="keywords" content="shape, SVG, morphing, web development, web design, javascript" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="assetspater/pater.css" />
    <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">
    
    <!--       ANIMATE.CSS-->
    <link rel="stylesheet" href="plugins/animate/animate.css">

    <!--    OWL CAROUSEL-->

    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.theme.blue.css">

    <link rel="stylesheet" href="./assets/css/reach-us.css">

    <script>
        document.documentElement.className = 'js';

    </script>
</head>

<body class="demo-6 reach-main">
    <svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-github" viewBox="0 0 32.6 31.8">
				<title>github</title>
				<path d="M16.3,0C7.3,0,0,7.3,0,16.3c0,7.2,4.7,13.3,11.1,15.5c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4C7.4,10.7,6.8,9,7.7,6.8c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C32.6,7.3,25.3,0,16.3,0z"/>
			</symbol>
			<symbol id="icon-keyboard" viewBox="0 0 100 70">
				<title>keyboard</title>
				<!-- https://thenounproject.com/term/keyboard/783/ by Paul te Kortschot from the Noun Project -->
				<path d="M 60.94,1.83 39.22,1.83 C 36.71,1.83 34.67,3.86 34.67,6.376 L 34.67,28.1 C 34.67,30.61 36.71,32.65 39.22,32.65 L 60.94,32.65 C 63.45,32.65 65.5,30.61 65.5,28.1 L 65.5,6.376 C 65.5,3.86 63.45,1.83 60.94,1.83 Z M 44.79,18.63 50.08,11.74 55.37,18.63 Z" opacity="0.2"/>
				<path d="M 60.86,36.75 39.14,36.75 C 36.63,36.75 34.59,38.79 34.59,41.3 L 34.59,63.02 C 34.59,65.53 36.63,67.57 39.14,67.57 L 60.86,67.57 C 63.38,67.57 65.41,65.53 65.41,63.02 L 65.41,41.3 C 65.42,38.79 63.38,36.75 60.86,36.75 Z M 50.08,57.45 44.79,50.55 55.37,50.55 Z" opacity="0.2" />
				<path d="M 95.45,36.75 73.73,36.75 C 71.22,36.75 69.18,38.79 69.18,41.3 L 69.18,63.02 C 69.18,65.53 71.22,67.57 73.73,67.57 L 95.45,67.57 C 97.97,67.57 100,65.53 100,63.02 L 100,41.3 C 100,38.79 97.97,36.75 95.45,36.75 Z M 83.4,57.45 83.4,46.86 90.3,52.16 Z" />
				<path d="M 26.27,36.75 4.55,36.75 C 2.037,36.75 0,38.79 0,41.3 L 0,63.02 C 0,65.53 2.037,67.57 4.55,67.57 L 26.27,67.57 C 28.78,67.57 30.82,65.53 30.82,63.02 L 30.82,41.3 C 30.82,38.79 28.78,36.75 26.27,36.75 Z M 16.69,57.45 9.79,52.16 16.69,46.86 Z" />
			</symbol>
		</svg>
    <main class="main main--demo-6">
        <div class="content content--demo-6">
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
                <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-12">
                           <img src="assets/images/2019//symphonylogoblue.PNG" alt="" class="img-responsive" width="200" height="100">
                       </div>
                   </div>
               </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="rules-owl owl-theme owl-carousel">
                                <div class="rules-characters">
                                    <img src="images/1.svg" alt="" >
                                </div>
                                <div class="rules-characters">
                                    <img src="images/2.svg" alt="">
                                </div>
                                <div class="rules-characters">
                                    <img src="images/3.svg" alt="">
                                </div>
                                <div class="rules-characters">
                                    <img src="images/4.svg" alt="">
                                </div>
                                <div class="rules-characters">
                                    <img src="images/5.svg" alt="">
                                </div>
                                <div class="rules-characters">
                                    <img src="images/6.svg" alt="">
                                </div>
                                <div class="rules-characters">
                                    <img src="images/7.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="reach-img">
                               <div class="row">
                               <div class="col-md-3">
                                   <img src="images/Symphony-circle.svg" alt="" class="img-responsive">
                               </div>
                               <div class="col-md-3">
                                   <img src="images/Symphony-circle.svg" alt="" class="img-responsive">
                               </div>
                           </div>
                          </div>
                            
                            
                            <h2 class="reach-us-heading">
                               REACH US 
                            </h2>
                            <div class="address">
                                <p>A108</p>
                                <p>Kjsce</p>
                                <p>Vidyavihar,mumbai</p>
                            </div>
                            <div class="contact">
                                <p class="contact-heading">Kjsce stuco</p>
                                <p  class="contact-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, quaerat itaq</p>
                                 <p class="contact-heading">Kjsce stuco</p>
                                <p  class="contact-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, quaerat itaq</p>
                                 <p class="contact-heading">Kjsce stuco</p>
                                <p  class="contact-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, quaerat itaq</p>
                            </div>
                        
                        </div>
                    </div>
                </div>
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="social-icons col-md-4 wow animated zoomIn">
                                <div class="social-1">
                                    <a href="https://www.facebook.com/KJSCESymphony/"><i class="fa fa-2x fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/kjscesymphony"><i class="fa fa-2x fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/kjscelive/"><i class="fa fa-2x  fa-instagram"></i></a>
                                    <i class="fa fa-2x fa-minus"></i><span class="register">Register</span>
                                    
                                </div>
                                <div class="social-2">
                                    <a href="https://www.youtube.com/kjscelive/"><i class="fa fa-2x fa-youtube-play"></i></a>
                                    <a href="https://www.snapchat.com/add/kjscelive"><i class="fa fa-2x fa-snapchat-ghost"></i></a>
                                    <a href="https://kjscelive.wordpress.com/"><i class="fa fa-2x fa-wordpress"></i></a>
                                    <a href=""><i class="fa fa-2x fa-minus"></i><span class="gallery-span">Gallery</span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="global-menu ">

                <div class="menu-wrap global-menu__item global-menu__item--demo-6">
                    <div class="hamburger-menu">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hamburger-img global-menu__item global-menu__item--demo-6"><img src="images/monster.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="global-menu__wrap">
                                        <a class="global-menu__item global-menu__item--demo-6" href="about-us.php">About</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="global-menu__wrap">
                                        <a class="global-menu__item global-menu__item--demo-6" href="theme.php">Theme</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="global-menu__wrap">
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>

                                            </div>
                                            <div class="col-md-6">
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="global-menu__wrap">
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">pro-shows</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="global-menu__wrap">
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">Shield</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="global-menu__wrap">
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">Syhahi</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                        <a class="global-menu__item global-menu__item--demo-6" href="#">events</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6"><img src="images/Symphony-circle.svg" alt="" class="img-responsive"></div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="global-menu__wrap">
                                                <a class="global-menu__item global-menu__item--demo-6" href="rules.php">Rules</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="global-menu__wrap">
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">Parvaah</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="global-menu__wrap">
                                                <a class="global-menu__item global-menu__item--demo-6" href="#">REachus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="social-icons col-md-4 wow animated zoomIn">
                                        <div class="social-1">
                                            <a href="https://www.facebook.com/KJSCESymphony/"><i class="fa fa-2x fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/kjscesymphony"><i class="fa fa-2x fa-twitter"></i></a>
                                            <a href="https://www.instagram.com/kjscelive/"><i class="fa fa-2x  fa-instagram"></i></a>
                                            <i class="fa fa-2x fa-minus"></i><span class="register">Register</span>

                                        </div>
                                        <div class="social-2">
                                            <a href="https://www.youtube.com/kjscelive/"><i class="fa fa-2x fa-youtube-play"></i></a>
                                            <a href="https://www.snapchat.com/add/kjscelive"><i class="fa fa-2x fa-snapchat-ghost"></i></a>
                                            <a href="https://kjscelive.wordpress.com/"><i class="fa fa-2x fa-wordpress"></i></a>
                                            <a href=""><i class="fa fa-2x fa-minus"></i><span class="gallery-span">Gallery</span></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
					<defs>
						<linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
							<stop offset="0%"   stop-color="yellow"/>
							<stop offset="100%" stop-color="orange"/>
						</linearGradient>
						<linearGradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%">
							<stop offset="0%"   stop-color="#ff6666"/>
							<stop offset="100%" stop-color=" #e6004c"/>
						</linearGradient>
						<linearGradient id="gradient3" x1="0%" y1="0%" x2="0%" y2="100%">
							<stop offset="0%"   stop-color=" #F80C3A"/>
							<stop offset="100%" stop-color="#9F4676"/>
						</linearGradient>
					</defs>
					<path class="shape-overlays__path"></path>
					<path class="shape-overlays__path"></path>
					<path class="shape-overlays__path"></path>
				</svg>
        </div>
    </main>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/demo6.js"></script>
    <script src="assets/js/easings.js"></script>
    <!--    OWL CAROUSEL-->
<!--    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>-->

</body>

</html>
