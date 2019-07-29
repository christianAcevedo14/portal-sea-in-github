<?php

use App\City;
use App\User;
use Modules\Volunteer\Entities\Licence;
use Modules\Volunteer\Entities\Scholarship;

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
        return User::orderBy('first_name')->get();
    });

    Route::get('/scholarships', function () {
        return Scholarship::all();
    });

    Route::get('/licences', function () {
        return Licence::all();
    });
});

