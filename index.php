<?php

require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$action = isset($_GET['action']) ? $_GET['action'] : 'all';

$controllerClassName = $ctrl . 'Controller';
require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';

$controller = new $controllerClassName;

$method = 'action' . $action;
$controller->$method();