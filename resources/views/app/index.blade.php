@extends('site_admin.layout')

@section('page_title')
Dashboard
@endsection

@section('page_styles')
@endsection

@section('page')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          
            <div class="row">
            <div class="col-md-8">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Orders</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Item</th>
                          <th>Status</th>
                          <th>Popularity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR9842</a></td>
                          <td>Call of Duty IV</td>
                          <td><span class="label label-success">Shipped</span></td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR1848</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class="label label-warning">Pending</span></td>
                          <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR7429</a></td>
                          <td>iPhone 6 Plus</td>
                          <td><span class="label label-danger">Delivered</span></td>
                          <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR7429</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class="label label-info">Processing</span></td>
                          <td><div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR1848</a></td>
                          <td>Samsung Smart TV</td>
                          <td><span class="label label-warning">Pending</span></td>
                          <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR7429</a></td>
                          <td>iPhone 6 Plus</td>
                          <td><span class="label label-danger">Delivered</span></td>
                          <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR9842</a></td>
                          <td>Call of Duty IV</td>
                          <td><span class="label label-success">Shipped</span></td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Added Products</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Samsung TV <span class="label label-warning pull-right">$1800</span></a>
                        <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="/admin/dist/img/default-50x50.gif" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Bicycle <span class="label label-info pull-right">$700</span></a>
                        <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="/admin/dist/img/default-50x50.gif" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
                        <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="/admin/dist/img/default-50x50.gif" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">PlayStation 4 <span class="label label-success pull-right">$399</span></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::;" class="uppercase">View All Products</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
            
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Recap Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                      </p>
                      <div class="chart-responsive">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="180"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                        <h5 class="description-header">$35,210.43</h5>
                        <span class="description-text">TOTAL REVENUE</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                        <h5 class="description-header">$10,390.90</h5>
                        <span class="description-text">TOTAL COST</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">$24,813.53</h5>
                        <span class="description-text">TOTAL PROFIT</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                        <h5 class="description-header">1200</h5>
                        <span class="description-text">GOAL COMPLETIONS</span>
                      </div><!-- /.description-block -->
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


          <div class='row'>
           
            <div class='col-md-12'>
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>
                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="/admin/dist/img/user1-128x128.jpg" alt="User Image"/>
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="/admin/dist/img/user8-128x128.jpg" alt="User Image"/>
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="/admin/dist/img/user7-128x128.jpg" alt="User Image"/>
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="/admin/dist/img/user6-128x128.jpg" alt="User Image"/>
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="/admin/dist/img/user2-160x160.jpg" alt="User Image"/>
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                      <img src="/admin/dist/img/user5-128x128.jpg" alt="User Image"/>
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="/admin/dist/img/user4-128x128.jpg" alt="User Image"/>
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="/admin/dist/img/user3-128x128.jpg" alt="User Image"/>
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                  </ul><!-- /.users-list -->
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::" class="uppercase">View All Users</a>
                </div><!-- /.box-footer -->
              </div><!--/.box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->

          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@endsection


@section('page_scripts')

    <!-- jQuery 2.1.3 -->
    <script src="/admin/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='/admin/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="/admin/dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="/admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="/admin/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="/admin/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="/admin/plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/admin/dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="/admin/dist/js/demo.js" type="text/javascript"></script>

@endsection