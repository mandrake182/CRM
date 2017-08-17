
<?php
require('header.php');
?>
	<body>	
		<div class="form-registration">

  <figure class="form-registration-img">
    <img src="<?php echo base_url();?>img/interna.jpg" alt="" />
    <figcaption class="form-registration-img-caption bgWhite"><strong>REGISTRO</strong></figcaption>
  </figure>

  <form class="form-registration-group" action="">

        <!-- ∆ Nombre-->
       <div class="input-group">
            <span class="input-group-label">
               <i class="fi-torso colorGrey"></i>
            </span>
            <input class="input-group-field" type="text" placeholder="Nombre*"  required>
        </div>

       <!-- ∆ Apellidos-->
        <div class="input-group">
            <span class="input-group-label">
               <i class="fi-torso colorGrey"></i>
            </span>
            <input class="input-group-field" type="text" placeholder="Apellidos*"  required>
        </div>

       <!-- ∆ Empresa-->
        <div class="input-group">
            <span class="input-group-label">
               <i class="fi-shopping-bag colorGrey"></i>
            </span>
            <input class="input-group-field" type="text" placeholder="Empresa*"  required>
        </div>

        <!-- ∆ correo electrónico -->
      <div class="input-group">
            <span class="input-group-label">
              <i class="fi-mail colorGrey"></i>
            </span>
            <input class="input-group-field" type="text" placeholder="Correo electrónico*"   required>
      </div>


         <!-- ∆ Teléfono -->
      <div class="input-group">
            <span class="input-group-label">
              <i class="fi-telephone colorGrey"></i>
            </span>
            <input class="input-group-field" type="tel" placeholder="Teléfono*"   required>
      </div>



      <!-- ∆ Pass-->
      <div class="input-group">
            <span class="input-group-label">
              <i class="fi-unlock colorGrey"></i>
            </span>
            <input class="input-group-field" type="password"  placeholder="Contraseña*"   required>
      </div>
       

        <!-- ∆ Confirmar Pass-->
      <div class="input-group">
            <span class="input-group-label">
              <i class="fi-lock colorGrey"></i>
            </span>
            <input class="input-group-field" type="password"  placeholder="Confirmar contraseña*"   required>
      </div>


        <input class="form-registration-submit-button" type="submit" value="registrarme" >
  </form>

</div>
	<div class="container_12">
		<h1>Registros</h1>
		<div class="grid_12" id="login">
			<div class="grid_8 push_2" id="formulario_login">
				<div class="grid_6 push_1" id="campos_login">
					<?php 
						if($this->session->flashdata('registro_correcto'))
						{
					?>
						<p><?=$this->session->flashdata('registro_correcto')?></p>
					<?php
						}
					?>
					<form action="<?php echo base_url().'Login/save_user'; ?>" method="post" accept-charset="utf-8">

						<label for="nombre">Nombre:</label>
						<?php echo form_error('nombre'); ?>
						<input type="text" name="nombre" id="nombre" value="<?php echo set_value('nombre'); ?>" placeholder="nombre"  />
						</br></br>
						<label for="nombre">Apellido paterno:</label>
						<?php echo form_error('apaterno'); ?>
						<input type="text" name="apaterno" id="apaterno" value="<?php echo set_value('apaterno'); ?>" placeholder="apellido paterno"  />
						</br></br>
						<label for="nombre">Apellido materno:</label>
						<?php echo form_error('amaterno'); ?>
						<input type="text" name="amaterno" id="amaterno" value="<?php echo set_value('amaterno'); ?>" placeholder="apellido paterno"  />
						</br></br>
						<label for="email">Email:</label>
						<?php echo form_error('email'); ?>
						<input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="email"  />
						</br></br>
						<label for="telefono">Teléfono:</label>
						<?php echo form_error('telefono'); ?>
						<input type="text" name="telefono" id="telefono" value="<?php echo set_value('telefono'); ?>" placeholder="teléfono"  />
						</br></br>
						<label for="password">Password:</label>
						<?php echo form_error('password'); ?>
						<input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="password"  />
						</br></br>
						<label for="password">Repetir Password:</label>
						<?php echo form_error('cpassword'); ?>
						<input type="password" name="cpassword" id="cpassword" value="<?php echo set_value('cpassword'); ?>" placeholder="repetir password"  />
						</br></br>											
						<input type="hidden" name="perfil" id='perfil' value="2">	
						<input type="submit" name="submit" value="Registrarme" title="Registrarme"  />
					</form>	
					<?php					
						echo validation_errors();
					?>
				</div>
			</div>
		</div>
	</div>
<?php
require('footer.php');
?>
