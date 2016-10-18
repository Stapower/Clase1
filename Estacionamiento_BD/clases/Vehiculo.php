<?php
require_once"accesoDatos.php";
class Vehiculo
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $id;
	private $patente;
 	private $fechaEntrada;
  	private $fechaSalida;
  	private $foto;

//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
  	public function GetId()
	{
		return $this->id;
	}
	public function GetPatente()
	{
		return $this->patente;
	}
	public function GetEntrada()
	{
		return $this->fechaEntrada;
	}
	public function GetSalida()
	{
		return $this->fechaSalida;
	}
	public function GetFoto()
	{
		return $this->foto;
	}

	public function SetId($valor)
	{
		$this->id = $valor;
	}
	public function SetPatente($valor)
	{
		$this->patente = $valor;
	}
	public function SetEntrada($valor)
	{
		$this->fechaEntrada = $valor;
	}
	public function SetSalida($valor)
	{
		$this->fechaSalida = $valor;
	}
	public function SetFoto($valor)
	{
		$this->foto = $valor;
	}
//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($patente=NULL)
	{
		if($dni != NULL){
			$obj = Vehiculo::TraerUnVehiculo($patente);
			
			$this->patente = $obj->patente;
			$this->fechaEntrada = date("l jS \of F Y h:i:s A");
			$this->fechaSalida = date("l jS \of F Y h:i:s A");
			$this->foto = $obj->foto;
		}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->patente."-".$this->fechaEntrada."-".$this->fechaSalida."-".$this->foto;
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODO DE CLASE
	public static function TraerUnVehiculo($idParametro) 
	{	


		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from Vehiculo where id =:id");
		$consulta->bindValue(':id', $idParametro, PDO::PARAM_INT);
		$consulta->execute();
		$personaBuscada= $consulta->fetchObject('Vehiculo');
		return $personaBuscada;	
					
	}
	
	public static function TraerTodosLosVehiculos()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from Vehiculo");
		$consulta->execute();			
		$arrPersonas= $consulta->fetchAll(PDO::FETCH_CLASS, "Vehiculo");	
		return $arrPersonas;
	}
	
	public static function Borrar($idParametro)
	{	
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta = $objetoAccesoDato->RetornarConsulta("DELETE FROM Vehiculo WHERE id ='$idParametro' ");
		$consulta->execute();	
		$arrPersonas= $consulta->fetchAll(PDO::FETCH_CLASS, "Vehiculo");	
		return $arrPersonas;	
	}
	
	public static function Modificar($vehiculo)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta = $objetoAccesoDato->RetornarConsulta("UPDATE Vehiculo SET patente='$vehiculo->patente',fechaEntrada='$vehiculo->fechaEntrada',fechaSalida=$vehiculo->fechaSalida ,foto='$vehiculo->foto' WHERE persona.dni = '$vehiculo->patente';");
		$consulta->execute();	
		$arrPersonas= $consulta->fetchAll(PDO::FETCH_CLASS, "Vehiculo");	
		return $arrPersonas;	
	}

//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//

	public static function Insertar($vehiculo)
	{
		
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

		$consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO `Vehiculo` (`patente`, `fechaEntrada`, `fechaSalida`, `foto`) VALUES('$vehiculo->patente', '$vehiculo->fechaEntrada', '$vehiculo->fechaSalida','$vehiculo->foto')");
		$consulta->execute();	
		$arrPersonas= $consulta->fetchAll(PDO::FETCH_CLASS, "persona");	
		return $arrPersonas;	
				
	}	
//--------------------------------------------------------------------------------//

}