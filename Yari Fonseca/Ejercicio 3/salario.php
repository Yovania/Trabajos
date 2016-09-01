<?php

$horas= $_POST['horas'];
$pago_horas= $_POST['pago_horas'];

$sal_basico =$horas*$pago_horas;

$INSS=$sal_basico * 0.15;
$IR=$sal_basico*0.06;
$sal_total=$sal_basico -$IR -$INSS;


echo "El pago de horas es de:",$pago_horas;
echo "<br>";
echo "El salario basico es de:",$sal_basico;
echo "<br>";
echo "la deduccion del INSS es de:",$INSS;
echo "<br>";
echo "la deduccion del IR es de:",$IR;
echo "<br>";
echo "El salario total es de:",$sal_total;
echo "<br>";
?>