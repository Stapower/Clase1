
function Llamada()
{

	var usuario  = document.getElementById('user').value;
	var contrasena = document.getElementById('pass').value;
	//alert(usuario);
	//alert(contrasena);

	var object = {"Usuario" : usuario , "contrasena" : contrasena};

	$.ajax({
	//jquery
			type : "POST",
			url  : "Nexo.php",
			data : object,
			dataType : "text",
			async : true
		})
		.then(function(respuesta)
		{
			alert("volvió");
			console.log(respuesta);
			//alert(respuesta);

			//var objSon = JSON.parse(respuesta);
			
			//console.log(objSon);
			//alert(objSon.Usuario);
			//alert(objSon.Contrasena);
			
			
		},function(respuesta){
			alert(respuesta);
		});
		
}

