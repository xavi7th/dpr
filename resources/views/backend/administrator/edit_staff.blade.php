@extends('layout.master')

@section('title')
  DPR Administrator | Edit Staffs Records
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
          Edit <span style="text-transform: capitalize;">{{ $staffID->first_name }}'s</span> Records
          <small>Administrator Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-xs-4">
            <div class="box box-primary">
            <div class="box-body box-profile">

              <h3 class="profile-username text-center" style="text-transform: capitalize;">{{ $staffID->first_name }} {{ $staffID->last_name }}</h3>

              <p class="text-muted text-center">{{ $staffID->role }}</p>
              <p class="text-muted text-center text-green"><b>{{ $staffID->staff_id }}</b></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Mobile Number</b> <a class="pull-right">{{ $staffID->mobile_number }}</a>
                </li>
                <li class="list-group-item">
                  <b>Email Address</b> <a class="pull-right">{{ $staffID->email_address }}</a>
                </li>
                <li class="list-group-item">
                  <b>Date</b> <a class="pull-right">{{ $staffID->created_at->diffForHumans() }}</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

        <div class="col-md-4">
          <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Update Staff</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" action="/update_staff_role">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label>Staff Role</label>
                <select class="form-control select2" name="role" style="width: 100%;">
                  <option selected="selected" value="nu">Select Role</option>
                  <option value="ZOPSCON">ZOPSCON</option>
                  <option value="ADO">ADO</option>
                  <option value="Head Gas">Head Gas M&G Lagos</option>
                  <option value="Team Lead">Team Lead</option>
                  <option value="Staff">Staff</option>
                  <option value="Admin">Admin</option>
                  <option value="Marketer">Marketer</option>
                </select>
              </div>
              <input type="text" hidden name="SID" value="{{ $staffID->id }}">
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
          </form>
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
