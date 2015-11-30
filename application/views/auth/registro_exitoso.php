<style type="text/css">
	body{
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #f5f5f5;
		font-family: "Open Sans", sans-serif;
	}

	.form-signin{
		max-width: 400px;
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

<h2 class="form-signin-heading" align="center">Registro exitoso</h2>
<a class="btn btn-primary btn-block btn-lg" href= "<?php echo site_url('/auth/login/') ?>">Entrar</a>