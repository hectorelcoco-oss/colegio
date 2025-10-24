<?php 
require_once 'model/db.php';
require_once 'model/rol.php';

class RolController{
	public $page_title;
	public $view;
	public $tablaObj;
	private $tabla="rol";
	
	
	public function __construct() {
		$this->view = 'listar_'.$this->tabla;
		$this->page_title = '';
		$this->tablaObj = new Rol();
				
	}

	/* Lista los roles */
	public function list(){
		$this->page_title = 'Listado de '. $this->tabla .'es';
		return $this->tablaObj->getTabla(); 
	}

	/* trae los roles para editar */
	public function edit($id = null){
		$this->page_title = 'Editar '. $this->tabla;
		$this->view = 'edit_'. $this->tabla;
		if(isset($_GET["id"])) $id = $_GET["id"];
		return $this->tablaObj->getTablaById($id);
	}
	/* Create or update */
	public function save(){
		$this->view = 'edit_'. $this->tabla;
		$this->page_title = 'Editar '. $this->tabla;
		$id = $this->tablaObj->save($_POST);
		$result = $this->tablaObj->gettablaById($id);
		$_GET["response"] = true;
		return $result;
	}

	/* Confirm to delete */
	public function confirmDelete(){
		$this->page_title = 'Eliminar '. $this->tabla;
		$this->view = 'confirm_delete_'. $this->tabla;
		return $this->tablaObj->getTablaByid($_GET["id"]);
	}

	/* Delete */
	public function delete(){
		$this->page_title = 'Listado de '. $this->tabla . 'es';
		$this->view = 'delete_'. $this->tabla;
		return $this->tablaObj->deleteTablaById($_POST["id_". $this->tabla]);
	}
	/* Campos con su descripción */
	public function getCampos(){
		return $this->tablaObj->getCampos();
	}
	

}

?>

