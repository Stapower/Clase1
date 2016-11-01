<head>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">

</head>

<script type="text/javascript" src= "js/jquery.js"></script>
<script type="text/javascript" src= "jquery.js"></script>

<div class="CajaInicio">
	<form >
		

		<label> Usuario: </label>
		<input type= "text" value="<?php echo $_COOKIE['Usuario']; ?>" name="user" id="user" >

		<label> Contraseña: </label>
		<input type="text" name="pass" id="pass">

		
	

	</form>

<input type="submit" class="MiBotonUTN" name="Entrar" onclick = "Llamada()">
	
</div>


