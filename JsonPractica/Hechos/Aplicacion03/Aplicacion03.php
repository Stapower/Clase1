<html>
	<head>
		<title>Aplicaci&oacute;n 03</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			var producto = { "codigoBarra" : 105243, "nombre" : "hamburguesa", "precio" : 9.99};
			//con tipo nativo
			/*
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.open("GET", "mostrarJson.php?producto="+JSON.stringify(producto), true);
			xmlHttp.send();
			xmlHttp.onreadystatechange = function()
			{
				if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
				{
					alert(xmlHttp.responseText);
				}
			}
			*/
			//con jQuery
			$.ajax({
				type: "post",
				url: "mostrarJson.php",
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