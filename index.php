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
    <!-- CSS -->
    <link href="./lib/fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="./lib/prismjs/prism.css" rel="stylesheet">
    <link href="./lib/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="./lib/remodal/remodal.css" rel="stylesheet">
    <link href="./lib/remodal/remodal-default-theme.css" rel="stylesheet">
    <link href="./lib/owl.carousel/owl.carousel.css" rel="stylesheet">
    <link href="./lib/lightbox2/css/lightbox.css" rel="stylesheet">
    <link href="./css/theme.css" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="loading">
            <div class="load-circle-back"></div>
            <div class="load-circle-fore"></div>
            <div class="load-text"></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- Main Content -->
    <main>
        <!-- <section> begin -->
        <section class="p-0" id="home">

            <div class="container-fluid p-0 minh-100vh">
                <div class="position-relative px-1 w-lg-50 position-lg-absolute" id="baseContent">
                    <div class="row align-items-center minh-50vh justify-content-center py-1 minh-lg-100vh video-foreground-v">
                        <video class="video-container" autoplay muted loop>
                            <source src="./img/sample.mp4" type="video/mp4" />
                        </video>
                        <div class="col-11 text-center">
                            <div class="img-fluid" style="min-height:128px;background-image:url(./img/logo.png);background-size:contain;background-repeat:no-repeat;background-position:center;" alt="">
                            </div>
                            <p class="fs-0 fs-lg-1 text-uppercase text-white ls font-weight-bold p-2 mb-0 mt-1">~ Calidad fuera de este mundo ~</p>
                            <p class="fs--1 fs-lg-0 text-uppercase text-white ls font-weight-bold p-2 mb-2">Productora de fotografía y vídeo profesional,<br>medios, televisión y radiodifusión.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="mx-2" href="https://www.facebook.com/cosmicstudios.co/" target="_blank"> <span class="fs-1 fs-lg-2 text-white fab fa-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="mx-2" href="https://www.instagram.com/co.cosmicstudios/" target="_blank"> <span class="fs-1 fs-lg-2 text-white fab fa-instagram"></span></a>
                                </li>
                            </ul>
                            <p class="p-3 m-3"></p>
                        </div>
                        <footer class="page-footer main-page-footer">
                            <div class="bg-holder" style="background-image:url(./img/banner_byuwur_nofocus.jpg);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="video-foreground-footer bg-holder">
                            </div>
                            <!--/.gradient-->
                            <div class="row justify-content-center">
                                <div class="col-lg-11">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 text-lg-left">
                                            <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Copyright &copy; <?= date("Y"); ?> COSMIC Studios</p>
                                        </div>
                                        <div class="fs--1 fs-lg-0 col-lg-6 text-lg-right mt-2 mt-lg-0">
                                            <?= $footer_text; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <div class="position-relative w-lg-50 position-lg-fixed four-item-two-column" id="gridNav">
                    <div class="row h-lg-100vh">
                        <div class="col-6 minh-25vh h-lg-50vh sidebar-item-wrapper py-5" data-content="about">
                            <div class="bg-holder" style="background-image:url(./img/sample.jpg);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="video-foreground-h bg-holder">
                            </div>
                            <!--/.gradient-->
                            <div class="sidebar-item">
                                <i class="fs-3 text-white fas fa-users mb-2 mb-lg-3 nav-icon" alt=""></i>
                                <h2 class="font-weight-light text-white fs-1 fs-xl-3"><?= $about; ?></h2>
                            </div>
                        </div>
                        <div class="col-6 minh-25vh h-lg-50vh sidebar-item-wrapper py-5" data-content="service">
                            <div class="bg-holder" style="background-image:url(./img/navigation/service.jpg);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="video-foreground-h bg-holder">
                            </div>
                            <!--/.gradient-->
                            <div class="sidebar-item">
                                <i class="fs-3 text-white fas fa-briefcase mb-2 mb-lg-3 nav-icon" alt=""></i>
                                <h2 class="font-weight-light text-white fs-1 fs-xl-3"><?= $services; ?></h2>
                            </div>
                        </div>
                        <div class="col-6 minh-25vh h-lg-50vh sidebar-item-wrapper py-5" data-content="portfolio">
                            <div class="bg-holder" style="background-image:url(./img/navigation/portfolio.jpg);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="video-foreground-h bg-holder">
                            </div>
                            <!--/.gradient-->
                            <div class="sidebar-item">
                                <i class="fs-3 text-white fas fa-folder-open mb-2 mb-lg-3 nav-icon" alt=""></i>
                                <h2 class="font-weight-light text-white fs-1 fs-xl-3"><?= $portfolio; ?></h2>
                            </div>
                        </div>
                        <div class="col-6 minh-25vh h-lg-50vh sidebar-item-wrapper py-5" data-content="contact">
                            <div class="bg-holder" style="background-image:url(./img/navigation/contact.jpg);">
                            </div>
                            <!--/.bg-holder-->
                            <div class="video-foreground-h bg-holder">
                            </div>
                            <!--/.gradient-->
                            <div class="sidebar-item">
                                <i class="fs-3 text-white fas fa-map-marked-alt mb-2 mb-lg-3 nav-icon" alt=""></i>
                                <h2 class="font-weight-light text-white fs-1 fs-xl-3"><?= $contact; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close -->


        <div class="page position-absolute t-0 w-100" id="about">
            <div class="row no-gutters minh-100vh">
                <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-lg-0">



                    <!-- <section> begin -->
                    <section class="pt-5 pt-xl-7 pt-xxl-8">

                        <div class="container-fluid">
                            <div class="row justify-content-center pb-5" id="boots4-story">
                                <div class="col-lg-10">
                                    <div class="text-center mb-5 mb-lg-6">
                                        <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">The Story of </span> Boots4</h2>
                                        <hr class="hr-ornate" />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 mb-md-0">
                                            <div class="bg-holder position-relative rounded py-8 py-md-0" style="background-image:url(./img/infinity.jpg);">
                                            </div>
                                            <!--/.bg-holder-->

                                            <div class="position-absolute t-0 l-0 h-100 w-100 d-flex align-items-center justify-content-center">
                                                <a class="video-modal text-white" href="https://www.youtube.com/watch?v=p6-WUWmV-fg" data-start="33" data-end="59"><span class="fa-layers fa-fw fs-5"><i class="fas fa-circle"></i><i class="text-primary fas fa-play" data-fa-transform="shrink-12 right-0.5"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-3 pl-md-4">
                                            <h4>To Infinity and Beyond!</h4>
                                            <p class="lead my-3">At Boots4, we believe there is a way where customers are earned rather than bought. We're obsessively passionate about it, and our mission is to help you achieve it. </p>
                                            <p class="column-xxl-2 mb-0">Boots4 was founded by ThemeWagon Team in 1896. It was called the world's first bootstrap four template, and started as a Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam illo, magni aut recusandae
                                                perspiciatis quam sed eveniet, debitis tempore natus corrupti nostrum deserunt, harum in dolor dolorem sit voluptatum iusto. recusandae perspiciatis quam sed eveniet, debitis tempore natus corrupti nostrum
                                                recusandae perspiciatis quam sed eveniet, debitis tempore. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center" id="fun-facts">
                                <div class="col-lg-10">
                                    <div class="card-deck">
                                        <div class="card border-2x border-warning rounded py-5 px-3 text-center">
                                            <img class="position-absolute r-0 t-0" src="./img/shapes/1.png" alt="" style="width: 30%; border-top-right-radius: 1px;" />
                                            <img class="mx-auto" src="./img/icons/lightbulb_idea.svg" width="70" alt="" /><span class="d-block fs-3 mt-2 text-dark" data-countup="64973">0</span>
                                            <h5>Lines Of Code</h5>
                                        </div>
                                        <div class="card border-2x border-danger rounded py-5 px-3 text-center">
                                            <img class="position-absolute b-0 r-0" src="./img/shapes/2.png" alt="" style="width: 70%; border-bottom-right-radius: 1px;" />
                                            <img class="mx-auto" src="./img/icons/coffe.svg" width="70" alt="" /><span class="d-block fs-3 mt-2 text-dark" data-countup="10218">0</span>
                                            <h5>Cups of Coffee</h5>
                                        </div>
                                        <div class="card border-2x border-primary rounded py-5 px-3 text-center">
                                            <img class="position-absolute t-0 l-0" src="./img/shapes/3.png" alt="" style="width: 70%;" />
                                            <img class="mx-auto" src="./img/icons/cloud.svg" width="70" alt="" /><span class="d-block fs-3 mt-2 text-dark" data-countup="7499">0</span>
                                            <h5>Download</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container-->

                    </section>
                    <!-- <section> close -->






                    <!-- <section> begin -->
                    <section class="pt-0 text-center">

                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-xxl-7 col-xl-9">
                                    <div class="mb-5 mb-lg-6">
                                        <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Meet Our </span> Team</h2>
                                        <hr class="hr-ornate" />
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                                            <img class="img-fluid rounded-circle" src="./img/team/1.jpg" width="140" alt="" />
                                            <h5 class="mt-3 mb-1">Alex Butler</h5>
                                            <h5 class="text-500 mb-1">Fraud Manager</h5>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                                            <img class="img-fluid rounded-circle" src="./img/team/2.jpg" width="140" alt="" />
                                            <h5 class="mt-3 mb-1">Andreas Heim</h5>
                                            <h5 class="text-500 mb-1">Software Engineer</h5>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                                            <img class="img-fluid rounded-circle" src="./img/team/3.jpg" width="140" alt="" />
                                            <h5 class="mt-3 mb-1">Amanda Alleson</h5>
                                            <h5 class="text-500 mb-1">UX Designer</h5>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                                            <img class="img-fluid rounded-circle" src="./img/team/4.jpg" width="140" alt="" />
                                            <h5 class="mt-3 mb-1">Brandon Renfrow</h5>
                                            <h5 class="text-500 mb-1">Developer</h5>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                                            <img class="img-fluid rounded-circle" src="./img/team/5.jpg" width="140" alt="" />
                                            <h5 class="mt-3 mb-1">Brian Childs</h5>
                                            <h5 class="text-500 mb-1">Training Manager</h5>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                                            <img class="img-fluid rounded-circle" src="./img/team/6.jpg" width="140" alt="" />
                                            <h5 class="mt-3 mb-1">Britney Muller</h5>
                                            <h5 class="text-500 mb-1">SEO Scientist</h5>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                                            <img class="img-fluid rounded-circle" src="./img/team/7.jpg" width="140" alt="" />
                                            <h5 class="mt-3 mb-1">Casey Coates</h5>
                                            <h5 class="text-500 mb-1">Software Engineer</h5>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                                            <img class="img-fluid rounded-circle" src="./img/team/8.jpg" width="140" alt="" />
                                            <h5 class="mt-3 mb-1">Dana</h5>
                                            <h5 class="text-500 mb-1">Bug Hunter</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center pt-4">
                                <div class="col">
                                    <h2 class="font-weight-medium fs-2 fs-sm-3"> Make Your Story With Us</h2>
                                    <p class="lead">Join the talented group of artists &amp; imagineers.</p>
                                    <a class="btn btn-primary rounded mt-2 shadow-sm" href="#!">Join Boots4</a>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container-->

                    </section>
                    <!-- <section> close -->



                    <footer class="page-footer">
                        <div class="bg-holder" style="background-image:url(./img/banner_byuwur_nofocus.jpg);">
                        </div>
                        <!--/.bg-holder-->
                        <div class="video-foreground-footer bg-holder">
                        </div>
                        <!--/.gradient-->
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 text-lg-left">
                                        <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Copyright &copy; <?= date("Y"); ?> COSMIC Studios</p>
                                    </div>
                                    <div class="fs--1 fs-lg-0 col-lg-6 text-lg-right mt-2 mt-lg-0">
                                        <?= $footer_text; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
                    <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="./img/times.svg" width="25" alt="" /><img class="d-lg-none" src="./img/times-black.svg" width="18" alt="" /></span>
                        <div class="bg-holder" style="background-image:url(./img/sidebars/about.jpg);">
                        </div>
                        <!--/.bg-holder-->
                        <div class="video-foreground-v bg-holder">
                        </div>
                        <!--/.gradient-->
                        <h1 class="page-title"><?= $about; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page position-absolute t-0 w-100" id="service">
            <div class="row no-gutters minh-100vh">
                <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-lg-0">



                    <!-- <section> begin -->
                    <section class="pt-5 pt-xl-7 pt-xxl-8">

                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="text-center mb-5 mb-lg-6">
                                        <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">What We </span> Do best</h2>
                                        <hr class="hr-ornate" />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-xl-0">
                                            <img class="mb-3" src="./img/icons/cloud.svg" alt="" width="100" />
                                            <h5 class="text-uppercase">Application</h5>
                                            <p class="pr-xxl-5">Having the shortest possible delay between idea and launch is crucial in business.</p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-xl-0">
                                            <img class="mb-3" src="./img/icons/coffe.svg" alt="" width="100" />
                                            <h5 class="text-uppercase">Development</h5>
                                            <p class="pr-xxl-5">Our award-winning team follow industry best practices to develop software.</p>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-xl-0">
                                            <img class="mb-3" src="./img/icons/brush.svg" alt="" width="100" />
                                            <h5 class="text-uppercase">Design</h5>
                                            <p class="pr-xxl-5">Our unique tools design grahphics &amp; HTML5 templates 4X faster than our rivals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container-->

                    </section>
                    <!-- <section> close -->






                    <!-- <section> begin -->
                    <section class="bg-light text-center">

                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="mb-5 mb-lg-6">
                                        <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Choose </span>Your plan</h2>
                                        <hr class="hr-ornate" />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-xl-0">
                                            <div class="rounded border py-6 bg-white">
                                                <h4 class="font-weight-regular">Basic</h4>
                                                <h2>$0<span class="font-weight-regular fs-0"> / month</span></h2>
                                                <ul class="list-unstyled text-dark my-4">
                                                    <li>15 Projects</li>
                                                    <li>30 GB Storage</li>
                                                    <li class="text-muted">Unlimited Data Transfer</li>
                                                    <li class="text-muted">50 GB Bandwith</li>
                                                    <li class="text-muted">Enhanced Security</li>
                                                </ul>
                                                <a class="btn btn-link text-dark" href="#!">Purchase Now<span class="fas fa-chevron-right ml-1"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-lg-0">
                                            <div class="rounded border py-6 bg-white">
                                                <h4 class="font-weight-regular text-primary">Business</h4>
                                                <h2 class="text-primary">$59<span class="font-weight-regular fs-0"> / month</span></h2>
                                                <ul class="list-unstyled text-dark my-4">
                                                    <li>50 Projects</li>
                                                    <li>30 GB Storage</li>
                                                    <li>Unlimited Data Transfer</li>
                                                    <li class="text-muted">50 GB Bandwith</li>
                                                    <li class="text-muted">Enhanced Security</li>
                                                </ul>
                                                <a class="btn btn-primary" href="#!">Free Trial<span class="fas fa-chevron-right ml-1"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-lg-0">
                                            <div class="rounded border py-6 bg-white">
                                                <h4 class="font-weight-regular">Advanced</h4>
                                                <h2>$99<span class="font-weight-regular fs-0"> / month</span></h2>
                                                <ul class="list-unstyled text-dark my-4">
                                                    <li>Unlimited</li>
                                                    <li>30 GB Storage</li>
                                                    <li>Unlimited Data Transfer</li>
                                                    <li>50 GB Bandwith</li>
                                                    <li>Enhanced Security</li>
                                                </ul>
                                                <a class="btn btn-link text-dark" href="#!"> Purchase Now<span class="fas fa-chevron-right ml-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container-->

                    </section>
                    <!-- <section> close -->






                    <!-- <section> begin -->
                    <section>

                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-9 col-xl-8 col-xxl-6 text-center">
                                    <div class="mb-5 mb-lg-6">
                                        <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Our Valuable </span> Clients</h2>
                                        <hr class="hr-ornate" />
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-4 col-sm-3 col-lg-3 mb-4">
                                            <img class="img-fluid" src="./img/logo/1.png" alt="" style="width: 7.5rem;" />
                                        </div>
                                        <div class="col-4 col-sm-3 col-lg-3 mb-4">
                                            <img class="img-fluid" src="./img/logo/2.png" alt="" style="width: 7.5rem;" />
                                        </div>
                                        <div class="col-4 col-sm-3 col-lg-3 mb-4">
                                            <img class="img-fluid" src="./img/logo/3.png" alt="" style="width: 7.5rem;" />
                                        </div>
                                        <div class="col-4 col-sm-3 col-lg-3 mb-4">
                                            <img class="img-fluid" src="./img/logo/4.png" alt="" style="width: 7.5rem;" />
                                        </div>
                                        <div class="col-4 col-sm-3 col-lg-3 mb-4">
                                            <img class="img-fluid" src="./img/logo/5.png" alt="" style="width: 5rem;" />
                                        </div>
                                        <div class="col-4 col-sm-3 col-lg-3 mb-4">
                                            <img class="img-fluid" src="./img/logo/6.png" alt="" style="width: 5rem;" />
                                        </div>
                                        <div class="col-4 col-sm-3 col-lg-3 mb-4">
                                            <img class="img-fluid" src="./img/logo/7.png" alt="" style="width: 5rem;" />
                                        </div>
                                        <div class="col-4 col-sm-3 col-lg-3 mb-4">
                                            <img class="img-fluid" src="./img/logo/8.png" alt="" style="width: 4rem;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-6">
                                <div class="col text-center">
                                    <h3 class="mb-2">Start your next project with us</h3>
                                    <p class="lead">Email us at
                                        <a href="mailto:info@boots4.com">info@boots4.com </a>or call
                                        <a href="tel:+44867897354">+44 867897354</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container-->

                    </section>
                    <!-- <section> close -->



                    <footer class="page-footer">
                        <div class="bg-holder" style="background-image:url(./img/banner_byuwur_nofocus.jpg);">
                        </div>
                        <!--/.bg-holder-->
                        <div class="video-foreground-footer bg-holder">
                        </div>
                        <!--/.gradient-->
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 text-lg-left">
                                        <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Copyright &copy; <?= date("Y"); ?> COSMIC Studios</p>
                                    </div>
                                    <div class="fs--1 fs-lg-0 col-lg-6 text-lg-right mt-2 mt-lg-0">
                                        <?= $footer_text; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
                    <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="./img/times.svg" width="25" alt="" /><img class="d-lg-none" src="./img/times-black.svg" width="18" alt="" /></span>
                        <div class="bg-holder" style="background-image:url(./img/sidebars/service.jpg);">
                        </div>
                        <!--/.bg-holder-->
                        <div class="video-foreground-v bg-holder">
                        </div>
                        <!--/.gradient-->
                        <h1 class="page-title"><?= $services; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page position-absolute t-0 w-100" id="portfolio">
            <div class="row no-gutters minh-100vh">
                <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-lg-0">



                    <!-- <section> begin -->
                    <section class="text-center pt-5 pt-xl-7 pt-xxl-8 text-center" id="boots4-projects">

                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="mb-5 mb-lg-6">
                                        <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Our Latest </span> Works</h2>
                                        <hr class="hr-ornate" />
                                    </div>
                                    <div class="sortable" data-options='{"layoutMode":"packery"}'>
                                        <div class="menu justify-content-center mb-3">
                                            <div class="item px-3 text-uppercase active" data-filter="*">All</div>
                                            <div class="item px-3 text-uppercase" data-filter=".photography">Photography</div>
                                            <div class="item px-3 text-uppercase" data-filter=".studio">Studio</div>
                                            <div class="item px-3 text-uppercase" data-filter=".interior">Interior</div>
                                            <div class="item px-3 text-uppercase" data-filter=".illustration">Illustration</div>
                                        </div>
                                        <div class="row no-gutters sortable-container sortable-container-gutter-fix">
                                            <a class="col-6 col-md-4 sortable-item p-2 interior" href="./img/projects/project-7.jpg" data-lightbox="image" data-title="my caption">
                                                <img class="w-100 rounded" src="./img/projects/project-7.jpg" alt="" />
                                            </a>
                                            <a class="col-6 col-md-4 sortable-item p-2 studio" href="./img/projects/project-11.jpg" data-lightbox="image" data-title="my caption">
                                                <img class="w-100 rounded" src="./img/projects/project-11.jpg" alt="" />
                                            </a>
                                            <a class="col-6 col-md-4 sortable-item p-2 photography" href="./img/projects/project-8.jpg" data-lightbox="image" data-title="my caption">
                                                <img class="w-100 rounded" src="./img/projects/project-8.jpg" alt="" />
                                            </a>
                                            <a class="col-6 col-md-4 sortable-item p-2 studio" href="./img/projects/project-9.jpg" data-lightbox="image" data-title="my caption">
                                                <img class="w-100 rounded" src="./img/projects/project-9.jpg" alt="" />
                                            </a>
                                            <a class="col-6 col-md-4 sortable-item p-2 photography" href="./img/projects/project-12.jpg" data-lightbox="image" data-title="my caption">
                                                <img class="w-100 rounded" src="./img/projects/project-12.jpg" alt="" />
                                            </a>
                                            <div class="col-6 col-md-4 sortable-item p-2 illustration">
                                                <img class="rounded w-100" src="./img/projects/project-13.jpg" alt="" />
                                                <a class="video-modal position-absolute r-0 b-0 pr-4 pb-3" href="https://www.youtube.com/watch?v=QD7pOiZBgy0" data-start="01" data-end="75">
                                                    <svg width="45" height="45" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 274.19 274.19">
                                                        <defs>
                                                            <style>
                                                                .play-path {
                                                                    fill: none;
                                                                    stroke: #ffffff;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 12px;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <g>
                                                            <path class="play-path" d="M208.31,29.4A129.12,129.12,0,1,1,137.1,8m-1.48,170.53L199.94,137,104.07,79.46v113"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="col-8 sortable-item p-2" id="owl-slide">
                                                <div class="embed-responsive embed-responsive-4by3">
                                                    <div class="embed-responsive-item owl-carousel owl-theme owl-dots-inner owl-theme-white" data-options='{"items":1,"autoplay":true,"loop":true,"animateOut":"fadeOut"}'>
                                                        <img class="rounded fit-cover" src="./img/projects/project-14.jpg" alt="" />
                                                        <img class="rounded fit-cover" src="./img/projects/project-15.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="col-6 col-md-4 sortable-item p-2 photography" href="./img/projects/project-10.jpg" data-lightbox="image" data-title="my caption">
                                                <img class="w-100 rounded" src="./img/projects/project-10.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center text-center pt-4">
                                <div class="col">
                                    <h2 class="font-weight-medium fs-2 fs-sm-3"> Start a project with us</h2>
                                    <p class="lead">Our telented team always ready to help you</p>
                                    <a class="btn btn-primary rounded mt-2 shadow-sm" href="#">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container-->

                    </section>
                    <!-- <section> close -->



                    <footer class="page-footer">
                        <div class="bg-holder" style="background-image:url(./img/banner_byuwur_nofocus.jpg);">
                        </div>
                        <!--/.bg-holder-->
                        <div class="video-foreground-footer bg-holder">
                        </div>
                        <!--/.gradient-->
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 text-lg-left">
                                        <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Copyright &copy; <?= date("Y"); ?> COSMIC Studios</p>
                                    </div>
                                    <div class="fs--1 fs-lg-0 col-lg-6 text-lg-right mt-2 mt-lg-0">
                                        <?= $footer_text; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
                    <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="./img/times.svg" width="25" alt="" /><img class="d-lg-none" src="./img/times-black.svg" width="18" alt="" /></span>
                        <div class="bg-holder" style="background-image:url(./img/sidebars/portfolio.jpg);">
                        </div>
                        <!--/.bg-holder-->
                        <div class="video-foreground-v bg-holder">
                        </div>
                        <!--/.gradient-->
                        <h1 class="page-title"><?= $portfolio; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="page position-absolute t-0 w-100" id="contact">
            <div class="row no-gutters minh-100vh">
                <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-lg-0">



                    <!-- <section> begin -->
                    <section class="pt-5 pt-xl-7 pt-xxl-8">

                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="text-center mb-5 mb-lg-6">
                                        <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Get In </span> Touch</h2>
                                        <hr class="hr-ornate" />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4 mb-xl-0">
                                            <h4>Connect with us</h4>
                                            <p class="mt-3 mb-0"> We help global leaders with their organization's most critical issues and opportunities. </p>
                                            <div class="row">
                                                <div class="col-11">
                                                    <hr class="my-4" />
                                                </div>
                                                <div class="col-auto" style="width: 178px;">
                                                    <div class="row">
                                                        <div class="col-1"><span class="fas fa-map-marker-alt text-900"></span></div>
                                                        <div class="col">
                                                            <h5 class="mb-1">Boots4 Org</h5>
                                                            <p>35 King Street
                                                                <br />Bristol, BS1 4DZ
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto" style="width: 178px;">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-1 mr-3"><span class="fas fa-phone text-900"></span></div>
                                                                <div class="col pl-0">
                                                                    <a href="tel:112-334-48-55">+112-334-48-55</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-1 mr-3"><span class="fas fa-paper-plane text-900"></span></div>
                                                                <div class="col pl-0">
                                                                    <a href="mailto:fer@rohisa.net">fer@rohisa.net</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-11">
                                                    <hr class="my-4" />
                                                </div>
                                                <div class="col-auto" style="min-width: 100%;">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item mx-2">
                                                            <a class="text-700" href="https://www.facebook.com/cosmicstudios.co/" target="_blank"> <span class="fab fa-facebook"></span></a>
                                                        </li>
                                                        <li class="list-inline-item mx-2">
                                                            <a class="text-700" href="https://www.instagram.com/co.cosmicstudios/" target="_blank"> <span class="fab fa-instagram"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4 mb-lg-0">
                                            <h4>Drop us a line</h4>
                                            <p>Our team are eagerly waiting to help you growing your business. Please feel free to contact with us.</p>
                                            <form class="zform">
                                                <input type="hidden" name="to" value="username@domain.extension" />
                                                <div class="form-group">
                                                    <label class="ls text-uppercase mb-0">Name</label>
                                                    <input class="form-control" type="text" name="name" placeholder="" required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="ls text-uppercase mb-0">Your Email</label>
                                                    <input class="form-control" type="email" name="email" placeholder="" required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="ls text-uppercase mb-0">Message</label>
                                                    <textarea class="form-control" rows="4" name="message" placeholder="" required="required"></textarea>
                                                </div>
                                                <div class="zform-feedback"></div>
                                                <button class="btn btn-block btn-warning mt-4" type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-4">
                                <div class="col-lg-10">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.3533066507107!2d-74.88934868467403!3d4.150743947334912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ed34df51acbb1%3A0xbdb77d4ff326b7a4!2sCosmic%20Studios!5e0!3m2!1ses-419!2sco!4v1632035119405!5m2!1ses-419!2sco" width="100%" height="360px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- end of .container -->

                    </section>
                    <!-- <section> close -->



                    <footer class="page-footer">
                        <div class="bg-holder" style="background-image:url(./img/banner_byuwur_nofocus.jpg);">
                        </div>
                        <!--/.bg-holder-->
                        <div class="video-foreground-footer bg-holder">
                        </div>
                        <!--/.gradient-->
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 text-lg-left">
                                        <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Copyright &copy; <?= date("Y"); ?> COSMIC Studios</p>
                                    </div>
                                    <div class="fs--1 fs-lg-0 col-lg-6 text-lg-right mt-2 mt-lg-0">
                                        <?= $footer_text; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
                    <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="./img/times.svg" width="25" alt="" /><img class="d-lg-none" src="./img/times-black.svg" width="18" alt="" /></span>
                        <div class="bg-holder" style="background-image:url(./img/sidebars/contact.jpg);">
                        </div>
                        <!--/.bg-holder-->
                        <div class="video-foreground-v bg-holder">
                        </div>
                        <!--/.gradient-->
                        <h1 class="page-title"><?= $contact; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Content -->

    <!-- JS -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./lib/prismjs/prism.js"></script>
    <script src="./lib/loaders.css/loaders.css.js"></script>
    <script src="./js/stickyfill.min.js"></script>
    <script src="./lib/remodal/remodal.js"></script>
    <script src="./lib/jtap/jquery.tap.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="./lib/owl.carousel/owl.carousel.js"></script>
    <script src="./lib/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="./lib/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="./lib/lightbox2/js/lightbox.js"></script>
    <script src="./js/theme.js"></script>
</body>

</html>