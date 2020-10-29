<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">    

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Vista |
                  <small>usuario</small>
               </div>


               <form action="<?php echo base_url();?>Administrador/usuarios/updatedb" method="post" role="form" class="mb-lg">
                 <?php if($this->session->flashdata("error")):?>
                         <div class="alert alert-danger">
                           <p> <?php echo $this->session->flashdata("error"); ?></p>
                         </div>
                 <?php endif; ?>

               <div class="panel-body" >
                           <input type="hidden" id="idusuario" name="idusuario" va lue="<?php echo $usuario->idusuario?>" class="form-control" readonly>
                           <div class="form-group">
                              <label for="nombre">Nombre:</label>
                              <input type="text" id="nombre" name="nombre" value="<?php echo $usuario->nombres?>" class="form-control" readonly>
                           </div>
                           <div class="form-group">
                              <label for="apellido">apellidos:</label>
                              <input type="text" id="apellido" name="apellido" value="<?php echo $usuario->apellidos?>" class="form-control" readonly>
                           </div>
                           <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" id="email" name="email" value="<?php echo $usuario->email?>" class="form-control" readonly>
                           </div>
                           <div class="form-group">
                              <label for="username">Nombre de Usuario:</label>
                              <input type="username" id="username" name="username" value="<?php echo $usuario->username?>" class="form-control" disabled>
                           </div>
                                                     
                           
                    </form>

                    <a href="<?php echo base_url();?>Administrador/Usuarios/" class="btn btn-primary btn-labeled pull-right">
                     <span class="btn-label"><i class="fa fa-times-circle"></i></span>Cerrar       
                     </a>                  
                    

               </div>
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
