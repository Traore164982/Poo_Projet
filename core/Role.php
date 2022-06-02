<?php
namespace App\Core;
use App\Core\Session;

class Role{
    private Session $session;



    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    public static function getRole(){
        return $_SESSION['user-connect'][0]->role;
    }
    public static function is_connect():bool{
        return isset($_SESSION['user-connect']);
    }
    public static function is(){
        return self::is_connect() && (self::getRole()=="ROLE_Etudiant" || self::getRole()=="ROLE_AC" || self::getRole()=="ROLE_RP");
    }
    public static function is_RP(){
        return self::is_connect() && self::getRole()=="ROLE_RP";
    }
    
    public static function is_AC(){
        return self::is_connect() && self::getRole()=="ROLE_AC";
    }

    public static function is_Etudiant(){
        return self::is_connect() && self::getRole()=="ROLE_ETUDIANT";
    }

}