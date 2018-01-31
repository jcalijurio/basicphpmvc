<?php
require './HomeController.php';
require './TesteController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Home';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'Index';

$controller .= 'Controller';
$controlerInstance = new $controller;
$parameters = array();

call_user_func_array(array($controlerInstance, $actionName ), $parameters);