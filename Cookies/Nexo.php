<?php


//var_dump($_POST);

$persona = array();

$persona["Usuario"] = $_POST['Usuario'];
$persona["Contrasena"] = $_POST['contrasena'];
$personaJson = json_encode($persona);

setcookie("Usuario", $_POST['Usuario']);

echo $personaJson;


/* eso tendría que borrarlo.
$usr = json_decode($_REQUEST["object"]);
//$usr =  $_REQUEST["object"];
//$contr =  $_REQUEST["contraseña"];

$persona = new stdClass();
$persona->usuario = $usr->Usuario;
$persona->contraseña = $usr->contraseña;

$productoJson = json_encode($persona);
echo $productoJson;

//echo $usuario.$contraseña;

//nombre de usuario
//setcookie(name)
//en la ventana chrome nos fijamos 
//si está la cookie creada en resources*/
?>