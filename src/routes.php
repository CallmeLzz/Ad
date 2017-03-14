<?php

Route::get('admin', [
    'as' => 'admin',
    'uses' => 'Source\Ad\Controllers\AdController@index'
]);

////////////////////////////////////////////////SAMPLE///////////////////////////////////////////////
// List
Route::get('admin/sample', [
    'as' => 'admin.sample',
    'uses' => 'Source\Ad\Controllers\SampleAdminController@index'
]);

// Edit view
Route::get('admin/sample/edit', [
    'as' => 'admin_sample.edit',
    'uses' => 'Source\Ad\Controllers\SampleAdminController@edit'
]);

// Edit
Route::post('admin/sample/edit', [
    'as' => 'admin_sample.post',
    'uses' => 'Source\Ad\Controllers\SampleAdminController@post'
]);

// Delete
Route::get('admin/sample/delete', [
    'as' => 'admin_sample.delete',
    'uses' => 'Source\Ad\Controllers\SampleAdminController@delete'
]);
/////////////////////////////////////////////////CATEGORIES//////////////////////////////////////////
// List
Route::get('admin/sample_category', [
    'as' => 'admin.sample_category',
    'uses' => 'Source\Ad\Controllers\SampleCategoryAdminController@index'
]);

// Edit view
Route::get('admin/sample_category/edit', [
    'as' => 'admin_sample_category.edit',
    'uses' => 'Source\Ad\Controllers\SampleCategoryAdminController@edit'
]);

// Edit
Route::post('admin/sample_category/edit', [
    'as' => 'admin_sample_category.post',
    'uses' => 'Source\Ad\Controllers\SampleCategoryAdminController@post'
]);

// Delete
Route::get('admin/sample_category/delete', [
    'as' => 'admin_sample_category.delete',
    'uses' => 'Source\Ad\Controllers\SampleCategoryAdminController@delete'
]);
//////////////////////////////////////////////////FULL EXPORT//////////////////////////////////////
Route::get('admin/sample/export', [
    'as' => 'admin_sample.export',
    'uses' => 'Source\Ad\Controllers\SampleAdminController@exportSample'
]);
Route::get('admin/sample_category/export', [
    'as' => 'admin_sample_category.export',
    'uses' => 'Source\Ad\Controllers\SampleCategoryAdminController@exportCategory'
]);
Route::get('admin/contact/export', [
    'as' => 'admin_contact.export',
    'uses' => 'Source\Ad\Controllers\SendMailAdminController@exportContact'
]);

//////////////////////////////////////////////CONTACT////////////////////////////////////////////////
Route::get('admin/contact', [
    'as' => 'admin.contact',
    'uses' => 'Source\Ad\Controllers\SendMailAdminController@index'
]);
// Edit view
Route::get('admin/contact/edit', [
    'as' => 'admin_contact.edit',
    'uses' => 'Source\Ad\Controllers\SendMailAdminController@edit'
]);

// Edit
Route::post('admin/contact/edit', [
    'as' => 'admin_contact.post',
    'uses' => 'Source\Ad\Controllers\SendMailAdminController@post'
]);

// Delete
Route::get('admin/contact/delete', [
    'as' => 'admin_contact.delete',
    'uses' => 'Source\Ad\Controllers\SendMailAdminController@delete'
]);

/////////////////////////////////UPLOAD///////////////////////////////////////////////////////////
// List
Route::get('admin/image', [
    'as' => 'admin.image',
    'uses' => 'Source\Ad\Controllers\UploadAdminController@index'
]);

// Edit view
Route::get('admin/image/edit', [
    'as' => 'admin_image.edit',
    'uses' => 'Source\Ad\Controllers\UploadAdminController@edit'
]);

// Edit
Route::post('admin/image/edit', [
    'as' => 'admin_image.post',
    'uses' => 'Source\Ad\Controllers\UploadAdminController@post'
]);

// Delete
Route::get('admin/image/delete', [
    'as' => 'admin_image.delete',
    'uses' => 'Source\Ad\Controllers\UploadAdminController@delete'
]);