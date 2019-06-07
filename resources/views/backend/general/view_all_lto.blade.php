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
              <div class="box-header mb-4 shadow-sm">
							<form action="{{ route('lto.search') }}" method="post">
                {{ csrf_field() }}
                {{-- <input type="text" hidden name="application_type" value="lpg retailer outlets"> --}}
                <div class="row d-flex justify-content-center flex-wrap">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Type</label>
                      <select class="form-control" name="search_type">
                        <option value="date">Application Date</option>
                        <option value="date_issued">Date Issued</option>
                        <option value="expiry_date">Expiry Date</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>From:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="from" class="form-control pull-right" id="datepicker1" autocomplete="false">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>To:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="to" class="form-control pull-right" id="datepicker2">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <div class="form-group">
                      <label style="visibility: hidden;">:</label>
                      <br>
                      <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label style="visibility: hidden;">:</label>
                      <br>
                      <a href="{{ route('lto.all') }}?val=lpg_lto" class="btn btn-info">View All LTOs</a>
                    </div>
                  </div>

									@if (count($errors) > 0)
										<div class="has-error w-75 shadow mb-5 mt-2">
												<ul class="input-group-addon ">
														@foreach ($errors->all() as $error)
																<li class="list-inline">{{ $error }}</li>
														@endforeach
												</ul>
										</div>
									@endif

									@if (session('status'))
											<div class="alert alert-success">
													{{ session('status') }}
											</div>
									@endif
                </div>


              </form>
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
                              <a class="label label-default" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @elseif(now()->gte($item->issued_lto_licenses['expiry_date']))
                              <a class="label label-danger" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @elseif(now()->addMonths(3)->gte($item->issued_lto_licenses['expiry_date']))
                              <a class="label label-warning" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @elseif(now()->lte($item->issued_lto_licenses['expiry_date']))
                              <a class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
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
                        <td>{{ Carbon\Carbon::parse($item->updated_at)->toDayDateTimeString() }}</td> {{--  date sent to HQ needs to be treated urgently....it's a pending issue likey to be raised by Mr. Elvis  --}}
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

    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    })

    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })
</script>
@endsection
