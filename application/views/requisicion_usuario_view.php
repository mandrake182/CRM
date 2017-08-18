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

						<div id="login">
							<?php 
								if($this->session->flashdata('error_requisicion'))
								{
							?>
									<p><?=$this->session->flashdata('error_requisicion')?></p>
							<?php
								}
							?>
						<div  id="table">
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
												<td><i class=" icon fi-plus colorBlueDark"></i><a href="<?php echo base_url().'Requisicion/detalles/'.$r->id; ?>">Ver detalle</a></td>
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
							 </div>
						</div>

			</div>
		</div>
	</div>
	
<?php
require('footer.php');
?>