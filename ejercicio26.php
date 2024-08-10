<?php

class persona{

public $nombre;   // Propiedades
private $edad;
protected $altura;


function __construct($nuevoNombre){

    $this->nombre=$nuevoNombre;

}

public function asignarNombre($nuevoNombre){     //Acciones o metodos...

$this->nombre=$nuevoNombre;

}
public function imprimirNombre(){

    echo " hola soy ".$this->nombre;
}

public function mostrarEdad(){

    $this-> edad=20;
    return $this-> edad;

}
}

$objAlumno = new persona("Oscar jj"); // instancia o creacion de un objeto
//$objAlumno-> asignarNombre ("Oscar jjjj");
$objAlumno->imprimirNombre();





?>