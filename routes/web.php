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

// BACKEND-SESSION-CONTROLLER
Route::get('/logout', 'backendSessionController@destroy');
Route::get('/backend', 'backendSessionController@index')->middleware('guest')->name('login');
Route::post('/do_login', 'backendSessionController@do_login');

// APP-CONTROLLER
Route::get('/preferences', 'appController@index')->middleware('auth');

Route::post('/change_password', 'appController@changePassword')->middleware('auth');
Route::post('/update_staff_records', 'appController@updateStaffRecords')->middleware('auth');
Route::post('/make_report_comment', 'appController@makeReportComment')->middleware('auth');

// ADMINISTRATOR-CONTROLLER
Route::get('/admin', 'administratorController@index')->middleware(['auth', 'admin']);
Route::get('/staffs_list', 'administratorController@showAllStaffs')->middleware(['auth', 'admin']);
Route::get('/companies_list', 'administratorController@showAllCompanies')->middleware(['auth', 'admin']);
Route::get('/create_staff', 'administratorController@displayCreateStaffForm')->middleware(['auth', 'admin']);
Route::get('/create_company', 'administratorController@displayCreateCompanyForm')->middleware(['auth', 'admin']);
Route::get('/settings', 'administratorController@displayCreateCompanyForm')->middleware(['auth', 'admin']);
Route::get('/edit_staff/{staffID}', 'administratorController@editStaffRecords')->middleware(['auth', 'admin']);

Route::post('/create_staff', 'administratorController@createStaff')->middleware(['auth', 'admin']);
Route::post('/create_company', 'administratorController@createCompany')->middleware(['auth', 'admin']);
Route::post('/update_staff_role', 'administratorController@updateStaffRole')->middleware(['auth', 'admin']);

// MARKETER-CONTROLLER
Route::get('/marketer', 'marketerController@index')->middleware(['auth', 'marketer']);
Route::get('/marketer_records', 'marketerController@showMarketerRecords')->middleware(['auth', 'marketer']);
Route::get('/marketer_records', 'marketerController@showMarketerRecords')->middleware(['auth', 'marketer']);
Route::get('/app_doc_rev', 'marketerController@applicationDocumentReview')->middleware(['auth', 'marketer']);
Route::get('/site_suitability_requirement', 'marketerController@getSiteSuitablityInspectionView')->middleware(['auth', 'marketer']);
Route::get('/atc_requirement', 'marketerController@getATCRequirementView')->middleware(['auth', 'marketer']);
Route::get('/mDocument_review/{applicationID}', 'marketerController@showSiteSuitablityRequirement')->middleware(['auth', 'marketer']);
Route::get('/mDocument_edit/{applicationID}', 'marketerController@showSiteSuitablityRequirementDocEdit')->middleware(['auth', 'marketer']);
Route::get('/mUpload_documents', 'marketerController@marketerUploadDocumentsView')->middleware(['auth', 'marketer']);



Route::post('/getMarketerDocs', 'marketerController@getDocs')->middleware(['auth', 'marketer']);
Route::post('/app_doc_rev', 'marketerController@applicationDocumentReviewPhase')->middleware(['auth', 'marketer']);
Route::post('/site_suit_req_upload', 'marketerController@handleSiteSuitablityInspection')->middleware(['auth', 'marketer']);
Route::post('/edit_site_suit_req_upload', 'marketerController@applicationDocumentReviewPhaseUpdate')->middleware(['auth', 'marketer']);
Route::post('/atc_req_upload', 'marketerController@handleATC')->middleware(['auth', 'marketer']);

//STAFF-CONTROLLER
Route::get('/staff', 'staffController@index')->middleware(['auth', 'staff']);
Route::get('/stDocument_review/{applicationID}', 'staffController@staffDocumentReview')->middleware(['auth', 'staff']);
Route::get('/create_company/{applicationID}', 'staffController@showCreateCompany')->middleware(['auth', 'staff']);

Route::post('/staff_create_company', 'staffController@createCompany')->middleware(['auth', 'staff']);
Route::post('/stUpload_report', 'staffController@uploadReport')->middleware(['auth', 'staff']);


//TEAMLEAD-CONTROLLER
Route::get('/teamlead', 'teamleadController@index')->middleware(['auth', 'teamlead']);
Route::get('/tlDocument_review/{applicationID}', 'teamleadController@teamleadDocumentReview')->middleware(['auth', 'teamlead']);

Route::post('/tlDocument_assign', 'teamleadController@teamleadDocumentAssign')->middleware(['auth', 'teamlead']);
Route::post('/tlDecide_site_suitability', 'teamleadController@teamleadDecideSSI')->middleware(['auth', 'teamlead']);
