<?php
foreach ($campos as $key => $encabezado) {
	$$key="";
	if (isset($dataToView["data"][$key])) $$key = $dataToView["data"][$key];
}
?>
<div class="row">
	<?php
	if(isset($_GET["response"]) and $_GET["response"] === true){
		?>
		<div class="alert alert-success">
			Operación realizada correctamente. <a href="index.php?controller=rol&action=list">Volver al listado</a>
		</div>
		<?php
	}
	?>
	
	<form class="form" action="index.php?controller=rol&action=save" method="POST">
		<input type="hidden" name="id_rol" value="<?php echo $id_rol ?? ''; ?>" />
	<div class="form-container">
  
		<div class="form-group">
			<label>Rol</label>
			<input class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>" />
		</div>

		<input type="submit" value="Guardar" class="btn btn-primary"/>
		<a class="btn btn-primary" href="index.php?controller=rol&action=list">Cancelar</a>
	</form>
	</div>
</div>
 
