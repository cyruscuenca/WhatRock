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
/*
Route::domain('learn.whatrock.local')->group(function () {
	Route::view('/', 'learn.index')->where('/', '.*')->name('learn/index');
	Route::get('/properties', 'PagesController@properties')->name('/learn/properties');
	Route::get('/properties/hardness', 'PagesController@hardness')->name('/learn/properties/hardness');
	Route::get('/properties/breakage', 'PagesController@breakage')->name('/learn/properties/breakage');
	Route::get('/properties/cleavage', 'PagesController@cleavage')->name('/learn/properties/cleavage');
});

Route::domain('store.whatrock.local')->group(function () {
	Route::view('/', 'store.index')->where('/', '.*')->name('/store/index');
	Route::get('/properties', 'PagesController@properties')->name('/learn/properties');
});

Route::domain('whatrock.local')->group(function () {
	Route::get('/', function () {
		return view('index');
	});

	Route::domain('identify.whatrock.local')->group(function () {
		Route::view('/', 'identify.index')->where('/', '.*')->name('identify');
		Route::get('/', 'QuestionController@index')->name('/identify/index');
	});

	Route::get('/search/', 'EntryController@search')->name('/search');

	View::share('entry', App\Entry::all());

	Route::post('/questions/get', 'QuestionController@get')->name('/questions/get');

	Auth::routes();

	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

	Route::get('/entries/trash', 'EntryController@trash');
	Route::get('/entries/trash/{id}/restore', 'EntryController@restore');
	Route::delete('/entries/trash/{id}/destroy', 'EntryController@destroy');

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/entries', 'EntryController@index')->name('/entries');
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
	Route::get('list'. 'UserController@list');

});
*/