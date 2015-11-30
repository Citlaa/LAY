<style type="text/css">
	body{
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #fff;
		background-image: url("<?php echo base_url("assets/img/a.png");?>");
		background-repeat: no-repeat;
		font-family: "Open Sans", sans-serif;
	}

	.form-signin{
		max-width: 350px;
		padding: 15px;
		margin: 0 auto 20px;
		background-color: #fff;
		border: 1px solid #e5e5e5;
		-webkit-border-radius: 5px;
		   -moz-border-radius: 5px;
		        border-radius: 5px;
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		   -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		        box-shadow: 0 1px 2px rgba(0,0,0,.05);
	}

	.form-signin .form-signin-heading,
	.form-signin .checkbox{
		margin-bottom: 10px;

	}

	.form-signin input[type="text"],
	.form-signin input[type="password"]{
		font-size: 16px;
		height: auto;
		margin-bottom: 15px;
		padding: 7px 9px;
	}

</style>

<?php
$atributes = array('class' => 'form-signin', 'id' => 'form-signin');
?>
<?php echo form_open($this->uri->uri_string(), $atributes); ?>
<div class="logo">
    <img src="<?php echo base_url("assets/img/LA_firma.fw.png");?>" widht="100px" height="80px" align="center">
</div>
</br>
<h3 class="form-signin-heading" align="center">Registro exitoso</h3>
</br>
<a class = 'btn btn-enter btn-lg' style='width: 320px;height:45px;font-size:15px;'" href= "<?php echo site_url('/auth/login/') ?>">Entrar</a>