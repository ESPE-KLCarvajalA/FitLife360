<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
//about

//services
Route::get('/services', function () {
    return view('services');
})->name('services');
//contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
//blog
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
//shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
//shopcart
Route::get('/shopcart', function () {
    return view('shopcart');
})->name('shopcart');
//account
Route::get('/account', function () {
    return view('account');
})->name('account');
//acerca
Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');