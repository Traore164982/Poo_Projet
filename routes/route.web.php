<?php

use App\Core\Router;
use App\Exception\RouteNotFoundException;
use App\Controller\SecurityController;
use App\Controller\ClasseController;

$router = new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/classe',[ClasseController::class,"liste"]);
$router->route('/personnes',[PersonneController::class,"lister"]);
 
try {
$router->resolve();
} catch (RouteNotFoundException $ex) {
    //throw $th;
    echo $ex->message;
}