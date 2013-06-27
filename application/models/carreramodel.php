<?php
class CarreraModel extends CI_Model
 {
	public function adicionar_carrera($nombre){
		$data = array("nombre" => $nombre);
		 $this->db->insert("carrera",$data);
	}
	
	public function carreras(){
		$query = $this->db->order_by("nombre","ASC");
		$query = $this->db->get("carrera");
		return $query->result();
	}

}