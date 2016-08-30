<?php
//get_include_path(C:\xampp\htdocs\clase2\new.php);
//get_include_path("C:\xampp\htdocs\clase2\padre.php");
//require_once("padre.php");
require_once("new.php");


class Cuadrado extends FiguraGeometrica
{		

	public $lado1;
	public $lado2;


	//public function __construct($color, $lado1, $lado2)
    //{
     //   this.$_color = $color;
    //}


    public function __construct()
    {
        
    }


	 public function Calcular()
	{
		//$this->asd="hola"; variables del arcvhiso "padre.php"
		//echo $this->asd;  idem



	}

	function Dibujo($lado1, $lado2)
	{

		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo "</br>";


	for ($i=0; $i <$lado1 ; $i++) 
		{ 
			echo "*";
		}	
				
		echo "</br>";
		for ($k=0; $k < $lado2; $k++)
		{ 
			
			echo "*";
			for ($j=0 ;$j < $lado2 -2; $j++ )
			 { 
				echo "&nbsp; &nbsp;";
			 }
			echo "*";
			echo "</br>";
		}


		for ($l=0; $l < $lado1 ; $l++) { 
			echo "*";
		}
	    




	}

}

//$tr = new triangle(); antes ésta clase se llamaba triangle
//$tr->Calcular();

		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo "Cuadrado: ";
$cdrd = new Cuadrado();
$cdrd->Dibujo(5,5);

?>
