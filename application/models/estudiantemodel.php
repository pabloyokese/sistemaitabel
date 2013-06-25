<?php
class EstudianteModel extends CI_Model
 {
	public function adicionar_estudiante($id_persona, $password){
		$data = array("id_persona" => $id_persona,
					   "password" => $password,
						"estado" => 'Activo');
		 $this->db->insert("estudiante",$data);
	}
	
	public function modificar_estudiante($id_persona, $password){
		$update = array("password" => $password);
		$this->db->where("id_persona",$id_persona);
		$this->db->update("estudiante",$update);
	}
	
	public function eliminar_estudiante($id_persona){
	$this->db->where("id_persona",$id_persona);
	$this->db->delete("estudiante");
	}
	
	public function ver_estudiante($id_persona){
		$query = $this->db->where("id_persona",$id_persona);
		$query = $this->db->get("estudiante");
		return $query->row();
	}

	public function adicionar_matricula($id_estudiante, $id_carrera, $fecha, $matricula){
		$data = array("id_estudiante" => $id_estudiante,
				"id_carrera" => $id_carrera,
				"fecha" => $fecha,
				"matricula" => $matricula);
		$this->db->insert("matriculacion",$data);
	}
}