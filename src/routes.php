<?php

Route::get('admin', [
    'as' => 'admin',
    'uses' => 'Source\Ad\Controllers\AdController@index'
]);

Route::get('admin/sample', [
    'as' => 'admin.sample',
    'uses' => 'Source\Ad\Controllers\SampleAdminController@index'
]);

Route::get('admin/sample/edit', [
    'as' => 'admin_sample.edit',
    'uses' => 'Source\Ad\Controllers\SampleAdminController@edit'
]);

Route::post('admin/sample/edit', [
    'as' => 'admin_sample.post',
    'uses' => 'Source\Ad\Controllers\SampleAdminController@post'
]);