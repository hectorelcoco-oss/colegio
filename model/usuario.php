<?php 

require_once 'config/config.php';
require_once 'db.php';

class Usuario {

	private $table = 'usuario';
	private $conection;

	public function __construct() {
		
	}

	/* Set conection */
	public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	/* Get all usuario */
	public function getusuario(){
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table;
		$stmt = $this->conection->prepare($sql);
		$stmt->execute();
		$resultado = $stmt->get_result();

		return $resultado->fetch_all(MYSQLI_ASSOC);
	}

	/* Get usuario by id */
	public function getusuarioById($id){
		if(is_null($id)) return false;
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table. " WHERE id_usuario = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->bind_param('i', $id_usuario); // 'i' para entero
		$stmt->execute();
		$resultado = $stmt->get_result();
		return $resultado->fetch_assoc();
	}

	/* Save usuario */
	public function save($param){
		$this->getConection();

		/* Set default values */
		$title = $content = "";

		/* Check if exists */
		$exists = false;
		if(isset($param["id_usuario"]) and $param["id_usuario"] !=''){
			$actualusuario = $this->getusuarioById($param["id_usuario"]);
			if(isset($actualusuario["id_usuario"])){
				$exists = true;	
				/* Actual values */
				$id_usuario = $param["id_usuario"];
				$apellido = $actualusuario["apellido"];
				$nombre = $actualusuario["nombre"];
				$dni = $actualusuario["dni"];
				$usuario = $actualusuario["usuario"];
				$clave = $actualusuario["clave"];
				$rol = $actualusuario["rol"];
			}
		}

		/* Received values */
		if(isset($param["id_usuario"])) $id_usuario = $param["id_usuario"];
		if(isset($param["apellido"])) $apellido = $param["apellido"];
		if(isset($param["nombre"])) $nombre = $param["nombre"];
		if(isset($param["dni"])) $dni = $param["dni"];
		if(isset($param["usuario"])) $usuario = $param["usuario"];
		if(isset($param["clave"])) $clave = $param["clave"];
		if(isset($param["rol"])) $rol = $param["rol"];

		/* Database operations */
		if($exists){
			$sql = "UPDATE ".$this->table. " SET id_usuario = ?, apellido = ?, nombre = ?, dni = ?, usuario = ?, clave = ?, rol = ? WHERE id_usuario = ?";
			$stmt = $this->conection->prepare($sql);
			$res = $stmt->execute([$id_usuario, $apellido, $nombre, $dni, $usuario, $clave, $rol]);
		}else{
			$sql = "INSERT INTO ".$this->table. " (id_usuario, apellido, nombre, dni, usuario, clave, rol) VALUES (?, ?, ?, ?, ?, ?, ?)";
			$stmt = $this->conection->prepare($sql);
			$stmt->execute([$id_usuario, $apellido, $nombre, $dni, $usuario, $clave, $rol]);
			$id_usuario = $this->conection->insert_id;
		}

		return $id_usuario;	

	}

	/* Delete usuario by id */
	public function deleteusuarioByIdusuario($id_usuario){
		$this->getConection();
		$sql = "DELETE FROM ".$this->table. " WHERE id_usuario = ?";
		$stmt = $this->conection->prepare($sql);
		return $stmt->execute([$id_usuario]);
	}

}
?>


