<?php

function dd($data):void{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function ddA(array $data):void{
    echo "<pre>";
    for($i=0; $i < count($data);$i++){ 
        var_dump($data[$i]);        
    }
    echo "</pre>";
}