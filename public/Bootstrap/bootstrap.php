<?php

$callController = new App\Controllers\Controller;
$calledController = $callController->controller();

$controller = new $calledController();

$callmethod = new App\Controllers\Method;
$method = $callmethod->method($controller);

$controller->$method();
