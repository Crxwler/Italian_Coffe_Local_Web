<?php 
	require("../../Conexion.php");
 ?>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <div class="container">
  <h2>Empleados</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Curp</th>
        <th>Telefono</th>
        <th>Seguro</th>
        <th>Sexo</th>
        <th>Edad</th>
        <th>Correo</th>
        <th>CodigoEmpresa</th>
        <th>CodigoEmpleado</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $con=new Conexion();
	$bd=$con->conectar();
	$res=sqlsrv_query($bd,"SELECT * from Empleados;");
    while ($row=sqlsrv_fetch_array($res)){ ?> 
	<tr>
		<td><?php echo $row['nombre']   ?></td>
   	    <td><?php echo $row['apellidos'] ?></td>
		<td><?php echo $row['direccion'] ?></td>
		<td><?php echo $row['curp'] ?></td>
        <td><?php echo $row['telefono']   ?></td>
        <td><?php echo $row['seguro'] ?></td>
        <td><?php echo $row['sexo'] ?></td>
        <td><?php echo $row['edad'] ?></td>
        <td><?php echo $row['correo'] ?></td>
        <td><?php echo $row['CodigoEM1'] ?></td>
        <td><?php echo $row['CodigoE'] ?></td>
	</tr>
	<?php } ?>
    </tbody>
  </table>
</div>
