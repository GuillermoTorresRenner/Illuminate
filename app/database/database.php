<?php
use Illuminate\Database\Capsule\Manager as Database;

//instanciamos una base de datos para poder efectuar la conexion
$database =new Database();
$database->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'animales',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    
]);

//establecemos la conexion de la base de datos como global
$database->setAsGlobal();
//iniciamos la conexion con la base de datos
$database->bootEloquent();
