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