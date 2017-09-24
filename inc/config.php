<?php

// show all errors
ini_set('display_startup_errors', 'On');
ini_set('display_errors','On');
error_reporting(-1);

// require stuff
require 'vendor/autoload.php';

// Using Medoo namespace
use Medoo\Medoo;

// connect to database
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'crush',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root'
  ]);

// $db = new PDO(
//   "{$database}")

// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// echo '<pre>';
// print_r( $database->info() );
// echo '</pre>';

// global functions
// require_once 'functions-general.php';
// require_once 'functions-string.php';
// require_once 'functions-post.php';

// auth
// require_once 'vendor/PHPAuth/languages/en_GB.php';
// require_once 'vendor/PHPAuth/config.php';
// require_once 'vendor/PHPAuth/auth.php';
//
// $auth_config = new config($db);
// $auth = new Auth($db, $auth_config, $lang);
//
// var_dump( $auth_config );
// var_dump( $auth );
