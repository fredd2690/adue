
<!-- START Scripts-->
<!-- Main vendor Scripts-->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Plugins-->
<script src="<?php echo base_url();?>assets/vendor/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/slider/js/bootstrap-slider.js"></script>
<script src="<?php echo base_url();?>assets/vendor/filestyle/bootstrap-filestyle.min.js"></script>
<!-- Animo-->
<script src="<?php echo base_url();?>assets/vendor/animo/animo.min.js"></script>
<!-- Sparklines-->
<script src="<?php echo base_url();?>assets/vendor/sparklines/jquery.sparkline.min.js"></script>
<!-- Slimscroll-->
<script src="<?php echo base_url();?>assets/vendor/slimscroll/jquery.slimscroll.min.js"></script>
<!-- START Page Custom Script-->
<!--  Flot Charts-->
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/flot/jquery.flot.categories.min.js"></script>
<!--[if lt IE 8]><script src="</?php echo base_url();?>assets/js/excanvas.min.js"></script><![endif]-->
<!-- Data Table Scripts-->
<script src="<?php echo base_url();?>assets/vendor/datatable/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
<script src="<?php echo base_url();?>assets/vendor/datatable/extensions/ColVis/js/dataTables.colVis.min.js"></script>
<!-- END Page Custom Script-->
<!-- MomentJs and Datepicker-->
<script src="<?php echo base_url();?>assets/vendor/moment/min/moment-with-langs.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- Tags input-->
<!-- App Main-->
<script src="<?php echo base_url();?>assets/app/js/app.js"></script>
<!-- END Scripts-->

<!--Start Select-->
<script src="<?php echo base_url();?>assets/vendor/select/bootstrap-select.min.js"></script>
<!-- End Select-->
<!--Start autocomplete-->
<script src="<?php echo base_url();?>assets/vendor/jqueryui/jquery-ui/jquery-ui.js"></script>
<!-- End autocomplete-->

<script>

$('#picker').datepicker({
  timepicker:false,
  datepicker:true,
  format:'Y-m-d',
  value:
})

// $(document).ready(functicon(){
//
//   var base_url="</?php echo base_url(); ?>";
//
//   //check 19
//   //$("#cuota").autocomplete({
//     source:function(request,response){
//       $.ajax({
//         url: base_url+"cobros/cobros/getCuota",
//         type:"POST",
//         dataType:"JSON",
//         data: {valor:request.term},
//               success:function(data){response(data);
//               }
//         });
//     },
//     minLength:2,
//     select:function(event, ui){
//       data = ui.item.id + "*"+ui.item.concepto + "*"+ui.item.precio;
//       $("#btn-agregar").val(data);
//     },
//   })
//
//   //$("#comprobantes").on("change",function(){
//     source:function(request,response){
//       $.ajax({
//         url: base_url+"cobros/cobros/getCuota",
//         type:"POST",
//         dataType:"JSON",
//         data: {valor:request.term},
//               success:function(data){response(data);
//               }
//         });
//     },
//     minLength:2,
//     select:function(event, ui){
//       data = ui.item.id + "*"+ui.item.concepto + "*"+ui.item.precio;
//       $("#btn-agregar").val(data);
//     },
//   })
//
//
// })
//
// function generarnumero(numero){
//   if(numero>=99999 $$ numero<999999){
//     return Number(numero)+1;
//   }
//   if(numero>=9999 $$ numero<99999){
//     return "0" + (Number(numero)+1);
//   }
//   if(numero>=999 $$ numero<9999){
//     return "00" + (Number(numero)+1);
//   }
//   if(numero>=99 $$ numero<999){
//     return "000" + (Number(numero)+1);
//   }
//   if(numero>=9 $$ numero<99){
//     return "0000" + (Number(numero)+1);
//   }
//   if(numero<9){
//     return "00000" + (Number(numero)+1);
//   }
//
// }

</script>



</body>

</html>
