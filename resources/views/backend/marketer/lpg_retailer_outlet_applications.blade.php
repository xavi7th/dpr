@extends('layout.master')

@section('title')
  DPR Marketer | LPG Retailer Outlet
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
          LPG Retailer Outlet
          <small>Applications panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>SITE SUITABILITY INSPECTION</h3>

                <p>Apply for Site suitability inspection</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="/apply_for_ssi_get" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>ATC</h3>

                <p>Apply for Approval to construct</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="apply_for_atc_get" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3>LTO</h3>

                <p>Apply for License to operate</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="apply_for_lto_get" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>RENEWAL</h3>

                <p>Apply for License renewal</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="#" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>TAKE OVER</h3>

                <p>Apply for Take Over</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="#" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>ADD-ON-ATI</h3>

                <p>Apply for Add-On-ATI</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="#" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3>ADD-ON-LTO</h3>

                <p>Apply for Add-On-LTO</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="#" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3>CAT-D-LTO</h3>

                <p>Apply for Cat-D-LTO</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="#" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>CAT-D-RENEWAL</h3>

                <p>Apply for Cat-D-Renewal</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="#" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>PRESSURE TESTING</h3>

                <p>Apply for pressure testing</p>
              </div>
              <div class="icon">
                <i class="fa fa-external-link-square"></i>
              </div>
              <a href="#" class="small-box-footer">
                Proceed <i class="fa fa-arrow-circle-right"></i>
              </a>
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

    </script>
  @endsection
