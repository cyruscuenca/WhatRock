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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/entry/trash', 'EntryController@trash');
Route::get('/entry/trash/{id}/restore', 'EntryController@restore');
Route::delete('/entry/trash/{id}/destroy', 'EntryController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entry', 'EntryController@index');
Route::get('/entry/create', 'EntryController@create');
Route::post('/entry/store', 'EntryController@store');
Route::get('/entry/{id}', 'EntryController@show');
Route::get('/entry/{id}/edit', 'EntryController@edit');
Route::patch('/entry/{id}', 'EntryController@update');
Route::delete('/entry/{id}', 'EntryController@softDestroy');

Route::get('admin', 'AdminController@index')->middleware('admin');

Route::get('mod', 'ModController@index')->middleware('mod');

Route::get('contributer', 'ContributerController@index')->middleware('contributer');

Route::resource('categories', 'CategoryController');

Route::get('about', 'PagesController@about');
Route::get('partners', 'PagesController@partners');
Route::get('contribute', 'PagesController@contribute');