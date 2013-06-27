<?php
class MateriaModel extends CI_Model
 {
	public function adicionar_materia($sigla, $nombre, $mensualidad){
		$data = array("sigla" => $sigla,
						"nombre" => $nombre,
						"mensualidad" => $mensualidad);
		 $this->db->insert("materia",$data);
	}
	
	public function materias(){
		$query = $this->db->order_by("nombre","ASC");
		$query = $this->db->get("materia");
		return $query->result();
	}
	
	public function materias_habilitadas(){
		$q = $this->db->query('SELECT m.sigla, m.nombre as materia, p.nombre, p.ap, p.am, h.mes, h.turno, h.fecha_1limite, h.fecha_2limite, h.estado
								FROM persona p, materia m, docente d, habilitacion_materia h
								WHERE h.id_docente=d.id_docente AND h.id_materia=m.id_materia AND d.id_persona=p.id_persona');
		return $q->result();
	}
	
	public function adicionar_habilitacion($id_docente, $id_materia, $mes, $turno, $fecha_1limite, $fecha_2limite, $estado){
		$data = array("id_docente" => $id_docente,
				"id_materia" => $id_materia,
				"mes" => $mes,
				"turno" => $turno,
				"fecha_1limite" => $fecha_1limite,
				"fecha_2limite" => $fecha_2limite,
				"estado" => $estado);
		$this->db->insert("habilitacion_materia",$data);
	}

}