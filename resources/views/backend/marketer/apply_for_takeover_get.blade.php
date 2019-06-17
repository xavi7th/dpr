@extends('layout.master')

@section('title')
  DPR Marketer | Take Over
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
          Take Over
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
              <form role="form" method="POST" action="/apply_for_takeover">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                      <label>Company Name</label>
                      <select class="form-control select2" name="company_id" style="width: 100%;">
                          <option selected="selected">Select Company</option>
                          @foreach ($companies as $item)
                              <option value="{{$item->company_id}}">{{$item->company_name}}</option>
                          @endforeach
                      </select>
                  </div>
                  <apply-for-takeover-component></apply-for-takeover-component>
                  <!-- /.box-body -->
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label>Last LTO Issue Date</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="last_lto_issue_date" class="form-control pull-right" id="datepicker1">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>
                    <div class="col-xs-6">
                    <div class="form-group">
                      <label>Expiring Date of LTO</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="expiry_date_of_lto" class="form-control pull-right" id="datepicker2">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    </div>
                  </div>
                  <div class="box-footer">
                    <b><a style="float: left;">lat: 34.032233, lng:  -118.256015</a></b>
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
