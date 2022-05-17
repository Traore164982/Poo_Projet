<?php
namespace App\Core;
use App\Core\Model;
use PDO;

class Database extends Model{
    private \PDO|null $pdo=null; 
    public function connexionDB():void{
        $this->pdo=new \PDO("mysql:dbname=poo_projet;host=localhost:3306","root","");
    }

    public function executeSelect(string $sql,array $data=[],bool $single=false):object|array|null{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        if($single){
            $result=$query->fetch(\PDO::FETCH_OBJ);
           if ($query->rowCount()==0) {
                return null;
            }
        }else{
            $result=$query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
    

    public function executeUpdate(string $sql,array $data=[]):int{
        $query=$this->pdo->prepare($sql);
        $query->execute($data);
        return $query->rowCount();
    }
    
    public function closeConnexion():void{
        $this->pdo=null;
    }
}