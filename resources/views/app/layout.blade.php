<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GMS : @yield('page_title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    
        <link href="/custom.css" rel="stylesheet" type="text/css" />

    @yield('page_styles')
    
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>GMS</b>!</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="/site_admin/dashboard">Dashboard</a>
            </li>
            
            <li><a href="/employees">Employees</a></li>
            <li><a href="/taxes">Taxes</a></li>
            
            <!-- Divider -->
            <li class="header"> CUSTOMER RELATION </li>
            
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      @yield('page')

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; {{date('Y')}} <a target="_blank" href="http://www.keepit.pro">KeepIT</a></strong> Private Limited.
      </footer>

    </div><!-- ./wrapper -->
    
    <!-- jQuery 2.1.3 -->
    <script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    
    @yield('page_scripts')
  </body>
</html>