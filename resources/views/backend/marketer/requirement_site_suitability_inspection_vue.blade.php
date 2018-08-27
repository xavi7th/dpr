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
      <sic></sic>
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
  {{-- <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
  </script> --}}

@endsection
