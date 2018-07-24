<?php

use App\City;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function () {

    Route::get('cities/{id}/zipcodes', function($id) {
        $zipcodes = City::findOrFail($id)->zipcodes;
        return response()->json($zipcodes, 200);
    });

});

