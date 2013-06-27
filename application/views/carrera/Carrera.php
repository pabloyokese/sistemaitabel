<body>
		<?php echo "CARRERAS";?>
				<table class="table table-bordered">
						<tr>
							<td>Num</td>
							<td>Nombre</td>
							<td>Modificar</td>
							<td>Eliminar</td>
						</tr>
						<?php $i=0;?>
							<?php foreach($carrera as $row):?>
							<tr>
								<td><?php echo $i=$i+1;?></td>
								<td><?php echo $row->nombre;?></td>
								<td></td>
								<td></td>
							</tr>
					
							<?php endforeach;?>   

          			</table>	
        <p><?php echo anchor('principal/adicionar_carrera','NUEVA CARRERA');?>
</body>
