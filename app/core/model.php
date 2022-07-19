<?php

namespace App\core;

use Dcblogdev\PdoWrapper\Database;

class Model
{
    static function db()
    {
        $options = [
            // required
            'username' => USERNAME,
            'database' => DADABASE,
            // optional
            'password' => PASSWORD,
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => SERVER,
            'port' => '3306'
        ];

        return $db = new Database($options);
    }
}
