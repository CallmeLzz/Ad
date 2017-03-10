<?php

Route::get('admin', [
    'as' => 'admin',
    'uses' => 'Source\Ad\Controllers\AdController@index'
]);