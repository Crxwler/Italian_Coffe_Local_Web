<?php 
	require('Config.php');
	require('Controlador.php');
	try{
		if($_COOKIE['usuario']){
			header('Location: Vistas/menu.php');
		}
	} catch(Excepetion $ex){

	}
	$cont=new Controlador();
	if (!empty($_POST['loginSubmit'])){
		if($cont->iniciarSesion($_POST['name'],$_POST['pw'])){
			setcookie('usuario',$_POST['name']);
			setcookie('password',$_POST['pw']);
			header('Location: Vistas/Menu.php');
		}else{
			echo '<script type="text/javascript" charset="utf-8" async defer>alert("Usuario Incorrecto")</script>' ;
		}
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
	<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="InicioSesion.js"></script>
	<link rel="stylesheet" type="text/css" href="InicioSesion.css">
</head>
<body>
	<div class='login'>
		<h2>Iniciar Sesión</h2>
		<form action="" method="POST" name="login">
			<input name='name' placeholder='Usuario' type='text' autocomplete="off" />
			<input id='pw' name='pw' placeholder='Contraseña' type='password'/>
	 	 	<input type='submit' class="button" name="loginSubmit" value='Iniciar Sesión'/>
 	 	</form>
	</div>
</body>
</html>