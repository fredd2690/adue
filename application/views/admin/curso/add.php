<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
           <div class="panel panel-default">
               <div class="panel-heading">Nuevo |
                  <small>Curso</small>
               </div>


               <form action="<?php echo base_url();?>Curso/Curso/agregardb" method="post" role="form" class="mb-lg">
                 <?php if($this->session->flashdata("error")):?>
                         <div class="alert alert-danger">
                           <p> <?php echo $this->session->flashdata("error"); ?></p>
                         </div>
                 <?php endif; ?>
                      <div class="panel-body">

                           <div class="form-group">
                              <label for="nombre">Curso: (*)</label>
                              <input type="text" id="nombre" name="nombre" placeholder="Ingresa el curso" class="form-control" minlegth="2" maxlength="10" required="">
                           </div>
                           <div class="form-group">
                              <label for="seccion">Seccion: (*)</label>
                              <input type="text" id="seccion" name="seccion" placeholder="Ingresa la seccion" class="form-control" minlegth="4" maxlength="20" required="" pattern="[a-zA-Z]+">
                           </div>
                           <div class="form-group">
                              <label for="tutor">Tutor:</label>
                              <input type="text" id="tutor" name="tutor" placeholder="Ingresa el nombre del Tutor de Clase" class="form-control" pattern="[a-z A-Z]+">
                           </div>

                           <button type="submit" class="btn btn-labeled btn-success pull-left">
                             <span class="btn-label"><i class="fa fa-check-circle"></i></span>Agregar</button>
                      <!--       <button type="button" data-dismiss="modal" class="btn btn-primary pull-right">Cancelar</button>
                      -->       <a href="<?php echo base_url();?>/Curso/Curso/" class="btn btn-danger btn-labeled pull-right">
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
