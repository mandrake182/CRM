
<?php
require('header.php');
?>
	<body>
	<?php
	$username = array('name' => 'username', 'placeholder' => 'nombre de usuario');
	$password = array('name' => 'password',	'placeholder' => 'introduce tu password');
	$submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
	?>

              <!-- ∆∆ Form registration ∆∆ -->
	<div class="form-registration">

         	<!-- ∆ img ∆-->
	  <figure class="form-registration-img">
		    <img src="<?php echo base_url();?>img/index.jpg" alt="Dairmex" />
		    <figcaption class="form-registration-img-caption colorFont font2 light uppercase bgWhite">Acceso a <strong
		    	class="bold">CRM </strong></figcaption>
	  </figure>
	  <!-- ∆ img ∆-->


	<?php 
	     if($this->session->flashdata('registro_correcto'))
		{
		?>
		   <p class="warning"><?=$this->session->flashdata('registro_correcto')?></p>
		<?php
		}
	?>

   	<!-- ∆ Form -->
	  <form class="form-registration-group" action="<?php echo base_url().'Login/new_user'; ?>" method="post" accept-charset="utf-8">

	    <!-- ∆ correo electrónico -->
	      <div class="input-group">
	            <span class="input-group-label bgBlack">
	              <i class="fi-mail colorBlueDark"></i>
	            </span>
	            <input class="input-group-field"  value="<?php echo set_value('email'); ?>"  type="text" placeholder="Correo electrónico">
	      </div>

	      <!-- ∆ Pass-->
	      <div class="input-group">
	            <span class="input-group-label bgBlack">
	               <i class="fi-unlock colorBlueDark"></i>
	            </span>
	            <input class="input-group-field"  value="<?php echo set_value('password'); ?>" type="password"  placeholder="Contraseña">
	      </div>
                    <?php echo form_hidden('token',$token) ?>
	    <input class="form-registration-submit-button" type="submit" name="submit" value="Iniciar sesión" title="Iniciar sesión"  />
	    <p class="form-registration-member-signin"><a class="light" href="<?php echo base_url().'Login/registro'; ?>">Registrarse</a></p>
	  </form>
	  <!-- ∆ Form -->
													
               <div class="warning">
		  <?php 
		     if($this->session->flashdata('usuario_incorrecto'))
			{
			?>
			<p><?=$this->session->flashdata('usuario_incorrecto')?></p>
			<?php
			}

			echo validation_errors();
		?>
	</div>

	</div>
	  <!-- ∆∆ Form registration ∆∆ -->



<?php
require('footer.php');
?>
