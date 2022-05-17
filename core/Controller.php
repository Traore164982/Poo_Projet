<?php
namespace App\Core;


class Controller{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request= $request;    
    }
    public function render(string $path,array $data=[]){
        $data["Constantes"]=Constantes::class;
        $data["request"] = $this->request;
        extract($data);
        require_once(Constantes::ROOT()."templates/".$path);
    }

    public function redirectToRoute(string $uri){
        header("location:".Constantes::WEB_ROOT.$uri);
    }
}