<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/userdetail', 'UsersDetailController@index');
Route::post('/userdetail', 'UsersDetailController@store');
Route::patch('/userdetail/{id}', 'UsersDetailController@update');

Route::get('/user', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::get('/user/token/{token}', 'UserController@getbytoken');
Route::post('/user/register', 'UserController@register');
Route::post('/user/login', 'UserController@login');
Route::delete('/user/{id}', 'UserController@destroy');
Route::patch('/user/name/{id}', 'UserController@update');
Route::patch('/user/password/{id}', 'UserController@updatePassword');

Route::post('/mail/send', 'MailController@send');
Route::get('/user/verfikasi/{token}', 'UserController@verifikasi');

Route::get('/command/{token}', 'UserController@getCommand');
Route::patch('/command/{token}', 'UserController@giveCommand');

Route::get('/place/{token}', 'PlacepositionController@show');
Route::post('/place/{token}', 'PlacepositionController@store');

Route::get('/place/arduino/{token}/{lat}/{lng}', 'PlacepositionController@storeFromArduino');
Route::get('/command/arduino/{token}/{command}', 'UserController@setCommandFromArduino');