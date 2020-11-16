<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-5 ">
           <div class="panel panel-default">
               <div class="panel-heading">Nuevo |
                  <small>Cuota</small>
               </div>
                 <?php if($this->session->flashdata("error")):?>
                         <div class="alert alert-danger">
                           <p> <?php echo $this->session->flashdata("error"); ?></p>
                         </div>
                 <?php endif; ?>
                 <form action="<?php echo base_url();?>administracion/cuota/agregardb" method="post" role="form" class="mb-lg">
                      <div class="panel-body">
                           <div class="form-group">
                              <label for="concepto">Concepto: (*)</label>
                              <input type="text" id="concepto" name="concepto" placeholder="Ingresa el conceptor" class="form-control" minlegth="2" maxlength="10" required="">
                           </div>
                           <div class="form-group">
                              <label for="precio">Precio: (*)</label>
                              <input type="text" id="precio" name="precio" placeholder="Ingresa el precio" class="form-control" minlegth="2" maxlength="10" required="">
                           </div>

                            <div class="form-group">
                               <label for="">Gestion:</label>
                               <select name="gestion" id="gestion" class="form-control" required>
                                   <option value="">...</option>
                                   <option value="3">2020</option>
                                   <option value="4">2021</option>
                                  <option value="5">2022</option>
                               </select>
                           </div>



                           <button type="submit" class="btn btn-labeled btn-success pull-left">
                             <span class="btn-label"><i class="fa fa-check-circle"></i></span>Agregar</button>
                      <!--       <button type="button" data-dismiss="modal" class="btn btn-primary pull-right">Cancelar</button>
                      -->       <a href="<?php echo base_url();?>administracion/gestion" class="btn btn-danger btn-labeled pull-right">
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
