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

/*
--------------------------------------------------------------------------
    rotta base di laravel
--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
--------------------------------------------------------------------------
    rotte autenticazione
--------------------------------------------------------------------------
*/ 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*
--------------------------------------------------------------------------
    rotte che portano a views con dati fake
--------------------------------------------------------------------------
*/
Route::get('/pages', function () {
    return view('admin.pages.index');
})->name('admin.pages.index');

Route::get('/pages/create', function () {
    return view('admin.pages.create');
})->name('admin.pages.create');

Route::get('/pages/{page}/edit', function () {
    return view('admin.pages.edit');
})->name('admin.pages.edit');


