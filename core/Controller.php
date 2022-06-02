<?php
namespace App\Core;

use App\Core\Constantes;
use App\Core\Role;

class Controller{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request= $request;
    }
    public function render(string $path,array $data=[]){
        $data["Constantes"]=Constantes::class;
        $data["request"] = $this->request;
        ob_start();
        extract($data);
        require_once(Constantes::ROOT()."templates/".$path.".html.php");
        $content_for_views = ob_get_clean();
        require_once(Constantes::ROOT()."templates/layout/base.html.php");
    }

    public function redirectToRoute(string $uri){
        header("location:".Constantes::WEB_ROOT.$uri);
    }

        /**
         * Set the value of session
         *
         * @return  self
         */ 
        public function setSession($session)
        {
                $this->session = $session;

                return $this;
        }
}