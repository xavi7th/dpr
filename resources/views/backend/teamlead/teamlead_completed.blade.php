@extends('layout.master')

@section('title')
  DPR Team Lead | Completed
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
          Completed
          <small>Team Lead Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          @include('partials.teamlead_folders')
            <!-- /.col -->
            {{-- rgba(60, 141, 188, 0.2) --}}
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Completed</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name of Company</th>
                        <th>Company ID</th>
                        <th>Application Type</th>
                        <th>Sub-Category</th>
                        <th>Date Completed</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($completed as $item)
                        <tr>
                          @if ($item->app_doc_review['sub_category'] == "CAT-D LTO")
                            <td></i><a href="/tlDocument_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review->company->company_name }}</a></td>
                          @else
                            <td></i><a href="/tlDocument_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                          @endif
                          <td>{{ $item->company_id }}</td>
                          <td>{{ $item->app_doc_review['application_type'] }}</td>
                          <td>{{ $item->app_doc_review['sub_category'] }}</td>
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
            <!-- /.col -->
          </div>
          <!-- /.row -->
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
    $('#example1').DataTable({
      'ordering'    : false,
    });
  })
</script>
@endsection
