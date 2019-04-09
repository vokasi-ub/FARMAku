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
Route::get('dasboard', function () {
    return view('dasboard/dasboard');
});
Route::get('query', 'ObatController@search');
//Route::resource('obat','obatController');
Route::resource('obat','ObatController')->except(['delete','destroy']) ;
Route::post('/dataobat/update','ObatController@update');

Route::post('/inputdataobat/store','ObatController@store');
Route::get('/hapusobat/destroy/{id}', 'ObatController@destroy');
Route::resource('obat', 'ObatController');
Route::get('/obatedit/edit/{id}','ObatController@edit');

Route::get('query', 'PelangganController@search');
//Route::resource('pelanggan','obatController');
Route::resource('pelanggan','PelangganController')->except(['delete','destroy']) ;
Route::post('/datapelanggan/update','PelangganController@update');

Route::post('/inputdatapelanggan/store','PelangganController@store');
Route::get('/hapuspelanggan/destroy/{id}', 'PelangganController@destroy');
Route::resource('pelanggan', 'PelangganController');
Route::get('/pelangganedit/edit/{id}','PelangganController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('query', 'PenjualanController@search');
//Route::resource('pelanggan','obatController');
Route::resource('penjualan','PenjualanController')->except(['delete','destroy']) ;
Route::post('/datapenjualan/update','PenjualanController@update');

Route::post('/inputdatapenjualan/store','PenjualanController@store');
Route::get('/hapuspenjualan/destroy/{id}', 'PenjualanController@destroy');
Route::resource('penjualan', 'PenjualanController');
Route::get('/penjualanedit/edit/{id}','PenjualanController@edit');
