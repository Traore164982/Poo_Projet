<?php
namespace App\Controller;

use App\Model\User;
use App\Core\Controller;

class UserController extends Controller{

    public function listerUser(){
        $users = User::findAllUser();
        $this->render(
            'user/liste',[
                "users"=>$users,
                "title"=>"Liste des Utilisateurs"
            ]);
    }

}