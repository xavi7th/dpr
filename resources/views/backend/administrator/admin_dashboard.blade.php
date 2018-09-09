@extends('layout.master')

@section('title')
  DPR Administrator | Dashboard
@endsection

@section('pagestyles')
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')

    @include('partials.backend_aside_admin')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Administrator Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{ $staffs->count() }}</h3>

                <p>Registered Staffs</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-people"></i>
              </div>
              <a href="/staffs_list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>{{ $companies->count() }}</h3>

                <p>Registered Companies</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-list"></i>
              </div>
              <a href="/companies_list" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
@endsection
