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

// route dong - co 1 tham so
Route::get('news/{id}', function ($id) {
    return "Bai viet so $id";
});

// Route co 2 params
Route::get('news/{id}/category/{categoryId}', function ($id, $categoryId) {
    return "Category $categoryId & Id $id";
});

//Route name
Route::get('routenames', function () {
    return 'Route name screen';
})->name('rname');

// Route name with params and where
Route::get('rparam/{id}', function ($id) {
    return "Route params: $id";
})
    ->name('rpa.show')
    ->where('id', '[0-9a-z]+');

Route::get('rparam/{id}/branch/{bid}', function ($id, $bid) {
    return "Route params: $id - branch: $bid";
})->name('rpa.branch');

// Route group with prefix
//C1: Route::group(['prefix' => 'backend'], function () {
//C2: Route::prefix('backend')->group(function () {
Route::prefix('backend')->group(function () {
    Route::get('user-management', function () {
        return 'User management monitor';
    })->name('backend.user');

    Route::get('product-management', function () {
        return 'Product management monitor';
    })->name('backend.product');

    Route::get('category-management', function () {
        return 'Category management monitor';
    })->name('backend.category');
});
