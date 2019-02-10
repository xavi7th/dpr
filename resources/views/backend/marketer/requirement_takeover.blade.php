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
          Take Over
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
              <form id="site_ver_inspection_req" role="form" method="POST" action="/takeover_req_upload" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">

                  <takeover-inspection-upload-component title="Article And Memorandum Of Association" reason="AAMOA_reason" name="AAMOA" inputid="AAMOA_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Certificate of Incorporation" reason="CI_reason" name="CI" inputid="CI_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Weight and Measures Verification Certificate" reason="WAMVC_reason" name="WAMVC" inputid="WAMVC_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Current Pressure Test Report / Certificate" reason="CPTRC_reason" name="CPTRC" inputid="CPTRC_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Appropriate Plant Photography (8 x 10)" reason="APP_reason" name="APP" inputid="APP_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Completed Application Form" reason="CAF_reason" name="CAF" inputid="CAF_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" reason="BSFP_reason" name="BSFP" inputid="BSFP_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Modification Plant (If any)" reason="MP_reason" name="MP" inputid="MP_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Current Tax Clearance" reason="CTC_reason" name="CTC" inputid="CTC_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Current Fire Report / Certificate" reason="CFRC_reason" name="CFRC" inputid="CFRC_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Original License of Plant" reason="OLP_reason" name="OLP" inputid="OLP_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Letter of Release" reason="LOR_reason" name="LOR" inputid="LOR_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Police Report / Certificate" reason="PRC_reason" name="PRC" inputid="PRC_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Approved Building Plan" reason="ABP_reason" name="ABP" inputid="ABP_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Environment Evaluation Report" reason="EER_reason" name="EER" inputid="EER_doc"></takeover-inspection-upload-component>

                  <takeover-inspection-upload-component title="Application Letter" reason="AL_reason" name="AL" inputid="AL_doc"></takeover-inspection-upload-component>

                  {{--  <takeover-inspection-upload-component title="Standard Operating Procedure (SOP)" reason="SOP_reason" name="SOP" inputid="SOP_doc"></takeover-inspection-upload-component>  --}}

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
