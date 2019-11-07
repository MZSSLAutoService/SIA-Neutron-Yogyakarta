<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Massive HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>Massive Html5 App Landing Template</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="front/css/normalize.css">
    <link rel="stylesheet" href="front/css/animate.css">
    <link rel="stylesheet" href="front/css/modal-video.min.css">
    <link rel="stylesheet" href="front/css/stellarnav.min.css">
    <link rel="stylesheet" href="front/css/owl.carousel.css">
    <link rel="stylesheet" href="front/css/slick.css">
    <link href="front/css/bootstrap.min.css" rel="stylesheet">
    <link href="front/css/font-awesome.min.css" rel="stylesheet">
    <link href="front/css/material-icons.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="front/style.css" rel="stylesheet">
    <link href="front/css/responsive.css" rel="stylesheet">

    <script src="front/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="home-one" data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="front/img/header.png" alt="logo"></a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <div class="search-and-signup-button white pull-right hidden-md hidden-sm hidden-xs">
                                <div class="top-right links">
                                    <a class="sign-up" href="{{ route('login.index') }}">Login</a>
                                </div>
                                <!-- @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <a class="sign-up" href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a class="sign-up" href="{{ route('login') }}">Login</a>

                                            @if (Route::has('register'))
                                                <a class="sign-up" href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif -->
                            </div>
                            <ul id="nav" class="nav">
                                <li class="active"><a href="#home">home</a></li>
                                <li><a href="#features">Description</a></li>
                                <li><a href="#news">Event</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <div class="welcome-text-area white">
            <div class="area-bg"></div>
            <div class="welcome-area">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-mockup center">
                                <img src="front/img/tt.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <div class="welcome-text">
                                <h1>Welcome To Student Report Neutron Yogyakarta.</h1>
                                <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p> -->
                                <div class="home-button">
                                    <a href="#features">More</a>
                                    <a href="#">Get App Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--END TOP AREA-->

    <!--FEATURES TOP AREA-->
    <section class="features-top-area padding-100-50" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>welcome to <span>Student Report </span>Neutron Yogyakarta</h2>
                        <p>Desc</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="qs-box relative mb50 center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="qs-box-icon">
                            <i class="material-icons">assignment_turned_in</i>
                        </div>
                        <h3>Report Nilai & Absensi</h3>
                        <p>Desc</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="qs-box relative mb50 center  wow fadeInUp" data-wow-delay="0.3s">
                        <div class="qs-box-icon">
                            <i class="material-icons">today</i>
                        </div>
                        <h3>Info Event & Jadwal</h3>
                        <p>Desc</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="qs-box relative mb50 center  wow fadeInUp" data-wow-delay="0.4s">
                        <div class="qs-box-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h3>Info Materi & Task</h3>
                        <p>Desc</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FEATURES TOP AREA END-->

    <!--BLOG AREA-->
    <section class="blog-feed-area padding-100-70 sky-gray-bg" id="news">
        <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 col-sm-12 col-xs-12">
                            <div class="area-title text-center wow fadeIn">
                                <h2>INFO <span>EVENT</span></h2>
                                <span class="icon-and-border"><i class="material-icons">today</i></span>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="single-blog mb3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="blog-thumb width100">
                                    <a href="blog.html"><img src="front/img/blog/blog-1.jpg" alt=""></a>
                                </div>
                                <div class="blog-details padding-30 border">
                                    <h4><a href="blog.html">Experience And Resources By Your Side.</a></h4>
                                    <p class="blog-meta"><i class="material-icons">event_note</i> <a href="#">02 February 2016  </a> <i class="material-icons">group</i> <a href="#">Super User</a></p>
                                    <p>Lorem ipsum dolor sit amet, nec in adipiscing purus luctus, urna pellentesque fringilla vel</p>
                                    <a class="readmore" href="blog.html">Continue....</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="single-blog mb30 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="blog-thumb width100">
                                    <a href="blog.html"><img src="front/img/blog/blog-2.jpg" alt=""></a>
                                </div>
                                <div class="blog-details padding-30 border">
                                    <h4><a href="blog.html">The Most Effective App For mobile</a></h4>
                                    <p class="blog-meta"><i class="material-icons">event_note</i> <a href="#">02 February 2016  </a> <i class="material-icons">group</i> <a href="#">Super User</a></p>
                                    <p>Lorem ipsum dolor sit amet, nec in adipiscing purus luctus, urna pellentesque fringilla vel</p>
                                    <a class="readmore" href="blog.html">Continue....</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="single-blog mb30 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="blog-thumb width100">
                                    <a href="blog.html"><img src="front/img/blog/blog-3.jpg" alt=""></a>
                                </div>
                                <div class="blog-details padding-30 border">
                                    <h4><a href="blog.html">We Help Your Time Work For Your Company</a></h4>
                                    <p class="blog-meta"><i class="material-icons">event_note</i> <a href="#">02 February 2016  </a> <i class="material-icons">group</i> <a href="#">Super User</a></p>
                                    <p>Lorem ipsum dolor sit amet, nec in adipiscing purus luctus, urna pellentesque fringilla vel</p>
                                    <a class="readmore" href="blog.html">Continue....</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--CONTACT US AREA-->
    <!-- <section class="contact-area relative padding-100-50" id="contact">
        <div class="area-bg"></div> -->
    <section class="blog-feed-area section-padding relative white" id="contact">
        <div class="area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="contact-form-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-7 col-lg-offset-7 col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="contact-form mb50 wow fadeIn">
                            <h2>QUESTION</h2>
                            <form action="process.php" id="contact-form" method="post">
                                <div class="form-group" id="name-field">
                                    <div class="form-input">
                                        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
                                    </div>
                                </div>
                                <div class="form-group" id="email-field">
                                    <div class="form-input">
                                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
                                    </div>
                                </div>
                                <div class="form-group" id="phone-field">
                                    <div class="form-input">
                                        <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Subject..">
                                    </div>
                                </div>
                                <div class="form-group" id="message-field">
                                    <div class="form-input">
                                        <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message Here..." required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->

    <!--FOOER AREA-->
    <div class="footer-area white">
        <div class="footer-bottom-area red-bg padding-50-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-social-bookmark text-center wow fadeIn">
                            <div class="footer-logo mb50">
                                <a href="#"><img src="front/img/header.png" alt=""></a>
                            </div>
                            <ul class="social-bookmark">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Lembimjar <b>NEUTRON</b> Yogyakarta. All Rights Reserved. Site by Tim Website Neutron Yogyakarta
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="front/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="front/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="front/js/vendor/jquery.easing.1.3.js"></script>
    <script src="front/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="front/js/vendor/jquery.appear.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/slick.min.js"></script>
    <script src="front/js/stellar.js"></script>
    <script src="front/js/wow.min.js"></script>
    <script src="front/js/jquery-modal-video.min.js"></script>
    <script src="front/js/stellarnav.min.js"></script>
    <script src="front/js/contact-form.js"></script>
    <script src="front/js/jquery.ajaxchimp.js"></script>
    <script src="front/js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="front/js/main.js"></script>
</body>

</html>
