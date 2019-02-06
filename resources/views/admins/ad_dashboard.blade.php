<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin panel</title>
    @include('headLinks')
</head>

<body class="hold-transition  sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  @include('mainHeader')
  <!--  dashbored links -->
  @include('dashboardLinks')



  <!--  hole page content -->

  <div class="content-wrapper">
    @include('main_content');
  </div>

  <!-- Main Footer -->
      @include('footer')

 <!-- required styles files -->
      @include('styleLib');

</body>
</html>
