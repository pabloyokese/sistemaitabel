<?php
class MatriculacionModel extends CI_Model{
	
		public function adicionar_matricula($id_estudiante, $id_carrera, $fecha, $turno, $matricula){
			$data = array("id_estudiante" => $id_estudiante,
					"id_carrera" => $id_carrera,
					"fecha" => $fecha,
					"turno" => $turno,
					"matricula" => $matricula);
			$this->db->insert("matriculacion",$data);
		}

		public function ver_matricula($id_persona){
			$query = $this->db->query('SELECT m.id_matriculacion, c.nombre, m.fecha, m.matricula, m.turno
							FROM persona p, estudiante e, carrera c, matriculacion m
							WHERE p.id_persona='.$id_persona.' and p.id_persona=e.id_persona and e.id_estudiante=m.id_estudiante and m.id_carrera=c.id_carrera;');
			return $query->result();
		}
 }