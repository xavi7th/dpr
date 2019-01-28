@extends('layout.master')

@section('title')
    DPR Access | Project Monitoring Continous
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
        Project Monitoring | continous | create
    </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <form id="site_ver_inspection_req" role="form" method="POST" action="/project_monitoring_feed_create">
            {{ csrf_field() }}
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                        <input type="text" name="project_name" class="form-control" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Name of Company</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                        <input type="text" name="comp_name" class="form-control" placeholder="Name of Company">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>License Requirement</label>
                                    <select class="form-control" name="" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option>FEED</option>
                                    <option>DED</option>
                                    <option>Pre-Comissioning</option>
                                    <option>LTO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Select State</label>
                                    <select class="form-control" name="" style="width: 100%;">
                                    <option selected="selected">Select</option>
                                    <option>Abia</option>
                                    <option>Adamawa</option>
                                    <option>Akwa-Ibom</option>
                                    <option>Anambra</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Proposed Date of Inspection</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                        <input type="text" name="proposed_date_of_inspection" class="form-control" placeholder="MM DD, YYYY">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Actual Date of Inspection</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                        <input type="text" name="actual_date_of_inspection" class="form-control" placeholder="MM DD, YYYY">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Name of DPR Rep 1</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                        <input type="text" name="dpr_rep_1" class="form-control" placeholder="Enter Name of DPR Rep 1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Name of DPR Rep 2</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                        <input type="text" name="dpr_rep_2" class="form-control" placeholder="Enter Name of DPR Rep 2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label>Name of DPR Rep 3</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                        <input type="text" name="dpr_rep_3" class="form-control" placeholder="Enter Name of DPR Rep 3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Project Schedule</label>
                                    <div class="input-group">
                                        <input type="file" name="project_schedule">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Project Report</label>
                                    <div class="input-group">
                                        <input type="file" name="project_report">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="form-group">
                                    <label>Project Performance (%)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                        <input type="text" name="project_performance" class="form-control" placeholder="Enter Value">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add Record</button>
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