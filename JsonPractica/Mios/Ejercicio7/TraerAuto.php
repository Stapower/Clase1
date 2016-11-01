<?php

$ar = fopen("JS/Auto.json", "r");
$texto = fread($ar, filesize("JS/Auto.json"));
if(!$texto)
{
	echo "Error!!";
}
else
{
	echo $texto;
}




?>