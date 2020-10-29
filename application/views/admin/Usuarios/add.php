<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">
      <h3>Usuarios
         <br>
         <small>Nuevo</small>
      </h3>

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
           <div class="panel panel-default">
               <div class="panel-heading">Lista |
                  <small>usuarios</small>
               </div>


               <form action="<?php echo base_url();?>Administrador/usuarios/agregardb" method="post" role="form" class="mb-lg">
                 <?php if($this->session->flashdata("error")):?>
                         <div class="alert alert-danger">
                           <p> <?php echo $this->session->flashdata("error"); ?></p>
                         </div>
                 <?php endif; ?>
                      <div class="panel-body">

                           <div class="form-group">
                              <label for="nombre">Nombre: (*)</label>
                              <input type="text" id="nombre" name="nombre" placeholder="Ingresa el nombre" class="form-control" minlegth="4" maxlength="20" required="" pattern="[a-zA-Z]+">
                           </div>
                           <div class="form-group">
                              <label for="apellido">apellidos:</label>
                              <input type="text" id="apellido" name="apellido" placeholder="Ingresa el apellido" class="form-control" minlegth="4" maxlength="20" required="" pattern="[a-zA-Z]+">
                           </div>
                           <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" id="email" name="email" placeholder="Ingresa el correo electronico" class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="username">Nombre de Usuario: (*)</label>
                              <input type="username" id="username" name="username" placeholder="Ingresa el nombre de usuario" class="form-control" minlegth="4" maxlength="25" required="" pattern="[a-zA-Z]+">
                           </div>
                           <div class="form-group">
                              <label for="password">Contraseña: (*)</label>
                              <input type="password" id="password" name="password" placeholder="Ingresa las contraseña" class="form-control" minlegth="6" maxlength="50" required="">
                           </div>
                           <div class="form-group">
                              <label for="idrol">Privilegios:</label>
                              <select id="idrol" name="idrol" class="form-control m-b">
                                 <option value="2">Usuario</option>
                                 <option value="1">Administrador</option>
                              </select>
                              <br>
                           </div>
                           <button type="submit" class="btn btn-labeled btn-success pull-left">
                             <span class="btn-label"><i class="fa fa-check-circle"></i></span>Agregar</button>

                             <a href="<?php echo base_url()?>Administrador/Usuarios/" class="btn btn-danger btn-labeled pull-right">
                                <span class="btn-label"><i class="fa fa-ban"></i></span>Cancelar
                            </a>
                     </div>
                  </form>
             </div>
         </div>
      </div>
      <!-- END DATATABLE 3-->

   </section>
   <!-- END Page content-->
</section>
<!-- END Main section-->


</section>
<!-- END Main wrapper-->
