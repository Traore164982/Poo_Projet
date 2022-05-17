<?php
namespace App\Controller;

use App\Core\Controller;
use App\Core\Request;

class SecurityController extends Controller{
    protected Request $request;

    public function authentification(){
         if($this->request->isGet()){
             $this->render('security/login.html.php');
         }
    }

    public function deconnexion(){
        $this->redirectToRoute("/logout"); 
    }
}