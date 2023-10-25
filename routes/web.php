<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BethelTabernacleController;
use App\Http\Controllers\SundaybethelattendanceController;
use App\Http\Controllers\WednesdaybethelattendanceController;
use App\Http\Controllers\SundayChartController;
use App\Http\Controllers\WednesdayChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/** Routes for the simpe CRUD Application  */

Route::get('/crud', 'App\Http\Controllers\BethelTabernacleController@index')->name('crud.index');
Route::get('/crud/create', 'App\Http\Controllers\BethelTabernacleController@create')->name('crud.create');
Route::post('/crud/store', 'App\Http\Controllers\BethelTabernacleController@store')->name('crud.store');
Route::get('/crud/{member}/edit', 'App\Http\Controllers\BethelTabernacleController@edit')->name('crud.edit');
Route::patch('/crud/{member}/update', 'App\Http\Controllers\BethelTabernacleController@update')->name('crud.update');
Route::delete('/crud/{member}/delete', 'App\Http\Controllers\BethelTabernacleController@destroy')->name('crud.destroy');



/** Routes for the BethelAttendance Application  */
Route::get('/bethelattendance', 'App\Http\Controllers\SundaybethelattendanceController@index')->name('bethelattendance.index');

Route::post('/bethelattendance/sunday', 'App\Http\Controllers\SundaybethelattendanceController@store')->name('bethelattendancesunday.store');
Route::post('/bethelattendance/wednesday', 'App\Http\Controllers\WednesdaybethelattendanceController@store')->name('bethelattendancewednesday.store');


Route::get('/bethelattendance/sundaychart', 'App\Http\Controllers\SundayChartController@show')->name('sundaychartcontroller');
//Route::post('/bethelattendance/sundaychart','App\Http\Controllers\SundayChartController@show')->middleware('web');

Route::get('/bethelattendance/wednesdaychart', 'App\Http\Controllers\WednesdayChartController@show')->name('wednesdaychartcontroller');

Route::get('/bethelattendance/sunday', 'App\Http\Controllers\SundayChartController@index')->name('bethelattendance.sundaychart');
Route::get('/bethelattendance/wednesday', 'App\Http\Controllers\WednesdayChartController@index')->name('bethelattendance.wednesdaychart');
