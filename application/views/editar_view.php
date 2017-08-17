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
		<h1>Editar perfil</h1>
		<div class="grid_12" id="login">
			<div class="grid_8 push_2" id="formulario_login">
				<div class="grid_6 push_1" id="campos_login">
					<?php 
						if($this->session->flashdata('update_correcto'))
						{
					?>
						<p><?=$this->session->flashdata('update_correcto')?></p>
					<?php
						}						
					?>
					<?php 
						if($this->session->flashdata('update_incorrecto'))
						{
					?>
						<p><?=$this->session->flashdata('update_incorrecto')?></p>
					<?php
						}						
					?>
					<form action="<?php echo base_url().'Login/update_user'; ?>" method="post" accept-charset="utf-8">
						<input type="hidden" name="id" value="<?php echo $usuario[0]->id; ?>">
						<label for="nombre">Nombre:</label>
						<?php echo form_error('nombre'); ?>
						<input type="text" name="nombre" id="nombre" value="<?php echo ($usuario[0]->nombre !=='') ? $usuario[0]->nombre:set_value('nombre'); ?>" placeholder="nombre"  />
						</br></br>
						<label for="nombre">Apellido paterno:</label>
						<?php echo form_error('apaterno'); ?>
						<input type="text" name="apaterno" id="apaterno" value="<?php echo ($usuario[0]->apaterno !=='') ? $usuario[0]->apaterno:set_value('apaterno'); ?>" placeholder="apellido paterno"  />
						</br></br>
						<label for="nombre">Apellido materno:</label>
						<?php echo form_error('amaterno'); ?>
						<input type="text" name="amaterno" id="amaterno" value="<?php echo ($usuario[0]->amaterno !=='') ? $usuario[0]->amaterno:set_value('amaterno'); ?>" placeholder="apellido paterno"  />
						</br></br>
						<label for="email">Email:</label>
						<?php echo form_error('email'); ?>
						<input type="text" name="email" id="email" value="<?php echo ($usuario[0]->email !=='') ? $usuario[0]->email:set_value('email'); ?>" placeholder="email"  />
						</br></br>
						<label for="telefono">Teléfono:</label>
						<?php echo form_error('telefono'); ?>
						<input type="text" name="telefono" id="telefono" value="<?php echo ($usuario[0]->telefono !=='') ? $usuario[0]->telefono:set_value('telefono'); ?>" placeholder="teléfono"  />
						</br></br>
						<input type="hidden" name="perfil" id='perfil' value="2">	
						<input type="submit" name="submit" value="Editar" title="Editar"  />
					</form>	
					<?php					
						echo validation_errors();
					?>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>