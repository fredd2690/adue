<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">
      <a href="<?php echo base_url();?>cobros/cobros/add" class="btn btn-primary btn-labeled pull-right">
        <span class="btn-label"><i class="fa fa-plus-circle"></i></span>Cobrar
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
                  <div class="content-wrapper">
                      <section class="content-header">
                          <h1>
                              <a >Cobros <i class="fa fa-money"></i></a>

                          </h1>
                      </section>
                      <section class="content">
                          <div class="box box-solid">
                              <div class="box-body">
                                  <div class="row">
                                      <form action="<?php echo base_url();?>mantenimiento/ccolor/cinsert" method="POST">
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="nombre">Comprobante</label>
                                                      <select name="txttipo_comprobante" id="txttipo_comprobante" class="form-control selectpicker" data-live-search="true" required>
                                                          <option value="">Seleccione...</option>
                                                      </select>
                                                  <input type="hidden" id="txtidtipo_comprobante" name="txtidtipo_comprobante">
                                                  <input type="hidden" id="txtigv" name="txtigv">
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="">Serie:</label>
                                                  <input type="text" class="form-control" id="txtserie" name="txtserie" readonly>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="">Número:</label>
                                                  <input type="text" class="form-control" id="txtnum_documento" name="txtnum_documento" readonly>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="">Fecha:</label>
                                                  <input type="date" class="form-control" name="txtfecha" value="<?php echo date("Y-m-d");?>" required>
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="estudiante">Estudiante:</label>
                                                  <select name="estudiante" id="Estudiante" class="form-control selectpicker" data-live-search="true">
                                                      <option value="">...</option>
                                                      <?php foreach ($listaestudiantes as $estudiante): ?>
                                                        <option value="<?php echo $estudiante->idEstudiante ?>">
                                                          <?php echo $estudiante->nombre." ".$estudiante->nombres." ".$estudiante->aPaterno." ".$estudiante->aMaterno; ?>
                                                        </option>
                                                      <?php endforeach; ?>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-md-8">
                                              <div class="form-group">
                                                  <label for="">Cuota:</label>
                                                  <select name="Cuota" id="Cuota" class="form-control selectpicker" data-live-search="true" >
                                                      <option value="">Seleccione...</option>
                                                      <?php foreach ($listacuotas as $cuota): ?>
                                                        <option value="<?php echo $cuota->idCuota;?>">
                                                          <?php echo $cuota->concepto; ?>
                                                        </option>
                                                      <?php endforeach; ?>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-md-2">
                                              <div class="form-group">
                                                  <label for="">&nbsp;</label>
<<<<<<< HEAD
                                                  <button id="btn-agregar" value="" type="button" class="btn btn-primary labeled btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
=======
                                                  <button id="btn-agregar" type="button" class="btn btn-primary labeled btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
>>>>>>> cobros
                                              </div>
                                          </div>
                                          <div class="col-md-2">
                                              <div class="form-group">
                                                  <label for="">&nbsp;</label>
                                                  <button class="btn btn-info btn-flat btn-block" type="button" data-toggle="modal" data-target="#modal-default" ><span class="fa fa-search"></span> Buscar</button>
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="table-responsive">
                                                  <table id="detventas" class="table table-bordered table-striped table-hover">
                                                      <thead>
                                                          <tr class="bg-success">
                                                              <td>Código</td>
                                                              <td>Nombre</td>
                                                              <td>Imagen</td>
                                                              <td>UM</td>
                                                              <td>Precio Venta</td>
                                                              <td>Stock </td>
                                                              <td>Cantidad</td>
                                                              <td>Importe</td>
                                                              <td>X</td>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                      </tbody>
                                                  </table>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <div class="input-group">
                                                      <span class="input-group-addon">Subtotal:</span>
                                                      <input type="text" class="form-control" placeholder="0.00" name="txtsubtotal" readonly="readonly">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <div class="input-group">
                                                      <span class="input-group-addon">IGV:</span>
                                                      <input type="text" class="form-control" placeholder="0.00" name="txttotaligv" readonly="readonly">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="form-group">
                                                  <div class="input-group">
                                                      <span class="input-group-addon">Total:</span>
                                                      <input type="text" class="form-control" placeholder="0.00" name="txttotal" readonly="readonly">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </section>
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lista de Productos</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">

                <table id="example1" class="table table-bordered table-hover" >
                    <thead>
                        <tr>
                            <th>Add</th>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>UM</th>
                        </tr>
                    </thead>
                    <tbody>

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
