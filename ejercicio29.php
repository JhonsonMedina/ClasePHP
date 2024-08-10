<?php

$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasenia);
     $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    // Para ver base de datos

    $sql ="SELECT * FROM `fotos`";

    $sentencia = $conexion-> prepare($sql);
    $sentencia-> execute();

    $resultado = $sentencia->fetchAll();

    print_r($resultado);

    foreach ($resultado as $foto){
       print_r($foto);
       //echo $foto['nombre']."<br/>";
    }


     echo "conexion establecida";

}catch(PDOException $error){

echo "conexion erronea".$error;

}



?>