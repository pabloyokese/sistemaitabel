<body>
		<?php
		echo "NUEVA CARRERA";
		?>
		<table>
		<?php echo form_open('principal/cargar_carrera');?>
            <tr><td>Nombre:</td><td>
            <input type="text" name="nombre"/></td></tr>
            <tr><td colspan='2'><input type="submit" value="Listo" /></td></tr>
		<? echo form_close();?>    
		</table>              
</body>

