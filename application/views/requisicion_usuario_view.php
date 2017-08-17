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
		<h1>Listado requisiciones</h1>
		<div class="grid_12" id="login">
			<?php 
				if($this->session->flashdata('error_requisicion'))
				{
			?>
					<p><?=$this->session->flashdata('error_requisicion')?></p>
			<?php
				}
			?>
			<div class="grid_8 push_2" id="formulario_login">
			<?php if(count($registros_usuario)>0){ ?>
				<table border="1">
					<thead>
				      <tr>
				        <th>No</th>
				        <th>Folio</th>
				        <th>Fecha realización</th>
				        <th>Detalle</th>	        
				      </tr>
				    </thead>
				    <tbody>
				    <?php 
				    	$x = 1;
				    	foreach ($registros_usuario as $r) {
					?>
							<tr>
								<td><?php echo $x; ?></td>
								<td><?php echo $r->folio; ?></td>
								<td><?php echo $r->fecha; ?></td>
								<td><a href="<?php echo base_url().'Requisicion/detalles/'.$r->id; ?>">Ver detalle</a></td>
							</tr>
					<?php
							$x++;				    		
				    	}
				    ?>
				    </tbody>
			    </table>
			    <?php
					}else{
			    ?>
			    		<p>No existen registros en sistema.</p>
			    <?php	
			    	}
			    ?>	
			    <a href="<?php echo base_url(); ?>">Home</a>
			 </div>
			</div>
		</div>		
	</div>
	</body>
</html>