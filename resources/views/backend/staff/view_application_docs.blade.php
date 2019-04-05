@extends('layout.master')

@section('title')
  DPR Staff | Application Review
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

    
  .hider{
    visibility: hidden;
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
          Application Review
          <small>Staff Control panel</small>
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
                  <li class="list-group-item">
                    <b>Application Status</b>
                    <a class="pull-right text-red">{{ $applicationStatus->job_application_status }}</a>
                  </li>
                
                  {{--  @if ($reportDocument)
                  <li class="list-group-item">
                    <b>Uploaded Report</b>
                    <a href="/displayDocument?pic=/storage/comp_reports/{{ $reportDocument->company_id }}/{{ $reportDocument->staff_id }}/{{ $reportDocument->application_id }}/{{ $reportDocument->report_url }}" class="pull-right"><i class="fa fa-eye" style="font-size: 18px;"></i></a>
                  </li>
                  @endif  --}}
                  @if (optional($issuedAtcLicense)->implementation_schedule != null)
                    <li class="list-group-item">
                      <b>Implementation Schedule</b>
                      <a href="/displayDocument?pic=/storage/implementation_schedules/{{ $issuedAtcLicense->company_id }}/{{ $issuedAtcLicense->application_id }}/{{ $issuedAtcLicense->implementation_schedule }}" class="pull-right"><i class="fa fa-eye" style="font-size: 18px;"></i></a>
                    </li>
                  @endif
                  @if ($applicationReview->sub_category == 'LTO' && $activePressureTest)
                    <div class="box box-primary">
                      <div class="box-body box-profile">

                        <h3 class="profile-username text-center">Pressure Test Record</h3>

                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <b>Date Tested</b> <a class="pull-right">{{ Carbon\Carbon::parse($activePressureTest->date_last_tested)->toFormattedDateString() }}</a>
                          </li>
                          <li class="list-group-item">
                            <b>Due Date</b> <a class="pull-right">{{ Carbon\Carbon::parse($activePressureTest->due_date)->toFormattedDateString() }}</a>
                          </li>
                          <li class="list-group-item">
                            <b>Pressure Test Status</b>
                            <a class="pull-right text-green">Active</a>
                          </li>
                          <li class="list-group-item">
                            <b>Current Active License</b>
                            <a href="/displayDocument?pic=/storage/license_docs/{{ $activePressureTest->company_name }}/{{ $activePressureTest->application_id }}/{{ $activePressureTest->license_url }}" class="pull-right"><i class="fa fa-eye" style="font-size: 18px;"></i></a>
                          </li>
                        </ul>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  @endif
                  @if (optional($inboxItem)->to_outbox == 'false')
                    @if (optional($issuedAtcLicense)->implementation_schedule != null)
                    <form role="form" method="post" action="/construction_started">
                      {{ csrf_field() }}
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                      <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                      <input type="text" hidden name="inbox_id" value="{{ $inboxID }}">
                      <div class="box-footer">
                        <input type="submit" name="to_teamlead" value="Click if Construction work has started" class="pull btn btn-success btn-block">
                      </div>
                    </form>
                    @else
                    <form role="form" method="post" action="/open_assign_tree">
                      {{ csrf_field() }}
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                      <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                      <input type="text" hidden name="inbox_id" value="{{ $inboxID }}">
                      <div class="box-footer">
                        <input type="submit" name="to_teamlead" value="Forward Application" class="pull btn btn-primary btn-block">
                      </div>
                    </form>
                    @endif
                  @endif
                </ul>
              </div>
              <!-- /.box-body -->
            </div>
            
            {{--  @if ($applicationStatus->job_application_status == 'ATC Issued')
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Upload ATC follow up Document</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="/stUpload_construction_report" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Construction Document</label>
                    <input type="file" name="reportDocument">
                    <input type="text" hidden name="company_id" value="{{ $applicationReview->company_id }}">
                    <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                    <input type="text" hidden name="staff_id" value="{{ Auth::user()->staff_id }}">
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="pull-right btn btn-default">Upload
                    <i class="fa fa-upload"></i></button>
                  </div>
                </form>
              </div>
            @endif  --}}

            {{--  <div class="modal fade" id="report" style="display: none;">
              <div class="modal-dialog" style="width: 1400px;">
                <div class="modal-content" style="background: transparent;">
                  @if ($reportDocument != null)
                    <img src="/storage/comp_reports/{{ $reportDocument->company_id }}/{{ $reportDocument->staff_id }}/{{ $reportDocument->application_id }}/{{ $reportDocument->report_url }}" alt="">
                  @endif
                </div>
              </div>
            </div>  --}}

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
          <div class="box box-primary">
            <div class="box-header">
              @if ($applicationReview->sub_category == 'Pressure Testing')
                    <h3 class="box-title"><b>Application Details</b></h3>
                @else
                    @if ($applicationReview->sub_category == 'Pressure Testing')
                    <h3 class="box-title"><b>Application Details</b></h3>
                @else
                    @if ($applicationReview->sub_category == 'Pressure Testing')
                    <h3 class="box-title"><b>Application Details</b></h3>
                @else
                    <h3 class="box-title"><b>REQUIRED DOCUMENTS</b></h3>
                @endif
                @endif
                @endif
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
              @elseif($applicationReview->sub_category == 'ADD-ON ATI')
                @include('partials.m_view_application_docs_addon_ati')
              @elseif($applicationReview->sub_category == 'ADD-ON LTO')
                @include('partials.m_view_application_docs_addon_lto')
              @elseif($applicationReview->sub_category == 'CAT-D LTO')
                @include('partials.m_view_application_docs_catd_lto')
              @elseif($applicationReview->sub_category == 'Renewal')
                <li class="list-group-item">
                  <span style="font-weight: 600; font-size: 16px; margin-left: 5px;">COPY OF LAST EXPIRED LICENSE</span>
                  <i class="fa fa-check text-green" style="float: left;"></i>
                  <a href="/displayDocument?pic=/storage/license_docs/{{ $applicationReview->company_id }}/{{ $thisApplicationRenewalDetails->comp_license_id }}/{{ $thisApplicationRenewalDetails->copy_of_last_expired_license_location_url }}" class="btn btn-primary btn-xs pull-right">View</a>
                </li><br>
                @include('partials.m_view_application_docs_lto_renewal')
              @elseif($applicationReview->sub_category == 'Take Over')
                @include('partials.m_view_application_docs_takeover')
              @elseif ($applicationReview->sub_category == 'Pressure Testing')
                @include('partials.m_view_application_docs_pressure_test')
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          @if (optional($inboxItem)->to_outbox == 'false')
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>REPORTS</b></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="/stUpload_report" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label>Type of Report</label>
                      <select class="form-control select2" name="report_type" style="width: 100%;">
                        <option selected="selected">Select</option>
                        <option value="Site Suitability Inspection Report">Site Suitability Inspection Report</option>
                        <option value="Pre-ATC Report">Pre-ATC Report</option>
                        <option value="Final Report">Final Report</option>
                        <option value="Pressure Test Report">Pressure Test Report</option>
                        <option value="Implementation Schedule Report">Implementation Schedule Report</option>
                      </select>
                    </div>
                    <div class="form-group" id="capacity_of_tank">
                      <label>Date report was carried out</label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                          <input type="text" name="date_of_inspection" class="form-control pull-right" id="datepicker1">
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                      {{--  <label for="exampleInputFile">Report Document</label>  --}}
                      <input type="file" name="reportDocument">
                      <input type="text" hidden name="company_id" value="{{ $applicationReview->company_id }}">
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                      <input type="text" hidden name="staff_id" value="{{ Auth::user()->staff_id }}">
                    </div>
                  </div>
                <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="pull-right btn btn-success">Upload Report
                    <i class="fa fa-upload"></i></button>
                  </div>
                </form>
              </div>
          @endif

          @if (optional($applicationStatus)->job_application_status == 'ATC Issued' 
          || optional($applicationStatus)->job_application_status == 'LTO Issued' 
          || optional($applicationStatus)->job_application_status == 'Pressure Test Succesful')
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>Upload License</b></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="/upload_license" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group" style="margin-bottom: 0;">
                      {{--  <label for="exampleInputFile">Report Document</label>  --}}
                      <input type="file" name="licenseDocument">
                      <input type="text" hidden name="company_id" value="{{ $applicationReview->company_id }}">
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                      <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                      <input type="text" hidden name="staff_id" value="{{ Auth::user()->staff_id }}">
                    </div>
                  </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="pull-right btn btn-success">Upload License
                    <i class="fa fa-upload"></i></button>
                  </div>
                </form>
              </div>
          @endif

          @if ($applicationReview->sub_category == 'Pressure Testing')
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>Date Tested</b></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="/set_due_date" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group" style="margin-bottom: 0;">
                      {{--  <label for="exampleInputFile">Report Document</label>  --}}
                      {{--  <input type="file" name="licenseDocument">  --}}
                      <input type="text" hidden name="company_id" value="{{ $applicationReview->company_id }}">
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                      <input type="text" hidden name="manufacture_year" value="{{ $applicationID->manufacture_year }}">
                    </div>
                    <div class="col-xs-12">
                      <div class="form-group">
                        <label>Enter Date Tested</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="date_tested" class="form-control pull-right" id="datepicker2">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="pull-right btn btn-success">Set Due Date</button>
                  </div>
                </form>
              </div>
          @endif
          {{-- <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Upload Certificate</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/stUpload_report" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group" style="margin-bottom: 0;">
                  <label for="exampleInputFile">Select Document to upload</label>
                  <input type="file" name="reportDocument">
                  <input type="text" hidden name="company_id" value="{{ $applicationReview->company_id }}">
                  <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                  <input type="text" hidden name="staff_id" value="{{ Auth::user()->staff_id }}">
                </div>
              </div>
            <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="pull-right btn btn-success">Upload Certificate <i class="fa fa-upload"></i></button>
              </div>
            </form>
          </div> --}}
          
          <!-- quick email widget -->
          {{--  <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Message to Marketer</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" hidden name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message"
                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            </div>
          </div>  --}}
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

  //Date picker
    $('#datepicker1').datepicker({
      autoclose: true
    })

    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })
  </script>
@endsection




