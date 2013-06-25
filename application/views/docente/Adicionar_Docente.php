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
		echo "Docentes";
		?>
		<table>
		<?=form_open('principal/cargar_docente');?>
            <tr><td>Ci:</td><td>
            <input type="text" name="ci"/></td></tr>
            <tr><td>Nombre:</td><td>
            <input type="text" name="nombre"/></td></tr>
            <tr><td>Ap. Parteno:</td><td>
            <input type="text" name="ap"/></td></tr>
            <tr><td>Ap Materno:</td><td>
            <input type="text" name="am"/></td></tr>
            <tr><td>Zona:</td><td>
            <input type="text" name="zona"/></td></tr>
            <tr><td>Calle:</td><td>
            <input type="text" name="calle"/></td></tr>
            <tr><td>Numero:</td><td>
            <input type="text" name="num"/></td></tr>
             <tr><td>Telefono:</td><td>
            <input type="text" name="telefono"/></td></tr>
            <tr><td>Celular:</td><td>
            <input type="text" name="celular"/></td></tr>
            <tr><td>Email:</td><td>
            <input type="text" name="email"/></td></tr>
            <tr><td colspan='2'>En caso de emergencia:</td></tr>
            <tr><td>Nombre:</td><td>
            <input type="text" name="cenombre"/></td></tr>
            <tr><td>Relacion:</td><td>
            <input type="text" name="cerelacion"/></td></tr>
            <tr><td>Direccion:</td><td>
            <input type="text" name="cedireccion"/></td></tr>
            <tr><td>Telefono:</td><td>
            <input type="text" name="cetelefono"/></td></tr>
            <tr><td colspan='2'><input type="submit" value="Listo" /></td></tr>
		<? echo form_close();?>    
		</table>              
</body>
</html>

