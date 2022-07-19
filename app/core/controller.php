<?php

namespace App\core;

class Controller {
    public function view($path, $param=[]){
        $param? extract($param) : null;
        require_once(VIEWS.$path.".php");
    }

    
}