<?php
namespace App\Model;

use function App\Core\dd;

abstract class User extends Personne{
    protected string $login;
    protected string $password;

    public function getLogin():string{
        return $this->login;
    }
    public function getPassword():string{
        return $this->password;
    }

    public function setlogin($login){
        $this->login=$login;
        return $this;
    }
    public function setPassword($password){
        $this->password=$password;
        return $this;
    }
    public static function findUserByLoginAndPassword(string $login,string $password):object|null|array{
        $result =parent::findBy("select * from personne where login=? and password=?",[$login,$password],true);
        return $result;
    }
    public static function findAllUser(string $nom_complet="nom_complet"):array
    {
        $db= self::database();
        $db->connexionDB(); 
        $sql = "select * from ".parent::table()." where role not like '".Professeur::getRolee()."' order by ".$nom_complet."";
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }

    public static function findAll():array
    {
        $db= self::database();
        $db->connexionDB(); 
        $sql = "select * from ".parent::table()." where role like '".self::getRolee()."'";
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        return $result;
    }
/* 
    public function findMaxid():object{
        $db= self::database();
        $db->connexionDB();
        $sql = "select Max(id) from ".parent::table();
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        return $result[0];
    } */

}