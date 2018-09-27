@extends('layout.master')

@section('title')
  DPR Marketer | Application Document Records
@endsection

@section('pagestyles')

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
          Application Document Records
          <small>Marketer Control panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-3">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{$appDocReviews->count()}}</h3>

                <p>Records</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
        </div>
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
                    <th>Name of Gas Plant</th>
                    <th>Application Type</th>
                    <th>Sub-Category</th>
                    <th>Plant Type</th>
                    <th>Document Status</th>
                    <th>Status</th>
                    <th>Application Date</th>
                    {{-- <th>Mails</th> --}}
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviews as $item)
                      <tr>
                        <td class="sorting_1">
                          @if ($item->application_status == 'Application Pending'
                          || $item->application_status == 'Site Not Suitable'
                          || $item->application_status == 'ATC Not Issued'
                          || $item->application_status == 'LTO Not Issued'
                          || $item->application_status == 'Renewal Declined'
                          || $item->application_status == 'Take Over Not Approved'
                          )
                            <a class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @else
                            <a href="/mDocument_review/{{ $item->id }}" class="label label-success" style="font-size: 14px;">{{ $item->application_id }}</a>
                          @endif
                        </td>
                        <td>{{ $item->name_of_gas_plant }}</td>
                        <td>{{ $item->application_type }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>{{ $item->plant_type }}</td>
                        <td>{{ $item->application_status }}</td>
                        <td>
                          @if ($item->application_status == 'Site Not Suitable'
                          || $item->application_status == 'ATC Not Issued'
                          || $item->application_status == 'LTO Not Issued'
                          || $item->application_status == 'Renewal Declined'
                          || $item->application_status == 'Take Over Not Approved'
                          )
                            <i class="fa fa-close text-red"></i>
                          @elseif ($item->application_status == 'Site Suitable'
                          || $item->application_status == 'ATC Issued'
                          || $item->application_status == 'LTO Issued'
                          || $item->application_status == 'Renewal Approved'
                          || $item->application_status == 'Take Over Approved'
                          )
                            <i class="fa fa-check-circle text-green"></i>
                          @elseif ($item->application_status == 'Application Pending')
                            <i class="fa fa-send text-blue"></i>
                          @else
                            <a href="/mDocument_edit/{{ $item->id }}" class="" style="font-size: 13px;"><i class="fa fa-gears text-black"></i></a>
                          @endif
                        </td>
                        <td>{{ $item->created_at }}</td>
                        {{-- <td><a href="/mDocument_messages/{{ $item->id }}" class="label label-primary" style="font-size: 13px;">View</a></td> --}}
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row (main row) -->

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
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection
