<?php
	session_start();


	if(isset($_SESSION["acceso"]) ){
		$_SESSION["acceso"]="permitido";		
	}else{
		echo "ACCESO DENEGADO DEBE LOGUEARSE AL SISTEMA";
		exit();
	} 

	$estado_usuario = $_SESSION["rol"];
	if ($_SESSION["rol"] == 1)
		$estado_usuario = "webmaster";
	if ($_SESSION["rol"] == 2)
		$estado_usuario = "administrador";
	if ($_SESSION["rol"] == 3)
		$estado_usuario = "visitante"; 

	$nombre_usuario = $_SESSION["usuario"];	
	

	include_once("compartida/conexion.php");
	
	$sql="SELECT * FROM usuario ORDER BY apellido ASC";
	$qid=mysqli_query($conexionID,$sql);	
   
	// Verificar si se encontraron resultados
	if (mysqli_num_rows($qid) > 0) 
		{
				
		// Recorrer cada fila de resultados
		$html.="<link rel='stylesheet' href='../css/estilos_abmphp.css'>";
		$html.= "<div class= medio> <a class='link' href='inicio.php'>Volver a inicio</a> </div>";
		$html.= "<div class= medio><a class='link' href='formularios/form_usuarios.php'>Agregar nuevo usuario</a></div>";
		$html.="<section class='sec_tabla'>
            <h2 class='h2_sec'>NUESTROS USUARIOS</h2>
            <table class='tabl'>
                
            <tr class=fila_tabla2>	
				<th>ID</th>
				<th>APELLIDO</th>
				<th>NOMBRE</th>
				<th>DNI</th>
				<th>USUARIO</th>
				<th>CLAVE</th>
				<th>ROL</th>
				<th colspan='3'>Funciones</th>				
			</tr>		
		";
		while ($row = mysqli_fetch_assoc($qid)) {
			// Acceder a los valores de cada columna
			$id = $row["id"];
			$apellido = $row["apellido"];
			$nombre = $row["nombre"];
			$dni = $row["dni"];
			$usuario = $row["usuario"];
			$clave = $row["clave"];
			$rol = $row["rol"];

			if ($estado_usuario == "webmaster"){
				$funciones_disponibles="
				<td><a href='formularios/form_modificar_us.php?id_usuario=$id'>Modificar</a></td>
				<td><a href='formularios/form_eliminar_us.php?id_usuario=$id'>Eliminar</a></td>
				";
			}
			else{
				if ($estado_usuario == "administrador"){
					$funciones_disponibles="
					<td><a href='formularios/form_modificar_us.php?id_usuario=$id'>Modificar</a></td>
					<td></td>";
				}
				else{
					$funciones_disponibles="
					<td></td>					
					<td></td>";
				}
			}

			$html.="
				<tr>
					<td>$id</td>
					<td>$apellido</td>
					<td>$nombre</td>
					<td>$dni</td>
					<td>$usuario</td>
					<td>$clave</td>
					<td>$rol</td>
					<td>$funciones_disponibles</td>
				</tr>			
			";
		}
		$html.="</table>";

		if ($estado_usuario == "webmaster"){
			$html.="
			<table class='tabl'>
			<tr class=fila_tabla2>
			<!--	<td><a class='link' href='formularios/form_usuarios.php'>Agregar nuevo usuario</a></td> -->
				<td><a class='link' href='inicio.php'>Volver a inicio</a></td>
			</tr>";
		}
		if ($estado_usuario == "administrador" || $estado_usuario == "visitante"){
			$html.="
			<table class='tabl'>
			<tr class=fila_tabla2>
				<td><a class='link' href='inicio.php'>Volver a inicio</a></td>
			</tr>";
		}
		echo $html;
	}		
	else {
		echo "No se encontraron resultados.";
	}
	
	// Cerrar la conexión a la base de datos
	mysqli_close($conexionID);	
?>