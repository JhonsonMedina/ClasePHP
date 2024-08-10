<?php


if($_POST){


$A= $_POST['valorA'];
$B= $_POST['valorB'];

//suma, resta, multiplicacion. division

$suma = $A + $B;
$resta = $A - $B;
$multiplicacion = $A * $B;
$division = $A / $B;

echo "<br/>" .$suma;
echo "<br/>" .$resta;
echo "<br/>" .$multiplicacion;
echo "<br/>" .$division;


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

<form action="ejercicio5.php" method="post">

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