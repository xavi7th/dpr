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
                  <li class="list-group-item">
                    <b>Application Status</b>
                    @if ($reportDocument != null)
                      <div class="box-tools pull-right tools" data-toggle="modal" data-target="#report" style="position: relative; bottom: 5px;">
                        <button type="button" class="btn btn-box-tool"><i class="fa fa-eye" style="font-size: 18px;"></i></button>
                      </div>
                    @endif
                    <a class="pull-right text-red">{{ $applicationStatus->job_application_status }}</a>
                  </li>

                    @if ($reportDocument != null)
                      <li class="list-group-item">
                        <form role="form" method="post" action="/up_to_teamlead">
                          {{ csrf_field() }}
                          <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                          <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                          <input type="text" hidden name="marketer_id" value="{{ $applicationReview->marketer_id }}">
                          <input type="text" hidden name="application_type" value="{{ $applicationReview->application_type }}">
                          <input type="text" hidden name="id" value="{{ $applicationReview->id }}">
                          <input type="text" hidden name="company_id" value="{{ $reportDocument->company_id }}">
                          <input type="text" hidden name="staff_id" value="{{ $reportDocument->staff_id }}">
                          <input type="text" hidden name="report_url" value="{{ $reportDocument->report_url }}">
                          <div class="box-footer">
                            <input type="submit" name="upToTeamlead" value="Send to Team Lead" class="pull-right btn btn-primary">
                          </div>
                        </form>
                      </li>
                    @endif

                  {{-- <h3 class="box-title">Job Assigned <i class="fa fa-check-circle text-green"></i> {{ $applicationReview->marketer_id }}</h3> --}}
                </ul>
              </div>
              <!-- /.box-body -->
            </div>
            @if ($applicationStatus->job_application_status == 'ATC Issued')
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
            @else
              @if ($applicationReview->to_staff == 'true' || $applicationReview->to_staff == 'received')
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Upload Report</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="/stUpload_report" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputFile">Report Document</label>
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
              @endif
            @endif

            <div class="modal fade" id="report" style="display: none;">
              <div class="modal-dialog" style="width: 1400px;">
                <div class="modal-content" style="background: transparent;">
                  @if ($reportDocument != null)
                    <img src="/storage/comp_reports/{{ $reportDocument->company_id }}/{{ $reportDocument->staff_id }}/{{ $reportDocument->application_id }}/{{ $reportDocument->report_url }}" alt="">
                  @endif
                </div>
              </div>
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
          <div class="box box-primary">
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
          <!-- quick email widget -->
          <div class="box box-info">
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
