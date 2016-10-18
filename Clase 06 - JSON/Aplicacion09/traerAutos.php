<?php

$ar = fopen("json/autos.json", "r");
$texto = fread($ar, filesize("json/autos.json"));
if (!$texto)
{
	echo "ERROR";
}
else
{
	echo $texto;
}

?>