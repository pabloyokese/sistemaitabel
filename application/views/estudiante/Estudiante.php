<body>
		<?php $username = $this->session->userdata('username'); echo $username;?>
		<?php
		echo "ESTUDIANTES";
		?>
		<?php echo form_open('principal/ver_estudiante');?>
            <p>Ci:<br>
            <input type="text" name="ci"/>
            </p>
            <input type="submit" value="Ingresar" />
		<?php echo form_close();?>                  

</body>

