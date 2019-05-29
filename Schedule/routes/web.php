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
//生徒ページ
Route::get('/', 'StudentController@top');
Route::get('/student/search', 'StudentController@search');

//講師専用ページ
Route::get('/schedule/top', 'ScheduleController@top');
Route::post('/schedule/create', 'ScheduleCpontroller@create');
Route::post('/schedule/update', 'ScheduleController@update');
Route::delete('schedule/delete', 'ScheduleController@delete');
