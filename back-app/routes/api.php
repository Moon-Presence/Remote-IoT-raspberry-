<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/forward', 'ScryptController@forward');
Route::get('/backward', 'ScryptController@backward');
Route::get('/leftward', 'ScryptController@leftward');
Route::get('/rightward', 'ScryptController@rightward');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
