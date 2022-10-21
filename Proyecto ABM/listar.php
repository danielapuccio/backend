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
    <h1>Tienda de Ropa</h1>
    <button type="submit"><a href="index.html">Inicio</a></button>
    <button type="submit"><a href="listar.php">Listar ropa</a></button>
    <button type="submit"><a href="buzo.php">Buzos</a></button>
    <button type="submit"><a href="nike.php">Nike</a></button>
    <button type="submit"><a href="500.php">Precio mayor a $500</a></button>
    <button type="submit"><a href="agregar.html">Agregar ropa</a></button>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock</p>
  </div>

  <section>
    <div class="container-fluid">
      <div class="row">
        <?php

        $conexion=mysqli_connect("127.0.0.1","root","");
        mysqli_select_db($conexion,"tienda_de_ropa");

        $consulta= "SELECT*FROM ropa";

        $datos= mysqli_query ($conexion, $consulta);

        while ($reg =mysqli_fetch_array($datos)) { ?>
          <div class="card col-sm-6 col-md-3 col-lg-2">
            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="300px")>
            <a href="ver.php?id=<?php echo $reg['id'];?>" class="card-body">
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['marca']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span>
            </a>
            <div class="card-footer">
              <a href="modificar.php?id=<?php echo $reg['id'];?>" class="card-link">Editar</a>
              <a href="borrar.php?id=<?php echo $reg['id'];?>" class="card-link">Borrar</a>
            </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </section>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
