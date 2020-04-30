<?php
require_once'../vendor/autoload.php';
//requerimos el arcivo donde declaramos la conexion a la base de datos
require_once 'database/database.php';
//importamos la calse animals para poder instacniarla
require_once 'model/animals.php';

//$animals= $database::table('animals')->where('id','=',1)->get();
//d($animals);

//echo $animals[0]->nombre;

/*en este fragmento, lo que hacemos es guardar en una variable objeto todos los resultados de la tabla de la base de datos. esto se hace mediante una funcion estatica
propia de MODEL, y por tanto heredada a la clase Animal, la cual se llama GET, y nos trae todos los resultados de la tabla asociada a esa clase modelo

*/
//$an=Animals::get();
//d($an);


//ahora hare una instancia de la clase Animals con objeto de poder guardar la info  de la clase modelo en la talbla asociada en la db
$animal = new Animals();
$animal->nombre='perro';
$animal->save();