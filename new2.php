<?php
//get_include_path(C:\xampp\htdocs\clase2\new.php);
//get_include_path("C:\xampp\htdocs\clase2\padre.php");
require_once("padre.php");



class triangle extends FiguraGeometrica
{


	 public function Calcular()
	{
		$this->asd="hola";
		echo $this->asd;
	}

	function Dibujo()
	{

	}

}

$tr = new triangle();
$tr->Calcular();

?>
