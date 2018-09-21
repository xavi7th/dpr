@extends('layout.master')

@section('title')
  DPR | Site Suitability Records
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
    @elseif (Auth::user()->role == 'Head Gas M&G Lagos')
      @include('partials.backend_aside_headgas')
    @elseif (Auth::user()->role == 'ADO')
      @include('partials.backend_aside_ado')
    @elseif (Auth::user()->role == 'ZOPSCON')
      @include('partials.backend_aside_zopscon')
    @endif

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Site Suitability Records
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        {{-- <div class="row">
          <!-- ./col -->
          <div class="col-lg-4 col-xs-4">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3>{{ $appDocReviews->count() }}</h3>
                <p style="text-transform: uppercase;">Total applications</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>{{ $pending->count() }}</h3>
                <p style="text-transform: uppercase;">Pending Approval</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $declined->count() }}</h3>
                <p style="text-transform: uppercase;">Declined Applications</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ $approved->count() }}</h3>
                <p style="text-transform: uppercase;">Approved Applications</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- /.row (main row) -->
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
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
                    <th>Application Status</th>
                    <th>Application Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviewsSSI as $item)
                      <tr>
                        <td class="sorting_1"><a href="/headgas_document_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a></td>
                        <td>{{ $item->name_of_gas_plant }}</td>
                        <td>{{ $item->application_type }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>{{ $item->plant_type }}</td>
                        <td>{{ $item->job_assignment['job_application_status'] ?? 'Not Assigned' }}</td>
                        <td>{{ $item->created_at }}</td>
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
        {{-- <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
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
                    <th>Application Status</th>
                    <th>Application Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviews as $item)
                      <tr>
                        <td class="sorting_1"><a href="/tlDocument_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a></td>
                        <td>{{ $item->name_of_gas_plant }}</td>
                        <td>{{ $item->application_type }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>{{ $item->plant_type }}</td>
                        <td>{{ $item->job_assignment['job_application_status'] ?? 'Not Assigned' }}</td>
                        <td>{{ $item->created_at }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>

          </div>
          <!-- ./col -->
        </div> --}}

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('partials.base_footer')
  </div>
@endsection

@section('pagescript')
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
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
