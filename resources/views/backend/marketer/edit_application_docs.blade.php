@extends('layout.master')

@section('title')
DPR {{Auth::user()->role}} | Edit Application Documents
@endsection

@section('pagestyles')

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
                Edit Application Documents
                <small>{{Auth::user()->role}} Control panel</small>
            </h1>
        </section>


        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-body box-profile">

                            <h3 class="profile-username text-center">{{ $applicationReview->name_of_gas_plant }}</h3>

                            <p class="text-muted text-center">{{ $applicationReview->application_id }}</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Application type</b> <a
                                        class="pull-right">{{ $applicationReview->application_type }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Sub-category</b> <a class="pull-right">{{ $applicationReview->sub_category }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Plant type</b> <a class="pull-right">{{ $applicationReview->plant_type }}</a>
                                </li>
                                @if($applicationReview->sub_category !== 'Site Suitability Inspection')
                                <li class="list-group-item">
                                    <b>Capacity of tank</b> <a
                                        class="pull-right">{{ $applicationReview->capacity_of_tank }}</a>
                                </li>
                                @endif
                                <li class="list-group-item">
                                    <b>State</b> <a class="pull-right">{{ $applicationReview->state }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>L.G.A</b> <a class="pull-right">{{ $applicationReview->lga }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Town</b> <a class="pull-right">{{ $applicationReview->town }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Address</b> <a class="pull-right">{{ $applicationReview->address }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Date</b> <a
                                        class="pull-right">{{ $applicationReview->created_at->diffForHumans() }}</a>
                                </li>
                                <a href="/mDocument_review/{{ $applicationReview->id }}"
                                    class="btn bg-maroon btn-block">Preview Application</a>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Update Application Data</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/edit_document_application"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div>
                                    <div class="form-group">
                                        <label>Name of Gas Plant</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ion-ios-list-outline"></i></span>
                                            <input type="text" name="gas_plant_name" class="form-control"
                                                placeholder="Enter Name of Gas Plant"
                                                value="{{ $applicationReview->name_of_gas_plant }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Plant Type</label>
                                        <select class="form-control select2" name="plant_type" style="width: 100%;">
                                            <option selected="selected">Select Type</option>
                                            <option value="Refilling Plant">Refilling Plant</option>
                                            <option value="Industrial Plant">Industrial Plant</option>
                                            <option value="Auto Gas Plant">Auto Gas Plant</option>
                                        </select>
                                    </div>
                                    @if($applicationReview->sub_category !== 'Site Suitability Inspection')

                                    <div class="form-group" id="capacity_of_tank">
                                        <label>Capacity of Tank (MT)</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ion-beaker"></i></span>
                                            <input type="text" name="capacity_of_tank" class="form-control"
                                                placeholder="Enter Capacity of tank"
                                                value="{{ $applicationReview->capacity_of_tank }}">
                                        </div>
                                    </div>
                                    @endif
                                    <state-component></state-component>
                                    <div class="form-group">
                                        <label>Town</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ion ion-location"></i></span>
                                            <input type="text" name="town" class="form-control" placeholder="Enter Town"
                                                value="{{ $applicationReview->town }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ion ion-location"></i></span>
                                            <input type="text" name="address" class="form-control"
                                                placeholder="Enter Address" value="{{ $applicationReview->address }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" hidden name="application_id"
                                value="{{ $applicationReview->application_id }}">
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>






            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Modify Uploads</h3>
                            @if ($applicationReview->sub_category == "ATC"
                            || $applicationReview->sub_category == "LTO"
                            || $applicationReview->sub_category == "Renewal"
                            || $applicationReview->sub_category == "Take Over")
                            <div class="tools pull-right" data-toggle="modal" data-target="#reason"
                                style="cursor: pointer;">
                                <i class="fa fa-edit text-red"></i>
                            </div>
                            @endif
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/edit_document_upload" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="modal modal-danger fade" id="reason">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Specify a reason why this document is not
                                                    available</h4>
                                            </div>
                                            <div class="modal-body" style="padding: 5px;">
                                                <textarea name="reason" rows="8" cols="80"
                                                    style="width: 100%; resize: none; height: 200px; color: #000; padding: 5px;"
                                                    placeholder="Give reason..."></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline"
                                                    data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($applicationReview->sub_category == "ATC" || $applicationReview->sub_category ==
                                "Site Suitability Inspection")
                                <div class="form-group">
                                    <label>Select Document to modify</label>
                                    <select class="form-control select2" name="doc_type" style="width: 100%;">
                                        <option selected="selected" value="null">Select Document</option>
                                        <option value="applications_letter_for_suitability_inspection">Applications
                                            Letter for Suitability Inspection</option>
                                        <option value="article_and_memorandum_of_association">Article and Memorandum of
                                            Association</option>
                                        <option value="current_tax_clearance">Current Tax Clearance</option>
                                        <option value="certificate_of_incorporation">Certificate of Incorporation
                                        </option>
                                        <option value="fire_certificate">Fire Certificate</option>
                                        <option value="police_report">Police Report / Certificate</option>
                                        <option value="completed_application_form">Completed Application Form</option>
                                        <option value="approved_building_plan">Approved Building Plan</option>
                                        <option value="survey_plan">Survey Plan</option>
                                        <option value="deed_of_conveyance">Deed of Conveyance</option>
                                        <option value="piping_and_instrumentation_diagram">Piping and Instrumentation
                                            Diagram</option>
                                        <option value="environmental_impact_accessment">Environmental Impact Assessment
                                        </option>
                                        <option value="bankdraft_of_statutory_fees">Bankdraft of Statutory Fees Payable
                                            to FGN-DPR Fees Account</option>
                                        <option value="letter_confirmation_ministry_of_lands_and_survey">Letter of
                                            Confirmation from Ministry of Lands and Survey</option>
                                        <option value="codes_and_standard_adopted_in_the_tank_design">Codes and Standard
                                            Adopted in the Tank Design</option>
                                        <option value="application_letter_addressed_to_the_controller">Application
                                            Letter Addressed to the Controller DPR</option>
                                    </select>
                                </div>
                                @elseif ($applicationReview->sub_category == "LTO")
                                <div class="form-group">
                                    <label>Select Document to modify</label>
                                    <select class="form-control select2" name="doc_type" style="width: 100%;">
                                        <option selected="selected" value="null">Select Document</option>
                                        <option value="completed_application_form">Completed Application Form</option>
                                        <option value="bankdraft_of_statutory_fees">Bankdraft of Statutory Fees Payable
                                            to FGN-DPR Fees Account</option>
                                        <option value="photocopy_of_approval_to_construct_lpg">Photocopy of Approval to
                                            Constuct LPG (ATC)</option>
                                        <option value="current_weight_measures_cert_of_verification">Current Weight &
                                            Measures Certificate of Verification</option>
                                        <option value="application_letter_addressed_to_the_controller">Application
                                            Letter Addressed to the Controller DPR</option>
                                        <option value="fire_report_certificate">Fire Report / Certificate</option>
                                        <option value="current_pressure_test_report_certificate">Current Pressure Test
                                            Report / Certificate</option>
                                        <option value="current_three_years_income_tax_clearance">Current Three Years
                                            Income Tax Clearance</option>
                                        <option value="appropriate_plant_photography">Appropriate Plant Photography (8 x
                                            10)</option>
                                        <option value="standard_operating_procedure">Standard Operating Procedure
                                        </option>
                                    </select>
                                </div>
                                @elseif ($applicationReview->sub_category == "Take Over")
                                <div class="form-group">
                                    <label>Select Document to modify</label>
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
                                @endif


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
                                    <input style="display: none;" type="file" id="updatedDocument"
                                        name="updatedDocument">
                                </div>
                                <input type="text" hidden name="application_id"
                                    value="{{ $applicationReview->application_id }}">
                                <input type="text" hidden name="marketer_id"
                                    value="{{ $applicationReview->marketer_id }}">
                                <input type="text" hidden name="sub_category"
                                    value="{{ $applicationReview->sub_category }}">

                                {{-- <m-app-doc-rev-upload-component>

                </m-app-doc-rev-upload-component> --}}
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('partials.base_footer')
</div>
@endsection

@section('pagescript')


@endsection
