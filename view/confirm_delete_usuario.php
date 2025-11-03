<div class="row">
	<form class="form" action="index.php?controller=usuario&action=delete" method="POST">
		<input type="hidden" name="id_usuario" value="<?php echo $dataToView["data"]["id_usuario"];?>"/>
		<div class="alert alert-warning">
			<b>¿Confirma que desea eliminar este usuario?:</b>
			<i><?php echo $dataToView["data"]["id_usuario"]; ?></i>
		</div>
		<input type="submit" value="Eliminar" class="btn btn-danger"/>
		<a class="btn btn-primary" href="index.php?controller=usuario&action=list">Cancelar</a>
	</form>
</div>
