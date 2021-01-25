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
    Route::get('form-index','PaymenthomeController@index')->name('penggajian.home.form-index');
});
Route::group(['prefix' => 'employees'], function(){
    Route::get('index','EmployeessController@index')->name('data.employees.index');
    Route::get('create','EmployeessController@create')->name('data.employees.create');
    Route::post('store','EmployeessController@store')->name('data.employees.store');
    Route::delete('delete/{employees}','EmployeessController@destroy')->name('data.employees.delete');
    Route::get('edit/{employees}','EmployeessController@edit')->name('data.employees.edit');
    Route::put('update/{employees}','EmployeessController@update')->name('data.employees.update');
});
Route::group(['prefix' => 'type'], function(){
    Route::get('index','TypeController@index')->name('data.type.index');
    Route::get('create','TypeController@create')->name('data.type.create');
    Route::post('store','TypeController@store')->name('data.type.store');
});
Route::group(['prefix' => 'price'], function(){
    Route::get('index','PriceController@index')->name('data.price.index');
    Route::get('create','PriceController@create')->name('data.price.create');
    Route::post('store','PriceController@store')->name('data.price.store');
});
Route::group(['prefix' => 'payment'], function(){
    Route::get('index','PaymentController@index')->name('data.payment.index');
    Route::get('create','PaymentController@create')->name('data.payment.create');
    Route::post('store','PaymentController@store')->name('data.payment.store');
});
