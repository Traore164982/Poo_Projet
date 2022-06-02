<?php
namespace App\Core;

use App\Core\Session;
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
        $params = $this->request->getUri();
        unset($params[0]);
        $params = count($params)>=1 ? array_values($params) : [];
        if (isset($this->routes[$uri])) {
            $route=$this->routes[$uri];
            [$ctrlClass,$action]=$route;
        if (class_exists($ctrlClass) && method_exists($ctrlClass,$action)){
                $ctrl = new $ctrlClass($this->request);
                //Les vues accessibles sans connexion
                // Pour que toutes les pages accessibles ajouter * dans le tableau
                $free = ["SecurityController/authentification"];
                //extraire la
                $freetest=ctrlMethode($ctrl,$action);
                if (in_array("*",$free) || in_array($freetest,$free)) { //les Pages accessibles par Tout le monde
/*                     call_user_func(array($ctrl,$action));
 */                    call_user_func_array([$ctrl,$action],$params);
                }elseif(Session::isConnect()){ // Tester si session existe
/*                     call_user_func(array($ctrl,$action));
 */                    call_user_func_array([$ctrl,$action],$params);

                }else {
                    //Redirection vers login
                
                    throw new RouteNotFoundException();
                }
            }else {
                throw new RouteNotFoundException();
            }
        }else{ 
            throw new RouteNotFoundException();
        }
    }

}