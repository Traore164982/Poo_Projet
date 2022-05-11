<?php
// 1_ Inclure le fichier de la Classe
require_once("../core/iModels.php");
require_once("../core/Model.php");
require_once("../models/Personne.php");
require_once("../models/User.php");
require_once("../models/Ac.php");
require_once("../models/Etudiant.php");
require_once("../models/RP.php");
require_once("../models/Professeur.php");
require_once("../models/Classe.php");
require_once("../models/AnneeScolaire.php");
require_once("../models/Inscription.php");
// 2_ Creer les Objets ou instanciation des Classes
//Appel de la Methode de la Classe" nomméé Constructeur

// 3_ Donner un etat à un Objet

// -> : Opérateur de Portee d'instance(Objet)
// $pers1-> interface de la classe Visibilite sur tous les attributs et methodes publics de la classe
$tra = new Professeur();
$tra::findAll();