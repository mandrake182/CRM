<!DOCTYPE html>
 <html lang="es">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/960.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/text.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/reset.css" media="screen" />
 <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
 </head>
 <body>
 <div class="container_12">
 <div class="grid_12">
 <h1 style="text-align: center">Bienvenido usuario</h1>
 <?=anchor(base_url().'Login/editar/'.$this->session->userdata('id_usuario'), 'Editar perfil')?>
 <?=anchor(base_url().'Login/password/', 'Modificar password')?>
 <?=anchor(base_url().'Requisicion/nueva_requisicion/', 'Nueva requisición')?>
 <?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>
 </div>
 <h3>Datos del perfil</h3>
 	<?php 	
 				$get = $this->uri->uri_to_assoc();				
				if(isset($get['e']) && $get['e']==1)
				{
			?>
				<p>El usuario fue actualizado correctamente</p>
			<?php
				}						
			?>
			<?php 
				if(isset($get['e']) && $get['e']==2)
				{
			?>
				<p>El usuario no pudo ser actualizado</p>
			<?php
				}						
			?>
	<br/><br/>
	<p>Nombre: <?php echo ($usuario[0]->nombre !=='') ? $usuario[0]->nombre: ''; ?></p>
	<br/>
	<p>Apellido paterno: <?php echo ($usuario[0]->apaterno !=='') ? $usuario[0]->apaterno: ''; ?></p>
	<br/>
	<p>Apellido materno: <?php echo ($usuario[0]->amaterno !=='') ? $usuario[0]->amaterno: ''; ?></p>
	<br/>
	<p>Email: <?php echo ($usuario[0]->email !=='') ? $usuario[0]->email: ''; ?></p>
	<br/>
	<p>Teléfono: <?php echo ($usuario[0]->telefono !=='') ? $usuario[0]->telefono: ''; ?></p>
	<br/>
 </div> 
 </body>
</html>