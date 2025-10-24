<div class="row">
	<form class="form" action="index.php?controller=rol&action=delete" method="POST">
		<input type="hidden" name="id_rol" value="<?php echo $dataToView["data"]["id_rol"]; ?>"/>
		<?php 
		if ($dataToView["data"]["id_rol"] == $dataToView["data"]["rol_usuario"]) 		{
			?>
		<div class="alert alert-warning">
			<b>Este rol no se puede eliminar porque tiene 
			<i><?php echo $dataToView["data"]["cant_usuarios"]; ?></i>
			usuarios relacionados</b>
		</div>
		<?php 
		}
		else {
		?>
		<div class="alert alert-warning">
			<b>¿Confirma que desea eliminar este usuario?:</b>
			<i><?php echo $dataToView["data"]["id_rol"]; ?></i>
		</div>
		<input type="submit" value="Eliminar" class="btn btn-danger"/>
		<?php 
		}
		?>
		<a class="btn btn-primary" href="index.php?controller=rol&action=list">Cancelar</a>
	</form>
</div>
