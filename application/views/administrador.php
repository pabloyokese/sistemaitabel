<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title></title>
<!-- Bootstrap -->
<link href="<?php echo site_url('css/bootstrap.min.css'); ?>"
	rel="stylesheet">
<link href="<?php echo site_url('css/style.css'); ?>" rel="stylesheet">
<script src="<?php echo site_url('js/jquery-1.9.1.min.js');?>"></script>
<script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>

<script
	src="<?php echo site_url('SpryAssets/SpryValidationTextField.js'); ?>"
	type="text/javascript"></script>
<link
	href="<?php echo site_url('SpryAssets/SpryValidationTextField.css'); ?>"
	rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12" style="background-color: red;">aqui va la imagen
			</div>
		</div>
		<div class="row-fluid">
			<div class="container">
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
					<div class="span2">
						<ul class="nav nav-list">
							<li class="nav-header">List header</li>
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Library</a></li>
							<li><a href="#">Applications</a></li>
							<li class="nav-header">Another list header</li>
							<li><a href="#">Profile</a></li>
							<li><a href="#">Settings</a></li>
							<li class="divider"></li>
							<li><a href="#">Help</a></li>
						</ul>
					</div>
					<div class="span10" id="medio">
						<div id="contenedor">
							<h1>creando algo de texto</h1>
							<p>HOla este es mi asdasdjashdkjahdkjshkj</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span12" style="background-color: yellow;">aqui va el
						footer</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>