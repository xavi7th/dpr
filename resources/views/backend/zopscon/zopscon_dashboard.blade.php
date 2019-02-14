@extends('layout.master')

@section('title')
  DPR ZOPSCON | Dashboard
@endsection

@section('pagestyles')

@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_zopscon')
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Inbox
          <small>ZOPSCON Control panel</small>
        </h1>
      </section>

      <section class="content">
        <div class="row">
          @include('partials.zopscon_folders')
            <!-- /.col -->
            {{-- rgba(60, 141, 188, 0.2) --}}
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
                        <th>Name of Gas Plant</th>
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
                          @if ($item->app_doc_review['sub_category'] == "CAT-D LTO")
                            <td></i><a href="/zopscon_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: bold; color: #333;">{{ $item->app_doc_review->company->company_name }}</a></td>
                          @else
                            <td></i><a href="/zopscon_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: bold; color: #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                          @endif
                          <td style="font-weight: bold; color: #333;">{{ $item->app_doc_review['application_type'] }}</td>
                          <td style="font-weight: bold; color: #333;">{{ $item->app_doc_review['sub_category'] }}</td>
                          <td style="font-weight: bold; color: #333;">{{ $item->sender_role }}</td>
                          <td style="font-weight: bold; color: #333;">{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
                        @else
                          @if ($item->app_doc_review['sub_category'] == "CAT-D LTO")
                            <td></i><a href="/zopscon_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review->company->company_name }}</a></td>
                          @else
                            <td></i><a href="/zopscon_document_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a></td>
                          @endif
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
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
      </div>
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
<script>
$(function () {
  //Enable iCheck plugin for checkboxes
  //iCheck for checkbox and radio inputs
  $('.mailbox-messages input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });

  //Enable check and uncheck all functionality
  $(".checkbox-toggle").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
      //Uncheck all checkboxes
      $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
      $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
    } else {
      //Check all checkboxes
      $(".mailbox-messages input[type='checkbox']").iCheck("check");
      $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
    }
    $(this).data("clicks", !clicks);
  });

  //Handle starring for glyphicon and font awesome
  $(".mailbox-star").click(function (e) {
    e.preventDefault();
    //detect type
    var $this = $(this).find("a > i");
    var glyph = $this.hasClass("glyphicon");
    var fa = $this.hasClass("fa");

    //Switch states
    if (glyph) {
      $this.toggleClass("glyphicon-star");
      $this.toggleClass("glyphicon-star-empty");
    }

    if (fa) {
      $this.toggleClass("fa-star");
      $this.toggleClass("fa-star-o");
    }
  });
});
</script>
@endsection
