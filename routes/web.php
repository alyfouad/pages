<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LiveTrackingController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login']);
Route::get('logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function ()
{

    Route::get('lang/{locale}', [LocalizationController::class]);

    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    
    Route::get('live_tracking', [LiveTrackingController::class,'index'])->name('live_tracking');
    Route::get('live_tracking/data', [LiveTrackingController::class,'data'])->name('live_tracking_data');
    
});

