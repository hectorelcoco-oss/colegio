<?php 

require_once 'model/usuario.php';

class UsuarioController{
	public $page_title;
	public $view;
	public $usuarioObj;

	public function __construct() {
		$this->view = 'listar_usuario';
		$this->page_title = '';
		$this->usuarioObj = new Usuario();
	}

	/* Lista los usuarios */
	public function list(){
		$this->page_title = 'Listado de usuarios';
		return $this->usuarioObj->getusuario();
	}

	/* trae los usuarios para editar */
	public function edit($id_usuario = null){
		$this->page_title = 'Editar usuario';
		$this->view = 'edit_usuario';
		/* Id can from get param or method param */
		if(isset($_GET["id_usuario"])) $id_usuario = $_GET["id_usuario"];
		return $this->usuarioObj->getusuarioById($id_usuario);
	}

	/* Create or update usuario */
	public function save(){
		$this->view = 'edit_usuario';
		$this->page_title = 'Editar usuario';
		$id = $this->usuarioObj->save($_POST);
		$result = $this->usuarioObj->getusuarioById($id);
		$_GET["response"] = true;
		return $result;
	}

	/* Confirm to delete */
	public function confirmDelete(){
		$this->page_title = 'Eliminar usuario';
		$this->view = 'confirm_delete_usuario';
		return $this->usuarioObj->getusuarioByid($_GET["id"]);
	}

	/* Delete */
	public function delete(){
		$this->page_title = 'Listado de usuarios';
		$this->view = 'delete_usuario';
		return $this->usuarioObj->deleteusuarioByIdusuario($_POST["id_usuario"]);
	}

}

?>

