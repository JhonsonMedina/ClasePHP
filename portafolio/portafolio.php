<?php  include("cabecera.php");   ?>
<?php  include("conexion.php");   ?>
<?php


if($_POST){
$nombre= $_POST['nombre'];
$descripcion= $_POST['Descripcion'];

$fecha= new DateTime();

$imagen =$fecha->getTimesTamp()."_".$_FILES['archivo']['name'];

$imagen_temporal= $_FILES['archivo']['tmp_name'];

move_uploaded_file($imagen_temporal,"imagenes/". $imagen);

$objConexion= new conexion();
$sql="INSERT INTO `proyectophp` (`id`, `Nombre`, `Imagen`, `Descripción`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
$objConexion->ejecutar($sql);
header("location: portafolio.php");

}
// "DELETE FROM proyectophp WHERE `proyectophp`.`id` = 3"?


if($_GET){
    $id= $_GET['borrar'];
    $objConexion = new conexion();

    $imagen=$objConexion->consultar("SELECT imagen FROM `proyectophp` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']); 

    $sql= "DELETE FROM proyectophp WHERE`proyectophp`.`id`=".$id;
    $objConexion->ejecutar($sql);
    header("location: portafolio.php");

}
//Para consultar formulario

$objConexion= new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyectophp`");

?>

</br>

<div class="container">
    <div class="row">
        <div class="col-md-6">

        <div class="card">
    <div class="card-header"> Datos del Proyecto</div>
    <div class="card-body">
       
    <form action="portafolio.php" method="post" enctype="multipart/form-data">

Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
</br>
Imagen del proyecto: <input required class="form-control" type="file" name="archivo" id="">
</br>
Descripcion:
   <textarea required class="form-control" name="Descripcion" id="" rows="3"></textarea>
   </br>

   <input class="btn btn-success" type="submit" value="Enviar Proyecto">

   </form>

    </div>
   
</div>
            
        </div>

        <div class="col-md-6">

        <div class="table-responsive">

<table class="table table-primary">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php  foreach($proyectos as $proyecto) { ?>

    <tr>
            <td><?php echo $proyecto['id'];  ?></td>
            <td><?php echo $proyecto['Nombre'];  ?></td>
      
            <td>

        <img width="60" src="Imagenes/<?php echo $proyecto['Imagen']; ?>"mm alt="" srcset="">
           

            </td>

            <td><?php echo $proyecto['Descripción'];  ?></td>
            <td> <a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>" >Eliminar</a></td>
         
        </tr>

        <?php }  ?>

    </tbody>
</table>
</div>
            
        </div>
        
    </div>
</div>


<?php  include("pie.php");   ?>