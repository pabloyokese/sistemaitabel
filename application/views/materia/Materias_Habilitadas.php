<body>
		<?php echo "Materias Habilitadas";?>
				<table class="table table-bordered">
						<tr>
							<td>N</td>
							<td>Sigla</td>
							<td>Materia</td>
							<td>Docente</td>
							<td>Mes</td>
							<td>turno</td>
							<td>Modificar</td>
							<td>Eliminar</td>
						</tr>
						<?php $i=0;?>
							<?php foreach($materia as $row):?>
							<tr>
								<td><?php echo $i=$i+1;?></td>
								<td><?php echo $row->sigla;?></td>
								<td><?php echo $row->materia;?></td>
								<td><?php echo $row->nombre.' '.$row->ap.' '.$row->am;?></td>
								<td><?php echo $row->mes;?></td>
								<td><?php echo $row->turno;?></td>
								<td></td>
								<td></td>
							</tr>
					
							<?php endforeach;?>   

          			</table>	
        <p><?php echo anchor('principal/adicionar_habilitacion','NUEVA HABILITACION');?>
</body>
