<?php
namespace App\Model;

use App\Model\User;

class AC extends User{
//private array $inscriptions;

    public function inscriptions():array{
        return [];
    }
    public function __construct()
    {
         parent::$role="ROLE_AC";
         $this->inscriptions=[];
    }

    public function insert():int
    {
        $db = parent::database();
        $db->connexionDB();
        $sql="INSERT INTO `personne` (`nom_complet`, `role`, `login`,`password`) VALUES (?,?,?,?)";
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password]);
        $db->closeConnexion();
        echo $sql;
        return $result;
    }
}