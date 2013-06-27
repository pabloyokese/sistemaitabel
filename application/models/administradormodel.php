<?php
class AdministradorModel extends CI_Model
 {
		public function adicionar_administrador($id_persona, $cargo, $password, $fecha, $estado){
		$data = array("id_persona" => $id_persona,
					   "cargo" => $cargo,
					   "password" => $password,
					   "fecha_inicio" => $fecha,
					   "estado" => $estado);
		 $this->db->insert("administrador",$data); 
	}
	
	public function modificar_administrador($id_persona, $cargo, $password){
		$update = array("id_persona" => $id_persona,
					   "cargo" => $cargo,
					   "password" => $password);
		$this->db->where("id_persona",$id_persona);
		$this->db->update("administrador",$update);
	}
	
	public function eliminar_administrador($id_persona){
		$this->db->where("id_persona",$id_persona);
		$this->db->delete("administrador");
	}
	
	public function ver_administrador($id_persona){
		$query = $this->db->where("id_persona",$id_persona);
		$query = $this->db->get("administrador");
		return $query->row();
	}
}