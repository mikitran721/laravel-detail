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
    return view('test');
});
Route::get('/test', function () {
    return 'Test Route Get';
});

// route co dinh
Route::get('user', function () {
    return 'User Screen';
});
Route::get('product', function () {
    return 'Product Screen';
});

// route dong - co tham so
Route::get('news/{id}', function () {
});
