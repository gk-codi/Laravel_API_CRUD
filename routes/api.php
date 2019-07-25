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
Route::get('/sliders', 'SliderController@index');

Route::get('/sliders/{slider}', 'SliderController@show');


Route::post('/sliders', 'SliderController@store');

Route::put('/sliders/{slider}', 'SliderController@update');
Route::patch('/sliders/{slider}', 'SliderController@update');
Route::delete('/sliders/{slider}', 'SliderController@destroy');

// Route::get('/api/sliders/filter', 'SliderController@filter');