<?php
class AdministradorModel extends CI_Model
 {
		public function adicionar_administrador($id_persona, $cargo, $password, $fecha_inicio, $estado){
		$data = array("id_persona" => $id_persona,
					   "cargo" => $cargo,
					   "password" => $password,
					   "fecha_inicio" => $fecha_inicio,
					   "estado" => $estado);
		 $this->db->insert("administrador",$data);
		 
	}

}