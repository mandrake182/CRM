<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/960.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/text.css" media="screen" />
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css" media="screen" />
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
		 <!--<script type="text/javascript" src="<?php echo base_url();?>js/scripts.js"></script>-->
		 <script type="text/javascript">
			 $(document).ready(function(){
			 	function inputFormulario(){
			 		var elemt = 0;
			 		$('.art').each(function ()
				    {
				        elemt++;
				    });

				    return elemt;	
			 	}
			 	

			 	$("#fr-req").submit(function(e){
			 		
			 		
			 		var bad = 0;

				    $('.art').each(function ()
				    {
				        if ($.trim(this.value) == ""){bad++;}
				    });

				    ele = inputFormulario();

				    if(ele === bad){
				    	e.preventDefault();
				    	alert('Ingrese la información de al menos 1 fila');
				    }else{
				    	return true;
				    }

				    
			 	})
			 	/*
			 	jQuery.validator.addClassRules("art", {				  
				  minlength: 3
				});

				$("#fr-req").validate();
				
				$.validator.messages.required 	= "Campo obligatorio *";
				$.validator.messages.minlength  = "2 caracteres mínimo";
				*/
			 	$("#add").click(function(){
			 		var idlastsr = $('#tabla_req tr:last').attr('id');
			 		var idrow 	 = idlastsr.split('tr-');
			 		//alert(idrow[1]);
			 		if(isNaN(parseInt(idrow[1]))===false){
			 			var nuevoId = parseInt(idrow[1])+1;
			 			$("#limit").val(nuevoId);			 			
			 			$("#tabla_req").append('<tr id="tr-'+nuevoId+'" class="tr-number"><td>'+nuevoId+'</td><td><input type="text" name="articulo-'+nuevoId+'" class="art" placeholder="Artículo*"></td><td><input type="text" name="medida-'+nuevoId+'" class="art" placeholder="Medida*"></td><td><input type="text" name="cantidad-'+nuevoId+'" class="art" placeholder="Cantidad*""></td><td><input type="text" name="proyecto-'+nuevoId+'" class="art" placeholder="Proyecto*"></td><td><textarea name="comentarios-'+nuevoId+'" placeholder="Comentarios"></textarea></td></tr>');
			 		}else{
			 			alert('No se puede agregar la fila, refresque su navegador');
			 		}
			 	});
			 });		 	
		 </script>
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