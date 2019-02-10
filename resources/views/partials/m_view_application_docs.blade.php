<ul class="todo-list ui-sortable">
  
  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->applications_letter_for_suitability_inspection_location_url }}" 
  title="Applications Letter for Suitability Inspection" 
  role="{{ $role }}"
  nameval="{{$applicationID->applications_letter_for_suitability_inspection}}" 
  modality="ALFS" 
  reason="a" 
  documentcheckname="applications_letter_for_suitability_inspection_location_check"
  reasonspecified="{{$applicationID->applications_letter_for_suitability_inspection_reason}}" 
  documentCheck="{{ $applicationID->applications_letter_for_suitability_inspection_location_check }}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->article_and_memorandum_of_association_location_url }}" 
  title="Article and Memorandum of Association" 
  role="{{ $role }}"
  nameval="{{$applicationID->article_and_memorandum_of_association}}" 
  modality="AMA" 
  reason="b" 
  documentcheckname="article_and_memorandum_of_association_location_check"
  reasonspecified="{{ $applicationID->article_and_memorandum_of_association_reason }}" 
  documentCheck="{{ $applicationID->article_and_memorandum_of_association_location_check }}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->current_tax_clearance_location_url }}" 
  title="Current Tax Clearance" 
  role="{{ $role }}"
  nameval="{{$applicationID->current_tax_clearance}}" 
  modality="CTC" 
  reason="c" 
  documentcheckname="current_tax_clearance_location_check"
  reasonspecified="{{$applicationID->current_tax_clearance_reason}}" 
  documentCheck="{{$applicationID->current_tax_clearance_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->certificate_of_incorporation_location_url }}" 
  title="Certificate of Incorporation" 
  role="{{ $role }}"
  nameval="{{$applicationID->certificate_of_incorporation}}" 
  modality="CI" 
  reason="d" 
  documentcheckname="certificate_of_incorporation_location_check"
  reasonspecified="{{$applicationID->certificate_of_incorporation_reason}}" 
  documentCheck="{{$applicationID->certificate_of_incorporation_location_check}}"></m-view-application-docs>

  <m-view-application-docs subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->fire_certificate_location_url }}"
  title="Fire Certificate" 
  role="{{ $role }}"
  nameval="{{$applicationID->fire_certificate}}" 
  modality="FC" 
  reason="e" 
  documentcheckname="fire_certificate_location_check"
  reasonspecified="{{$applicationID->fire_certificate_reason}}" 
  documentCheck="{{$applicationID->fire_certificate_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->police_report_location_url }}" 
  title="Police Report / Certificate" 
  role="{{ $role }}"
  nameval="{{$applicationID->police_report}}" 
  modality="PRC" 
  reason="f" 
  documentcheckname="police_report_location_check"
  reasonspecified="{{$applicationID->police_report_reason}}"
  documentCheck="{{$applicationID->police_report_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->completed_application_form_location_url }}" 
  title="Completed Application Form" 
  role="{{ $role }}"
  nameval="{{$applicationID->completed_application_form}}" 
  modality="CAF" 
  reason="g" 
  documentcheckname="completed_application_form_location_check"
  reasonspecified="{{$applicationID->completed_application_form_reason}}" 
  documentCheck="{{$applicationID->completed_application_form_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->approved_building_plan_location_url }}" 
  title="Approved Building Plan" 
  role="{{ $role }}"
  nameval="{{$applicationID->approved_building_plan}}" 
  modality="ABP" 
  reason="h" 
  documentcheckname="approved_building_plan_location_check"
  reasonspecified="{{$applicationID->approved_building_plan_reason}}" 
  documentCheck="{{$applicationID->approved_building_plan_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->survey_plan_location_url }}" 
  title="Survey Plan" 
  role="{{ $role }}"
  nameval="{{$applicationID->survey_plan}}"
  modality="SP" 
  reason="i" 
  documentcheckname="survey_plan_location_check"
  reasonspecified="{{$applicationID->survey_plan_reason}}" 
  documentCheck="{{$applicationID->survey_plan_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->deed_of_conveyance_location_url }}" 
  title="Deed of Conveyance" 
  role="{{ $role }}"
  nameval="{{$applicationID->deed_of_conveyance}}" 
  modality="DC" 
  reason="j" 
  documentcheckname="deed_of_conveyance_location_check"
  reasonspecified="{{$applicationID->deed_of_conveyance_reason}}" 
  documentCheck="{{$applicationID->deed_of_conveyance_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->piping_and_instrumentation_diagram_location_url }}" 
  title="Piping and Instrumentation Diagram" 
  role="{{ $role }}"
  nameval="{{$applicationID->piping_and_instrumentation_diagram}}" 
  modality="PID" 
  reason="k" 
  documentcheckname="piping_and_instrumentation_diagram_location_check"
  reasonspecified="{{$applicationID->piping_and_instrumentation_diagram_reason}}" 
  documentCheck="{{$applicationID->piping_and_instrumentation_diagram_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->environmental_impact_accessment_location_url }}" 
  title="Environmental Impact Assessment" 
  role="{{ $role }}"
  nameval="{{$applicationID->environmental_impact_accessment}}" 
  modality="EIA" 
  reason="l" 
  documentcheckname="environmental_impact_accessment_location_check"
  reasonspecified="{{$applicationID->environmental_impact_accessment_reason}}" 
  documentCheck="{{$applicationID->environmental_impact_accessment_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->bankdraft_of_statutory_fees_location_url }}" 
  title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" 
  role="{{ $role }}"
  nameval="{{$applicationID->bankdraft_of_statutory_fees}}" 
  modality="BSFP" 
  reason="m" 
  documentcheckname="bankdraft_of_statutory_fees_location_check"
  reasonspecified="{{$applicationID->bankdraft_of_statutory_fees_reason}}" 
  documentCheck="{{$applicationID->bankdraft_of_statutory_fees_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->letter_confirmation_ministry_of_lands_and_survey_location_url }}" 
  title="Letter of Confirmation from Ministry of Lands and Survey" 
  role="{{ $role }}"
  nameval="{{$applicationID->letter_confirmation_ministry_of_lands_and_survey}}" 
  modality="LCMLS" 
  reason="n" 
  documentcheckname="letter_confirmation_ministry_of_lands_and_survey_location_check"
  reasonspecified="{{$applicationID->letter_confirmation_ministry_of_lands_and_survey_reason}}" 
  documentCheck="{{$applicationID->letter_confirmation_ministry_of_lands_and_survey_location_check}}"></m-view-application-docs>

  <m-view-application-docs 
  subcategory="{{ $applicationReview->sub_category }}" 
  applicationid="{{ $applicationID->application_id }}" 
  marketerid="{{ $applicationID->marketer_id }}" 
  imgurl="{{ $applicationID->codes_and_standard_adopted_in_the_tank_design_location_url }}" 
  title="Codes and Standard Adopted in the Tank Design" 
  role="{{ $role }}"
  nameval="{{$applicationID->codes_and_standard_adopted_in_the_tank_design}}" 
  modality="CSATD" 
  reason="o" 
  documentcheckname="codes_and_standard_adopted_in_the_tank_design_location_check"
  reasonspecified="{{$applicationID->codes_and_standard_adopted_in_the_tank_design_reason}}" 
  documentCheck="{{$applicationID->codes_and_standard_adopted_in_the_tank_design_location_check}}"></m-view-application-docs>

  {{--  <m-view-application-docs subcategory="{{ $applicationReview->sub_category }}" applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->application_letter_addressed_to_the_controller_location_url }}" title="Application Letter Addressed to the Controller DPR" 
    nameval="{{$applicationID->application_letter_addressed_to_the_controller}}" modality="ALACD" reason="p" reasonspecified="{{$applicationID->application_letter_addressed_to_the_controller_reason}}"documentCheck="{{}}"></m-view-application-docs>  --}}
</ul>
