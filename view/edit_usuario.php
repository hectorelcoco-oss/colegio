
<link rel="stylesheet" href="estilos.css"/>

<?php
$id_usuario = $apellido = $nombre = $dni = $usuario = $clave = $rol = "";

if(isset($dataToView["data"]["id_usuario"])) $id_usuario = $dataToView["data"]["id_usuario"];
if (isset($dataToView["data"]["apellido"])) $apellido = $dataToView["data"]["apellido"];
if (isset($dataToView["data"]["nombre"])) $nombre = $dataToView["data"]["nombre"];
if (isset($dataToView["data"]["dni"])) $dni = $dataToView["data"]["dni"];
if (isset($dataToView["data"]["usuario"])) $usuario = $dataToView["data"]["usuario"];
if (isset($dataToView["data"]["clave"])) $clave = $dataToView["data"]["clave"];
if (isset($dataToView["data"]["rol"])) $rol = $dataToView["data"]["rol"];
?>

<div class="row">
	<?php
	if(isset($_GET["response"]) and $_GET["response"] === true){
		?>
		<div class="alert alert-success">
			Operación realizada correctamente. <a href="index.php?controller=usuario&action=list">Volver al listado</a>
		</div>
		<?php
	}
	?>
	
	<form class="form" action="index.php?controller=usuario&action=save" method="POST">
		<input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?? ''; ?>" />
	<div class="form-container">
  
		<div class="form-group">
			<label>Apellido</label>
			<input class="form-control" type="text" name="apellido" value="<?php echo $apellido; ?>" />
		</div>

		<div class="form-group">
			<label>Nombre</label>
			<input class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>" />
		</div>

		<div class="form-group">
			<label>DNI</label>
			<input class="form-control" type="number" name="dni" value="<?php echo $dni; ?>" />
		</div>

		<div class="form-group">
			<label>Usuario</label>
			<input class="form-control" type="text" name="usuario" value="<?php echo $usuario; ?>" />
		</div>

		<div class="form-group">
			<label>Clave</label>
			<input class="form-control" type="password" name="clave" value="<?php echo $clave; ?>" />
		</div>

		<div class="form-group">
			<label>Rol</label>
			<input class="form-control" type="text" name="rol" value="<?php echo $rol; ?>" />
		</div>

		<input type="submit" value="Guardar" class="btn btn-primary"/>
		<a class="btn btn-primary" href="index.php?controller=usuario&action=list">Cancelar</a>
	</form>
	</div>
</div>
 
