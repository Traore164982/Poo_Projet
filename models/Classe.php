<?php
namespace App\Model;
use App\Core\Model;

use function App\Core\dd;

class Classe extends Model{
    private string $libelle;
    private string $filiere;
    private string $niveau;

    public function professeurs():array{
        return [];
    }

    public function __construct()
    {
        parent::table();
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

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function insert():int
    {
        $db = parent::database();
        $db->connexionDB();
        $sql="INSERT INTO `classe` (`libelle`, `filiere`, `niveau`) VALUES (?,?,?)";
        $result=$db->executeUpdate($sql,[$this->libelle,$this->filiere,$this->niveau]);
        $db->closeConnexion();
        return $result;
    }
}