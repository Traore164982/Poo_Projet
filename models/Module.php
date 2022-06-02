<?php
namespace App\Model;

use App\Core\Database;
use App\Core\Model;

class Module extends Model{
    private int $id;
    private string $libelle;    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function insert(): int
    {
        $db = parent::database();
        $db->connexionDB();
        $sql="INSERT INTO `module` (`libelle`) VALUES (?)";
        $result=$db->executeUpdate($sql,[$this->libelle]);
        $db->closeConnexion();
        return $result;

    }
    
}