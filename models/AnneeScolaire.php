<?php
namespace App\Model;
use App\Core\Model;

use function App\Core\dd;

class AnneeScolaire extends Model{
    
    public function __construct()
    {
        parent::table();
    }
    
    public static function findAll():array{
        $db = self::database();
        $db->connexionDB();
        $sql = 'select * from annee_scolaire where etat=1';
        $results = $db->executeSelect($sql);
        $db->closeConnexion();
        return $results;
    }
}