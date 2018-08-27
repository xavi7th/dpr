@extends('layout.master')

@section('title')
  DPR | Login
@endsection

@section('content')
  <div class="login-box">
    <div class="login-logo">
      <a><b>DPR</b>BACKEND</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="/do_login" method="POST">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="staff_id" placeholder="User ID">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-box-body -->
  </div>
@endsection

@section('pagescript')
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
@endsection
