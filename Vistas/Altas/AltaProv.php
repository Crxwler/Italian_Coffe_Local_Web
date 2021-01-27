<?php
	require("../../Controlador.php"); 
	if (!empty($_POST['Alta'])){
		$cont = new Controlador();
		$cont->AltaProv();	
	}
 ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form action="" method="Post" id="Altaf" name="Altaf">
	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre">
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="telefono" type="number" class="form-control" name="telefono" placeholder="Telefono" min="1">
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="formaPago" type="text" class="form-control" name="formaPago" placeholder="Forma de Pago">
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="tiempoPago" type="text" class="form-control" name="tiempoPago" placeholder="Tiempo de pago" >
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="presentacion" type="text" class="form-control" name="presentacion" placeholder="Presentación" >
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="frecuencia" type="text" class="form-control" name="frecuencia" placeholder="Frecuencia">
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="rfc" type="text" class="form-control" name="rfc" placeholder="RFC" >
  	</div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
      <input id="pU" type="password" class="form-control" name="pU" placeholder="Contraseña del Usuario" >
    </div>s
  	<input class="btn btn-default" type="submit" name="Alta" value="Alta">
</form>