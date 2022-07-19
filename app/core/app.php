<?php

namespace App\core;

class App
{
    private $controller = "homeController";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url(){
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode( '/', $_SERVER['QUERY_STRING']) ;
            $this->controller = isset($url[0])? $url[0].'Controller' : 'homeController';
            $this->method = !empty($url[1]) ? $url[1] : 'index'; 
            unset($url[0], $url[1]); // remove index 0, 1 to get any paramameters
            $this->params = array_values($url);
        }
    }

    private function render(){
        $controller = "App\controllers\\".$this->controller;
        if(class_exists($controller)){
            $controller = new $controller;
            if(method_exists($controller,$this->method)){
               call_user_func_array([$controller, $this->method], $this->params);
            }else{
                echo "method not exist";
            }
        }else{
            echo 'class ('. $this->controller .') not exisit';
        }
    }
}
