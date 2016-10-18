<?php
	require_once('clases/Vehiculo.php');

	$ArrayDePersonas = Vehiculo::TraerTodosLosVehiculos();

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>  Foto   </th>				
					<th>  patente     </th>
					<th>  fecha entrada   </th>
					<th>  fecha salida        </th>
					<th>  BORRAR     </th>
					<th>  MODIFICAR  </th>
				</tr> 
			</thead>";   	

		foreach ($ArrayDePersonas as $personaAux){

			echo " 	<tr>
						<td><img  class='fotoGrilla' src='fotos/".$personaAux->GetFoto()."' /></td>
						
						<td>".$personaAux->GetPatente()."</td>
						<td>".$personaAux->GetEntrada()."</td>
						<td>".$personaAux->GetSalida()."</td>
						<td><button class='btn btn-danger' name='Borrar' onclick='Borrar(".$personaAux->GetId().")'>   <span class='glyphicon glyphicon-remove-circle'>&nbsp;</span>Borrar</button></td>
						<td><button class='btn btn-warning' name='Modificar' onclick='Modificar(".$personaAux->GetId().")'><span class='glyphicon glyphicon-edit'>&nbsp;</span>Modificar</button></td>
					</tr>";
		}	
	echo "</table>";		
?>
