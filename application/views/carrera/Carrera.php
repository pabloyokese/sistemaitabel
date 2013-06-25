<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
<!-- Bootstrap -->
<link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo site_url('js/jquery-1.9.1.min.js');?>"></script>
<script src="<?php echo site_url('js/bootstrap.min.js');?>"></script>

</head>
<body>
		<?="CARRERAS";?>

				<table class="table table-bordered">
						<tr>
							<td>ID</td>
							<td>Nombre</td>
							<td>Matricula (Bs.)</td>
						</tr>
							<?php foreach($carrera as $row):?>
							<tr>
								<td><?php echo $row->id_carrera;?></td>
								<td><?php echo $row->nombre;?></td>
								<td><?php echo $row->matricula;?></td>
							</tr>
					
							<?php endforeach;?>   

          			</table>	
        <p><?=anchor('principal/adicionar_carrera','NUEVA CARRERA');?>
</body>
</html>