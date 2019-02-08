<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin panel</title>
    @include('admins.headLinks')
</head>
<body class="hold-transition  sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
    @include('admins.headLinks')
  <!--  dashbored links -->
  @include('admins.dashboardLinks')

  @include('admins.mainHeader')

  <!--  hole page content -->

  <div class="content-wrapper">
    @include('main_content')
  </div>

  <!-- Main Footer -->
      @include('admins.footer')

 <!-- required styles files -->
      @include('admins.styleLib')

</body>
</html>
