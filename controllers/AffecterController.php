<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\AffecterModule;

use function App\Core\dd;

class AffecterController extends Controller{

    public function affecter(){
        if($this->request->isGet()){
            $this->render('affecter/affecter');
        }else{
            extract($_POST);
            dd($_POST);
            $affecter = new AffecterModule();
            $affecter->setModule_id($_POST['module']);
            $affecter->setPersonne_id($_POST['prof']);
            $affecter->setRp_id($_SESSION['user-connect'][0]->id);
            $affecter->insert();
            $this->redirectToRoute('affecter');
        }
    }
    public function liste(){
        if ($this->request->isGet()) {
            $affects= AffecterModule::findAll();
            $data=[
                "affects"=>$affects,
                "title"=>"Liste des Modules/professeur",
                "btn"=>"Affecter un module à un Prodesseur"
            ];
            $this->render("affecter/liste",$data);
        }
    }
}