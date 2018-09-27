<ul class="todo-list ui-sortable">
  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->article_and_memorandum_of_association_location_url }}" title="Article and Memorandum of Association" nameval="{{$applicationID->article_and_memorandum_of_association}}" modality="AAMOA" reason="a" reasonspecified="{{$applicationID->article_and_memorandum_of_association_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->certificate_of_incorporation_location_url }}" title="Certificate of Incorporation" nameval="{{$applicationID->certificate_of_incorporation}}" modality="CI" reason="b" reasonspecified="{{$applicationID->certificate_of_incorporation_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->weight_measures_verification_certificate_location_url }}" title="Weight and Measures Verification Certificate" nameval="{{$applicationID->weight_measures_verification_certificate}}" modality="WAMVC" reason="c" reasonspecified="{{$applicationID->weight_measures_verification_certificate_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->current_pressure_test_certificate_location_url }}" title="Current Pressure Test Report / Certificate" nameval="{{$applicationID->current_pressure_test_certificate}}" modality="CPTRC" reason="d" reasonspecified="{{$applicationID->current_pressure_test_certificate_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->appropriate_plant_photography_location_url }}" title="Appropriate Plant Photography (8 x 10)" nameval="{{$applicationID->appropriate_plant_photography}}" modality="APP" reason="e" reasonspecified="{{$applicationID->appropriate_plant_photography_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->completed_application_form_location_url }}" title="Completed Application Form" nameval="{{$applicationID->completed_application_form}}" modality="CAF" reason="f" reasonspecified="{{$applicationID->completed_application_form_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->bankdraft_of_statutory_fees_location_url }}" title="Bankdraft of Statutory Fees Payable to FGN-DPR Fees Account" nameval="{{$applicationID->bankdraft_of_statutory_fees}}" modality="BSFP" reason="g" reasonspecified="{{$applicationID->bankdraft_of_statutory_fees_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->modification_plant_location_url }}" title="Modification Plant (If any)" nameval="{{$applicationID->modification_plant}}" modality="MP" reason="h" reasonspecified="{{$applicationID->modification_plant_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->current_tax_clearance_certificate_location_url }}" title="Current Tax Clearance" nameval="{{$applicationID->current_tax_clearance_certificate}}" modality="CTC" reason="i" reasonspecified="{{$applicationID->current_tax_clearance_certificate_reason}}"></m-view-application-docs>
  
  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->current_fire_report_certificate_location_url }}" title="Current Fire Report / Certificate" nameval="{{$applicationID->current_fire_report_certificate}}" modality="CFRC" reason="j" reasonspecified="{{$applicationID->current_fire_report_certificate_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->original_license_of_plant_location_url }}" title="Original License of Plant" nameval="{{$applicationID->original_license_of_plant}}" modality="OLP" reason="k" reasonspecified="{{$applicationID->original_license_of_plant_reason}}"></m-view-application-docs>

  <m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->letter_of_release_location_url }}" title="Letter of Release" nameval="{{$applicationID->letter_of_release}}" modality="LOR" reason="l" reasonspecified="{{$applicationID->letter_of_release_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->police_report_certificate_location_url }}" title="Police Report / Certificate" nameval="{{$applicationID->police_report_certificate}}" modality="PRC" reason="m" reasonspecified="{{$applicationID->police_report_certificate_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->approved_building_plan_location_url }}" title="Approved Building Plan" nameval="{{$applicationID->approved_building_plan}}" modality="ABP" reason="n" reasonspecified="{{$applicationID->approved_building_plan_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->environment_evaluation_report_location_url }}" title="Environment Evaluation Report" nameval="{{$applicationID->environment_evaluation_report}}" modality="EER" reason="o" reasonspecified="{{$applicationID->environment_evaluation_report_reason}}"></m-view-application-docs>

<m-view-application-docs applicationid="{{ $applicationID->application_id }}" marketerid="{{ $applicationID->marketer_id }}" imgurl="{{ $applicationID->application_letter_location_url }}" title="Application Letter" nameval="{{$applicationID->application_letter}}" modality="AL" reason="p" reasonspecified="{{$applicationID->application_letter_reason}}"></m-view-application-docs>


</ul>
