@extends('layout.master')

@section('title')
  DPR ADO | Application Review / Assignment
@endsection

@section('pagestyles')

@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_ado')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Application Review / Assignment
          <small>ADO Control panel</small>
        </h1>
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-body box-profile">

                <h3 class="profile-username text-center" style="text-transform: capitalize;">{{ $applicationReview->name_of_gas_plant }}</h3>

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
                    <b>Application Date</b> <a class="pull-right">{{ $applicationReview->created_at->diffForHumans() }}</a>
                  </li>

                  @if ($applicationReview->to_head_gas == 'true')
                    <li class="list-group-item">
                      <b>Status <i class="fa fa-check-circle text-green"></i></b> <a class="pull-right">Forwarded to Head Gas M&G Lagos</a>
                    </li>
                  @endif

                  @if ($applicationReview->to_head_gas != 'true')
                    <form role="form" method="post" action="/push_down_to_headgas">
                      {{ csrf_field() }}
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                      <div class="box-footer">
                        <input type="submit" name="to_headgas" value="Forward to Head Gas" class="pull btn btn-primary btn-block">
                      </div>
                    </form>
                  @endif

                  @if ($applicationStatus != null)
                    <li class="list-group-item">
                      <b>Application Status</b>
                      @if ($reportDocument != null)
                        <div class="box-tools pull-right tools" data-toggle="modal" data-target="#report" style="position: relative; bottom: 5px;">
                          <button type="button" class="btn btn-box-tool"><i class="fa fa-eye" style="font-size: 18px;"></i></button>
                        </div>
                      @endif
                      <a class="pull-right text-red">{{ $applicationStatus->job_application_status }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Staff Assigned <i class="fa fa-check-circle text-green"></i></b> <a class="pull-right text-green">{{ $applicationStatus->staff_id }}</a>
                    </li>
                    @if ($applicationStatus->job_application_status == "Report Submitted")
                      <form role="form" method="post" action="/ado_decides">
                        {{ csrf_field() }}
                        <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                        <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                        <input type="text" hidden name="marketer_id" value="{{ $applicationReview->marketer_id }}">
                        <input type="text" hidden name="company_id" value="{{ $reportDocument->company_id }}">
                        <input type="text" hidden name="staff_id" value="{{ $reportDocument->staff_id }}">
                        <input type="text" hidden name="report_url" value="{{ $reportDocument->report_url }}">
                        <div class="box-footer">
                          <input type="submit" name="decline" value="Decline" class="pull btn btn-danger">
                          <input type="submit" name="approve" value="Approve" class="pull-right btn btn-success">
                        </div>
                      </form>
                    @endif
                  @endif
                </ul>
                <div class="modal fade" id="report" style="display: none;">
                  <div class="modal-dialog" style="width: 1400px;">
                    <div class="modal-content" style="background: transparent;">
                      @if ($reportDocument != null)
                        <img src="/storage/comp_reports/{{ $reportDocument->company_id }}/{{ $reportDocument->staff_id }}/{{ $reportDocument->application_id }}/{{ $reportDocument->report_url }}" alt="">
                      @endif
                    </div>
                  </div>
                </div>
              </div>

              <!-- /.box-body -->
            </div>
            <div class="box box-primary direct-chat direct-chat-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Report Comments</h3>
                <div class="box-tools pull-right">
                  <span data-toggle="tooltip" title="" class="badge bg-blue" data-original-title="{{ $applicationComments->count() }} Comments">{{ $applicationComments->count() }}</span>
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  @foreach ($applicationComments as $comment)
                    <div>
                      <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name pull-left" style="text-transform: capitalize;">{{ $comment->staff['first_name'] }} {{ $comment->staff['last_name'] }} <i class="text-yellow"><b>({{ $comment->staff['role'] }})</b></i></span>
                          <span class="direct-chat-timestamp pull-right">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <!-- /.direct-chat-info -->
                        <img class="direct-chat-img" src="/dist/img/user1-128x128.jpg" alt="message user image">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                          {{ $comment->comment }}
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                      <!-- /.direct-chat-msg -->
                      <br>
                    </div>
                  @endforeach


                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <form action="/make_report_comment" method="post">
                  {{ csrf_field() }}
                  <div class="input-group">
                    <input type="text" name="comment" placeholder="Type Message ..." class="form-control" required>
                    <input type="text" name="application_id" hidden value="{{ $applicationReview->application_id }}">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary btn-flat">Make Comment</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.box-footer-->
            </div>
          </div>



          <div class="col-md-8">

            {{-- @if (optional($applicationStatus)->job_application_status != "Started")
              @if (optional($applicationStatus)->job_application_status != "Report Submitted")
                @if (optional($applicationStatus)->job_application_status != "Site Suitable")
                  @if (optional($applicationStatus)->job_application_status != "Pending Approval")
                    @include('partials.staff_assign')
                  @endif
                @endif
              @endif
            @endif --}}
          </div>



          <div class="col-md-8">
            <div class="box box-primary">
              <!-- /.box-header -->
              <div class="box-body">
                {{-- <ul class="todo-list ui-sortable">
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
  <!-- page script -->
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>
@endsection
