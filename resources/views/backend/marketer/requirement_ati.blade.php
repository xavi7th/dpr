@extends('layout.master')

@section('title')
  DPR {{Auth::user()->role}} | Requirement For ADD-ON ATI
@endsection

@section('pagestyles')
  <style>
    #site_ver_inspection_req #req_ind{
      float: right;
    }

    #site_ver_inspection_req #req{
      text-transform: uppercase;
      font-size: 16px;
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


    @include('partials.router_aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          ADD-ON ATI
          <small>{{Auth::user()->role}} Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Application Document Review Contd.</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form id="site_ver_inspection_req" role="form" method="POST" action="/ati_req_upload" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                  {{-- Site Verification Inspection Report --}}
                  <ati-inspection-upload-component title="Suitability Inspection of Proposed Site" reason="SIPS_reason" name="SIPS" inputid="SIPS_doc"></ati-inspection-upload-component>

                  <ati-inspection-upload-component title="Copy of Current Storage and Sales License" reason="CCSSL_reason" name="CCSSL" inputid="CCSSL_doc"></ati-inspection-upload-component>

                  <ati-inspection-upload-component title="Retail Outlet as Built Layout Drawing" reason="ROBLD_reason" name="ROBLD" inputid="ROBLD_doc"></ati-inspection-upload-component>

                  <ati-inspection-upload-component title="Proposed Layout Drawing for the LPG ADDON" reason="PLDLPGA_reason" name="PLDLPGA" inputid="PLDLPGA_doc"></ati-inspection-upload-component>

                  <ati-inspection-upload-component title="Fire Services Report Indicating the LPG ADDON" reason="FSRILPGA_reason" name="FSRILPGA" inputid="FSRILPGA_doc"></ati-inspection-upload-component>

                  <ati-inspection-upload-component title="Environmental Evaluation Report" reason="EER_reason" name="EER" inputid="EER_doc"></ati-inspection-upload-component>

                  <ati-inspection-upload-component title="Relevant Town Planning Approval" reason="RTPA_reason" name="RTPA" inputid="RTPA_doc"></ati-inspection-upload-component>

                  <ati-inspection-upload-component title="Application Letter Addressed to the Controller DPR" reason="ALACD_reason" name="ALACD" inputid="ALACD_doc"></ati-inspection-upload-component>

                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" style="float: right;">Save Application Document</button>
                </div>
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
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
  </script>

@endsection
