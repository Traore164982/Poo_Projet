<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Classe;

class ClasseController extends Controller{
    
    public function addClasse(){
        if($this->request->isGet()){
            $this->render('classe/add');
        }else {
                extract($_POST);
                $classe = new Classe();
                $classe->setLibelle($_POST["niveau"]." ".$_POST["filiere"]);
                $classe->setFiliere($_POST["filiere"]);
                $classe->setNiveau($_POST["niveau"]);
                $classe->insert();
                $this->redirectToRoute('listeclasse');
        }
    }
    public function liste(){
        $classes = Classe::findAll();
        $data = [
            "classes"=>$classes,
            "title"=>"Liste des Classes",
            "btn"=>"Ajouter Classe"
        ];
        $this->render(
            'classe/liste',$data);
    }
}