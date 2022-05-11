<?php
class Professeur extends Personne{
    public function __construct()
    {
        self::$role="ROLE_PROFESSEUR";
    }
     public function classes():array{
         return [];
     }
     public static function findAll():array{
         $sql = "select * from".self::table()."where role like'".self::$role."'";
        echo $sql;
        return [];
     }
}