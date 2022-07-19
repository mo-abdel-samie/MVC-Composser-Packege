<?php 

namespace App\models;

use App\core\Model;

class User extends Model{
    public function GetUser($email, $password){
        $user = $this->db()->row("SELECT * FROM users WHERE email = ? && password = ?", [$email, $password]);
        return $user;
    }

    public function InsertUser($name, $email, $password){
        $user = $this->db()->insert("users", [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'admin_id' => 1
        ]);
        return $user;
    }
}