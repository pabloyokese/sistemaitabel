<?php
class LoginModel extends CI_Model
{
	public function Login($ci,$password){
        $q = $this->db->query('SELECT p.id_persona, p.ci, p.nombre, a.cargo, a.estado 
								FROM persona p, administrador a
								WHERE p.ci='.$ci.' and a.password='.$password.' and a.estado="Activo";');
		return $q->row(0);
    }
}
