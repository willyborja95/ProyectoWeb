<div class="col-md-1"></div>
  <div class="col-md-5">
    <table id="tablaPortafolios" class="table table-hover">
      <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>.</th>
        <th>.</th>
      </tr>
      <tbody>
        <?php
        include("../configuracion/config.php");
        $sentencia ="SELECT * FROM materia WHERE codigoUsuario=$codigoUsuario";
        $resultado = mysql_query($sentencia, $conexion) or die(mysql_error());
        $totalFilas = mysql_num_rows($resultado);
        while ($row = mysql_fetch_assoc($resultado)) {
        ?>
        
        <tr>
          <td><?php echo $row['codigo']; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['descripcion']; ?></td>
          <td><a href="principal.php?codigoMateriaSeleccionada=<?php echo $row['codigo']; ?>"><img src="../images/open.png"></a></td>
          <td><a href=""><img src="../images/options.png"></a></td></tr>
        <?php
        }

        ?>
      </tbody>
    </table>
  </div>
  <div class="col-md-5">
    <table id="tablaNotebooks" class="table table-hover">
      <tbody>
        <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Descripción</th>
        </tr>
        <?php
          include("tablaTemas.php");
        ?>
      </tbody>
    </table>
    <div class="col-md-1"></div>
  </div>