<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Module;
use App\Model\Professeur;

use function App\Core\dd;

class ProfesseurController extends Controller{
    
    public function affecterClasse(){

    }

    public function professeur(){
        if($this->request->isGet()){
            $this->render('professeur/addProfesseur');
        }else{
        extract($_POST);
        if($poster==""){
            $prof = new Professeur();
            $prof->setNomComplet($nom);
            $prof->setGrade($grade);
            $prof->insert();
        }else{
            $prof = new Professeur();
            $prof->setNomComplet($nom);
            $prof->setGrade($grade);
            $prof->setId($id);
            $prof->update();
        }
        $this->redirectToRoute('listeprofesseur');
    }
   }

    public function listerProfesseur(){
        $profs = Professeur::findAll();
        $data = [
            "profs"=>$profs,
            "title"=>"Liste des Professeurs",
            "btn"=>"Ajouter Professeur"
        ];
        $this->render('professeur/liste',$data);
    }
    
    public function detail($id){
        if ($this->request->isGet()) {
            $prof = Professeur::findById($id);
            $profmodule = Professeur::findProfModule($id);
            $module = Module::findAll();
            $prof = ["prof"=>$prof,
            "profmodule"=>$profmodule,
            "module"=>$module,
            "title"=>"Details du Professeur : $prof->nom_complet",
            "btn"=>"Retour à la liste"
        ];
            $this->render('professeur/detail',$prof);
        }
    }

    public function edit($id){
        if ($this->request->isGet()) {           
            $prof = Professeur::findById($id);
            $prof = ["prof"=>$prof,
            "title"=>"Edit",
            "btn"=>"Retour à la liste"
        ];
        $this->render('professeur/addProfesseur',$prof);
        }
    }
}