<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'DashboardController@index');

Route::get('/masyarakat', 'MasyarakatController@index');
Route::get('/masyarakat/create', 'MasyarakatController@create');
Route::post('/masyarakat/create', 'MasyarakatController@insert');


Route::get('/petugas', 'PetugasController@index');
Route::get('/petugas/create', 'PetugasController@create');


Route::get('/pengaduan', 'PengaduanCotroller@index');


Route::get('/tanggapan', 'TanggapanController@index');
