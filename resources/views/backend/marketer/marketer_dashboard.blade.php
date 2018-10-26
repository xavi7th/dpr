@extends('layout.master')

@section('title')
  DPR Marketer | Dashboard
@endsection

@section('pagestyles')
  <style>
    #retailer{
      background-color: #1c2141;
    }
    #retailer h3{
      font-size: 28px;
    }
    #retailer .lpg.inner{
      height: 200px;
      background: url('images/Liquefied-Petroleum-Gas-.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
    #retailer .cng.inner{
      height: 200px;
      background: url('images/cng-pic.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
    #retailer .gpf.inner{
      height: 200px;
      background: url('images/Gas-Processing-Facilities.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
    #retailer .gpli.inner{
      height: 200px;
      background: url('images/gas-pipeline.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
    #retailer .prmo.inner{
      height: 200px;
      background: url('images/project-monitoring.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
    #retailer .gpu.inner{
      height: 200px;
      background: url('images/Gas-Production-Utilization.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
    #retailer .gpeo.inner{
      height: 200px;
      background: url('images/Gas-Production-export-operations.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
    #retailer .gsso.inner{
      height: 200px;
      background: url('images/gsso.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
    #retailer .gasdia.inner{
      height: 200px;
      background: url('images/gasdia.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(80%);
    }
  </style>
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
        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="lpg inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">LPG Retailer Outlet</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="cng inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">CNG Retailer Outlet</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gpf inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">Gas Processing Facilities</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gpli inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">Gas Pipelines</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="prmo inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">Project Monitoring</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gpu inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">Gas Production / Utilization</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gpeo inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">Gas Production / Export Operations</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gsso inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">Gas Sub-surface Operation</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="small-box" id="retailer">
              <div class="gasdia inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">Gas Diary</h3>
              <a href="/lpg_retailer_outlet" style="padding: 6px; text-align: left; color: #fff;" class="small-box-footer">Proceed to application request <i class="fa fa-arrow-circle-right"></i></a>
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
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection
