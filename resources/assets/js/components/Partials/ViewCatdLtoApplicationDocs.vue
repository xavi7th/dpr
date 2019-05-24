<template>
  <ul class="todo-list ui-sortable">
    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="letter_form_sponsoring_company_location_check"
      :documentCheck=" application_details.applicationID.letter_form_sponsoring_company_location_check "
      :imgurl=" application_details.applicationID.letter_form_sponsoring_company_location_url "
      title="Letter from Sponsoring Company"
      :nameval="application_details.applicationID.letter_form_sponsoring_company"
      modality="LFSC"
      reason="a"
      :reasonspecified="application_details.applicationID.letter_form_sponsoring_company_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="bankdraft_of_statutory_fees_location_check"
      :documentCheck=" application_details.applicationID.bankdraft_of_statutory_fees_location_check "
      :imgurl=" application_details.applicationID.bankdraft_of_statutory_fees_location_url "
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
      documentcheckname="verification_inspection_location_check"
      :documentCheck=" application_details.applicationID.verification_inspection_location_check "
      :imgurl=" application_details.applicationID.verification_inspection_location_url "
      title="Photocopy of Approval to Install LPG (ATC)"
      :nameval="application_details.applicationID.verification_inspection"
      modality="VI"
      reason="c"
      :reasonspecified="application_details.applicationID.verification_inspection_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="application_letter_location_check"
      :documentCheck=" application_details.applicationID.application_letter_location_check "
      :imgurl=" application_details.applicationID.application_letter_location_url "
      title="Application Letter"
      :nameval="application_details.applicationID.application_letter"
      modality="AL"
      reason="d"
      :reasonspecified="application_details.applicationID.application_letter_reason"
    ></m-view-application-docs>

    <m-view-application-docs
      :applicationid=" application_details.applicationID.application_id "
      :marketerid=" application_details.applicationID.marketer_id "
      :subcategory=" application_details.applicationReview.sub_category "
      :role=" application_details.role "
      documentcheckname="certificate_of_incorporation_location_check"
      :documentCheck=" application_details.applicationID.certificate_of_incorporation_location_check "
      :imgurl=" application_details.applicationID.certificate_of_incorporation_location_url "
      title="Certificate of Incorporation"
      :nameval="application_details.applicationID.certificate_of_incorporation"
      modality="CI"
      reason="e"
      :reasonspecified="application_details.applicationID.certificate_of_incorporation_reason"
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
