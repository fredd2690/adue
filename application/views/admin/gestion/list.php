<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">
      <a href="<?php echo base_url();?>Administracion/Gestion/add" class="btn btn-primary btn-labeled pull-right">
        <span class="btn-label"><i class="fa fa-plus-circle"></i></span>Agregar Gestion
      </a>
      <h3>Gestion Escolar
         <br>
         <small>Lista</small>
      </h3>
      <?php
       if($this->session->flashdata('correcto')):?>
       <div class="alert alert-success">
         <p><?php echo $this->session->flashdata('correcto');?></p>
       </div>
     <?php endif; ?>


      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Gestion |
                  <small>detalles</small>
               </div>
               <div class="panel-body">
                  <table id="datatable3" class="table table-striped table-hover">
                     <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Fecha Inicio</th>
                          <th>Fecha de Cierre</th>
                          <th>Estado</th>
                          <th class="sort-alpha">acciones</th>
                        </tr>
                     </thead>
                     <tbody>
                             <?php  if(!empty($gestiones)):?>
                                 <?php $cont = 1; ?>
                                 <?php foreach ($gestiones as $gestion): ?>
                                       <tr class="gradeX">
                                          <td><?php echo $cont; ?></td>
                                          <td><?php echo $gestion->nombre; ?></td>
                                          <td><?php echo $gestion->fechaInicio; ?></td>
                                          <td><?php echo $gestion->fechaCierre; ?></td>

                                            <?php
                                              if ($gestion->estado==1){
                                                $style='class="label label-success"';
                                                $style2='class="label label-warning"';
                                                echo "<td><p><span $style><font style='vertical-align: inherit;'>Activo</font></span></p></td>";
                                              }else{
                                                echo "<td><p><span $style2><font style='vertical-align: inherit;'>Inactivo</font></span></p></td>";
                                              }
                                               ?>

                                          <td>
                                            <div class="btn-group">

                                              <a href="<?php echo base_url();?>administracion/gestion/view/<?php echo $gestion->idGestion;?>"
                                                 class="btn btn-oval btn-primary" data-toggle="modal" data-target="#myModal"> <span class="fa fa-search"></span> </a>
                                              <a href="<?php echo base_url();?>administracion/gestion/edit/<?php echo $gestion->idGestion;?>"
                                                 class="btn btn-warning" > <span class="fa fa-pencil"></span> </a>
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
                                   <th>Fecha Inicio</th>
                                   <th>Fecha de Cierre</th>
                                   <th>Estado</th>
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

            <a href="<?php echo base_url()?>Curso/Curso/delete/<?php echo $gestion->idGestion;?>"
                 class="btn btn-danger btn-labeled">
                 <span class="btn-label"> <i class="fa fa-trash-o"></i></span>Eliminar</a>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Cancelar</button>

         </div>
      </div>
   </div>
</div>
 <!-- END modal-->
 <!-- END modal
 <script type="text/javascript">
  $(".btn-view").on("click",function(){
    var boton =$(this).val();
    var info = boton.split("*");
    resp = <p><strong>nombre: </strong>+info[1]+" </p>"
    resp = <p><strong>fecha Inicio: </strong>+info[2]+" </p>"
    resp = <p><strong>fecha Cierre: </strong>+info[3]+" </p>"
    $("#modal-default .modal-body").html(resp);
  });
 </script>

 -->
