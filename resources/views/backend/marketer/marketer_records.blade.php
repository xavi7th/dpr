@extends('layout.master')

@section('title')
  DPR Marketer | Records
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
          My Records
          <small>Maketer Control Panel</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                {{-- <h3 class="box-title">Data Table With Full Features</h3> --}}
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
                    <th>Capacity of Tank</th>
                    <th>State</th>
                    <th>L.G.A</th>
                    <th>Town</th>
                    <th>Address</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($appDocReviews as $item)
                      <tr>
                        <td class="sorting_1"><a href="/document_review/{{ $item->id }}">{{ $item->application_id }}</a></td>
                        <td>{{ $item->name_of_gas_plant }}</td>
                        <td>{{ $item->application_type }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>{{ $item->plant_type }}</td>
                        <td>{{ $item->capacity_of_tank }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->lga }}</td>
                        <td>{{ $item->town }}</td>
                        <td>{{ $item->address }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
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
@stop
