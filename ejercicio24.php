<?php

class persona{

public $nombre;   // Propiedades
private $edad;
protected $altura;

public function asignarNombre($nuevoNombre){     //Acciones o metodos...

$this->nombre=$nuevoNombre;

}

public function mostrarEdad(){

    $this-> edad=20;
    return $this-> edad;

}
}

$objAlumno = new persona(); // instancia o creacion de un objeto
$objAlumno-> asignarNombre ("Oscar");

$objAlumno2 = new persona();
$objAlumno2-> asignarNombre ("Pedro");

echo $objAlumno-> nombre;
echo $objAlumno2-> nombre;
echo $objAlumno2-> mostrarEdad();



?>