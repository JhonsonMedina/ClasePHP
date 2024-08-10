<?php
//Metodos estaticos

class unaClase{

    public static function unMetodo(){

echo "Hola soy un metodo estatico";

    }
}

$obj = new unaClase();
$obj-> unMetodo();

unaClase::unMetodo();



?>