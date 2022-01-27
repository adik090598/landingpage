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

Route::get('/bekertugan', function () {
    return 'nagiptugan';
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/outsourcing', function () {
    return view('outsourcing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/vacancies', function () {
    return view('vacancies');
});


Route::get('/admin', ['uses' => 'AdminController@index', 'as' => 'admin.index']);

Route::get('/admin/pages', ['uses' => 'AdminController@pages', 'as' => 'admin.pages']);
Route::get('/admin/texts', ['uses' => 'AdminController@texts', 'as' => 'admin.texts']);

Route::post('/admin/page', ['uses' => 'AdminController@pageCreate', 'as' => 'page.create']);
Route::post('/admin/page/{id}', ['uses' => 'AdminController@pageEdit', 'as' => 'page.edit']);
Route::post('/admin/page/{id}', ['uses' => 'AdminController@pageDelete', 'as' => 'page.delete']);

Route::get('/admin/page/', ['uses' => 'AdminController@pageTexts', 'as' => 'page.texts']);

Route::get('/admin/text/', ['uses' => 'AdminController@createText', 'as' => 'text.create']);


