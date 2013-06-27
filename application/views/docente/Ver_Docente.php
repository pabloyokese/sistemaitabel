<body>
		<?php
		echo "DOCENTE";
		?>
					<table class="table table-bordered">
						<tr>
							<td>Ci:</td><td><?php echo $persona->ci;?></td></tr>
							<tr><td>Nombre:</td><td><?php echo $persona->nombre;?></td></tr>
							<tr><td>Ap. Paterno:</td><td><?php echo $persona->ap;?></td></tr>
							<tr><td>Ap. Materno:</td><td><?php echo $persona->am;?></td></tr>
							<tr><td>Zona:</td><td><?php echo $persona->zona;?></td></tr>
							<tr><td>Calle:</td><td><?php echo $persona->calle;?></td></tr>
							<tr><td>Numero:</td><td><?php echo $persona->num;?></td></tr>
							<tr><td>Telefono:</td><td><?php echo $persona->telefono;?></td></tr>
							<tr><td>Celular:</td><td><?php echo $persona->celular;?></td></tr>
							<tr><td>Email:</td><td><?php echo $persona->email;?></td></tr>
							<?php if($docente!=null){?>
							<tr>
								<tr><td>Estado:</td><td><?php echo $docente->estado;?></td>
							</tr>
							<?php }?>
							<tr><td colspan='2'>En caso de emergencia:</td></tr>
							<tr><td>Nombre:</td><td><?php echo $persona->cenombre;?></td></tr>
							<tr><td>Relacion:</td><td><?php echo $persona->cerelacion;?></td></tr>
							<tr><td>Direccion:</td><td><?php echo $persona->cedireccion;?></td></tr>
							<tr><td>Telefono:</td><td><?php echo $persona->cetelefono;?></td>
						</tr>
          			</table>	

	<?php if($docente==null){?>
			<p><?php echo anchor('principal/agregar_persona_docente/'.$persona->id_persona,'AGREGAR');?>
	<?php } else {?>	
			<p><?php echo anchor('principal/modificar_docente/'.$persona->id_persona,'MODIFICAR');?>
			<p><?php echo anchor('principal/eliminar_docente/'.$persona->id_persona,'ELIMINAR');?>
			<p><?php echo anchor('principal/matricular/'.$persona->id_persona,'DESACTIVAR');?>
	<?php }?>
</body>