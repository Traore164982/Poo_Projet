<?php
abstract class Personne extends Model{
    //Attributs d'instances
    protected int $id;
    protected string $nomComplet;
    protected static string $role;
    //Attributs de Classe
    private static int $nbrePersonne;

    //Methodes de la Classe
    public function __construct()
    {
        parent::table();
    }

	public function getId():int{
		return $this->id;
	}
    public function getNomComplet():string{
        return $this->nomComplet;
    }
    public static function getRole():string{
        return self::$role;
    }

    public static function getNbrPersonne():int{
        return self::$nbrePersonne;
    }


    public function setId(int $id):self{
      $this->id=$id;
      return $this;
    }
    public function setNomComplet(string $nomComplet):self{
      $this->nomComplet=$nomComplet;
      return $this;
    }
    public static function setRole($role){
        self::$role;
        return $role;
    }
    public static function setNbrPersonne(int $nbrePersonne):void{
        self::$nbrePersonne=$nbrePersonne;
    }
    public static function findAll():array{
        $sql = "select * from personne where role like '".self::$role."'";
        echo $sql;
        return [];
    }



}