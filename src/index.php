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
    'controller' => 'Flancers',
    'action' => 'index'
  ),
  'intro' => array(
    'controller' => 'Flancers',
    'action' => 'intro'
  ),
  'dashboard' => array(
    'controller' => 'Flancers',
    'action' => 'dashboard'
  ),
  'job' => array(
    'controller' => 'Flancers',
    'action' => 'job'
  ),
  'detail' => array(
    'controller' => 'Flancers',
    'action' => 'detail'
  ),
  'form' => array(
    'controller' => 'Flancers',
    'action' => 'form'

  ),'added' => array(
    'controller' => 'Flancers',
    'action' => 'added'

  ),'jobdetail' => array(
    'controller' => 'Flancers',
    'action' => 'jobdetail'

  ),'formupdate' => array(
    'controller' => 'Flancers',
    'action' => 'formupdate'

  ),'jobupdate' => array(
    'controller' => 'Flancers',
    'action' => 'jobupdate'
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

