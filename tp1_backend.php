<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h3>Ejercicio 1</h3>
<?php
echo "Hola mundo";
?>
<h3>Ejercicio 2</h3>
<?php
$cadena = "Hola mundo";
echo $cadena;
 ?>
 <h3>Ejercicio 3</h3>
 <?php
$num = 41;
$num2 = 9;

echo "suma = ", $num+$num2,"<br>";
echo "resta = ", $num-$num2,"<br>";
echo "multiplicación = ", $num*$num2,"<br>";
echo "división = ", $num/$num2,"<br>";
echo "resto de la división = ", $num%$num2,"<br>";
  ?>
<h3>Ejercicio 4</h3>
  <?php
  $resultado = 20*9/5+32;
  echo "20°C a Fahrenheit es = ", $resultado ;
   ?>
<h3>Ejercicio 5</h3>
<?php
$base = 18;
$altura = 12;
$radio = 30;
$pi = 3.14;
$area = $base*$altura;
$perimetro = ($altura+$base)*2;
$areacirculo = $pi*($radio*$radio);
$perimetrocirulo = 2*$pi*$radio;

echo "Perímetro del rectángulo = ", $perimetro," y el área = ", $area, "<br>";
echo "Perímetro del círculo = ", $perimetrocirulo, " y el área = ", $areacirculo;

 ?>

  </body>
</html>
