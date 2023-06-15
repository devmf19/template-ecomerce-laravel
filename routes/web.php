<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/entrada', function () {
    return view('entrada');
});
