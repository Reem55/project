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
Route::get('forms', 'FormController@index');
Route::get('form/{form}', 'FormController@show');
Route::post('form', 'FormController@store');
Route::put('form', 'FormController@store');
Route::delete('form/{id}', 'FormController@destroy');




