<body>
		<?php
		echo "NUEVA HABILITACION DE MATERIA";
		?>
		<table>
		<?php echo form_open('principal/cargar_habilitacion');?>
            <tr><td>Materia:</td><td>
            <select name="id_materia">
            <?php foreach($materia as $row):?>
				<option value="<?php echo $row->id_materia;?>"><?php echo $row->nombre;?>
			<?php endforeach;?> 
				</select></td></tr>
			 <tr><td>Docente:</td><td>
            <select name="id_docente">
            <?php foreach($docente as $row):?>
				<option value="<?php echo $row->id_docente;?>"><?php echo $row->nombre.' '.$row->ap.' '.$row->am;?>
			<?php endforeach;?> 
				</select></td></tr>
            <tr><td>Mes:</td><td>
            <select name="mes">
				<option value="Enero">Enero
				<option value="Febrero">Febrero
				<option value="Marzo">Marzo
				<option value="Abril">Abril
				<option value="Mayo">Mayo
				<option value="Junio">Junio
				<option value="Julio">Julio
				<option value="Agosto">Agosto
				<option value="Septiembre">Septiembre
				<option value="Octubre">Octubre
				<option value="Noviembre">Noviembre
				<option value="Diciembre">Diciembre
				</select></td></tr>
            <tr><td>Turno:</td><td>
            <input type="text" name="turno"/></td></tr>
            <tr><td>1ra Fecha Limite de Pago:</td><td>
            <input type="text" name="fecha_1limite"/></td></tr>
            <tr><td>2da Fecha Limite de Pago:</td><td>
            <input type="text" name="fecha_2limite"/></td></tr>
            <tr><td colspan='2'><input type="submit" value="Listo" /></td></tr>
		<? echo form_close();?>    
		</table>              
</body>

