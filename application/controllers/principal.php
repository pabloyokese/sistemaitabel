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
		$this->load->model('carreramodel');
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
		$data['listausuarios'] = $usuario;
		if($usuario==null){ //verifica si hay datos
			echo'error';
		}
		else{ 
			// todo va bien
			$this->session->set_userdata('username', $usuario->nombre);
			$this->load->view('administrador',$data);
		}
	}
	
	public function adicionar_administrador(){
	
		$this->load->view('administrador/Adicionar_Administrador');
	}
	
	public function cargar_administrador(){
	
		$id_persona = $this->personamodel->adicionar_persona($_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$fecha_inicio = date('Y-m-d');
		$this->administradormodel->adicionar_administrador($id_persona, $_POST['cargo'], $_POST['password'],$fecha_inicio,'Activo');
		$this->load->view('administrador');
	}
	
	public function estudiante(){
	
		$this->load->view('estudiante/Estudiante');
	}
	
	public function ver_estudiante(){
		$id_persona = $this->personamodel->ver_id_persona($_POST['ci']);//Obtener el id_persona para las consultas
		if($id_persona==NULL){ //compara si existe ci en la BD, si no encuentra pasa a la pantalla adicionar
			$data['ci'] =$_POST['ci'];
			$this->load->view('estudiante/Adicionar_Estudiante',$data);
		}
		else {
			$data['persona'] = $this->personamodel->ver_persona($id_persona->id_persona);// Busca el id_persona en la tabla personas
			$data['estudiante'] = $this->estudiantemodel->ver_estudiante($id_persona->id_persona);
			$this->load->view('estudiante/Ver_Estudiante',$data);}
	}
	
	public function adicionar_estudiante(){
	
		$id_persona = $this->personamodel->adicionar_persona($_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$password_random = rand(0, 99999);
		$this->estudiantemodel->adicionar_estudiante($id_persona,$password_random);
		
		$data['persona'] = $this->personamodel->ver_persona($id_persona);
		$data['estudiante'] = $this->estudiantemodel->ver_estudiante($id_persona);
		$this->load->view('estudiante/Ver_Estudiante',$data);
	}
	
	public function modificar_estudiante(){
	
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));
		$data['estudiante'] = $this->estudiantemodel->ver_estudiante($this->uri->segment(3));
		$this->load->view('estudiante/Modificar_Estudiante',$data);
	}
	
	public function modificacion_estudiante(){
	
		$this->personamodel->modificar_persona($_POST['id_persona'], $_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$this->estudiantemodel->modificar_estudiante($_POST['id_persona'],$_POST['password']);

		$data['persona'] = $this->personamodel->ver_persona($_POST['id_persona']);
		$data['estudiante'] = $this->estudiantemodel->ver_estudiante($_POST['id_persona']);
		$this->load->view('estudiante/Ver_Estudiante',$data);
	}
	
	public function eliminar_estudiante(){

		$this->estudiantemodel->eliminar_estudiante($this->uri->segment(3));
		$this->personamodel->eliminar_persona($this->uri->segment(3));
		$this->load->view('estudiante/Estudiante');
	}
	
	public function matricular(){
		$data['carrera'] = $this->carreramodel->carreras();
		$data['persona'] = $this->personamodel->ver_persona($this->uri->segment(3));
		$data['estudiante'] = $this->estudiantemodel->ver_estudiante($this->uri->segment(3));
		$this->load->view('estudiante/Adicionar_Ficha_Matricula',$data);
	}
	
	public function matriculacion_estudiante(){
	
		$fecha = date('Y-m-d');
		$this->estudiantemodel->adicionar_matricula($_POST['id_estudiante'],$_POST['carrera'],$fecha, $_POST['matricula']);
		
		
		$this->load->view('estudiante/Estudiante');
	}
		
	public function adicionar_docente(){

		$this->load->view('docente/Adicionar_Docente');
	}
	
	public function cargar_docente(){
	
		$id_persona = $this->personamodel->adicionar_persona($_POST['ci'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['zona'],$_POST['calle'],$_POST['num'],$_POST['telefono'],$_POST['celular'],$_POST['email'],$_POST['cenombre'],$_POST['cerelacion'],$_POST['cedireccion'],$_POST['cetelefono']);
		$fecha_inicio = date('Y-m-d');
		$this->docentemodel->adicionar_docente($id_persona,$fecha_inicio,'Activo');
		$this->load->view('administrador');
	}
	
	public function carrera(){
		$data['carrera'] = $this->carreramodel->carreras();
		$this->load->view('carrera/Carrera',$data);
	}
	
	public function adicionar_carrera(){
	
		$this->load->view('carrera/Adicionar_Carrera');
	}
	
	public function cargar_carrera(){
		$this->carreramodel->adicionar_carrera($_POST['nombre'],$_POST['matricula']);
		$data['carrera'] = $this->carreramodel->carreras();
		$this->load->view('carrera/Carrera',$data);
	}
}