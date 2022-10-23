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

// PAGES
Route::get('/', function () {
    return view('home');
});
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/reg', function () {
    return view('reg');
});
Route::get('/profile', function () {
    return view('profile');
});

// HANDLERS
Route::get('/post/create', function () {
    return view('post-create');
});
Route::get('/post/edit/{post}', function () {
    return view('post-edit');
});

Route::get('/category/create', function () {
    return view('category-create');
});
Route::get('/category/delete/{category}', function () {
    return view('category-delete');
});
