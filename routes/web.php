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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('loggedUser', function() {
        return auth()->user();
    });
    Route::get('notifications/get', function () {
        return auth()->user()->unreadNotifications;
    });
    Route::get('notifications/markAsRead', function () {
        return auth()->user()->unreadNotifications->markAsRead();
    });
    Route::get('notifications/markAllAsRead', function () {
        return auth()->user()->unreadNotifications->markAsRead();
    });


});

