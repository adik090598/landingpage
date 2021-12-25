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

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/outsourcing', function () {
    return view('outsourcing');
})->name('outsource');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/vacancies', function () {
    return view('vacancies');
})->name('vacancies');

Route::get('/local/{locale}', function ($locale) {
    dd("asd");
    echo $locale;
    if (!in_array($locale, ['en', 'ru'])) {
        abort(400);
    }

    App::setLocale($locale);

    return redirect()->back();

})->name('locale');
