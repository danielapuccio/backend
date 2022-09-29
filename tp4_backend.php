<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>EJERCICIOS</h1>
    <h2>1.</h2>
    <?php
    $numpares=["0","2","4","6","8","10","12","14","16","18"];
    foreach ($numpares as $value) {
    print "<p>$value</p>\n";
    }
     ?>
     <h2>2.</h2>
     <?php
     $datos = ["Pedro", "Ana", "34", "1"];
     print_r($datos);
      ?>
      <h2>3.</h2>
      <?php
      $valores = ['Nombre'=>"Pedro", 'Apellido'=>"Torres", 'Dirección'=>"Av. Mayor 3703", 'Teléfono'=>"1122334455"];
       ?>
      <h2>4.</h2>
      <?php
      $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
      foreach ($ciudades as $key => $value) {
        print "<p>La ciudad en el índice $key es $value</p>\n";
      }
       ?>
      <h2>5.</h2>
      <?php
      $ciudades = ['MD'=>"Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=>"New York", 'LA'=>"Los Ángeles", 'CCG'=>"Chicago"];
      foreach ($ciudades as $key => $value) {
        print "<p>El índice de $value es $key</p>\n";
      }
       ?>

  </body>
</html>
