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

Route::get('/entries/trash', 'EntryController@trash');
Route::get('/entries/trash/{id}/restore', 'EntryController@restore');
Route::delete('/entries/trash/{id}/destroy', 'EntryController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entries', 'EntryController@index');
Route::get('/entries/create', 'EntryController@create');
Route::post('/entries/store', 'EntryController@store');
Route::get('/entries/{id}', 'EntryController@show');
Route::get('/entries/{id}/edit', 'EntryController@edit');
Route::patch('/entries/{id}', 'EntryController@update');
Route::delete('/entries/{id}', 'EntryController@softDestroy');

Route::get('admin', 'AdminController@index')->middleware('admin');

Route::get('mod', 'ModController@index')->middleware('mod');

Route::get('contributer', 'ContributerController@index')->middleware('contributer');

Route::resource('categories', 'CategoryController');

Route::get('about', 'PagesController@about');
Route::get('partners', 'PagesController@partners');
Route::get('contribute', 'PagesController@contribute');