@extends('layout.master')

@section('title')
  DPR | License to operate Records
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
          License to operate Records
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
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
                    <th>Date Issued</th>
                    <th>Expiry Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviewsLTO as $item)
                      <tr>
                        <td class="sorting_1">
                          @if (Auth::user()->role == 'Marketer')
                            @if (now()->gte($item->expiry_date))
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-danger" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @elseif (now()->addMonths(3)->gte($item->expiry_date))
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-warning" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @else
                              {{-- if (now()->lte($item->expiry_date)) --}}
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @endif
                          @else
                            @if (now()->gte($item->expiry_date))
                              <a href="/document_review/{{ $item->application_id }}" class="label label-danger" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @elseif (now()->addMonths(3)->gte($item->expiry_date))
                              <a href="/document_review/{{ $item->application_id }}" class="label label-warning" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @else
                              {{-- if (now()->lte($item->expiry_date)) --}}
                              <a href="/document_review/{{ $item->application_id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @endif
                          @endif

                        </td>
                        <td>{{ $item->name_of_gas_plant }}</td>
                        <td>{{ $item->application_type }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>{{ $item->plant_type }}</td>
                        <td>{{ $item->application_status}}</td>
                        <td>
                          {{ Carbon\Carbon::parse($item->date_issued)->toFormattedDateString() }}
                        </td>
                        <td>
                          {{ Carbon\Carbon::parse($item->expiry_date)->toFormattedDateString() }}
                        </td>

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
