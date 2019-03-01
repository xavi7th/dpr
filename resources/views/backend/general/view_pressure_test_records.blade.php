@extends('layout.master')

@section('title')
  DPR | Pressure Tests Records
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
          Pressure Tests Records
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
                    <th>Company</th>
                    <th>Facility</th>
                    <th>Equipment</th>
                    <th>Tag No.</th>
                    <th>State</th>
                    <th>Test Type</th>
                    <th>Year Manufactured</th>
                    <th>Year Comm.</th>
                    <th>Design Pressure</th>
                    {{--  <th>T-Pre.</th>  --}}
                    <th>Date Tested</th>
                    <th>Due Date</th>
                    <th>TRDoc</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($pressureTestRecords as $item)
                      <tr>
                        <td class="sorting_1">
                          {{--  @if (Auth::user()->role == 'Marketer')
                            @if (now()->gte($item->expiry_date))
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-danger" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @elseif (now()->addMonths(3)->gte($item->expiry_date))
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-warning" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @else
                              if (now()->lte($item->expiry_date)) this was commented
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @endif
                          @else
                            @if (now()->gte($item->expiry_date))
                              <a href="/document_review/{{ $item->application_id }}" class="label label-danger" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @elseif (now()->addMonths(3)->gte($item->expiry_date))
                              <a href="/document_review/{{ $item->application_id }}" class="label label-warning" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @else
                              if (now()->lte($item->expiry_date)) this was commented
                              <a href="/document_review/{{ $item->application_id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                            @endif
                          @endif  --}}
                          <a href="/document_review/{{ $item->application_id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                        </td>
                        <td>{{ $item->company_name }}</td>
                        <td>{{ $item->facility_name }}</td>
                        <td>{{ $item->equipment_name }}</td>
                        <td>{{ $item->tag_number }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->test_type }}</td>
                        <td>{{ Carbon\Carbon::parse($item->manufacture_year)->toFormattedDateString() }}</td>
                        <td>{{ Carbon\Carbon::parse($item->commission_year)->toFormattedDateString() }}</td>
                        <td>{{ $item->design_pressure }}</td>
                        {{--  <td>{{ $item->test_pressure }}</td>  --}}
                        <td>{{ Carbon\Carbon::parse($item->date_last_tested)->toFormattedDateString() }}</td>
                        <td>{{ Carbon\Carbon::parse($item->due_date)->toFormattedDateString() }}</td>
                        <td><a href="/displayDocument?pic=/storage/pressure_test_docs/{{ $item->marketer_id }}/{{ $item->atc_application_id }}/{{ $item->test_certificate_report_location_url }}" class="pull-right btn btn-default">View</a></td>
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
    $('#example1').DataTable({
      'ordering'    : false,
    });
  })
</script>
@endsection
