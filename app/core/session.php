<?php

namespace App\core;

class Session {

    public static function Start(){
        @session_start(); // @ for skip the session error
    }

    public static function Set($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function Get($key){
        return isset($_SESSION[$key])? $_SESSION[$key] : null;
    }

    public static function Stop($key){
        session_destroy();
    }
}