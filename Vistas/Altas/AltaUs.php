<?php
	require("../../Controlador.php"); 
	if (!empty($_POST['Alta'])){
		$cont = new Controlador();
		$cont->AltaUs();	
	}
 ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form action="" method="Post" id="Altaf" name="Altaf">
	<div class="input-group">
   		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 		<input id="User" type="text" class="form-control" name="User" placeholder="Usuario">
	</div>
	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
   		<input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="empleado" type="number" class="form-control" name="empleado" placeholder="Codigo de empleado" min="1">
  	</div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
      <input id="pU" type="password" class="form-control" name="pU" placeholder="Contraseña del Usuario" >
    </div>
  	<input class="btn btn-default" type="submit" name="Alta" value="Alta">
</form>