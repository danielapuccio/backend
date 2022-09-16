<?php
$usuario = $_POST["username"];
$contrasenia = $_POST["password"];

$ckuser="admin";
$ckpass="1234";

if ($usuario == $ckuser && $contrasenia == $ckpass) {
  header ("location:login.html");
}else {
  header ("location:error.html");
}
 ?>
