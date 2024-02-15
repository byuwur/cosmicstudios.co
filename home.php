<!DOCTYPE html>
<?php
$routes = [
    "/" => ["URI" => "main.php", "GET" => [], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/es" => ["URI" => "", "GET" => ["lang" => "es"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/en" => ["URI" => "", "GET" => ["lang" => "en"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/inicio" => ["URI" => "main.php", "GET" => ["lang" => "es"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/home" => ["URI" => "main.php", "GET" => ["lang" => "en"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/portafolio" => ["URI" => "portfolio.php", "GET" => ["lang" => "es"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/portfolio" => ["URI" => "portfolio.php", "GET" => ["lang" => "en"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/servicios" => ["URI" => "services.php", "GET" => ["lang" => "es"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/services" => ["URI" => "services.php", "GET" => ["lang" => "en"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/equipo" => ["URI" => "about.php", "GET" => ["lang" => "es"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/team" => ["URI" => "about.php", "GET" => ["lang" => "en"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/contacto" => ["URI" => "contact.php", "GET" => ["lang" => "es"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
    "/contact" => ["URI" => "contact.php", "GET" => ["lang" => "en"], "POST" => [], "COMPONENT" => ["#header" => "header.php", "#footer" => "footer.php"]],
];
$setLocalStorage = true;
require_once "./_var.php";
require_once $TO_HOME . "_functions.php";
require_once $TO_HOME . "_router.php";
require_once $TO_HOME . "common.php";
?>

<head>
    <meta charset="utf-8">
    <title>COSMIC Studios</title>
    <meta property="og:title" content="COSMIC Studios" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://cosmicstudios.co/img/logo_circle.png" />
    <meta property="og:url" content="http://cosmicstudios.co" />
    <meta property="og:site_name" content="COSMIC Studios" />
    <meta property="og:description" content="Productora de fotografía y vídeo profesional. Empresa productora de medios y radiodifusión." />
    <meta http-equiv="Content-Language" content="es,en" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Productora de fotografía y vídeo profesional. Empresa productora de medios y radiodifusión." />
    <meta name="keywords" content="COSMIC Studios, cosmicstudios.co, producción, productora, producción audiovisual, medios, fotografía" />
    <meta name="author" content="[Mateus] byUwUr" />
    <meta name="copyright" content="[Mateus] byUwUr" />
    <meta name="theme-color" content="#006" />
    <link rel="shortcut icon" type="image/png" href="<?= $HOME_PATH; ?>img/favicon.png" />
    <link rel="icon" type="image/png" href="<?= $HOME_PATH; ?>img/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/fontawesome.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/slicknav.min.css" />
    <link rel="stylesheet" href="<?= $HOME_PATH; ?>css/style.css" />
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
    <div id="spa-loader" class="loading">
        <div class="load-circle-back"></div>
        <div class="load-circle-fore"></div>
        <div class="load-text"><?= $load; ?></div>
    </div>
    <video class="video-container" muted loop autoplay>
        <source src="<?= $HOME_PATH; ?>img/bg.mp4" type="video/mp4" />
        <source src="<?= $HOME_PATH; ?>img/bg.webm" type="video/webm" />
    </video>
    <header id="header"></header>
    <div id="spa-page-content-container"></div>
    <footer id="footer"></footer>
</body>

</html>