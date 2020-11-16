<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">
      <a href="<?php echo base_url();?>cobros/cobros/add" class="btn btn-primary btn-labeled pull-right">
        <span class="btn-label"><i class="fa fa-plus-circle"></i></span>Cobrar
      </a>
      <h3>Pagos
         <br>
         <small>formulario</small>
      </h3>

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Pago |
                  <small>detalles</small>
               </div>
               <form action="<?php echo base_url();?>movimientos/ventas/store" method="POST" class="form-horizontal">
                   <div class="form-group">
                       <div class="col-md-3">
                           <label for="">Comprobante de pago:</label>
                           <select name="comprobantes" id="comprobantes" class="form-control" required>
                               <option value="">Seleccione...</option>
                               <option value="1">Boleta</option>
                               <option value="2">Factura</option>
                           </select>

                <!---      <select name="estudiante" id="Estudiante" class="form-control selectpicker" data-live-search="true">
  /                             <option value="">...<//option>
                              </?php foreach ($listaestudiantes as $estudiante): ?>
                                 <option value="</?php echo $estudiante->idEstudiante ?>">
                                  </?php echo $estudiante->nombre." ".$estudiante->nombres." ".$estudiante->aPaterno." ".$estudiante->aMaterno; ?>
                                 </option>
                              </?php endforeach; ?>
                           </select>
                --->

                           <input type="hidden" id="idcomprobante" name="idcomprobante">
                           <input type="hidden" id="igv">
                       </div>
                       <div class="col-md-3">
                           <label for="">Serie:</label>
                           <input type="text" class="form-control" name="serie" readonly>
                       </div>
                       <div class="col-md-3">
                           <label for="">Numero:</label>
                           <input type="text" class="form-control" id="numero" name="numero" readonly>
                       </div>

                   </div>
                   <div class="form-group">
                       <div class="col-md-6">
                           <label for="">Estudiante:</label>
                           <div class="input-group">
                               <input type="hidden" name="idcliente" id="idcliente">
                               <input type="text" class="form-control" disabled="disabled" id="cliente">
                               <span class="input-group-btn">
                                   <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span> Buscar</button>
                               </span>
                           </div><!-- /input-group -->
                       </div>
                       <div class="col-md-3">
                           <label for="">Fecha:</label>
                           <input type="date" class="form-control" name="fecha" required>
                       </div>
                   </div>
                   <div class="form-group">
                       <div class="col-md-6">
                           <label for="">Razon:</label>
                           <input type="text" class="form-control" id="producto">
                       </div>
                       <div class="col-md-2">
                           <label for="">&nbsp;</label>
                           <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                       </div>
                   </div>
                   <table id="tbventas" class="table table-bordered table-striped table-hover">
                       <thead>
                           <tr>
                               <th>Codigo</th>
                               <th>Nombre</th>

                               <th>Precio</th>
                               <th>Stock Max.</th>
                               <th>Cantidad</th>
                               <th>Importe</th>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody>

                       </tbody>
                   </table>

                   <div class="form-group">
                       <div class="col-md-3">
                           <div class="input-group">
                               <span class="input-group-addon">Subtotal:</span>
                               <input type="text" class="form-control" placeholder="Username" name="subtotal" readonly="readonly">
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="input-group">
                               <span class="input-group-addon">IGV:</span>
                               <input type="text" class="form-control" placeholder="Username" name="igv" readonly="readonly">
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="input-group">
                               <span class="input-group-addon">Descuento:</span>
                               <input type="text" class="form-control" placeholder="Username" name="descuento" value="0.00" readonly="readonly">
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="input-group">
                               <span class="input-group-addon">Total:</span>
                               <input type="text" class="form-control" placeholder="Username" name="total" readonly="readonly">
                           </div>
                       </div>
                   </div>

                   <div class="form-group">
                       <div class="col-md-12">
                           <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                       </div>

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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lista de Estudiantes</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover" >
                  <!--  <thead>
                        <tr>
                            <th>Add</th>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>UM</th>
                        </tr>
                    </thead>   -->
                    <tbody>
                      <table id="datatable3" class="table table-striped table-hover">
                         <thead>
                            <tr>
                              <th>#</th>
                              <th>Nombre</th>
                              <th>Matricula</th>
                              <th>Curso</th>
                              <th class="sort-alpha">acciones</th>
                            </tr>
                         </thead>
                         <tbody>
                           <?php  if(!empty($estudiantes)):?>
                             <?php $cont = 1; ?>
                             <?php foreach ($estudiantes as $estudiante): ?>
                                   <tr class="gradeX">
                                      <td><?php echo $cont; ?></td>
                                      <td><?php echo $estudiante->nombres." ".$estudiante->aPaterno." ".$estudiante->aMaterno; ?></td>
                                      <td><?php echo $estudiante->matricula; ?></td>
                                      <td><?php echo $estudiante->nombre." ".$estudiante->seccion; ?></td>
                                      <?php $dataestudiante = estudiante->idEstudiante."*" ?>
                                      <td>
                                        <div class="btn-group">
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
                                 <th>Matricula</th>
                                 <th>Curso</th>
                                 <th class="sort-alpha">acciones</th>
                               </tr>
                            </tfoot>
                         </tbody>
                      </table>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">


</script>
