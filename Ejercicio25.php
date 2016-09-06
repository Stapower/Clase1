<!--Aplicación Nº 25 (Superficie del rectángulo) 
Confeccionar un formulario que solicite la medida de los lados de un rectángulo. 
Luego de pulsar un botón se mostrará la superficie del mismo: 
a- en la misma página. 
b- en otra página (con un link para poder volver). -->


<?php
	//var_dump($_POST);
	//var_dump($_POST);
	$Base = $_POST['Base'];
	$Altura = $_POST['Altura'];


	echo  "superficie: " . (($Base * $Altura)*2);

?>

<a href="Ejercicio25.html"> Volver </a>