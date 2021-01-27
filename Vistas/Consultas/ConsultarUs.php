<?php 
	require("../../Conexion.php");
 ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <div class="container">
  <h2>Usuarios</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Codigo Usuario</th>
        <th>Codigo Empleado</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $con=new Conexion();
	$bd=$con->conectar();
	$res=sqlsrv_query($bd,"SELECT * from Usuarios;");
    while ($row=sqlsrv_fetch_array($res)){ ?> 
	<tr>
		<td><?php echo $row['usuario'] ?></td>
		<td><?php echo $row['CodigoU'] ?></td>
		<td><?php echo $row['CodigoE1'] ?></td>
	</tr>
	<?php }$bd=$con->cerrar(); ?>
    </tbody>
  </table>
</div>
