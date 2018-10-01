@extends('layout.master')

@section('title')
  DPR Staff | Outbox
@endsection

@section('pagestyles')
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_all')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Outbox
          <small>Staff Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3>{{ $appDocReviews->count() }}</h3>
                <p style="text-transform: uppercase;">Current Assigned</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/staff" style="padding: 6px; color: #fff;" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>{{ $appDocReviewsPending->count() }}</h3>
                <p style="text-transform: uppercase;">Inbox</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/staff_pending" style="padding: 6px; color: #fff;" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{ $appDocReviewsOutbox->count() }}</h3>
                <p style="text-transform: uppercase;">Outbox</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/staff_outbox" style="padding: 6px; color: #fff;" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3>{{ $appDocReviewsCompleted->count() }}</h3>
                <p style="text-transform: uppercase;">Completed</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/staff_completed" style="padding: 6px; color: #fff;" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
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
                    {{-- <th>Application ID</th> --}}
                    <th>Name of Gas Plant</th>
                    <th>Application Type</th>
                    <th>Sub-Category</th>
                    <th>State</th>
                    <th>Location</th>
                    <th>Sent To</th>
                    <th>Status</th>
                    <th>Date Sent</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviewsOutbox as $item)
                      <tr>
                        {{-- <td class="sorting_1"><a href="/zopscon_document_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a></td> --}}
                        <td>{{ $item->app_doc_rev['name_of_gas_plant'] }}</td>
                        <td>{{ $item->app_doc_rev['application_type'] }}</td>
                        <td>{{ $item->app_doc_rev['sub_category'] }}</td>
                        <td>{{ $item->app_doc_rev['state'] }}</td>
                        <td>{{ $item->app_doc_rev['lga'] }}</td>
                        <td>{{ $item->to }}</td>
                        <td>{{ $item->job_assignment['job_application_status'] }}</td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
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
