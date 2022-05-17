<?php
namespace App\Model;

class Professeur extends Personne{
    private string $grade;
    
    public function __construct()
    {
        parent::$role="ROLE_PROFESSEUR";
    }
 /*    public static function role():string{
        return 'ROLE_PROFESSEUR';
    } */
        /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
     public function classes():array{
         return [];
     }
     
     public function insert():int{
        $db = parent::database();
        $db->connexionDB();
        $sql="INSERT INTO `personne` (`nom_complet`, `role`,`grade`) VALUES (?,?,?)";
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->grade]);
        $db->closeConnexion();
        return $result;
    }
}