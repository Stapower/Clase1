<?php
var_dump($_POST['nombre']);

var_dump($_FILES);

if(isset($_FILES["foto"]))
{
	if($_FILES["foto"]['error'])
	{
		echo "error en imagen";
	}
	else
	{
		$tamanio =$_FILES['foto']['size'];
    	if($tamanio>700000)
    	{
    			echo"Error, archvio muy grande.";
    	}
    	else
    	{
    		 $esImagen = getimagesize($_FILES["foto"]["tmp_name"]);
				if($esImagen === FALSE) 
				{
							echo"Eliga una foto como archivo.";
				}
				else
				{
					$NombreCompleto=explode(".", $_FILES['foto']['name']);
					$Extension=  end($NombreCompleto);
					$arrayDeExtValida = array("jpg", "jpeg", "gif", "bmp","png");  //defino antes las extensiones que seran validas
					if(!in_array($Extension, $arrayDeExtValida))
					{
					   echo"Extension inválida.";
					}

					else
					{
						//$destino =  "fotos/".$_FILES["foto"]["name"];
						$destino = "fotos/". $_POST['nombre'].".".$Extension;
						$foto=$_POST['nombre'].".".$Extension;
						//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    					if (1==1)//(move_uploaded_file($_FILES["foto"]["tmp_name"],$destino))
    					{		

    						$destino2 = "fotos/fotos2/lalala.gif";
							move_uploaded_file($_FILES["foto"]["tmp_name"],$destino2);

      						 echo "ok";
      					}
      					else
      					{   
      						echo "Error inesperado";
      					}
      				}
				}
    	}
    }
}


?>