@extends('layout.master')

@section('title')
DPR Access | Previous Takeover Records Input
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
                Previous Takeover Records Input
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-6">
                    <form role="form" method="POST" action="/apply_for_site_suitability_inspection">
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
                                <apply-for-takeover-component>
                                </apply-for-takeover-component>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label>Application Date</label>
                                            <input type="text" name="town" class="form-control"
                                                placeholder="Application Date">
                                        </div>
                                    </div>
                                    {{-- <div class="col-xs-4">
                                        <div class="form-group">
                                            <label>Date Sent to HQ</label>
                                            <input type="text" name="town" class="form-control"
                                                placeholder="Date Sent to HQ">
                                        </div>
                                    </div> --}}
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <label>Date Issued</label>
                                            <input type="text" name="town" class="form-control"
                                                placeholder="Date Issued">
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

                {{-- <div class="col-md-6">
                    <form role="form" method="POST" action="/edit_document_upload" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box box-primary">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <select class="form-control select2" name="doc_type"
                                                    style="width: 100%;">
                                                    <option selected="selected" value="null">Select Company</option>
                                                    <option value="">Company 1</option>
                                                    <option value="">Company 2</option>
                                                    <option value="">Company 3</option>
                                                    <option value="">Company 4</option>
                                                    <option value="">Company 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label>Name of Gas Plant</label>
                                                <select class="form-control select2" name="doc_type"
                                                    style="width: 100%;">
                                                    <option selected="selected" value="null">Select plant</option>
                                                    <option value="">plant 1</option>
                                                    <option value="">plant 2</option>
                                                    <option value="">plant 3</option>
                                                    <option value="">plant 4</option>
                                                    <option value="">plant 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <label>Select Document to Upload</label>
                                    <select class="form-control select2" name="doc_type" style="width: 100%;">
                                        <option selected="selected" value="null">Select Document</option>
                                        <option value="article_and_memorandum_of_association">Article and Memorandum of
                                            Association</option>
                                        <option value="certificate_of_incorporation">Certificate of Incorporation
                                        </option>
                                        <option value="weight_measures_verification_certificate">Weight and Measures
                                            Verification Certificate</option>
                                        <option value="current_pressure_test_certificate">Current Pressure Test Report /
                                            Certificate</option>
                                        <option value="appropriate_plant_photography">Appropriate Plant Photography (8 x
                                            10)</option>
                                        <option value="completed_application_form">Completed Application Form</option>
                                        <option value="bankdraft_of_statutory_fees">Bankdraft of Statutory Fees Payable
                                            to FGN-DPR Fees Account</option>
                                        <option value="modification_plant">Modification Plant (If any)</option>
                                        <option value="current_tax_clearance_certificate">Current Tax Clearance</option>
                                        <option value="current_fire_report_certificate">Current Fire Report /
                                            Certificate</option>
                                        <option value="original_license_of_plant">Original License of Plant</option>
                                        <option value="letter_of_release">Letter of Release</option>
                                        <option value="police_report_certificate">Police Report / Certificate</option>
                                        <option value="approved_building_plan">Approved Building Plan</option>
                                        <option value="environment_evaluation_report">Environment Evaluation Report
                                        </option>
                                        <option value="application_letter">Application Letter</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="file" name="project_report">
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-upload"></i>
                                    Upload</button>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </form>
                </div> --}}

                {{-- <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title" style="text-transform: uppercase">Take Over Inspection Required
                                Documents</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Document Name</th>
                                        <th style="width: 150px">Document Status</th>
                                        <th style="width: 50px">View</th>
                                    </tr>

                                    <tr>
                                        <td>1.</td>
                                        <td>Applications Letter for Suitability Inspection</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Article and Memorandum of Association</td>
                                        <td><i class="fa fa-close text-red"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Current Tax Clearance</td>
                                        <td><i class="fa fa-close text-red"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Certificate of Incorporation</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Fire Certificate</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Police Report / Certificate</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Completed Application Form</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Approved Building Plan</td>
                                        <td><i class="fa fa-close text-red"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Survey Plan</td>
                                        <td><i class="fa fa-close text-red"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Deed of Conveyance</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>Piping and Instrumentation Diagram</td>
                                        <td><i class="fa fa-close text-red"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Environmental Impact Assessment</td>
                                        <td><i class="fa fa-close text-red"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>Letter of Confirmation from Ministry of Lands and Survey</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>15.</td>
                                        <td>Codes and Standard Adopted in the Tank Design</td>
                                        <td><i class="fa fa-close text-red"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Application Letter Addressed to the Controller DPR</td>
                                        <td><i class="fa fa-check text-green"></i></td>
                                        <td><i class="fa fa-eye"></i></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div> --}}



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

</script>

@endsection
