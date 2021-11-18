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




