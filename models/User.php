<?php
namespace App\Model;

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
    public static function findAll():array
    {
        $db= self::database();
        $db->connexionDB(); 
        $sql = "select * from ".parent::table()." where role not like'".Professeur::getRolee()."'";
        $result=$db->executeSelect($sql);
        $db->closeConnexion();
        echo $sql;
        return $result;
    }
}