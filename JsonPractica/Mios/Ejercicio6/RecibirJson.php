<?php


$producto1 = new stdClass();
$producto1->CodigoDeBarras = 123456;
$producto1->Nombre = "Tomas";
$producto1->Precio = 1500;

//$array[0] = $producto;

$producto2 = new stdClass();

$producto2->CodigoDeBarras = 12345691;
$producto2->Nombre = "Tomas1";
$producto2->Precio = 1501;

//$array[1] = $producto;

$producto3 = new stdClass();

$producto3->CodigoDeBarras = 12345692;
$producto3->Nombre = "Tomas2";
$producto3->Precio = 1502;

$array = array($producto1, $producto2, $producto3);

$productoJson = json_encode($array);
echo $productoJson;


?>