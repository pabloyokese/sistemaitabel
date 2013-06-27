<body>
		<?php
		echo "NUEVA MATERIA";
		?>
		<table>
		<?php echo form_open('principal/cargar_materia');?>
            <tr><td>Sigla:</td><td>
            <input type="text" name="sigla"/></td></tr>
            <tr><td>Nombre:</td><td>
            <input type="text" name="nombre"/></td></tr>
            <tr><td>Mensualidad (Bs.):</td><td>
            <input type="text" name="mensualidad"/></td></tr>
            <tr><td colspan='2'><input type="submit" value="Listo" /></td></tr>
		<? echo form_close();?>    
		</table>              
</body>

