<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ejercicios</h1>
    <p>1.</p>
    <?php
    $n = 41;

    if ($n>=0) {
        echo "$n es positivo";
    }
     ?>
     <br>
     <hr>
     <p>2.</p>
     <?php
     $n = 9;

     if ($n>1 && $n<10) {
      echo $n;
     }
      ?>
      <br>
      <hr>
      <p>3.</p>
      <?php
      $n = 1;

      if ($n>10 || $n<2) {
          echo $n;
      }
       ?>
       <br>
       <hr>
       <p>4.</p>
       <?php
       $numero1 = 41;
       $numero2 = 9;

       if ($numero1 > $numero2) {
         echo "suma = ", $numero1+$numero2, "<br> resta = ", $numero1-$numero2;
       }elseif ($numero2 > $numero1) {
         echo "multiplicación = ", $numero2*$numero1, "<br> división = ", $numero2/$numero1, "<br> resto = ", $numero2%$numero1;
       }else {
         echo "Los números ingresados son iguales";
       }
        ?>

  </body>
</html>
