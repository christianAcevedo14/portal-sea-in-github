<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::resource('users', 'UserController');
    Route::put('/update_password' , 'UserController@updatePassword')->name('password.update');
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('loggedUser', function() {
        return Auth::User()->where('id', Auth::id())->with('programmatic_unit.region')->first();
        //return auth()->user();
    });
    Route::get('/users!logged', function () {
        return User::where('id', '!=', Auth::id())->orderBy('first_name')->get();
    });
    Route::get('notifications/get', function () {
        return auth()->user()->unreadNotifications;
    });
    Route::get('notifications/markAsRead/{id}', function ($id) {
        return auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    });
    Route::get('notifications/markAllAsRead', function () {
        return auth()->user()->unreadNotifications->markAsRead();
    });

    Route::resource('offices' , 'OfficeController');
    Route::group(['prefix' => 'offices/{office}'], function (){
        Route::resource('documents', 'DocumentController');
    });
    Route::resource('tutorials' , 'TutorialController');
    Route::get('showTutorials' , 'TutorialController@show');
    Route::put('updateTutorials{id}' , 'TutorialController@update');
    Route::delete('deleteTutorials{id}' , 'TutorialController@destroy');

});
//
//Route::any('{query}',
//    function() { return redirect('/home'); })
//    ->where('query', '.*');

