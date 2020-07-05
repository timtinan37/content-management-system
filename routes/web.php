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

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function ()
{
	Route::resource('contents', 'Backend\ContentController')->except(['show', 'edit', 'destroy'])->middleware('auth');
});

Route::get('/', 'Frontend\ContentController@index')->name('landing');
Route::get('/contents/{content}', 'Frontend\ContentController@show')->name('contents.show');
