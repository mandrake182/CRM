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