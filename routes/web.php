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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('role:admin')->get('/dashboard', function(){
    return 'dashboard';
})->name('dashboard');

Route::get('/test', function () {
    return view('sbAdmin.master');
});

Route::get('/test2', function () {
    return view('adminlte.master');
});

Route::middleware('role:user')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home'); //tampilan home
    Route::get('/TabunganKu','TabunganController@index')->name('HomeTabunganKu');
    Route::get('/form','TabunganController@form')->name('formTabunganKu'); //menampilkan halaman form
    Route::post('/form','TabunganController@save')->name('saveForm'); //menyimpan form

    Route::get('/prediksi','TabunganController@prediksiForm')->name('prediksiForm'); //menampilkan halaman form
});


Route::middleware('role:admin')->group(function(){
    Route::get('/admin/home','AdminController@index')->name('homeAdmin'); //menampilkan home admin
});