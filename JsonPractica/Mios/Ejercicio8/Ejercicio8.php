<script type="text/javascript" src=JS/jquery.js></script>
<script type="text/javascript">
	
	//var Auto = {"Patente" : "ASD123", "Titular" : "José", "Año" : 1996};

	$.ajax({

		type : "POST",
		url  : "Login.php",
		dataType : "text",
		async : true
	})
	.done(function(respuesta)
	{
		
		alert(respuesta);
		
		else
		{
			var objSon = JSON.parse(respuesta);
				alert(objSon.Id + "\n" + objSon.Marca + "\n" + objSon.Precio + "\n" + objSon.Color + "\n" + objSon.Modelo);objSon
		}
	})
	.fail(function(respuesta)
	{
		var resp = JSON.parse(respuesta);
		alert("error" + resp);
	});
	



</script>
<html>
<body>
<form>
	<input type=”button” name = "boton">
	<br>
	<input type = "text" name  = "texto">
</form>
</body>


</html>
