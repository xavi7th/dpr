@extends('layout.master')

@section('title')
  DPR Marketer | Pressure Test
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
          Pressure Test
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
                  <apply-for-pressure-test-component></apply-for-pressure-test-component>
                  <!-- /.box-body -->
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
                    {{--  <div class="col-xs-6">
                      <div class="form-group">
                        <label>Due Date (MOSR/RBI)</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="due_date" class="form-control pull-right" id="datepicker2">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                    </div>  --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Test Report / Certificate</label>
                    <input type="file" name="TCR_doc">
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
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
