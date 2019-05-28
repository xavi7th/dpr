@extends('layout.master')

@section('title')
DPR | Approval to construct Records
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
                Approval to construct Records
            </h1>
        </section>
        <section class="content-header">
            <form action="" method="post">

            </form>
        </section>

        <!-- Main content -->
        <section class="content">

            {{-- <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Advanced Search</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>Type</label>
                    <select class="form-control">
                      <option value="Application Date">Application Date</option>
                      <option value="Date Issued">Date Issued</option>
                      <option value="Expiry Date">Expiry Date</option>
                    </select>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>From:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker1">
                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <label>To:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker2">
                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>  --}}

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="/advanced_search_atc" method="post">
                                {{ csrf_field() }}
                                <input type="text" hidden name="application_type" value="lpg retailer outlets">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="search_type">
                                                <option value="Application Date">Application Date</option>
                                                <option value="date_issued">Date Issued</option>
                                                <option value="expiry_date">Expiry Date</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <label>From:</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="from" class="form-control pull-right"
                                                    id="datepicker1">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <label>To:</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="to" class="form-control pull-right"
                                                    id="datepicker2">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">
                                            <label style="visibility: hidden;">:</label>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
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
                                        {{-- {{$appDocReviewsATC}} --}}
                                        <tr>
                                            <td class="sorting_1">
                                                @if (now()->lte($item->issued_atc_licenses->expiry_date))
                                                <a class="label label-success"
                                                    style="font-size: 14px;">{{ $item->application_id }}</a>
                                                {{-- <a href="/mDocument_review/{{ $item->id }}" class="label
                                                label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                                                --}}
                                                {{-- <a href="/stDocument_review?inboxIndex={{ $item->id }}&applicationIndex={{ $item->application_id }}"
                                                class="" style="font-size: 16px; text-transform: capitalize; color:
                                                #333;">{{ $item->app_doc_review['name_of_gas_plant'] }}</a> --}}
                                                @else
                                                <a class="label label-danger"
                                                    style="font-size: 14px;">{{ $item->application_id }}</a>
                                                @endif
                                            </td>
                                            <td>{{ $item->company->company_name }}</td>
                                            <td>{{ $item->name_of_gas_plant }}</td>
                                            <td>{{ $item->state }}</td>
                                            <td>{{ $item->plant_type }}</td>
                                            <td>{{ $item->job_assignment->job_application_status }}</td>
                                            <td>
                                                @if (now()->lte($item->issued_atc_licenses->expiry_date))
                                                Active
                                                @else
                                                Expired
                                                @endif
                                            </td>
                                            <td>{{ Carbon\Carbon::parse($item->created_at)->toDayDateTimeString() }}
                                            </td>
                                            <td>{{ Carbon\Carbon::parse($item->issued_atc_licenses->date_issued)->toDayDateTimeString() }}
                                            </td>
                                            <td>{{ Carbon\Carbon::parse($item->issued_atc_licenses->expiry_date)->toDayDateTimeString() }}
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
    $.widget.bridge( 'uibutton', $.ui.button );

</script>
<script>
    $( function () {
        $( '#example1' ).DataTable( {
            'ordering': false,
        } );


        //Date picker
        $( '#datepicker1' ).datepicker( {
            autoclose: true
        } )

        //Date picker
        $( '#datepicker2' ).datepicker( {
            autoclose: true
        } )
    } )

</script>
@endsection
