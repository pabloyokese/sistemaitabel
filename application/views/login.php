<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
<!-- Bootstrap -->
<link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo site_url('js/jquery-1.9.1.min.js');?>"></script>
<script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>

<script src="<?php echo site_url('SpryAssets/SpryValidationTextField.js'); ?>" type="text/javascript"></script>
<link href="<?php echo site_url('SpryAssets/SpryValidationTextField.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body>

		<?php
		echo "Acceso al Sistema";
		?>
		<?php echo form_open('principal/validar');?>
            <p>Ci<br>
            <span id="sprytextfield1">
            <input type="text" name="ci"/>
            <span class="textfieldRequiredMsg"> </span></span>
            </p>
            <p>Password<br>
            <span id="sprytextfield2">
            <input type="text" name="password"/>
            <span class="textfieldRequiredMsg"> </span></span>
            </p>
            <input type="submit" value="Acceder" />
		<? echo form_close();?>                  

<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>




