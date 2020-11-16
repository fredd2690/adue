<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">
      <a href="<?php echo base_url();?>Pagos/pagos/add" class="btn btn-primary btn-labeled pull-right">
        <span class="btn-label"><i class="fa fa-plus-circle"></i></span>Agregar Pago
      </a>
      <h3>Pagos
         <br>
         <small>Lista</small>
      </h3>

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Pagos |
                  <small>detalles</small>
               </div>
               <div class="col-lg-12">
                  <div class="panel-body">
                  <table id="datatable3" class="table table-striped table-hover">
                     <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Curso</th>
                          <th>Deuda</th>
                          <th class="sort-alpha">acciones</th>
                        </tr>
                     </thead>
                     <tbody>

                        <tfoot>
                           <tr>
                             <th>#</th>
                             <th>Nombre</th>
                             <th>curso</th>
                             <th>deuda</th>
                             <th class="sort-alpha">acciones</th>
                           </tr>
                        </tfoot>
                     </tbody>
                  </table>
               </div>
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


<!-- START modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
         </div>
            <div class="modal-body">
            </div>
         <div class="modal-footer">
         </div>
      </div>
   </div>
</div>

<div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
            <h4 id="myModalLabel" class="modal-title">Eliminar Registro</h4>
         </div>
            <div class="modal-body alert alert-danger alert-dismissable ">
              Esta seguro de quere eliminar este registro?
            </div>
         <div class="modal-footer">

            <a href="<?php echo base_url()?>Estudiante/Estudiante/delete/<?php echo $estudiante->idEstudiante;?>"
                 class="btn btn-danger btn-labeled">
                 <span class="btn-label"> <i class="fa fa-trash-o"></i></span>Eliminar</a>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Cancelar</button>

         </div>
      </div>
   </div>
</div>
 <!-- END modal-->
