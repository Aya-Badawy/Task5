<!DOCTYPE html>

<html>
<head>
    <style>
        #logout{
            color: white;
            background-color: #3c8dbc;
            font-size: 15px;
        }
    </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{  app_path() . '/dashboard_style/bower_components/bootstrap/dist/css/bootstrap.min.css'}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../ashboard_style/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../dashboard_style/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dashboard_style/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dashboard_style/dist/css/skins/skin-blue.min.css">


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition  sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="ad_dashboard.blade.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>panel</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <li>
                <a id='logout' href="#" ><strong>Log out</strong></a>
            </li>

        </ul>
      </div>
    </nav>
  </header>
  <!--  dashbored links -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dashboard_style/dist/img/avatar_img.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin name</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><button type="button" class="btn btn-primary btn-lg btn-block">Dashboard</button></li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Inventory Mangers</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
             <ul class="sidebar-menu" data-widget="tree">


                 <li class="header"><a href="#"><button type="button" class="btn btn-success btn-lg btn-block">new manger</button></a></li>

                 <li class="header"><a href="#"><button type="button" class="btn btn-warning btn-lg btn-block">show mangers</button></a></li>

          </ul>

      </ul>


          </li>


          <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Inventories</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
             <ul class="sidebar-menu" data-widget="tree">


                 <li class="header"><a href="#"><button type="button" class="btn btn-success btn-lg btn-block">new inventory</button></a></li>

                 <li class="header"><a href="#"><button type="button" class="btn btn-warning btn-lg btn-block">show inventories</button></a></li>

          </ul>

      </ul>


          </li>


           <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>admins</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
             <ul class="sidebar-menu" data-widget="tree">


                 <li class="header"><a href="#"><button type="button" class="btn btn-danger btn-lg btn-block">new admin</button></a></li>

          </ul>
      </ul>
          </li>

              <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>assigen manger</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
             <ul class="sidebar-menu" data-widget="tree">


                 <li class="header"><a href="#"><button type="button" class="btn btn-danger btn-lg btn-block">to inventory</button></a></li>

          </ul>
      </ul>
          </li>

        </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!--  hole page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- home page content  -->
    <section class="content container-fluid">



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      admin panel 2019
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#"></a>.</strong> All rights reserved.
  </footer>


<!-- jQuery 3 -->
<script src="../dashboard_style/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../dashboard_style/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dashboard_style/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
