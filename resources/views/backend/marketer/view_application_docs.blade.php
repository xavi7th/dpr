@extends('layout.master')

@section('title')
  DPR Marketer | View Application Documents
@endsection

@section('pagestyles')

@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_marketer')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          View Application Documents
          <small>Marketer Control panel</small>
        </h1>
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <h3 class="box-title">Application ID: {{ $applicationID->application_id }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list ui-sortable">
                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->applications_letter_for_suitability_inspection_location_url }}" title="Applications Letter for Suitability Inspection" nameval="{{$applicationID->applications_letter_for_suitability_inspection}}" modality="ALFS"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->article_and_memorandum_of_association_location_url }}" title="Article and Memorandum of Association" nameval="{{$applicationID->article_and_memorandum_of_association}}" modality="AMA"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->current_tax_clearance_location_url }}" title="Current Tax Clearance" nameval="{{$applicationID->current_tax_clearance}}" modality="CTC"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->certificate_of_incorporation_location_url }}" title="Certificate of Incorporation" nameval="{{$applicationID->certificate_of_incorporation}}" modality="CI"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->fire_certificate_location_url }}" title="Fire Certificate" nameval="{{$applicationID->fire_certificate}}" modality="FC"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->police_report_location_url }}" title="Police Report / Certificate" nameval="{{$applicationID->police_report}}" modality="PRC"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->completed_application_form_location_url }}" title="Completed Application Form" nameval="{{$applicationID->completed_application_form}}" modality="CAF"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->approved_building_plan_location_url }}" title="Approved Building Plan" nameval="{{$applicationID->approved_building_plan}}" modality="ABP"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->survey_plan_location_url }}" title="Survey Plan" nameval="{{$applicationID->survey_plan}}" modality="SP"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->deed_of_conveyance_location_url }}" title="Deed of Conveyance" nameval="{{$applicationID->deed_of_conveyance}}" modality="DC"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->piping_and_instrumentation_diagram_location_url }}" title="Piping and Instrumentation Diagram" nameval="{{$applicationID->piping_and_instrumentation_diagram}}" modality="PID"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->environmental_impact_accessment_location_url }}" title="Environmental Impact Assessment" nameval="{{$applicationID->environmental_impact_accessment}}" modality="EIA"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->bankdraft_of_statutory_fees_location_url }}" title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" nameval="{{$applicationID->bankdraft_of_statutory_fees}}" modality="BSFP"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->letter_confirmation_ministry_of_lands_and_survey_location_url }}" title="Letter of Confirmation from Ministry of Lands and Survey" nameval="{{$applicationID->letter_confirmation_ministry_of_lands_and_survey}}" modality="LCMLS"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->codes_and_standard_adopted_in_the_tank_design_location_url }}" title="Codes and Standard Adopted in the Tank Design" nameval="{{$applicationID->codes_and_standard_adopted_in_the_tank_design}}" modality="CSATD"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->application_letter_addressed_to_the_controller_location_url }}" title="Application Letter Addressed to the Controller DPR" nameval="{{$applicationID->application_letter_addressed_to_the_controller}}" modality="ALACD"></m-view-application-docs>
                </ul>
              </div>
              <!-- /.box-body -->
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
