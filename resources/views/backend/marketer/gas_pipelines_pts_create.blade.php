@extends('layout.master')

@section('title')
    DPR Access | PTS Application
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


@include('partials.backend_aside_marketer')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1 id="caps">
        PTS Application
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
                            <label>Company Name</label>
                            <select class="form-control select2" name="company_name" style="width: 100%;">
                            <option selected="selected">Select Company</option>
                            @foreach ($companies as $item)
                                <option value="{{$item->company_id}}">{{$item->company_name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pipeline Category</label>
                            <select class="form-control select2" name="pipeline_category" style="width: 100%;">
                                <option selected="selected">Select Type</option>
                                <option value="Distribution">Distribution</option>
                                <option value="Transmission">Transmission</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name of Facility</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                <input type="text" name="facility_name" class="form-control" placeholder="Name of Facility">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ion ion-location"></i></span>
                                <input type="text" name="location" class="form-control" placeholder="Enter Location">
                            </div>
                        </div>
                        <state-component></state-component>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-body">
                        {{-- Site Verification Inspection Report --}}
                        <app-doc-rev-upload-component title="Public Hearing" name="PH" inputid="PH_doc"></app-doc-rev-upload-component>

                        <app-doc-rev-upload-component title="Verification Inspection" name="VI" inputid="VI_doc"></app-doc-rev-upload-component>
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