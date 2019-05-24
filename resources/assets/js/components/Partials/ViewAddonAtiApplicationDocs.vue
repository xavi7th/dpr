<template>
  <ul class="todo-list ui-sortable">
    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="suitability_inspection_of_proposed_site_location_check"
      :documentCheck=" application_details.applicationID.suitability_inspection_of_proposed_site_location_check "
      :imgurl=" application_details.applicationID.suitability_inspection_of_proposed_site_location_url "
      title="Suitability Inspection of Proposed Site"
      :nameval="application_details.applicationID.suitability_inspection_of_proposed_site"
      modality="SIPS"
      reason="a"
      :reasonspecified="application_details.applicationID.suitability_inspection_of_proposed_site_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="copy_of_current_storage_and_sales_license_location_check"
      :documentCheck=" application_details.applicationID.copy_of_current_storage_and_sales_license_location_check "
      :imgurl=" application_details.applicationID.copy_of_current_storage_and_sales_license_location_url "
      title="Copy of Current Storage and Sales License"
      :nameval="application_details.applicationID.copy_of_current_storage_and_sales_license"
      modality="CCSSL"
      reason="b"
      :reasonspecified="application_details.applicationID.copy_of_current_storage_and_sales_license"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="retail_outlet_as_built_layout_drawing_location_check"
      :documentCheck=" application_details.applicationID.retail_outlet_as_built_layout_drawing_location_check "
      :imgurl=" application_details.applicationID.retail_outlet_as_built_layout_drawing_location_url "
      title="Retail Outlet as Built Layout Drawing"
      :nameval="application_details.applicationID.retail_outlet_as_built_layout_drawing"
      modality="ROBLD"
      reason="c"
      :reasonspecified="application_details.applicationID.retail_outlet_as_built_layout_drawing_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="proposed_layout_drawing_for_the_lpg_addon_location_check"
      :documentCheck=" application_details.applicationID.proposed_layout_drawing_for_the_lpg_addon_location_check "
      :imgurl=" application_details.applicationID.proposed_layout_drawing_for_the_lpg_addon_location_url "
      title="Proposed Layout Drawing for the LPG ADDON"
      :nameval="application_details.applicationID.proposed_layout_drawing_for_the_lpg_addon"
      modality="PLDLPGA"
      reason="d"
      :reasonspecified="application_details.applicationID.proposed_layout_drawing_for_the_lpg_addon_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="fire_services_report_indicating_the_lpg_addon_location_check"
      :documentCheck=" application_details.applicationID.fire_services_report_indicating_the_lpg_addon_location_check "
      :imgurl=" application_details.applicationID.fire_services_report_indicating_the_lpg_addon_location_url "
      title="Fire Services Report Indicating the LPG ADDON"
      :nameval="application_details.applicationID.fire_services_report_indicating_the_lpg_addon"
      modality="FSRILPGA"
      reason="e"
      :reasonspecified="application_details.applicationID.fire_services_report_indicating_the_lpg_addon_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="environmental_evaluation_report_location_check"
      :documentCheck=" application_details.applicationID.environmental_evaluation_report_location_check "
      :imgurl=" application_details.applicationID.environmental_evaluation_report_location_url "
      title="Environmental Evaluation Report"
      :nameval="application_details.applicationID.environmental_evaluation_report"
      modality="EER"
      reason="f"
      :reasonspecified="application_details.applicationID.environmental_evaluation_report_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="relevant_town_planning_approval_location_check"
      :documentCheck=" application_details.applicationID.relevant_town_planning_approval_location_check "
      :imgurl=" application_details.applicationID.relevant_town_planning_approval_location_url "
      title="Relevant Town Planning Approval"
      :nameval="application_details.applicationID.relevant_town_planning_approval"
      modality="RTPA"
      reason="g"
      :reasonspecified="application_details.applicationID.relevant_town_planning_approval_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="application_letter_addressed_to_the_controller_location_check"
      :documentCheck=" application_details.applicationID.application_letter_addressed_to_the_controller_location_check "
      :imgurl=" application_details.applicationID.application_letter_addressed_to_the_controller_location_url "
      title="Application Letter Addressed to the Controller DPR"
      :nameval="application_details.applicationID.application_letter_addressed_to_the_controller"
      modality="ALACD"
      reason="h"
      :reasonspecified="application_details.applicationID.application_letter_addressed_to_the_controller_reason"
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
