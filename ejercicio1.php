<?php

if($_POST){


//Recibir informacion del formulario Html( metodo Post)
$nombre = $_POST['txtNombre'];

echo "Bienvenido ".$nombre

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

    <form action="ejercicio1.php" method="post">
       <input type="text" name="txtNombre" id="">
       <br/>
       <input type="submit" value= "Enviar">

    </form>
</body>
</html>