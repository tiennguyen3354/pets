<?php
/*
 * Tien Nguyen
 * January 2024
 * https://tiennguyen3354.greenriverdev.com/328/pets/
 * This is my CONTROLLER for the Diner application
 */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//accessing the autoload page from the Fat Free Framework
require_once ('vendor/autoload.php');

// INSTANTIATE THE FAT FREE
$f3 = Base::instance();

//DEFINE A DEFAULT ROUTE
$f3->route('GET /' , function (){
    $view = new Template();
    echo $view->render('views/home.html');

});

//RUN FAT FREE
$f3->run();