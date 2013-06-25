<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
<!-- Bootstrap -->
<link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo site_url('js/jquery-1.9.1.min.js');?>"></script>
<script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>

</head>
<body>

		<?php
		echo "INSCRIPCION";
		?>
						<?php echo form_open('principal/matriculacion_estudiante');?>
						<input type="hidden" name="id_estudiante" value='<?php echo $estudiante->id_estudiante;?>'/>
						<table class="table table-bordered">
							<tr>
								<td>Ci:</td><td><?php echo $persona->ci;?></td></tr>
								<tr><td>Nombre:</td><td><?php echo $persona->nombre;?></td></tr>
								<tr><td>Apellidos:</td><td><?php echo $persona->ap.' '.$persona->am;?></td></tr>
								<tr><td>Carrera:</td><td>
								 <select name="carrera">
								<?php foreach($carrera as $fila):?>
								
								<option value="<?php echo $fila->id_carrera;?>"><?php echo $fila->nombre;?>
						
								<?php endforeach;?>
								</select></td>   
								</tr>

							<tr><td>Matricula (Bs.):</td><td>
            				<input type="text" name="matricula"/></td></tr>
            				<tr><td colspan='2'><input type="submit" value="Listo" /></td></tr>
						<? echo form_close();?> 
          			</table>	

</body>
</html>