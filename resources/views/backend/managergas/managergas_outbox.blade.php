@extends('layout.master')

@section('title')
  DPR Manager Gas | Outbox
@endsection

@section('pagestyles')
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_managergas')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Outbox
          <small>Manager Gas Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          @include('partials.managergas_folders')
            <!-- /.col -->
            {{-- rgba(60, 141, 188, 0.2) --}}
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Outbox</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name of Company</th>
                        <th>Application Type</th>
                        <th>Sub-Category</th>
                        <th>Destination</th>
                        <th>Date Sent</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($outbox as $item)
                        <tr>
                          <td><a href="/managergas_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                          <td>{{ $item->app_doc_review['application_type'] }}</td>
                          <td>{{ $item->app_doc_review['sub_category'] }}</td>
                          <td>{{ $item->to }}</td>
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