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

use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum2', function () {
    return view('html2prak');
});
Route::get('tugaske4', function () {
    return view('tugas4');
});
Route::get('ets1', 'ViewController@showForm' );
Route::get('hal1php', 'ViewController@phpHalSatu' );
Route::post('hal2php', 'ViewController@phpHalDua' );

Route::get('pendapatan', function () {
    return view('pendapatan.index');
});

Route::get('/pendapatan','PendapatanController@index');

Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');

Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update/','PendapatanController@update');

Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
