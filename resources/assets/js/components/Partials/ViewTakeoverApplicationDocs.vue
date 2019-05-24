<template>
  <ul class="todo-list ui-sortable">
    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.article_and_memorandum_of_association_location_url "
      title="Article and Memorandum of Association"
      :nameval="application_details.applicationID.article_and_memorandum_of_association"
      modality="AAMOA"
      reason="a"
      :reasonspecified="application_details.applicationID.article_and_memorandum_of_association_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.certificate_of_incorporation_location_url "
      title="Certificate of Incorporation"
      :nameval="application_details.applicationID.certificate_of_incorporation"
      modality="CI"
      reason="b"
      :reasonspecified="application_details.applicationID.certificate_of_incorporation_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.weight_measures_verification_certificate_location_url "
      title="Weight and Measures Verification Certificate"
      :nameval="application_details.applicationID.weight_measures_verification_certificate"
      modality="WAMVC"
      reason="c"
      :reasonspecified="application_details.applicationID.weight_measures_verification_certificate_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.current_pressure_test_certificate_location_url "
      title="Current Pressure Test Report / Certificate"
      :nameval="application_details.applicationID.current_pressure_test_certificate"
      modality="CPTRC"
      reason="d"
      :reasonspecified="application_details.applicationID.current_pressure_test_certificate_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.appropriate_plant_photography_location_url "
      title="Appropriate Plant Photography (8 x 10)"
      :nameval="application_details.applicationID.appropriate_plant_photography"
      modality="APP"
      reason="e"
      :reasonspecified="application_details.applicationID.appropriate_plant_photography_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.completed_application_form_location_url "
      title="Completed Application Form"
      :nameval="application_details.applicationID.completed_application_form"
      modality="CAF"
      reason="f"
      :reasonspecified="application_details.applicationID.completed_application_form_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.bankdraft_of_statutory_fees_location_url "
      title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account"
      :nameval="application_details.applicationID.bankdraft_of_statutory_fees"
      modality="BSFP"
      reason="g"
      :reasonspecified="application_details.applicationID.bankdraft_of_statutory_fees_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.modification_plant_location_url "
      title="Modification Plant (If any)"
      :nameval="application_details.applicationID.modification_plant"
      modality="MP"
      reason="h"
      :reasonspecified="application_details.applicationID.modification_plant_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.current_tax_clearance_certificate_location_url "
      title="Current Tax Clearance"
      :nameval="application_details.applicationID.current_tax_clearance_certificate"
      modality="CTC"
      reason="i"
      :reasonspecified="application_details.applicationID.current_tax_clearance_certificate_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.current_fire_report_certificate_location_url "
      title="Current Fire Report / Certificate"
      :nameval="application_details.applicationID.current_fire_report_certificate"
      modality="CFRC"
      reason="j"
      :reasonspecified="application_details.applicationID.current_fire_report_certificate_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.original_license_of_plant_location_url "
      title="Original License of Plant"
      :nameval="application_details.applicationID.original_license_of_plant"
      modality="OLP"
      reason="k"
      :reasonspecified="application_details.applicationID.original_license_of_plant_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.letter_of_release_location_url "
      title="Letter of Release"
      :nameval="application_details.applicationID.letter_of_release"
      modality="LOR"
      reason="l"
      :reasonspecified="application_details.applicationID.letter_of_release_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.police_report_certificate_location_url "
      title="Police Report / Certificate"
      :nameval="application_details.applicationID.police_report_certificate"
      modality="PRC"
      reason="m"
      :reasonspecified="application_details.applicationID.police_report_certificate_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.approved_building_plan_location_url "
      title="Approved Building Plan"
      :nameval="application_details.applicationID.approved_building_plan"
      modality="ABP"
      reason="n"
      :reasonspecified="application_details.applicationID.approved_building_plan_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.environment_evaluation_report_location_url "
      title="Environment Evaluation Report"
      :nameval="application_details.applicationID.environment_evaluation_report"
      modality="EER"
      reason="o"
      :reasonspecified="application_details.applicationID.environment_evaluation_report_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :imgurl=" application_details.applicationID.application_letter_location_url "
      title="Application Letter"
      :nameval="application_details.applicationID.application_letter"
      modality="AL"
      reason="p"
      :reasonspecified="application_details.applicationID.application_letter_reason"
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
