@extends('layout.master')

@section('title')
  DPR Marketer | Dashboard
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
          Dashboard
          <small>Marketer Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-3">

          <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                <h3 class="profile-username text-center">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>

                {{-- <p class="text-muted text-center">{{ Auth::user()->role }}</p> --}}

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Staff ID</b> <a class="pull-right">{{ Auth::user()->staff_id }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="pull-right">{{ Auth::user()->email_address }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile</b> <a class="pull-right">{{ Auth::user()->mobile_number }}</a>
                  </li>
                </ul>

                <a class="btn btn-primary btn-block"><b>{{ Auth::user()->role }}</b></a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>150</h3>

                <p>Records</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/marketer_records" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row (main row) -->

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

@endsection
