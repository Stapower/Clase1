<html>
	<head>
		<title>Aplicaci&oacute;n 04</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			var producto = [{ "codigoBarra" : 105243, "nombre" : "hamburguesa", "precio" : 9.99},
							{ "codigoBarra" : 251342, "nombre" : "pancho", "precio" : 7.80},
							{ "codigoBarra" : 245632, "nombre" : "cocaCola", "precio" : 5.20}];
			$.ajax({
				type: "post",
				url: "mostrarColeccionJson.php",
				data: "producto="+JSON.stringify(producto)
			})
			.done(function(res)
			{
				alert(res);
			})
			.fail(function()
			{
				alert("Error...algo falló");
			})
			.always(function()
			{
				alert("Entra siempre por aca");
			})
		</script>
	</head>
	<body>
	</body>
</html>