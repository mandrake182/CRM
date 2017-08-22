<?php
require('header.php');
?>
	<body>	

	    <div class="app-dashboard shrink-medium">
        		<!--∆ head -->
		  <?php require('head.php'); ?>   

		 <!-- ∆∆ Body off canvas -->
		  <div class="app-dashboard-body off-canvas-wrapper">
			      
		      <!-- ∆menus -->	
		     <?php require('sidebar_menu.php'); ?>   

			<!--∆∆∆  content-->
			<div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>

				<h3 class="font2 colorFont light">Listado de Requisiciones</h3>

						<?php 
							if($this->session->flashdata('requisicion_valida'))
							{
						?>
						      <div class="warning2">
							<p ><?=$this->session->flashdata('requisicion_valida')?></p>
						</div>
						<?php
							}
							if($this->session->flashdata('requisicion_invalida'))
							{
						?>
							<p><?=$this->session->flashdata('requisicion_invalida')?></p>
						<?php
							}
						?>
						
						<div class="fol">						
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
					    			<tr id="tr-1" class='tr-number'>
					    				<td>
					    					1						    						
					    				</td>
					    				<td>
					    					<input type="text" name="articulo-1" class='art' placeholder='Artículo*'>
					    				</td>
					    				<td>
					    					<input type="text" name="medida-1" class='art' placeholder='Medida*'>
					    				</td>
					    				<td>
					    					<input type="text" name="cantidad-1" class='art' placeholder='Cantidad*'>
					    				</td>
					    				<td>
					    					<input type="text" name="proyecto-1" class='art' placeholder='Proyecto*'>
					    				</td>
					    				<td>
					    					<textarea name="comentarios-1" placeholder='Comentarios'></textarea>
					    				</td>
					    			</tr>
							    </tbody>
							  </table>		
							  </div>
							  <div class="add2">
								 <input type="hidden" name="limit" value="1" id='limit'>			
								<button type="button" id="add" >Agregar fila</button>
								<input type="submit" name="submit" value="Enviar" title="Enviar"  />
							</div>	
						</form>

			</div>
		        <!--∆∆∆  content-->
		</div>
	    </div>

	<?php
require('footer.php');
?>