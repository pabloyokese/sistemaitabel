<?php
class principal extends CI_Controller
 {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('loginmodel');
		$this->load->model('personamodel');
		$this->load->model('administradormodel');
		$this->load->model('estudiantemodel');
		$this->load->model('docentemodel');
		$this->load->model('matriculacionmodel');
		$this->load->model('carreramodel');
		$this->load->model('materiamodel');
	}
	
	public function index(){
		$this->load->view('login');
		/*
		$lista_usuarios = $this->personamodel->listar();
		$data['titulo'] = "El titulo de mi sitio";
		$data['listausuarios'] = $lista_usuarios;
		$this->load->view('login',$data);*/
	}
	
	public function validar(){
		
		$usuario = $this->loginmodel->login($_POST['ci'],$_POST['password']);
		if($usuario==null){ //verifica si hay datos
			echo'error';
		}
		else{ 
			// todo va bien
			$this->session->set_userdata('username', $usuario->nombre);
			$data['contenido'] = 'estudiante/estudiante';
			$this -> load -> view('templates/menu_main', $data);
		}
	}
	
	public function administrador(){
	
		$data['contenido'] = 'administrador/Administrador';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function ver_administrador(){
		$id_persona = $this->personamodel->ver_id_persona($_POST['ci']);//Obtener el id_persona para las consultas
		if($id_persona==NULL){ //compara si existe ci en la BD, si no encuentra pasa a la pantalla adicionar
			$data['ci'] =$_POST['ci'];
			$data['contenido'] = 'administrador/Adicionar_Administrador';
			$this -> load -> view('templates/menu_main', $data);
		}
		else {//Carga los datos del estudiante
			redirect ( 'principal/load_administrador/'.$id_persona->id_persona);
		}
	}
	
	public function load_administrador(){
	
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));// Busca el id_persona en la tabla personas
		$data['administrador'] = $this->administradormodel->ver_administrador($this->uri->segment(3));
		$data['contenido'] = 'administrador/Ver_Administrador';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	
	public function adicionar_administrador(){
	
		$data['contenido'] = 'administrador/Adicionar_Administrador';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function cargar_administrador(){
	
		$id_persona = $this->personamodel->adicionar_persona($_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$fecha_inicio = date('Y-m-d');
		$this->administradormodel->adicionar_administrador($id_persona, $_POST['cargo'], $_POST['password'],$fecha_inicio,'Activo');
		redirect ( 'principal/load_administrador/'.$id_persona);
	}
	
	public function agregar_persona_administrador(){//Agragar a una persona como administrador
		
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));
		$data['contenido'] = 'administrador/Persona_Administrador';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function cargar_persona_administrador(){
	
		$fecha_inicio = date('Y-m-d');
		$this->administradormodel->adicionar_administrador($_POST['id_persona'], $_POST['cargo'], $_POST['password'],$fecha_inicio,'Activo');
		redirect ( 'principal/load_administrador/'.$_POST['id_persona']);
	}
	
	public function modificar_administrador(){
	
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));
		$data['administrador'] = $this->administradormodel->ver_administrador($this->uri->segment(3));
		$data['contenido'] = 'administrador/Modificar_Administrador';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function modificacion_administrador(){
	
		$this->personamodel->modificar_persona($_POST['id_persona'], $_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$this->administradormodel->modificar_administrador($_POST['id_persona'],$_POST['cargo'],$_POST['password']);
		redirect ( 'principal/load_administrador/'.$_POST['id_persona']);
	}
	
	public function eliminar_administrador(){
	
		$this->administradormodel->eliminar_administrador($this->uri->segment(3));
		$this->personamodel->eliminar_persona($this->uri->segment(3));
		$data['contenido'] = 'administrador/Administrador';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function estudiante(){
	
		$data['contenido'] = 'estudiante/Estudiante';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function load_estudiante(){
	
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));// Busca el id_persona en la tabla personas
		$data['estudiante'] = $this->estudiantemodel->ver_estudiante($this->uri->segment(3));
		$data['matricula'] = $this->matriculacionmodel->ver_matricula($this->uri->segment(3));
		$data['contenido'] = 'estudiante/Ver_Estudiante';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function ver_estudiante(){
		$id_persona = $this->personamodel->ver_id_persona($_POST['ci']);//Obtener el id_persona para las consultas
		if($id_persona==NULL){ //compara si existe ci en la BD, si no encuentra pasa a la pantalla adicionar
			$data['ci'] =$_POST['ci'];
			$data['contenido'] = 'estudiante/Adicionar_Estudiante';
			$this -> load -> view('templates/menu_main', $data);
		}
		else {//Carga los datos del estudiante
			redirect ( 'principal/load_estudiante/'.$id_persona->id_persona);
		}
	}
	
	public function adicionar_estudiante(){
	
		$id_persona = $this->personamodel->adicionar_persona($_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$password_random = rand(0, 99999);
		$this->estudiantemodel->adicionar_estudiante($id_persona,$password_random);
		redirect ( 'principal/load_estudiante/'.$id_persona);
	}
	
	public function agregar_persona_estudiante(){//Agragar a una persona como estudiante
	
		$password_random = rand(0, 99999);
		$this->estudiantemodel->adicionar_estudiante($this->uri->segment(3),$password_random);
		redirect ( 'principal/load_estudiante/'.$this->uri->segment(3));
	}
	
	public function modificar_estudiante(){
	
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));
		$data['estudiante'] = $this->estudiantemodel->ver_estudiante($this->uri->segment(3));
		$data['contenido'] = 'estudiante/Modificar_Estudiante';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function modificacion_estudiante(){
	
		$this->personamodel->modificar_persona($_POST['id_persona'], $_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$this->estudiantemodel->modificar_estudiante($_POST['id_persona'],$_POST['password']);
		redirect ( 'principal/load_estudiante/'.$_POST['id_persona']);
	}
	
	public function eliminar_estudiante(){

		$this->estudiantemodel->eliminar_estudiante($this->uri->segment(3));
		$this->personamodel->eliminar_persona($this->uri->segment(3));
		$data['contenido'] = 'estudiante/Estudiante';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function matricular(){
		$data['carrera'] = $this->carreramodel->carreras();
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));
		$data['estudiante'] = $this->estudiantemodel->ver_estudiante($this->uri->segment(3));
		$data['contenido'] = 'estudiante/Adicionar_Ficha_Matricula';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function matriculacion_estudiante(){
	
		$fecha = date('Y-m-d');
		$this->matriculacionmodel->adicionar_matricula($_POST['id_estudiante'],$_POST['carrera'],$fecha, $_POST['turno'], $_POST['matricula']);
		redirect ('principal/load_estudiante/'.$_POST['id_persona']);
	}
	
	public function docente(){
	
		$data['contenido'] = 'docente/Docente';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function load_docente(){
	
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));// Busca el id_persona en la tabla personas
		$data['docente'] = $this->docentemodel->ver_docente($this->uri->segment(3));
		$data['contenido'] = 'docente/Ver_Docente';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function ver_docente(){
		$id_persona = $this->personamodel->ver_id_persona($_POST['ci']);//Obtener el id_persona para las consultas
		if($id_persona==NULL){ //compara si existe ci en la BD, si no encuentra pasa a la pantalla adicionar
			$data['ci'] =$_POST['ci'];
			$data['contenido'] = 'docente/Adicionar_Docente';
			$this -> load -> view('templates/menu_main', $data);
		}
		else {//Carga los datos del estudiante
			redirect ( 'principal/load_docente/'.$id_persona->id_persona);
		}
	}
		
	public function adicionar_docente(){
		
		$data['contenido'] = 'docente/Adicionar_Docente';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function cargar_docente(){
	
		$id_persona = $this->personamodel->adicionar_persona($_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$fecha_inicio = date('Y-m-d');
		$this->docentemodel->adicionar_docente($id_persona,$fecha_inicio,'Activo');
		redirect ( 'principal/load_docente/'.$id_persona);
	}
	
	public function agregar_persona_docente(){//Agragar a una persona como estudiante
	
		$fecha_inicio = date('Y-m-d');
		$this->docentemodel->adicionar_docente($this->uri->segment(3),$fecha_inicio,'Activo');
		redirect ( 'principal/load_docente/'.$this->uri->segment(3));
	}

	public function modificar_docente(){
	
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));
		$data['contenido'] = 'docente/Modificar_Docente';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function modificacion_docente(){
	
		$this->personamodel->modificar_persona($_POST['id_persona'], $_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		redirect ( 'principal/load_docente/'.$_POST['id_persona']);
	}
	
	public function eliminar_docente(){
	
		$this->docentemodel->eliminar_docente($this->uri->segment(3));
		$this->personamodel->eliminar_persona($this->uri->segment(3));
		$data['contenido'] = 'docente/Docente';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function carrera(){
		
		$data['carrera'] = $this->carreramodel->carreras();
		$data['contenido'] = 'carrera/Carrera';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function adicionar_carrera(){
		$data['contenido'] = 'carrera/Adicionar_Carrera';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function cargar_carrera(){
		$this->carreramodel->adicionar_carrera($_POST['nombre']);
		redirect ( 'principal/carrera');
	}
	
	public function materia(){
	
		$data['materia'] = $this->materiamodel->materias();
		$data['contenido'] = 'materia/Materia';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function adicionar_materia(){
		$data['contenido'] = 'materia/Adicionar_Materia';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function cargar_materia(){
		$this->materiamodel->adicionar_materia($_POST['sigla'], $_POST['nombre'], $_POST['mensualidad']);
		redirect ( 'principal/materia');
	}
	
	public function habilitacion_materia(){
	
		$data['materia'] = $this->materiamodel->materias_habilitadas();
		$data['contenido'] = 'materia/Materias_Habilitadas';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function adicionar_habilitacion(){
		
		$data['docente'] = $this->docentemodel->docentes();
		$data['materia'] = $this->materiamodel->materias();
		$data['contenido'] = 'materia/Adicionar_Habilitacion';
		$this -> load -> view('templates/menu_main', $data);
	}
	
	public function cargar_habilitacion(){
		
		$this->materiamodel->adicionar_habilitacion($_POST['id_docente'],$_POST['id_materia'],$_POST['mes'],$_POST['turno'],$_POST['fecha_1limite'],$_POST['fecha_1limite'],'Activo');
		redirect ( 'principal/habilitacion_materia');
	}
}