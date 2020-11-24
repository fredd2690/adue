<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-5 ">
           <div class="panel panel-default">
               <div class="panel-heading">Nuevo |
                  <small>Gestion</small>
               </div>
                 <?php if($this->session->flashdata("error")):?>
                         <div class="alert alert-danger">
                           <p> <?php echo $this->session->flashdata("error"); ?></p>
                         </div>
                 <?php endif; ?>
                 <form action="<?php echo base_url();?>Administracion/gestion/updatedb" method="post" role="form" class="mb-lg">
                      <div class="panel-body">
                          <input type="hidden" id="idGestion" name="idGestion" value="<?php echo $gestion->idGestion?>" class="form-control">
                           <div class="form-group">
                              <label for="nombre">Gestion: (*)</label>
                              <input type="text" id="nombre"  name="nombre" value="<?php echo $gestion->nombre; ?>" placeholder="Ingresa la gestion escolar" class="form-control" minlegth="2" maxlength="10" required="">
                           </div>
                           <div class="row">
                              <label for="fechaInicio" class="col-sm-3 control-label">fecha Inicio:</label>
                              <div class="col-sm-9">
                                <div id="div_fechaInicio" data-pick-time="false" class="datetimepicker input-group date mb-lg">
                                  <input type="text" id="fechaInicio"  name="fechaInicio" value="<?php echo date('m/d/Y',strtotime($gestion->fechaInicio) ); ?>" class="form-control"
                                   >
                                  <span class="input-group-addon">
                                     <span class="fa fa-calendar"></span>
                                  </span>
                                </div>
                              </div>
                           </div>
                           <div class="row">
                              <label for="fechaCierre" class="col-sm-3 control-label">fecha clausura:</label>
                              <div class="col-sm-9">
                                <div data-pick-time="false" class="datetimepicker input-group date mb-lg">
                                  <input type="text" id="fechaCierre" name="fechaCierre" value="<?php echo date('m/d/Y',strtotime($gestion->fechaCierre) );?>" class="form-control">
                                  <span class="input-group-addon">
                                     <span class="fa fa-calendar"></span>
                                  </span>
                                </div>
                              </div>
                           </div>

                           <button type="submit" class="btn btn-labeled btn-success pull-left">
                             <span class="btn-label"><i class="fa fa-check-circle"></i></span>Actualizarr</button>
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

<script type="text/javascript">
  
document.addEventListener("DOMContentLoaded", function(event) {
  
    $('#fechaInicio').datetimepicker({format : 'MM/DD/YYYY'});
    $('#fechaCierre').datetimepicker({format : 'DD-MM-YYYY'});
     console.log('----')
  });
</script>
</section>
<!-- END Main wrapper-->
