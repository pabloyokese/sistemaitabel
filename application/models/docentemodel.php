<?php
class DocenteModel extends CI_Model
 {
		public function adicionar_docente($id_persona, $fecha_inicio, $estado){
		$data = array("id_persona" => $id_persona,
					   "fecha_inicio" => $fecha_inicio,
					   "estado" => $estado);
		 $this->db->insert("docente",$data);
		 
	}

}