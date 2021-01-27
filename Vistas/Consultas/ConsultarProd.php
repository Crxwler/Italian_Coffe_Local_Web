<?php 
  require("../../Conexion.php");
 ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <div class="container">
  <h2>Productos</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Sabor</th>
        <th>Categoría</th>
        <th>Presentación</th>
        <th>Cantidad</th>
        <th>Cantidad mínima</th>
        <th>Código</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $con=new Conexion();
  $bd=$con->conectar();
  $res=sqlsrv_query($bd,"SELECT * from Productos;");
    while ($row=sqlsrv_fetch_array($res)){ ?> 
  <tr>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['precio'] ?></td>
    <td><?php echo $row['sabor'] ?></td>
    <td><?php echo $row['categoria'] ?></td>
    <td><?php echo $row['presentacion'] ?></td>
    <td><?php echo $row['cantidad'] ?></td>
    <td><?php echo $row['cantMin'] ?></td>
    <td><?php echo $row['CodigoP'] ?></td>
  </tr>
  <?php }$bd=$con->cerrar(); ?>
    </tbody>
  </table>
</div>