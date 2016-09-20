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
    	if($tamanio>600000)
    	{
    			echo"Error, archvio muy grande.";
    			die();
    	}
    	else
    	{
    		// $esImagen = getimagesize($_FILES["foto"]["tmp_name"]);
			//	if($esImagen === FALSE) 
			//	{
			//				echo"Eliga una foto como archivo.";
			//	}
			//	else
			//	{
					$NombreCompleto=explode(".", $_FILES['foto']['name']);
					$Extension=  end($NombreCompleto);

					$arrayDeDocs = array("doc", "docx");

					$arrayDeExtValida = array("jpg", "jpeg", "gif");

					 //$arrayDeExtValida = array("jpg", "jpeg", "gif", "bmp","png");  //defino antes las extensiones que seran validas
					if(in_array($Extension, $arrayDeExtValida))
					{
						if($tamanio > 300000)
						{
							echo"Archivo de imagen muy grande .";
							die();
						}
					}
					else if(in_array($Extension, $arrayDeDocs))
					{
						if($tamanio > 60000)
						{
							echo"Archivo doc muy grande .";	
							die();
						}
					}

					
					
						//$destino =  "fotos/".$_FILES["foto"]["name"];
						$destino = "fotos/". $_POST['nombre'].".".$Extension;
						$foto=$_POST['nombre'].".".$Extension;
						//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    					//if (1==1)//(move_uploaded_file($_FILES["foto"]["tmp_name"],$destino))
    					//{		
						$nombre = $_POST['nombre'];
    						$destino2 = "upload/". $nombre. "." . $Extension;
						if(!move_uploaded_file($_FILES["foto"]["tmp_name"],$destino2))

      						 echo "error al guardar el archivo";
      					else
      					{
      						echo "Archivo guardado exitosamente";
      						echo "nombre " . $_POST['nombre'];
      						echo "tamanio: " .$tamanio; 
      						echo "extension ". $Extension;
      					}


      					//}
			//	}
    	}
    }
}


?>