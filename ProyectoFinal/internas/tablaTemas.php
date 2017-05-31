<?php
    include("../configuracion/config.php");
    if(isset( $_GET['codigoMateriaSeleccionada'])){
        $codigoMateriaSeleccionada = $_GET['codigoMateriaSeleccionada'];
        $sentencia ="SELECT * FROM capitulo WHERE codigoMateria = $codigoMateriaSeleccionada";
        $resultado = mysql_query($sentencia, $conexion) or die(mysql_error());
        $totalFilas = mysql_num_rows($resultado);
        while ($row = mysql_fetch_assoc($resultado)) {
        ?>
        <tr>
        <td><?php echo $row['codigo']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['descripcion']; ?></td>
        <td><a href="principal.php?codigoCapituloSeleccionado=<?php echo $row['codigo']; ?>&codigoMateriaSeleccionada=<?php echo $codigoMateriaSeleccionada;?>"><img src="../images/document.png"></a></td>
        <td><a href=""><img src="../images/options.png"></a></td>
        </tr>
        <?php
        }
    }
?>