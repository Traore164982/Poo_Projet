<?php

use App\Core\Role;

use function App\Core\hidden;
use function App\Core\showNav;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="<?=$Constantes::WEB_ROOT?>css/style.css">
    <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 mb-3 float-right <?=showNav()?>">
  <a class="navbar-brand " href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/accueil">Home</a>
      </li>
      
      <li class="nav-item dropdown <?=hidden(["ROLE_ETUDIANT","ROLE_AC"])?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Attaché
        </a>
        <div class="dropdown-menu row" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="/listerac">Lister Attaché</a>
          <a class="dropdown-item" href="/addattache">Ajouter Attaché</a>
        </div>
        <li class="nav-item dropdown <?=hidden(["ROLE_ETUDIANT"])?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Module
        </a>
        <div class="dropdown-menu row" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="/listemodule">Lister Module</a>
          <a class="dropdown-item" href="/addmodule">Ajouter Module</a>
          <a class="dropdown-item" href="/affecter">Affecter Module</a>
        </div>
      </li>
      <li class="nav-item dropdown <?=hidden(["ROLE_ETUDIANT","ROLE_AC"])?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Classe
        </a>
        <div class="dropdown-menu row" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="/listeclasse">Lister Classe</a>
          <a class="dropdown-item" href="/addClasse">Ajouter Classe</a>
        </div>
      </li>
      <li class="nav-item dropdown <?=hidden(["ROLE_ETUDIANT","ROLE_AC"])?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Professeur
        </a>
        <div class="dropdown-menu row" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="/listeprofesseur">Lister Professeur</a>
          <a class="dropdown-item" href="/addProf">Ajouter Professeur</a>
        </div>
      </li>
      <li class="nav-item dropdown <?=hidden(["ROLE_RP"])?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= Role::is_AC()?"Inscription":"Espace Etudiant"?></a>
        <div class="dropdown-menu row" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href=<?=Role::is_Etudiant()?"/listedemande":"/inscription"?>><?=Role::is_AC()?"Inscrire":"Demande"?></a>
          <a class="dropdown-item <?=hidden(["ROLE_RP","ROLE_ETUDIANT"])?>" href="/listeretudiant">Liste des Etudiants</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['user-connect'][0]->nom_complet?>
        </a>
        <div class="dropdown-menu row" aria-labelledby="navbarDropdown" id="drop">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="/logout">Deconnexion</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
</ul>
  </div>
</nav>
<div class="">
 
<?=$content_for_views?>    

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></body>
<script src="<?=$Constantes::WEB_ROOT?>js/script.js"></script>
</html>