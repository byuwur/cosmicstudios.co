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
    $title = "COSMIC Studios - " . $_GET['title'];
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
    <meta property="og:image" content="http://cosmicstudios.co/img/logo_circle.png" />
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
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
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
                    <a href="./">
                        <div class="header__logo"><i></i></div>
                    </a>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li id="li_home"><a href="./"><?= $home; ?></a></li>
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
                            <a href="<?= $youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="<?= $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="<?= $facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="es" title="Español"><img src="img/co.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /> ES</a>
                            <a href="en" title="English"><img src="img/uk.png" width="16px" height="12px" style="margin:0 0 4px 0;" alt="" /> EN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <video class="video-container" muted loop>
        <source src="./img/bg.mp4" type="video/mp4" />
        <source src="./img/bg.webm" type="video/webm" />
    </video>