@extends('layout.master')

@section('title')
    DPR Access | Project Monitoring Permit and Consent
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
        Project Monitoring | Permit and Consent | Edit
    </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <form role="form" method="POST" action="/edit_document_upload" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Select Document to modify</label>
                            <select class="form-control select2" name="doc_type" style="width: 100%;">
                                <option selected="selected" value="null">Select Document</option>
                                <option value="applications_letter_for_suitability_inspection">Oil Industry Service Company Permits (General / Specialised / Other Specilaised categories)</option>
                                <option value="article_and_memorandum_of_association">Permit to Survey Pipeline Route - Production Flowlines</option>
                                <option value="current_tax_clearance">FEED Approval</option>
                                <option value="certificate_of_incorporation">Detailed Design Approval (including metering selection system)</option>
                                <option value="fire_certificate">Environmental Impact Accessment</option>
                                <option value="police_report">Carry Out Comprehensive Risk Analysis</option>
                                <option value="completed_application_form">Obtain Approval for SIMOPS</option>
                                <option value="approved_building_plan">Notification of Factory Acceptance test for meters and prover loop calibration for DPR participation</option>
                                <option>Notification and Approval to comission custody transfer meters(Both Oil and Gas) </option>
                                <option>Calibration Certificates / Tables</option>
                                <option>Notify DPR of Appointment of Operations Manager, resident in Nigeria responsible for all operations under license </option>
                                <option>Environmental Permit for waste management facilities </option>
                                <option>Permission from NGC to Hookup/Tie in</option>
                                <option>Approval for pipeline crossing existing facilities</option>
                                <option>Oil pipeline license (OPL)</option>
                                <option>Notify DPR of appoinment of competent persons</option>
                                <option>Approval to introduce Hydrocarbon</option>
                                <option>Set up monitoring programme to verify the quality of the water and sediments within the fields during the production phase</option>
                                <option>Submit Statutory Operation Manual</option>
                                <option>Pre-commissioning / Comissioning approval</option>
                                <option>Consent to Flare</option>
                                <option>Secure mothballing procedure approval for Saghara</option>
                                <option>Project Technical Review</option>
                                <option>Submission of effluent / emmisions treatment systems and methods used for sampling and measurement to DPR for approval (WASTE PERMIT)</option>
                                <option>Set up procedures to sample and analyse effluent / emmisions weekly with reporting monthly to DPR requirments (ENGASPIN 2002)</option>
                                <option>Permit for Diesel Tank Storage</option>
                                <option>Reliability Tests - License / Permit to Operate Facility</option>
                            </select>
                        </div>
                        <div class="form-group">
                            {{--  <label>Project Report</label>  --}}
                            <div class="input-group">
                                <input type="file" name="project_report">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-upload"></i> Upload</button>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title" style="text-transform: uppercase">Oando Project | Permit and Consent Required Documents</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Description of Approval / Links</th>
                                <th style="width: 150px">Document Status</th>
                                <th style="width: 50px">View</th>
                            </tr>
                            
                            <tr>
                                <td>1.</td>
                                <td>Oil Industry Service Company Permits (General / Specialised / Other Specilaised categories)</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Permit to Survey Pipeline Route - Production Flowlines</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>FEED Approval</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Detailed Design Approval (including metering selection system)</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Environmental Impact Accessment</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Carry Out Comprehensive Risk Analysis</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Obtain Approval for SIMOPS</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td>Notification of Factory Acceptance test for meters and prover loop calibration for DPR participation</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td>Notification and Approval to comission custody transfer meters (Both Oil and Gas)</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td>Calibration Certificates / Tables</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>11.</td>
                                <td>Notify DPR of Appointment of Operations Manager, resident in Nigeria responsible for all operations under license</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>12.</td>
                                <td>Environmental Permit for waste management facilities</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>13.</td>
                                <td>Permission from NGC to Hookup/Tie in</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>14.</td>
                                <td>Approval for pipeline crossing existing facilities</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>15.</td>
                                <td>Oil pipeline license (OPL)</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>16.</td>
                                <td>Notify DPR of appoinment of competent persons</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>17.</td>
                                <td>Approval to introduce Hydrocarbon</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>18.</td>
                                <td>Set up monitoring programme to verify the quality of the water and sediments within the fields during the production phase</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>19.</td>
                                <td>Submit Statutory Operation Manual</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>20.</td>
                                <td>Pre-commissioning / Comissioning approval</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>21.</td>
                                <td>Consent to Flare</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>22.</td>
                                <td>Secure mothballing procedure approval for Saghara</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>23.</td>
                                <td>Project Technical Review</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>24.</td>
                                <td>Project Technical Review</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>25.</td>
                                <td>Set up procedures to sample and analyse effluent / emmisions weekly with reporting monthly to DPR requirments (ENGASPIN 2002)</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>26.</td>
                                <td>Permit for Diesel Tank Storage</td>
                                <td><i class="fa fa-check text-green"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td>27.</td>
                                <td>Reliability Tests - License / Permit to Operate Facility</td>
                                <td><i class="fa fa-close text-red"></i></td>
                                <td><i class="fa fa-eye"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        </form>
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