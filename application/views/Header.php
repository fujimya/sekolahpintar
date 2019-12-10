<?php $user = $this->session->userdata('user');
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><img width="100px" src="https://i.ibb.co/yB5Njq3/download.jpg" alt="Logo"> SD AL-AZHAR II BANDAR LAMPUNG
</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">

   <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  
 <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/HomePage/bower_components/select2/dist/css/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Tutwuri Handayani</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/HomePage/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user['nama']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/HomePage/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $user['nama']; ?>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>Login/Keluar" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/HomePage/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li>
          <a href="<?php echo base_url();?>Admin">
            <i class="fa fa-dashboard"></i> <span>DashBoard</span>
          </a>
        </li>
        <?php if($user['jabatan'] == 'admin' ){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo base_url();?>Admin/User"><i class="fa fa-circle-o"></i> Data Admin</a></li>
            <li><a href="<?php echo base_url();?>Admin/Guru"><i class="fa fa-circle-o"></i> Data Wali Kelas</a></li>
           
            <li><a href="<?php echo base_url();?>Kelas"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
            <li><a href="<?php echo base_url();?>Pelajaran"><i class="fa fa-circle-o"></i> Data Pelajaran</a></li>
            <li><a href="<?php echo base_url();?>Siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            
          </ul>
        </li>
       
        <?php }?>
        <?php if($user['jabatan'] == 'guru'){ ?>
        <li>
          <a href="<?php echo base_url();?>Absensi">
            <i class="fa fa-columns"></i> <span>Absensi</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>Nilai">
            <i class="fa fa-columns"></i> <span>Nilai</span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url();?>Pemberitahuan">
            <i class="fa fa-columns"></i> <span>Pemberitahuan</span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url();?>Pesan">
            <i class="fa fa-columns"></i> <span>Pesan Keluar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>Absensi/Laporan">
            <i class="fa fa-print"></i> <span>Laporan Absen</span>
          </a>
        </li>
         <?php }?>
         
         <?php if($user['jabatan'] == 'kepala'){ ?>
        <li>
          <a href="<?php echo base_url();?>Kepala/Absen">
            <i class="fa fa-columns"></i> <span>Absensi</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>Kepala/Nilai">
            <i class="fa fa-columns"></i> <span>Nilai</span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url();?>Pemberitahuan/kepala">
            <i class="fa fa-columns"></i> <span>Pemberitahuan</span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url();?>Pesan">
            <i class="fa fa-columns"></i> <span>Pesan Keluar</span>
          </a>
        </li>
         <?php }?>
        <!--<li class="treeview">-->
        <!--  <a href="">-->
        <!--    <i class="fa fa-pie-chart"></i>-->
        <!--    <span>Transaksi</span>-->
        <!--    <span class="pull-right-container">-->
        <!--      <i class="fa fa-angle-left pull-right"></i>-->
        <!--    </span>-->
        <!--  </a>-->
        <!--  <ul class="treeview-menu">-->
        <!--    <li><a href="<?php echo base_url();?>Pembelian"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>-->
        <!--    <li><a href="<?php echo base_url();?>Penjualan"><i class="fa fa-circle-o"></i> Barang Keluar</a></li>-->
        <!--  </ul>-->
        <!--</li>-->

        <!-- <li class="treeview">-->
        <!--  <a href="">-->
        <!--    <i class="fa fa-pie-chart"></i>-->
        <!--    <span>Laporan</span>-->
        <!--    <span class="pull-right-container">-->
        <!--      <i class="fa fa-angle-left pull-right"></i>-->
        <!--    </span>-->
        <!--  </a>-->
        <!--  <ul class="treeview-menu">-->
        <!--    <li><a href="<?php echo base_url();?>Laporan"><i class="fa fa-circle-o"></i> Stok</a></li>-->
        <!--  </ul>-->
        <!--</li>-->


   </ul>
    </section>
    <!-- /.sidebar -->
  </aside>