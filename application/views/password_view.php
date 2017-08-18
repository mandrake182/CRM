<?php
require('header.php');
?>


	<body>	

	<!-- user -->	
	  <div class="user">
	  	<div class="content">
	  		<p class="regular colorWhite">Gersain López</p>
	  		<span >|</span>
	  		<a href="" class="regular">Cerra Sesión</a>
	  	</div>
	  </div>
	  <!-- user -->

         <!--  contenido -->
	<div class="app-dashboard shrink-medium">

		<!--  header-->
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
		  <!--  header-->

		 <!--  body-->
		<div class="app-dashboard-body off-canvas-wrapper">

			<!-- nav  mobile-->
			<div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas>
				
				<div class="app-dashboard-sidebar-title-area">
					<!-- nav  in-->
					<div class="app-dashboard-close-sidebar">
						<!-- Close button -->
						<button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">
						<span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>
						</button>
					</div>
					
					<!-- nav  in-->
					<div class="app-dashboard-open-sidebar">
						<!-- side button -->
						<button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
						<span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-right"></i></a></span>
						</button>
					</div>
				</div>

				<!-- nav  main-->
				<div class="app-dashboard-sidebar-inner bgGrey">
					<ul class="menu vertical">

						<!-- home -->
						<li>
						    <a href="#" class="">
							<i class="fi-home colorBlueDark"></i><span class="app-dashboard-sidebar-text">Inicio</span>
					                </a>
						</li>

						<!-- perfil -->
						<li>
						    <a href="#" class="">
							<i class="fi-page-edit colorBlueDark"></i><span class="app-dashboard-sidebar-text">Editar perfil</span>
						    </a>
						</li>

						<!-- pass -->
						<li>
						      <a href="#" class="is-active">
							<i class="fi-unlock colorBlueDark"></i><span class="app-dashboard-sidebar-text">Modificar password</span>
						      </a>
						</li>


						<!-- requi -->
						<li>
						    <a>
						 	<i class="fi-page colorBlueDark"></i><span class="app-dashboard-sidebar-text">Mis requisiciones</span>
						   </a>
						</li>

						<!-- new requi -->
						<li>
						     <a>
							<i class="fi-page-add colorBlueDark"></i><span class="app-dashboard-sidebar-text">Nueva requisición</span>
						     </a>
						</li>

						<!-- close -->
						<li>
						   <a>
							<i class="fi-arrow-left colorBlueDark"></i><span class="app-dashboard-sidebar-text">Cerrar sesión</span>
						   </a>
						</li>

					</ul>
				</div>
				<!-- nav  main-->
			</div>
			<!-- nav -->


			<!-- content-->
			<div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>

				<h3 class="font2 colorFont light">Modificar Password</h3>

				<form class="form-registration-group regitro" action="">

					<!-- ∆ Pass-->
					      <div class="input-group">
					            <span class="input-group-label  bgBlack"  >
					              <i class="icon fi-unlock colorBlueDark"></i>
					            </span>
					            <input class="input-group-field" type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="Contraseña*"  />
					       <!-- error -->
					      </div>
					       


					        <!-- ∆ Confirmar Pass-->
					      <div class="input-group">
					            <span class="input-group-label  bgBlack"  >
					              <i class="icon fi-lock colorBlueDark "></i>
					            </span>
					            <input class="input-group-field" type="password"  name="cpassword" id="cpassword" value="<?php echo set_value('cpassword'); ?>" placeholder="Repetir contraseña*"  />
					            <!-- error -->
					      </div>
			      

					<input type="hidden" name="perfil" id='perfil' value="2">	
					<input class="form-registration-submit-button" type="submit" name="submit" value="Confirmar" title="Registrarme"  />
				</form>

			</div>
		</div>
	</div>













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
<?php
require('footer.php');
?>