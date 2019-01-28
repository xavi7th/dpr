@extends('layout.master')

@section('title')
    DPR Access | Project Monitoring FEED
@endsection

@section('pagestyles')
<style>
    hr{
        border-top: 1px solid #ccc;
    }

    #caps{
        text-transform: uppercase;
    }

    .small-box h3{
        font-size: 24px;
        text-transform: uppercase;
    }

    .small-box .icon{
        font-size: 70px;
    }

    .small-box:hover .icon{
        font-size: 70px;
        color: #fff;
    }

    .small-box p{
        visibility: hidden;
    }

    .btn-app{
        margin: 10px 0 10px 0;
    }

    #site_ver_inspection_req #req_ind{
        float: right;
    }

    #site_ver_inspection_req #req{
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 400;
        width: 55%;
    }

    #site_ver_inspection_req #req_ind label{
        margin: 0px 20px;
    }

    .not-uploaded{
        font-size: 20px;
        position: relative;
        margin: 0px 20px;
        top: 5px;
    }

    .uploaded{
        font-size: 20px;
        position: relative;
        margin: 0px 20px;
        top: 5px;
    }

    #req_ind label.btn.btn-success{
        background-color: #ccc;
        border: none;
    }
</style>
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
    <h1 id="caps">
        Project Monitoring | feed | create
    </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <form id="site_ver_inspection_req" role="form" method="POST" action="/project_monitoring_feed_create">
            {{ csrf_field() }}
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="form-group">
                            <label>Project Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                <input type="text" name="project_name" class="form-control" placeholder="Project Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Project Location</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                <input type="text" name="project_location" class="form-control" placeholder="Project Location">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Name of Company</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                <input type="text" name="comp_name" class="form-control" placeholder="Name of Company">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Name of Facility</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                <input type="text" name="facility_name" class="form-control" placeholder="Name of Facility">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Company ID</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                <input type="text" name="comp_id" class="form-control" placeholder="Company ID">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create FEED</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-body">
                        {{-- Site Verification Inspection Report --}}
                        <app-doc-rev-upload-component title="Application Letter for Conceptual Design Approval" name="ALFCDA" inputid="ALFCDA_doc"></app-doc-rev-upload-component>

                        <app-doc-rev-upload-component title="A copy of an Approved Field Development Plan (FDP)" name="ACAFDP" inputid="ACAFDP_doc"></app-doc-rev-upload-component>

                        <app-doc-rev-upload-component title="Preliminary Layout of Facilities and Interconnecting Piping" name="PLFIP" inputid="PLFIP_doc"></app-doc-rev-upload-component>

                        <app-doc-rev-upload-component title="Simplified Process Flow Diagrams & General Equipment Layout" name="SPFDGEL" inputid="SPFDGEL_doc"></app-doc-rev-upload-component>

                        <app-doc-rev-upload-component title="Metering Manifold & it's Ancilliary Facilities where Applicable" name="MMAFWA" inputid="MMAFWA_doc"></app-doc-rev-upload-component>

                        <app-doc-rev-upload-component title="All other drawings considered relevant for review of this application" name="ADCRFRA" inputid="ADCRFRA_doc"></app-doc-rev-upload-component>

                        <app-doc-rev-upload-component title="all other information, which could contribute to clarify the overall intent of the facility & work scope of the project" name="AOICOIFWSP" inputid="AOICOIFWSP_doc"></app-doc-rev-upload-component>

                        <app-doc-rev-upload-component title="list of contractors being considered for the contract award" name="LCBCCA" inputid="LCBCCA_doc"></app-doc-rev-upload-component>

                    </div>
                </div>
            </div>
        </form>
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
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    })
</script>

@endsection