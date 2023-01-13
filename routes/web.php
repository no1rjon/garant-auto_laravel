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
    return view('index');
})->name('home');

Route::get('/category', function () {
    return view('category');
})->name('category');;

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/our_shipments', function () {
    return view('our_shipments');
})->name('our_shipments');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/vehicle', function () {
    return view('vehicle');
})->name('vehicle');

