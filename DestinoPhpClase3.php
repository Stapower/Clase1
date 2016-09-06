	 <?php
	 	var_dump($_GET);
		var_dump($_POST);
	 	//echo $_GET['Nombre']; //Tira error si està vacio
		
	 	if(isset($_GET['Nombre']))
	 	{
	 		echo $_POST['Nombre'];
	 	}
	 	else
	 	{
	 		echo "primer ingreso";
	 	}
	 	
		
	 ?>