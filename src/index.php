<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

// basic .env file parsing
if (file_exists("../.env")) {
  $variables = parse_ini_file("../.env", true);
  foreach ($variables as $key => $value) {
    putenv("$key=$value");
  }
}

$routes = array(
  'home' => array(
    'controller' => 'Product',
    'action' => 'index'
  ),
  'detail' => array(
    'controller' => 'Product',
    'action' => 'detail'
  ),
  'cart' => array(
    'controller' => 'Orders',
    'action' => 'cart'
  ),
  'login' => array(
    'controller' => 'Users',
    'action' => 'login'
  ),
  'register' => array(
    'controller' => 'Users',
    'action' => 'register'
  ),
  'overview' => array(
    'controller' => 'Orders',
    'action' => 'overview'
  ),
  'bevestiging' => array(
    'controller' => 'Orders',
    'action' => 'bevestiging'
  ),
  'longread' => array(
    'controller' => 'Longread',
    'action' => 'longread'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'home';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();

