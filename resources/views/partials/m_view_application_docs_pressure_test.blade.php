<ul class="todo-list ui-sortable">
  <li class="list-group-item" id="pt_style">
    <b>Test Certificate / Report</b>
    <div class="box-tools pull-right tools" data-toggle="modal" data-target="#pressure_doc" style="position: relative; bottom: 5px;">
      <button type="button" class="btn btn-box-tool"><i class="fa fa-eye" style="font-size: 18px;"></i></button>
    </div>
  </li>
  <br>
  <li class="list-group-item" id="pt_style">
    <b>Manufacture Year</b> <a class="pull-right">{{ $applicationID->manufacture_year }}</a>
  </li>
  <br>
  <li class="list-group-item" id="pt_style">
    <b>Commission Year</b> <a class="pull-right">{{ $applicationID->commission_year }}</a>
  </li>
  <br>
  <li class="list-group-item" id="pt_style">
    <b>Design Pressure</b> <a class="pull-right">{{ $applicationID->design_pressure }}</a>
  </li>
  <br>
  <li class="list-group-item" id="pt_style">
    <b>Test Pressure</b> <a class="pull-right">{{ $applicationID->test_pressure }}</a>
  </li>
  <br>
  <li class="list-group-item" id="pt_style">
    <b>Date Last Tested</b> <a class="pull-right">{{ Carbon\Carbon::parse($applicationID->date_last_tested)->toFormattedDateString() }}</a>
  </li>
  <br>
  <li class="list-group-item" id="pt_style">
    <b>Due Date</b> <a class="pull-right">{{ Carbon\Carbon::parse($applicationID->due_date)->toFormattedDateString() }}</a>
  </li>
  <div class="modal fade" id="pressure_doc" style="display: none;">
    <div class="modal-dialog" style="width: 1400px;">
      <div class="modal-content" style="background: transparent;">
        <img src="/storage/pressure_test_docs/{{ $applicationReview->marketer_id }}/{{ $applicationID->atc_application_id }}/{{ $applicationID->test_certificate_report_location_url }}" alt="">
      </div>
    </div>
  </div>
</ul>
