<html>
	<head>
		<title>Aplicaci&oacute;n 10</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			function TraerCiudades()
			{
				$.ajax({
					type: "POST",
					url: "administrarCiudades.php",
					datatype: "text",
					async: true
				})
				.done(function(resultado)
				{
					var listaCiudadesJson = JSON.parse(resultado);
					var tabla = "<table><th><td>Id</td><td>Nombre</td><td>Country</td><td>Coord lon</td><td>Coord lat</td></th>";
					for (var i = 0; i < 1000; i++)
					{
						tabla = tabla + "<tr><td></td><td>" + listaCiudadesJson[i]["_id"] + "</td><td>" + listaCiudadesJson[i]["name"] + "</td><td>" + listaCiudadesJson[i]["country"] + "</td><td>" + listaCiudadesJson[i].coord.lon + "</td><td>" + listaCiudadesJson[i].coord.lat + "</td></tr>";
					}
					tabla = tabla + "</table>";
					$(tabla).appendTo("body");
					// Ó
					//$("body").append(tabla);
				})
				.fail(function(resultado)
				{
					alert("ERROR");
				})
			}
		</script>
	</head>
	<body>
		<input type="button" onclick="TraerCiudades()" value="Generar tabla">
	</body>
</html>