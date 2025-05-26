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
Route::get('auth/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/category', function () {
    return view('index');
});
Route::get('/category/show{id}', function () {
    return view('show');
});
Route::get('/category/create', function () {
    return view('create');
});
Route::get('/category/edit{id}', function () {
    return view('edit');
});
