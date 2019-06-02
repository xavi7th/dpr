<?php
use App\Http\Controllers\APIController;

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


Route::group(['middleware' => 'auth'], function () {

	// APP-CONTROLLER
	Route::get('/preferences', 'appController@index');
	Route::get('/view_ssi_records', 'appController@viewAllSSI');

	Route::get('/view_atc_records', 'appController@viewAllATC');
	Route::get('/view_ati_records', 'appController@viewAllAddOnATI');

	Route::get('/view_lto_records', 'appController@viewAllLTO')->name('lto.all');
	Route::post('/view_lto_records/search', 'appController@viewAllLTO')->name('lto.search');
	Route::get('/view_addon_lto_records', 'appController@viewAllAddonLTO');
	Route::get('/view_catd_lto_records', 'appController@viewAllCatDLTO');


	Route::get('/view_renewal_records', 'appController@viewAllLpgCngRenewal');
	Route::get('/view_catd_renewal_records', 'appController@viewAllCatdRenewal');
	Route::get('/view_takeover_records', 'appController@viewAllLpgCngTakeover');


	Route::get('/view_pressure_test_records', 'appController@viewAllPressureTestRecords');


	Route::get('/document_review/{id}', 'appController@viewDocument');


	Route::get('/displayDocument', 'appController@viewDocumentGET');
	Route::post('/viewDocument', 'appController@viewDocumentPOST');
	Route::post('/open_assign_tree', 'appController@assignTree');
	Route::post('/send_job', 'appController@sendJob');
	Route::post('/send_job_to_hq', 'appController@sendJobToHQ');
	Route::post('/document_valid', 'appController@documentValid');
	Route::post('/upload_license', 'appController@uploadLicense');

	Route::post('/advanced_search_atc', 'appController@advancedSearchAtc');

	//LPG-CNG-ROUTES
	Route::get('/lpg_cng_dashboard', 'appController@lpgCngDashboard');

	//GAS-PROCESSING-FACILITIES-ROUTES
	Route::get('/gas_processing_facilities_dashboard', 'appController@gasProcessingFacilitiesDashboard');
	Route::get('/custody_transfer_meters_search', 'appController@custodyTransferMetersSearch');
	Route::get('/flare_meters_search', 'appController@flareMetersSearch');
	Route::get('/fuel_meters_search', 'appController@fuelMetersSearch');
	Route::get('/production_allocation_transfer_meters_search', 'appController@productionAllocationTransferMetersSearch');

	//GAS-PIPELINES-ROUTES
	Route::get('/gas_pipelines_dashboard', 'appController@gasPipelinesDashboard');
	Route::get('/gas_pipelines_pts_search', 'appController@gasPipelinesPTSSearch');
	Route::get('/gas_pipelines_opll_search', 'appController@gasPipelinesOPLLSearch');
	Route::get('/gas_pipelines_hydrotesting_search', 'appController@gasPipelinesHydroTestingSearch');
	Route::get('/gas_pipelines_pigging_search', 'appController@gasPipelinesPiggingSearch');

	//PROJECT-MONITORING-ROUTES
	Route::get('/project_monitoring_dashboard', 'appController@projectMonitoringDashboard');
	Route::get('/pm_feed_create', 'appController@projectMonitoringFeedCreateForm');
	Route::get('/pm_feed_search', 'appController@projectMonitoringFeedSearch');
	Route::get('/pm_feed_edit', 'appController@projectMonitoringFeedEditForm');
	Route::get('/pm_feed_report', 'appController@projectMonitoringFeedReportForm');
	Route::get('/pm_feed_document', 'appController@projectMonitoringFeedDocumentForm');

	Route::get('/pm_milestone_create', 'appController@projectMonitoringMilestoneCreateForm');
	Route::get('/pm_milestone_edit', 'appController@projectMonitoringMilestoneEditForm');
	Route::get('/pm_milestone_search', 'appController@projectMonitoringMilestoneSearch');

	Route::get('/pm_continous_create', 'appController@projectMonitoringContinousCreateForm');
	Route::get('/pm_continous_edit', 'appController@projectMonitoringContinousEditForm');
	Route::get('/pm_continous_search', 'appController@projectMonitoringContinousSearch');

	Route::get('/pm_permit_and_consent_create', 'appController@projectMonitoringPermitAndConsentCreateForm');
	Route::get('/pm_permit_and_consent_edit', 'appController@projectMonitoringPermitAndConsentEditForm');
	Route::get('/pm_permit_and_consent_search', 'appController@projectMonitoringPermitAndConsentSearch');

	//GAS-PRODUCTION-UTILIZATION-ROUTES
	Route::get('/gas_production_utilization_dashboard', 'appController@gasProductionUtilizationDashboard');

	//GAS-PRODUCTION-EXPORT-OPERATIONS-ROUTES
	Route::get('/gas_production_export_operations_dashboard', 'appController@gasProductionExportOperationsDashboard');

	//GAS-SUBSURFACE-ROUTES
	Route::get('/gas_subsurface_dashboard', 'appController@gasSubsurfaceDashboard');


	//GAS-DIARY-ROUTES
	Route::get('/gas_diary_dashboard', 'appController@gasDiaryDashboard');

	//INSPECTION-ROUTES
	Route::get('/inspection_dashboard', 'appController@inspectionDashboard');

	//REPORTS-ROUTES
	Route::get('/reports_dashboard', 'appController@reportsDashboard');


	Route::post('/change_password', 'appController@changePassword');
	Route::post('/update_staff_records', 'appController@updateStaffRecords');
	Route::post('/make_report_comment', 'appController@makeReportComment');
	Route::post('/project_monitoring_feed_create', 'appController@projectMonitoringFeedCreate');

	//PREVIOUS RECORDS
	Route::get('/previous_records', 'appController@previousRecords');

	Route::get('/prev_ssi_record_get', 'appController@prevSSIRecordGet');
	Route::get('/prev_atc_record_get', 'appController@prevATCRecordGet');
	Route::get('/prev_lto_record_get', 'appController@prevLTORecordGet');
	Route::get('/prev_lpg_renewal_record_get', 'appController@prevRenewalRecordGet');
	Route::get('/prev_takeover_record_get', 'appController@prevTakeoverRecordGet');

	Route::post('/send_atc_old_records', 'appController@sendAtcOldRecords');





	//faker route
	Route::get('/faker', function () {
		$users = factory(App\User::class, 10)->make();
		dd($users);
	});
});















// ADMINISTRATOR-CONTROLLER
Route::get('/admin', 'administratorController@index')->middleware(['auth', 'admin']);
Route::get('/staffs_list', 'administratorController@showAllStaffs')->middleware(['auth', 'admin']);
Route::get('/companies_list', 'administratorController@showAllCompanies');
Route::get('/create_staff', 'administratorController@displayCreateStaffForm')->middleware(['auth', 'admin']);
Route::get('/create_company', 'administratorController@displayCreateCompanyForm')->middleware(['auth', 'admin']);
Route::get('/settings', 'administratorController@displayCreateCompanyForm')->middleware(['auth', 'admin']);
Route::get('/edit_staff/{staffID}', 'administratorController@editStaffRecords')->middleware(['auth', 'admin']);

Route::post('/create_staff', 'administratorController@createStaff')->middleware(['auth', 'admin']);
Route::post('/create_company', 'administratorController@createCompany');
Route::post('/update_staff_role', 'administratorController@updateStaffRole')->middleware(['auth', 'admin']);

// MARKETER-CONTROLLER
Route::get('/marketer', 'marketerController@index');
Route::get('/marketer_app_doc_review', 'marketerController@marketerAppDocReview');
Route::get('/marketer_records', 'marketerController@showMarketerRecords');
Route::get('/app_doc_rev', 'marketerController@applicationDocumentReview');
Route::get('/lpg_retailer_outlet', 'marketerController@LPGRetailerOutletView');
Route::get('/site_suitability_requirement', 'marketerController@getSiteSuitablityInspectionView');
Route::get('/atc_requirement', 'marketerController@getATCRequirementView');
Route::get('/ati_requirement', 'marketerController@getATIRequirementView');
Route::get('/lto_requirement', 'marketerController@getLTORequirementView');
Route::get('/addon_lto_requirement', 'marketerController@getAddonLTORequirementView');
Route::get('/catd_lto_requirement', 'marketerController@getCatDLTORequirementView');
Route::get('/takeover_requirement', 'marketerController@getTakeoverRequirementView');
Route::get('/mDocument_review/{id}', 'marketerController@showDocumentsRequirement')->name('marketer.docs.review');
Route::get('/mDocument_edit/{id}', 'marketerController@showDocumentsRequirementDocEdit');
Route::get('/mUpload_documents', 'marketerController@marketerUploadDocumentsView');
Route::get('/m_view_lto_records', 'marketerController@viewAllLTO');
Route::get('/m_view_lto_records', 'marketerController@viewAllLTO');
Route::get('/create_company', 'marketerController@showCreateCompany');



Route::get('/apply_for_ssi_get', 'marketerController@applyForSSIGet');
Route::get('/apply_for_atc_get', 'marketerController@applyForATCGet');
Route::get('/apply_for_ati_get', 'marketerController@applyForATIGet');
Route::get('/apply_for_lto_get', 'marketerController@applyForLTOGet');
Route::get('/apply_for_addon_lto_get', 'marketerController@applyForAddonLTOGet');
Route::get('/apply_for_catd_lto_get', 'marketerController@applyForCatDLTOGet');
Route::get('/apply_for_lto_renewal_get', 'marketerController@applyForLTORenewalGet');
Route::get('/apply_for_takeover_get', 'marketerController@applyForTakeOverGet');
Route::get('/apply_for_pressure_test_get', 'marketerController@applyForPressureTestGet');

Route::get('/apply_for_pts', 'marketerController@applyForPTS');
Route::get('/apply_for_opll', 'marketerController@applyForOPLL');

Route::get('/apply_for_hydrotesting', 'marketerController@applyForHydroTesting');
Route::get('/apply_for_pigging', 'marketerController@applyForPigging');

Route::get('/custody_transfer_meters', 'marketerController@custodyTransferMeters');
Route::get('/flare_meters', 'marketerController@flareMeters');
Route::get('/fuel_meters', 'marketerController@fuelMeters');
Route::get('/production_allocation_transfer_meters', 'marketerController@productionAllocationTransferMeters');





Route::post('/marketer_create_company', 'marketerController@createCompany');
Route::post('/apply_for_site_suitability_inspection', 'marketerController@handleSiteSuitablityInspectionPhase1');
Route::post('/site_suit_req_upload', 'marketerController@handleSiteSuitablityInspection');

Route::post('/apply_for_approval_to_construct', 'marketerController@handleATCPhase1');
Route::post('/apply_for_addon_ati', 'marketerController@handleAddonATIPhase1');
Route::post('/atc_req_upload', 'marketerController@handleATC');
Route::post('/ati_req_upload', 'marketerController@handleAddonATI');

Route::post('/apply_for_license_to_operate', 'marketerController@handleLTOPhase1');
Route::post('/apply_for_addon_license_to_operate', 'marketerController@handleAddonLTOPhase1');
Route::post('/apply_for_catd_license_to_operate', 'marketerController@handleCAtDLTOPhase1');
Route::post('/lto_req_upload', 'marketerController@handleLTO');
Route::post('/addon_lto_req_upload', 'marketerController@handleAddonLTO');
Route::post('/catd_lto_req_upload', 'marketerController@handleCatDLTO');

// Route::post('/apply_for_renewal', 'marketerController@handleLTORenewalPhase1')->middleware(['auth', 'marketer']);
// Route::post('/renewal_req_upload', 'marketerController@handleLTORenewal')->middleware(['auth', 'marketer']);

Route::post('/apply_for_takeover', 'marketerController@handleTakeoverPhase1');
Route::post('/takeover_req_upload', 'marketerController@handleTakeover');

Route::post('/apply_for_pressure_test', 'marketerController@handlePressureTestPhase1');


Route::post('/upload_implementation_schedule', 'marketerController@uploadImplementationSchedule');


Route::post('/apply_for_atc', 'marketerController@applyForATC');
Route::post('/apply_for_lto', 'marketerController@applyForLTO');
Route::post('/apply_for_lto_renewal', 'marketerController@applyForLTORenewal');


Route::post('/getMarketerDocs', 'marketerController@getDocs');
Route::post('/app_doc_rev', 'marketerController@applicationDocumentReviewPhase');

Route::post('/edit_document_upload', 'marketerController@applicationDocumentReviewPhaseUpdate');
Route::post('/edit_document_application', 'marketerController@applicationDocumentReviewPhaseUpdate2');
Route::post('/mSubmitApplication', 'marketerController@submitApplicationRequest');


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
Route::post('/set_due_date', 'staffController@setDateTested')->middleware(['auth', 'staff']);
Route::post('/construction_started', 'staffController@constructionStarted')->middleware(['auth', 'staff']);


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
Route::post('/back_to_zopscon', 'headgasController@sendBackToZopscon')->middleware(['auth', 'headgas']);


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


/**
 * API Routes
 */


APIController::routes();



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
