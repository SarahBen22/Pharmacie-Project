<?php

$app= __DIR__;

require_once 'routes.php';

$route= new Route();
$GLOBALS['action']= $route->getAction();
$controllers = $route->getController();
// getting router infos



?>
