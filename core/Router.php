<?php
namespace App\Core;


use App\Exception\RouteNotFoundException;

class Router{
    private array $routes=[];
    private Request $request;

    public function __construct()
    {
        $this->request = new Request;
    }

    public function route(string $uri, array $action){
        $this->routes[$uri]=$action;
    }
    public function resolve(){ 
        $uri = "/".$this->request->getUri()[0];
        if (isset($this->routes[$uri])) {
            $route=$this->routes[$uri];
            [$ctrlClass,$action]=$route;
        if (class_exists($ctrlClass) && method_exists($ctrlClass,$action)){

                $ctrl = new $ctrlClass($this->request);
                call_user_func(array($ctrl,$action));
            }else {
                throw new RouteNotFoundException();
            }
        }else{ 
            throw new RouteNotFoundException();
        }
    }

}