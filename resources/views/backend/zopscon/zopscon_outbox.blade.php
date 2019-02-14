@extends('layout.master')

@section('title')
  DPR ZOPSCON | Outbox
@endsection

@section('pagestyles')
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_zopscon')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Outbox
          <small>ZOPSCON Control panel</small>
        </h1>
      </section>

      <section class="content">
        <div class="row">
          @include('partials.zopscon_folders')
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
                          @if ($item->app_doc_review['sub_category'] == "CAT-D LTO")
                            <td></i><a href="/zopscon_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review->company->company_name }}</a></td>
                          @else
                            <td></i><a href="/zopscon_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                          @endif
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
