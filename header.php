<!DOCTYPE html>
<?php
require_once "./_var.php";

if (isset($_GET['lang'])) {
    switch ($_GET['lang']) {
        case 'es':
        case 'en':
            setcookie('lang', $_GET['lang'], time() + 31536000, '/', '', false, false);
            require_once $to_home . "lang/lang_" . $_GET['lang'] . ".php";
            echo "<html lang='" . $_GET['lang'] . "'>";
            $lang = $_GET['lang'];
            break;
    }
} else if (isset($_COOKIE['lang'])) {
    switch ($_COOKIE['lang']) {
        case 'es':
        case 'en':
            require_once $to_home . "lang/lang_" . $_COOKIE['lang'] . ".php";
            echo "<html lang='" . $_COOKIE['lang'] . "'>";
            $lang = $_COOKIE['lang'];
            break;
    }
} else {
    setcookie('lang', 'es', time() + 31536000, '/', '', false, false);
    require_once $to_home . "lang/lang_es.php";
    echo "<html lang='es'>";
    $lang = 'es';
}

if (isset($_GET['title']))
    switch ($_GET['title']) {
        case 0:
            $title = "COSMIC Studios | " . $home;
            break;
        case 1:
            $title = "COSMIC Studios | " . $about;
            break;
        case 2:
            $title = "COSMIC Studios | " . $services;
            break;
        case 3:
            $title = "COSMIC Studios | " . $portfolio;
            break;
        case 4:
            $title = "COSMIC Studios | " . $contact;
            break;
        default:
            $title = "COSMIC Studios";
            break;
    }
else $title = "COSMIC Studios";
?>

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
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
    <link rel="shortcut icon" type="image/png" href="<?= $to_home; ?>img/favicon.png" />
    <link rel="icon" type="image/png" href="<?= $to_home; ?>img/favicon.png" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= $to_home; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= $to_home; ?>css/fontawesome.min.css" />
    <link rel="stylesheet" href="<?= $to_home; ?>css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= $to_home; ?>css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= $to_home; ?>css/slicknav.min.css" />
    <link rel="stylesheet" href="<?= $to_home; ?>css/style.css" />
    <!-- Scripts -->
    <script src="<?= $to_home; ?>js/jquery-3.3.1.min.js" defer></script>
    <script src="<?= $to_home; ?>js/bootstrap.min.js" defer></script>
    <script src="<?= $to_home; ?>js/jquery.magnific-popup.min.js" defer></script>
    <script src="<?= $to_home; ?>js/mixitup.min.js" defer></script>
    <script src="<?= $to_home; ?>js/masonry.pkgd.min.js" defer></script>
    <script src="<?= $to_home; ?>js/jquery.slicknav.js" defer></script>
    <script src="<?= $to_home; ?>js/owl.carousel.min.js" defer></script>
    <script src="<?= $to_home; ?>js/main.js" defer></script>
    <script src="<?= $to_home; ?>_functions.js" defer></script>
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
                    <a href="<?= $to_home; ?>">
                        <div class="header__logo"><i></i></div>
                    </a>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li id="li_home"><a href="<?= $to_home; ?>"><?= $home; ?></a></li>
                                <li id="li_portfolio"><a href="<?= $_portfolio; ?>"><?= $portfolio; ?></a></li>
                                <li id="li_services"><a href="<?= $_services; ?>"><?= $services; ?></a>
                                    <!--ul class="dropdown">
                                        <li><a href="<?= $_services; ?>"><?= $services; ?></a></li>
                                    </ul-->
                                </li>
                                <li id="li_about"><a href="<?= $_about; ?>"><?= $about; ?></a></li>
                                <li id="li_contact"><a href="<?= $_contact; ?>"><?= $contact; ?></a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <?php foreach ($cosmic_link as $i => $link) { ?>
                                <a href="<?= $link; ?>" target="_blank"><i class="<?= $cosmic_link_icon[$i]; ?>"></i></a>
                            <?php } ?>
                            <a href="<?= $to_home; ?>es" title="Español"><img src="img/co.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /> ES</a>
                            <a href="<?= $to_home; ?>en" title="English"><img src="img/uk.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /> EN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <video class="video-container" muted loop autoplay>
        <source src="<?= $to_home; ?>img/bg.mp4" type="video/mp4" />
        <source src="<?= $to_home; ?>img/bg.webm" type="video/webm" />
    </video>