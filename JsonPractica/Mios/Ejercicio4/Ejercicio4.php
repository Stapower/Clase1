<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	
var producto = {"CodigoDeBarras" : 123456 , "Nombre" : "Tomas" , "Precio" : 1500};


$.ajax({
	type : "post",
	url : "mostrarjson.php",
	data: "producto=" +JSON.stringify(producto)
})
.done(function(respuesta)
{
	alert(respuesta);
})
.then(function()
{
	alert("erroorr!!");

})
.Siempre(function()
{
alert("Gracias Por usar nuestro sistema!");
});

</script>