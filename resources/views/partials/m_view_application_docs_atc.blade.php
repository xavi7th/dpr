<ul class="todo-list ui-sortable">
  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->completed_application_form_location_url }}" 
  title="Completed Application Form" 
  documentCheck="{{ $applicationID->completed_application_form_location_check }}"
  documentcheckname="completed_application_form_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->completed_application_form}}" 
  modality="CAF" 
  reason="a" 
  reasonspecified="{{$applicationID->completed_application_form_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->bankdraft_of_statutory_fees_location_url }}" 
  title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" 
  documentCheck="{{ $applicationID->bankdraft_of_statutory_fees_location_check }}"
  documentcheckname="bankdraft_of_statutory_fees_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->bankdraft_of_statutory_fees}}" 
  modality="BSFP" 
  reason="b" 
  reasonspecified="{{$applicationID->bankdraft_of_statutory_fees_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->photocopy_of_approval_to_construct_lpg_location_url }}" 
  title="Photocopy of Approval to Constuct LPG (ATC)" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->photocopy_of_approval_to_construct_lpg}}" 
  modality="PACLPG" 
  reason="c" 
  reasonspecified="{{$applicationID->photocopy_of_approval_to_construct_lpg_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->current_weight_measures_cert_of_verification_location_url }}" 
  title="Current Weight & Measures Certificate of Verification" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->current_weight_measures_cert_of_verification}}" 
  modality="CWMCV" 
  reason="d" 
  reasonspecified="{{$applicationID->current_weight_measures_cert_of_verification_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->application_letter_addressed_to_the_controller_location_url }}" 
  title="Application Letter Addressed to the Controller DPR" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->application_letter_addressed_to_the_controller}}" 
  modality="ALACD" 
  reason="e" 
  reasonspecified="{{$applicationID->application_letter_addressed_to_the_controller_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->fire_report_certificate_location_url }}" 
  title="Fire Report / Certificate" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->fire_report_certificate}}" 
  modality="FRC" 
  reason="f" 
  reasonspecified="{{$applicationID->fire_report_certificate_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->current_pressure_test_report_certificate_location_url }}" 
  title="Current Pressure Test Report / Certificate" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->current_pressure_test_report_certificate}}" 
  modality="CPTRC" 
  reason="g" 
  reasonspecified="{{$applicationID->current_pressure_test_report_certificate_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->current_three_years_income_tax_clearance_location_url }}" 
  title="Current Three Years Income Tax Clearance" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->current_three_years_income_tax_clearance}}" 
  modality="CTYITC" 
  reason="h" 
  reasonspecified="{{$applicationID->current_three_years_income_tax_clearance_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->appropriate_plant_photography_location_url }}" 
  title="Appropriate Plant Photography (8 x 10)" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->appropriate_plant_photography}}" 
  modality="APP" 
  reason="i" 
  reasonspecified="{{$applicationID->appropriate_plant_photography_reason}}"></m-view-application-docs>

  <m-view-application-docs 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->standard_operating_procedure_location_url }}" 
  title="Standard Operating Procedure" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  subcategory="{{ $applicationReview->sub_category }}"
  nameval="{{$applicationID->standard_operating_procedure}}" 
  modality="SOP" 
  reason="j" 
  reasonspecified="{{$applicationID->standard_operating_procedure_reason}}"></m-view-application-docs>
</ul>
