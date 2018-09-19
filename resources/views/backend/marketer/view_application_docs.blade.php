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
          Application Documents
          <small>Marketer Control panel</small>
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
                  <b>Application type</b> <a class="pull-right">{{ $applicationReview->application_type }}</a>
                </li>
                <li class="list-group-item">
                  <b>Sub-category</b> <a class="pull-right">{{ $applicationReview->sub_category }}</a>
                </li>
                <li class="list-group-item">
                  <b>Plant type</b> <a class="pull-right">{{ $applicationReview->plant_type }}</a>
                </li>
                <li class="list-group-item">
                  <b>Capacity of tank</b> <a class="pull-right">{{ $applicationReview->capacity_of_tank }}</a>
                </li>
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
                  <b>Date</b> <a class="pull-right">{{ $applicationReview->created_at->diffForHumans() }}</a>
                </li>
                @if ($applicationReview->application_status)
                  <li class="list-group-item">
                    <b>Status</b> <a class="pull-right">{{ $applicationReview->application_status }}</a>
                    @if($applicationReview->application_status == 'Site Suitable' || $applicationReview->application_status == 'ATC Issued')
                      <i class="fa fa-check text-green"></i>
                    @elseif ($applicationReview->application_status == 'Site NOT Suitable' || $applicationReview->application_status == 'ATC Not Issued')
                      <i class="fa fa-close text-red"></i>
                    @endif
                  </li>
                @endif
                <br>
                @if ($applicationReview->application_status == 'Not Submitted')
                  <form class="" action="/mSubmitApplication" method="post">
                    {{ csrf_field() }}
                    <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                    <button type="submit" class="btn btn-primary btn-block">Submit Application</button>
                  </form>
                @endif
                @if ($applicationReview->application_status == 'Site Suitable')
                  <form class="" action="/apply_for_atc" method="post">
                    {{ csrf_field() }}
                    <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                    <button type="submit" class="btn btn-primary btn-block">Apply For ATC</button>
                  </form>
                @endif
                @if ($applicationReview->application_status == 'ATC Issued')
                  <form class="" action="/apply_for_lto" method="post">
                    {{ csrf_field() }}
                    <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                    <button type="submit" class="btn btn-primary btn-block">Apply For LTO</button>
                  </form>
                @endif
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <div class="col-md-8">
            <div class="box box-primary">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                <h3 class="box-title">Application ID: {{ $applicationID->application_id }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                {{-- <ul class="todo-list ui-sortable">
                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->applications_letter_for_suitability_inspection_location_url }}" title="Applications Letter for Suitability Inspection" nameval="{{$applicationID->applications_letter_for_suitability_inspection}}" modality="ALFS" reason="a" reasonspecified="{{$applicationID->applications_letter_for_suitability_inspection_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->article_and_memorandum_of_association_location_url }}" title="Article and Memorandum of Association" nameval="{{$applicationID->article_and_memorandum_of_association}}" modality="AMA" reason="b" reasonspecified="{{$applicationID->article_and_memorandum_of_association_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->current_tax_clearance_location_url }}" title="Current Tax Clearance" nameval="{{$applicationID->current_tax_clearance}}" modality="CTC" reason="c" reasonspecified="{{$applicationID->current_tax_clearance_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->certificate_of_incorporation_location_url }}" title="Certificate of Incorporation" nameval="{{$applicationID->certificate_of_incorporation}}" modality="CI" reason="d" reasonspecified="{{$applicationID->certificate_of_incorporation_resaon}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->fire_certificate_location_url }}" title="Fire Certificate" nameval="{{$applicationID->fire_certificate}}" modality="FC" reason="e" reasonspecified="{{$applicationID->fire_certificate_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->police_report_location_url }}" title="Police Report / Certificate" nameval="{{$applicationID->police_report}}" modality="PRC" reason="f" reasonspecified="{{$applicationID->police_report_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->completed_application_form_location_url }}" title="Completed Application Form" nameval="{{$applicationID->completed_application_form}}" modality="CAF" reason="g" reasonspecified="{{$applicationID->completed_application_form_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->approved_building_plan_location_url }}" title="Approved Building Plan" nameval="{{$applicationID->approved_building_plan}}" modality="ABP" reason="h" reasonspecified="{{$applicationID->approved_building_plan_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->survey_plan_location_url }}" title="Survey Plan" nameval="{{$applicationID->survey_plan}}" modality="SP" reason="i" reasonspecified="{{$applicationID->survey_plan_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->deed_of_conveyance_location_url }}" title="Deed of Conveyance" nameval="{{$applicationID->deed_of_conveyance}}" modality="DC" reason="j" reasonspecified="{{$applicationID->deed_of_conveyance_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->piping_and_instrumentation_diagram_location_url }}" title="Piping and Instrumentation Diagram" nameval="{{$applicationID->piping_and_instrumentation_diagram}}" modality="PID" reason="k" reasonspecified="{{$applicationID->piping_and_instrumentation_diagram_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->environmental_impact_accessment_location_url }}" title="Environmental Impact Assessment" nameval="{{$applicationID->environmental_impact_accessment}}" modality="EIA" reason="l" reasonspecified="{{$applicationID->environmental_impact_accessment_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->bankdraft_of_statutory_fees_location_url }}" title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" nameval="{{$applicationID->bankdraft_of_statutory_fees}}" modality="BSFP" reason="m" reasonspecified="{{$applicationID->bankdraft_of_statutory_fees_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->letter_confirmation_ministry_of_lands_and_survey_location_url }}" title="Letter of Confirmation from Ministry of Lands and Survey" nameval="{{$applicationID->letter_confirmation_ministry_of_lands_and_survey}}" modality="LCMLS" reason="n" reasonspecified="{{$applicationID->letter_confirmation_ministry_of_lands_and_survey_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->codes_and_standard_adopted_in_the_tank_design_location_url }}" title="Codes and Standard Adopted in the Tank Design" nameval="{{$applicationID->codes_and_standard_adopted_in_the_tank_design}}" modality="CSATD" reason="o" reasonspecified="{{$applicationID->codes_and_standard_adopted_in_the_tank_design_reason}}"></m-view-application-docs>

                  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->application_letter_addressed_to_the_controller_location_url }}" title="Application Letter Addressed to the Controller DPR" nameval="{{$applicationID->application_letter_addressed_to_the_controller}}" modality="ALACD" reason="p" reasonspecified="{{$applicationID->application_letter_addressed_to_the_controller_reason}}"></m-view-application-docs>
                </ul> --}}
                @if($applicationReview->sub_category == 'Site Suitability Inspection' || $applicationReview->sub_category == 'ATC')
                  @include('partials.m_view_application_docs')
                @elseif($applicationReview->sub_category == 'LTO')
                  @include('partials.m_view_application_docs_lto')
                @endif
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
