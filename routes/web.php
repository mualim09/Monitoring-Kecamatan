<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();


Auth::routes();

Route::middleware(['auth'])->prefix('adm')->namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');

    //Route Kecamatan
    Route::get('/kecamatan', 'KecamatanController@index')->name('admin.kecamatan.index');
    Route::get('/kecamatan/generate-report', 'KecamatanController@generateReport')->name('admin.kecamatan.generate');
    Route::get('/kecamatan/create', 'KecamatanController@create')->name('admin.kecamatan.create');
    Route::get('/kecamatan/{kecamatan}/edit', 'KecamatanController@edit')->name('admin.kecamatan.edit');
    Route::post('/kecamatan', 'KecamatanController@store')->name('admin.kecamatan.store');
    Route::delete('/kecamatan/{kecamatan}', 'KecamatanController@destroy')->name('admin.kecamatan.destroy');
    Route::put('/kecamatan/{kecamatan}', 'KecamatanController@update')->name('admin.kecamatan.update');

    //Route berita
    Route::get('/berita', 'BeritaController@index')->name('admin.berita.index');
    Route::get('/berita/create', 'BeritaController@create')->name('admin.berita.create');
    Route::get('/berita/{berita}/edit', 'BeritaController@edit')->name('admin.berita.edit');
    Route::post('/berita', 'BeritaController@store')->name('admin.berita.store');
    Route::delete('/berita/{berita}', 'BeritaController@destroy')->name('admin.berita.destroy');
    Route::put('/berita/{berita}', 'BeritaController@update')->name('admin.berita.update');
});



Route::namespace('User')->group(function () {
    Route::get('/', 'HomeController@index')->name('user.home');
    Route::get('/berita', 'HomeController@berita')->name('user.berita');
    Route::get('/berita/{slug}', 'HomeController@single_berita')->name('user.single_berita');
    Route::post('berita/{berita}/add_comment', 'HomeController@add_comment')->name('user.add_comment');
});
