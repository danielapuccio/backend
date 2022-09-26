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
     for ($i=1; $i <101 ; $i++) {
       echo $i . " ";
     }
     ?>
    <h2>2.</h2>
    <?php
    for ($i=100; $i > 0 ; $i--) {
      echo $i . " ";
    }
     ?>
     <h2>3.</h2>
     <?php
     for ($contador=1; $contador <101 ; $contador++) {
       if ($contador%2 == 0) {
         echo $contador . " ";
       }
     }
      ?>
     <h2>4.</h2>
      <?php
      for ($contador=0; $contador <101 ; $contador++) {
        if ($contador%2 != 0) {
          echo $contador . " ";
        }
      }
       ?>
       <h2>5.</h2>
       <?php
       $suma = 0;
       for ($i=1; $i <21 ; $i++) {
         $suma=$suma+$i;
         echo $suma . " ";
       }
        ?>
        <h2>6.</h2>
        <?php
        $suma = 0;
        for ($i=1; $i <21 ; $i++) {
          if ($i%2 == 0) {
            $suma=$suma+$i;
            echo $suma . " ";
          }
        }
         ?>
  </body>
</html>
