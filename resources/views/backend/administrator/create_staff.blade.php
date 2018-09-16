@extends('layout.master')

@section('title')
  DPR Administrator | Create Staff
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
          New Staff
          <small>Administrator Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create Profile for New Staff</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/create_staff">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="">First Name</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Last Name</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Password Confirmation</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Mobile Number</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Select Staff Role</label>
                    <select class="form-control select2" name="role" style="width: 100%;">
                      <option selected="selected">Select Role</option>
                      <option value="ZOPSCON">ZOPSCON</option>
                      <option value="ADO">ADO</option>
                      <option value="Head Gas M&G Lagos">Head Gas M&G Lagos</option>
                      <option value="Team Lead">Team Lead</option>
                      <option value="Staff">Staff</option>
                      <option value="Admin">Admin</option>
                      <option value="Marketer">Marketer</option>
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                </div>
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
