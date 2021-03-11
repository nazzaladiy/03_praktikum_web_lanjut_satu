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

Route::get('/home', function () {
    return view('home', ['Caffe' => 'Paradox Caffe']);
});

// 1 ROUTE BIASA
Route::prefix('product')-> group(function () {
    ROUTE::get('/', [App\Http\Controllers\ProductController::class, 'product']);
});

// 2 ROUTE PREFIX
Route::prefix('product')-> group(function () {
    ROUTE::get('/', [App\Http\Controllers\ProductController::class, 'product']);
});

// 3 Route PARAM
ROUTE::get('/news/{tittle}', [App\Http\Controllers\NewsController::class, 'news']);

// 4 Route PREFIX
Route::prefix('program')->group(function() {
    ROUTE::get('/', [App\Http\Controllers\ProgramController::class, 'program']);
});

// 5 Route Biasa
Route::get('/aboutus', function () {
    return view('aboutus', ['aboutus' => 'Ini merupakan cabang ke-2 yang berada di Kota Malang']);
});

// 6 ROUTE RESOURCE
Route::resource('/contact', App\Http\Controllers\ContactController::class, ['only' => ['index']
]);
