<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>Login</title>

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/animo/animate+animo.css">
   <!-- App CSS-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/app/css/app.css">

   <style>
   @import url('https://fonts.googleapis.com/css2?family=Asset&display=swap');
   .titularFuente1{
     font-family: 'Asset', cursive;
   }
   </style>
   <!-- Modernizr JS Script-->
   <script src="<?php echo base_url();?>assets/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="<?php echo base_url();?>assets/vendor/fastclick/fastclick.js" type="application/javascript"></script>
</head>

<body>
   <!-- START wrapper-->
   <div style="height: 100%; padding: 50px 0; background-color: #2c3037" class="row row-table">
      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <!-- START panel-->
         <div data-toggle="play-animation" data-play="fadeInUp" data-offset="0" class="panel panel-default panel-flat">
            <p class="text-center mb-lg">
               <br>
               <a href="#">
                  <img src="<?php echo base_url();?>assets/app/img/login2.png" alt="Image" class="block-center img-rounded">
               </a>
            </p>
            <p class="text-center mb-lg">
               <strong>Logueate para continuar</strong>


            </p>
            <?php if($this->session->flashdata("error")):?>
                    <div class="alert alert-danger">
                      <p> <?php echo $this->session->flashdata("error"); ?></p>
                    </div>
            <?php endif; ?>

            <div class="panel-body">
               <form action="<?php echo base_url();?>auth/login" method="post" role="form" class="mb-lg">

                  <div class="form-group has-feedback">
                     <input id="exampleInputEmail1" type="text" name="username" placeholder="Ingresa tu usuario" class="form-control" required="" pattern="[a-zA-Z]+">
                     <span class="fa fa-user form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="exampleInputPassword1" type="password" name="password" placeholder="Contraseña" class="form-control" required="">
                     <span class="fa fa-lock form-control-feedback text-muted"></span>
                  </div>
                  <div class="clearfix">
                     <div class="checkbox c-checkbox pull-left mt0">
                        <label>
                           <input type="checkbox" value="">
                           <span class="fa fa-check"></span>Recordarme</label>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-block btn-primary">Ingresar</button>
               </form>
            </div>
         </div>
         <!-- END panel-->
      </div>
   </div>
   <!-- END wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Animo-->
   <script src="<?php echo base_url();?>assets/vendor/animo/animo.min.js"></script>
   <!-- Custom script for pages-->
   <script src="<?php echo base_url();?>assets/app/js/pages.js"></script>
   <!-- END Scripts-->
</body>

</html>
