@extends('layout.master')

@section('title')
  DPR Administrator | Create Company
@endsection

@section('pagestyles')

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
    @endif
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Settings
          <small>{{ Auth::user()->role }} Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Change Password</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="/change_password" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">New Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" placeholder="Retype Password">
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Modify Records</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/update_staff_records">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Select Record to modify</label>
                  <select class="form-control select2" name="record_name" style="width: 100%;">
                    <option selected="selected" value="null">Select Record</option>
                    <option value="first_name">First Name</option>
                    <option value="last_name">Last Name</option>
                    <option value="mobile_number">Mobile Number</option>
                    <option value="email_address">Email Address</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Value</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="record_value" placeholder="Enter Value">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
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
