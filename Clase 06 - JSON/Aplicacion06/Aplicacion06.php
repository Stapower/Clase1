<html>
	<head>
		<title>Aplicaci&oacute;n 06</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			$.ajax({
				type: "POST",
				url: "recibirColeccion.php",
				dataType: "text",
				async: true
			})
			.done(function(resultado)
			{
				var objJson = JSON.parse(resultado);
				for (var i = 0; i < objJson.length; i++)
				{
					alert(objJson[i].codigoBarra + objJson[i].nombre + objJson[i].precio);
				}
			})
			.fail(function()
			{
				alert("Error");
			})
				
		</script>
	</head>
	<body>
	</body>
</html>