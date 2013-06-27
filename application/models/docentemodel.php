<?php
class DocenteModel extends CI_Model
 {
		public function adicionar_docente($id_persona, $fecha_inicio, $estado){
		$data = array("id_persona" => $id_persona,
					   "fecha_inicio" => $fecha_inicio,
					   "estado" => $estado);
		 $this->db->insert("docente",$data);
	}
	
	public function eliminar_docente($id_persona){
		$this->db->where("id_persona",$id_persona);
		$this->db->delete("docente");
	}
		
	public function ver_docente($id_persona){
		$query = $this->db->where("id_persona",$id_persona);
		$query = $this->db->get("docente");
		return $query->row();
	}

	public function docentes(){
		$q = $this->db->query('SELECT p.id_persona, d.id_docente, p.ci, p.nombre, p.ap, p.am
								FROM persona p, docente d
								WHERE p.id_persona=d.id_persona ORDER BY p.nombre');
		return $q->result();
	}
}