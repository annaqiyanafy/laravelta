<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', 'DashboardController@dashboard' );
Route::get('/profilperusahaan', 'DashboardController@profil' );
Route::get('/datakaryawan', 'DashboardController@datakaryawan' );
Route::get('/produk', 'DashboardController@produk' );
Route::get('/akun', 'DashboardController@akun' );
Route::post('/editakun', 'DashboardController@editakun' );

Route::get('/olahdatakaryawan', 'DashboardController@olahdatakaryawan' );
Route::get('/olahdatakaryawan/hapus/{id}', 'DashboardController@hapus' );
Route::get('/olahdatakaryawan/edit/{id}', 'DashboardController@edit' );
Route::post('/olahdatakaryawan/update', 'DashboardController@update');
Route::post('/olahdatakaryawan/tambah', 'DashboardController@tambah');

Route::get('/', 'AuthController@login' );
Route::post('/postlogin', 'AuthController@postlogin' )->name('postlogin');
Route::get('/register', 'AuthController@register' );
Route::post('/postregister', 'AuthController@postregister' );
Route::get('/logout', 'AuthController@logout' );
