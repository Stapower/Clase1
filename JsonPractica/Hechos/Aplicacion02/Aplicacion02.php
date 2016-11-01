<html>
	<head>
		<title>Aplicaci&oacute;n 02</title>
		<script type="text/javascript">
			var producto = [{ "codigoBarra" : 105243, "nombre" : "hamburguesa", "precio" : 9.99},
							{ "codigoBarra" : 251342, "nombre" : "pancho", "precio" : 7.80},
							{ "codigoBarra" : 245632, "nombre" : "cocaCola", "precio" : 5.20}];
			alert(producto[0].codigoBarra + producto[0].nombre + producto[0].precio);
			alert(producto[1].codigoBarra + producto[1].nombre + producto[1].precio);
			alert(producto[2]["codigoBarra"] + producto[2]["nombre"] + producto[2]["precio"]); //de otra forma
		</script>
	</head>
	<body>
	</body>
</html>