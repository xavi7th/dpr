<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Select Staff To Assign</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Staff ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email Address</th>
          <th>Mobile Number</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($staffs as $staff)
          <tr>
            <td class="sorting_1"><a class="label label-success" style="font-size: 14px;">{{ $staff->staff_id }}</a></td>
            <td>{{ $staff->first_name }}</td>
            <td>{{ $staff->last_name }}</td>
            <td>{{ $staff->email_address }}</td>
            <td>{{ $staff->mobile_number }}</td>
            <td>
              <form action="/tlDocument_assign" method="post">
                {{ csrf_field() }}
                <input type="text" hidden name="application_id" value="{{ $applicationReview->application_id }}">
                <input type="text" hidden name="staff_id" value="{{ $staff->staff_id }}">
                @if (optional($applicationStatus)->job_application_status == "Assigned")
                  <input type="submit" class="btn btn-danger" value="Re-Assign" style="padding: 2px 25px;">
                @else
                  <input type="submit" class="btn btn-primary" value="Assign" style="padding: 2px 25px;">
                @endif

              </form>
              {{-- <a href="/tlDocument_assign/{{ $applicationReview->id }}" class="label label-danger" style="font-size: 13px;">Assign</a> --}}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
