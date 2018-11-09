@extends('layout.master')

@section('title')
  DPR Team Lead | Dashboard
@endsection

@section('pagestyles')
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_teamlead')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Team Lead Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      {{-- <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-xs-4">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>{{ $appDocReviews->count() }}</h3>
                <p style="text-transform: uppercase;">Total applications</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/teamlead" style="padding: 6px; color: #fff;" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ $appDocReviewsPending->count() }}</h3>
                <p style="text-transform: uppercase;">INBOX</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/teamlead_pending" style="padding: 6px; color: #fff;" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $appDocReviewsOutbox->count() }}</h3>
                <p style="text-transform: uppercase;">OUTBOX</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/teamlead_outbox" style="padding: 6px; color: #fff;" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3>{{ $appDocReviewsCompleted->count() }}</h3>
                <p style="text-transform: uppercase;">Completed</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/teamlead_completed" style="padding: 6px; color: #fff;" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
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
                    <th>Action</th>
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
                        <td><a href="/tlDocument_assign/{{ $item->id }}" class="label label-danger" style="font-size: 13px;">Assign</a></td>
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

      </section> --}}
      <section class="content">

        <div class="row">
          @include('partials.teamlead_folders')
          <!-- ./col -->
          <div class="col-md-9">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Inbox</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Name of Company</th>
                      <th>Application Type</th>
                      <th>Sub-Category</th>
                      <th>Date Received</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($inbox as $item)
                      <tr>
                        @if ($item->read == 'true')
                          <td><i class="fa fa-circle" style="padding-right: 15px; color: #4CAF50;"></i><a href="/tlDocument_review/{{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                        @else
                          <td><i class="fa fa-circle" style="padding-right: 15px; color: #F44336;"></i><a href="/tlDocument_review/{{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                        @endif
                        <td>{{ $item->application_type }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            {{-- <router-view></router-view> --}}

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
