<?php
	$mysqli=new mysqli("localhost","yari","","phpmyAdmin");
	if(mysqli_connect_errno()){
		echo 'Conexion fallida:', mysqli_connect_error();
		exit();
	}else{
		echo "no se pudo conectar";
	}
	mysqli_set_charset($mysqli, "utf8");//Ubica las tildes a los registros
?>