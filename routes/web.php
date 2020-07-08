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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::livewire('/category', 'category.list-category');
Route::livewire('/product', 'product.list-product');
Route::livewire('/sale', 'sale.create-sale');

Route::livewire('/dashboard', 'dashboard.home');

Route::livewire('/login', 'auth.login')
    ->layout('layouts.auth');

Route::livewire('/register', 'auth.register')
    ->layout('layouts.auth');
