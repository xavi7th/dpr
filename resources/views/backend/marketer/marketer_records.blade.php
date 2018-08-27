@extends('layout.master')

@section('title')
  DPR Marketer | Records
@endsection

@section('pagestyles')
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
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
          My Records
          <small>Maketer Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Application ID</th>
                    <th>Name of Gas Plant</th>
                    <th>Application Type</th>
                    <th>Sub-Category</th>
                    <th>Plant Type</th>
                    <th>State</th>
                    <th>L.G.A</th>
                    <th>Town</th>
                    <th>Address</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>DPR/APP/LPG/00023</td>
                      <td>okoye gas</td>
                      <td>Gas Piplines</td>
                      <td>ATC</td>
                      <td>Refilling Plant</td>
                      <td>Abia</td>
                      <td>Bende</td>
                      <td>Bende</td>
                      <td>Bende</td>
                    </tr>
                    {{-- @foreach ($companies as $company)
                      <tr>
                        <td class="sorting_1">{{ $company->company_id }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->company_alias }}</td>
                        <td>{{ $company->contract_type }}</td>
                        <td>{{ $company->state }}</td>
                        <td>{{ $company->lga }}</td>
                        <td>{{ $company->town }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->mobile_number }}</td>
                        <td>{{ $company->email_address }}</td>
                      </tr>
                    @endforeach --}}
                  </tbody>
                  {{-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> --}}
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>

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
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- page script -->
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
@stop
