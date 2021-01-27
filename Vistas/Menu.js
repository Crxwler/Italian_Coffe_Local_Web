$(document).ready(function(e) {
	$('#AltaUs').on('click', function() {
		$('#content').attr('src','Altas/AltaUs.php');
	});
	$('#BajaUs').on('click', function() {
		$('#content').attr('src','Bajas/BajaUs.php');
	});
	$('#ConsultarUs').on('click', function() {
		$('#content').attr('src','Consultas/ConsultarUs.php');
	});
	$('#ModificarUs').on('click', function() {
		$('#content').attr('src','Modificaciones/ModificarUs.php');
	});
	$('#AltaEm').on('click', function() {
		$('#content').attr('src','Altas/AltaEm.php');
	});
	$('#BajaEm').on('click', function() {
		$('#content').attr('src','Bajas/BajaEm.php');
	});
	$('#ConsultarEm').on('click', function() {
		$('#content').attr('src','Consultas/ConsultarEm.php');
	});
	$('#ModificarEm').on('click', function() {
		$('#content').attr('src','Modificaciones/ModificarEm.php');
	});
	$('#AltaProd').on('click', function() {
		$('#content').attr('src','Altas/AltaProd.php');
	});
	$('#BajaProd').on('click', function() {
		$('#content').attr('src','Bajas/BajaProd.php');
	});
	$('#ConsultarProd').on('click', function() {
		$('#content').attr('src','Consultas/ConsultarProd.php');
	});
	$('#ModificarProd').on('click', function() {
		$('#content').attr('src','Modificaciones/ModificarProd.php');
	});
	$('#AltaProv').on('click', function() {
		$('#content').attr('src','Altas/AltaProv.php');
	});
	$('#BajaProv').on('click', function() {
		$('#content').attr('src','Bajas/BajaProv.php');
	});
	$('#ConsultarProv').on('click', function() {
		$('#content').attr('src','Consultas/ConsultarProv.php');
	});
	$('#ModificarProv').on('click', function() {
		$('#content').attr('src','Modificaciones/ModificarProv.php');
	});
	$('#Menu').on('click', function() {
		$('#content').attr('src','Vistas/Bienvenida.php');
	});
	$('#CerrarSesion').on('click', function() {
		Cookies.remove('usuario');
		Cookies.remove('password');
		window.location.href("../Index.php");
	});
});