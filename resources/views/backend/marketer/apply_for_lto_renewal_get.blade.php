@extends('layout.master')

@section('title')
  DPR Marketer | Apply For LTO Renewal
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
          LTO Renewal
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
              <form role="form" method="POST" action="/apply_for_license_to_operate">
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
                  <apply-for-lto-renewal-component></apply-for-lto-renewal-component>
                  <!-- /.box-body -->
                  <!-- Date dd/mm/yyyy -->
                  {{--  <div class="form-group">
                    <label>Date masks:</label>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>  --}}
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

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    </script>
  @endsection
