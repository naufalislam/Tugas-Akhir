<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\KolamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('beranda');
    });
    Route::resource('/kolam', 'KolamController');
    Route::resource('/kualitas', 'KualitasController');
    Route::resource('/riwayat', 'RiwayatController');
    Route::resource('/laporan', 'LaporanController');
    Route::resource('/user', 'UserController');
    Route::resource('/alat', 'AlatController');
});


// Route::get('/coba', function () {
//     return view('coba');
// });
// Route::resource('/pakan', 'PakanController');
// Route::resource('/hasil', 'HasilController');

// Route::post('/send', 'APIController@post');


// Route::get('/home', 'HomeController@index')->name('home');
