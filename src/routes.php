<?php

Route::get('admin', [
    'as' => 'admin',
    'uses' => 'Source\Ad\Controllers\AdController@index'
]);

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