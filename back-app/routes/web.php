<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ScryptController;
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
    Route::get('/forward', 'ScryptController@forward');
    Route::get('/backward', 'ScryptController@backward');
    Route::get('/leftward', 'ScryptController@leftward');
    Route::get('/rightward', 'ScryptController@rightward');

