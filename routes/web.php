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
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'NavController@index')->name('home');
Route::get('/home/dataKaryawan', 'NavController@DataKaryawan');
Route::get('/home/dataNilaiKaryawan', 'NavController@DataNilaiKaryawan');
Route::get('/home/nilaiBobot', 'NavController@NilaiBobot');
Route::get('/home/nilaiNormalisasi', 'NavController@NilaiNormalisasi');
Route::get('/home/nilaiHasil', 'NavController@NilaiHasil');

//data karyawan
Route::resource('/dataKaryawan', 'DataKaryawanController');

//data nilai karyawam
Route::resource('/dataNilaiKaryawan', 'DataNilaiKaryawanController');

//data nilai bobot
Route::resource('/nilaiBobot', 'NilaiBobotController');

//data nilai normalisasi