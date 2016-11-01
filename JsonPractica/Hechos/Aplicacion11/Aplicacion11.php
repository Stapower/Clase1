<html>
	<head>
		<title>Aplicaci&oacute;n 11</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			function TraerCiudades()
			{
				$.ajax({
					type: "POST",
					url: "administrarCiudades.php",
					data: "traerCiudades=si",
					datatype: "text",
					async: true
				})
				.done(function(resultado)
				{
					var listaCiudadesJson = JSON.parse(resultado);
					var tabla = "<table><th><td>Id</td><td>Nombre</td><td>Country</td><td>Coord lon</td><td>Coord lat</td></th>";
					for (var i = 0; i < listaCiudadesJson.length; i++)
					{
						tabla += "<tr><td></td><td>"
						+listaCiudadesJson[i]["_id"]+"</td><td>"
						+listaCiudadesJson[i]["name"]+"</td><td>"
						+listaCiudadesJson[i]["country"]+"</td><td>"
						+listaCiudadesJson[i].coord.lon+"</td><td>"
						+listaCiudadesJson[i].coord.lat+"</td></tr>";
					}
					tabla += "</table>";
					$(tabla).appendTo("body");
					// Ó
					//$("body").append(tabla);
				})
				.fail(function(resultado)
				{
					alert("ERROR");
				})
			}
			function AgregarCiudad()
			{
				$.ajax({
					type: "POST",
					url: "administrarCiudades.php",
					data: "id="+$("#txtId").val()+
					"&nombre="+$("#txtNombre").val()+
					"&country="+$("#txtCountry").val()+
					"&coordLon="+$("#txtCoordLon").val()+
					"&coordLat="+$("#txtCoordLat").val(),
					async: true
				})
				.done(function(resultado)
				{
					if (resultado == "SI")
					{
						alert("Agregado");
					}
					else
					{
						alert("No se agrego");
					}
				})
				.fail(function(resultado)
				{
					alert("ERROR");
				})
				$("#txtId").val("");
				$("#txtNombre").val("");
				$("#txtCountry").val("");
				$("#txtCoordLon").val("");
				$("#txtCoordLat").val("");
			}
		</script>
	</head>
	<body>
		<p>Id</p>
		<input type="text" id="txtId" />
		<p>Nombre</p>
		<input type="text" id="txtNombre" />
		<p>Country</p>
		<input type="text" id="txtCountry" />
		<p>Coord lon</p>
		<input type="text" id="txtCoordLon" />
		<p>Coord lat</p>
		<input type="text" id="txtCoordLat" />
		</br></br>
		<input type="button" onclick="TraerCiudades()" value="Generar tabla" />
		<input type="button" onclick="AgregarCiudad()" value="Agregar ciudad" />
	</body>
</html>