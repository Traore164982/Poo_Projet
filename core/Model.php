<?php 
namespace App\Core;

use App\Model\User;

class Model implements IModels{
    protected static Database|null $database=null;

    public static function database():Database{
        return self::$database=new Database();
    }
    public static function table():string{
        $table = get_called_class();
        $table = str_replace("App\\Model\\","",$table);
        $table =($table == "User" or $table == "AC"  or $table == "RP" or $table == "Professeur" or $table == "Etudiant")?"personne":strtolower($table);
        return $table;
    }
    public static function selected(array $t){
        $v="";
        foreach ($t as $key => $value){
            if (count($t)==1) {
                $v = $key."=".$value;
            }else {
            $v = $v." ".$key."=".$value." and ";
            }
        }
        echo "select * from ".self::getClasse()." where ".substr($v,0,-5);
    }
    public function insert():int{
        return 0;
    }
    public function update():int{
        return 0;
    }
    public static function delete(int $id):int{
        $db =self::database();
        $db->connexionDB();
        $sql="delete from'".self::table()."'where id=$id";
        $result = $db->executeUpdate($sql);
        $db->closeConnexion();
        echo $sql;
        return $result ;
    }
    final public static function getClasse():string{
        $table = get_called_class();
        $table = ($table == "User" or $table = "AC"  or $table == "RP" or $table == "Professeur" or $table == "Etudiant")?"personne":strtolower($table);
        $table = str_replace("App\\Model\\","",$table);
        return strtolower($table);

    }
    
    public static function findAll():array{
        $db = self::database();
        $db->connexionDB();
        $sql = 'select * from '.self::table();
        $results = $db->executeSelect($sql);
        $db->closeConnexion();
        return $results;
    }
    public static function findById(int $id):object|null{
        $db = self::database();
        $db->connexionDB();
        $sql = "select * from ".self::table()." where id=$id";
        $result = $db->executeSelect($sql);
        $db->closeConnexion();
        return $result[0];
    }
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array{
        $db = self::database();
        $db->connexionDB();
        $result=$db->executeSelect($sql,$data);
        $db ->closeConnexion();
        return $result;
    }

    

    /* public static function findAly(array $data=null,array $dat):object|null|array{
        $db = self::database();
        $db->connexionDB();
        $result=$db->executeSelect();
        $db ->closeConnexion();
        return $result;
    } */

    
}