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
   <title>Sistema UE</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="</?php echo base_url();?>assetshttps://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="</?php echo base_url();?>assetshttps://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/animo/animate+animo.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/csspinner/csspinner.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
   <!-- START Page Custom CSS-->
   <!-- Data Table styles-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/datatable/extensions/datatable-bootstrap/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/datatable/extensions/ColVis/css/dataTables.colVis.css">
   <!-- END Data Table styles-->
   <!--Start Select-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/select/bootstrap-select.min.css">
   <!-- End Select-->
   <!--Start autocomplete-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/jqueryui/jquery-ui/jquery-ui.css">
   <!-- END autocomplete Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src="<?php echo base_url();?>assets/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="<?php echo base_url();?>assets<?php echo base_url();?>assetsvendor/fastclick/fastclick.js" type="application/javascript"></script>


</head>

<body>
   <!-- START Main wrapper-->
   <section class="wrapper">
     <!-- START Top Navbar-->
      <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
         <!-- START navbar header-->
         <div class="navbar-header">
            <a href="<?php echo base_url();?>assets/#" class="navbar-brand">
               <div class="brand-logo" class="titularFuente2">ADUE System</div>
               <div class="brand-logo-collapsed">UE</div>
            </a>
         </div>
         <!-- END navbar header-->
         <!-- START Nav wrapper-->
         <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
               <li>
                  <a href="<?php echo base_url();?>assets/#" data-toggle="aside">
                     <em class="fa fa-align-left"></em>
                  </a>
               </li>
               <li>
                  <a href="<?php echo base_url();?>assets/#" data-toggle="navbar-search">
                     <em class="fa fa-search"></em>
                  </a>
               </li>
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">

               <!-- START User menu-->
               <li class="dropdown">
                  <a href="<?php echo base_url();?>assets/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-user"></em>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li><a href="<?php echo base_url();?>auth/logout">Logout</a>
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END User menu-->
            </ul>
            <!-- END Right Navbar-->
         </div>
         <!-- END Nav wrapper-->
         <!-- START Search form-->
         <form role="search" class="navbar-form">
            <div class="form-group has-feedback">
               <input type="text" placeholder="Type and hit Enter.." class="form-control">
               <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
         </form>
         <!-- END Search form-->
      </nav>
      <!-- END Top Navbar-->
