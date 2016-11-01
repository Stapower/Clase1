<html>
	<head>
		<title>Aplicaci&oacute;n 05</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			$.ajax({
				type: "POST",
				url: "recibirJson.php",
				dataType: "text",
				async: true
			})
			.done(function(resultado)
			{
				var objJson = JSON.parse(resultado);
				alert(objJson.codigoBarra + objJson.nombre + objJson.precio);
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