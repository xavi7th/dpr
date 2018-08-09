@extends('layout.master')

@section('title')
  DPR Administrator | Create Company
@endsection

@section('pagestyles')
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')

    @include('partials.backend_aside_admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          New Company
          <small>Administrator Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content" ng-controller="locationController">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create Profile for New Company</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/create_company">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label>Name of Company</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                      <input type="text" name="comp_name" class="form-control" placeholder="Name of Company">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Alias</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                      <input type="text" name="comp_alias" class="form-control" placeholder="Company Alias">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Contract Type</label>
                    <select class="form-control select2" name="contract_type" style="width: 100%;">
                      <option selected="selected">Select Contract Type</option>
                      <option value="JV">JV</option>
                      <option value="PSC">PSC</option>
                      <option value="Marginal">Marginal</option>
                      <option value="Sole Risk">Sole Risk</option>
                      <option value="PLC">PLC</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>State</label>
                    <select id="dropdown2" class="form-control select2" name="state" style="width: 100%;">
                      <option selected="selected">Select State</option>
                      <option ng-repeat="data in states" value="@{{ data.state }}">@{{data.state}}</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>L.G.A</label>
                    <select id="dropdown3" class="form-control select2" name="lga" style="width: 100%;">
                      <option selected="selected">Select LGA</option>
                      <option ng-repeat="data in lga" value="@{{ data }}">@{{data}}</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Town</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion ion-location"></i></span>
                      <input type="text" name="town" class="form-control" placeholder="Enter Town">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion ion-location"></i></span>
                      <input type="text" name="address" class="form-control" placeholder="Enter Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Mobile Number</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="text" name="email" class="form-control" placeholder="Enter Email Address">
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                </div>
              </form>
            </div>
          </div>
        </div>


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>
  </div>
@endsection

@section('pagescript')
  <!-- jQuery 3 -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- SlimScroll -->
  <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page script -->
  <script src="js/angular.js"></script>
  <script src="js/appAngular.js"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })

  </script>
@endsection
