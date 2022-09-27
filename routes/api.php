<?php

use App\Http\Controllers\ResultsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    'middleware' => ['api', 'cors']

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('calculate', [ResultsController::class, '__invoke']);
    Route::get('exportar', 'AspiranteController@export');
});


Route::group([

    'middleware' => ['auth:api', 'cors']

], function ($router) {

    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');
    Route::get('aspirante', 'AspiranteController@index');

});
