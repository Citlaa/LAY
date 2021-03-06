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
		max-width: 320px;
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
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		'class' => 'form-signin',
		'placeholder' => 'Usuario'
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-signin',
	'placeholder' => 'E-mail',
	'requied'
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'form-signin',
	'placeholder' => 'Contraseña',
	'requied'
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'form-signin',
	'placeholder' => 'Confirmar contraseña',
	'requied'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);

$atributes = array('class' => 'form-signin', 'id' => 'form-signin');

?>
<?php echo form_open($this->uri->uri_string(), $atributes); ?>
<div class="logo">
    <img src="<?php echo base_url("assets/img/LA_firma.fw.png");?>" widht="100px" height="80px" align="center">
</div>
<h3 class="form-signin-heading" align="center">Nuevo Usuario</h3>
<table>
	<?php if ($use_username) { ?>
	<tr>
		<td style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></td>
	</tr>
	<tr>		
		<td><?php echo form_input($username); ?></td>		
	</tr>
	<?php } ?>

	<tr>
		<td style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></td>
	</tr>
	<tr>		
		<td><?php echo form_input($email); ?></td>		
	</tr>

	<tr>
		<td style="color: red;"><?php echo form_error($password['name']); ?></td>
	</tr>
	<tr>		
		<td><?php echo form_password($password); ?></td>
	</tr>

	<tr>
		<td style="color: red;"><?php echo form_error($confirm_password['name']); ?></td>
	</tr>
	<tr>		
		<td><?php echo form_password($confirm_password); ?></td>		
	</tr>

	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
		<?php echo $recaptcha_html; ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
		<td><?php echo form_input($captcha); ?></td>
		<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
	</tr>
	<?php }
	} ?>
</table>
<?php echo form_submit('register', 'Registrar', "class = 'btn btn-enter btn-lg' style='width: 284px;height:38px;font-size:15px;'"); ?>
<?php echo form_close(); ?>