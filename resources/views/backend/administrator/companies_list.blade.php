@extends('layout.master')

@section('title')
  DPR {{Auth::user()->role}} | Companies
@endsection

@section('pagestyles')

@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')

    @include('partials.router_aside')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          All Registered Companies
          <small>{{Auth::user()->role}} Control Panel</small>
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
                    <th>Company ID</th>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Contract Type</th>
                    <th>State</th>
                    <th>L.G.A</th>
                    <th>Town</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                    <th>Email Address</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($companies as $company)
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
                    @endforeach
                  </tbody>
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
    @include('partials.base_footer')
  </div>
@endsection

@section('pagescript')
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
