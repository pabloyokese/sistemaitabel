<body>
		<?php
		echo "ESTUDIANTE";
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
							<?php if($estudiante!=null){?>
							<tr>
								<td>Password:</td><td><?php echo $estudiante->password;?></td></tr>
								<tr><td>Estado:</td><td><?php echo $estudiante->estado;?></td>
							</tr>
							<?php }?>
  
							<tr><td colspan='2'>En caso de emergencia:</td></tr>
							<tr><td>Nombre:</td><td><?php echo $persona->cenombre;?></td></tr>
							<tr><td>Relacion:</td><td><?php echo $persona->cerelacion;?></td></tr>
							<tr><td>Direccion:</td><td><?php echo $persona->cedireccion;?></td></tr>
							<tr><td>Telefono:</td><td><?php echo $persona->cetelefono;?></td>
						</tr>
          			</table>	

          			<?php $i=0;?>
          				<?php foreach($matricula as $row):?>
					<p>
					<table class="table table-bordered">
					<tr>
					<td>Numero</td><td>Carrera</td><td>Fecha</td><td>Turno</td><td>Matricula (Bs.)</td><td>Modificar</td><td>Eliminar</td></tr>
					<tr><td><?php echo $i=$i+1?></td>
					<td><?php echo $row->nombre?></td>
					<td><?php echo $row->fecha?></td>
					<td><?php echo $row->turno?></td>
					<td><?php echo $row->matricula?></td>
					<td></td>
					<td></td>
					</tr>
						<?php endforeach?>
          			</table>
	<?php if($estudiante==null){?>
			<p><?php echo anchor('principal/agregar_persona_estudiante/'.$persona->id_persona,'AGREGAR');?>
	<?php } else {?>	
			<p><?php echo anchor('principal/modificar_estudiante/'.$persona->id_persona,'MODIFICAR');?>
			<p><?php echo anchor('principal/eliminar_estudiante/'.$persona->id_persona,'ELIMINAR');?>
			<p><?php echo anchor('principal/matricular/'.$persona->id_persona,'MATRICULACION');?>
	<?php }?>
</body>