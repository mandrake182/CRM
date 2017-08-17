<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css" media="screen" />
		 <style type="text/css">
		 	h1{
		 		font-size: 22px;
		 		text-align: center;
		 		margin: 20px 0px;
		 	}
		 	#login{
		 		background: #fefefe;
		 		min-height: 500px;
		 	}
		 	#formulario_login{
		 		font-size: 14px;
		 		border: 8px solid #112233;		 		
		 	}
		 	label{
		 		display: block;
		 		font-size: 16px;
		 		color: #333333;
		 		font-weight: bold;
		 	}
		 	input[type=text],input[type=password]{
		 		padding: 10px 6px;
		 		width: 400px;
		 	}
		 	input[type=submit]{
		 		padding: 5px 40px;
		 		background: #61399d;
		 		color: #fff;
		 	}
		 	#campos_login{
		 		margin: 50px 0px;
		 	}
		 	p{
		 		color: #f00;
		 		font-weight: bold;
		 	}
		 </style>
	</head>
	<body>
	<?php
	$username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
	$password = array('name' => 'password',	'placeholder' => 'introduce tu password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>
	<div class="container_12">
		<h1>Acceso al sistema</h1>
		<div class="grid_12" id="login">
			<div class="grid_8 push_2" id="formulario_login">
				<?php 
					if($this->session->flashdata('registro_correcto'))
					{
				?>
					<p><?=$this->session->flashdata('registro_correcto')?></p>
				<?php
					}
				?>
				<div class="grid_6 push_1" id="campos_login">
					<form action="<?php echo base_url().'Login/new_user'; ?>" method="post" accept-charset="utf-8">
						<label for="username">Email:</label>
						<input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="nombre de usuario"  />
						<br><br>
						<label for="password">Password:</label>
						<input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="introduce tu password"  />
						<br><br>						
						<?php echo form_hidden('token',$token) ?>	
						<br>
						<input type="submit" name="submit" value="Iniciar sesión" title="Iniciar sesión"  />
						<a href="<?php echo base_url().'Login/registro'; ?>">Registrarse</a>
					</form>	
					<?php 
						if($this->session->flashdata('usuario_incorrecto'))
						{
					?>
						<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
					<?php
						}

						echo validation_errors();

					?>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>