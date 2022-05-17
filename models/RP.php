<?php
namespace App\Model;

class RP extends User{
    public function __construct()
    {
        parent::$role="ROLE_RP";
    }
    
    public function insert():int{
        $db = parent::database();
        $db->connexionDB();
        $sql="INSERT INTO `personne` (`nom_complet`, `role`, `login`, `password`, `matricule`, `adresse`, `sexe`) VALUES (?,?,?,?,?,?,?)";
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->login,$this->password,$this->matricule,$this->adresse,$this->sexe]);
        $db->closeConnexion();
        return $result;
    }

}