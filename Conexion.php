<?php 
class Conexion{
	
	public function conectar(){
		$cnx=null;
 		//Removidos datos por seguridad 									Password                       //DBName
		$connectionInfo = array();
		$serverName="";//Server Name 
		$conn = sqlsrv_connect($serverName, $connectionInfo);
		if($conn) {
    		echo "Conexión establecida.<br />";
		}else{
    	 	echo "Conexión no se pudo establecer.<br />";
    	 	die( print_r( sqlsrv_errors(), true));
		}
		return $conn;
	}

	public function cerrar(){
		$cnx = null;
		return $cnx;
	}
}
?>