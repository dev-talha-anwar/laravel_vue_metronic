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
// Route::group(['prefix' => '/api','middleware' => ['api', 'multiauth:api']], function () {
//     Route::get('/user', function ($request) {
//         return $request->user();
//     });
// });

// Route::group(['middleware' => ['api', 'multiauth:admin-api']], function () {
// 	Route::apiResource('/boards', 'API\BoardController');
// });
Route::group(['prefix' =>'admin-api'], function () {
	Route::apiResource('boards', 'API\BoardController');
});