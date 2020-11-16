<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">

      <!-- START DATATABLE 3-->
      <div class="row">
        <form action="<?php echo base_url();?>Estudiante/Estudiante/agregardb" method="post" role="form" class="mb-lg">
              <?php if($this->session->flashdata("error")):?>
                      <div class="alert alert-danger">
                        <p> <?php echo $this->session->flashdata("error"); ?></p>
                      </div>
              <?php endif; ?>
             <div class="col-lg-6 ">
               <div class="panel panel-default">
                   <div class="panel-heading">Nuevo |
                      <small>Estudiante</small>
                   </div>


                   <form action="<?php echo base_url();?>Estudiante/Estudiante/agregardb" method="post" role="form" class="mb-lg">
                     <?php if($this->session->flashdata("error")):?>
                             <div class="alert alert-danger">
                               <p> <?php echo $this->session->flashdata("error"); ?></p>
                             </div>
                     <?php endif; ?>
                          <div class="panel-body">

                               <div class="form-group">
                                  <label for="nombres">Nombres: (*)</label>
                                  <input type="text" id="nombres" name="nombres" placeholder="Ingresa el Nombre" class="form-control" minlegth="2" maxlength="10" required="">
                               </div>
                               <div class="form-group">
                                  <label for="apaterno">Apellido Paterno: (*)</label>
                                  <input type="text" id="apaterno" name="apaterno" placeholder="Ingresa el apellido Paterno" class="form-control" minlegth="4" maxlength="20" required="" pattern="[a-zA-Z]+">
                               </div>
                               <div class="form-group">
                                  <label for="amaterno">Apellido Materno:</label>
                                  <input type="text" id="amaterno" name="amaterno" placeholder="Ingresa el apellido Materno" class="form-control" pattern="[a-z A-Z]+">
                               </div>
                               <div class="form-group">
                                  <label for="ci">C.I.:</label>
                                  <input type="text" id="ci" name="ci" placeholder="Ingresa la ceduala de identidad" class="form-control">
                               </div>

                               <div class="form-group col-sm-10">
                                  <label for="sexo">sexo:</label>
                                         <div class="radio">
                                           <input type="radio" id="male" name="sexo" value="M">
                                           <label for="male">Masculino</label><br>
                                           <input type="radio" id="female" name="sexo" value="F">
                                           <label for="female">Femenino</label><br>
                                         </div>
                               </div>

                               <div class="form-group">
                                  <label for="fechaNacimiento" class="col-sm-3 control-label">Fecha de Nacimiento:</label>
                                  <!-- <div class="col-sm-6"> -->
                                     <!-- input.datepicker.form-control(size='16', type='text', value='12-02-2013', data-date-format='dd-mm-yyyy') -->
                                     <div data-pick-time="false" class="col-md-3 datetimepicker input-group date mb-lg">
                                        <input type="text" id="picker" name="fechaNacimiento" class="form-control">
                                        <span class="input-group-addon">
                                           <span class="fa fa-calendar"></span>
                                        </span>
                                     </div>
                                  <!-- </div> -->
                               </div>

                               <div class="form-group">
                                  <label for="celular">Celular:</label>
                                  <input type="text" id="celular" name="celular" placeholder="Ingresa un numero de celular" class="form-control" pattern="[0-9]+">
                               </div>
                               <div class="form-group">
                                  <label for="email">Email:</label>
                                  <input type="email" id="email" name="email" placeholder="Ingresa el correo electronico" class="form-control">
                               </div>
                               <div class="form-group">
                                  <label for="direccion">Direccion:</label>
                                  <input type="text" id="direccion" name="direccion" placeholder="Ingresa la direccion del domicilio" class="form-control">
                               </div>
                               <div class="form-group">
                                 <label for="curso">Curso:</label>
                                 <select name="curso" id="curso" class="form-control selectpicker" data-live-search="true">
                                     <option value="">Selecciona el curso</option>
                                     <?php foreach ($cursos as $curso): ?>
                                       <option value="<?php echo $curso->idCurso ?>">
                                         <?php echo $curso->nombre." ".$curso->seccion ?>
                                       </option>
                                     <?php endforeach; ?>
                                 </select>
                               </div>


                               <!-- <div class="form-group">
                                  <label class="col-sm-1 control-label">Foto:</label>
                                  <div class="col-sm-6">
                                     <input type="file" data-classbutton="btn btn-default" data-classinput="form-control inline" class="filestyle form-control">
                                  </div>
                               </div> -->

                               <div class="form-group">
                                  <button type="submit" class="btn btn-labeled btn-success pull-left">
                                       <span class="btn-label"><i class="fa fa-check-circle"></i></span>Agregar
                                  </button>
                                  <a href="<?php echo base_url();?>Estudiante/Estudiante/" class="btn btn-danger btn-labeled pull-right">
                                      <span class="btn-label"><i class="fa fa-ban"></i></span>Cancelar
                                  </a>
                             </div>
                          </div>
                      </form>
                 </div>
             </div>
         </form>
      </div>
      <!-- END DATATABLE 3-->

   </section>
   <!-- END Page content-->
</section>
<!-- END Main section-->


</section>
<!-- END Main wrapper-->
