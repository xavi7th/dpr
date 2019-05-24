<template>
  <ul class="todo-list ui-sortable">
    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="completed_application_form_location_check"
      :documentCheck=" application_details.applicationID.completed_application_form_location_check "
      :imgurl=" application_details.applicationID.completed_application_form_location_url "
      :targetBlank="true"
      title="Completed Application Form"
      :nameval="application_details.applicationID.completed_application_form"
      modality="CAF"
      reason="a"
      :reasonspecified="application_details.applicationID.completed_application_form_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="bankdraft_of_statutory_fees_location_check"
      :documentCheck=" application_details.applicationID.bankdraft_of_statutory_fees_location_check "
      :imgurl=" application_details.applicationID.bankdraft_of_statutory_fees_location_url "
      :targetBlank="true"
      title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account"
      :nameval="application_details.applicationID.bankdraft_of_statutory_fees"
      modality="BSFP"
      reason="b"
      :reasonspecified="application_details.applicationID.bankdraft_of_statutory_fees_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="photocopy_of_approval_to_construct_lpg_location_check"
      :documentCheck=" application_details.applicationID.photocopy_of_approval_to_construct_lpg_location_check "
      :imgurl=" application_details.applicationID.photocopy_of_approval_to_construct_lpg_location_url "
      :targetBlank="true"
      title="Photocopy of Approval to Constuct LPG (ATC)"
      :nameval="application_details.applicationID.photocopy_of_approval_to_construct_lpg"
      modality="PACLPG"
      reason="c"
      :reasonspecified="application_details.applicationID.photocopy_of_approval_to_construct_lpg_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="current_weight_measures_cert_of_verification_location_check"
      :documentCheck=" application_details.applicationID.current_weight_measures_cert_of_verification_location_check "
      :imgurl=" application_details.applicationID.current_weight_measures_cert_of_verification_location_url "
      :targetBlank="true"
      title="Current Weight & Measures Certificate of Verification"
      :nameval="application_details.applicationID.current_weight_measures_cert_of_verification"
      modality="CWMCV"
      reason="d"
      :reasonspecified="application_details.applicationID.current_weight_measures_cert_of_verification_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="application_letter_addressed_to_the_controller_location_check"
      :documentCheck=" application_details.applicationID.application_letter_addressed_to_the_controller_location_check "
      :imgurl=" application_details.applicationID.application_letter_addressed_to_the_controller_location_url "
      :targetBlank="true"
      title="Application Letter Addressed to the Controller DPR"
      :nameval="application_details.applicationID.application_letter_addressed_to_the_controller"
      modality="ALACD"
      reason="e"
      :reasonspecified="application_details.applicationID.application_letter_addressed_to_the_controller_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="fire_report_certificate_location_check"
      :documentCheck=" application_details.applicationID.fire_report_certificate_location_check "
      :imgurl=" application_details.applicationID.fire_report_certificate_location_url "
      :targetBlank="true"
      title="Fire Report / Certificate"
      :nameval="application_details.applicationID.fire_report_certificate"
      modality="FRC"
      reason="f"
      :reasonspecified="application_details.applicationID.fire_report_certificate_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="current_pressure_test_report_certificate_location_check"
      :documentCheck=" application_details.applicationID.current_pressure_test_report_certificate_location_check "
      :imgurl=" application_details.applicationID.current_pressure_test_report_certificate_location_url "
      :targetBlank="true"
      title="Current Pressure Test Report / Certificate"
      :nameval="application_details.applicationID.current_pressure_test_report_certificate"
      modality="CPTRC"
      reason="g"
      :reasonspecified="application_details.applicationID.current_pressure_test_report_certificate_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="current_three_years_income_tax_clearance_location_check"
      :documentCheck=" application_details.applicationID.current_three_years_income_tax_clearance_location_check "
      :imgurl=" application_details.applicationID.current_three_years_income_tax_clearance_location_url "
      :targetBlank="true"
      title="Current Three Years Income Tax Clearance"
      :nameval="application_details.applicationID.current_three_years_income_tax_clearance"
      modality="CTYITC"
      reason="h"
      :reasonspecified="application_details.applicationID.current_three_years_income_tax_clearance_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="appropriate_plant_photography_location_check"
      :documentCheck=" application_details.applicationID.appropriate_plant_photography_location_check "
      :imgurl=" application_details.applicationID.appropriate_plant_photography_location_url "
      :targetBlank="true"
      title="Appropriate Plant Photography (8 x 10)"
      :nameval="application_details.applicationID.appropriate_plant_photography"
      modality="APP"
      reason="i"
      :reasonspecified="application_details.applicationID.appropriate_plant_photography_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="standard_operating_procedure_location_check"
      :documentCheck=" application_details.applicationID.standard_operating_procedure_location_check "
      :imgurl=" application_details.applicationID.standard_operating_procedure_location_url "
      :targetBlank="true"
      title="Standard Operating Procedure"
      :nameval="application_details.applicationID.standard_operating_procedure"
      modality="SOP"
      reason="j"
      :reasonspecified="application_details.applicationID.standard_operating_procedure_reason"
    ></m-view-application-docs>
  </ul>
</template>

<script>
  export default {
    props: ["application_details"]
  };
</script>

<style lang="scss" scoped>
</style>
