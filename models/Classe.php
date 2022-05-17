<?php
namespace App\Model;
use App\Core\Model;

class Classe extends Model{
    
    public function professeurs():array{
        return [];
    }

    public function __construct()
    {
        parent::table();
    }
}