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

Route::get('/products', ['as' => 'products', 'uses' => 'HomeController@products']);
Route::get('/outsourcing', ['as' => 'outsource', 'uses' => 'HomeController@outsourcing']);
Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('/vacancies', ['as' => 'vacancies', 'uses' => 'HomeController@vacancies']);



