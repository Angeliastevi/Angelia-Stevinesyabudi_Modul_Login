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
    //return view('welcome');
    echo "Selamat Datang Angelia";
});

Route::get('/satu', function () {
    //return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
    //return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
    //return view('welcome');
    echo "three";
});

Route::get('/empat', function () {
    //return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    //return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
    //return view('welcome');
    echo "six";
});

Route::get('/tujuh', function () {
    //return view('welcome');
    echo "seven";
});

Route::get('/delapan', function () {
    //return view('welcome');
    echo "eight";
});

Route::get('/sembilan', function () {
    //return view('welcome');
    echo "nine";
});

//1. echo langsung nested
Route::get('/aaa', function () {
    //return view('welcome');
    echo "ten";
});

//2. manggil view
Route::get('/sepuluh', function () {
    //return view('welcome');
    return view('wonjin');
    //lokasi view
});

Route::get('/template', function () {
    //return view('welcome');
    return view('template');
    //lokasi view
});

//3. MANGGIL Controller
route::get('/usang', 'usang@index');
/* file controllernya namanya usang
   nama url usang
   nama functionnya index
*/
route::get('/jeruk', 'usang@bakar');

route::get('/terong', 'kentang@swallow');

Route::get('/template', function () {
    //return view('welcome');
    return view('template');
    //lokasi view
});

//Route::get('/', 'Kontak@index');

Route::get('/CleaningService', 'CleanerController@index');

Route::resource('kontak', 'Kontak');

Route::resource('/satpam', 'Satpam');
Route::resource('/kabupaten', 'Kabupaten');

Route::resource('/penjualan', 'Penjualan');

Route::resource('/barang', 'Barang');

Route::resource('/pembelian', 'Pembelian');

Route::get('/', function() {
    return view('index');
});

Route::get('login', 'Login@index');
Route::get('/logout', 'Login@logout');

Route::post('login/cek', 'Login@cek');

Route::get('/', 'Dashboard@index');

