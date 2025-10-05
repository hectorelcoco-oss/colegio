<link rel='stylesheet' href='estilos.css'/>

<div class="row">
	<div class="col-md-12 text-right">
		<a href="index.php?controller=usuario&action=edit" class="btn btn-outline-primary">Crear usuario</a>
		<hr/>
	</div>

	<?php if(count($dataToView["data"]) > 0): ?>
		<table class="tabl">
			<tr class="fila_tabla2">
				<th>Apellido</th>
				<th>Nombre</th>
				<th>DNI</th>
				<th>Usuario</th>
				<th>Rol</th>
				<th colspan="2">Funciones</th>
			</tr>
		
			<?php foreach($dataToView["data"] as $usuario): ?>
				<tr class="fila_tabla">
					<td><?php echo $usuario['apellido']; ?></td>
					<td><?php echo $usuario['nombre']; ?></td>
					<td><?php echo $usuario['dni']; ?></td>
					<td><?php echo $usuario['usuario']; ?></td>
					<td><?php echo $usuario['rol']; ?></td>
					<td>
						<a href="index.php?controller=usuario&action=edit&id=<?php echo $usuario['id_usuario']; ?>" class="btn btn-primary">Editar</a>
					</td>
					<td>
						<a href="index.php?controller=usuario&action=confirmDelete&id=<?php echo $usuario['id_usuario']; ?>" class="btn btn-danger">Eliminar</a>					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php else: ?>
		<div class="alert alert-info">
			Actualmente no existen usuarios.
		</div>
	<?php endif; ?>
