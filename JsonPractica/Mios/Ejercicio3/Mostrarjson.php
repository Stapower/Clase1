<?php
if (isset($_REQUEST["producto"]))
{
	$productos = json_decode($_REQUEST["producto"]);
	//var_dump($productos);
	//con for
	/*for ($i=0; $i < count($productos); $i++)
	{
		echo $productos[$i]->codigoBarra." ".$productos[$i]->nombre." ".$productos[$i]->precio."\r\n";
	}*/
	//con foreach
	foreach ($productos as $unProducto)
	{
		echo "Puto el que lee xdxdxdxdxdxdxdxDXDxdxd" . $unProducto->CodigoDeBarras." ".$unProducto->Nombre." ".$unProducto->Precio."\r\n";
	}
}

?>