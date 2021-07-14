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
Route::get('chart/{id}', 'ChartsApiController@index')->name('api.chart');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/send', 'ApiController@post');
Route::post('/login', 'APIMobile@login');
Route::post('/tambah', 'APIMobile@tambah');
Route::put('/update/{alat}', 'APIMobile@update');
Route::delete('/hapus', 'APIMobile@hapus');


Route::get('/riwayat/{alat}', 'APIMobile@riwayat');
Route::get('/terkini/{alat}', 'APIMobile@terkini');
Route::get('/kolam/{id}', 'APIMobile@kolam');
