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

Route::get('/', 'Siswacontroller@index')->name('homes');
Route::get('/form', 'Siswacontroller@toForm')->name('form');
Route::get('/dataPkl', 'PklController@dtPkl')->name('datapkl');
Route::get('/dataPdfPkl', 'PklController@dtPdfPkl')->name('datapdfpkl');
Route::get('/user/validasi/{status}', 'PklController@update');
Route::get('/cetak_pdf', 'PklController@cetak_pdf')->name('cetakpdf');
// Route::post('/user/upload/pdf', 'PklController@upload')->name('uploadpdf');
Route::get('/user/hapus/{id}', 'Siswacontroller@hapus');
Route::get('/user/view/{fsurat}', 'Siswacontroller@toviews');
Route::get('/user/download/{fsurat}', 'Siswacontroller@todownload');
Route::post('/user/simpan', 'Siswacontroller@toAdd')->name('simpanuser');
// Route::get('/admin', 'Siswacontroller@toAdmin');
Route::get('/table-egov', 'Siswacontroller@toEgov')->name('egov');
Route::get('/table-pip', 'Siswacontroller@toPip')->name('pip');
Route::get('/table-pkp', 'Siswacontroller@toPkp')->name('pkp');
Route::get('/table-santik', 'Siswacontroller@toSantik')->name('santik');
Route::get('/table-tik', 'Siswacontroller@toTik')->name('tik');
Route::get('/table-umum', 'Siswacontroller@toUmum')->name('umum');

Route::resource('siswapkl','PklController');

Auth::routes();
//home login
Route::get('/home', 'HomeController@index')->name('home');
