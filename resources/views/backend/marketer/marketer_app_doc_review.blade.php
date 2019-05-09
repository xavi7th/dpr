@extends('layout.master')

@section('title')
DPR {{Auth::user()->role}} | Application Document Records
@endsection

@section('pagestyles')
<style>
    .m-r {
        position: relative;
    }

    .m-r .label-danger {
        position: absolute;
        top: 9px;
        right: 7px;
        text-align: center;
        font-size: 9px;
        padding: 2px 3px;
        line-height: .9;
        transform: rotateZ(30deg);
    }

</style>
@endsection

@section('content')
<div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.router_aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Application Document Records
                <small>{{Auth::user()->role}} Control panel</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-3">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$appDocReviews->count()}}</h3>

                            <p>Records</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <th>Application Type</th>
                                        <th>Sub-Category</th>
                                        {{-- <th>Plant Type</th> --}}
                                        <th>State</th>
                                        <th>lga</th>
                                        <th>Status</th>
                                        <th>Application Date</th>
                                        {{-- <th>Mails</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appDocReviews as $item)
                                    <tr class="@if( $item->is_under_review() ) warning @endif">
                                        <td class="sorting_1">
                                            @if ($item->application_status == 'Application Pending')
                                            <a class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                                            @elseif( $item->is_under_review() )
                                            <a href="/mDocument_review/{{ $item->id }}" class="label label-danger bg-yellow-gradient"
                                                style="font-size: 14px;">{{ $item->application_id }}</a>
                                            @else
                                            @if ($item->issued_lto_licenses)
                                            @if($item->issued_lto_licenses['expiry_date'] == "")
                                            <a href="/mDocument_review/{{ $item->id }}" class="label label-default"
                                                style="font-size: 14px;">{{ $item->application_id }}</a>
                                            @elseif(now()->gte($item->issued_lto_licenses['expiry_date']))
                                            <a href="/mDocument_review/{{ $item->id }}" class="label label-danger"
                                                style="font-size: 14px;">{{ $item->application_id }}</a>
                                            @elseif(now()->addMonths(3)->gte($item->issued_lto_licenses['expiry_date']))
                                            <a href="/mDocument_review/{{ $item->id }}" class="label label-warning"
                                                style="font-size: 14px;">{{ $item->application_id }}</a>
                                            @elseif(now()->lte($item->issued_lto_licenses['expiry_date']))
                                            <a href="/mDocument_review/{{ $item->id }}" class="label label-success"
                                                style="font-size: 14px;">{{ $item->application_id }}</a>
                                            @endif
                                            @else
                                            <a href="/mDocument_review/{{ $item->id }}" class="label label-success"
                                                style="font-size: 14px;">{{ $item->application_id }}</a>
                                            @endif
                                            @endif
                                        </td>
                                        <td>{{ $item->company['company_name'] }}</td>
                                        <td>
                                            @if ($item->sub_category == "CAT-D LTO")
                                            {{ $item->company['company_name'] }}
                                            @else
                                            {{ $item->name_of_gas_plant }}
                                            @endif
                                        </td>
                                        <td>{{ $item->application_type }}</td>
                                        <td class="@if( $item->is_under_review() ) m-r @endif">
                                            @if( $item->is_under_review() )
                                            <span class="label label-danger">Review</span>
                                            @endif
                                            {{ $item->sub_category }}
                                        </td>
                                        {{-- <td>{{ $item->plant_type }}</td> --}}
                                        <td>{{ $item->state }}</td>
                                        <td>{{ $item->lga }}</td>
                                        <td>
                                            @if ($item->application_status == 'Site Not Suitable'
                                            || $item->application_status == 'ATC Not Issued'
                                            || $item->application_status == 'ATI Not Issued'
                                            || $item->application_status == 'LTO Not Issued'
                                            || $item->application_status == 'Renewal Declined'
                                            || $item->application_status == 'Take Over Not Approved'
                                            )
                                            <i title="{{ $item->application_status }}" class="fa fa-close text-red"></i>
                                            @elseif ($item->application_status == 'Site Suitable'
                                            || $item->application_status == 'ATC Issued'
                                            || $item->application_status == 'ATI Issued'
                                            || $item->application_status == 'LTO Issued'
                                            || $item->application_status == 'Renewal Approved'
                                            || $item->application_status == 'Take Over Approved'
                                            )
                                            <i title="{{ $item->application_status }}" class="fa fa-check-circle text-green"></i>
                                            @elseif ($item->application_status == 'Application Pending')
                                            <i title="{{ $item->application_status }}" class="fa fa-send text-blue"></i>
                                            @elseif( $item->is_under_review() )
                                            <a href="/mDocument_edit/{{ $item->id }}" class="" style="font-size: 13px;"><i
                                                    title="{{ $item->application_status }}" class="fa fa-gears text-yellow"></i></a>
                                            @else
                                            <a href="/mDocument_edit/{{ $item->id }}" class="" style="font-size: 13px;"><i
                                                    title="{{ $item->application_status }}" class="fa fa-gears text-black"></i></a>
                                            @endif
                                        </td>
                                        <td>{{ Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}</td>
                                        {{-- <td><a href="/mDocument_messages/{{ $item->id }}" class="label
                                        label-primary" style="font-size: 13px;">View</a></td> --}}
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
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('partials.base_footer')
</div>
@endsection

@section('pagescript')
<script>
    $( function () {
        $( '#example1' ).DataTable( {
            'ordering': false,
        } );
    } )

</script>
@endsection


{{-- @if ($item->application_status == 'Application Pending'
|| $item->application_status == 'Site Not Suitable'
|| $item->application_status == 'ATC Not Issued'
|| $item->application_status == 'ATI Not Issued'
|| $item->application_status == 'LTO Not Issued'
|| $item->application_status == 'Renewal Declined'
|| $item->application_status == 'Take Over Not Approved'
)  --}}
