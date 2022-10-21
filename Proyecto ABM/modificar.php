<?php

$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda_de_ropa");

$id = $_GET['id'];

$consulta = "SELECT * FROM ropa WHERE id=$id";

$respuesta = mysqli_query($conexion, $consulta);

$datos = mysqli_fetch_array($respuesta);
 ?>

 <!doctype html>
 <html lang="es">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/styles.css">
   <title>Tienda de Ropa</title>
 </head>
 <body>
   <div class="container-fluid text-center">


       <?php

       $tipo=$datos["tipo"];
       $marca=$datos["marca"];
       $talle=$datos["talle"];
       $precio=$datos["precio"];
       $imagen=$datos['imagen'];?>

       <h2>Modificar</h2>
       <p>Ingrese los nuevos datos de la prenda.</p>
       </div>
       <div class="container-fluid">


       <form class="row gy-2 gx-3 align-items-center" action="" method="post" enctype="multipart/form-data">
         <div class="col-auto">
           <label>Tipo de prenda</label>
           <input type="text" name="tipo" placeholder="Tipo de Prenda" value="<?php echo "$tipo"; ?>">
           </div>
           <div class="col-auto">
           <label>Marca</label>
           <input type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
           </div>
           <div class="col-auto">
           <label>Talle</label>
           <input type="text" name="talle" placeholder="Talle" value="<?php echo "$talle"; ?>">
           </div>
           <div class="col-auto">
           <label>Precio</label>
           <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
           </div>
           <div class="col-auto">
           <label>Imagen</label>
           <input type="file" name="imagen" placeholder="imagen">
           </div>
           <div class="col-auto">
           <input class="btn btn-info" type="submit" name="guardar_cambios" value="Guardar Cambios">
           </div>
           <div class="col-auto">
           <button class="btn btn-warning" type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
           </div>
       </form>
       <?php

       if(array_key_exists('guardar_cambios',$_POST)){

                   $tipo=$_POST['tipo'];
                   $marca=$_POST['marca'];
                   $talle=$_POST['talle'];
                   $precio=$_POST['precio'];
                   $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

           $consulta = "UPDATE ropa SET tipo='$tipo', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id =$id";

            mysqli_query($conexion,$consulta);

            header('location: index.html');

       }?>
       </div>

       <!-- Option 1: Bootstrap Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

     </body>
     </html>
