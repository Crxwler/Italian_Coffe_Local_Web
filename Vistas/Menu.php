<?php 
	require('../Config.php');
	if (!($_COOKIE['usuario'])){
		header('Location: ../index.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administración</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="Menu.js" type="text/javascript"></script>
</head>
<body background="http://clientefrecuente.mx/wp-content/uploads/2017/07/italian.png" width="100%" height="1000">
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<a class="navbar-brand" href="#Menu">ItalianCoffe</a>
   			</div>
    		<ul class="nav navbar-nav">
      			<li class="active"><a href="#Menu">Página principal</a></li>
      			<li class="dropdown">
        			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuario
        				<span class="caret"></span>
        			</a>
        			<ul class="dropdown-menu">
        				<li><a href="#AltaUs" id="AltaUs">Altas</a></li>
         				<li><a href="#BajaUs" id="BajaUs">Bajas</a></li>
          				<li><a href="#ConsultarUs" id="ConsultarUs">Consulta</a></li>
          				<li><a href="#ModificarUs" id="ModificarUs">Modificar</a></li>
       				</ul>
     	 		</li>
      			<li class="dropdown">
        			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Productos
        				<span class="caret"></span>
        			</a>
        			<ul class="dropdown-menu">
        				<li><a href="#AltaProd" id="AltaProd">Altas</a></li>
         				<li><a href="#BajaProd" id="BajaProd">Bajas</a></li>
          				<li><a href="#ConsultarProd" id="ConsultarProd">Consulta</a></li>
          				<li><a href="#ModificarProv" id="ModificarProv">Modificar</a></li>
       				</ul>
     	 		</li>
      			<li class="dropdown">
        			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Proveedores
        				<span class="caret"></span>
        			</a>
        			<ul class="dropdown-menu">
        				<li><a href="#AltaProv" id="AltaProv">Altas</a></li>
         				<li><a href="#BajaProv" id="BajaProv">Bajas</a></li>
          				<li><a href="#ConsultarProv" id="ConsultarProv">Consulta</a></li>
          				<li><a href="#ModificarProv" id="ModificarProv">Modificar</a></li>
       				</ul>
     	 		</li>
     	 		<li class="dropdown">
        			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Empleados
        				<span class="caret"></span>
        			</a>
        			<ul class="dropdown-menu">
        				<li><a href="#Altaem"id="AltaEm">Altas</a></li>
         				<li><a href="#BajaEm"id="BajaEm">Bajas</a></li>
          				<li><a href="#ConsultarEm"id="ConsultarEm">Consulta</a></li>
          				<li><a href="#ModificarEm"id="ModificarEm">Modificar</a></li>
       				</ul>
     	 		</li>
     	 		<li><a href="#CerrarSesion" id="CerrarSesion">Cerrar Sesion</a></li>
    		</ul>
 		 </div>
	</nav>	
	<iframe id="content" name="content" border="0" scrolling="yes" width="100%" height="800" src="Bienvenida.php"></iframe>
</body>
</html>