<?php

if(isset($_REQUEST["producto"]))
{
	$productoJson = json_decode($_REQUEST["producto"]);

	echo $productoJson->CodigoDeBarras. " " . $productoJson->Nombre . " " . $productoJson->Precio;
}


?>