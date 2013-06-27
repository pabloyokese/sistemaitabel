<body>
		<?php $username = $this->session->userdata('username'); echo $username;?>
		<?php
		echo "ADMINISTRACION";
		?>
		<?php echo form_open('principal/ver_administrador');?>
            <p>Ci:<br>
            <input type="text" name="ci"/>
            </p>
            <input type="submit" value="Ingresar" />
		<?php echo form_close();?>                  

</body>
