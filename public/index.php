<?php

// const variables
define("DS", DIRECTORY_SEPARATOR); // to use / or \ for Windos or Linux
define("ROOT", dirname(__DIR__));
define("APP", ROOT.DS.'app');

define("CONFIG", APP.DS. 'config' . DS);
define("VIEWS", APP.DS.'views'.DS);
define("MODELS", APP.DS. 'models' . DS);
define("CONTROLLERS", APP.DS. 'controllers' . DS);
define("CORE", APP.DS.'core'. DS);

// config
define("DOMAIN", "http://project.test/");
define("SERVER", "localhost");
define("DATABASE_TYPE", "mysql");
define("DADABASE", "test_ecommerce");
define("USERNAME", "root");
define("PASSWORD", "");

// require_once(CORE."/app.php");
// $app = new app();

require_once("../vendor/autoload.php"); // to make autoload by namespace
$app = new App\core\app();

// echo ROOT;
// echo "<br>";
// echo $_SERVER['QUERY_STRING'];

