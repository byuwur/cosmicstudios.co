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
