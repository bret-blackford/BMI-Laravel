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

//Route::get('/', function () {
//    return view('welcome');
///});

Route::get('/', 'BMIController@index');
//Route::get('/bmi', 'BMIController@calc)');
Route::get('/calc/{title?}', 'BMIController@calc');
Route::get('/practiceX', 'BMIController@practiceX');