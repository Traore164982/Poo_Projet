<?php
namespace App\Core;
function dd($data):void{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function ctrlMethode($ctrl,$action){
    return explode("\\",$ctrl::class)[2]."/".$action;
}

function showNav(){
    if (isset($_SESSION["user-connect"])) {
        return "";
    }
    return "d-none";
}


function hidden(array $except=[],$hidden=true){
    foreach ($except as $pers) {
        if (Role::getRole()==$pers){
            return $hidden?"d-none":"disabled";
        }
    }
    return "";
}