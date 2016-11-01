<script type="text/javascript" src=JS/jquery.js></script>
<script type="text/javascript">
	
	//var Auto = {"Patente" : "ASD123", "Titular" : "José", "Año" : 1996};

	$.ajax({

		type : "POST",
		url  : "TraerAuto.php",
		dataType : "text",
		async : true
	})
	.done(function(respuesta)
	{
		if(respuesta == "Error")
		{
			alert("error!!");
		}
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