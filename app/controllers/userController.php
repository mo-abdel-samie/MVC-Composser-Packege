<?php

namespace App\controllers;

use App\core\Controller;
use App\core\Helpers;
use App\core\Session;
use App\models\User;
use Rakit\Validation\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        Session::Start();
    }

    public function login()
    {
        $title = "Login Page";
        return $this->view('auth/login', compact(['title']));
    }

    public function vrefiy()
    {
        $validator = new Validator();

        $validation = $validator->make($_POST, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $validation->validate();

        if($validation->fails()){
            $errors = $validation->errors();
            echo"<pre>";
            print_r($errors);
            echo "Error";
            return;
        }

        $user = new User();
        $userData = $user->GetUser($_POST['email'], $_POST['password']);
        
        if($userData){
            Session::Set('user', $userData);
            Helpers::redirect('dashboard');
        }else{
            Helpers::redirect('user/login');
            return;
        }
        
    }

    public function logout(){
        Session::Stop('user');
        Helpers::redirect('home');
    }

    public function register()
    {
        $title = "Register Page";
        return $this->view('auth/register', compact(['title']));
    }

    public function add(){
        $user = new User();
        $user->InsertUser($_POST['name'], $_POST['email'], $_POST['password']);

        $userData = $user->GetUser($_POST['email'], $_POST['password']);

        if ($userData) {
            Session::Set('user', $userData);
            Helpers::redirect('dashboard');
        } else {
            Helpers::redirect('user/login');
            return;
        }
    }
}
