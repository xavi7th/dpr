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
      
    .widget-user-2 .widget-user-username{
        font-size: 24px;
        font-weight: bold;
        margin-left: 0;
        text-transform: uppercase;
    }

    .widget-user-2 .widget-user-username, .widget-user-2 .widget-user-desc{
        margin-left: 0;
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

      
    .hider{
        visibility: hidden;
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


@include('partials.backend_aside_all')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1 id="caps">
        Project Monitoring | feed | Edit
    </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-2">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">app901319</h3>
                {{--  <h5 class="widget-user-desc hider">Statisctics</h5>  --}}
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Oando Gas</a></li>
                  <li><a href="#">Refilling plant</a></li>
                  <li><a href="#">Delta State</a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        <form id="site_ver_inspection_req" role="form" method="POST" action="/project_monitoring_feed_create">
            {{ csrf_field() }}
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
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
                        <button type="submit" class="btn btn-primary">Update FEED</button>
                    </div>
                </div>
            </div>
            
        </form>
        <form role="form" method="POST" action="/edit_document_upload" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="modal modal-danger fade" id="reason">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Specify a reason why this document is not available</h4>
                                </div>
                                <div class="modal-body" style="padding: 5px;">
                                <textarea name="reason" rows="8" cols="80" style="width: 100%; resize: none; height: 200px; color: #000; padding: 5px;" placeholder="Give reason..."></textarea>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-outline" data-dismiss="modal">Submit</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Select Document to modify</label>
                            <select class="form-control select2" name="doc_type" style="width: 100%;">
                                <option selected="selected" value="null">Select Document</option>
                                <option value="applications_letter_for_suitability_inspection">Application Letter for Conceptual Design Approval</option>
                                <option value="article_and_memorandum_of_association">A copy of an Approved Field Development Plan (FDP)</option>
                                <option value="current_tax_clearance">Preliminary Layout of Facilities and Interconnecting Piping</option>
                                <option value="certificate_of_incorporation">Simplified Process Flow Diagrams & General Equipment Layout</option>
                                <option value="fire_certificate">Metering Manifold & its Ancilliary Facilities where Applicable</option>
                                <option value="police_report">All other drawings considered relevant for review of this application</option>
                                <option value="completed_application_form">All other information, which could contribute to clarify the overall intent of the facility & work scope of the project</option>
                                <option value="approved_building_plan">List of contractors being considered for the contract award</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="radio">
                            <label>
                                <input type="radio" name="selectedOption" value="no" checked>
                                No
                            </label>
                            </div>
                            <div class="radio">
                            <label>
                                <input type="radio" name="selectedOption" value="yes">
                                Yes
                            </label>
                            </div>
                            <div class="radio">
                            <label>
                                <input type="radio" name="selectedOption" value="null">
                                Not Applicable
                            </label>
                            </div>
                            <label for="updatedDocument" class="btn btn-success">Select file</label>
                            <input style="display: none;" type="file" id="updatedDocument" name="updatedDocument">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
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