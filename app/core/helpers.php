<?php

namespace App\core;

class Helpers{
    public static function redirect($path){
        header("LOCATION: ".DOMAIN.$path);
    }
}