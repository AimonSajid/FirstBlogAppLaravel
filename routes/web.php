<?php

use Illuminate\Support\Facades\Route;

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

Route::name('blogs_path')->get('/blogs','BlogsController@index');
Route::name('blogs_create_path')->get('/blogs/create','BlogsController@create');
Route::name('store_blog_path')->post('/blogs','BlogsController@store');
Route::name('blog_path')->get('/blog/{id}','BlogsController@show');
Route::name('blog_edit_path')->get('/blog/{id}/edit','BlogsController@edit');
Route::name('update_blog_path')->put('/blog/{id}','BlogsController@update');
Route::name('blog_delete_path')->delete('/blog/{id}','BlogsController@delete');
