<?php

use Illuminate\Support\Facades\Route;

Route::get('/','JobController@index')->name('job.admin.index');
Route::get('/create','JobController@create')->name('job.admin.create');
Route::get('/edit/{id}', 'JobController@edit')->name('job.admin.edit');
Route::post('/update','JobController@applicantsUpdate')->name('job.admin.applicants.applicantsUpdate');
Route::post('/bulkEdit','JobController@bulkEdit')->name('job.admin.bulkEdit');
Route::post('/store/{id}','JobController@store')->name('job.admin.store');
Route::get('/getForSelect2','JobController@getForSelect2')->name('job.admin.getForSelect2');

//Job Types
Route::get('/job-type','JobTypeController@index')->name('job.admin.type.index');
Route::get('/job-type/edit/{id}','JobTypeController@edit')->name('job.admin.type.edit');
Route::post('/job-type/store/{id}','JobTypeController@store')->name('job.admin.type.store');
Route::post('/job-type/editBulk','JobTypeController@editBulk')->name('job.admin.type.bulkEdit');

Route::get('/all-applicants','JobController@allApplicants')->name('job.admin.allApplicants');
Route::get('/all-applicants/{status}/{id}','JobController@applicantsChangeStatus')->name('job.admin.applicants.changeStatus');
Route::get('/all-applicants/edit/{id}','JobController@applicantsEdit')->name('job.admin.applicants.edit');
Route::post('/all-applicants/bulkEdit','JobController@applicantsBulkEdit')->name('job.admin.applicants.bulkEdit');
Route::get('/all-applicants/export','JobController@applicantsExport')->name('job.admin.applicants.export');

Route::get('/status-applicants','JobController@statusApplicants')->name('job.admin.statusApplicants');
Route::get('/status-applicants/{status}/{id}','JobController@statusapplicantsChangeStatus')->name('job.admin.status-applicants.changeStatus');
Route::get('/status-applicants/edit/{id}','JobController@statusapplicantsEdit')->name('job.admin.status-applicants.edit');
Route::post('/status-applicants/bulkEdit','JobController@statusapplicantsBulkEdit')->name('job.admin.status-applicants.bulkEdit');
Route::get('/status-applicants/export','JobController@statusapplicantsExport')->name('job.admin.status-applicants.export');

Route::get('/meeting-applicants','JobController@meetingApplicants')->name('job.admin.meetingApplicants');
Route::get('/meeting-applicants/{status}/{id}','JobController@applicantsChangeStatus')->name('job.admin.meeting-applicants.changeStatus');
Route::get('/meeting-applicants/edit/{id}','JobController@applicantsEdit')->name('job.admin.meeting-applicants.edit');
Route::post('/meeting-applicants/bulkEdit','JobController@applicantsBulkEdit')->name('job.admin.meeting-applicants.bulkEdit');
Route::get('/meeting-applicants/export','JobController@applicantsExport')->name('job.admin.meeting-applicants.export');

Route::get('/category','JobCategoryController@index')->name('job.admin.category.index');
Route::get('/category/getForSelect2','JobCategoryController@getForSelect2')->name('job.admin.category.getForSelect2');
Route::get('/category/edit/{id}','JobCategoryController@edit')->name('job.admin.category.edit');
Route::post('/category/store/{id}','JobCategoryController@store')->name('job.admin.category.store');
Route::post('/category/bulkEdit','JobCategoryController@bulkEdit')->name('job.admin.category.bulkEdit');
