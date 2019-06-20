@extends('layout.master')

@section('title')
  DPR {{Auth::user()->role}} | Requirement For Approval to Construct
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


    @include('partials.backend_aside_all')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Approval to Construct (ATC)
          <small>{{Auth::user()->role}} Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Old Application Document Review Contd.</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form id="site_ver_inspection_req" role="form" method="POST" action="/old_atc_req_upload" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                  {{-- Site Verification Inspection Report --}}
                  <atc-inspection-upload-component title="Applications Letter for Suitability Inspection" reason="ALFSI_reason" name="ALFSI" inputid="ALFSI_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Article and Memorandum of Association" reason="AMA_reason" name="AMA" inputid="AMA_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Current Tax Clearance" reason="CTC_reason" name="CTC" inputid="CTC_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Certificate of Incorporation" reason="CI_reason" name="CI" inputid="CI_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Fire Certificate" reason="FC_reason" name="FC" inputid="FC_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Police Report / Certificate" reason="PRC_reason" name="PRC" inputid="PRC_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Completed Application Form" reason="CAF_reason" name="CAF" inputid="CAF_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Approved Building Plan" reason="ABP_reason" name="ABP" inputid="ABP_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Survey Plan" reason="SP_reason" name="SP" inputid="SP_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Deed of Conveyance" reason="DC_reason" name="DC" inputid="DC_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Piping and Instrumentation Diagram" reason="PID_reason" name="PID" inputid="PID_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Environmental Impact Assessment" reason="EIA_reason" name="EIA" inputid="EIA_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" reason="BSFP_reason" name="BSFP" inputid="BSFP_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Letter of Confirmation from Ministry of Lands and Survey" reason="LCMLS_reason" name="LCMLS" inputid="LCMLS_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Codes and Standard Adopted in the Tank Design" reason="CSATD_reason" name="CSATD" inputid="CSATD_doc"></atc-inspection-upload-component>

                  <atc-inspection-upload-component title="Application Letter Addressed to the Controller DPR" reason="ALACD_reason" name="ALACD" inputid="ALACD_doc"></atc-inspection-upload-component>

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

  $( '#saveCont' ).click( evt => {
        evt.preventDefault();
        /**
         * Call $.post() here instead so that we can check if the sumbit was successful before showing the next step prompt
         */

        $.post( '/old_atc_req_upload', $( "#saveContForm" ).serialize() ).done( rsp => {

            swal
                .fire( {
                    title: "How would you like to proceed?",
                    text: "Old data inputs",
                    type: "question",
                    showCancelButton: true,
                    confirmButtonText: "<i class='fa fa-thumbs-up'></i> Add LTO data",
                    cancelButtonText: "Exit to main menu",
                    // cancelButtonColor: "#d33",
                    reverseButtons: false
                } )
                .then( result => {
                    if ( result.value ) {
                        location.assign( "/prev_lto_record_get" );
                    } else if ( result.dismiss === swal.DismissReason.cancel ) {
                        location.assign( "/previous_records" );
                    }
                } );


        } ).fail( err => {
            console.log( err );
            swal.fire( 'Error', 'We couldn\'t make the request. Try Again',
                'error' );
        } )


        /**
         * Show next step prompt
         */



    } )
  </script>

@endsection
