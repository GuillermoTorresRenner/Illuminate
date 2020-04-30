<?php

use Illuminate\Database\Eloquent\Model;

class Animals extends Model {

    //Declaramos obigatoriamente esta variable table, la cual contiene el nombre de la tabla asociada en la DB con esta clase modelo
    protected $table= 'animals';

    //declaramos demas atributos de la clase. No olvidar que cada vez que se crea una tabla en la base de datos para asociarla, hay que agregar los campo
    //created_at y updated_at

    protected $fillable=['nombre'];


}