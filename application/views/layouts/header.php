<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CONFCAMILA | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>plugins/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <!-- DataTables-export -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>dataTables-export/css/buttons.dataTables.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>plugins/daterangepicker/daterangepicker.css">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>jquery_ui/jquery-ui.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>plugins/summernote/summernote-bs4.css">
    <!-- sweetalert -->
    <link rel="stylesheet" href="<?php echo base_url( ). "assets/"; ?>dist/sweetalert.css">
     <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
  <link rel="shortcut icon" href="<?php echo base_url( ). "assets/"; ?>icono/logocentral1.ico">

  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?php echo base_url( ). "assets/"; ?>#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="buscador" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" >
      
      
     
       <!-- Panel de usuario de la barra de arriba (optional) -->
      
      <li class="dropdown user user-menu"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url( ). "assets/"; ?>imagenes/usuario.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata("Nombre")?></span>
                            </a>
                            <ul class="dropdown-menu" > 
                                <li class="user-body" >
                                    <div class="row">
                                        <div class="col-sm-12 text-center" >
                                            <a href="<?php echo base_url(); ?>auth/logout"> Cerrar Sesión</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                            </ul>
                        </li>
    </ul>
  </nav>
  <!-- /.navbar -->