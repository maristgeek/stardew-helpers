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

Route::get('/', 'ScheduleController@mainPage');

Route::post('/schedule', 'ScheduleController@getSchedule')->name('getSchedule');
Route::get('/map/{name}/{x}/{y}', 'ScheduleController@map')->name('getMap');
Route::get('/portrait/{name}', 'ScheduleController@portrait')->name('getPortrait');
