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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('index');
})->middleware('verified');

Route::get('/about', function () {
    return view('about');
})->middleware('verified');

// User
Route::get('/user', 'UserController@index')->name('user.index')->middleware('verified');
// Route::get('/user/create', 'UserController@create')->name('user.create');
// Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit')->middleware(['checkroles', 'verified']);
Route::post('/user/update/{id}', 'UserController@update')->name('user.update')->middleware(['checkroles', 'verified']);
Route::post('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy')->middleware(['checkroles', 'verified']);
Route::get('/user/create_pdf', 'UserController@createPdf')->name('user.create_pdf')->middleware('verified');
Route::get('/user/export_excel', 'UserController@exportExcel')->name('user.export_excel')->middleware('verified');

// Departemen
Route::get('/departemen', 'DepartemenController@index')->name('departemen.index')->middleware('verified');
Route::get('/departemen/create', 'DepartemenController@create')->name('departemen.create')->middleware(['checkroles', 'verified']);
Route::post('/departemen/store', 'DepartemenController@store')->name('departemen.store')->middleware(['checkroles', 'verified']);
Route::get('/departemen/edit/{id}', 'DepartemenController@edit')->name('departemen.edit')->middleware(['checkroles', 'verified']);
Route::post('/departemen/update/{id}', 'DepartemenController@update')->name('departemen.update')->middleware(['checkroles', 'verified']);
Route::post('/departemen/destroy/{id}', 'DepartemenController@destroy')->name('departemen.destroy')->middleware(['checkroles', 'verified']);
Route::get('/departemen/create_pdf', 'DepartemenController@createPdf')->name('departemen.create_pdf')->middleware('verified');
Route::get('/departemen/export_excel', 'DepartemenController@exportExcel')->name('departemen.export_excel')->middleware('verified');

// Pegawai
Route::get('/pegawai', 'PegawaiController@index')->name('pegawai.index')->middleware('verified');
Route::get('/pegawai/create', 'PegawaiController@create')->name('pegawai.create')->middleware(['checkroles', 'verified']);
Route::post('/pegawai/store', 'PegawaiController@store')->name('pegawai.store')->middleware(['checkroles', 'verified']);
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit')->name('pegawai.edit')->middleware(['checkroles', 'verified']);
Route::post('/pegawai/update/{id}', 'PegawaiController@update')->name('pegawai.update')->middleware(['checkroles', 'verified']);
Route::post('/pegawai/destroy/{id}', 'PegawaiController@destroy')->name('pegawai.destroy')->middleware(['checkroles', 'verified']);
Route::get('/pegawai/create_pdf', 'PegawaiController@createPdf')->name('pegawai.create_pdf')->middleware('verified');
Route::get('/pegawai/export_excel', 'PegawaiController@exportExcel')->name('pegawai.export_excel')->middleware('verified');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
