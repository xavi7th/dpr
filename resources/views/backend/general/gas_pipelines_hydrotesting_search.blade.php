@extends('layout.master')

@section('title')
  DPR | Hydro Testing
@endsection

@section('pagestyles')
@endsection

@section('content')
  <div class="wrapper">

    @include('partials.backend_top_nav_all')


    @if (Auth::user()->role == 'Marketer')
      @include('partials.backend_aside_marketer')
    @elseif (Auth::user()->role == 'Admin')
      @include('partials.backend_aside_admin')
    @elseif (Auth::user()->role == 'Staff')
      @include('partials.backend_aside_all')
    @elseif (Auth::user()->role == 'Team Lead')
      @include('partials.backend_aside_teamlead')
    @elseif (Auth::user()->role == 'Head Gas M&G Lagos')
      @include('partials.backend_aside_headgas')
    @elseif (Auth::user()->role == 'ADO')
      @include('partials.backend_aside_ado')
    @elseif (Auth::user()->role == 'ZOPSCON')
      @include('partials.backend_aside_zopscon')
    @endif

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Hydro Testing
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Application ID</th>
                    <th>Company Name</th>
                    <th>Category</th>
                    <th>Facility</th>
                    <th>Tag No.</th>
                    <th>State</th>
                    <th>Length</th>
                    <th>Diameter</th>
                    <th>Capacity</th>
                    <th>Year Commissioned</th>
                    <th>Date Tested</th>
                    <th>Due Date</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>

          </div>
          <!-- ./col -->
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
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
 $(function () {
    $('#example1').DataTable({
      'ordering'    : false,
    });
  })
</script>
@endsection
