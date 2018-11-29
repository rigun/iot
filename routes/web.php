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

Route::get('/', function () {return view('app');});
Route::get('/tes', function () {return view('app');});
Route::get('/dashboard', function () {return view('app');});
Route::get('/dashboard/status', function () {return view('app');});
Route::get('/dashboard/stnk', function () {return view('app');});
Route::get('/dashboard/location', function () {return view('app');});
Route::get('/dashboard/resend', function () {return view('app');});
Route::get('/verifikasiEmail/{token}', function () {return view('app');});
