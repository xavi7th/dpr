@extends('layout.master')

@section('title')
  DPR Marketer | Application Document Review
@endsection

@section('pagestyles')

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
      <section class="content">
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
    <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })

    </script>
  @endsection
