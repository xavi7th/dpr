@extends('layout.master')

@section('title')
  DPR Marketer | Custody Transfer Meters
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
          Custody Transfer Meters
          <small>Marketer Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create Profile for New Application</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/apply_for_pressure_test" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label>Company Name</label>
                    <select class="form-control select2" name="company_name" style="width: 100%;">
                      <option selected="selected">Select Company</option>
                      @foreach ($companies as $item)
                        <option value="{{$item->company_id}}">{{$item->company_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Name of Facility</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
                          <input type="text" name="facility_name" class="form-control" placeholder="Enter Name of Equipment">
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Category</label>
                        <select class="form-control select2" name="category" style="width: 100%;">
                          <option selected="selected">Select Type</option>
                          <option value="Distribution">Transmiters</option>
                          <option value="Transmission">Meters</option>
                          <option value="Transmission">Guages</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  {{--  <input type="text" name="test_type" value="Hydro Testing" hidden>  --}}
                  
                  <div class="form-group">
                    <label>Location</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion ion-location"></i></span>
                      <input type="text" name="location" class="form-control" placeholder="Enter Location">
                    </div>
                  </div>
                  <state-component></state-component>
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Name of Meter</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
                          <input type="text" name="meter_name" class="form-control" placeholder="Enter Name of Meter">
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="form-group" id="capacity_of_tank">
                        <label>Meter Tag Number</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="ion-beaker"></i></span>
                            <input type="text" name="tag_number" class="form-control" placeholder="Enter Meter Tag Number">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="row">
                    <div class="col-xs-3">
                      <div class="form-group">
                        <label>Name of Master Calibrator/Master</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" name="pipeline_length" class="form-control" placeholder="Enter Name">
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3">
                      <div class="form-group">
                        <label>Tag No. of Master Calibrator</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" name="pipeline_diameter" class="form-control" placeholder="Enter Tag No.">
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3">
                      <div class="form-group">
                        <label>Year of Manufacture</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" name="pipeline_capacity" class="form-control" placeholder="Enter Year">
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3">
                      <div class="form-group">
                        <label>Year of Commission</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" name="commission_year" class="form-control" placeholder="Enter Year">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Date Last Tested</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="date_last_tested" class="form-control pull-right" id="datepicker1">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Due Date (MOSR/RBI)</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="due_date" class="form-control pull-right" disabled id="datepicker2">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="float: right;">Create</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      @include('partials.base_footer')
    </div>
  @endsection

  @section('pagescript')
    <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    })

    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })

    </script>
  @endsection


  {{-- 64971064

  64867702

  64867690

  64724645

  64533150 --}}
