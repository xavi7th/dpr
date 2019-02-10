@extends('layout.master')

@section('title')
  DPR | Approval to construct Records
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
          Approval to construct Records
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
                    <th>Company Name</th>
                    <th>Name of Gas Plant</th>
                    <th>State</th>
                    <th>Plant Type</th>
                    <th>Application Status</th>
                    <th>License Validity Status</th>
                    <th>Application Date</th>
                    <th>Date Issued</th>
                    <th>Expiry Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviewsATC as $item)
                      <tr>
                        <td class="sorting_1">
                          @if (now()->lte($item->expiry_date))
                            <a href="/mDocument_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @else
                            <a class="label label-danger" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @endif
                        </td>
                        <td>{{ $item->company_name }}</td>
                        <td>{{ $item->name_of_gas_plant }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->plant_type }}</td>
                        <td>{{ $item->application_status }}</td>
                        <td>
                          @if (now()->lte($item->expiry_date))
                            Active
                          @else
                            Expired
                          @endif
                        </td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
                        <td>{{ Carbon\Carbon::parse($item->date_issued)->toDayDateTimeString() }}</td>
                        <td>{{ Carbon\Carbon::parse($item->expiry_date)->toDayDateTimeString() }}</td>
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
