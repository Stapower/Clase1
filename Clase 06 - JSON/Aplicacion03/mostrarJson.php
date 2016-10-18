<?php
if (isset($_REQUEST["producto"]))
{
	$productoJson = json_decode($_REQUEST["producto"]);
	//var_dump($productoJson);
	echo $productoJson->codigoBarra." ".$productoJson->nombre." ".$productoJson->precio;
}

?>