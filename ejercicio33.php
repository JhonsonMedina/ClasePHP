<?php

$jsonContenido='[
{"nombre": "Jhonson", "apellido":"Medina"},
{"nombre": "Susana", "apellido":"Mujica"}
]';

$resultado= json_decode($jsonContenido);
//print_r($resultado);

foreach($resultado as $persona){

    echo ($persona->nombre)." ";($persona->apellido."</br>");

}

?>