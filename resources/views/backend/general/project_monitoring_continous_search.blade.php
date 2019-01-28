@extends('layout.master')

@section('title')
  DPR Access | Project Monitoring Continous
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
          Project Monitoring | continous | search
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-12">
            <div class="box box-navy">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Company</th>
                      <th>Project</th>
                      <th>License Type</th>
                      <th>Proposed Date</th>
                      <th>Actual Date</th>
                      <th>DPR Rep 1</th>
                      <th>DPR Rep 2</th>
                      <th>DPR Rep 3</th>
                      <th>PP</th>
                      <th><i class="fa fa-gears text-black"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    @for ($i = 0; $i < 500; $i++)
                    <tr>
                      <td>Oando Gas</td>
                      <td>Warri underground grid</td>
                      <td>FEED</td>
                      <td>Sep 2, 2016</td>
                      <td>Sep 11, 2016</td>
                      <td>Isaac Oruma</td>
                      <td>Franz Ajayi</td>
                      <td>Felix Irabor</td>
                      <td>65%</td>
                      <td><a type="button" href="/pm_continous_edit" class="btn btn-block btn-default">Edit</a></td>
                    </tr>
                    @endfor
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
