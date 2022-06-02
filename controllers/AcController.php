<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\AC;

class AcController extends Controller{
    
    public function listerAc(){
        $acs = AC::findAll();
        $data=[
            "acs"=>$acs,
            "title"=>"Liste des Attachés",
            "btn"=>"Ajouter Attaché"];
        
            $this->render('ac/liste',$data);
    }

    public function addAc(){
        if($this->request->isGet()){
            $this->render('ac/addAc');
        }
   }

    public function addAttache(){
    if ($this->request->isPost()){
        extract($_POST);
        $ac = new AC();
        $ac -> setNomComplet($_POST["nom"]);
        $ac -> setlogin($_POST["login"]);
        $ac -> setPassword($_POST["password"]);
        $ac->insert();
    }

    }

}