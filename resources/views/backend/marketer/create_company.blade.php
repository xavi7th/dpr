@extends('layout.master')

@section('title')
  DPR {{Auth::user()->role}} | Create Company
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
          Create Company
          <small>{{Auth::user()->role}} Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create Profile for New Company</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/marketer_create_company">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label>Name of Company</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                      <input type="text" name="comp_name" class="form-control" placeholder="Name of Company">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Alias</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                      <input type="text" name="comp_alias" class="form-control" placeholder="Company Alias">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Contract Type</label>
                    <select class="form-control select2" name="contract_type" style="width: 100%;">
                      <option selected="selected">Select Contract Type</option>
                      <option value="JV">JV</option>
                      <option value="PSC">PSC</option>
                      <option value="Marginal">Marginal</option>
                      <option value="Sole Risk">Sole Risk</option>
                      <option value="PLC">PLC</option>
                    </select>
                  </div>
                  <state-component></state-component>
                  {{-- <div class="form-group">
                    <label>State</label>
                    <select id="dropdown2" class="form-control select2" name="state" style="width: 100%;">
                      <option selected="selected">Select State</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>L.G.A</label>
                    <select id="dropdown3" class="form-control select2" name="lga" style="width: 100%;">
                      <option selected="selected">Select LGA</option>
                    </select>
                  </div> --}}
                  <div class="form-group">
                    <label>Town</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion ion-location"></i></span>
                      <input type="text" name="town" class="form-control" placeholder="Enter Town">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="ion ion-location"></i></span>
                      <input type="text" name="address" class="form-control" placeholder="Enter Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Mobile Number</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="text" name="email" class="form-control" placeholder="Enter Email Address">
                    </div>
                  </div>
                  {{--  <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                  <input type="text" hidden name="id" value="{{ $applicationReview->id }}">  --}}
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
