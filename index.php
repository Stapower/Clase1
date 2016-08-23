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
				for ($i=0; $i < $veces; $i++) {



					$x = rand(0, 9);
					//echo "$x </br>";
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
							$cont7++;
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
					}
				}

				echo "porcentaje: de 0 : %" . ($cont0 * 100)/$veces . " es decir: $cont0 vez/es." . "</br>";
				echo "porcentaje: de 1 : %" . ($cont1 * 100)/$veces . " es decir: $cont1 vez/es." . "</br>";
				echo "porcentaje: de 2 : %" . ($cont2 * 100)/$veces . " es decir: $cont2 vez/es." . "</br>";
				echo "porcentaje: de 3 : %" . ($cont3 * 100)/$veces . " es decir: $cont3 vez/es." . "</br>";
				echo "porcentaje: de 4 : %" . ($cont4 * 100)/$veces . " es decir: $cont4 vez/es." . "</br>";
				echo "porcentaje: de 5 : %" . ($cont5 * 100)/$veces . " es decir: $cont5 vez/es." . "</br>";
				echo "porcentaje: de 6 : %" . ($cont6 * 100)/$veces . " es decir: $cont6 vez/es." . "</br>";
				echo "porcentaje: de 7 : %" . ($cont7 * 100)/$veces . " es decir: $cont7 vez/es." . "</br>";
				echo "porcentaje: de 8 : %" . ($cont8 * 100)/$veces . " es decir: $cont8 vez/es." . "</br>";
				echo "porcentaje: de 9 : %" . ($cont9 * 100)/$veces . " es decir: $cont9 vez/es." . "</br>";

			?>
	</body>
</html>
