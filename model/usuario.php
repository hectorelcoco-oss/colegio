<?php

require_once "./config/config.php";

class Usuario {

	private $tabla = 'usuario';
	private $conection;
	private $campos;

	public function __construct() {
		$this->campos= [
			"id_usuario" => "ID",
			"apellido" => "Apellido",
			"nombre" => "Nombre",
			"dni" => "DNI",
			"usuario" => "Usuario",
			"clave" => "Contraseña",
			"rol" => "Rol"
		];
		/** 
			"id_usuario" => "ID",
			"apellido" => "Apellido",
			"nombre"=>"Nombre",
			"dni" => "DNI",
			"usuario" => "Usuario",
			"clave" => "Contraseña",
			"fecha_nac" => "Fecha Nac.",
			"sexo" => "Sexo",
			"email" => "Email"
		 */
	}

	/* Set conection */
	public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	/* Get all */
	public function getTabla(){
		$this->getConection();
		$sql = "SELECT * FROM ".$this->tabla;
		$stmt = $this->conection->prepare($sql);
		$stmt->execute();
		$resultado = $stmt->get_result();

		return $resultado->fetch_all(MYSQLI_ASSOC);
	}

	/* Get by id */
	public function getTablaById($id){
		if(is_null($id)) return false;
		$this->getConection();
		$sql = "SELECT * FROM ".$this->tabla. " WHERE id_".$this->tabla." = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->bind_param('i', $id); // 'i' para entero
		$stmt->execute();
		$resultado = $stmt->get_result();
		return $resultado->fetch_assoc();
	}

	/* Save */
	public function save($param){
		$this->getConection();

		/* Check if exists */
		$exists = false;
		if(isset($param["id_" . $this->tabla]) and $param["id_" . $this->tabla] !=''){
			$actual = $this->getTablaById($param["id_" . $this->tabla]);
			if(isset($actual["id_" . $this->tabla])){
				$exists = true;
				/* Actual values */
				foreach ($this->campos as $key => $value) {
					$$key = $actual[$key];
				}
			}
		}

		/* Received values */
		foreach ($this->campos as $key => $value) {
			if (isset($param[$key])) $$key = $param[$key];
		}

		/* Database operations */
		if($exists){
			$sql  = "UPDATE ".$this->tabla. " SET ";
			$data=[];
			$id=0;
			foreach ($this->campos as $key => $value) {
				if ($key!=="id_".$this->tabla) {
					if (count($data) > 0) $sql .= ", ";
					$sql .= $key . " = ?";
					$data[] = $$key;
				}
				else {
					$id= $$key;
				}
			}
			$data[] = $id;
			$sql .= " WHERE id_" . $this->tabla . " = ?";
			$stmt = $this->conection->prepare($sql);
			$res = $stmt->execute($data);
		}else{
			$sql = "INSERT INTO ".$this->tabla." (";
			$data = [];
			foreach ($this->campos as $key => $value) {
				if (count($data) > 0) $sql .= ", ";
				$sql .= $key;
				$data[] = $$key;
			}
			$sql .= ") VALUES (";
			for ($i=0; $i<count($data);$i++){
				if ($i > 0) $sql .= ", ";
				$sql .= "?";
			}
			$sql .= ")";
			$stmt = $this->conection->prepare($sql);
			$stmt->execute($data);
			$id = $this->conection->insert_id;
		}

		return $id;	

	}

	/* Delete by id */
	public function deleteTablaById($id){
		$this->getConection();
		$sql = "DELETE FROM ".$this->tabla. " WHERE id_" . $this->tabla . " = ?";
		$stmt = $this->conection->prepare($sql);
		return $stmt->execute([$id]);
	}

	public function getCampos(){
		return $this->campos;
	}
}
?>