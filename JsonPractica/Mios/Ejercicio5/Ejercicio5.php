<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
	<script type="text/javascript" src="JS/jquery.js"></script>
	<script type="text/javascript">
	
	$.ajax({
		type: "POST",
		url: "RecibirJson.php",
		dataType: "text",
		async: true
	})
	.done(function(respuesta){
		var objJson = JSON.parse(respuesta);
		alert(objJson.CodigoDeBarras + objJson.Nombre + objJson.Precio);
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