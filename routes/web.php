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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/beranda', function () {
    return view('beranda');
});


//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');

Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari{id}','App\Http\Controllers\PegawaiController@cari');

Route::get('pegawai/cari', 'App\Http\Controllers\PegawaiController@cari')->name('cari');

Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');

Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');

Route::get('/karyawan/edit/{id}','App\Http\Controllers\KaryawanController@edit');

Route::put('/karyawan/update/{id}', 'App\Http\Controllers\KaryawanController@update');

Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@delete');

Route::get('karyawan/cari', 'App\Http\Controllers\KaryawanController@cari')->name('cari');

Route::post('/proses','App\Http\Controllers\MalasngodingController@proses');

Route::get('/input','App\Http\Controllers\MalasngodingController@input');

Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');

Route::get('/guru', 'App\Http\Controllers\GuruController@index');

Route::get('/guru/hapus/{id}', 'App\Http\Controllers\GuruController@hapus');

Route::get('/guru/trash', 'App\Http\Controllers\GuruController@trash');

Route::get('/guru/kembalikan/{id}', 'App\Http\Controllers\GuruController@kembalikan');

Route::get('/guru/kembalikan_semua', 'App\Http\Controllers\GuruController@kembalikan_semua');

Route::get('/guru/hapus_permanen/{id}', 'App\Http\Controllers\GuruController@hapus_permanen');

Route::get('/guru/hapus_permanen_semua', 'App\Http\Controllers\GuruController@hapus_permanen_semua');

Route::get('/pengguna','App\Http\Controllers\PenggunaController@index');

Route::get('/article', 'App\Http\Controllers\WebController@index');

Route::get('/anggota', 'App\Http\Controllers\AnggotaController@index');

Route::get('/enkripsi', 'App\Http\Controllers\EnkripsiController@enkripsi');

Route::get('/data', 'App\Http\Controllers\EnkripsiController@data');

Route::get('/data/{data_rahasia}', 'App\Http\Controllers\EnkripsiController@data_proses');

Route::get('/hash', 'App\Http\Controllers\EnkripsiController@hash');

Route::get('/upload', 'App\Http\Controllers\UploadController@upload');

Route::post('/upload/proses', 'App\Http\Controllers\UploadController@proses_upload');

Route::get('/upload/hapus/{id}', 'App\Http\Controllers\UploadController@hapus');

