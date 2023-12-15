<!DOCTYPE html>
<?php
require_once "./_var.php";
require_once $TO_HOME . "_functions.php";
$routes = [
    "/" => ["URI" => "main.php", "GET" => [], "POST" => []],
    "/es" => ["URI" => "main.php", "GET" => ["lang" => "es"], "POST" => []],
    "/en" => ["URI" => "main.php", "GET" => ["lang" => "en"], "POST" => []],
    "/inicio" => ["URI" => "main.php", "GET" => ["lang" => "es"], "POST" => []],
    "/home" => ["URI" => "main.php", "GET" => ["lang" => "en"], "POST" => []],
    "/portafolio" => ["URI" => "portfolio.php", "GET" => ["lang" => "es"], "POST" => []],
    "/portfolio" => ["URI" => "portfolio.php", "GET" => ["lang" => "en"], "POST" => []],
    "/servicios" => ["URI" => "services.php", "GET" => ["lang" => "es"], "POST" => []],
    "/services" => ["URI" => "services.php", "GET" => ["lang" => "en"], "POST" => []],
    "/equipo" => ["URI" => "about.php", "GET" => ["lang" => "es"], "POST" => []],
    "/team" => ["URI" => "about.php", "GET" => ["lang" => "en"], "POST" => []],
    "/contacto" => ["URI" => "contact.php", "GET" => ["lang" => "es"], "POST" => []],
    "/contact" => ["URI" => "contact.php", "GET" => ["lang" => "en"], "POST" => []]
];
require_once $TO_HOME . "_router.php";
require_once $TO_HOME . "common.php";
?>

<head>
    <meta charset="utf-8">
    <title>COSMIC Studios</title>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="COSMIC Studios" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://cosmicstudios.co/img/logo_circle.png" />
    <meta property="og:url" content="http://cosmicstudios.co" />
    <meta property="og:site_name" content="COSMIC Studios" />
    <meta property="og:description" content="Productora de fotografía y vídeo profesional. Empresa productora de medios y radiodifusión." />
    <!-- Meta tags -->
    <meta http-equiv="Content-Language" content="es,en" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Productora de fotografía y vídeo profesional. Empresa productora de medios y radiodifusión." />
    <meta name="keywords" content="COSMIC Studios, cosmicstudios.co, producción, productora, producción audiovisual, medios, fotografía" />
    <meta name="author" content="[Mateus] byUwUr" />
    <meta name="copyright" content="[Mateus] byUwUr" />
    <meta name="theme-color" content="#006" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/png" href="<?= $HOME_PATH; ?>img/favicon.png" />
    <link rel="icon" type="image/png" href="<?= $HOME_PATH; ?>img/favicon.png" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/fontawesome.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/slicknav.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/style.css" />
    <!-- Scripts -->
    <script src="<?= $HOME_PATH; ?>js/jquery-3.3.1.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>js/bootstrap.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>js/jquery.magnific-popup.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>js/mixitup.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>js/masonry.pkgd.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>js/jquery.slicknav.js" defer></script>
    <script src="<?= $HOME_PATH; ?>js/owl.carousel.min.js" defer></script>
    <script src="<?= $HOME_PATH; ?>js/main.js" defer></script>
    <script src="<?= $HOME_PATH; ?>_functions.js" defer></script>
    <script src="<?= $HOME_PATH; ?>_spa.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="loading">
        <div class="load-circle-back"></div>
        <div class="load-circle-fore"></div>
        <div class="load-text"><?= $load; ?></div>
    </div>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-6">
                    <a href="<?= $TO_HOME; ?>">
                        <div class="header__logo"><i></i></div>
                    </a>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li id="li_home"><a href="<?= $TO_HOME; ?>"><?= $home; ?></a></li>
                                <li id="li_portfolio"><a href="<?= $TO_HOME; ?><?= $_portfolio; ?>"><?= $portfolio; ?></a></li>
                                <li id="li_services"><a href="<?= $TO_HOME; ?><?= $_services; ?>"><?= $services; ?></a></li>
                                <li id="li_about"><a href="<?= $TO_HOME; ?><?= $_about; ?>"><?= $about; ?></a></li>
                                <li id="li_contact"><a href="<?= $TO_HOME; ?><?= $_contact; ?>"><?= $contact; ?></a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <?php foreach ($cosmic_link as $i => $link) { ?>
                                <a href="<?= $link; ?>" target="_blank"><i class="<?= $cosmic_link_icon[$i]; ?>"></i></a>
                            <?php } ?>
                            <a href="<?= $TO_HOME; ?>es" title="Español"><img src="img/co.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /> ES</a>
                            <a href="<?= $TO_HOME; ?>en" title="English"><img src="img/uk.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /> EN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <video class="video-container" muted loop>
        <source src="<?= $HOME_PATH; ?>img/bg.mp4" type="video/mp4" />
        <source src="<?= $HOME_PATH; ?>img/bg.webm" type="video/webm" />
    </video>
    <div id="spa-page-content-container"> <!-- body start -->

    </div> <!-- body end -->
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-4">
                        <a href="<?= $TO_HOME; ?>">
                            <div class="footer__top__logo"><i></i></div>
                        </a>
                    </div>
                    <div class="col-8">
                        <div class="footer__top__social">
                            <?php foreach ($cosmic_link as $i => $link) { ?>
                                <a href="<?= $link; ?>" target="_blank"><i class="<?= $cosmic_link_icon[$i]; ?>"></i></a>
                            <?php } ?>
                            <a href="<?= $TO_HOME; ?>es" title="Español"><img src="<?= $HOME_PATH; ?>img/co.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /></a>
                            <a href="<?= $TO_HOME; ?>en" title="English"><img src="<?= $HOME_PATH; ?>img/uk.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="footer__option__item">
                            <h5><?= $weare; ?></h5>
                            <p><?= $about_short; ?></p>
                            <a href="<?= $_about; ?>" class="read__more"><?= $know; ?> <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-3">
                        <div class="footer__option__item">
                            <h5><?= $footer_about; ?></h5>
                            <ul>
                                <?php foreach ($footer_about_item as $i => $item) { ?>
                                    <li><a href="<?= $footer_about_link[$i]; ?>"><?= $item; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer__option__item">
                            <h5><?= $footer_portfolio; ?></h5>
                            <ul>
                                <?php foreach ($footer_portfolio_item as $i => $item) { ?>
                                    <li><a href="<?= $footer_portfolio_link[$i]; ?>"><?= $item; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="footer__copyright__text"><?= $footer_text; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

</html>