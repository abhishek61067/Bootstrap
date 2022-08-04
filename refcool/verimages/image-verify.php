<?php
include_once("../scripts/graphics.php");
include_once("../globals.php");
session_start();
// generate  5 digit random number and store it in session
$rand = rand(10000, 99999);
setcookie($site_cookie_verifyimage_name,md5($rand),0, $site_cookie_path);
$graphics = new graphics();
$graphics->generateValidationImage($rand);
?> 
