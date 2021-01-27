<?php
	require("../../Controlador.php"); 
	if (!empty($_POST['Alta'])){
		$cont = new Controlador();
		$cont->AltaProd();	
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
   		<input id="precio" type="number" class="form-control" name="precio" placeholder="Precio" min="1">
  	</div>
  	<div class="form-group">
      <label for="sel1">Sabor:</label>
      <select class="form-control" id="sabor">
        <option value="Chocolate">Chocolate</option>
        <option value="Cafe">café</option>
        <option value="Vainilla">Vainilla</option>
      </select>
    </div>
  	<div class="form-group">
      <label for="sel1">Categoría:</label>
      <select class="form-control" id="categoria">
        <option value="Liquido">Líquido</option>
        <option value="Dulce">Dulce</option>
        <option value="Salado">Salado</option>
      </select>
    </div>
  	<div class="form-group">
      <label for="sel1">Presentación:</label>
      <select class="form-control" id="presentacion">
        <option value="Taza">Taza</option>
        <option value="Vaso">Vaso</option>
        <option value="Plato">Plato</option>
      </select>
    </div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
   		<input id="cant" type="number" class="form-control" name="cant" placeholder="Cantidad" min="1">
  	</div>
  	<div class="input-group">
    	<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
      <input id="cantmin" type="number" class="form-control" name="cantmin" placeholder="Cantidad Mínima" min="1">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
      <input id="pU" type="password" class="form-control" name="pU" placeholder="Contraseña del Usuario" >
    </div>
    <input class="btn btn-default" type="submit" name="Alta" value="Alta">
   		
</form>