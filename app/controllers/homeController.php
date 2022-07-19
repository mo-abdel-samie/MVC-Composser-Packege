<?php

namespace App\controllers;
use App\core\controller;

class HomeController extends Controller{

    public function index(){
        $title = "Home Page";
        $h1 = "Welcome at Home Page";
        return $this->view("home/index", compact(['title', 'h1']));
    }

    public function add(){
        echo "add user";
    }

}