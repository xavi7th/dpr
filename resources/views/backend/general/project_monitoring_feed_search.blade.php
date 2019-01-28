@extends('layout.master')

@section('title')
  DPR Access | Project Monitoring FEED
@endsection

@section('pagestyles')
<style>
  hr{
    border-top: 1px solid #ccc;
  }

  #caps{
    text-transform: uppercase;
  }

  .small-box h3{
    font-size: 24px;
    text-transform: uppercase;
  }
  
  .widget-user-2 .widget-user-username{
    font-size: 24px;
    font-weight: bold;
    margin-left: 0;
    text-transform: uppercase;
  }

  .widget-user-2 .widget-user-username, .widget-user-2 .widget-user-desc{
    margin-left: 0;
  }

  .small-box .icon{
    font-size: 70px;
  }

  .small-box:hover .icon{
    font-size: 70px;
    color: #fff;
  }

  .small-box p{
    visibility: hidden;
  }

  .btn-app{
    margin: 10px 0 10px 0;
  }
  
  .hider{
    visibility: hidden;
  }
</style>
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
        <h1 id="caps">
          Project Monitoring | feed | search
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-2">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-light-blue-active">
                {{--  <div class="widget-user-image">
                  <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>  --}}
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Statisctics</h3>
                {{--  <h5 class="widget-user-desc hider">Statisctics</h5>  --}}
              </div>
              <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                  <li><a href="#">Total Records <span class="pull-right"><b>{{$users->count()}}</b></span></a></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- ./col -->
          <div class="col-md-10">
            <div class="box box-navy">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Name of Plant</th>
                      <th>State</th>
                      <th>Permit Type</th>
                      <th>Status</th>
                      <th>Date Submitted</th>
                      {{--  <th>Date Sent to Lagos</th>  --}}
                      <th>Date Issued</th>
                      <th>Expiry Date</th>
                      <th><i class="fa fa-gears text-black"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $item)
                    <tr>
                      {{--  <td>Oando Gas</td>  --}}
                      <td>{{$item->company}}</td>
                      <td>{{$item->myState}}</td>
                      <td>FEED</td>
                      <td>{{$item->status}}</td>
                      <td>{{$item->monthName}} {{$item->dayOfMonth}}, {{$item->year}}</td>
                      {{--  <td>{{$item->monthName1}} {{$item->dayOfMonth1}}, {{$item->year1}}</td>  --}}
                      @if ($item->status == 'Issued')
                      <td>{{$item->monthName2}} {{$item->dayOfMonth2}}, {{$item->year2}}</td>
                      <td>{{$item->monthName3}} {{$item->dayOfMonth3}}, {{$item->year3}}</td>
                      @else
                      <td>---</td>
                      <td>---</td>
                      @endif
                      <td><a type="button" href="/pm_feed_edit" class="btn btn-block btn-default">Edit</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            {{-- <router-view></router-view> --}}

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
  $.widget.bridge('uibutton', $.ui.button);
</script>
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
