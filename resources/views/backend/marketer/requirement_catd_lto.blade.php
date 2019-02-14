@extends('layout.master')

@section('title')
  DPR {{Auth::user()->role}} | Requirement For CAT-D License to Operate
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
          Addon License to Operate (ADD-ON-LTO)
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
              <form id="site_ver_inspection_req" role="form" method="POST" action="/catd_lto_req_upload" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                  
                  <catd-lto-inspection-upload-component title="Letter from Sponsoring Company" reason="LFSC_reason" name="LFSC" inputid="LFSC_doc"></catd-lto-inspection-upload-component>

                  <catd-lto-inspection-upload-component title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" reason="BSFP_reason" name="BSFP" inputid="BSFP_doc"></catd-lto-inspection-upload-component>

                  <catd-lto-inspection-upload-component title="Verification Inspection" reason="VI_reason" name="VI" inputid="VI_doc"></catd-lto-inspection-upload-component>

                  <catd-lto-inspection-upload-component title="Application Letter" reason="AL_reason" name="AL" inputid="AL_doc"></catd-lto-inspection-upload-component>

                  <catd-lto-inspection-upload-component title="Certificate of Incorporation" reason="CI_reason" name="CI" inputid="CI_doc"></catd-lto-inspection-upload-component>

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
