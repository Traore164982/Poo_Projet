<?php

use App\Core\Role;
use App\Core\Router;
use App\Model\inscription;
use App\Controller\AcController;
use App\Controller\RPController;
use App\Controller\UserController;
use App\Controller\ClasseController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\AffecterController;
use App\Controller\EtudiantController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Controller\InscriptionController;
use App\Exception\RouteNotFoundException;

$router = new Router();

$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"logout"]);

$router->route('/inscription',[InscriptionController::class,"inscription"]);


$router->route('/listeretudiant',[EtudiantController::class,"listerEtudiant"]);


$router->route('/accueil',[SecurityController::class,"accueil"]);
$router->route('/demande',[DemandeController::class,"demande"]);
$router->route('/listedemande',[DemandeController::class,"liste"]);
$router->route('/edit',[DemandeController::class,"edit"]);
$router->route('/addmodule',[ModuleController::class,"add"]);
$router->route('/listemodule',[ModuleController::class,"liste"]);
$router->route('/affecter',[AffecterController::class,"affecter"]);
$router->route('/listeraffecter',[AffecterController::class,"liste"]);

if (Role::is_RP()) {
    $router->route('/listeclasse',[ClasseController::class,"liste"]);
    $router->route('/addClasse',[ClasseController::class,"addClasse"]);
    $router->route('/addattache',[AcController::class,"addAc"]);
    $router->route('/addAttache',[AcController::class,"addAttache"]);
    $router->route('/listerac',[AcController::class,"listerAc"]);
    $router->route('/listerrp',[RPController::class,"listerRp"]);
    $router->route('/addProf',[ProfesseurController::class,"professeur"]);
    $router->route('/detail',[ProfesseurController::class,"detail"]);
    $router->route('/edit',[ProfesseurController::class,"edit"]);$router->route('/listeruser',[UserController::class,"listerUser"]);
    $router->route('/listeruser',[UserController::class,"listerUser"]);
    $router->route('/listeprofesseur',[ProfesseurController::class,"listerProfesseur"]);
}
 
try {
$router->resolve();
} catch (RouteNotFoundException $ex) {
    //throw $th;
    echo $ex->message;
}