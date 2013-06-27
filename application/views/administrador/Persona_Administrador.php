<body>

		<?php
		echo "Administracion";
		?>
		<table>
		<?php echo form_open('principal/cargar_persona_administrador');?>
            <tr><td>Ci:</td><td><?php echo $persona->ci;?></td></tr>
            <tr><td>Nombre:</td><td><?php echo $persona->nombre;?></td></tr>
            <tr><td>Ap. Paterno:</td><td><?php echo $persona->ap;?></td></tr>
            <tr><td>Ap. Materno:</td><td><?php echo $persona->am;?></td></tr>
            <tr><td>Cargo:</td><td>
            <select name="cargo">
				<option value="Administrador">Administrador
				<option value="Direccion Academica">Direccion Academica
				<option value="Caja">Caja
				</select></td></tr>
            <tr><td>Contrasena:</td><td>
            <input type="text" name="password"/></td></tr>
            <tr><td colspan='2'><input type="submit" value="Listo" /></td></tr>
            <input type="hidden" name="id_persona" value='<?php echo $persona->id_persona;?>'/>
		<? echo form_close();?>    
		</table>              
</body>
