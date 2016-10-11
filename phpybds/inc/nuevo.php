<?php
  require('conexion.php');

  $dato1=$_POST['nombre'];
  $dato2=$_POST['titulo'];

  $consulta="INSERT INTO trabajo(nombre,titulo) VALUES ('$nombre','$titulo')";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php"); 
  exit(); 
?>