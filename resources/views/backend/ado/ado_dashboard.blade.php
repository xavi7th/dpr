@extends('layout.master')

@section('title')
  DPR ADO | Dashboard
@endsection

@section('pagestyles')
  <style>
    .stronger{
      font-weight: bold;
    }
  </style>
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_ado')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>ADO Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          @include('partials.ado_folders')
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
                      <th>Source</th>
                      <th>Date Received</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($inbox as $item)
                      <tr>
                        @if ($item->read == 'false')
                          <td><a href="/ado_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: bold; color: #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                          <td style="font-weight: bold; color: #333;">{{ $item->app_doc_review['application_type'] }}</td>
                          <td style="font-weight: bold; color: #333;">{{ $item->app_doc_review['sub_category'] }}</td>
                          <td style="font-weight: bold; color: #333;">{{ $item->sender_role }}</td>
                          <td style="font-weight: bold; color: #333;">{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
                        @else
                          <td><a href="/ado_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                          <td style="color: #333;">{{ $item->app_doc_review['application_type'] }}</td>
                          <td style="color: #333;">{{ $item->app_doc_review['sub_category'] }}</td>
                          <td style="color: #333;">{{ $item->sender_role }}</td>
                          <td>{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
                        @endif
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
<script>
  $(document).ready(function(){

  });
</script>
@endsection
