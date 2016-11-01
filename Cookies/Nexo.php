<?php
session_start();
$_session['Usuario'] = $_POST['Usuario'];

var_dump($_session);

//var_dump($_POST);

$persona = array();

$persona["Usuario"] = $_POST['Usuario'];
$persona["Contrasena"] = $_POST['contrasena'];
$personaJson = json_encode($persona);
//Si le ponemos valores negativos se borra la cookie
setcookie("Usuario", $_POST['Usuario'], -1);
//se pueden guardar muchos usuarios dentro
//las cookies guardan un archivo en un directorio de la maquina donde corra el navegador
//las cookies no deben guardar passwords
//
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