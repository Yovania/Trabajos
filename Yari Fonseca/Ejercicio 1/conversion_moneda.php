<?php

$cantidad=$_POST['cantidad'];
$moneda=$_POST['moneda'];
$dolar=29;
$conversion;

if ($moneda=="a") 
{
	$conversion= $cantidad* $dolar;
}
else
{
	if($moneda=="b")
	{
		$conversion =$cantidad / $dolar;
		
	}
}

	echo "la convesion es:", $conversion;

?>