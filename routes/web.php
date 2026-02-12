<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);
Route::get('/product', [App\Http\Controllers\SiteController::class, 'product']);
Route::get('/price', [App\Http\Controllers\SiteController::class, 'price']);
Route::get('/contact', [App\Http\Controllers\SiteController::class, 'contact']);
