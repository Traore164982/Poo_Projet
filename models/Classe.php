<?php
class Classe extends Model{
    
    public function professeurs():array{
        return [];
    }

    public function __construct()
    {
        parent::table();
    }
}