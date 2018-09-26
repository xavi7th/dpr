@extends('layout.master')

@section('title')
  DPR Marketer | Dashboard
@endsection

@section('pagestyles')
  <style>
    #lpg{
      background-color: #1c2141;
    }
    #lpg .inner{
      height: 200px;
      background: url('images/Liquefied-Petroleum-Gas-.jpg');
      background-size: cover;
      background-position: center;
      filter: brightness(60%);
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
            <div class="small-box" id="lpg">
              <div class="inner">
                {{-- <p>Records</p> --}}
              </div>
              <h3 style="margin: 0; padding: 6px; color: #fff; background-color: #282e54;">LPG Retailer Outlet</h3>
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
