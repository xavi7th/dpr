@extends('layout.master')

@section('title')
  DPR {{Auth::user()->role}} | View Application Documents
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
          Application Documents
          <small>{{Auth::user()->role}} Control panel</small>
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
                    <b>Date</b> <a class="pull-right">{{ Carbon\Carbon::parse($applicationReview->created_at)->toFormattedDateString() }}</a>
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
                  @if (optional($licenseRenewalDetail)->application_status == 'Application Pending')
                    <li class="list-group-item">
                      <b>Renewal Status</b> <a class="pull-right">{{ $licenseRenewalDetail->application_status }}</a>
                      <i class="fa fa-close text-red"></i>
                    </li>
                  @endif
                  <br>
                  @if ($applicationReview->application_status == 'Not Submitted')
                    <form class="" action="/mSubmitApplication" method="post">
                      {{ csrf_field() }}
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->id }}">
                      <input type="text" hidden name="application_type" value="{{ $applicationReview->application_type }}">
                      <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}">
                      <button type="submit" class="btn btn-primary btn-block">Submit Application</button>
                    </form>
                  @else
                    @if ($applicationReview->application_status == 'Site Suitable')
                      <form class="" action="/apply_for_atc" method="post">
                        {{ csrf_field() }}
                        <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                        <button type="submit" class="btn btn-primary btn-block">Apply For ATC</button>
                      </form>
                    @endif
                    {{--  do not delete this please
                    @if ($applicationReview->sub_category == 'ATC' && $applicationReview->application_status != 'LTO Issued')
                      <form class="" action="/apply_for_lto" method="post">
                        {{ csrf_field() }}
                        <div class="form-group" id="capacity_of_tank">
                          <label>Capacity of Tank (MT)</label>
                          <div class="input-group">
                              <span class="input-group-addon"><i class="ion-beaker"></i></span>
                              <input type="text" name="capacity_of_tank" class="form-control" placeholder="Enter Capacity of tank">
                          </div>
                        </div>
                        <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                        <button type="submit" class="btn btn-primary btn-block">Apply For LTO</button>
                      </form>
                    @endif  --}}
                    @if ($applicationReview->sub_category == 'ATC' && $applicationReview->application_status == 'ATC Issued')
                      <form class="" action="/apply_for_lto" method="post">
                        {{ csrf_field() }}
                        <div class="form-group" id="capacity_of_tank">
                          <label>Capacity of Tank (MT)</label>
                          <div class="input-group">
                              <span class="input-group-addon"><i class="ion-beaker"></i></span>
                              <input type="text" name="capacity_of_tank" class="form-control" placeholder="Enter Capacity of tank">
                          </div>
                        </div>
                        <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                        <button type="submit" class="btn btn-primary btn-block">Apply For LTO</button>
                      </form>
                    @endif
                    @if ($applicationReview->sub_category == 'ADD-ON ATI' && $applicationReview->application_status == 'ATI Issued')
                      <form class="" action="/apply_for_lto" method="post">
                        {{ csrf_field() }}
                        <div class="form-group" id="capacity_of_tank">
                          <label>Capacity of Tank (MT)</label>
                          <div class="input-group">
                              <span class="input-group-addon"><i class="ion-beaker"></i></span>
                              <input type="text" name="capacity_of_tank" class="form-control" placeholder="Enter Capacity of tank">
                          </div>
                        </div>
                        <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                        <button type="submit" class="btn btn-primary btn-block">Apply For ADD-ON LTO</button>
                      </form>
                    @endif
                  @endif

                </ul>
              </div>
              <!-- /.box-body -->
            </div>
            @if ($licenseDetail != null)
              @if (now()->gte($licenseDetail->expiry_date) || now()->addMonths(3)->gte($licenseDetail->expiry_date))
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">License Renewal</h3>
                    @if ($applicationReview->sub_category == "ATC")
                      <div class="tools pull-right" data-toggle="modal" data-target="#reason" style="cursor: pointer;">
                        <i class="fa fa-edit text-red"></i>
                      </div>
                    @endif
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form" method="POST" action="/apply_for_lto_renewal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                        <label style="text-transform: uppercase;">Copy of Last Expired License</label>
                        <input type="file" name="COLEL_doc">
                      </div>
                      <hr>
                      <div class="form-group">
                        <label style="text-transform: uppercase;">Payment Receipt</label>
                        <input type="file" name="PR_doc">
                      </div>
                      <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                      <input type="text" hidden name="marketer_id" value="{{ $applicationReview->marketer_id }}">
                      {{-- <input type="text" hidden name="sub_category" value="{{ $applicationReview->sub_category }}"> --}}
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary pull-right">Apply For License Renewal</button>
                    </div>
                    <!-- /.box-footer -->
                  </form>
                </div>
              @endif
            @endif

          </div>
          <div class="col-md-8">
            <div class="box box-primary">
              <div class="box-header ui-sortable-handle" style="cursor: move;">
                {{--  <h3 class="box-title">Application ID: {{ optional($applicationID)->application_id }}</h3>  --}}
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
              {{--  @elseif($applicationReview->sub_category == 'Renewal')
                @include('partials.m_view_application_docs_lto_renewal')  --}}
              @elseif($applicationReview->sub_category == 'Take Over')
                @include('partials.m_view_application_docs_takeover')
              @elseif($applicationReview->sub_category == 'Pressure Testing')
                {{-- @include('partials.m_view_application_docs_takeover') --}}
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


{{--  <form action="/openDocument" method="POST">
  {{ csrf_field() }}
  <input type="text" hidden value="" name="">
  <button type="submit" class="btn btn-primary pull-right">View</button>
</form>  --}}