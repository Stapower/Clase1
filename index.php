<html>
	<body>
		<h1> Hola mundo! </h1>


			<?php
				$nombre = "Tomas";
				echo "<h2> Hola PHP soy $nombre </h2>";
				echo '<h2> Hola PHP soy $nombre </h2>';
				echo '<h2> Hola PHP soy ' . $nombre . '</h2>';
				echo '<h2> Numero random entre 10 y 100, 10 veces: </h2>';
				$veces = 10000000;
					$cont0 = 0;
					$cont1 = 0;
					$cont2 = 0;
					$cont3 = 0;
					$cont4 = 0;
					$cont5 = 0;
					$cont6 = 0;
					$cont7 = 0;
					$cont8 = 0;
					$cont9 = 0;
					

				for ($j=0; $j < 10; $j++) { 

					$contador[$j]=0;	
				}


				for ($i=0; $i < $veces; $i++) {

					$x = rand(0, 9);
					//echo "$x </br>";
				


					if($x == 7)
					{
					  if((($contador[$x] * 100)/$veces) < 5) 
						{
													
							$contador[$x]++;
							continue;
						}
						else
						{
							$i--;
							continue;
						}
					}
						$contador[$x] ++;

				}
					/*
					switch ($x) {
						case '0':
							$cont0++;
							break;

							case '1':
							$cont1++;
							break;

							case '2':
							$cont2++;
							break;

							case '3':
							$cont3++;
							break;

							case '4':
							$cont4++;
							break;

							case '5':
							$cont5++;
							break;

							case '6':
							$cont6++;
							break;

							case '7':
							
							//if((($cont7 * 100)/$veces)>= 5)
							//{
							//	$veces++
							//}
							
							break;

							case '8':
							$cont8++;
							break;

							case '9':
							$cont9++;
							break;

						
						default:
							# code...
							break;
					}*/
				//}

				echo "porcentaje: de 0 : %" . ($contador[0] * 100)/$veces .  "</br>";
				echo "porcentaje: de 1 : %" . ($contador[1] * 100)/$veces .  "</br>";
				echo "porcentaje: de 2 : %" . ($contador[2] * 100)/$veces .  "</br>";
				echo "porcentaje: de 3 : %" . ($contador[3] * 100)/$veces .  "</br>";
				echo "porcentaje: de 4 : %" . ($contador[4] * 100)/$veces .  "</br>";
				echo "porcentaje: de 5 : %" . ($contador[5] * 100)/$veces .  "</br>";
				echo "porcentaje: de 6 : %" . ($contador[6] * 100)/$veces .  "</br>";
				echo "porcentaje: de 7 : %" . ($contador[7] * 100)/$veces .  "</br>";
				echo "porcentaje: de 8 : %" . ($contador[8] * 100)/$veces .  "</br>";
				echo "porcentaje: de 9 : %" . ($contador[9] * 100)/$veces .  "</br>";

			?>
	</body>
</html>
