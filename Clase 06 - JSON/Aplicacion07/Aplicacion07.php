<html>
	<head>
		<title>Aplicaci&oacute;n 07</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			$.ajax({
				type: "POST",
				url: "traerAuto.php",
				datatype: "text",
				async: true
			})
			.done(function(resultado)
			{
				if (resultado == "ERROR")
				{
					alert("ERROR");
				}
				else
				{
					var objJson = JSON.parse(resultado);
					alert(objJson.Id + "\n" + objJson.Marca + "\n" + objJson.Precio + "\n" + objJson.Color + "\n" + objJson.Modelo);
				}
			})
			.fail(function(resultado)
			{
				alert("ERROR");
			})
		</script>
	</head>
	<body>

	</body>
</html>