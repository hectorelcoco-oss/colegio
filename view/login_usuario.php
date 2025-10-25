<?php
foreach ($campos as $key => $encabezado) {
	$$key="";
	if (isset($dataToView["data"][$key])) $$key = $dataToView["data"][$key];
}
?>
<div class="row">
	<?php
	
		if (isset($_POST["clave"]) && ($clave == "" || !password_verify($_POST["clave"], $clave)) ){
			?>
		<div class="alert alert-danger">
			Ingreso fallido. <a href="index.php?controller=usuario&action=list">Volver al listado</a>
		</div>
		<?php
		}
		else 
			if ($usuario !== ""){
			$_SESSION["usuario"]=$usuario;
			$_SESSION["rol"]=$rol;		
				header("Location: index.php?controller=usuario&action=list");
		}
	
		?>
	
	<form class="form" action="index.php?controller=usuario&action=login" method="POST">
	<div class="form-container">

		<div class="form-group">
			<label>Usuario</label>
			<input class="form-control" type="text" name="usuario" value="<?php echo $usuario; ?>" />
		</div>

		<div class="form-group">
			<label>Clave</label>
			<input class="form-control" type="password" name="clave" />
		</div>

		<input type="submit" value="Ingresar" class="btn btn-primary"/>
		<a class="btn btn-primary" href="index.php?controller=usuario&action=list">Cancelar</a>
	</form>
	</div>
</div>
 
