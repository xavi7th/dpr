@extends('layout.master')

@section('title')
  DPR Marketer | Requirement For Site Suitability Inspection
@endsection

@section('pagestyles')
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <style>
    #site_ver_inspection_req #req_ind{
      float: right;
    }

    #site_ver_inspection_req #req{
      text-transform: uppercase;
      font-size: 16px;
    }

    #site_ver_inspection_req #req_ind label{
      margin-left: 20px;
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
      <section class="content" ng-controller="appDocReviewUploadsController">
        <div class="row">
          <div class="col-md-10">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Application Document Review Contd.</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form id="site_ver_inspection_req" role="form" method="POST" action="/test" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                  {{-- Site Verification Inspection Report --}}
                  <application-Document-Review-Upload value="'Site Verification Inspection Report'" name="'SVIR'"></application-Document-Review-Upload>

                  {{-- Article and Memorandum of Association --}}
                  <application-Document-Review-Upload value="'Article and Memorandum of Association'" name="'AMA'"></application-Document-Review-Upload>

                  {{-- Current Tax Clearance --}}
                  <application-Document-Review-Upload value="'Current Tax Clearance'" name="'CTC'"></application-Document-Review-Upload>

                  {{-- Certificate of Incorporation --}}
                  <application-Document-Review-Upload value="'Certificate of Incorporation'" name="'CI'"></application-Document-Review-Upload>

                  {{-- Fire Certificate --}}
                  <application-Document-Review-Upload value="'Fire Certificate'" name="'FC'"></application-Document-Review-Upload>

                  {{-- Police Report / Certificate --}}
                  <application-Document-Review-Upload value="'Police Report / Certificate'" name="'PRC'"></application-Document-Review-Upload>

                  {{-- Completed Application Form --}}
                  <application-Document-Review-Upload value="'Completed Application Form'" name="'CAF'"></application-Document-Review-Upload>

                  {{-- Approved Building Plan --}}
                  <application-Document-Review-Upload value="'Approved Building Plan'" name="'ABP'"></application-Document-Review-Upload>

                  {{-- Survey Plan --}}
                  <application-Document-Review-Upload value="'Survey Plan'" name="'SP'"></application-Document-Review-Upload>

                  {{-- Deed of Conveyance --}}
                  <application-Document-Review-Upload value="'Deed of Conveyance'" name="'DC'"></application-Document-Review-Upload>

                  {{-- Piping and Instrumentation Diagram --}}
                  <application-Document-Review-Upload value="'Piping and Instrumentation Diagram'" name="'PID'"></application-Document-Review-Upload>

                  {{-- Environmental Impact Assessment --}}
                  <application-Document-Review-Upload value="'Environmental Impact Assessment'" name="'EIA'"></application-Document-Review-Upload>

                  {{-- Bankdraft of Statutory Fees Payable to [FGN-DPR Fees Account] --}}
                  <application-Document-Review-Upload value="'Bankdraft of Statutory Fees Payable to [FGN-DPR Fees Account]'" name="'BSFP'"></application-Document-Review-Upload>

                  {{-- Letter of Confirmation from Ministry of Lands and Survey --}}
                  <application-Document-Review-Upload value="'Letter of Confirmation from Ministry of Lands and Survey'" name="'LCMLS'"></application-Document-Review-Upload>

                  {{-- Codes and Standard Adopted in the Tank Design --}}
                  <application-Document-Review-Upload value="'Codes and Standard Adopted in the Tank Design'" name="'CSATD'"></application-Document-Review-Upload>

                  {{-- Application Letter Addressed to the Controller DPR --}}
                  <application-Document-Review-Upload value="'Application Letter Addressed to the Controller DPR'" name="'ALACD'"></application-Document-Review-Upload>

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
      {{-- ion-checkmark-circled --}}
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>
  </div>
@endsection

@section('pagescript')
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- SlimScroll -->
  <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page script -->
  <script src="/js/angular.js"></script>
  <script src="/js/appAngular.js"></script>
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })

  //iCheck for checkbox and radio inputs
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass   : 'iradio_minimal-blue'
  })
  //Red color scheme for iCheck
  $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass   : 'iradio_minimal-red'
  })
  //Flat red color scheme for iCheck
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass   : 'iradio_flat-green'
  })

  </script>
@endsection
