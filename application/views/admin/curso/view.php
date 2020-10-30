<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Vista |
                  <small>curso</small>
               </div>


               <form action="<?php echo base_url();?>curso/curso/updatedb" method="post" role="form" class="mb-lg">
                 <?php if($this->session->flashdata("error")):?>
                         <div class="alert alert-danger">
                           <p> <?php echo $this->session->flashdata("error"); ?></p>
                         </div>
                 <?php endif; ?>

               <div class="panel-body" >
                           <input type="hidden" id="idCurso" name="idCurso" va lue="<?php echo $curso->idCurso?>" class="form-control" readonly>
                           <div class="form-group">
                              <label for="nombre">Nombre:</label>
                              <input type="text" id="nombre" name="nombre" value="<?php echo $curso->nombre?>" class="form-control" readonly>
                           </div>
                           <div class="form-group">
                              <label for="seccion">Seccion:</label>
                              <input type="text" id="seccion" name="seccion" value="<?php echo $curso->seccion?>" class="form-control" readonly>
                           </div>
                           <div class="form-group">
                              <label for="tutor">Tutor:</label>
                              <input type="text" id="tutor" name="tutor" value="<?php echo $curso->tutor?>" class="form-control" disabled>
                           </div>


                    </form>

                    <a href="<?php echo base_url();?>Curso/Curso/" class="btn btn-primary btn-labeled pull-right">
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
