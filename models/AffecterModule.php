<?php
namespace App\Model;
use App\Core\Model;

class AffecterModule extends Model{
    private int $id;
    private int $module_id;
    private int $personne_id;
    private int $rp_id;
     

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
     * Get the value of module_id
     */ 
    public function getModule_id()
    {
        return $this->module_id;
    }

    /**
     * Set the value of module_id
     *
     * @return  self
     */ 
    public function setModule_id($module_id)
    {
        $this->module_id = $module_id;

        return $this;
    }

    /**
     * Get the value of personne_id
     */ 
    public function getPersonne_id()
    {
        return $this->personne_id;
    }

    /**
     * Set the value of personne_id
     *
     * @return  self
     */ 
    public function setPersonne_id($personne_id)
    {
        $this->personne_id = $personne_id;

        return $this;
    }

    /**
     * Get the value of rp_id
     */ 
    public function getRp_id()
    {
        return $this->rp_id;
    }

    /**
     * Set the value of rp_id
     *
     * @return  self
     */ 
    public function setRp_id($rp_id)
    {
        $this->rp_id = $rp_id;

        return $this;
    }

    public static function findAll():array{
        $db = parent::database();
        $db->connexionDB();
        $sql="SELECT * from `affecter`";
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
    public function insert(): int
    {
        $db = parent::database();
        $db->connexionDB();
        $sql="INSERT INTO `affecter` (`module_id`,`personne_id`,`rp_id`) VALUES (?,?,?)";
        $result=$db->executeUpdate($sql,[$this->module_id,$this->personne_id,$this->rp_id]);
        $db->closeConnexion();
        return $result;
    }
}