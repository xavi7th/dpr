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

Route::get('/logout', 'backendSessionController@destroy');
Route::get('/backend', 'backendSessionController@index')->middleware('guest')->name('login');
Route::post('/do_login', 'backendSessionController@do_login');

Route::get('/preferences', 'appController@index')->middleware('auth');
Route::post('/change_password', 'appController@changePassword')->middleware('auth');


Route::get('/admin', 'administratorController@index')->middleware(['auth', 'admin']);
Route::get('/staffs_list', 'administratorController@showAllStaffs')->middleware(['auth', 'admin']);
Route::get('/companies_list', 'administratorController@showAllCompanies')->middleware(['auth', 'admin']);
Route::get('/create_staff', 'administratorController@displayCreateStaffForm')->middleware(['auth', 'admin']);
Route::get('/create_company', 'administratorController@displayCreateCompanyForm')->middleware(['auth', 'admin']);
Route::get('/settings', 'administratorController@displayCreateCompanyForm')->middleware(['auth', 'admin']);
Route::post('/create_staff', 'administratorController@createStaff')->middleware(['auth', 'admin']);
Route::post('/create_company', 'administratorController@createCompany')->middleware(['auth', 'admin']);



Route::get('/marketer', 'marketerController@index')->middleware(['auth', 'marketer']);
Route::get('/marketer_records', 'marketerController@showMarketerRecords')->middleware(['auth', 'marketer']);
Route::get('/marketer_records', 'marketerController@showMarketerRecords')->middleware(['auth', 'marketer']);
Route::get('/app_doc_rev', 'marketerController@applicationDocumentReview')->middleware(['auth', 'marketer']);
Route::get('/site_suitability_requirement', 'marketerController@siteSuitablityRequirement')->middleware(['auth', 'marketer']);
Route::post('/app_doc_rev', 'marketerController@applicationDocumentReviewPhase1')->middleware(['auth', 'marketer']);
Route::post('/site_suit_req_upload', 'marketerController@applicationDocumentReviewPhase2')->middleware(['auth', 'marketer']);


Route::get('/staff', 'staffController@index')->middleware(['auth', 'staff']);
