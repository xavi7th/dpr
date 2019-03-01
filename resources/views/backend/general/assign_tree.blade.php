@extends('layout.master')

@section('title')
  DPR {{ Auth::user()->office }} | Application Review / Assignment
@endsection

@section('pagestyles')
  <style>
    #pt_style b{
      font-size: 20px;
    }
    #pt_style a{
      font-size: 20px;
      color: red;
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
          DPR {{ Auth::user()->office }} Staff List
        </h1>
      </section>


      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Surname</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
                    <th>Role</th>
                    <th>Assign</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($staffs as $staff)
                      <tr>
                        <td class="sorting_1">{{ $staff->first_name }}</td>
                        <td>{{ $staff->middle_name }}</td>
                        <td>{{ $staff->surname }}</td>
                        <td>{{ $staff->email_address }}</td>
                        <td>{{ $staff->mobile_number }}</td>
                        <td>{{ $staff->role }}</td>
                        <td>
                            <form role="form" action="/send_job" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="staff_id" hidden value="{{ $staff->staff_id }}"> {{-- i.e dprst00001312 --}}
                                <input type="text" name="application_id" hidden value="{{ $applicationID }}"> {{-- app_doc_review id.... i.e dprapplication00001312 --}}
                                <input type="text" name="appID" hidden value="{{ $appID }}"> {{-- index of the application in app_doc_review table --}}
                                <input type="text" name="inboxID" hidden value="{{ $inboxID }}"> {{-- index of the application from the inbox table --}}
                                <input type="text" name="role" hidden value="{{ $staff->role }}"> {{-- the staff's role --}}
                                <input type="submit" value="Send" class="pull btn btn-primary btn-block">
                            </form>
                        </td>
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
  <!-- page script -->
  <script>
 $(function () {
    $('#example1').DataTable({
      'ordering'    : false,
    });
  })
  </script>
@endsection

{{--  <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Surname</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
                    <th>Role</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($staffs as $staff)
                      <tr>
                        <td class="sorting_1">{{ $staff->first_name }}</td>
                        <td>{{ $staff->middle_name }}</td>
                        <td>{{ $staff->surname }}</td>
                        <td>{{ $staff->email_address }}</td>
                        <td>{{ $staff->mobile_number }}</td>
                        <td>{{ $staff->role }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>  --}}
