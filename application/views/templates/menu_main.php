<html lang="en">
	<?php $this -> load -> view('templates/header');?>
<body>

	<div class="container-fluid">
		<div class="row-fluid" >
			<div class="span12">
			<img src="<?php echo site_url('img/banner.jpg');?>">
			</div>
		</div>
		<div class="row-fluid" >
			<div class="container" style="background-color: #FFFFF5;">
				<div class="row">
					<div class="span10 offset2">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Help</a></li>
							<li class="dropdown"><a class="dropdown-toggle"
								data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="span2" >
						<ul class="nav nav-list">
							<li class="nav-header">Menu</li>
							<li ><a href="<?php echo base_url();?>principal/administrador">Administracion</a></li>
							<li><a href="<?php echo base_url();?>principal/estudiante">Estudiantes</a></li>
							<li><a href="<?php echo base_url();?>principal/docente">Docentes</a></li>
							<li><a href="<?php echo base_url();?>principal/carrera">Carreras</a></li>
							<li><a href="<?php echo base_url();?>principal/materia">Materias</a></li>
							<li class="divider"></li>
							<li><a href="#">Reportes</a></li>
						</ul>
					</div>				
					<div class="span10" id="medio">
						<div id="contenedor">
							<?php $this -> load -> view($contenido);?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span12" style="background-color: #0489B1;"></div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>
