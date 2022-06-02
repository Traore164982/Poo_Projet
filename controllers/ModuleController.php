<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Module;

use function App\Core\dd;

class ModuleController extends Controller{
    
    public function add(){
        
        if ($this->request->isGet()) {
            $this->render('module/add');
        }else{
            extract($_POST);
            $module = new Module();
            $module->setLibelle($_POST['libelle']);
            $module->insert();
            $this->redirectToRoute('addmodule');
        }
    }
    public function liste(){
        $modules = Module::findAll();
        $data = [
            "modules"=>$modules,
            "title"=>"Liste des Modules",
            "btn"=>"Ajouter Module"
        ];
        $this->render('module/liste',$data);
    }
}