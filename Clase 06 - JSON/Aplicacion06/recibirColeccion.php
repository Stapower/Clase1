<?php

$producto1 = new stdClass();
$producto2 = new stdClass();
$producto3 = new stdClass();

$producto1->codigoBarra = 2013542;
$producto1->nombre = "pizza";
$producto1->precio = 83.95;
$producto2->codigoBarra = 1654325;
$producto2->nombre = "pancho";
$producto2->precio = 30;
$producto3->codigoBarra = 3445789;
$producto3->nombre = "hamburguesa";
$producto3->precio = 45.67;

$arrayDeProductos = array($producto1, $producto2, $producto3);

$productoJson = json_encode($arrayDeProductos);

echo $productoJson;


