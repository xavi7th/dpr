@extends('layout.master')

@section('title')
  DPR Access | Gas Processing Facilities
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
          Gas Processing Facilities
        </h1>
      </section>

      <section class="content">
        <hr>
        <h5 id="caps">License & Re-certification</h5>
        <div class="row">
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">LTO</h3>
                <h5 class="widget-user-desc">License to Operate</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="#">Search<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>
                  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Renewal</h3>
                <h5 class="widget-user-desc hider">License to Operate</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="#">Search<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="#">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>
                  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
        </div>
        <hr>
        <h5 id="caps">Facility inspections</h5>
        <div class="row">
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">quaterly inspections</h3>
                <h5 class="widget-user-desc hider">quaterly inspections</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/pm_milestone_create">Create<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="/pm_milestone_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">routine inspections</h3>
                <h5 class="widget-user-desc hider">routine inspections</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/pm_continous_create">Create<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="/pm_continous_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
        </div>
        <hr>
        <h5 id="caps">Instrument / Meters Calibration</h5>
        <div class="row">

          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">custody transfer Meters</h3>
                <h5 class="widget-user-desc hider">feed</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/custody_transfer_meters">Create<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="/custody_transfer_meters_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->

          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">flare meters</h3>
                <h5 class="widget-user-desc hider">feed</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/flare_meters">Create<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="/flare_meters_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->

          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">fuel meters</h3>
                <h5 class="widget-user-desc hider">feed</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/fuel_meters">Create<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="/fuel_meters_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->

          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">prod. allocation meters</h3>
                <h5 class="widget-user-desc hider">feed</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/production_allocation_transfer_meters">Create<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="/production_allocation_transfer_meters_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->

        </div>
        <hr>
        <h5 id="caps">integrity inspections</h5>
        <div class="row">
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">pressure testing</h3>
                <h5 class="widget-user-desc hider">feed</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Search<i class="pull-right fa fa-search"></i></a></li>
                  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">psv testing</h3>
                <h5 class="widget-user-desc hider">feed</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Search<i class="pull-right fa fa-search"></i></a></li>
                  <li><a href="#">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    @include('partials.base_footer')
  </div>
@endsection

@section('pagescript')


@endsection




{{--  permit and consent  --}}