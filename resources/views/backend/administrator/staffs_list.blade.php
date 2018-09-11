@extends('layout.master')

@section('title')
  DPR Administrator | Staffs
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
          All Registered Staffs
          <small>Administrator Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Staff ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
                    <th>Role</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($staffs as $staff)
                      <tr>
                        <td class="sorting_1"><a href="/edit_staff/{{ $staff->id }}" class="label label-success" style="font-size: 14px;">{{ $staff->staff_id }}</a></td>
                        <td>{{ $staff->first_name }}</td>
                        <td>{{ $staff->last_name }}</td>
                        <td>{{ $staff->email_address }}</td>
                        <td>{{ $staff->mobile_number }}</td>
                        <td>{{ $staff->role }}</td>
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
