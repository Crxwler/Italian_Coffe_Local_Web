<?php  
	/**
	* 
	*/
	require("Conexion.php");

	class Controlador{
		
		function __construct(){
			
		}

		function AltaUs(){
			$con=new Conexion;
			$bd=$con->conectar();
			$us=$_POST['User'];
			$pass=$_POST['password'];
			$CEm=$_POST['empleado'];
			if($_COOKIE['password']==$_POST['pU']){
				$res=sqlsrv_prepare($bd,"INSERT INTO Usuarios(usuario,password,CodigoE1) VALUES('$us','$pass','$CEm');");
				if (sqlsrv_execute($res)) {
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Alta exitosa")</script>' ;
				}else{
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Error")</script>' ;
				}
			}else{
				echo '<script type="text/javascript" charset="utf-8" async defer>alert("Ingrese una contraseña correcta")</script>';
			}
			$bd=$con->cerrar();
		}

		function AltaProd(){
			$con=new Conexion;
			$bd=$con->conectar();
			$n=$_POST['nombre'];
			$pre=$_POST['precio'];
			$sa=$_POST['sabor'];
			$ca=$_POST['categoria'];
			$pres=$_POST['presentacion'];
			$cant=$_POST['cant'];
			$cantm=$_POST['cantmin'];
			if($_COOKIE['password']==$_POST['pU']){
				$res=sqlsrv_prepare($bd,"INSERT INTO Productos(nombre,precio,sabor,categoria,presentacion,cantidad,cantMin,CodigoEM2) VALUES('$n','$pre','$sa','$ca','$pres','$cant','$cantm','1');");
				if (sqlsrv_execute($res)) {
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Alta exitosa")</script>' ;
				}else{
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Error")</script>' ;
				}
			}else{
				echo '<script type="text/javascript" charset="utf-8" async defer>alert("Ingrese una contraseña correcta")</script>';
			}
			$bd=$con->cerrar();
		}

		function AltaProv(){
			$con=new Conexion;
			$bd=$con->conectar();
			$n=$_POST['nombre'];
			$tel=$_POST['telefono'];
			$fP=$_POST['formaPago'];
			$tP=$_POST['tiempoPago'];
			$pres=$_POST['presentacion'];
			$fre=$_POST['frecuencia'];
			$rfc=$_POST['rfc'];
			if($_COOKIE['password']==$_POST['pU']){
				$res=sqlsrv_prepare($bd,"INSERT INTO Proveedores(nombre,telefono,formaPago,tiempoPago,presentacion,frecuencia,RFC,CodigoEM3) VALUES('$n','$tel','$fP','$tP','$pres','$fre','$rfc','1');");
				if (sqlsrv_execute($res)) {
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Alta exitosa")</script>' ;
				}else{
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Error")</script>' ;
				}
			}else{
				echo '<script type="text/javascript" charset="utf-8" async defer>alert("Ingrese una contraseña correcta")</script>';
			}
			$bd=$con->cerrar();
		}

		function AltaEm(){
			$con=new Conexion;
			$bd=$con->conectar();
			$n=$_POST['nombre'];
			$ap=$_POST['apellidos'];
			$di=$_POST['direccion'];
			$curp=$_POST['curp'];
			$tel=$_POST['telefono'];
			$seg=$_POST['seguro'];
			$sex=$_POST['sexo'];
			$edad=$_POST['edad'];
			$correo=$_POST['correo'];
			if($_COOKIE['password']==$_POST['pU']){
				$res=sqlsrv_prepare($bd,"INSERT INTO Empleados(nombre,apellidos,direccion,curp,telefono,seguro,sexo,edad,correo,CodigoEM1) VALUES('$n','$ap','$di','$curp','$tel','$seg','$sex','$edad','$correo','1');");
				if (sqlsrv_execute($res)) {
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Alta exitosa")</script>' ;
				}else{
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Error")</script>' ;
				}
			}else{
				echo '<script type="text/javascript" charset="utf-8" async defer>alert("Ingrese una contraseña correcta")</script>';
			}
			$bd=$con->cerrar();
		}

		function bajaUs(){
			$con = new Conexion();
			$bd = $con->conectar();
			$cod = $_POST['codigo'];
			if($_COOKIE['password']==$_POST['pU']){
				$res=sqlsrv_prepare($bd,"DELETE FROM Usuarios WHERE codigoU='$cod'");
				if(sqlsrv_execute($res)){
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Baja exitosa")</script>' ;
				}else{
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Error")</script>' ;
				}
			}else{
				echo '<script type="text/javascript" charset="utf-8" async defer>alert("Ingrese una contraseña correcta")</script>';
			}
			$bd=$con->cerrar();
 		}

 		function bajaProd(){
			$con = new Conexion();
			$bd = $con->conectar();
			$cod = $_POST['codigo'];
			if($_COOKIE['password']==$_POST['pU']){
				$res=sqlsrv_prepare($bd,"DELETE FROM Productos WHERE codigoP='$cod'");
				if(sqlsrv_execute($res)){
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Baja exitosa")</script>' ;
				}else{
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Error")</script>' ;
				}
			}else{
				echo '<script type="text/javascript" charset="utf-8" async defer>alert("Ingrese una contraseña correcta")</script>';
			}
			$bd=$con->cerrar();
 		}

 		function bajaProv(){
			$con = new Conexion();
			$bd = $con->conectar();
			$rfc = $_POST['RFC'];
			if($_COOKIE['password']==$_POST['pU']){
				$res=sqlsrv_prepare($bd,"DELETE FROM Proveedores WHERE RFC='$rfc'");
				if(sqlsrv_execute($res)){
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Baja exitosa")</script>' ;
				}else{
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Error")</script>' ;
				}
			}else{
				echo '<script type="text/javascript" charset="utf-8" async defer>alert("Ingrese una contraseña correcta")</script>';
			}
			$bd=$con->cerrar();
 		}

 		function bajaEm(){
			$con = new Conexion();
			$bd = $con->conectar();
			$cod = $_POST['codigo'];
			if($_COOKIE['password']==$_POST['pU']){
				$res=sqlsrv_prepare($bd,"DELETE FROM Empleados WHERE codigoEm='$cod'");
				if(sqlsrv_execute($res)){
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Baja exitosa")</script>' ;
				}else{
					echo '<script type="text/javascript" charset="utf-8" async defer>alert("Error")</script>' ;
				}
			}else{
				echo '<script type="text/javascript" charset="utf-8" async defer>alert("Ingrese una contraseña correcta")</script>';
			}
			$bd=$con->cerrar();
 		}

		function iniciarSesion($name,$pass){
			$con=new Conexion();
			$bd=$con->conectar();
			$stmt=sqlsrv_query($bd,"SELECT usuario,password FROM Usuarios WHERE usuario ='" . $name . "';");
			$row=sqlsrv_fetch_array($stmt);
			while($row!=null){
				if($row['usuario']==$name && $row['password']==$pass){
					$bd=$con->cerrar();
					return true;
				}
			}
			$bd=$con->cerrar();
			return false;
		}
	}

?>
