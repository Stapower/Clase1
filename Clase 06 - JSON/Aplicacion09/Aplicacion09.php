<html>
	<head>
		<title>Aplicaci&oacute;n 09</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			function TraerAutos()
			{
				$.ajax({
					type: "POST",
					url: "traerAutos.php",
					datatype: "text",
					async: true
				})
				.done(function(resultado)
				{
					var listaAutosJson = JSON.parse(resultado);
					document.getElementById("listaAutosJson");

					var tabla = "<table><th><td>Id</td><td>Marca</td><td>Precio</td><td>Color</td><td>Modelo</td></th>";
					for (var i = 0; i < 1000; i++)
					{
						tabla = tabla + "<tr><td></td><td>" + /*listaAutosJson[i].Id*/ + "</td><td>" + listaAutosJson[i].Marca + "</td><td>" + listaAutosJson[i].Precio + "</td><td>" + listaAutosJson[i].Color + "</td><td>" + listaAutosJson[i].Modelo + "</td></tr>"
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
		<input type="button" onclick="TraerAutos()" value="Generar tabla">
	</body>
</html>