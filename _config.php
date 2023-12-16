<?php
// You must require_once './_var.php' before this file to get the relative/absolute paths
require_once $TO_HOME . "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable($TO_HOME);
$dotenv->load();
//$mysqli = new mysqli($_ENV["DB_HOST"], $_ENV["DB_USER"], $_ENV["DB_PASS"], $_ENV["DB_NAME"], $_ENV["DB_PORT"]);
//if ($mysqli->connect_errno) die("Connection failed: " . $mysqli->connect_errno . " = " . $mysqli->connect_error);
require_once $TO_HOME . "_functions.php";
require_once $TO_HOME . "_auth.php";