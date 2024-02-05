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

Route::get('/dany', function () {
    return 'Halo Dany';
});

Route::get('/dany/{name}', function ($dany) {
    return "Halo Dany, salken aku $dany";
});

Route::redirect('/login', '/dany');

Route::get('/contoh', function () {
    return view('contoh', ['name' => 'Dany']);
});

Route::get('/admin', function () {
    return view('admin.admin', ['name' => 'Dany']);
});

Route::get('/my-portofolio', function () {
    return view('my-portofolio', []);
});