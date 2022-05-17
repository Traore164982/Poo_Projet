<?php
namespace App\Model;

class Etudiant extends User{
    private string $matricule;
    private string $sexe;
    private string $adresse;

    public function __construct()
    {
         self::$role="ROLE_ETUDIANT";
    }


    public function getMatricule():string{
        return $this->matricule;
    }
    public function getSexe():string{
        return $this->sexe;
    }
    public function getAdresse():string{
        return $this->adresse;
    }
    public function setMatricule(string $matricule){
        $this->matricule=$matricule;
        return $this;
    }
    public function setSexe(string $sexe){
        $this->sexe=$sexe;
        return $this;
    }
    public function setAdresse(string $adresse){
        $this->adresse=$adresse;
        return $this;
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