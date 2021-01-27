<?php
	require("../../Controlador.php"); 
	if (!empty($_POST['Baja'])){
		$cont = new Controlador();
		$cont->BajaUs();	
	}
 ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form action="" method="Post" id="Baja" name="Baja">
	<div class="input-group">
   		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 		<input id="codigo" type="text" class="form-control" name="codigo" placeholder="Codigo del usuario">
	</div>
	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
   		<input id="pU" type="pU" class="form-control" name="pU" placeholder="Contraseña">
  	</div>
  	<input class="btn btn-default" type="submit" name="Baja" value="Baja">
</form>