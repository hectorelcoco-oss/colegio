<!--<link rel='stylesheet' href='estilos.css'/>-->

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
					?>

					<td>
						<a href="index.php?controller=rol&action=edit&id=<?php echo $id; ?>" class="btn btn-primary">✏️</a>
					</td>
					<td>
						<a href="index.php?controller=rol&action=confirmDelete&id=<?php echo $id; ?>" class="btn btn-danger">🗑️</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php else: ?>
		<div class="alert alert-info">
			Actualmente no existen usuarios.
		</div>
	<?php endif; ?>