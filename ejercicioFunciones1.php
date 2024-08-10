<?php

function imprimirNombre($nombre, $Apellido= ""){

    //Rutimas(instrucciones)

    echo "hola ". $nombre." ". $Apellido. "<br/>";
}

//Llamar a la funcion

imprimirNombre("Oscar");
imprimirNombre("Pedro", "paez");
imprimirNombre("Jose", "Martinez");

?>