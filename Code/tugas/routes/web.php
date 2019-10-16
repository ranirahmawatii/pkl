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

Route::group(['prefix'=>'/','middleware'=>['auth']],
function () {


Route::get('/', function () {
    return view('welcome ');
});

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 Route::resource('Master_Barang','Master_BarangController');
// Route::get('Master_Barang', 'Master_BarangController', ['except' => [
//     'create', 'store', 'update', 'destroy'
// ]]); 
 Route::resource('Master_Jenis','Master_JenisController');
 Route::resource('Master_Kendaraan','Master_KendaraanController');
