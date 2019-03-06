<?php

Route::group(['middleware' => 'web', 'prefix' => 'cfc', 'namespace' => 'Modules\Cfc\Http\Controllers'], function()
{
    Route::get('/', 'CfcController@index')->name('cfc.dashboard');

    Route::resource('participants', 'ParticipantController');
});
