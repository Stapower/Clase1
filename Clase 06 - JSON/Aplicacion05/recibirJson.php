<?php
$producto = new stdClass();
$producto->codigoBarra = 2013542;
$producto->nombre = "pizza";
$producto->precio = 83.95;
$productoJson = json_encode($producto);
echo $productoJson;
?>