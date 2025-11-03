<div class="row">
	<!-- Tabla para listar roles -->
	<?php if (count($dataToView["data"]) > 0){ ?>
		<table class="tabl">
			<tr class="fila_tabla2">
				<?php
				foreach ($campos as $key => $encabezado) {
					if ($encabezado !== "" && $encabezado !== "ID") {
						echo "<th>" . $encabezado . "</th>";
					}
				}
				?>
				<!-- quitra el campo funciones si el rol no es 1 ó 2-->
				<?php
				if (isset($_SESSION["rol"]) && ($_SESSION["rol"] == 2 || $_SESSION["rol"] == 1)) : ?>
					<th colspan="2">Funciones</th>
				<?php endif; ?>
			</tr>

			<?php foreach ($dataToView["data"] as $tabla): ?>
				<tr class="fila_tabla">
					<?php
					$id = "id";
					foreach ($campos as $key => $encabezado) {
						if ($encabezado !== "" && $encabezado !== "ID") {
							echo "<td>";
							if ($key == "id_rol") {
								echo $tabla["rol"];
							} else {
								echo $tabla[$key];
							}
							echo "</td>";
						} elseif ($encabezado == "ID") {
							$id = $tabla[$key];
						}
					}
						// muestra los botones editar y eliminar según el rol del usuario
					?>
					<?php if (isset($_SESSION["rol"]) && ($_SESSION["rol"] == 2 || $_SESSION["rol"] == 1)) {
					?>
						<td>
							<a href="index.php?controller=rol&action=edit&id=<?php echo $id; ?>" class="btn btn-primary">✏️</a>
						</td>
						<?php
						if ($_SESSION["rol"] == 1) {
						?>
							<td>
								<a href="index.php?controller=rol&action=confirmDelete&id=<?php echo $id; ?>" class="btn btn-danger">🗑️</a>
							</td>
					<?php
						}
					} ?>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php } else{ ?>
		<div class="alert alert-info">
			Actualmente no existen roles.
		</div>	
	<?php }?>
</div>	