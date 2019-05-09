<ul class="todo-list ui-sortable">
    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="completed_application_form_location_check" documentCheck="{{ optional($applicationID)->completed_application_form_location_check }}"
        imgurl="{{ optional($applicationID)->completed_application_form_location_url }}" title="Completed Application Form"
        nameval="{{optional($applicationID)->completed_application_form}}" modality="CAF" reason="a" reasonspecified="{{optional($applicationID)->completed_application_form_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="bankdraft_of_statutory_fees_location_check" documentCheck="{{ optional($applicationID)->bankdraft_of_statutory_fees_location_check }}"
        imgurl="{{ optional($applicationID)->bankdraft_of_statutory_fees_location_url }}" title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account"
        nameval="{{optional($applicationID)->bankdraft_of_statutory_fees}}" modality="BSFP" reason="b" reasonspecified="{{optional($applicationID)->bankdraft_of_statutory_fees_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="photocopy_of_approval_to_construct_lpg_location_check" documentCheck="{{ optional($applicationID)->photocopy_of_approval_to_construct_lpg_location_check }}"
        imgurl="{{ optional($applicationID)->photocopy_of_approval_to_construct_lpg_location_url }}" title="Photocopy of Approval to Constuct LPG (ATC)"
        nameval="{{optional($applicationID)->photocopy_of_approval_to_construct_lpg}}" modality="PACLPG" reason="c"
        reasonspecified="{{optional($applicationID)->photocopy_of_approval_to_construct_lpg_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="current_weight_measures_cert_of_verification_location_check"
        documentCheck="{{ optional($applicationID)->current_weight_measures_cert_of_verification_location_check }}"
        imgurl="{{ optional($applicationID)->current_weight_measures_cert_of_verification_location_url }}" title="Current Weight & Measures Certificate of Verification"
        nameval="{{optional($applicationID)->current_weight_measures_cert_of_verification}}" modality="CWMCV" reason="d"
        reasonspecified="{{optional($applicationID)->current_weight_measures_cert_of_verification_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="application_letter_addressed_to_the_controller_location_check"
        documentCheck="{{ optional($applicationID)->application_letter_addressed_to_the_controller_location_check }}"
        imgurl="{{ optional($applicationID)->application_letter_addressed_to_the_controller_location_url }}" title="Application Letter Addressed to the Controller DPR"
        nameval="{{optional($applicationID)->application_letter_addressed_to_the_controller}}" modality="ALACD" reason="e"
        reasonspecified="{{optional($applicationID)->application_letter_addressed_to_the_controller_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="fire_report_certificate_location_check" documentCheck="{{ optional($applicationID)->fire_report_certificate_location_check }}"
        imgurl="{{ optional($applicationID)->fire_report_certificate_location_url }}" title="Fire Report / Certificate"
        nameval="{{optional($applicationID)->fire_report_certificate}}" modality="FRC" reason="f" reasonspecified="{{optional($applicationID)->fire_report_certificate_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="current_pressure_test_report_certificate_location_check" documentCheck="{{ optional($applicationID)->current_pressure_test_report_certificate_location_check }}"
        imgurl="{{ optional($applicationID)->current_pressure_test_report_certificate_location_url }}" title="Current Pressure Test Report / Certificate"
        nameval="{{optional($applicationID)->current_pressure_test_report_certificate}}" modality="CPTRC" reason="g"
        reasonspecified="{{optional($applicationID)->current_pressure_test_report_certificate_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="current_three_years_income_tax_clearance_location_check" documentCheck="{{ optional($applicationID)->current_three_years_income_tax_clearance_location_check }}"
        imgurl="{{ optional($applicationID)->current_three_years_income_tax_clearance_location_url }}" title="Current Three Years Income Tax Clearance"
        nameval="{{optional($applicationID)->current_three_years_income_tax_clearance}}" modality="CTYITC" reason="h"
        reasonspecified="{{optional($applicationID)->current_three_years_income_tax_clearance_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="appropriate_plant_photography_location_check" documentCheck="{{ optional($applicationID)->appropriate_plant_photography_location_check }}"
        imgurl="{{ optional($applicationID)->appropriate_plant_photography_location_url }}" title="Appropriate Plant Photography (8 x 10)"
        nameval="{{optional($applicationID)->appropriate_plant_photography}}" modality="APP" reason="i" reasonspecified="{{optional($applicationID)->appropriate_plant_photography_reason}}"></m-view-application-docs>

    <m-view-application-docs applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
        subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ optional($applicationID)->application_id }}"
        role="{{ $role }}" documentcheckname="standard_operating_procedure_location_check" documentCheck="{{ optional($applicationID)->standard_operating_procedure_location_check }}"
        imgurl="{{ optional($applicationID)->standard_operating_procedure_location_url }}" title="Standard Operating Procedure"
        nameval="{{optional($applicationID)->standard_operating_procedure}}" modality="SOP" reason="j" reasonspecified="{{optional($applicationID)->standard_operating_procedure_reason}}"></m-view-application-docs>

</ul>


{{--
  <m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
imgurl="{{ optional($applicationID)->completed_application_form_location_url }}" title="Completed Application Form"
nameval="{{optional($applicationID)->completed_application_form}}" modality="CAF" reason="a" reasonspecified="{{optional($applicationID)->completed_application_form_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->bankdraft_of_statutory_fees_location_url }}" title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account"
    nameval="{{optional($applicationID)->bankdraft_of_statutory_fees}}" modality="BSFP" reason="b" reasonspecified="{{optional($applicationID)->bankdraft_of_statutory_fees_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->photocopy_of_approval_to_construct_lpg_location_url }}" title="Photocopy of Approval to Constuct LPG (ATC)"
    nameval="{{optional($applicationID)->photocopy_of_approval_to_construct_lpg}}" modality="PACLPG" reason="c"
    reasonspecified="{{optional($applicationID)->photocopy_of_approval_to_construct_lpg_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->current_weight_measures_cert_of_verification_location_url }}" title="Current Weight & Measures Certificate of Verification"
    nameval="{{optional($applicationID)->current_weight_measures_cert_of_verification}}" modality="CWMCV" reason="d"
    reasonspecified="{{optional($applicationID)->current_weight_measures_cert_of_verification_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->application_letter_addressed_to_the_controller_location_url }}" title="Application Letter Addressed to the Controller DPR"
    nameval="{{optional($applicationID)->application_letter_addressed_to_the_controller}}" modality="ALACD" reason="e"
    reasonspecified="{{optional($applicationID)->application_letter_addressed_to_the_controller_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->fire_report_certificate_location_url }}" title="Fire Report / Certificate"
    nameval="{{optional($applicationID)->fire_report_certificate}}" modality="FRC" reason="f" reasonspecified="{{optional($applicationID)->fire_report_certificate_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->current_pressure_test_report_certificate_location_url }}" title="Current Pressure Test Report / Certificate"
    nameval="{{optional($applicationID)->current_pressure_test_report_certificate}}" modality="CPTRC" reason="g"
    reasonspecified="{{optional($applicationID)->current_pressure_test_report_certificate_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->current_three_years_income_tax_clearance_location_url }}" title="Current Three Years Income Tax Clearance"
    nameval="{{optional($applicationID)->current_three_years_income_tax_clearance}}" modality="CTYITC" reason="h"
    reasonspecified="{{optional($applicationID)->current_three_years_income_tax_clearance_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->appropriate_plant_photography_location_url }}" title="Appropriate Plant Photography (8 x 10)"
    nameval="{{optional($applicationID)->appropriate_plant_photography}}" modality="APP" reason="i" reasonspecified="{{optional($applicationID)->appropriate_plant_photography_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ optional($applicationID)->comp_license_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->standard_operating_procedure_location_url }}" title="Standard Operating Procedure"
    nameval="{{optional($applicationID)->standard_operating_procedure}}" modality="SOP" reason="j" reasonspecified="{{optional($applicationID)->standard_operating_procedure_reason}}"></m-view-application-docs>

<m-view-application-docs-lto-renewal applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->copy_of_last_expired_license_location_url }}" title="Copy of Last Expired License"
    nameval="{{optional($applicationID)->copy_of_last_expired_license}}" modality="COLEL"></m-view-application-docs-lto-renewal>

<m-view-application-docs-lto-renewal applicationid="{{ optional($applicationID)->application_id }}" marketerid="{{ optional($applicationID)->marketer_id }}"
    imgurl="{{ optional($applicationID)->payment_receipt_location_url }}" title="Payment Receipt" nameval="{{optional($applicationID)->payment_receipt}}"
    modality="PR"></m-view-application-docs-lto-renewal> --}}
