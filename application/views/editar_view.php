<?php
require('header.php');
?>
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

				<h3 class="font2 colorFont light">Edición de perfil</h3>
				<div class="warning">
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
				</div>	
				<form class="form-registration-group regitro" action="<?php echo base_url().'Login/update_user'; ?>" method="post" accept-charset="utf-8">
					<input type="hidden" name="id" value="<?php echo $usuario[0]->id; ?>">
					<!-- ∆ Nombre-->
					<div class="input-group">
						<span class="input-group-label  bgBlack"  >
							<i class=" icon fi-torso colorBlueDark"></i>
						</span>
						<input class="input-group-field" type="text"   name="nombre" id="nombre" value="<?php echo ($usuario[0]->nombre !=='') ? $usuario[0]->nombre:set_value('nombre'); ?>" placeholder="Nombre*"  />
					</div>
					<?php echo form_error('nombre'); ?>
					<!-- ∆ Nombre-->

					<!-- ∆ Apellidos-->
					<div class="input-group">
						<span class="input-group-label  bgBlack"  >
							<i class="fi-torso colorBlueDark"></i>
						</span>
						<input class="input-group-field" type="text" name="apaterno" id="apaterno" value="<?php echo ($usuario[0]->apaterno !=='') ? $usuario[0]->apaterno:set_value('apaterno'); ?>" placeholder="Apellidos *"  />
					</div>

					<?php echo form_error('apaterno'); ?>
					<!-- ∆ Empresa-->
					<div class="input-group">
						<span class="input-group-label  bgBlack"  >
							<i class="fi-shopping-bag colorBlueDark"></i>
						</span>
						<input class="input-group-field" type="text"  name="empresa" id="empresa" value="<?php echo ($usuario[0]->empresa !=='') ? $usuario[0]->empresa:set_value('empresa'); ?>" placeholder="Empresa*"  />
					</div>
					<?php echo form_error('empresa'); ?>

					<!-- ∆ correo electrónico -->
					<div class="input-group">
						<span class="input-group-label  bgBlack"  >
							<i class="icon fi-mail colorBlueDark"></i>
						</span>
						<input class="input-group-field" type="email" name="email" id="email" value="<?php echo ($usuario[0]->email !=='') ? $usuario[0]->email:set_value('email'); ?>" placeholder="Email*"  />
						<!--   error -->
					</div>
					<?php echo form_error('email'); ?>
					<!-- ∆ Teléfono -->
					<div class="input-group">
						<span class="input-group-label  bgBlack"  >
							<i class="icon fi-telephone colorBlueDark"></i>
						</span>
						<input class="input-group-field" type="tel" name="telefono" id="telefono" value="<?php echo ($usuario[0]->telefono !=='') ? $usuario[0]->telefono:set_value('telefono'); ?>" placeholder="Teléfono*"  />
						<!-- error -->
					</div>
					<?php echo form_error('telefono'); ?>

					<input type="hidden" name="perfil" id='perfil' value="2">	
					<input class="form-registration-submit-button" type="submit" name="submit" value="Confirmar" title="Registrarme"  />
				</form>

			</div>
		</div>
	</div>

<?php
require('footer.php');
?>