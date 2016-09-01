<?php

$Peso = $_POST['Peso'];
$Altura = $_POST['Altura'];
$Alt= $Altura * $Altura;

	$ICM = $Peso / $Alt;

	echo "EL indice corporal de masa es de: ", $ICM;

?>