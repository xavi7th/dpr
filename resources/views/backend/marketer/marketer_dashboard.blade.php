@extends('layout.master')

@section('title')
  DPR Marketer | Dashboard
@endsection

@section('pagestyles')

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
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-3">

          <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                <h3 class="profile-username text-center">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h3>

                {{-- <p class="text-muted text-center">{{ Auth::user()->role }}</p> --}}

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Staff ID</b> <a class="pull-right">{{ Auth::user()->staff_id }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="pull-right">{{ Auth::user()->email_address }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile</b> <a class="pull-right">{{ Auth::user()->mobile_number }}</a>
                  </li>
                </ul>

                <a class="btn btn-primary btn-block"><b>{{ Auth::user()->role }}</b></a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{$appDocReviews->count()}}</h3>

                <p>Records</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              {{-- <a href="/marketer_records" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>

          </div>
          <div class="col-md-9">
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
                    <th>Action</th>
                    {{-- <th>Capacity of Tank</th>
                    <th>State</th>
                    <th>L.G.A</th>
                    <th>Town</th>
                    <th>Address</th> --}}
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviews as $item)
                      <tr>
                        <td class="sorting_1"><a href="/mDocument_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a></td>
                        <td>{{ $item->name_of_gas_plant }}</td>
                        <td>{{ $item->application_type }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>{{ $item->plant_type }}</td>
                        <td><a href="/mDocument_edit/{{ $item->id }}" class="label label-danger" style="font-size: 13px;">Edit Document</a></td>
                        {{-- <td>{{ $item->capacity_of_tank }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->lga }}</td>
                        <td>{{ $item->town }}</td>
                        <td>{{ $item->address }}</td> --}}
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row (main row) -->

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
