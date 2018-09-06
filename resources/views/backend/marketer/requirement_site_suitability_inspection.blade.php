@extends('layout.master')

@section('title')
  DPR Marketer | Requirement For Site Suitability Inspection
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


    @include('partials.backend_aside_marketer')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Requirement For Site Suitability Inspection
          <small>Marketer Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Application Document Review Contd.</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form id="site_ver_inspection_req" role="form" method="POST" action="/site_suit_req_upload" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                  {{-- Site Verification Inspection Report --}}
                  <app-doc-rev-upload-component title="Site Verification Inspection Report" name="SVIR" inputid="SVIR_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Article and Memorandum of Association" name="AMA" inputid="AMA_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Current Tax Clearance" name="CTC" inputid="CTC_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Certificate of Incorporation" name="CI" inputid="CI_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Fire Certificate" name="FC" inputid="FC_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Police Report / Certificate" name="PRC" inputid="PRC_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Completed Application Form" name="CAF" inputid="CAF_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Approved Building Plan" name="ABP" inputid="ABP_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Survey Plan" name="SP" inputid="SP_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Deed of Conveyance" name="DC" inputid="DC_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Piping and Instrumentation Diagram" name="PID" inputid="PID_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Environmental Impact Assessment" name="EIA" inputid="EIA_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" name="BSFP" inputid="BSFP_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Letter of Confirmation from Ministry of Lands and Survey" name="LCMLS" inputid="LCMLS_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Codes and Standard Adopted in the Tank Design" name="CSATD" inputid="CSATD_doc"></app-doc-rev-upload-component>

                  <app-doc-rev-upload-component title="Application Letter Addressed to the Controller DPR" name="ALACD" inputid="ALACD_doc"></app-doc-rev-upload-component>

                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" style="float: right;">Submit Application Document</button>
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
