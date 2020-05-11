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

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/admin','AdminController@index')->middleware('auth');

Route::get('/daftar','DaftarController@index');
Route::post('/daftar/create','DaftarController@create');
Route::get('/daftar/{id}/edit','DaftarController@edit');
Route::post('/daftar/{id}/update','DaftarController@update');
Route::get('/daftar/{id}/delete','DaftarController@delete');
Route::get('/daftar/{id}/cetak','DaftarController@cetak');