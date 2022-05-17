<?php
namespace App\Model;
use App\Core\Model;

class inscription extends Model{
    private int $id;

    public function __construct()
    {
        parent::table();
    }

    public function ac():AC{
        $sql = "select p.* from inscription i,personne 
                p where p.id=i.ac_id
                and p.r ole like 'ROLE_AC' 
                and i.id=".$this->id;
        return new AC() ; 
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
}