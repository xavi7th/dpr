@extends('layout.master')

@section('title')
  DPR | License to operate Records
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
                    <th>State</th>
                    <th>Plant Type</th>
                    <th>Application Status</th>
                    <th>License Validity Status</th>
                    <th>Application Date</th>
                    <th>Date Sent to HQ</th>
                    <th>Date Issued</th>
                    <th>Expiry Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviewsLTO as $item)
                      <tr>
                        <td class="sorting_1">
                          @if($item->issued_lto_licenses['expiry_date'] == "")
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-default" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @elseif(now()->gte($item->issued_lto_licenses['expiry_date']))
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-danger" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @elseif(now()->addMonths(3)->gte($item->issued_lto_licenses['expiry_date']))
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-warning" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @elseif(now()->lte($item->issued_lto_licenses['expiry_date']))
                              <a href="/mDocument_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @endif
                        </td>
                        <td>{{ $item->name_of_gas_plant }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->plant_type }}</td>
                        <td>{{ $item->application_status }}</td>
                        {{--  <td>null</td>  --}}
                        <td>
                          @if (now()->lte($item->issued_lto_licenses['expiry_date']))
                            Active
                          @elseif ($item->issued_lto_licenses['expiry_date'] == "")
                            --
                          @else
                            Expired
                          @endif
                        </td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
                        <td>{{ Carbon\Carbon::parse($item->updated_at)->toDayDateTimeString() }}</td>
                        <td>
                          @if ($item->issued_lto_licenses['date_issued'] == "")
                            --
                          @else
                            {{Carbon\Carbon::parse($item->issued_lto_licenses['date_issued'])->toDayDateTimeString()}}
                          @endif
                        </td>
                        <td>
                          @if ($item->issued_lto_licenses['expiry_date'] == "")
                            --
                          @else
                            {{Carbon\Carbon::parse($item->issued_lto_licenses['expiry_date'])->toDayDateTimeString()}}
                          @endif
                        </td>

                        {{--  <td>{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}</td>
                        <td>{{ Carbon\Carbon::parse($item->date_issued)->toDayDateTimeString() }}</td>
                        <td>{{ Carbon\Carbon::parse($item->expiry_date)->toDayDateTimeString() }}</td>  --}}

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
