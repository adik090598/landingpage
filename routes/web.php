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
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'welcome']);
Route::get('/products', ['uses' => 'HomeController@index', 'as' => 'products']);
Route::get('/outsourcing', ['uses' => 'HomeController@outsource', 'as' => 'outsourcing']);
Route::get('/about', ['uses' => 'HomeController@about', 'as' => 'about']);
Route::get('/vacancies', ['uses' => 'HomeController@vacancies', 'as' => 'vacancies']);

Route::get('/admin', ['uses' => 'AdminController@index', 'as' => 'admin.index']);

Route::get('/admin/pages', ['uses' => 'AdminController@pages', 'as' => 'admin.pages']);
Route::get('/admin/texts', ['uses' => 'AdminController@texts', 'as' => 'admin.texts']);

Route::post('/admin/page', ['uses' => 'AdminController@pageCreate', 'as' => 'page.create']);
Route::post('/admin/page/{id}', ['uses' => 'AdminController@pageEdit', 'as' => 'page.edit']);
Route::post('/admin/page/{id}', ['uses' => 'AdminController@pageDelete', 'as' => 'page.delete']);

Route::get('/admin/page/', ['uses' => 'AdminController@pageTexts', 'as' => 'page.texts']);

Route::get('/admin/text/', ['uses' => 'AdminController@createText', 'as' => 'text.create']);


