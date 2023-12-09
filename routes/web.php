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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('style', function () {
    return view('style');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('tugasklp', function () {
    return view('tugasklp');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('responsive1', function () {
    return view('responsive1');
});

Route::get('responsive2', function () {
    return view('responsive2');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index2');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangBelanjaController@batal');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambahData','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

Route::get('/sirup','App\Http\Controllers\SirupController@indexsirup');
Route::get('/sirup/tambahsirup','App\Http\Controllers\SirupController@tambahsirup');
Route::post('/sirup/store','App\Http\Controllers\SirupController@store');
Route::get('/sirup/editsirup/{id}','App\Http\Controllers\SirupController@editsirup');
Route::post('/sirup/update','App\Http\Controllers\SirupController@update');
Route::get('/sirup/hapus/{id}','App\Http\Controllers\SirupController@hapus');
Route::get('/sirup/cari','App\Http\Controllers\SirupController@cari');
Route::get('/sirup/viewsirup/{id}','App\Http\Controllers\SirupController@viewsirup');
