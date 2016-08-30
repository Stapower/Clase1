<html>
	<body>
		<title> ejercicio con POO </title>

		<?php

			abstract class FiguraGeometrica
			{
				protected $_color;


				public function GetColor()
				{
					
					return this.$_color;
				}

				public function SetColor($color)
				{
					//global $_color;
					this.$_color=$color;
				}


				public function __construct()
			    {
			        
			    }


				abstract protected function Calcular();
				

				abstract public function Dibujo();
				


			}


			abstract class Rectangulo extends FiguraGeometrica
			{
				private $lado_Uno;
				private $lado_Dos;


				public function __construct($l1, $l2)
			    {
			        this.$lado_Uno = 5;
			        this.$lado_Dos = 5;


			    }
			    /*
			   // override_function(Calcular, function_args, function_code)
			    //{

			    //}


			    //override_function(Dibujo, function_args, function_code)
			    //{


				for ($i=0; $i <this.lado_Uno ; $i++) { 
								
							echo "*";
						}	

						
				echo "</br>";
				for ($k=0; $k < this.lado_Dos; $k++) { 
					
					echo "*";
					for ($j=0 ;$j < $this.lado_Dos-2; $j++ ) { 
						echo "*";
					}
					echo "*";
					echo "</br>";
				}


				for ($l=0; $l < this.lado_Uno ; $l++) { 
					echo "*";
				}
			    }*/

			}











			global $color, $superficie, $perimetro;
			$perimetro=12;

			CalularDatos();
			dibujar();

			function dibujar()
			{
				global $perimetro;

				for ($i=0; $i <$perimetro ; $i++) { 
								
							echo "*";
						}	

						
				echo "</br>";
				for ($k=0; $k < $perimetro; $k++) { 
					
					echo "*";
					for ($j=0 ;$j < $perimetro-2; $j++ ) { 
						echo "*";
					}
					echo "*";
					echo "</br>";
				}


				for ($l=0; $l < $perimetro ; $l++) { 
					echo "*";
				}
			}

			function CalularDatos()
			{
				global $superficie, $perimetro;

				$superficie = ($perimetro/4)*($perimetro/4);

			}
		?>

	</body>
</html>