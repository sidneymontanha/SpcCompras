<?php
// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {
     session_start();

    define('DEFAULT_CONTROLLER','home');
    define('DEFAULT_METHOD','index');

    require '../vendor/autoload.php';
    require '../App/Functions/Functions_twig.php';
    require 'Bootstrap/bootstrap.php';

}