<div class="app-dashboard-sidebar-inner bgGrey">
  <ul class="menu vertical">
  	<li>
       <a href="<?php echo base_url(); ?>" class="is-active">
          <i class="fi-home colorBlueDark"></i><span class="app-dashboard-sidebar-text">Inicio</span>
        </a>
    </li>
    <li>
       <a href="<?php echo base_url().'Login/editar/'.$this->session->userdata('id_usuario'); ?>" class="">
          <i class="fi-page-edit colorBlueDark"></i><span class="app-dashboard-sidebar-text">Editar perfil</span>
        </a>
    </li>

    <li>
    	   <a href="<?php echo base_url().'Login/password'; ?>">
           <i class="fi-unlock colorBlueDark"></i><span class="app-dashboard-sidebar-text">Modificar password</span>
         </a>
     </li>

    <li>
    	  <a href="#"> 
      	<i class="fi-page colorBlueDark"></i><span class="app-dashboard-sidebar-text">Mis requisiciones</span>
        </a>
    </li>
     <li>
    	   <a href="#">
      	<i class="fi-page-add colorBlueDark"></i><span class="app-dashboard-sidebar-text">Nueva requisición</span>
        </a>
    </li>
     <li>
    	   <a href="<?php echo base_url().'Login/logout_ci'; ?>">
      	<i class="fi-arrow-left colorBlueDark"></i><span class="app-dashboard-sidebar-text">Cerrar sesión</span>
        </a>
    </li>

  </ul>
</div>