<?php
class PersonaModel extends CI_Model
 {
	public function listar(){
		return $query = $this->db->get('persona')->result();
	}
	public function adicionar_persona($ci, $nombre, $ap, $am, $zona, $calle, $num, $telefono, $celular, $email, $cenombre, $cerelacion, $cedireccion, $cetelefono){
		$data = array("ci" => $ci,
						"nombre" => $nombre,
						"ap" => $ap,
						"am" => $am,
						"zona" => $zona,
						"calle" => $calle,
						"num" => $num,						
						"telefono" => $telefono,
						"celular" => $celular,
						"email" => $email,
						"cenombre" => $cenombre,
						"cerelacion" => $cerelacion,
						"cedireccion" => $cedireccion,
						"cetelefono" => $cetelefono);
		 $this->db->insert("persona",$data);
		 return $id = $this->db->insert_id();
	}
	
	public function modificar_persona($id_persona, $ci, $nombre, $ap, $am, $zona, $calle, $num, $telefono, $celular, $email, $cenombre, $cerelacion, $cedireccion, $cetelefono){
		$update = array("ci" => $ci,
						"nombre" => $nombre,
						"ap" => $ap,
						"am" => $am,
						"zona" => $zona,
						"calle" => $calle,
						"num" => $num,						
						"telefono" => $telefono,
						"celular" => $celular,
						"email" => $email,
						"cenombre" => $cenombre,
						"cerelacion" => $cerelacion,
						"cedireccion" => $cedireccion,
						"cetelefono" => $cetelefono);
		$this->db->where("id_persona",$id_persona);
		$this->db->update("persona",$update);
	}
	
	public function eliminar_persona($id_persona){
		$this->db->where("id_persona",$id_persona);
		$this->db->delete("persona");
	}
	
 	public function ver_id_persona($ci){
		$query = $this->db->where("ci",$ci);
		$query = $this->db->get("persona");
		return $query->row();
	}
	
	public function ver_persona($id_persona){
		$query = $this->db->where("id_persona",$id_persona);
		$query = $this->db->get("persona");
		return $query->row();
	}
}