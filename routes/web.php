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
});

Route::get('/about', function () {
    return view('about');
});

// User
Route::get('/user', 'UserController@index')->name('user.index');
// Route::get('/user/create', 'UserController@create')->name('user.create');
// Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit')->middleware('checkroles');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update')->middleware('checkroles');
Route::post('/user/destroy/{id}', 'UserController@destroy')->name('user.destroy')->middleware('checkroles');
Route::get('/user/create_pdf', 'UserController@createPdf')->name('user.create_pdf');
Route::get('/user/export_excel', 'UserController@exportExcel')->name('user.export_excel');

// Departemen
Route::get('/departemen', 'DepartemenController@index')->name('departemen.index');
Route::get('/departemen/create', 'DepartemenController@create')->name('departemen.create')->middleware('checkroles');
Route::post('/departemen/store', 'DepartemenController@store')->name('departemen.store')->middleware('checkroles');
Route::get('/departemen/edit/{id}', 'DepartemenController@edit')->name('departemen.edit')->middleware('checkroles');
Route::post('/departemen/update/{id}', 'DepartemenController@update')->name('departemen.update')->middleware('checkroles');
Route::post('/departemen/destroy/{id}', 'DepartemenController@destroy')->name('departemen.destroy')->middleware('checkroles');
Route::get('/departemen/create_pdf', 'DepartemenController@createPdf')->name('departemen.create_pdf');
Route::get('/departemen/export_excel', 'DepartemenController@exportExcel')->name('departemen.export_excel');

// Pegawai
Route::get('/pegawai', 'PegawaiController@index')->name('pegawai.index');
Route::get('/pegawai/create', 'PegawaiController@create')->name('pegawai.create')->middleware('checkroles');
Route::post('/pegawai/store', 'PegawaiController@store')->name('pegawai.store')->middleware('checkroles');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit')->name('pegawai.edit')->middleware('checkroles');
Route::post('/pegawai/update/{id}', 'PegawaiController@update')->name('pegawai.update')->middleware('checkroles');
Route::post('/pegawai/destroy/{id}', 'PegawaiController@destroy')->name('pegawai.destroy')->middleware('checkroles');
Route::get('/pegawai/create_pdf', 'PegawaiController@createPdf')->name('pegawai.create_pdf');
Route::get('/pegawai/export_excel', 'PegawaiController@exportExcel')->name('pegawai.export_excel');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
