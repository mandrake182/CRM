<?php
require('header.php');
?>



 <body>
  <div class="user">
  	<div class="content">
  		<p class="regular colorWhite">Gersain López</p>
  		<span >|</span>
  		<a href="" class="regular">Cerra Sesión</a>
  	</div>
  </div>

<div class="app-dashboard shrink-medium">
  <div class="row app-dashboard-top-nav-bar">
   <div class="content">
	    <div class="">
	      <button data-toggle="app-dashboard-sidebar" class="menu-icon hide-for-medium"></button>
	      <a class="app-dashboard-logo">
	      	<img src="<?php echo base_url();?>img/logo.png" alt="">
	      </a>
	    </div>

	    <!-- <div class="">
	      	<button href="#" class="button hollow">CERRAR SESIÓN</button>
	      	<a href="#" height="30" width="30" alt=""><i class="fa fa-info-circle"></i></a>
	    </div> -->
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


      <div class="app-dashboard-sidebar-inner bgGrey">
        <ul class="menu vertical">
        	<li>
             <a href="#" class="is-active">
                <i class="fi-home colorBlueDark"></i><span class="app-dashboard-sidebar-text">Inicio</span>
              </a>
          </li>
          <li>
             <a href="#" class="">
                <i class="fi-page-edit colorBlueDark"></i><span class="app-dashboard-sidebar-text">Editar perfil</span>
              </a>
          </li>

          <li>
          	   <a>
                 <i class="fi-unlock colorBlueDark"></i><span class="app-dashboard-sidebar-text">Modificar password</span>
               </a>
           </li>

          <li>
          	   <a>
            	<i class="fi-page colorBlueDark"></i><span class="app-dashboard-sidebar-text">Mis requisiciones</span>
              </a>
          </li>
           <li>
          	   <a>
            	<i class="fi-page-add colorBlueDark"></i><span class="app-dashboard-sidebar-text">Nueva requisición</span>
              </a>
          </li>
           <li>
          	   <a>
            	<i class="fi-arrow-left colorBlueDark"></i><span class="app-dashboard-sidebar-text">Cerrar sesión</span>
              </a>
          </li>

        </ul>
      </div>
    </div>

    <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>
      <h2 class="font2 colorFont light"><strong class="bold">Bienvenido</strong> al sistema de requisisiones<br> de Dairmex </h2>
      <p class="regular colorFont">Hola <strong>Gersain López</strong> te damos la bienvenida a nuestro sistema de requisisiones, está herramineta nos brinda un mejor control sobre tus ordenes de compra. <br>
         Aquí se podrá revisar el historía de ordenes de comprar generarlas  o darlas de bajo, así como editar tu perfil de usuario. <br><br>
         <strong>Mejorando la busqueda de las requisisciones, persona o empresa.</strong></p>
     <!--  <ul class="list-group">
	  <li class="list-group-item active">List Group Item 1 (Active)</li>
	  <li class="list-group-item">List Group Item 2</li>
	  <li class="list-group-item">List Group Item 3</li>
	  <li class="list-group-item disabled">List Group Item 4 (Disabled)</li>
	</ul> -->
    </div>
  </div>
</div>




 <div class="container_12">
 <div class="grid_12">
 <h1 style="text-align: center">Bienvenido usuario</h1>
 <?=anchor(base_url().'Login/editar/'.$this->session->userdata('id_usuario'), 'Editar perfil')?>
 <?=anchor(base_url().'Login/password/', 'Modificar password')?>
 <?=anchor(base_url().'Requisicion/', 'Mis requisiciones')?>
 <?=anchor(base_url().'Requisicion/nueva_requisicion/', 'Nueva requisición')?>
 <?=anchor(base_url().'login/logout_ci', 'Cerrar sesión')?>
 </div>
 <h3>Datos del perfil</h3>
 	<?php 	
 				$get = $this->uri->uri_to_assoc();				
				if(isset($get['e']) && $get['e']==1)
				{
			?>
				<p>El usuario fue actualizado correctamente</p>
			<?php
				}						
			?>
			<?php 
				if(isset($get['e']) && $get['e']==2)
				{
			?>
				<p>El usuario no pudo ser actualizado</p>
			<?php
				}						
			?>
	<br/><br/>
	<p>Nombre: <?php echo ($usuario[0]->nombre !=='') ? $usuario[0]->nombre: ''; ?></p>
	<br/>
	<p>Apellido paterno: <?php echo ($usuario[0]->apaterno !=='') ? $usuario[0]->apaterno: ''; ?></p>
	<br/>
	<p>Empresa: <?php echo ($usuario[0]->empresa !=='') ? $usuario[0]->empresa: ''; ?></p>
	<br/>
	<p>Email: <?php echo ($usuario[0]->email !=='') ? $usuario[0]->email: ''; ?></p>
	<br/>
	<p>Teléfono: <?php echo ($usuario[0]->telefono !=='') ? $usuario[0]->telefono: ''; ?></p>
	<br/>
 </div> 
 
<?php
require('footer.php');
?>

  </body>
</html>