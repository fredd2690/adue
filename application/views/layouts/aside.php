      <!-- START aside-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <nav class="sidebar">
            <ul class="nav">
               <!-- START user info-->
               <li>
                  <div data-toggle="collapse-next" class="item user-block has-submenu">
                     <!-- User picture-->
                     <div class="user-block-picture">
                        <img src="<?php echo base_url();?>assets/app/img/adue.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                        <!-- Status when collapsed-->
                        <div class="user-block-status">
                           <div class="point point-success point-lg"></div>
                        </div>
                     </div>
                     <!-- Name and Role-->
                     <div class="user-block-info">
                        <span class="user-block-name item-text">Bienvenido, <?php echo $this->session->userdata("nombre"); ?></span>
                        <span class="user-block-role">Admin</span>
                        <!-- START Dropdown to change status-->
                        <div class="btn-group user-block-status">
                           <button type="button" data-toggle="dropdown" data-play="fadeIn" data-duration="0.2" class="btn btn-xs dropdown-toggle">
                            <!--    <div class="point point-success"></div>Online</button>  -->
                           <ul class="dropdown-menu text-left pull-right">
                        <!--      <li>
                                 <a href="</?php echo base_url();?>assets/#">
                                    <div class="point point-success"></div>Online</a>
                              </li>  -->
                              <li>
                                 <a href="<?php echo base_url();?>assets/#">
                                    <div class="point point-warning"></div>Away</a>
                              </li>
                              <li>
                                 <a href="<?php echo base_url();?>assets/#">
                                    <div class="point point-danger"></div>Busy</a>
                              </li>
                           </ul>
                        </div>
                        <!-- END Dropdown to change status-->
                     </div>
                  </div>
                  <!-- START User links collapse-->
                  <ul class="nav collapse">
                     <li><a href="<?php echo base_url();?>assets/#">Profile</a>
                     </li>
                     <li><a href="<?php echo base_url();?>assets/#">Settings</a>
                     </li>
                     <li class="divider"></li>
                     <li><a href="<?php echo base_url();?>auth/logout">Logout</a>
                     </li>
                  </ul>
                  <!-- END User links collapse-->
               </li>
               <!-- END user info-->
               <!-- START Menu-->
               <li class="active">
                  <a href="<?php echo base_url();?>welcome" title="Dashboard" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-dashboard"></em>
                     <!--<div class="label label-primary pull-right">!</div>-->
                     <span class="item-text">Dashboard</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse in">
                     <li>
                        <a href="<?php echo base_url();?>welcome" title="Default" data-toggle="" class="no-submenu">
                           <span class="item-text">No Implementado</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="<?php echo base_url();?>assets/#" title="Charts" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-money"></em>
                     <span class="item-text">Cobros</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url();?>welcome" title="Flot" data-toggle="" class="no-submenu">
                           <span class="item-text">No Implementado</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="<?php echo base_url();?>assets/#" title="Charts" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-users"></em>
                     <span class="item-text">Estudiantes</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url();?>estudiante/estudiante" title="Flot" data-toggle="" class="no-submenu">
                           <span class="item-text">estudiantes</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="<?php echo base_url();?>assets/#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-sitemap"></em>
                     <span class="item-text">Cursos</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url();?>Curso/Curso" title="Data Table" data-toggle="" class="no-submenu">
                           <span class="item-text">Cursos</span>
                            <div class="label label-primary pull-right">!</div>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="<?php echo base_url();?>assets/#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-bar-chart-o"></em>
                     <span class="item-text">Gestion de Pagos</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url();?>welcome" title="Data Table" data-toggle="" class="no-submenu">
                           <span class="item-text">No Implementado</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href="<?php echo base_url();?>assets/#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-cog"></em>
                     <span class="item-text">Administrador</span>
                     <div class="label label-primary pull-right">nuevo</div>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url();?>administrador/usuarios" title="Data Table" data-toggle="" class="no-submenu">
                           <span class="item-text">Usuarios</span>
                           <div class="label label-primary pull-right">!</div>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>

               <!-- END Menu-->
               <!-- Sidebar footer    -->
               <li class="nav-footer">
                  <div class="nav-footer-divider"></div>
                  <!-- START button group-->
                  <div class="btn-group text-center">
                     <button type="button" data-toggle="tooltip" data-title="Add Contact" class="btn btn-link">
                        <em class="fa fa-user text-muted"><sup class="fa fa-plus"></sup>
                        </em>
                     </button>
                     <button type="button" data-toggle="tooltip" data-title="Settings" class="btn btn-link">
                        <em class="fa fa-cog text-muted"></em>
                     </button>
                     <button type="button" data-toggle="tooltip" data-title="Logout" class="btn btn-link">
                        <em class="fa fa-sign-out text-muted"></em>
                     </button>
                  </div>
                  <!-- END button group-->
               </li>
            </ul>
         </nav>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- End aside-->
