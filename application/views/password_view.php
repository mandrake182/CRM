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
	<div class="container_12">
		<h1>Modificar password</h1>
		<div class="grid_12" id="login">
			<div class="grid_8 push_2" id="formulario_login">
				<?php 
					if($this->session->flashdata('password_correcto'))
					{
				?>
					<p><?=$this->session->flashdata('password_correcto')?></p>
				<?php
					}
				?>
				<div class="grid_6 push_1" id="campos_login">
					<form action="<?php echo base_url().'Login/update_password'; ?>" method="post" accept-charset="utf-8">						
						<label for="password">Nuevo Password:</label>
						<?php echo form_error('password'); ?>
						<input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="password"  />
						<br><br>						
						<label for="password">Repetir Password:</label>
						<?php echo form_error('cpassword'); ?>
						<input type="password" name="cpassword" id="cpassword" value="<?php echo set_value('cpassword'); ?>" placeholder="repetir password"  />
						<input type="submit" name="submit" value="Modificar password" title="Modificar password"  />
						<a href="<?php echo base_url(); ?>">Home</a>
					</form>	
					<?php 
						if($this->session->flashdata('password_incorrecto'))
						{
					?>
						<p><?=$this->session->flashdata('password_incorrecto')?></p>
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