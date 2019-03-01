@extends('layout.master')

@section('title')
  DPR Team Lead | Application Review / Assignment
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


    @include('partials.backend_aside_all')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Application Review / Assignment
          <small>Team Lead Control panel</small>
        </h1>
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-body box-profile">

                @if ($applicationReview->sub_category == "CAT-D LTO")
                  
                  <h3 class="profile-username text-center">{{ $applicationReview->company->company_name }}</h3>
                @else
                  
                  <h3 class="profile-username text-center">{{ $applicationReview->name_of_gas_plant }}</h3>
                @endif
                <p class="text-muted text-center">{{ $applicationReview->application_id }}</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Application type</b> <a class="pull-right">{{ $applicationReview->application_type }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Sub-category</b> <a class="pull-right">{{ $applicationReview->sub_category }}</a>
                  </li>
                  @if ($applicationReview->sub_category == "CAT-D LTO")
                    <li class="list-group-item">
                      <b>No. of Bottles</b> <a class="pull-right">{{ $applicationID->catdLtoApplicationExtention['no_of_bottles'] }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Name of Sponsoring Company</b> <a class="pull-right">{{ $applicationID->catdLtoApplicationExtention['sponsoring_company'] }}</a>
                    </li>
                  @else
                  <li class="list-group-item">
                    <b>Plant type</b> <a class="pull-right">{{ $applicationReview->plant_type }}</a>
                  </li>
                  @endif
                  
                  @if ($applicationReview->sub_category == "LTO" || $applicationReview->sub_category == "Renewal" || $applicationReview->sub_category == "ADD-ON LTO")
                    <li class="list-group-item">
                      <b>Capacity of tank</b> <a class="pull-right">{{ $applicationReview->capacity_of_tank }}</a>
                    </li>
                  @endif
                  {{--  <li class="list-group-item">
                    <b>Plant type</b> <a class="pull-right">{{ $applicationReview->plant_type }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Capacity of tank</b> <a class="pull-right">{{ $applicationReview->capacity_of_tank }}</a>
                  </li>  --}}
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
                    @if ($applicationReview->sub_category == 'Site Suitability Inspection')
                      @if ($reportDocument)
                        <form role="form" method="post" action="/tlApproves">
                          {{ csrf_field() }}
                          <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                          <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                          <input type="text" hidden name="marketer_id" value="{{ $applicationReview->marketer_id }}">
                          <input type="text" hidden name="company_id" value="{{ $reportDocument->company_id }}">
                          <input type="text" hidden name="staff_id" value="{{ $reportDocument->staff_id }}">
                          <input type="text" hidden name="report_url" value="{{ $reportDocument->report_url }}">
                          <input type="text" hidden name="inboxID" value="{{ $inboxItem->id }}">
                          <div class="box-footer">
                            <input type="submit" name="decline" value="Decline" class="pull btn btn-danger">
                            <input type="submit" name="approve" value="Approve" class="pull-right btn btn-success">
                          </div>
                        </form>
                      @endif
                    @endif
                  @endif
                  

                  
                  
                  @if ($applicationStatus != null)
                    @if ($applicationReview->to_team_lead == "received" || $applicationReview->to_team_lead == "completed")
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
                        @if ($applicationReview->sub_category == 'Site Suitability Inspection')
                          <form role="form" method="post" action="/tlApproves">
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
                        @elseif ($applicationStatus->to_head_gas != "true")
                          <form role="form" method="post" action="/up_to_headgas">
                            {{ csrf_field() }}
                            <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                            <div class="box-footer">
                              <input type="text" hidden name="staff_id" value="{{ $reportDocument->staff_id }}">
                              <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                              <input type="text" hidden name="application_type" value="{{ $applicationReview->application_type }}">
                              <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                              <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                              <input type="submit" name="sendToHeadGas" value="Send to Head Gas" class="pull-left btn btn-success">
                              <input type="submit" name="sendToStaff" value="Send to Staff" class="pull-right btn btn-danger">
                            </div>
                          </form>
                        @endif
                      @endif
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
          {{--  <div class="col-md-8">
            @if ($applicationReview->application_status == "Application Pending")
              @if ($applicationStatus->job_application_status == "Started")
              @else
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Select Staff To Assign</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Staff ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($staffs as $staff)
                        <tr>
                          <td class="sorting_1"><a class="label label-success" style="font-size: 14px;">{{ $staff->staff_id }}</a></td>
                          <td>{{ $staff->first_name }}</td>
                          <td>{{ $staff->last_name }}</td>
                          <td>{{ $staff->email_address }}</td>
                          <td>{{ $staff->mobile_number }}</td>
                          <td>
                            <form action="/tlDocument_assign" method="post">
                              {{ csrf_field() }}
                              <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                              <input type="text" hidden name="application_type" value="{{ $applicationReview->application_type }}">
                              <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                              <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                              <input type="text" hidden name="staff_id" value="{{ $staff->staff_id }}">
                              @if (optional($applicationStatus)->job_application_status == "Assigned")
                                <input type="submit" class="btn btn-danger" value="Re-Assign" style="padding: 2px 25px;">
                              @else
                                <input type="submit" class="btn btn-primary" value="Assign" style="padding: 2px 25px;">
                              @endif

                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              @endif
              
            @endif

          </div>  --}}
          <div class="col-md-8">
            <div class="box box-primary">
              <!-- /.box-header -->
              <div class="box-body">
                @if($applicationReview->sub_category == 'Site Suitability Inspection' || $applicationReview->sub_category == 'ATC')
                  @include('partials.m_view_application_docs')
                @elseif($applicationReview->sub_category == 'LTO')
                  @include('partials.m_view_application_docs_lto')
                @elseif($applicationReview->sub_category == 'ADD-ON ATI')
                  @include('partials.m_view_application_docs_addon_ati')
                @elseif($applicationReview->sub_category == 'ADD-ON LTO')
                  @include('partials.m_view_application_docs_addon_lto')
                @elseif($applicationReview->sub_category == 'CAT-D LTO')
                  @include('partials.m_view_application_docs_catd_lto')
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
    $('#example1').DataTable({
      'ordering'    : false,
    });
  })
  </script>
@endsection
