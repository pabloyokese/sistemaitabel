<head>
<meta charset="UTF-8" />
<title>Document</title>
<!-- Bootstrap -->
<link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo site_url('js/jquery-1.9.1.min.js');?>"></script>
<script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>

</head>
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
</html>
