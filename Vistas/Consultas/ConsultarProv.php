<?php 
  require("Conexion.php");
 ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <div class="container">
  <h2>Proveedores</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Forma de Pago</th>
        <th>Tiempo del Pago</th>
        <th>Presentación</th>
        <th>Frecuencia</th>
        <th>RFC</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $con=new Conexion();
  $bd=$con->conectar();
  $res=sqlsrv_query($bd,"SELECT * from Proveedores;");
    while ($row=sqlsrv_fetch_array($res)){ ?> 
  <tr>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['telefono'] ?></td>
    <td><?php echo $row['formaPago'] ?></td>
    <td><?php echo $row['tiempoPago'] ?></td>
    <td><?php echo $row['presentacion'] ?></td>
    <td><?php echo $row['frecuencia'] ?></td>
    <td><?php echo $row['RFC'] ?></td>
  </tr>
  <?php }$bd=$con->cerrar(); ?>
    </tbody>
  </table>
</div>