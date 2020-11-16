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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'penggajian'], function(){
    Route::get('index','DatagajiController@index')->name('data.gaji.index');
    Route::get('form-index','PaymenthomeController@index')->name('penggajian.home.form-index');
    Route::get('tampil-index','PegawaiController@index')->name('data.pegawai.tampil-index');
    Route::get('show-index','DatalemburController@index')->name('data.lembur.show-index');
});
