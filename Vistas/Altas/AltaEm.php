<?php
	require("../../Controlador.php"); 
	if (!empty($_POST['Alta'])){
		$cont = new Controlador();
		$cont->AltaEm();	
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
   		<input id="apellidos" type="text" class="form-control" name="apellidos" placeholder="Apellidos" >
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección">
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="curp" type="text" class="form-control" name="curp" placeholder="CURP" >
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="telefono" type="number" class="form-control" name="telefono" placeholder="Telefono" min="1">
  	</div>
  	<div class="form-group">
      <label for="sel1">Seguro:</label>
      <select class="form-control" id="seguro">
        <option value="IMSS">IMSS</option>
        <option value="ISSTE">ISSTE</option>
        <option value="SeguroPopular">Seguro Popular</option>
      </select>
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
      <input id="edad" type="number" class="form-control" name="edad" placeholder="Edad" min="1">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
      <input id="correo" type="mail" class="form-control" name="correo" placeholder="Correo" >
    </div>
    Sexo:
    <label class="radio-inline"><input type="radio" name="sexo" id="sexo" value="Hombre">Hombre</label>
    <label class="radio-inline"><input type="radio" name="sexo" id="sexo" value="Mujer">Mujer</label>
    <label class="radio-inline"><input type="radio" name="sexo" id="sexo" value="Indefinido">Inndefinido</label><br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
      <input id="pU" type="password" class="form-control" name="pU" placeholder="Contraseña del Usuario" >
    </div>
  	<input class="btn btn-default" type="submit" name="Alta" value="Alta">
</form>