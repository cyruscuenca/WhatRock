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

Auth::routes();

Route::get('/entry/trash', 'BlogController@trash');
Route::get('/entry/trash/{id}/restore', 'BlogController@restore');
Route::delete('/entry/trash/{id}/destroy', 'BlogController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entry', 'BlogController@index');
Route::get('/entry/create', 'BlogController@create');
Route::post('/entry/store', 'BlogController@store');
Route::get('/entry/{id}', 'BlogController@show');
Route::get('/entry/{id}/edit', 'BlogController@edit');
Route::patch('/entry/{id}', 'BlogController@update');
Route::delete('/entry/{id}', 'BlogController@softDestroy');

Route::get('admin', 'AdminController@index')->middleware('admin');

Route::get('mod', 'ModController@index')->middleware('mod');

Route::get('contributer', 'ContributerController@index')->middleware('contributer');

Route::resource('category', 'CategoryController');