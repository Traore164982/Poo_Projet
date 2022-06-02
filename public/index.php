<?php
session_start();
// 1_ Inclure le fichier de la Classe

use App\Core\Role;
use App\Core\Session;
use App\Model\Inscription;
use App\Model\Personne;
use App\Model\RP;

use function App\Core\dd;
use function App\Core\showNav;

require_once("../vendor/autoload.php");
require_once("../core/fonctions.php");
require_once("../routes/route.web.php");
// 2_ Creer les Objets ou instanciation des Classes
//Appel de la Methode de la Classe" nomméé Constructeur

// 3_ Donner un etat à un Objet

// -> : Opérateur de Portee d'instance(Objet)
// $pers1-> interface de la classe Visibilite sur tous les attributs et methodes publics de la classe
/* $tra = new Professeur;
$tra->setNomComplet("Mohamed Mbodji");
$tra->setGrade("Ingenieur");
$tra->insert(); */



