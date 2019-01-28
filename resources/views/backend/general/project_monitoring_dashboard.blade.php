@extends('layout.master')

@section('title')
  DPR Access | Project Monitoring
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
          Project Monitoring
        </h1>
      </section>

      <section class="content">
        <hr>
        <h5 id="caps">License & Permit</h5>
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
                <h3 class="widget-user-username">FEED</h3>
                <h5 class="widget-user-desc hider">feed</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="/pm_feed_create">Create<i class="pull-right fa fa-plus"></i></a></li>
                  <li><a href="/pm_feed_search">Search<i class="pull-right fa fa-search"></i></a></li>
                  <li><a href="/pm_feed_report">Report<i class="pull-right fa fa-newspaper-o"></i></a></li>
                  <li><a href="/pm_feed_document">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-light-blue-active">
              <div class="inner">
                <h3>ded</h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-light-blue-active">
              <div class="inner">
                <h3>PRE-COMMISIONING</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-light-blue-active">
              <div class="inner">
                <h3>lto</h3>

                <p>License to operate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <hr>
        <h5 id="caps">Monitoring</h5>
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
                <h3 class="widget-user-username">milestone</h3>
                <h5 class="widget-user-desc hider">feed</h5>
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
                <h3 class="widget-user-username">continous</h3>
                <h5 class="widget-user-desc hider">feed</h5>
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
          <div class="col-md-3">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">permit & consent</h3>
                <h5 class="widget-user-desc hider">feed</h5>
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  {{--  <li><a href="/pm_permit_and_consent_create">Create<i class="pull-right fa fa-plus"></i></a></li>  --}}
                  <li><a href="/pm_permit_and_consent_search">Track<i class="pull-right fa fa-search"></i></a></li>
                  {{--  <li><a href="pm_permit_consent_search">Document<i class="pull-right fa fa-file-pdf-o"></i></a></li>  --}}
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
        </div>
        <hr>
        {{--  <h5 id="caps">Monitoring</h5>  --}}
        
      </section>
    </div>
    <!-- /.content-wrapper -->
    @include('partials.base_footer')
  </div>
@endsection

@section('pagescript')


@endsection




{{--  permit and consent  --}}