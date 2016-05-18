<!DOCTYPE html>
<html>
	
	<head>
		
		<meta charset="UTF-8" />
		<title><?php echo $titulo ?></title>
		<link rel="stylesheet" href="<?php echo base_url('css/estilos.css?'.time()) ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url('css/960.css?'.time()) ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url('css/reset.css?'.time()) ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url('css/text.css?'.time()) ?>" type="text/css" media="screen" />
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url('js/funciones.js?'.time()) ?>"></script>
	</head>
	
<body>
<div class="container_12">
	<div class="grid_12" id="buscador_multipe">
		<h2>Buscador múltiples criterios</h2>
		<?php $atributos = array('class' => 'formulario') ?>
		<?php echo form_open('buscador',$atributos) ?>

			<?php echo form_label('Buscar denuncia de:') ?>
			<input type="text" autocomplete="off" onpaste="return false" name="nombreCiudadano" 
			id="nombreCiudadano" class="nombreCiudadano" placeholder="Nombre del ciudadano" />
			6
            			
			<?php echo form_label('Estado: ') ?>	
			<?php echo form_label('Estatus') ?> 
          <select form-control" id="idEstatus" style="height: 31px;">
            <?php foreach ($estatuses as $estatus): ?>
              <option value="<?php echo $estatus['idEstatus'] ?>"><?php echo $estatus['idEstatus'] ?></option>
             <?php endforeach ?>
           </select>
			
				
			<?php echo form_submit('buscar','Buscar') ?>
			
		<?php echo form_close() ?>
		
	</div>	
			
	<?php //si hay resultados los mostramos

	if(is_array($resultados) && !is_null($resultados))
	{
	?>
	<div class="grid_12 resultados">
		<h2>Resultados</h2>
		<div class="grid_12" id="head_resultados">
			<div class="grid_2">Ciudadano</div>	
			<div class="grid_2">Estatus</div>	
		</div>
			
		<div class="grid_12" id="body_resultados">
		<?php
		foreach($resultados as $fila)
		{
		?>
			
			<div class="grid_2"><?php echo $fila->idCiudadano ?></div>	
			<div class="grid_2"><?php echo $fila->idEstatus ?></div>	
				
		<?php
		}
		?>
		</div>
	</div>
	<?php
	}
	?>	
</div>
</body>
</html>



