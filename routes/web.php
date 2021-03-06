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

Route::group(['middleware'=>['lang']], function(){
    Route::get('/','BaseController@getIndex');
});
Route::get('gallerys', 'GalleryController@getAll');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('gallery/{id}', 'GalleryController@getOne');
Route::post('ajax', 'AjaxController@postIndex');

Route::get('{url}', 'BaseController@getUrl');
