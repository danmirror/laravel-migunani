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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','DataController@index')->name('home');
Route::get('/galery','DataController@galery');
Route::get('/view','DataController@view')->name('view');
Route::get('/download','DataController@download')->name('download');


Route::get('/admin','DataController@admin');
Route::get('admin/overview','DataController@overview');
Route::get('/admin/create','DataController@create');
Route::post('/admin/kirim','DataController@store');
Route::get('admin/{data}/edit','DataController@edit');
Route::patch('/admin/{data}','DataController@update');
Route::delete('/admin/{data}', 'DataController@destroy');
Route::get('/admin/setting','DataController@setting');
Route::post('/admin/setting/post','DataController@setting_update')->name('setting-update');


Route::get('/login','UserController@index');
Route::post('/login/kirim','UserController@login');
Route::get('/regist','UserController@create');
Route::post('/regist/kirim','UserController@store');
Route::get('/logout','UserController@logout');


// Route::get('test', function() {
//     // $disk =  Storage::disk('google');
//     // $disk = $disk->copy('coba.txt','new/coba.txt');
//     //  dd($disk);
//     $url = Storage::disk('google')->url('coba.txt');

// dd($url);

//  });