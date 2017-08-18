<div class="app-dashboard-sidebar-inner bgGrey">
  <ul class="menu vertical">
  	<li>
       <a href="<?php echo base_url(); ?>" class="<?php echo (isset($inicio) && $inicio==1)?'is-active':''; ?>">
          <i class="fi-home colorBlueDark"></i><span class="app-dashboard-sidebar-text">Inicio</span>
        </a>
    </li>
    <li>
       <a href="<?php echo base_url().'Login/editar/'.$this->session->userdata('id_usuario'); ?>" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'Login/editar') || strpos($_SERVER['REQUEST_URI'], 'Login/update_user')) ? 'is-active':''; ?>">
          <i class="fi-page-edit colorBlueDark"></i><span class="app-dashboard-sidebar-text">Editar perfil</span>
        </a>
    </li>

    <li>
    	   <a href="<?php echo base_url().'Login/password'; ?>" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'Login/password') || strpos($_SERVER['REQUEST_URI'], 'Login/update_password')) ? 'is-active':''; ?>">
           <i class="fi-unlock colorBlueDark"></i><span class="app-dashboard-sidebar-text">Modificar password</span>
         </a>
     </li>

    <li>
    	  <a href="<?php echo base_url().'Requisicion'; ?>" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'Requisicion') || strpos($_SERVER['REQUEST_URI'], 'Requisicion/Requisicion/detalles')) ? 'is-active':''; ?>"> 
      	<i class="fi-page colorBlueDark"></i><span class="app-dashboard-sidebar-text">Mis requisiciones</span>
        </a>
    </li>
     <li>
    	   <a href="<?php echo base_url().'Requisicion/nueva_requisicion'; ?>" class="<?php echo (strpos($_SERVER['REQUEST_URI'], 'Requisicion/nueva_requisicion')) ? 'is-active':''; ?>">
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