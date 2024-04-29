<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'App\Http\Controllers\StudentController@login');

Route::get('login', 'App\Http\Controllers\StudentController@login');

Route::get('studentLogin','App\Http\Controllers\StudentController@studentLogin');

Route::get('create','App\Http\Controllers\StudentController@create');

Route::get('createAccount','App\Http\Controllers\StudentController@createAccount');

Route::get('details','App\Http\Controllers\StudentController@details');