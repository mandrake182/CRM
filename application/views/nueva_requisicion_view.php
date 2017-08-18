<?php
require('header.php');
?>
	<body>	

<div class="app-dashboard shrink-medium">
			  <div class="row app-dashboard-top-nav-bar">
			   <div class="content">
				    <div class="">
				      <button data-toggle="app-dashboard-sidebar" class="menu-icon hide-for-medium"></button>
				      <a class="app-dashboard-logo">
				      	<img src="<?php echo base_url();?>img/logo.png" alt="">
				      </a>
				    </div>
			      </div>
			  </div>


			  <div class="app-dashboard-body off-canvas-wrapper">
			    <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas>
			      <div class="app-dashboard-sidebar-title-area">
			        <div class="app-dashboard-close-sidebar">
			          <!-- Close button -->
			          <button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">
			            <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
			          </button>
			        </div>
			        <div class="app-dashboard-open-sidebar">
			          <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
			            <span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-right"></i></a></span>
			          </button>
			        </div>
			      </div>
			     <?php require('sidebar_menu.php'); ?>      
			    </div>

			<!-- content-->
			<div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>

				<h3 class="font2 colorFont light">Listado de Requisiciones</h3>

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
		</div>
	</div>

	<?php
require('footer.php');
?>