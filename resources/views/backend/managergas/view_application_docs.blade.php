@extends('layout.master')

@section('title')
  DPR Manager Gas | Application Review / Assignment
@endsection

@section('pagestyles')
  <style>
    #pt_style b{
      font-size: 20px;
    }
    #pt_style a{
      font-size: 20px;
      color: red;
    }
  </style>
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @include('partials.backend_aside_managergas')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Application Review / Assignment
          <small>Manager Gas Control panel</small>
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
                  @if (optional($applicationStatus)->job_application_status)
                      <li class="list-group-item">
                        <b>Staff Assigned <i class="fa fa-check-circle text-green"></i></b> <a class="pull-right text-green">{{ $applicationStatus->staff_id }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Application Status</b><a class="pull-right text-red">{{ $applicationStatus->job_application_status }}</a>
                      </li>
                  @endif
                  @if ($reportDocument)
                    <li class="list-group-item">
                      <b>Uploaded Report</b>
                      <a href="/displayDocument?pic=/storage/comp_reports/{{ $reportDocument->company_id }}/{{ $reportDocument->staff_id }}/{{ $reportDocument->application_id }}/{{ $reportDocument->report_url }}" class="pull-right"><i class="fa fa-eye" style="font-size: 18px;"></i></a>
                    </li>
                  @endif
                  @if (optional($inboxItem)->to_outbox == 'false')
                    <form role="form" method="post" action="/open_assign_tree">
                      {{ csrf_field() }}
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                      <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                      <input type="text" hidden name="inbox_id" value="{{ $inboxID }}">
                      <div class="box-footer">
                        <input type="submit" name="to_teamlead" value="Forward Application" class="pull btn btn-primary btn-block">
                      </div>
                    </form>
                    @if ($applicationReview->sub_category == 'ATC')
                      @if ($reportDocument)
                        <form role="form" method="post" action="/managergas_decides">
                          {{ csrf_field() }}
                          <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                          <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                          <input type="text" hidden name="marketer_id" value="{{ $applicationReview->marketer_id }}">
                          <input type="text" hidden name="company_id" value="{{ $reportDocument->company_id }}">
                          <input type="text" hidden name="staff_id" value="{{ $reportDocument->staff_id }}">
                          <input type="text" hidden name="report_url" value="{{ $reportDocument->report_url }}">
                          <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                          <input type="text" hidden name="inboxID" value="{{ $inboxItem->id }}">
                          <input type="text" hidden name="application_type" value="{{ $applicationReview->application_type }}">
                          <div class="box-footer">
                            <input type="submit" style="margin-right: 2px;" name="decline" value="Decline" class="pull-left btn btn-danger">
                            <input type="submit" name="approve" value="Issue License" class="pull-right btn btn-success">
                          </div>
                        </form>
                      @endif
                    @endif
                    @if ($applicationReview->sub_category == 'LTO')
                      @if ($reportDocument)
                        <form role="form" method="post" action="/send_job_to_hq">
                          {{ csrf_field() }}
                          <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                          <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                          <input type="text" hidden name="marketer_id" value="{{ $applicationReview->marketer_id }}">
                          <input type="text" hidden name="company_id" value="{{ $reportDocument->company_id }}">
                          <input type="text" hidden name="staff_id" value="{{ $reportDocument->staff_id }}">
                          <input type="text" hidden name="report_url" value="{{ $reportDocument->report_url }}">
                          <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                          <input type="text" hidden name="inboxID" value="{{ $inboxItem->id }}">
                          <input type="text" hidden name="application_type" value="{{ $applicationReview->application_type }}">
                          <div class="box-footer">
                            <input type="submit" name="to_teamlead" value="Send To HQ" class="pull btn btn-success btn-block">
                          </div>
                        </form>
                      @endif
                    @endif
                  @endif

                  {{--  @if ($applicationStatus != null)
                    @if ($applicationReview->to_head_gas == "received" || $applicationReview->to_head_gas == "completed")
                      <li class="list-group-item">
                        <b>Application Status</b>
                        @if ($reportDocument)
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
                        <form role="form" method="post" action="/hgApproves">
                          {{ csrf_field() }}
                          <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                          <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                          <input type="text" hidden name="marketer_id" value="{{ $applicationReview->marketer_id }}">
                          <input type="text" hidden name="company_id" value="{{ $reportDocument->company_id }}">
                          <input type="text" hidden name="staff_id" value="{{ $reportDocument->staff_id }}">
                          <input type="text" hidden name="report_url" value="{{ $reportDocument->report_url }}">
                          <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                          <input type="text" hidden name="application_type" value="{{ $applicationReview->application_type }}">
                          <div class="box-footer">
                            <input type="submit" style="margin-right: 2px;" name="decline" value="Decline" class="pull-left btn btn-danger">
                            <input type="submit" name="approve" value="Approve" class="pull-left btn btn-success">
                            <input type="submit" style="margin-left: 2px;" name="sendToADO" value="To ADO" class="pull-right btn btn-primary">
                            <input type="submit" name="sendToTeamLead" value="To Team Lead" class="pull-right btn btn-primary">
                          </div>
                        </form>
                      @endif
                    @endif
                  @endif  --}}
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
              <div class="box-header">
                <h3 class="box-title"><b>REQUIRED DOCUMENTS</b></h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                @if($applicationReview->sub_category == 'Site Suitability Inspection' || $applicationReview->sub_category == 'ATC')
                  @include('partials.m_view_application_docs')
                @elseif($applicationReview->sub_category == 'LTO')
                  @include('partials.m_view_application_docs_lto')
                @elseif($applicationReview->sub_category == 'Renewal')
                  @include('partials.m_view_application_docs_lto_renewal')
                @elseif($applicationReview->sub_category == 'Take Over')
                  @include('partials.m_view_application_docs_takeover')
                @elseif ($applicationReview->sub_category == 'Pressure Testing')
                  @include('partials.m_view_application_docs_pressure_test')
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
