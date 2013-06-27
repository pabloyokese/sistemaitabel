<body>
		<?php
		echo "MODIFICAR DOCENTE";
		?>

					<?php echo form_open('principal/modificacion_docente');?>
						<input type="hidden" name="id_persona" value='<?php echo $persona->id_persona;?>'/>
					<table class="table table-bordered">
						<tr>
							<td>Ci:</td><td><input type="text" name="ci" value='<?php echo $persona->ci;?>'/></td></tr>
							<tr><td>Nombre:</td><td><input type="text" name="nombre" value='<?php echo $persona->nombre;?>'/></td></tr>
							<tr><td>Ap. Paterno:</td><td><input type="text" name="ap" value='<?php echo $persona->ap;?>'/></td></tr>
							<tr><td>Ap. Materno:</td><td><input type="text" name="am" value='<?php echo $persona->am;?>'/></td></tr>
							<tr><td>Zona:</td><td><input type="text" name="zona" value='<?php echo $persona->zona;?>'/></td></tr>
							<tr><td>Calle:</td><td><input type="text" name="calle" value='<?php echo $persona->calle;?>'/></td></tr>
							<tr><td>Numero:</td><td><input type="text" name="num" value='<?php echo $persona->num;?>'/></td></tr>
							<tr><td>Telefono:</td><td><input type="text" name="telefono" value='<?php echo $persona->telefono;?>'/></td></tr>
							<tr><td>Celular:</td><td><input type="text" name="celular" value='<?php echo $persona->celular;?>'/></td></tr>
							<tr><td>Email:</td><td><input type="text" name="email" value='<?php echo $persona->email;?>'/></td></tr>
							<tr><td colspan='2'>En caso de emergencia:</td></tr>
							<tr><td>Nombre:</td><td><input type="text" name="cenombre" value='<?php echo $persona->cenombre;?>'/></td></tr>
							<tr><td>Relacion:</td><td><input type="text" name="cerelacion" value='<?php echo $persona->cerelacion;?>'/></td></tr>
							<tr><td>Direccion:</td><td><input type="text" name="cedireccion" value='<?php echo $persona->cedireccion;?>'/></td></tr>
							<tr><td>Telefono:</td><td><input type="text" name="cetelefono" value='<?php echo $persona->cetelefono;?>'/></td>
						</tr>
						<tr><td colspan='2'><input type="submit" value="Listo" /></td></tr>
					<? echo form_close();?>    
          			</table>	
</body>
