<?php
$producto = new stdClass();
$producto->CodigoDeBarras = 123456;
$producto->Nombre = "Tomas";
$producto->Precio = 1500;
$productoJson = json_encode($producto);
echo $productoJson;


?>