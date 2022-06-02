<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Etudiant;

class  EtudiantController extends Controller{

    public function listerEtudiant(){
        $etudiants = Etudiant::findAll();
        $this->render(
            'etudiant/listeEtudiant',[
                "etudiants"=>$etudiants,
                "title"=>"Liste des Etudiants"
            ]);
    }
}