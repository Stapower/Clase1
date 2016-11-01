<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
	<script type="text/javascript" src="JS/jquery.js"></script>
	<script type="text/javascript">
	$.ajax({
				type: "POST",
				url: "RecibirJson.php",
				dataType: "text",
				async: true
	})
	.done(function(respuesta){
		/*var objJson = JSON.parse(respuesta);

		foreach(var item in objJson)
		{
		  alert(item.CodigoDeBarras + item.Nombre + item.Precio);
		}*/

		var objJson = JSON.parse(respuesta);
		for (var i = 0; i < objJson.length; i++)
		{
			alert(objJson[i].CodigoDeBarras + objJson[i].Nombre + objJson[i].Precio);
		}

		
	})
	.error(function()
		{
			alert("error");
		});



	</script>
</head>
<body>

</body>
</html>