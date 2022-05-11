<?php
class AC extends User{
//private array $inscriptions;

    public function inscriptions():array{
        return [];
    }
    public function __construct()
    {
         parent::$role="ROLE_AC";
         $this->inscriptions=[];
    }

    public static function findAll(): array
    {
        $sql= "select * from ".parent::table()." where role like'".parent::$role."'";
        echo $sql;
        return [];
    }
}