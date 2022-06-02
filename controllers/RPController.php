<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\RP;

class RPController extends Controller{
    
    public function listerRp(){
        $rps = RP::findAll();
        $this->render(
            'rp/listeRp',[
                "rps"=>$rps,
                "title"=>"Liste des Responsables Pédagogiques"
            ]);
    }
}