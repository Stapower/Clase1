<?php

$ar = fopen("json/city.list.min.json", "r");
$texto = "[";
$cont = 0;
while (!feof($ar))
{
	$linea = fgets($ar);
	$texto .= $linea;
	if ($cont < 999)
	{
		$texto .= ",";
		$cont++;
	}
}
$texto .= "]";

echo $texto;

?>