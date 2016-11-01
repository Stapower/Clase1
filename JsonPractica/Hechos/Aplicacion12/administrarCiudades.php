<?php

if (isset($_REQUEST["traerCiudades"]))
{
	$ar = fopen("json/city.list.min.json", "r");
	$cantLineas = 0;
	while (!feof($ar))
	{
		fgets($ar);
		$cantLineas++;
	}
	fclose($ar);

	$ar1 = fopen("json/city.list.min.json", "r");
	$texto = "[";
	$cont = 0;
	while (!feof($ar1))
	{
		$linea = fgets($ar1);
		$texto .= $linea;
		if ($cont < $cantLineas - 2)
		{
			$texto .= ",";
			$cont++;
		}
	}
	$texto .= "]";
	fclose($ar1);

	echo $texto;
}

if (isset($_REQUEST["id"]) && isset($_REQUEST["nombre"]) && isset($_REQUEST["country"]) && isset($_REQUEST["coordLon"]) && isset($_REQUEST["coordLat"]))
{
	$retorno = "NO";
	$ciudad = new stdClass();
	$coord = new stdClass();
	$ciudad->_id = (int)$_REQUEST["id"];
	$ciudad->name = $_REQUEST["nombre"];
	$ciudad->country = $_REQUEST["country"];
	$coord->lon = (float)$_REQUEST["coordLon"];
	$coord->lat = (float)$_REQUEST["coordLat"];
	$ciudad->coord = $coord;

	$objJson = json_encode($ciudad);
	$ar2 = fopen("json/city.list.min.json", "a");
	$escribio = fwrite($ar2, $objJson."\n");
	if ($escribio > 0)
	{
		$retorno = "SI";
	}
	echo $retorno;
}

?>