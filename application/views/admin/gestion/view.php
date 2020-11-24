<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Vista |
                  <small>Gestión</small>
               </div>


               <form action="<?php echo base_url();?>Administracion/gestion/updatedb" method="post" role="form" class="mb-lg">
                 <?php if($this->session->flashdata("error")):?>
                         <div class="alert alert-danger">
                           <p> <?php echo $this->session->flashdata("error"); ?></p>
                         </div>
                 <?php endif; ?>

                      <div class="panel-body" >
                         <div class="form-group">
                              <label for="nombre">Gestion: </label>
                             
                              <label><?php echo $gestion->nombre; ?></label>
                           </div>
                           <div class="row">
                              <label for="fechaInicio" class="col-sm-3 control-label">fecha Inicio:</label>
                              <div class="col-sm-9">
                                <label><?php echo $gestion->fechaInicio; ?></label>
                              </div>
                           </div>
                           <div class="row">
                              <label for="fechaCierre" class="col-sm-3 control-label">fecha clausura:</label>
                              <div class="col-sm-9">
                                <label><?php echo $gestion->fechaCierre; ?></label>
                                
                              </div>
                           </div>
                      </div>


                    </form>

                    <a href="<?php echo base_url();?>Administracion/gestion/" class="btn btn-primary btn-labeled pull-right">
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
