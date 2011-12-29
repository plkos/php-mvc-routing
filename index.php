<?php
error_reporting(E_ALL);
header("Content-Type: text/html; charset=UTF-8");

include_once('controllers/mainController.php');
include_once('controllers/news.php');
include_once('controllers/help.php');
include_once('controllers/login.php');
include_once('controllers/registration.php');
include_once('controllers/router.php');

$route = $_GET["route"];
$router = new Router($route);

$controllerName = ucfirst($router->get('controller')); //name of controller class
if( class_exists($controllerName) ) {
	$method = $router->get('method');
	$id = $router->get('id');
	$controller = new $controllerName($method, $id);
}
else {
	//create default controller
}


?>
