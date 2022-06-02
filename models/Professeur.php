<?php
namespace App\Model;

use function App\Core\dd;

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

    public static function findAll():array{
        $db = self::database();
        $db->connexionDB();
        $sql = "select * from ".self::table()." where role like '".self::getRolee()."'";
        $results = $db->executeSelect($sql);
        $db->closeConnexion();
        return $results;
    }
    public function update():int{
        $db = parent::database();
        $db->connexionDB();
        $sql="UPDATE `personne` SET `nom_complet`=? , `grade`=? where `id`=?";
        $result=$db->executeUpdate($sql,[$this->nomComplet,$this->grade,$this->id]);
        $db->closeConnexion();
        return $result;
    }

    public static function findProfModule($id){
        $db = self::database();
        $db->connexionDB();
        $sql = "select * from affecter where personne_id=?";
        $results = $db->executeSelect($sql,[$id]);
        $db->closeConnexion();
        return $results;
    }
}