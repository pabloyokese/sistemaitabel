<body>
		<?php echo "Materias";?>
				<table class="table table-bordered">
						<tr>
							<td>Numero</td>
							<td>Sigla</td>
							<td>Nombre</td>
							<td>Mensualidad</td>
							<td>Modificar</td>
							<td>Eliminar</td>
						</tr>
						<?php $i=0;?>
							<?php foreach($materia as $row):?>
							<tr>
								<td><?php echo $i=$i+1;?></td>
								<td><?php echo $row->sigla;?></td>
								<td><?php echo $row->nombre;?></td>
								<td><?php echo $row->mensualidad;?></td>
								<td></td>
								<td></td>
							</tr>
					
							<?php endforeach;?>   

          			</table>	
        <p><?php echo anchor('principal/adicionar_materia','NUEVA MATERIA');?>
        <p><?php echo anchor('principal/habilitacion_materia','HABILITACION DE MATERIA');?>
</body>
