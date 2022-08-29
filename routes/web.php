<?php

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

Route::get('/','DisnakerCtrl@index');
Route::get('/bagian','DisnakerCtrl@bagian');
Route::get('/sub','DisnakerCtrl@sub');

Route::get('/dash','AdminCtrl@dash');
Route::get('/widget','AdminCtrl@widget');
Route::get('/form','AdminCtrl@form');
Route::get('/tabel','AdminCtrl@tabel');

Route::get('/data','DataCtrl@tampil');
Route::post('/data/add','DataCtrl@add');
Route::post('/data/update','DataCtrl@update');
Route::post('/data/hapus','DataCtrl@delete');

Route::get('/info','InfoCtrl@tampil');
Route::post('/info/tambah','InfoCtrl@add');
Route::post('/info/edit','InfoCtrl@edit');
Route::post('/info/hapus','InfoCtrl@hapus');

Route::get('/coba','InfoCtrl@data');

Route::get('/anu','InfoCtrl@coba');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
