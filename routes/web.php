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
    return view('index');
});

View::share('entry', App\Entry::all());

Route::post('/questions/get', 'QuestionController@get')->name('/questions/get');

Auth::routes();

Route::get('/entries/id/', 'QuestionController@index');	

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/entries/trash', 'EntryController@trash');
Route::get('/entries/trash/{id}/restore', 'EntryController@restore');
Route::delete('/entries/trash/{id}/destroy', 'EntryController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/entries', 'EntryController@index');
Route::get('/entries/create', 'EntryController@create')->middleware('admin');
Route::post('/entries/store', 'EntryController@store');
Route::get('/entries/{id}', 'EntryController@show');
Route::get('/entries/{id}/edit', 'EntryController@edit');

Route::patch('/entries/{id}/publish', 'EntryController@publish');

Route::patch('/entries/{id}', 'EntryController@update');
Route::delete('/entries/{id}', 'EntryController@softDestroy');

Route::get('admin', 'AdminController@index')->middleware('admin');

Route::get('mod', 'ModController@index')->middleware('mod');

Route::get('contributor', 'ContributorController@index')->middleware('contributor');

Route::resource('categories', 'CategoryController');
Route::resource('subcategories', 'SubcategoryController');

Route::get('about', 'PagesController@about');
Route::get('partners', 'PagesController@partners');
Route::get('contribute', 'PagesController@contribute');

Route::resource('/admin/users', 'UserController');