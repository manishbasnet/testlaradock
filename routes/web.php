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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('importExport', 'MaatwebsiteDemoController@importExport');
// Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
// Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

Route::get('product', 'ProductController@create');
Route::get('product/export', 'ProductController@exportFile')





// Route::get('import-export-view', 'ExcelController@importExportView')->name('import.export.view');

// Route::post('import-file', 'ExcelController@importFile')->name('import.file');

// Route::get('export-file/{type}', 'ExcelController@exportFile')->name('export.file');