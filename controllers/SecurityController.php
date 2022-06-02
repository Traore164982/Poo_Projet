<?php
namespace App\Controller;

use App\Model\User;
use App\Core\Request;
use App\Core\Session;
use App\Core\Constantes;
use App\Core\Controller;

class SecurityController extends Controller{
    protected Request $request;

    public function authentification(){
         if($this->request->isGet()){
             $this->render('security/login');
         }else{
            extract($_POST);
            $user = User::findUserByLoginAndPassword($_POST['login'],$_POST['password']);
            //1-Recuperer les données et tester si User exist
            //2-Sauvegarder les données de user dans la session
            //3-Redirection dans la page Appropriée
            if($user){

                $_SESSION["user-connect"] = $user;
                $this->redirectToRoute('accueil');
            }else{
                $this->redirectToRoute("login");
            }
         }
    }

    public function accueil(){
        if($this->request->isGet()){
            $this->render('security/accueil');
        }
   }

    public function logout(){
        unset($_SESSION["user-connect"]);
        $this->redirectToRoute("login");
        session_destroy();
        exit();
    }
}