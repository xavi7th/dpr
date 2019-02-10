<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/backend');
});

// BACKEND-SESSION-CONTROLLER
Route::get('/logout', 'backendSessionController@destroy');
Route::get('/backend', 'backendSessionController@index')->middleware('guest')->name('login');
Route::post('/do_login', 'backendSessionController@do_login');

// APP-CONTROLLER
Route::get('/preferences', 'appController@index')->middleware('auth');
Route::get('/view_ssi_records', 'appController@viewAllSSI')->middleware('auth');
Route::get('/view_atc_records', 'appController@viewAllATC')->middleware('auth');
Route::get('/view_lto_records', 'appController@viewAllLTO')->middleware('auth');
Route::get('/view_pressure_test_records', 'appController@viewAllPressureTestRecords')->middleware('auth');
Route::get('/document_review/{id}', 'appController@viewDocument')->middleware(['auth']);


Route::get('/displayDocument', 'appController@viewDocumentGET')->middleware(['auth']);
Route::post('/viewDocument', 'appController@viewDocumentPOST')->middleware(['auth']);
Route::post('/open_assign_tree', 'appController@assignTree')->middleware(['auth']);
Route::post('/send_job', 'appController@sendJob')->middleware(['auth']);
Route::post('/send_job_to_hq', 'appController@sendJobToHQ')->middleware(['auth']);
Route::post('/document_valid', 'appController@documentValid')->middleware(['auth']);

//LPG-CNG-ROUTES
Route::get('/lpg_cng_dashboard', 'appController@lpgCngDashboard')->middleware(['auth']);

//GAS-PROCESSING-FACILITIES-ROUTES
Route::get('/gas_processing_facilities_dashboard', 'appController@gasProcessingFacilitiesDashboard')->middleware(['auth']);

//GAS-PIPELINES-ROUTES
Route::get('/gas_pipelines_dashboard', 'appController@gasPipelinesDashboard')->middleware(['auth']);

//PROJECT-MONITORING-ROUTES
Route::get('/project_monitoring_dashboard', 'appController@projectMonitoringDashboard')->middleware(['auth']);
Route::get('/pm_feed_create', 'appController@projectMonitoringFeedCreateForm')->middleware(['auth']);
Route::get('/pm_feed_search', 'appController@projectMonitoringFeedSearch')->middleware(['auth']);
Route::get('/pm_feed_edit', 'appController@projectMonitoringFeedEditForm')->middleware(['auth']);
Route::get('/pm_feed_report', 'appController@projectMonitoringFeedReportForm')->middleware(['auth']);
Route::get('/pm_feed_document', 'appController@projectMonitoringFeedDocumentForm')->middleware(['auth']);

Route::get('/pm_milestone_create', 'appController@projectMonitoringMilestoneCreateForm')->middleware(['auth']);
Route::get('/pm_milestone_edit', 'appController@projectMonitoringMilestoneEditForm')->middleware(['auth']);
Route::get('/pm_milestone_search', 'appController@projectMonitoringMilestoneSearch')->middleware(['auth']);

Route::get('/pm_continous_create', 'appController@projectMonitoringContinousCreateForm')->middleware(['auth']);
Route::get('/pm_continous_edit', 'appController@projectMonitoringContinousEditForm')->middleware(['auth']);
Route::get('/pm_continous_search', 'appController@projectMonitoringContinousSearch')->middleware(['auth']);

Route::get('/pm_permit_and_consent_create', 'appController@projectMonitoringPermitAndConsentCreateForm')->middleware(['auth']);
Route::get('/pm_permit_and_consent_edit', 'appController@projectMonitoringPermitAndConsentEditForm')->middleware(['auth']);
Route::get('/pm_permit_and_consent_search', 'appController@projectMonitoringPermitAndConsentSearch')->middleware(['auth']);

//faker route
Route::get('/faker', function(){
    $users = factory(App\User::class, 10)->make();
    dd($users);
})->middleware(['auth']);




//GAS-PRODUCTION-UTILIZATION-ROUTES
Route::get('/gas_production_utilization_dashboard', 'appController@gasProductionUtilizationDashboard')->middleware(['auth']);

//GAS-PRODUCTION-EXPORT-OPERATIONS-ROUTES
Route::get('/gas_production_export_operations_dashboard', 'appController@gasProductionExportOperationsDashboard')->middleware(['auth']);

//GAS-SUBSURFACE-ROUTES
Route::get('/gas_subsurface_dashboard', 'appController@gasSubsurfaceDashboard')->middleware(['auth']);


//GAS-DIARY-ROUTES
Route::get('/gas_diary_dashboard', 'appController@gasDiaryDashboard')->middleware(['auth']);

//INSPECTION-ROUTES
Route::get('/inspection_dashboard', 'appController@inspectionDashboard')->middleware(['auth']);


Route::post('/change_password', 'appController@changePassword')->middleware('auth');
Route::post('/update_staff_records', 'appController@updateStaffRecords')->middleware('auth');
Route::post('/make_report_comment', 'appController@makeReportComment')->middleware('auth');
Route::post('/project_monitoring_feed_create', 'appController@projectMonitoringFeedCreate')->middleware(['auth']);



























// ADMINISTRATOR-CONTROLLER
Route::get('/admin', 'administratorController@index')->middleware(['auth', 'admin']);
Route::get('/staffs_list', 'administratorController@showAllStaffs')->middleware(['auth', 'admin']);
Route::get('/companies_list', 'administratorController@showAllCompanies')->middleware(['auth']);
Route::get('/create_staff', 'administratorController@displayCreateStaffForm')->middleware(['auth', 'admin']);
Route::get('/create_company', 'administratorController@displayCreateCompanyForm')->middleware(['auth', 'admin']);
Route::get('/settings', 'administratorController@displayCreateCompanyForm')->middleware(['auth', 'admin']);
Route::get('/edit_staff/{staffID}', 'administratorController@editStaffRecords')->middleware(['auth', 'admin']);

Route::post('/create_staff', 'administratorController@createStaff')->middleware(['auth', 'admin']);
Route::post('/create_company', 'administratorController@createCompany')->middleware(['auth']);
Route::post('/update_staff_role', 'administratorController@updateStaffRole')->middleware(['auth', 'admin']);

// MARKETER-CONTROLLER
Route::get('/marketer', 'marketerController@index')->middleware(['auth']);
Route::get('/marketer_app_doc_review', 'marketerController@marketerAppDocReview')->middleware(['auth']);
Route::get('/marketer_records', 'marketerController@showMarketerRecords')->middleware(['auth']);
Route::get('/app_doc_rev', 'marketerController@applicationDocumentReview')->middleware(['auth']);
Route::get('/lpg_retailer_outlet', 'marketerController@LPGRetailerOutletView')->middleware(['auth']);
Route::get('/site_suitability_requirement', 'marketerController@getSiteSuitablityInspectionView')->middleware(['auth']);
Route::get('/atc_requirement', 'marketerController@getATCRequirementView')->middleware(['auth']);
Route::get('/lto_requirement', 'marketerController@getLTORequirementView')->middleware(['auth']);
Route::get('/takeover_requirement', 'marketerController@getTakeoverRequirementView')->middleware(['auth']);
Route::get('/mDocument_review/{id}', 'marketerController@showDocumentsRequirement')->middleware(['auth']);
Route::get('/mDocument_edit/{id}', 'marketerController@showDocumentsRequirementDocEdit')->middleware(['auth']);
Route::get('/mUpload_documents', 'marketerController@marketerUploadDocumentsView')->middleware(['auth']);
Route::get('/m_view_lto_records', 'marketerController@viewAllLTO')->middleware(['auth']);
Route::get('/m_view_lto_records', 'marketerController@viewAllLTO')->middleware(['auth']);
Route::get('/create_company', 'marketerController@showCreateCompany')->middleware(['auth']);



Route::get('/apply_for_ssi_get', 'marketerController@applyForSSIGet')->middleware(['auth']);
Route::get('/apply_for_atc_get', 'marketerController@applyForATCGet')->middleware(['auth']);
Route::get('/apply_for_lto_get', 'marketerController@applyForLTOGet')->middleware(['auth']);
Route::get('/apply_for_lto_renewal_get', 'marketerController@applyForLTORenewalGet')->middleware(['auth']);
Route::get('/apply_for_takeover_get', 'marketerController@applyForTakeOverGet')->middleware(['auth']);
Route::get('/apply_for_pressure_test_get', 'marketerController@applyForPressureTestGet')->middleware(['auth']);





Route::post('/marketer_create_company', 'marketerController@createCompany')->middleware(['auth']);
Route::post('/apply_for_site_suitability_inspection', 'marketerController@handleSiteSuitablityInspectionPhase1')->middleware(['auth']);
Route::post('/site_suit_req_upload', 'marketerController@handleSiteSuitablityInspection')->middleware(['auth']);

Route::post('/apply_for_approval_to_construct', 'marketerController@handleATCPhase1')->middleware(['auth']);
Route::post('/atc_req_upload', 'marketerController@handleATC')->middleware(['auth']);

Route::post('/apply_for_license_to_operate', 'marketerController@handleLTOPhase1')->middleware(['auth']);
Route::post('/lto_req_upload', 'marketerController@handleLTO')->middleware(['auth']);

// Route::post('/apply_for_renewal', 'marketerController@handleLTORenewalPhase1')->middleware(['auth', 'marketer']);
// Route::post('/renewal_req_upload', 'marketerController@handleLTORenewal')->middleware(['auth', 'marketer']);

Route::post('/apply_for_takeover', 'marketerController@handleTakeoverPhase1')->middleware(['auth']);
Route::post('/takeover_req_upload', 'marketerController@handleTakeover')->middleware(['auth']);

Route::post('/apply_for_pressure_test', 'marketerController@handlePressureTestPhase1')->middleware(['auth']);



Route::post('/apply_for_atc', 'marketerController@applyForATC')->middleware(['auth']);
Route::post('/apply_for_lto', 'marketerController@applyForLTO')->middleware(['auth']);
Route::post('/apply_for_lto_renewal', 'marketerController@applyForLTORenewal')->middleware(['auth']);


Route::post('/getMarketerDocs', 'marketerController@getDocs')->middleware(['auth']);
Route::post('/app_doc_rev', 'marketerController@applicationDocumentReviewPhase')->middleware(['auth']);

Route::post('/edit_document_upload', 'marketerController@applicationDocumentReviewPhaseUpdate')->middleware(['auth']);
Route::post('/edit_document_application', 'marketerController@applicationDocumentReviewPhaseUpdate2')->middleware(['auth']);
Route::post('/mSubmitApplication', 'marketerController@submitApplicationRequest')->middleware(['auth']);


//STAFF-CONTROLLER
Route::get('/staff', 'staffController@index')->middleware(['auth', 'staff']);
Route::get('/staff_pending', 'staffController@staffPending')->middleware(['auth', 'staff']);
Route::get('/staff_outbox', 'staffController@staffOutbox')->middleware(['auth', 'staff']);
Route::get('/staff_completed', 'staffController@staffCompleted')->middleware(['auth', 'staff']);
Route::get('/stDocument_review', 'staffController@staffDocumentReview')->middleware(['auth', 'staff']);
Route::get('/create_company/{applicationID}', 'staffController@showCreateCompany')->middleware(['auth', 'staff']); // might be obsolete soon or by now

Route::post('/staff_create_company', 'staffController@createCompany')->middleware(['auth', 'staff']); // might be obsolete soon or by now
Route::post('/stUpload_report', 'staffController@uploadReport')->middleware(['auth', 'staff']);
Route::post('/stUpload_construction_report', 'staffController@uploadContructionReportATC')->middleware(['auth', 'staff']);
Route::post('/up_to_teamlead', 'staffController@upToTeamlead')->middleware(['auth', 'staff']);


//TEAMLEAD-CONTROLLER
Route::get('/teamlead', 'teamleadController@index')->middleware(['auth', 'teamlead']);
Route::get('/tlDocument_review', 'teamleadController@teamleadDocumentReview')->middleware(['auth', 'teamlead']);
Route::get('/teamlead_pending', 'teamleadController@teamleadPending')->middleware(['auth', 'teamlead']);
Route::get('/teamlead_outbox', 'teamleadController@teamleadOutbox')->middleware(['auth', 'teamlead']);
Route::get('/teamlead_completed', 'teamleadController@teamleadCompleted')->middleware(['auth', 'teamlead']);

Route::post('/tlDocument_assign', 'teamleadController@teamleadDocumentAssign')->middleware(['auth', 'teamlead']);
Route::post('/tlApproves', 'teamleadController@teamleadApproves')->middleware(['auth', 'teamlead']);
Route::post('/up_to_headgas', 'teamleadController@upToHeadGas')->middleware(['auth', 'teamlead']);


//HEAD GAS
Route::get('/headgas', 'headgasController@index')->middleware(['auth', 'headgas']);
Route::get('/headgas_document_review', 'headgasController@headGasDocumentReview')->middleware(['auth', 'headgas']);
Route::get('/headgas_pending', 'headgasController@headgasPending')->middleware(['auth', 'headgas']);
Route::get('/headgas_outbox', 'headgasController@headgasOutbox')->middleware(['auth', 'headgas']);
Route::get('/headgas_completed', 'headgasController@headgasCompleted')->middleware(['auth', 'headgas']);

// Route::post('/send_job', 'headgasController@sendJob')->middleware(['auth', 'headgas']);
Route::post('/push_down_to_teamlead', 'headgasController@forwardApplicationToTeamLead')->middleware(['auth', 'headgas']);
Route::post('/hgApproves', 'headgasController@headGasApproves')->middleware(['auth', 'headgas']);


//ADO
Route::get('/ado', 'adoController@index')->middleware(['auth', 'ado']);
Route::get('/ado_pending', 'adoController@adoPending')->middleware(['auth', 'ado']);
Route::get('/ado_outbox', 'adoController@adoOutbox')->middleware(['auth', 'ado']);
Route::get('/ado_completed', 'adoController@adoCompleted')->middleware(['auth', 'ado']);
Route::get('/ado_document_review', 'adoController@adoDocumentReview')->middleware(['auth', 'ado']);

Route::post('/push_down_to_headgas', 'adoController@forwardApplicationToHeadGas')->middleware(['auth', 'ado']);
Route::post('/ado_decides', 'adoController@adoApproves')->middleware(['auth', 'ado']);


//ZOPSCON
Route::get('/zopscon', 'zopsconController@index')->middleware(['auth', 'zopscon']);
Route::get('/zopscon_inbox_all', 'zopsconController@zopsconInboxAll')->middleware(['auth', 'zopscon']); // testing routes for vuejs
Route::get('/zopscon_pending', 'zopsconController@zopsconPending')->middleware(['auth', 'zopscon']);
Route::get('/zopscon_outbox', 'zopsconController@zopsconOutbox')->middleware(['auth', 'zopscon']);
Route::get('/zopscon_completed', 'zopsconController@zopsconCompleted')->middleware(['auth', 'zopscon']);
Route::get('/zopscon_document_review', 'zopsconController@zopsconDocumentReview')->middleware(['auth', 'zopscon']);
// Route::get('/zopscon_document_review/{applicationID}', 'zopsconController@zopsconDocumentReview')->middleware(['auth', 'zopscon']);


Route::post('/push_down_to_ADO', 'zopsconController@forwardApplicationToADO')->middleware(['auth', 'zopscon']);
Route::post('/zopscon_decides', 'zopsconController@zopsconApproves')->middleware(['auth', 'zopscon']);



//MANAGER GAS
Route::get('/managergas', 'managergasController@index')->middleware(['auth', 'managergas']);
Route::get('/managergas_pending', 'managergasController@managergasPending')->middleware(['auth', 'managergas']);
Route::get('/managergas_outbox', 'managergasController@managergasOutbox')->middleware(['auth', 'managergas']);
Route::get('/managergas_completed', 'managergasController@managergasCompleted')->middleware(['auth', 'managergas']);
Route::get('/managergas_document_review', 'managergasController@managergasDocumentReview')->middleware(['auth', 'managergas']);

Route::post('/push_down_to_headgas', 'managergasController@forwardApplicationToHeadGas')->middleware(['auth', 'managergas']);
Route::post('/managergas_decides', 'managergasController@managergasApproves')->middleware(['auth', 'managergas']);





Route::get('migrate', function (Request $request) {
    $ret = Artisan::call('migrate', array('--force' => true, '--seed' => true));
    return ['message' => 'Migration successfull', 'result' => $ret];
});

Route::get('migrate-rollback', function (Request $request) {
    $ret = Artisan::call('migrate:rollback', array());
    return ['message' => 'Migration successfull', 'result' => $ret];
});

Route::get('storage-link', function (Request $request) {
    $ret = Artisan::call('storage:link', array());
    return ['message' => 'Migration successfull', 'result' => $ret];
});


