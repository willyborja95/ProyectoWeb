<?php
	include("../configuracion/config.php");
	if(isset( $_GET['codigoCapituloSeleccionado'])){
		$codigoCapituloSeleccionado = $_GET['codigoCapituloSeleccionado'];
		$codigoMateriaSeleccionada = $_GET['codigoMateriaSeleccionada'];
		$sentencia ="SELECT * FROM capitulo WHERE codigo = $codigoCapituloSeleccionado";
        $resultado = mysql_query($sentencia, $conexion) or die(mysql_error());
        $totalFilas = mysql_num_rows($resultado);
        while ($row = mysql_fetch_assoc($resultado)){
        ?>
			<div class="row align-middle align-center">
				<div class="col-md-8">
					<strong><h2><?php echo $row['nombre']; ?></h2></strong>
				</div>
				<div class="col-md-4 text-right">
					<button class="botonGuardar pull-right" onclick="actualizarTexto()">
					  Guardar Cambios
					</button>
				</div>
				<?php 
					$textoRecuperado = $row['texto']; 
				?>
			</div>
			<div class="row">
				<div id="summernote"><p></p></div>
			</div>
		<?php
		}
	}
?>