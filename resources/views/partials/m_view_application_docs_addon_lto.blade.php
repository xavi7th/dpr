<ul class="todo-list ui-sortable">
  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="completed_application_form_location_check"
  documentCheck="{{ $applicationID->completed_application_form_location_check }}" 
  imgurl="{{ $applicationID->completed_application_form_location_url }}" 
  title="Completed Application Form" 
  nameval="{{$applicationID->completed_application_form}}" 
  modality="CAF" 
  reason="a" 
  reasonspecified="{{$applicationID->completed_application_form_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="bankdraft_of_statutory_fees_location_check"
  documentCheck="{{ $applicationID->bankdraft_of_statutory_fees_location_check }}" 
  imgurl="{{ $applicationID->bankdraft_of_statutory_fees_location_url }}" 
  title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" 
  nameval="{{$applicationID->bankdraft_of_statutory_fees}}" 
  modality="BSFP" 
  reason="b" 
  reasonspecified="{{$applicationID->bankdraft_of_statutory_fees_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="photocopy_of_approval_to_install_lpg_location_check"
  documentCheck="{{ $applicationID->photocopy_of_approval_to_install_lpg_location_check }}" 
  imgurl="{{ $applicationID->photocopy_of_approval_to_install_lpg_location_url }}" 
  title="Photocopy of Approval to Install LPG (ATC)" 
  nameval="{{$applicationID->photocopy_of_approval_to_install_lpg}}" 
  modality="PACLPG" 
  reason="c" 
  reasonspecified="{{$applicationID->photocopy_of_approval_to_install_lpg_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="current_weight_measures_cert_of_verification_location_check"
  documentCheck="{{ $applicationID->current_weight_measures_cert_of_verification_location_check }}" 
  imgurl="{{ $applicationID->current_weight_measures_cert_of_verification_location_url }}" 
  title="Current Weight & Measures Certificate of Verification" 
  nameval="{{$applicationID->current_weight_measures_cert_of_verification}}" 
  modality="CWMCV" 
  reason="d" 
  reasonspecified="{{$applicationID->current_weight_measures_cert_of_verification_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="application_letter_addressed_to_the_controller_location_check"
  documentCheck="{{ $applicationID->application_letter_addressed_to_the_controller_location_check }}" 
  imgurl="{{ $applicationID->application_letter_addressed_to_the_controller_location_url }}" 
  title="Application Letter Addressed to the Controller DPR" 
  nameval="{{$applicationID->application_letter_addressed_to_the_controller}}" 
  modality="ALACD" 
  reason="e" 
  reasonspecified="{{$applicationID->application_letter_addressed_to_the_controller_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="fire_services_report_indicating_the_lpg_addon_location_check"
  documentCheck="{{ $applicationID->fire_services_report_indicating_the_lpg_addon_location_check }}" 
  imgurl="{{ $applicationID->fire_services_report_indicating_the_lpg_addon_location_url }}" 
  title="Fire Services Report Indicating the LPG ADDON" 
  nameval="{{$applicationID->fire_services_report_indicating_the_lpg_addon}}" 
  modality="FSRILPGA" 
  reason="e" 
  reasonspecified="{{$applicationID->fire_services_report_indicating_the_lpg_addon_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="current_pressure_test_report_certificate_location_check"
  documentCheck="{{ $applicationID->current_pressure_test_report_certificate_location_check }}" 
  imgurl="{{ $applicationID->current_pressure_test_report_certificate_location_url }}" 
  title="Current Pressure Test Report / Certificate" 
  nameval="{{$applicationID->current_pressure_test_report_certificate}}" 
  modality="CPTRC" 
  reason="g" 
  reasonspecified="{{$applicationID->current_pressure_test_report_certificate_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="current_three_years_income_tax_clearance_location_check"
  documentCheck="{{ $applicationID->current_three_years_income_tax_clearance_location_check }}" 
  imgurl="{{ $applicationID->current_three_years_income_tax_clearance_location_url }}" 
  title="Current Three Years Income Tax Clearance" 
  nameval="{{$applicationID->current_three_years_income_tax_clearance}}" 
  modality="CTYITC" 
  reason="h" 
  reasonspecified="{{$applicationID->current_three_years_income_tax_clearance_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}"
  subcategory="{{ $applicationReview->sub_category }}"
  applicationid="{{ $applicationID->application_id }}"
  role="{{ $role }}"
  documentcheckname="appropriate_plant_photography_location_check"
  documentCheck="{{ $applicationID->appropriate_plant_photography_location_check }}" 
  imgurl="{{ $applicationID->appropriate_plant_photography_location_url }}" 
  title="Appropriate Plant Photography (8 x 10)" 
  nameval="{{$applicationID->appropriate_plant_photography}}" 
  modality="APP" 
  reason="i" 
  reasonspecified="{{$applicationID->appropriate_plant_photography_reason}}"></m-view-application-docs>

  
</ul>
