<!DOCTYPE html>
<?php
if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es' || $_GET['lang'] == 'en') {
        require("./lang/lang_" . $_GET['lang'] . ".php");
        setcookie('lang', $_GET['lang'], time() + 31536000, '/', '', false, false);
        echo "<html lang='" . $_GET['lang'] . "' dir='ltr'>";
        $lang = $_GET['lang'];
    } else {
        setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
        //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
} else if (isset($_COOKIE['lang'])) {
    if ($_COOKIE['lang'] == 'es' || $_COOKIE['lang'] == 'en') {
        require("./lang/lang_" . $_COOKIE['lang'] . ".php");
        echo "<html lang='" . $_COOKIE['lang'] . "' dir='ltr'>";
        $lang = $_COOKIE['lang'];
    } else {
        setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
        //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
    }
} else {
    setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
    require("./lang/lang_es.php");
    echo "<html lang='es' dir='ltr'>";
    //echo '<script type="text/javascript"> window.location = window.location.pathname; </script>';
}
if (isset($_GET['title'])) {
    $title = $_GET['title'] . " - COSMIC Studios";
} else {
    $title = "COSMIC Studios";
}
?>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="COSMIC Studios" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://cosmicstudios.co/img/logo.jpg" />
    <meta property="og:url" content="http://cosmicstudios.co/" />
    <meta property="og:site_name" content="cosmicstudios.co" />
    <meta property="og:description" content="Empresa productora de medios y radiodifusión. Productora de fotografía y vídeo profesional." />
    <!-- Meta tags -->
    <meta http-equiv="Content-Language" content="es,en" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Empresa productora de medios y radiodifusión. Productora de fotografía y vídeo profesional." />
    <meta name="keywords" content="COSMIC Studios, cosmicstudios.co, producción, productora, producción audiovisual, medios, fotografía" />
    <meta name="author" content="Mateus [byUwUr]" />
    <meta name="copyright" content="Mateus [byUwUr]" />
    <meta name="theme-color" content="#006" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./portfolio.html">Portfolio</a></li>
                                <li><a href="./services.html">Services</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.html">About</a></li>
                                        <li><a href="./portfolio.html">Portfolio</a></li>
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>Our services</span>
                            <h2>What We do?</h2>
                        </div>
                        <p>If you hire a videographer of our team you will get a video professional to make a custom
                            video for your business and, once the project is over.</p>
                        <a href="#" class="primary-btn">View all services</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-1.png" alt="">
                                </div>
                                <h4>Motion graphics</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-2.png" alt="">
                                </div>
                                <h4>Scriptwriting and editing</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-3.png" alt="">
                                </div>
                                <h4>Video distribution</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img src="img/icons/si-4.png" alt="">
                                </div>
                                <h4>Video hosting</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-1.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-2.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-3.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item large__item set-bg" data-setbg="img/work/work-4.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-5.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="img/work/work-6.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item wide__item set-bg" data-setbg="img/work/work-7.jpg">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Our Blog</span>
                        <h2>Blog Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="img/callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>Fresh Ideas, Fresh Moments Giving Wings to your Stories.</h2>
                        <p>INC5000, Best places to work 2019</p>
                        <a href="#">Start your stories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>About us</h5>
                            <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                                production company specializing.</p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Who we are</h5>
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Our work</h5>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Newsletter</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>