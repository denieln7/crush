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

echo '<pre>';
print_r( $database->info() );
echo '</pre>';
