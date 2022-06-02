<?php
namespace App\Model;
use App\Model\AC;
use App\Core\Model;
use App\Model\AnneeScolaire;

class Inscription extends Model{
    private int $id;
    private int $ac_id;
    private int $classe_id;
    private int $etudiant_id;    
    private int $anneescolaire_id;


    public function __construct()
    {
        parent::table();
    }

/*     public function insert():int{
        $db = parent::database();
        $db->connexionDB();
        $sql="INSERT INTO `inscription` (`ac_id`, `etudiant_id`) VALUES (?,?)";
        $result=$db->executeUpdate($sql,[$this->id,$]);
        $db->closeConnexion();
        return $result;
    } */

    public function ac():AC{
        $sql = "select p.* from inscription i,personne 
                p where p.id=i.ac_id
                and p.role like 'ROLE_AC' 
                and i.id=".$this->id;
        return new AC(); 
    }
    public function anneeScolaire():AnneeScolaire{
        $sql = "select p.* from annee_scolaire a,inscription i 
                where a.id=i.annee_id 
                and i.id=".$this->id;
        return new AnneeScolaire();
    }

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
     * Get the value of ac_id
     */ 
    public function getAc_id()
    {
        return $this->ac_id;
    }

    /**
     * Set the value of ac_id
     *
     * @return  self
     */ 
    public function setAc_id($ac_id)
    {
        $this->ac_id = $ac_id;

        return $this;
    }

    /**
     * Get the value of etudiant_id
     */ 
    public function getEtudiant_id()
    {
        return $this->etudiant_id;
    }

    /**
     * Set the value of etudiant_id
     *
     * @return  self
     */ 
    public function setEtudiant_id($etudiant_id)
    {
        $this->etudiant_id = $etudiant_id;

        return $this;
    }

    /**
     * Get the value of classe_id
     */ 
    public function getClasse_id()
    {
        return $this->classe_id;
    }

    /**
     * Set the value of classe_id
     *
     * @return  self
     */ 
    public function setClasse_id($classe_id)
    {
        $this->classe_id = $classe_id;

        return $this;
    }

    /**
     * Get the value of anneescolaire_id
     */ 
    public function getAnneescolaire_id()
    {
        return $this->anneescolaire_id;
    }

    /**
     * Set the value of anneescolaire_id
     *
     * @return  self
     */ 
    public function setAnneescolaire_id($anneescolaire_id)
    {
        $this->anneescolaire_id = $anneescolaire_id;

        return $this;
    }

    public function insert():int{
        $db = parent::database();
        $db->connexionDB();
        $sql="INSERT INTO `inscription` (`ac_id`, `etudiant_id`, `classe_id`,`annee_scolaire_id`) VALUES (?,?,?,?)";
        $result=$db->executeUpdate($sql,[$this->ac_id,$this->etudiant_id,$this->classe_id,$this->anneescolaire_id]);
        $db->closeConnexion();
        return $result;
    }
}