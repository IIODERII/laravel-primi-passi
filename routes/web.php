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
    $name = 'Oder';
    return view('home', compact('name'));
})->name('home');

Route::get('/pages.second', function () {
    return view('pages/second');
})->name('second');

Route::get('/pages.third', function () {
    return view('pages/third');
})->name('third');
