<?php
  require('conexion.php');
  $Id=$_POST['Id'];

  $dato1=$_POST['nombre'];
  $dato2=$_POST['titulo'];

  $consulta="UPDATE tabla SET col1='$dato1',col2='$dato2' WHERE Id='$Id'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php");
  exit(); 
?>