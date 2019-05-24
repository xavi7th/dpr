<template>
  <div>
    <ul class="todo-list ui-sortable">
      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.applications_letter_for_suitability_inspection_location_url "
        title="Applications Letter for Suitability Inspection"
        :role=" application_details.role "
        :nameval="application_details.applicationID.applications_letter_for_suitability_inspection"
        modality="ALFS"
        reason="a"
        documentcheckname="applications_letter_for_suitability_inspection_location_check"
        :reasonspecified="application_details.applicationID.applications_letter_for_suitability_inspection_reason"
        :documentCheck=" application_details.applicationID.applications_letter_for_suitability_inspection_location_check "
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.article_and_memorandum_of_association_location_url "
        title="Article and Memorandum of Association"
        :role=" application_details.role "
        :nameval="application_details.applicationID.article_and_memorandum_of_association"
        modality="AMA"
        reason="b"
        documentcheckname="article_and_memorandum_of_association_location_check"
        :reasonspecified=" application_details.applicationID.article_and_memorandum_of_association_reason "
        :documentCheck=" application_details.applicationID.article_and_memorandum_of_association_location_check "
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.current_tax_clearance_location_url "
        title="Current Tax Clearance"
        :role=" application_details.role "
        :nameval="application_details.applicationID.current_tax_clearance"
        modality="CTC"
        reason="c"
        documentcheckname="current_tax_clearance_location_check"
        :reasonspecified="application_details.applicationID.current_tax_clearance_reason"
        :documentCheck="application_details.applicationID.current_tax_clearance_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.certificate_of_incorporation_location_url "
        title="Certificate of Incorporation"
        :role=" application_details.role "
        :nameval="application_details.applicationID.certificate_of_incorporation"
        modality="CI"
        reason="d"
        documentcheckname="certificate_of_incorporation_location_check"
        :reasonspecified="application_details.applicationID.certificate_of_incorporation_reason"
        :documentCheck="application_details.applicationID.certificate_of_incorporation_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.fire_certificate_location_url "
        title="Fire Certificate"
        :role=" application_details.role "
        :nameval="application_details.applicationID.fire_certificate"
        modality="FC"
        reason="e"
        documentcheckname="fire_certificate_location_check"
        :reasonspecified="application_details.applicationID.fire_certificate_reason"
        :documentCheck="application_details.applicationID.fire_certificate_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.police_report_location_url "
        title="Police Report / Certificate"
        :role=" application_details.role "
        :nameval="application_details.applicationID.police_report"
        modality="PRC"
        reason="f"
        documentcheckname="police_report_location_check"
        :reasonspecified="application_details.applicationID.police_report_reason"
        :documentCheck="application_details.applicationID.police_report_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.completed_application_form_location_url "
        title="Completed Application Form"
        :role=" application_details.role "
        :nameval="application_details.applicationID.completed_application_form"
        modality="CAF"
        reason="g"
        documentcheckname="completed_application_form_location_check"
        :reasonspecified="application_details.applicationID.completed_application_form_reason"
        :documentCheck="application_details.applicationID.completed_application_form_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.approved_building_plan_location_url "
        title="Approved Building Plan"
        :role=" application_details.role "
        :nameval="application_details.applicationID.approved_building_plan"
        modality="ABP"
        reason="h"
        documentcheckname="approved_building_plan_location_check"
        :reasonspecified="application_details.applicationID.approved_building_plan_reason"
        :documentCheck="application_details.applicationID.approved_building_plan_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.survey_plan_location_url "
        title="Survey Plan"
        :role=" application_details.role "
        :nameval="application_details.applicationID.survey_plan"
        modality="SP"
        reason="i"
        documentcheckname="survey_plan_location_check"
        :reasonspecified="application_details.applicationID.survey_plan_reason"
        :documentCheck="application_details.applicationID.survey_plan_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.deed_of_conveyance_location_url "
        title="Deed of Conveyance"
        :role=" application_details.role "
        :nameval="application_details.applicationID.deed_of_conveyance"
        modality="DC"
        reason="j"
        documentcheckname="deed_of_conveyance_location_check"
        :reasonspecified="application_details.applicationID.deed_of_conveyance_reason"
        :documentCheck="application_details.applicationID.deed_of_conveyance_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.piping_and_instrumentation_diagram_location_url "
        title="Piping and Instrumentation Diagram"
        :role=" application_details.role "
        :nameval="application_details.applicationID.piping_and_instrumentation_diagram"
        modality="PID"
        reason="k"
        documentcheckname="piping_and_instrumentation_diagram_location_check"
        :reasonspecified="application_details.applicationID.piping_and_instrumentation_diagram_reason"
        :documentCheck="application_details.applicationID.piping_and_instrumentation_diagram_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.environmental_impact_accessment_location_url "
        title="Environmental Impact Assessment"
        :role=" application_details.role "
        :nameval="application_details.applicationID.environmental_impact_accessment"
        modality="EIA"
        reason="l"
        documentcheckname="environmental_impact_accessment_location_check"
        :reasonspecified="application_details.applicationID.environmental_impact_accessment_reason"
        :documentCheck="application_details.applicationID.environmental_impact_accessment_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.bankdraft_of_statutory_fees_location_url "
        title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account"
        :role=" application_details.role "
        :nameval="application_details.applicationID.bankdraft_of_statutory_fees"
        modality="BSFP"
        reason="m"
        documentcheckname="bankdraft_of_statutory_fees_location_check"
        :reasonspecified="application_details.applicationID.bankdraft_of_statutory_fees_reason"
        :documentCheck="application_details.applicationID.bankdraft_of_statutory_fees_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.letter_confirmation_ministry_of_lands_and_survey_location_url "
        title="Letter of Confirmation from Ministry of Lands and Survey"
        :role=" application_details.role "
        :nameval="application_details.applicationID.letter_confirmation_ministry_of_lands_and_survey"
        modality="LCMLS"
        reason="n"
        documentcheckname="letter_confirmation_ministry_of_lands_and_survey_location_check"
        :reasonspecified="application_details.applicationID.letter_confirmation_ministry_of_lands_and_survey_reason"
        :documentCheck="application_details.applicationID.letter_confirmation_ministry_of_lands_and_survey_location_check"
      ></m-view-application-docs>

      <m-view-application-docs
        :subcategory=" application_details.applicationReview.sub_category "
        :applicationid=" application_details.applicationID.application_id "
        :marketerid=" application_details.applicationID.marketer_id "
        :imgurl=" application_details.applicationID.codes_and_standard_adopted_in_the_tank_design_location_url "
        title="Codes and Standard Adopted in the Tank Design"
        :role=" application_details.role "
        :nameval="application_details.applicationID.codes_and_standard_adopted_in_the_tank_design"
        modality="CSATD"
        reason="o"
        documentcheckname="codes_and_standard_adopted_in_the_tank_design_location_check"
        :reasonspecified="application_details.applicationID.codes_and_standard_adopted_in_the_tank_design_reason"
        :documentCheck="application_details.applicationID.codes_and_standard_adopted_in_the_tank_design_location_check"
      ></m-view-application-docs>
    </ul>
  </div>
</template>

<script>
  export default {
    props: ["application_details"]
  };
</script>

<style lang="scss" scoped>
</style>
