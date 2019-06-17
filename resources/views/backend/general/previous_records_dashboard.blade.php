@extends('layout.master')

@section('title')
  DPR Access | Previous Records
@endsection

@section('pagestyles')
<style>
  hr{
    border-top: 1px solid #ccc;
  }

  #caps{
    text-transform: uppercase;
    font-weight: bold;
    font-size: 17px;
  }

  .small-box h3{
    font-size: 24px;
    text-transform: uppercase;
  }

  .widget-user-2 .widget-user-username{
    font-size: 24px;
    font-weight: bold;
    margin-left: 0;
    text-transform: uppercase;
  }

  .widget-user-2 .widget-user-username, .widget-user-2 .widget-user-desc{
    margin-left: 0;
  }

  .small-box .icon{
    font-size: 70px;
  }

  .small-box:hover .icon{
    font-size: 70px;
    color: #fff;
  }

  .small-box p{
    visibility: hidden;
  }

  .hider{
    visibility: hidden;
  }
</style>
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_all')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 id="caps">
          Previous Records
        </h1>
      </section>

      <section class="content">
        <hr>
        <h5 id="caps">LPG</h5>
        <div class="row">


          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">SSI</h3>
                <h5 class="widget-user-desc">Site suitability inspection</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/prev_ssi_record_get">Add Record<i class="pull-right fa fa-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>


          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">ATC</h3>
                <h5 class="widget-user-desc">Approval to Construct</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/prev_atc_record_get">Add Record<i class="pull-right fa fa-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>


          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">LTO</h3>
                <h5 class="widget-user-desc">License To Operate</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/prev_lto_record_get">Add Record<i class="pull-right fa fa-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>


          {{-- <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-red">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">License Renewal</h3>
                <h5 class="widget-user-desc hider">License To Operate</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Add Record<i class="pull-right fa fa-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div> --}}


          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Takeover</h3>
                <h5 class="widget-user-desc hider">License To Operate</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/prev_takeover_record_get">Add Record<i class="pull-right fa fa-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>


          {{-- <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-red">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Pressure Test</h3>
                <h5 class="widget-user-desc hider">License To Operate</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Add Record<i class="pull-right fa fa-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div> --}}

        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    @include('partials.base_footer')
  </div>
@endsection

@section('pagescript')


@endsection




{{--  annual pipeline survey  --}}
