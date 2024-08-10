<?php


if($_POST){


$A= $_POST['valorA'];
$B= $_POST['valorB'];

if($A > $B){

   echo "El valor de A es mayor que el valor de B";

} else{

    echo "El valor A es igual al de B";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores aritmeticos</title>
</head>
<body>

<form action="ejercicio9.php" method="post">

valorA
       <input type="text" name="valorA" id="">
       <br/>

valorB
       <input type="text" name="valorB" id="">
       <br/>
       
       <input type="submit" value= "Enviar">

    </form>

    
</body>
</html>