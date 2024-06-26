@extends('layout.master')

@section('title')
  DPR Staff | Dashboard
@endsection

@section('pagestyles')
	<style>
		.m-r{
			position:relative;
		}
		.m-r .label-danger{
			position: absolute;
			top: 9px;
			right: 7px;
			text-align: center;
			font-size: 9px;
			padding: 2px 3px;
			line-height: .9;
			transform:rotateZ(30deg);
		}
	</style>
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
          Dashboard
          <small>Staff Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          @include('partials.staff_folders')
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
                      <th>Name of Gas plant</th>
                      <th>Application Type</th>
                      <th>Sub-Category</th>
                      <th>Source</th>
                      <th>Date Received</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($inbox as $item)
                      <tr class="@if( $item->app_doc_review->is_under_review() ) danger @endif">
                        @if ($item->read == 'true')
                          @if ($item->app_doc_review['sub_category'] == "CAT-D LTO")
                            <td><a href="/stDocument_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review->company->company_name }}</a></td>
                          @else
                            <td class="@if( $item->app_doc_review->is_under_review() ) m-r @endif">
															@if( $item->app_doc_review->is_under_review() )
																<span class="label label-danger">M.R.</span>
															@endif
															<a href="/stDocument_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: 500; color: #333;">{{ $item->app_doc_review->company->company_name }}</a>
														</td>
                          @endif
                          <td style="color: #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</td>
                          <td style="color: #333;">{{ $item->app_doc_review['application_type'] }}</td>
                          <td style="color: #333;">{{ $item->app_doc_review['sub_category'] }}</td>
                          <td style="color: #333;">{{ $item->sender_role }}</td>
                          <td style="color: #333;">{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
                        @else
                          @if ($item->app_doc_review['sub_category'] == "CAT-D LTO")
                            <td></i><a href="/stDocument_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: bold; color: #333;">{{ $item->app_doc_review->company->company_name }}</a></td>
                          @else
                            <td></i><a href="/stDocument_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}" class="" style="font-size: 16px; text-transform: capitalize; font-weight: bold; color: #333;">{{ $item->app_doc_review->company->company_name }}</a></td>
                          @endif
                          <td style="font-weight: bold; color: #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</td>
                          <td style="font-weight: bold; color: #333;">{{ $item->app_doc_review['application_type'] }}</td>
                          <td style="font-weight: bold; color: #333;">{{ $item->app_doc_review['sub_category'] }}</td>
                          <td style="font-weight: bold; color: #333;">{{ $item->sender_role }}</td>
                          <td style="font-weight: bold; color: #333;">{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
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
    $('#example1').DataTable({
      'ordering'    : false,
    });
  })
</script>
@endsection



{{--  @if (Auth::user()->role == 'Marketer')
      @include('partials.backend_aside_marketer')
    @elseif (Auth::user()->role == 'Admin')
      @include('partials.backend_aside_admin')
    @elseif (Auth::user()->role == 'Staff')
      @include('partials.backend_aside_all')
    @elseif (Auth::user()->role == 'Team Lead')
      @include('partials.backend_aside_all')
    @elseif (Auth::user()->role == 'Head Gas M&G Lagos')
      @include('partials.backend_aside_all')
    @elseif (Auth::user()->role == 'ADO')
      @include('partials.backend_aside_ado')
    @elseif (Auth::user()->role == 'ZOPSCON')
      @include('partials.backend_aside_all')
    @endif  --}}
