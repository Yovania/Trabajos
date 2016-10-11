<?php
  require('conexion.php');
  $id=$_GET['Id'];

  $consulta="DELETE FROM tabla WHERE Id='$Id'";
  $resultado=$mysqli->query($consulta);
  header("Location: ../index.php"); 
  exit(); 
?>
