<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">
      <a href="<?php echo base_url();?>Estudiante/estudiante/add" class="btn btn-primary btn-labeled pull-right">
        <span class="btn-label"><i class="fa fa-plus-circle"></i></span>Agregar Estudiante
      </a>
      <h3>Estudiantes
         <br>
         <small>Lista</small>
      </h3>

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Estudiantes |
                  <small>detalles</small>
               </div>
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
                       <?php  if(!empty($datos)):?>
                         <?php $cont = 1; ?>
                         <?php foreach ($datos as $dato): ?>
                               <tr class="gradeX">
                                  

                                  <td>
                                    <div class="btn-group">

                                      <a href="<?php echo base_url();?>curso/curso/view/<?php echo $estudiante->idEstudiante;?>"
                                         class="btn btn-oval btn-primary" data-toggle="modal" data-target="#myModal"> <span class="fa fa-search"></span> </a>
                                      <a href="<?php echo base_url();?>curso/curso/edit/<?php echo $estudiante->idEstudiante;?>"
                                         class="btn btn-warning" data-toggle="modal" data-target="#myModal"> <span class="fa fa-pencil"></span> </a>
                                      <button data-toggle="modal" data-target="#myModal1" class="btn btn-oval btn-danger "> <span class="fa fa-trash-o"></span> </button>

                                    </div>
                                  </td>
                              </tr>
                              <?php $cont++; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                        <tfoot>
                           <tr>
                             <th>#</th>
                             <th>Nombre</th>
                             <th>Cedula</th>
                             <th>Sexo</th>
                             <th>Fecha de Nacimiento</th>
                             <th>Matricula</th>
                             <th>Celular</th>
                             <th>Direccion</th>
                             <th>Curso</th>
                             <th class="sort-alpha">acciones</th>
                           </tr>
                        </tfoot>
                     </tbody>
                  </table>
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
