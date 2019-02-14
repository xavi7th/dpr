@extends('layout.master')

@section('title')
  DPR Access | Gas Pipelines
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


    @if (Auth::user()->role == 'Marketer')
      @include('partials.backend_aside_marketer')
    @elseif (Auth::user()->role == 'Admin')
      @include('partials.backend_aside_admin')
    @elseif (Auth::user()->role == 'Staff')
      @include('partials.backend_aside_all')
    @elseif (Auth::user()->role == 'Team Lead')
      @include('partials.backend_aside_teamlead')
    @elseif (Auth::user()->role == 'Head Gas M&G Lagos')
      @include('partials.backend_aside_headgas')
    @elseif (Auth::user()->role == 'ADO')
      @include('partials.backend_aside_ado')
    @elseif (Auth::user()->role == 'ZOPSCON')
      @include('partials.backend_aside_zopscon')
    @endif

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 id="caps">
          Gas Pipelines
        </h1>
      </section>

      <section class="content">
        <hr>
        <h5 id="caps">License & Permit</h5>
        <div class="row">
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">PTS</h3>
                <h5 class="widget-user-desc hider">License to Operate</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  @if (Auth::user()->role == 'Marketer')
                    <li><a href="/apply_for_pts">Apply<i class="pull-right fa fa-plus"></i></a></li>
                  @else
                    <li><a href="/gas_pipelines_pts_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  @endif
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
                <h3 class="widget-user-username">OPLL</h3>
                <h5 class="widget-user-desc">Oil Pipeline License</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  @if (Auth::user()->role == 'Marketer')
                    <li><a href="/apply_for_opll">Apply<i class="pull-right fa fa-plus"></i></a></li>
                  @else
                    <li><a href="/gas_pipelines_opll_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  @endif
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
        </div>

        <hr>
        <h5 id="caps">Pipeline</h5>
        <div class="row">
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Hydro Testing</h3>
                <h5 class="widget-user-desc hider">License to Operate</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  @if (Auth::user()->role == 'Marketer')
                    <li><a href="/apply_for_hydrotesting">Apply<i class="pull-right fa fa-plus"></i></a></li>
                  @else
                    <li><a href="/gas_pipelines_hydrotesting_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  @endif
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
                <h3 class="widget-user-username">Pigging</h3>
                <h5 class="widget-user-desc hider">Oil Pipeline License</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  @if (Auth::user()->role == 'Marketer')
                    <li><a href="/apply_for_pigging">Apply<i class="pull-right fa fa-plus"></i></a></li>
                  @else
                    <li><a href="/gas_pipelines_pigging_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  @endif
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
                <h3 class="widget-user-username">Annual Pipeline Survey</h3>
                <h5 class="widget-user-desc hider">Oil Pipeline License</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  @if (Auth::user()->role == 'Marketer')
                    <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>
                  @else
                    <li><a href="#">Search<i class="pull-right fa fa-search"></i></a></li>
                  @endif
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
        </div>

        <hr>
        {{--  <h5 id="caps">Pipeline</h5>  --}}
        <div class="row">
          
          @if (Auth::user()->role != 'Marketer')
            <div class="col-md-3">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-light-blue-active">
                  {{--  <div class="widget-user-image">
                    <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                  </div>  --}}
                  <!-- /.widget-user-image -->
                  <h3 class="widget-user-username">Routine Inspection</h3>
                  <h5 class="widget-user-desc hider">License to Operate</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Apply<i class="pull-right fa fa-plus"></i></a></li>
                    <li><a href="#">Search<i class="pull-right fa fa-search"></i></a></li>
                  </ul>
                </div>
              </div>
              <!-- /.widget-user -->
            </div>
          @endif
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




{{--  annual pipeline survey  --}}