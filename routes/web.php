<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('bagian_avivah', 'App\Http\Controllers\bagian_avivahController@index');
Route::get('barang_avivah', 'App\Http\Controllers\barang_avivahController@index');
Route::get('pengeluaran_avivah', 'App\Http\Controllers\pengeluaran_avivahController@index');
Route::get('pengeluaranitem_avivah', 'App\Http\Controllers\pengeluaranitem_avivahController@index');
Route::get('petugas_avivah', 'App\Http\Controllers\petugas_avivahController@index');

