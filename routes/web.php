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
});
Route::get('/web-development', function () {
    return view('webdev');
});
Route::get('/design', function () {
    return view('design');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/outsource', function () {
    return view('outsource');
});

Route::get('/our-works', function () {
    return view('works');
});
