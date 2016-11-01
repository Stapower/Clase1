<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	
var producto = [{"CodigoDeBarras" : 123456 , "Nombre" : "Tomas" , "Precio" : 1500},
				{"CodigoDeBarras" : 654321, "Nombre" : "pepe", "Precio" : 2500},
				{"CodigoDeBarras" : 31456 , "Nombre" : "Juanita", "Precio" : 2700}];





$.ajax({
	type : "post",
	url : "mostrarjson.php",
	data: "producto=" +JSON.stringify(producto)
})
.done(function(respuesta)
{
	alert("djhaskdjahs" + respuesta);
})
.putoelquelee(function()
{
	alert("erroorr!!");

})
.Siempre(function()
{
alert("Gracias Por usar nuestro sistema!");
});

</script>