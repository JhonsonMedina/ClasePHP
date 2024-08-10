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

class trabajador extends persona{

public $puesto;
public function presentarseComoTrabajador(){
    echo "hola soy ".$this->nombre." y soy un ".$this->puesto;
}

}

$objTrabajador = new trabajador(); // instancia o creacion de un objeto
$objTrabajador-> asignarNombre ("Oscar");
$objTrabajador->puesto="Profesor";

$objTrabajador-> presentarseComoTrabajador();




?>