@extends('layout.master')

@section('title')
  DPR Marketer | Requirement For License to Operate
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
          License to Operate (LTO)
          <small>Marketer Control panel</small>
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
              <form id="site_ver_inspection_req" role="form" method="POST" action="/lto_req_upload" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">

                  <lto-inspection-upload-component title="Completed Application Form" reason="CAF_reason" name="CAF" inputid="CAF_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" reason="BSFP_reason" name="BSFP" inputid="BSFP_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Photocopy of Approval to Constuct LPG (ATC)" reason="PACLPG_reason" name="PACLPG" inputid="PACLPG_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Current Weight & Measures Certificate of Verification" reason="CWMCV_reason" name="CWMCV" inputid="CWMCV_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Application Letter Addressed to the Controller DPR" reason="ALACD_reason" name="ALACD" inputid="ALACD_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Fire Report / Certificate" reason="FRC_reason" name="FRC" inputid="FRC_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Current Pressure Test Report / Certificate" reason="CPTRC_reason" name="CPTRC" inputid="CPTRC_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Current Three Years Income Tax Clearance" reason="CTYITC_reason" name="CTYITC" inputid="CTYITC_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Appropriate Plant Photography (8 x 10)" reason="APP_reason" name="APP" inputid="APP_doc"></lto-inspection-upload-component>

                  <lto-inspection-upload-component title="Standard Operating Procedure" reason="SOP_reason" name="SOP" inputid="SOP_doc"></lto-inspection-upload-component>

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
