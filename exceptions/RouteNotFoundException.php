<?php
namespace App\Exception;

class RouteNotFoundException extends \Exception{
    public $message = "Page Not Found, error 404";
}