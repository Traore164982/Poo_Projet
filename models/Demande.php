<?php
namespace App\Model;

use App\Core\Model;

use function App\Core\dd;

class Demande extends Model{
    private int $id;
    private string $motif;
    private string $date;
    

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
     * Get the value of motif
     */ 
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */ 
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get the value of dateDemande
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of dateDemande
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->dateDemande = $date;

        return $this;
    }
    public static function findAll():array{
        $db = self::database();
        $db->connexionDB();
        $sql = 'select * from '.self::table();
        $results = $db->executeSelect($sql);
        $db->closeConnexion();
        return $results;
    } 
}