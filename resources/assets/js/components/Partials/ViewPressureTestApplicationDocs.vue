<template>
  <ul class="todo-list ui-sortable">
    <li class="list-group-item">
      <b>Application Letter</b>
      <a
        :href="`/displayDocument?pic=/storage/pressure_test_docs/${ application_details.applicationID.marketer_id }/${ application_details.applicationID.company_name }/${ application_details.applicationID.application_id }/${ application_details.applicationID.application_letter_location_url }`"
        class="pull-right"
        target="_blank"
      >
        <i class="fa fa-eye" style="font-size: 18px;"></i>
      </a>
    </li>
    <br>
    <li class="list-group-item" id="pt_style">
      <b>Equipment Name</b>
      <a class="pull-right">{{ application_details.applicationID.equipment_name }}</a>
    </li>
    <br>
    <li class="list-group-item" id="pt_style">
      <b>Test Type</b>
      <a class="pull-right">{{ application_details.applicationID.test_type }}</a>
    </li>
    <br>
    <li class="list-group-item" id="pt_style">
      <b>Manufacture Year</b>
      <a class="pull-right">{{ application_details.applicationID.manufacture_year }}</a>
    </li>
    <br>
    <li class="list-group-item" id="pt_style">
      <b>Commission Year</b>
      <a class="pull-right">{{ application_details.applicationID.commission_year }}</a>
    </li>
    <br>
    <li class="list-group-item" id="pt_style">
      <b>Design Pressure</b>
      <a class="pull-right">{{ application_details.applicationID.design_pressure }}</a>
    </li>

    <div class="modal fade" id="pressure_doc" style="display: none;">
      <div class="modal-dialog" style="width: 1400px;">
        <div class="modal-content" style="background: transparent;">
          <img
            src="`/storage/pressure_test_docs/${ application_details.applicationReview.marketer_id }/${ application_details.applicationID.atc_application_id }/${ application_details.applicationID.test_certificate_report_location_url }`"
            alt
          >
        </div>
      </div>
    </div>
  </ul>
</template>

<script>
  export default {
    props: ["application_details"]
  };
</script>

<style lang="scss" scoped>
</style>
