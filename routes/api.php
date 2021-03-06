<?php

use App\Http\Controllers\ResultsController;
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



Route::group([

  'middleware' => ['api']

], function ($router) {
  Route::post('login', 'App\Http\Controllers\AuthController@login');
  Route::post('signup', 'App\Http\Controllers\AuthController@signup');
  Route::post('calculate', ResultsController::class);
});



Route::group([

  'middleware' => ['auth:api']

], function ($router) {

  Route::post('logout', 'App\Http\Controllers\AuthController@logout');
  Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
  Route::get('me', 'App\Http\Controllers\AuthController@me');
});
