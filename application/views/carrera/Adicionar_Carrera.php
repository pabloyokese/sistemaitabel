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
		echo "CARRERA";
		?>
		<table>
		<?=form_open('principal/cargar_carrera');?>
            <tr><td>Nombre:</td><td>
            <input type="text" name="nombre"/></td></tr>
            <tr><td>Matricula (Bs.):</td><td>
            <input type="text" name="matricula"/></td></tr>
            <tr><td colspan='2'><input type="submit" value="Listo" /></td></tr>
		<? echo form_close();?>    
		</table>              
</body>
</html>

