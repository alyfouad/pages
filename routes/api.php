<?php

use Illuminate\Support\Facades\Route;

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

// all users routes
Route::group(['namespace' => 'Auth', 'middleware' => 'guest:api'], function () {
    // users auth routes
    Route::post('login', 'UserLoginController@login');
    Route::post('password/request', 'ForgotPasswordController@sendResetPasswordCode');
    Route::get('password/reset', 'ResetPasswordController@resetUserPassword')->name('users.password.reset');

});
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('store-location', 'GpsController@store');
});
