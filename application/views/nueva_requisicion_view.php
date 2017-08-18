<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css" media="screen" />
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>		 
		 <script type="text/javascript" src="<?php echo base_url();?>js/requesicion.js"></script>		 
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
		 		width: 200px;
		 	}
		 	input[type=submit]{
		 		padding: 5px 40px;
		 		background: #61399d;
		 		color: #fff;
		 	}
		 	#add{
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
	<div class="container">
		<h1>Registro</h1>
		<br/>		
					<?php 
						if($this->session->flashdata('requisicion_valida'))
						{
					?>
						<p><?=$this->session->flashdata('requisicion_valida')?></p>
					<?php
						}
						if($this->session->flashdata('requisicion_invalida'))
						{
					?>
						<p><?=$this->session->flashdata('requisicion_invalida')?></p>
					<?php
						}
					?>
					
					<div class="col-6">						
						Folio : <?php echo $folio;?>
						Fecha : <?php echo date('Y-m-d');?>
					</div>
					<form name="fr-req" id="fr-req" action="<?php echo base_url().'Requisicion/guardar_requisicion'; ?>" method="post" accept-charset="utf-8">

						<div class="table-responsive">
						  <table class="table" id='tabla_req'>
						    <thead>
						      <tr>
						        <th>No</th>
						        <th>Artículo</th>
						        <th>Medida</th>
						        <th>Cantidad</th>
						        <th>Proyecto</th>
						        <th>Comentarios</th>						        						        
						      </tr>
						    </thead>
						    <tbody>
						    	<?php 
						    		for ($i=1;$i<=6;$i++){
						    	?>		
						    			<tr id="tr-<?php echo $i; ?>" class='tr-number'>
						    				<td>
						    					<?php echo $i; ?>						    						
						    				</td>
						    				<td>
						    					<input type="text" name="articulo-<?php echo $i; ?>" class='art' placeholder='Artículo*'>
						    				</td>
						    				<td>
						    					<input type="text" name="medida-<?php echo $i; ?>" class='art' placeholder='Medida*'>
						    				</td>
						    				<td>
						    					<input type="text" name="cantidad-<?php echo $i; ?>" class='art' placeholder='Cantidad*'>
						    				</td>
						    				<td>
						    					<input type="text" name="proyecto-<?php echo $i; ?>" class='art' placeholder='Proyecto*'>
						    				</td>
						    				<td>
						    					<textarea name="comentarios-<?php echo $i; ?>" placeholder='Comentarios'></textarea>
						    				</td>
						    			</tr>
				    			<?php						    		
				    				}
						    	?>
						    	
						    </tbody>
						  </table>		
						  </div>
						  <input type="hidden" name="limit" value="<?php echo $i; ?>" id='limit'>			
						<input type="submit" name="submit" value="Enviar" title="Enviar"  />
						<button type="button" id="add">Agregar fila</button>
					</form>	
					<a href="<?php echo base_url(); ?>">Home</a>			
		</div>
	</body>
</html>