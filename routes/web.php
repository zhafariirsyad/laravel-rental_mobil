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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('car','CarController');
Route::resource('user','UserController');
Route::resource('costumer','CostumerController');
Route::resource('trans', 'TransactionController');

Route::get('report','ReportController@index')->name('report.index');
Route::post('report/filter','ReportController@filter')->name('laporan.search');
Route::get('trans/bayar/{id}','TransactionController@pay')->name('trans.pay');
Route::patch('trans/bayarr/{id}','TransactionController@bayar')->name('trans.bayar');

