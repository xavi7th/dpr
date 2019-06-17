@extends('layout.master')

@section('title')
DPR Access | Previous ATC Records Input
@endsection

@section('pagestyles')
<style>
    hr {
        border-top: 1px solid #ccc;
    }

    #caps {
        text-transform: uppercase;
    }

    .small-box h3 {
        font-size: 24px;
        text-transform: uppercase;
    }

    .widget-user-2 .widget-user-username {
        font-size: 24px;
        font-weight: bold;
        margin-left: 0;
        text-transform: uppercase;
    }

    .widget-user-2 .widget-user-username,
    .widget-user-2 .widget-user-desc {
        margin-left: 0;
    }

    .small-box .icon {
        font-size: 70px;
    }

    .small-box:hover .icon {
        font-size: 70px;
        color: #fff;
    }

    .small-box p {
        visibility: hidden;
    }

    .btn-app {
        margin: 10px 0 10px 0;
    }


    .hider {
        visibility: hidden;
    }

    #site_ver_inspection_req #req_ind {
        float: right;
    }

    #site_ver_inspection_req #req {
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 400;
        width: 55%;
    }

    #site_ver_inspection_req #req_ind label {
        margin: 0px 20px;
    }

    .not-uploaded {
        font-size: 20px;
        position: relative;
        margin: 0px 20px;
        top: 5px;
    }

    .uploaded {
        font-size: 20px;
        position: relative;
        margin: 0px 20px;
        top: 5px;
    }

    #req_ind label.btn.btn-success {
        background-color: #ccc;
        border: none;
    }

</style>
@endsection

@section('content')
<div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_all')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 id="caps">
                Previous ATC Records Input
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-6">
                    <form role="form" method="POST" action="/send_atc_old_records" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box box-primary">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <select class="form-control select2" name="company_id" style="width: 100%;">
                                        <option selected="selected">Select Company</option>
                                        @foreach ($companies as $item)
                                            <option value="{{$item->company_id}}">{{$item->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <apply-for-atc-component>
                                </apply-for-atc-component>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label>Application Date</label>
                                            <input type="text" name="application_date" class="form-control"
                                                placeholder="Application Date" id="datepicker1">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label>Date Issued</label>
                                            <input type="text" name="date_issued" class="form-control"
                                                placeholder="Date Issued" id="datepicker2">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                      <div class="form-group">
                                          <label for="exampleInputFile">Implementation Schedule</label>
                                          <input type="file" name="implementationScheduleDoc">
                                      </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" style="float: right;">Save &
                                        Continue</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
            <div class="row">

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


    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    })

    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })

    //Date picker
    $('#datepicker3').datepicker({
      autoclose: true
    })

</script>

@endsection
