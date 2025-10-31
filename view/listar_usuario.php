<div class="row">
	<?php if (count($dataToView["data"]) > 0): ?>
		<table class="tabl">
			<tr class="fila_tabla2">
				<?php
				foreach ($campos as $key => $encabezado) {
					if ($encabezado !== "" && $encabezado !== "ID") {
						echo "<th>" . $encabezado . "</th>";
					}
				}
				?>
				<th colspan="2">Funciones</th>
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
					if (isset($_SESSION["rol"]) && ($_SESSION["rol"] == 2 || $_SESSION["rol"] == 1)) {
					?>
						<td>
							<a href="index.php?controller=usuario&action=edit&id=<?php echo $id; ?>" class="btn btn-primary">✏️</a>
						</td>
						<?php
						if ($_SESSION["rol"] == 1) {
						?>
						<td>
							<a href="index.php?controller=usuario&action=confirmDelete&id=<?php echo $id; ?>" class="btn btn-danger">🗑️</a>
						</td>
					<?php
						}
					} ?>

				</tr>
			<?php endforeach; ?>

		</table>
	<?php else: ?>
		<div class="alert alert-info">
			Actualmente no existen usuarios.
		</div>
	<?php endif; ?>