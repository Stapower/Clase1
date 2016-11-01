<?php

$ar = fopen("json/auto.json", "r");
$texto = fread($ar, filesize("json/auto.json"));
if (!$texto)
{
	echo "ERROR";
}
else
{
	echo $texto;
}

?>