<html>
	<head>
		<title>Aplicaci&oacute;n 08</title>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			function MostrarDatos()
			{
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
						$("#txtId").val(objJson.Id);
						$("#txtMarca").val(objJson.Marca);
						$("#txtPrecio").val(objJson.Precio);
						$("#txtColor").val(objJson.Color);
						$("#txtModelo").val(objJson.Modelo);
				
					}
				})
				.fail(function(resultado)
				{
					alert("ERROR");
				})
			}
		</script>
	</head>
	<body>
		<p>Id</p>
		<input type="text" id="txtId" />
		<p>Marca</p>
		<input type="text" id="txtMarca" />
		<p>Precio</p>
		<input type="text" id="txtPrecio" />
		<p>Color</p>
		<input type="text" id="txtColor" />
		<p>Modelo</p>
		<input type="text" id="txtModelo" />
		<br/><br/>
		<input type="button" onclick="MostrarDatos()" value="Mostrar" />
	</body>
</html>