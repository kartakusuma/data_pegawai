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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

// User
Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::post('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy');

// Departemen
Route::get('/departemen', 'DepartemenController@index')->name('departemen.index');
Route::get('/departemen/create', 'DepartemenController@create')->name('departemen.create');
Route::post('/departemen/store', 'DepartemenController@store')->name('departemen.store');
Route::get('/departemen/edit/{id}', 'DepartemenController@edit')->name('departemen.edit');
Route::post('/departemen/update/{id}', 'DepartemenController@update')->name('departemen.update');
Route::post('/departemen/destroy/{id}', 'DepartemenController@destroy')->name('departemen.destroy');

// Pegawai
Route::get('/pegawai', 'PegawaiController@index')->name('pegawai.index');
Route::get('/pegawai/create', 'PegawaiController@create')->name('pegawai.create');
Route::post('/pegawai/store', 'PegawaiController@store')->name('pegawai.store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit')->name('pegawai.edit');
Route::post('/pegawai/update/{id}', 'PegawaiController@update')->name('pegawai.update');
Route::post('/pegawai/destroy/{id}', 'PegawaiController@destroy')->name('pegawai.destroy');