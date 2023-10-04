<?php

$v1=$_GET['v1'];
$v2=$_GET['v2'];
$boton1=$_GET['btn1'];

if ($boton1=="suma") {
	$rta=$v1+$v2;
	$cal="+";
}else{
	$rta=$v1-$v2;
	$cal="-";
}
echo "valor boton1: " .$boton1;
echo "<br>";
echo "ingresaste el valor1: " .$v1;
echo "<br>";
echo "ingresaste el valor2: " .$v2;
echo "<br>";
echo "la $boton1 del valor1 $cal valor2 es: " .$rta;




?>