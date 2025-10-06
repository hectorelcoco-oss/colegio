<div class="row">
	<div class="col-md-12 text-right">
		<a href="index.php?controller=usuario&action=edit" class="btn btn-outline-primary">Crear usuario</a>
		<hr />
	</div>

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
						echo "<td>" . $tabla[$key] . "</td>";
					}
					elseif ($encabezado == "ID") {
						$id = $tabla[$key];
					}
				}
				?>
					<td>
						<a href="index.php?controller=usuario&action=edit&id=<?php echo $id; ?>" class="btn btn-primary">Editar</a>
					</td>
					<td>
						<a href="index.php?controller=usuario&action=confirmDelete&id=<?php echo $id; ?>" class="btn btn-danger">Eliminar</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php else: ?>
		<div class="alert alert-info">
			Actualmente no existen usuarios.
		</div>
	<?php endif; ?>