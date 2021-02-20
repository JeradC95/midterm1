<?php

//This is my CONTROLLER

ini_set('display_errors', TRUE);
error_reporting(E_ALL);

session_start();

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

// define default survey page
$f3->route('GET /survey', function (){
    $view = new Template();
    echo $view->render('/survey.html');
});

$f3->run();