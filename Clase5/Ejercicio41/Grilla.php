<?php

class Grilla
{
	public static function CrearEstructura($nombreArchivo)
	{
		$archivoLectura = "misArchivos/".$nombreArchivo.".txt";
		$ArchivoEstructura = "misArchivos/tabla".$nombreArchivo.".php";
		if(file_exists($archivoLectura))
		{
			$cadena=" <table border=1><th> Nombre </th><th> Foto </th>";

			$archivo=fopen($archivoLectura, "r");

		    while(!feof($archivo))
		    {
			      $archAux=fgets($archivo);
			      $pathCompleto=$archAux;
			      $nameFoto=explode("/", $archAux);
			      $nameFoto[0]=trim($nameFoto[0]);
			      if($nameFoto[0]!="")
			       $cadena =$cadena."<tr> <td> ".$nameFoto[1]."</td> <td>  <img src=$pathCompleto></td> </tr>" ; 
			}

	   		$cadena =$cadena." </table>";
	    	fclose($archivo);
	    	
			$archivo=fopen($ArchivoEstructura, "w");
			fwrite($archivo, $cadena);
		}else
		{
			$cadena= "no hay foto";

			$archivo=fopen($ArchivoEstructura, "w");
			fwrite($archivo, $cadena);
		}
	}
}

?>