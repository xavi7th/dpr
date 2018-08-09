@extends('layout.master')

@section('title')
  DPR Marketer | Dashboard
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


    @include('partials.backend_aside_marketer')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Application Document Review
          <small>Marketer Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content" ng-controller="appDocReviewController">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create Profile for New Application</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/app_doc_rev">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label>Name of Gas Plant</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
                      <input type="text" name="gas_plant_name" class="form-control" placeholder="Enter Name of Gas Plant">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Application Type</label>
                    <select id="dropdown1" class="form-control select2" name="application_type" style="width: 100%;">
                      <option selected="selected">Select Application Type</option>
                      <option ng-repeat="data in applicationType" value="@{{ data.application_type }}">@{{data.application_type}}</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sub-Category</label>
                    <select class="form-control select2" name="sub_category" style="width: 100%;">
                      <option selected="selected">Select Sub-Category</option>
                      <option ng-repeat="data in sub_category" value="@{{ data }}">@{{data}}</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Plant Type</label>
                    <select class="form-control select2" name="plant_type" style="width: 100%;">
                      <option selected="selected">Select Type</option>
                      <option value="Refilling Plant">Refilling Plant</option>
                      <option value="Industrial Plant">Industrial Plant</option>
                      <option value="Auto Gas Plant">Auto Gas Plant</option>
                    </select>
                  </div>
                  <div class="form-group" id="capacity_of_tank" ng-if="tankCapacityDisplay">
                    <label>Capacity of Tank (MT)</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion-beaker"></i></span>
                      <input type="text" name="capacity_of_tank" class="form-control" placeholder="Enter Capacity of tank">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>State</label>
                        <select id="dropdown2" class="form-control select2" name="state" style="width: 100%;">
                          <option selected="selected">Select State</option>
                          <option ng-repeat="data in states" value="@{{ data.state }}">@{{data.state}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>L.G.A</label>
                        <select class="form-control select2" name="lga" style="width: 100%;">
                          <option selected="selected">Select LGA</option>
                          <option ng-repeat="data in lga" value="@{{ data }}">@{{data}}</option>
                        </select>
                      </div>
                    </div>
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
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="float: right;">Save & Continue</button>
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
    <script src="/js/angular.js"></script>
    <script src="/js/appAngular.js"></script>
    <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })

    </script>
  @endsection
