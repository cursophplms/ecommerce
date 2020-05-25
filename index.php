<?php 

require_once("vendor/autoload.php");

//use \Slim\Slim;
use \Hcode\Page;

$app = new \Slim\Slim();

//$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    

	$page = new Page(); // neste momento ele vai chamar o construct e vai chamar o header.html na tela muito loco

	$page->setTpl("index");

	
});

$app->run();

 ?>