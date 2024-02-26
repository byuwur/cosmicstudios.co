<?php
// routes
$ROOT_ROUTE = "/";
// components
$ROOT_COMPONENTS = ["COMPONENT" => ["#header" => "/header.php", "#footer" => "/footer.php"]];
// ---
$routes = [
    // "/uri" => ["URI" => "/file.php", "GET" => [..."key" => "value"...], "POST" => [..."key" => "value"...], "COMPONENT" => [..."#id" => "file.php"...]],
    // "/" routes
    "${ROOT_ROUTE}" => ["URI" => "/main.php", ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}es" => ["URI" => "", "GET" => ["lang" => "es"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}en" => ["URI" => "", "GET" => ["lang" => "en"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}inicio" => ["URI" => "/main.php", "GET" => ["lang" => "es"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}home" => ["URI" => "/main.php", "GET" => ["lang" => "en"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}portafolio" => ["URI" => "/portfolio.php", "GET" => ["lang" => "es"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}portfolio" => ["URI" => "/portfolio.php", "GET" => ["lang" => "en"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}servicios" => ["URI" => "/services.php", "GET" => ["lang" => "es"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}services" => ["URI" => "/services.php", "GET" => ["lang" => "en"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}equipo" => ["URI" => "/about.php", "GET" => ["lang" => "es"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}team" => ["URI" => "/about.php", "GET" => ["lang" => "en"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}contacto" => ["URI" => "/contact.php", "GET" => ["lang" => "es"], ...$ROOT_COMPONENTS],
    "${ROOT_ROUTE}contact" => ["URI" => "/contact.php", "GET" => ["lang" => "en"], ...$ROOT_COMPONENTS],
];
