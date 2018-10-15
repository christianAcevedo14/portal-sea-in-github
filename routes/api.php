<?php

use App\City;
use App\User;

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

    Route::get('/users', function () {
        return User::where('title_id', 2)
            ->orWhere('title_id', 12)
            ->orWhere('title_id', 14)
            ->orWhere('title_id', 23)
            ->orWhere('title_id', 24)
            ->orWhere('title_id', 27)
            ->orWhere('title_id', 40)
            ->get();
    });
});

