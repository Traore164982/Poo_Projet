<?php

namespace App\Controller;

use App\Model\Demande;
use App\Core\Controller;

use function App\Core\dd;

class DemandeController extends Controller{

    public function demande(){
        if ($this->request->isGet()) {
            $this->render('demande/demande');
        }else {
            extract($_POST);
            
        }
    }

    public function liste(){
        $demandes = Demande::findAll();
        $data = [
            "demandes"=>$demandes,
            "title"=>"Liste des Demandes",
            "btn"=>"Ajouter une Demande"
        ];
        $this->render('demande/liste',$data);
    }

    public function edit($id){
        if ($this->request->isGet()) {           
            $demande = Demande::findById($id);
            $demande = ["demande"=>$demande,
            "title"=>"Edit",
            "btn"=>"Retour à la liste"
        ];
        $this->render('demande/demande',$demande);
        }
    }
}