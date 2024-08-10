<?php

$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasenia);
     $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg')"; 
    
    $conexion->exec($sql); //$sql es la constante, de lo copiado de la base de datos

     echo "conexion establecida";

}catch(PDOException $error){

echo "conexion erronea".$error;

}



?>