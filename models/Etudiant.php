<?php
class Etudiant extends User{
    private string $matricule;
    private string $sexe;
    private string $adresse;

     public function __construct()
     {
         self::$role="ROLE_Etudiant";
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

    public static function findAll():array{
        $sql = "select * from".self::$table."where role like'".self::$role."'";
        echo $sql;
        return [];
    }
}